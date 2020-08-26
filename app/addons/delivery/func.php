<?php

use Tygh\BlockManager\Block;
use Tygh\BlockManager\Layout;
use Tygh\BlockManager\ProductTabs;
use Tygh\Enum\UserTypes;
use Tygh\Enum\ObjectStatuses;
use Tygh\Languages\Languages;
use Tygh\Menu;
use Tygh\Navigation\LastView;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Tools\SecurityHelper;
use Tygh\Tools\Url;
use Tygh\Tygh;

function fn_update_delivery($delivery_data, $agent_id = 0, $lang_code = CART_LANGUAGE)
{
    $can_update = true;

    /**
     * Update company data (running before fn_update_company() function)
     *
     * @param array   $company_data Company data
     * @param int     $company_id   Company identifier
     * @param string  $lang_code    Two-letter language code (e.g. 'en', 'ru', etc.)
     * @param boolean $can_update   Flag, allows addon to forbid to create/update company
     */
    fn_set_hook('update_delivery_pre', $delivery_data, $agent_id, $lang_code, $can_update);

    if ($can_update == false) {
        return false;
    }

    array_walk($delivery_data, 'fn_trim_helper');

    SecurityHelper::sanitizeObjectData('delivery', $delivery_data);

    unset($delivery_data['agent_id']);
    $_data = $delivery_data;
    
    $_data['created']=time();

    if (fn_allowed_for('MULTIVENDOR')) {
        // Check if delivery agent with same email already exists
        $is_exist = db_get_field("SELECT phone FROM ?:delivery_agents WHERE agent_id != ?i AND phone = ?s", $agent_id, $_data['phone']);
        if (!empty($is_exist)) {
            $_text = 'error_agent_exists';
            fn_set_notification('E', __('error'), __($_text));

            return false;
        }
    }

    // add new delivery agent
    if (empty($agent_id)) {
        // delivery agent title can't be empty
        if (empty($delivery_data['name'])) {
            fn_set_notification('E', __('error'), __('error_empty_agent_name'));

            return false;
        }

        $agent_id = db_query("INSERT INTO ?:delivery_agents ?e", $_data);

        if (empty($agent_id)) {
            return false;
        }

        $_data['agent_id'] = $agent_id;

        $action = 'add';

    // update company information
    } else {
        if (isset($delivery_data['name']) && empty($delivery_data['name'])) {
            unset($delivery_data['name']);
        }

        db_query("UPDATE ?:delivery_agents SET ?u WHERE agent_id = ?i", $_data, $agent_id);

        $action = 'update';
    }


    /**
     * Update company data (running after fn_update_company() function)
     *
     * @param array  $company_data Company data
     * @param int    $company_id   Company integer identifier
     * @param string $lang_code    Two-letter language code (e.g. 'en', 'ru', etc.)
     * @param string $action       Flag determines if company was created (add) or just updated (update).
     */
    fn_set_hook('update_delivery', $delivery_data, $agent_id, $lang_code, $action);

    return $agent_id;
}

function fn_get_delivery_agents_condition($db_field = 'agent_id', $add_and = true, $agent_id = '', $show_admin = false, $force_condition_for_area_c = false)
{
    if ($agent_id === '') {
        $agent_id = Registry::ifGet('runtime.agent_id', '');
    }

    $skip_cond = AREA == 'C' && !$force_condition_for_area_c && !fn_allowed_for('ULTIMATE');

    if (!$agent_id || $skip_cond) {
        $cond = '';
    } else {
        $cond = $add_and ? ' AND' : '';
        // FIXME 2tl show admin
        if ($show_admin && $agent_id) {
            $cond .= db_quote(" $db_field IN (0, ?i)", $agent_id);
        } else {
            $cond .= db_quote(" $db_field = ?i", $agent_id);
        }
    }

    return $cond;
}

function fn_get_delivery_agents($params, &$auth, $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
    // Init filter
    $_view = 'delivery';
    $params = LastView::instance()->update($_view, $params);

    // Set default values to input params
    $default_params = array (
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    // Define fields that should be retrieved
    $fields = array (
        '?:delivery_agents.agent_id',        
        '?:delivery_agents.name',
        '?:delivery_agents.phone',
        '?:delivery_agents.email',
        '?:delivery_agents.venchile_type',
        '?:delivery_agents.status',        
        '?:delivery_agents.created',
    );

    // Define sort fields
    $sortings = array (
        'id' => '?:delivery_agents.agent_id',
        'name' => '?:delivery_agents.name',
        'email' => '?:delivery_agents.email',
        //'venchile_type' => '?:delivery_agents.venchile_type',
        'date' => '?:delivery_agents.created',
    );

    $condition = $join = $group = '';

    $condition .= fn_get_delivery_agents_condition('?:delivery_agents.agent_id');

    $group .= " GROUP BY ?:delivery_agents.agent_id";

    if (isset($params['name']) && fn_string_not_empty($params['name'])) {
        $condition .= db_quote(" AND ?:delivery_agents.name LIKE ?l", "%".trim($params['name'])."%");
    }

    if (isset($params['phone']) && fn_string_not_empty($params['phone'])) {
        $condition .= db_quote(" AND ?:delivery_agents.phone LIKE ?l", "%".trim($params['phone'])."%");
    }
    
    if (isset($params['email']) && fn_string_not_empty($params['email'])) {
        $condition .= db_quote(" AND ?:delivery_agents.email LIKE ?l", "%".trim($params['email'])."%");
    }

    if (!empty($params['agent_id'])) {
        $condition .= db_quote(' AND ?:delivery_agents.agent_id IN (?n)', $params['agent_id']);
    }

    if (!empty($params['exclude_agent_id'])) {
        $condition .= db_quote(' AND ?:delivery_agents.agent_id != ?i', $params['exclude_agent_id']);
    }

    if (!empty($params['created_from']) && !empty($params['created_to'])) {
        $condition .= db_quote(' AND ?:delivery_agents.created BETWEEN ?i AND ?i', $params['created_from'], $params['created_to']);
    }

    $sorting = db_sort($params, $sortings, 'name', 'asc');

    // Paginate search results
    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(DISTINCT(?:delivery_agents.agent_id)) FROM ?:delivery_agents $join WHERE 1 $condition");
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    if (!empty($params['get_conditions'])) {
        return array($fields, $join, $condition);
    }

    $delivery_agents = db_get_array("SELECT " . implode(', ', $fields) . " FROM ?:delivery_agents $join WHERE 1 $condition $group $sorting $limit");

    return array($delivery_agents, $params);
}
function fn_change_delivery_agent_status($agent_id, $status_to, $reason = '', &$status_from = '', $skip_query = false)
{

    if (empty($status_from)) {
        $status_from = db_get_field("SELECT status FROM ?:delivery_agents WHERE agent_id = ?i", $agent_id);
    }

    if (!in_array($status_to, array('A', 'D')) || $status_from == $status_to) {
        return false;
    }

    $result = $skip_query ? true : db_query("UPDATE ?:delivery_agents SET status = ?s WHERE agent_id = ?i", $status_to, $agent_id);

    if (!$result) {
        return false;
    }

    return $result;
}

function fn_delete_delivery_agent($agent_id)
{
    if (empty($agent_id)) {
        return false;
    }

    $can_delete = true;

/*    if (fn_allowed_for('MULTIVENDOR')) {
        // Do not delete vendor if there're any orders associated with this company
        if (db_get_field("SELECT COUNT(*) FROM ?:orders WHERE company_id = ?i", $company_id)) {
            fn_set_notification('W', __('warning'), __('unable_delete_vendor_orders_exists'), '', 'company_has_orders');
            $can_delete = false;
        }
    }*/

    if ($can_delete == false) {
        return false;
    }

    $result = db_query("DELETE FROM ?:delivery_agents WHERE agent_id = ?i", $agent_id);

    return $result;
}

function fn_delivery_access_denied_notification()
{
    fn_set_notification('W', __('warning'), __('access_denied'), '', 'delivery_access_denied');
}

function fn_get_delivery_data($agent_id, $lang_code = DESCR_SL)
{
    if (empty($agent_id)) {
        return false;
    }

    $fields = array(
        'delivery_agents.*',
    );

    $join = '';

    $condition = '';

    $delivery_data = db_get_row(
        'SELECT ' . implode(', ', $fields) . ' FROM ?:delivery_agents AS delivery_agents ?p'
        . ' WHERE delivery_agents.agent_id = ?i ?p',
        $join,
        $agent_id,
        $condition
    );

    return $delivery_data;
}

function fn_delivery_get_shipments_info_post(&$shipments, &$params){
    
    foreach($shipments as $key=>$shipment){
        
        if(isset($shipment['products']) && is_array($shipment['products'])) foreach($shipment['products'] as $product_key=>$product_value){
            $product_row = db_get_row('SELECT product_id FROM ?:shipment_items WHERE shipment_id = ?i AND item_id = ?i', $shipment['shipment_id'], $product_key);
            $ii_data_array = db_get_array('SELECT product_id, quality_check, value FROM ?:order_quality_check WHERE order_id = ?i AND shipment_id = ?i AND product_id = ?i', $shipment['order_id'], $shipment['shipment_id'], $product_row['product_id']);
            $quality_check=array();
            foreach ($ii_data_array as $ii_data_value) {
                if ($ii_data_value['quality_check'] != 'kg'){
                    if($ii_data_value['quality_check']=='wd' || $ii_data_value['quality_check']=='qs'){
                        $quality_check["{$ii_data_value['quality_check']}"] = $ii_data_value['value'];
                    }else{    
                        $quality_check["{$ii_data_value['quality_check']}"] = "1";
                    }
                }
                //else $quality_check['kg'] = $ii_data_value['value'];
            }
            // set shipment variable
            $shipments[$key]['quality_check'][$product_key]=$quality_check;
            
        }

    }
/*
    // get ChfMart Protect Options
    $ii_data_array = db_get_array('SELECT product_id, quality_check, value FROM ?:order_quality_check WHERE order_id = ?i AND shipment_id = ?i', $order['order_id']);
    $quality_check = array();

    foreach ($shipments as $item_id => $item) {
        @$ii_product_id=$item['product_id'];
        $quality_check=array();
        foreach ($ii_data_array as $ii_data_value) {
            if ($ii_data_value['product_id'] == $ii_product_id) {
                if ($ii_data_value['quality_check'] != 'kg') $quality_check[$ii_product_id]["{$ii_data_value['quality_check']}"] = "1";
                else $quality_check[$ii_product_id]['kg'] = $ii_data_value['value'];
                // set new order variable
                $order['products'][$item_id]['quality_check']=$quality_check;
            }
        }
    }*/
    
    //die(var_export($shipments, true));
    
}

function fn_delivery_get_statuses_post(&$statuses,
        &$join,
        &$condition,
        &$type,
        &$status_to_select,
        &$additional_statuses,
        &$exclude_parent,
        &$lang_code,
        &$company_id,
        &$order){
    
    /*if($type=='O' && ACCOUNT_TYPE=='vendor'){
        
        $available_statuses=array(
            'Processed',            
            'Canceled',            
            'Placed',
            'Out of stock',
            'Dispatched',
            'Open',
            'Delivered'
        );
        
        $enabled_statuses=array();
    
        foreach($statuses as $key=>$value){
            if(in_array($value['description'], $available_statuses)){
                $enabled_statuses[$key]=$value;
            }
        }
        $statuses=$enabled_statuses;
    }*/
    
    //die(var_export($statuses, true));
    
}

function fn_delivery_update_shipping_post($shipping_data, $shipping_id, $lang_code, $action){
    
    $array['shipping_id']=$shipping_id;
    $array['vendor_delivery']=$shipping_data['vendor_delivery'];
    $array['vendor_packing']=$shipping_data['vendor_packing'];
    $array['vendor_delivery_days']=$shipping_data['vendor_delivery_days'];
    $array['vendor_packing_days']=$shipping_data['vendor_packing_days'];
    
    db_query("REPLACE INTO ?:shippings_extended_time ?e", $array);
    
}

?>
