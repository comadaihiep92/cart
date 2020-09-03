<?php

use Tygh\Enum\NotificationSeverity;
use Tygh\Notifications\EventIdProviders\OrderProvider;
use Tygh\Registry;
use Tygh\Storage;
use Tygh\Tygh;

if (!defined('BOOTSTRAP') || ACCOUNT_TYPE!='vendor') { die('Access denied'); }

// // --- local version:
// define('NEW_UI_STATUS_PLACED', 'L'); // Placed
// define('NEW_UI_STATUS_VCONFIRMED', 'M'); // Vendor Confirmed
// define('NEW_UI_STATUS_PACKED', 'G');
// define('NEW_UI_STATUS_COMPLETE', 'C');

// define('NEW_UI_STATUS_CANCELED', 'I'); // Canceled

// define('NEW_UI_STATUS_DISPATCHED', 'H');

// define('NEW_UI_STATUS_PICKEDUP', 'P'); // Picked up (shipment)
// define('NEW_UI_STATUS_OFD', 'B'); // Out for delivery (shipment)

// --- online version:

define('NEW_UI_STATUS_PLACED', 'G'); // Placed
define('NEW_UI_STATUS_VCONFIRMED', 'E'); // Vendor Confirmed
define('NEW_UI_STATUS_PACKED', 'A');
define('NEW_UI_STATUS_COMPLETE', 'C');

define('NEW_UI_STATUS_CANCELED', 'I'); // Canceled

define('NEW_UI_STATUS_DISPATCHED', 'H');

define('NEW_UI_STATUS_PICKEDUP', 'P'); // Picked up (shipment)
define('NEW_UI_STATUS_OFD', 'B'); // Out for delivery (shipment)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $suffix = !empty($cart['order_id']) ? '.update' : '.add';

    if ($mode == 'm_delete' && !empty($_REQUEST['order_ids']) && ACCOUNT_TYPE!='vendor') {
        foreach ($_REQUEST['order_ids'] as $v) {
            fn_delete_order($v);
        }
    }
    
    if($mode == 'update_totals'){
        
        $_REQUEST=array (
          'result_ids' => 'om_ajax_*',
          'cart_products' => $_POST['cart_products'],
          'security_hash' => $_POST['security_hash'],
          'is_ajax' => '1',
          'dispatch' => 
          array (
            'new_orders.update_totals' => 'Recalculate',
          ),
        );
        
        $suffix = !empty($cart['order_id']) ? '.update' : '.add';
        
        fn_define('ORDER_MANAGEMENT', true); // Defines that the cart is in order management mode now

        Tygh::$app['session']['cart'] = isset(Tygh::$app['session']['cart']) ? Tygh::$app['session']['cart'] : array();
        $cart = & Tygh::$app['session']['cart'];

        Tygh::$app['session']['customer_auth'] = isset(Tygh::$app['session']['customer_auth']) ? Tygh::$app['session']['customer_auth'] : array();
        $customer_auth = & Tygh::$app['session']['customer_auth'];

        Tygh::$app['session']['shipping_rates'] = isset(Tygh::$app['session']['shipping_rates']) ? Tygh::$app['session']['shipping_rates'] : array();
        $shipping_rates = & Tygh::$app['session']['shipping_rates'];

        if (empty($customer_auth)) {
            $customer_auth = fn_fill_auth(array(), array(), false, 'C');
        }        
        
        fn_update_cart_by_data($cart, $_REQUEST, $customer_auth);
        
        $get_additional_statuses = false;
        if (!empty($cart['order_id'])) {
            $order_info = fn_get_order_short_info($cart['order_id']);
            $cart['order_status'] = $order_info['status'];

            if ($cart['order_status'] == STATUS_INCOMPLETED_ORDER) {
                $get_additional_statuses = true;
            }

            if (!empty($order_info['issuer_id'])) {
                $cart['issuer_data'] = fn_get_user_short_info($order_info['issuer_id']);
            }
        }
        
        $order_statuses = fn_get_simple_statuses(STATUSES_ORDER, $get_additional_statuses, true);
        Tygh::$app['view']->assign('order_statuses', $order_statuses);

        //
        // Prepare customer info
        //
        $profile_fields = fn_get_profile_fields('O', $customer_auth);

        $cart['profile_id'] = empty($cart['profile_id']) ? 0 : $cart['profile_id'];
        Tygh::$app['view']->assign('profile_fields', $profile_fields);

        //Get user profiles
        $user_profiles = fn_get_user_profiles($customer_auth['user_id']);
        Tygh::$app['view']->assign('user_profiles', $user_profiles);

        //Get countries and states
        Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
        Tygh::$app['view']->assign('states', fn_get_all_states());
        Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('type' => 'C', 'status' => array('A', 'H')), DESCR_SL));

        if (!empty($customer_auth['user_id']) && (empty($cart['user_data']) || (!empty($_REQUEST['profile_id']) && $cart['profile_id'] != $_REQUEST['profile_id']))) {
            $cart['profile_id'] = !empty($_REQUEST['profile_id']) ? $_REQUEST['profile_id'] : 0;
            $cart['user_data'] = fn_get_user_info($customer_auth['user_id'], true, $cart['profile_id']);
        }

        if (!empty($cart['user_data'])) {
            fn_filter_hidden_profile_fields($cart['user_data'], 'O');
            $cart['ship_to_another'] = fn_check_shipping_billing($cart['user_data'], $profile_fields);
        }

        //
        // Get products info
        // and shipping rates
        //

        // Clean up saved shipping rates
        // unset(Tygh::$app['session']['shipping_rates']);

        if (!empty($shipping_rates)) {
            define('CACHED_SHIPPING_RATES', true);
        }

        $cart['calculate_shipping'] = true;

        // calculate cart - get products with options, full shipping rates info and promotions
        @list ($cart_products, $product_groups) = fn_calculate_cart_content($cart, $customer_auth);

        Tygh::$app['view']->assign('product_groups', $product_groups);

        if (fn_allowed_for('MULTIVENDOR') && !empty($cart['order_id'])) {
            $order_info = fn_get_order_info($cart['order_id']);
            if (isset($order_info['company_id'])) {
                Tygh::$app['view']->assign('order_company_id', $order_info['company_id']);
            }
        }

        fn_gather_additional_products_data($cart_products, array('get_icon' => true, 'get_detailed' => true, 'get_options' => true, 'get_discounts' => false));

        Tygh::$app['view']->assign('cart_products', $cart_products);

        Tygh::$app['view']->assign('update_options', true);

        //
        //Get payment methods
        //
        $payment_methods = fn_get_payments(array('usergroup_ids' => $customer_auth['usergroup_ids']));

        // Check if payment method has surcharge rates
        foreach ($payment_methods as $k => $v) {
            if (!isset($cart['payment_id'])) {
                $cart['payment_id'] = $v['payment_id'];
            }
            $payment_methods[$k]['surcharge_value'] = 0;
            if (floatval($v['a_surcharge'])) {
                $payment_methods[$k]['surcharge_value'] += $v['a_surcharge'];
            }
            if (floatval($v['p_surcharge'])) {
                $payment_methods[$k]['surcharge_value'] += fn_format_price($cart['total'] * $v['p_surcharge'] / 100);
            }
        }

        fn_update_payment_surcharge($cart, $auth);
        if (!empty($cart['payment_surcharge'])) {
            $payment_methods[$cart['payment_id']]['surcharge_value'] = $cart['payment_surcharge'];
        }

        //Get payment method info
        if (!empty($cart['payment_id']) && isset($payment_methods[$cart['payment_id']])) {
            $payment_data = fn_get_payment_method_data($cart['payment_id']);
            Tygh::$app['view']->assign('payment_method', $payment_data);
        } elseif (!empty($payment_methods)) {
            $payment_data = fn_get_payment_method_data(reset($payment_methods)['payment_id']);
            Tygh::$app['view']->assign('payment_method', $payment_data);
        }

        Tygh::$app['view']->assign('payment_methods', $payment_methods);

        //
        // Check if order information is complete
        //
        if (fn_cart_is_empty($cart)) {
            Tygh::$app['view']->assign('is_empty_cart', true);
        }

        if (empty($cart['user_data']) || !fn_check_profile_fields($cart['user_data'], 'O', $customer_auth)) {
            Tygh::$app['view']->assign('is_empty_user_data', true);
        }

        Tygh::$app['view']->assign('is_order_management', true);

        if (!empty($order_info['storefront_id'])) {
            Tygh::$app['view']->assign('selected_storefront_id', $order_info['storefront_id']);
        } elseif (!empty($_REQUEST['storefront_id'])) {
            Tygh::$app['view']->assign('selected_storefront_id', $_REQUEST['storefront_id']);
        } else {
            /** @var \Tygh\Storefront\Repository $repository */
            $repository = Tygh::$app['storefront.repository'];

            Tygh::$app['view']->assign('selected_storefront_id', $repository->findDefault()->storefront_id);
        }
        
        die(json_encode(array('total'=>$cart['total'])));
    }

    if ($mode == 'update_details' && ACCOUNT_TYPE!='vendor') {
        fn_trusted_vars('update_order');

        fn_update_order_details($_REQUEST);

        $suffix = ".details?order_id=$_REQUEST[order_id]";
    }

    if ($mode == 'bulk_print' && !empty($_REQUEST['order_ids']) && ACCOUNT_TYPE!='vendor') {

        echo(fn_print_order_invoices($_REQUEST['order_ids'], array(
            'pdf' => Registry::get('runtime.dispatch_extra') == 'pdf')
        ));
        exit;
    }

    if ($mode == 'packing_slip' && !empty($_REQUEST['order_ids']) && ACCOUNT_TYPE!='vendor') {

        echo(fn_print_order_packing_slips($_REQUEST['order_ids'], Registry::get('runtime.dispatch_extra') == 'pdf'));
        exit;
    }

    if ($mode == 'remove_cc_info' && !empty($_REQUEST['order_ids']) && ACCOUNT_TYPE!='vendor') {

        fn_set_progress('parts', sizeof($_REQUEST['order_ids']));

        foreach ($_REQUEST['order_ids'] as $v) {
            $payment_info = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = 'P'", $v);
            fn_cleanup_payment_info($v, $payment_info);
        }

        fn_set_notification('N', __('notice'), __('done'));

        if (count($_REQUEST['order_ids']) == 1) {
            $o_id = array_pop($_REQUEST['order_ids']);
            $suffix = ".details?order_id=$o_id";
        } else {
            exit;
        }
    }

    if ($mode == 'export_range' && ACCOUNT_TYPE!='vendor') {
        if (!empty($_REQUEST['order_ids'])) {
            if (empty(Tygh::$app['session']['export_ranges'])) {
                Tygh::$app['session']['export_ranges'] = array();
            }

            if (empty(Tygh::$app['session']['export_ranges']['orders'])) {
                Tygh::$app['session']['export_ranges']['orders'] = array('pattern_id' => 'orders');
            }

            Tygh::$app['session']['export_ranges']['orders']['data'] = array('order_id' => $_REQUEST['order_ids']);

            unset($_REQUEST['redirect_url']);

            return array(CONTROLLER_STATUS_REDIRECT, 'exim.export?section=orders&pattern_id=' . Tygh::$app['session']['export_ranges']['orders']['pattern_id']);
        }
    }

    if ($mode == 'products_range' && ACCOUNT_TYPE!='vendor') {
        if (!empty($_REQUEST['order_ids'])) {
            unset($_REQUEST['redirect_url']);

            return array(CONTROLLER_STATUS_REDIRECT, 'products.manage?order_ids=' . implode(',', $_REQUEST['order_ids']));
        }
    }


    if ($mode == 'delete' && ACCOUNT_TYPE!='vendor') {
        fn_delete_order($_REQUEST['order_id']);

        return array(CONTROLLER_STATUS_REDIRECT);
    }

    if ($mode == 'update_status') {

        $order_info = fn_get_order_short_info($_REQUEST['id']);
        $old_status = $order_info['status'];
        if (fn_change_order_status($_REQUEST['id'], $_REQUEST['status'], '', fn_get_notification_rules($_REQUEST))) {
            $order_info = fn_get_order_short_info($_REQUEST['id']);
            fn_check_first_order($order_info);
            $new_status = $order_info['status'];
            if ($_REQUEST['status'] != $new_status) {
                Tygh::$app['ajax']->assign('return_status', $new_status);
                Tygh::$app['ajax']->assign('color', fn_get_status_param_value($new_status, 'color'));

                fn_set_notification('W', __('warning'), __('status_changed'));
            } else {
                fn_set_notification('N', __('notice'), __('status_changed'));
            }
        } else {
            fn_set_notification('E', __('error'), __('error_status_not_changed'));
            Tygh::$app['ajax']->assign('return_status', $old_status);
            Tygh::$app['ajax']->assign('color', fn_get_status_param_value($old_status, 'color'));
        }

        if (empty($_REQUEST['return_url'])) {
            exit;
        } else {
            return array(CONTROLLER_STATUS_REDIRECT, $_REQUEST['return_url']);
        }
    }

    if ($mode == 'modify_invoice' && ACCOUNT_TYPE!='vendor') {
        fn_trusted_vars('invoice');

        /** @var \Tygh\Mailer\Mailer $mailer */
        $mailer = Tygh::$app['mailer'];

        $order_id = (int) $_REQUEST['order_id'];

        if (Registry::get('settings.Appearance.email_templates') == 'old' || empty($order_id)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        $order_info = fn_get_order_info($order_id, false, true, true, false);

        if (empty($order_info)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        $subject = $_REQUEST['invoice']['subject'];
        $invoice = $_REQUEST['invoice']['body'];
        $email = $_REQUEST['invoice']['email'];
        $attachments = array();
        $attach_invoice = $_REQUEST['invoice']['attach'] == 'Y';

        if ($attach_invoice) {
            fn_mkdir(fn_get_files_dir_path());
            $filename = __('invoice') . '-' . $order_id . '.pdf';
            $filepath = fn_get_files_dir_path() . $filename;

            if (Pdf::render($invoice, $filepath, true)) {
                $attachments[$filename] = $filepath;
            }
        }

        $result = $mailer->send(array(
            'to' => $email,
            'from' => 'company_orders_department',
            'body' => $invoice,
            'subj' => $subject,
            'company_id' => $order_info['company_id'],
            'attachments' => $attachments
        ), 'A', CART_LANGUAGE);

        if ($result) {
            fn_set_notification('N', __('notice'), __('text_email_sent'));
        }

        foreach ($attachments as $name => $path) {
            fn_rm($path);
        }

        return array(CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $order_id);
    }

    if ($mode == 'assign_manager' && ACCOUNT_TYPE!='vendor') {
        $order_id = isset($_REQUEST['order_id']) ? (int) $_REQUEST['order_id'] : null;

        if ($order_id === null) {
            return array(CONTROLLER_STATUS_REDIRECT, 'orders.manage');
        }

        $user_id = (int) $auth['user_id'];

        $order_info = fn_get_order_short_info($order_id);
        if (isset($order_info['issuer_id']) && ($order_info['issuer_id'] === $user_id)) {
            return array(CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $order_id);
        }

        // Log order update
        fn_log_event('orders', 'update', array(
            'order_id' => $order_id,
        ));

        db_query('UPDATE ?:orders SET issuer_id = ?i WHERE order_id = ?i', $user_id, $order_id);

        return array(CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $order_id);
    }
    
    if($mode == 'stock'){
        
        // array structure:
        //$array['order_id']=115;
        //$array['products'][1434]=0;
        
        //die(json_encode($array, JSON_PRETTY_PRINT));

        $array = json_decode(file_get_contents('php://input'), true);
        
        // mark out of stock
        $result=fn_new_ui_set_order_stock($array);
        
        die($result);
        
    }elseif ($mode == 'place_order') {
        $allowed_request=array(
            'cart_products',
            'order_id',
            'dispatch',
            'security_hash'
        );
        foreach($_REQUEST as $key=>$value){
            if(!in_array($key, $allowed_request)) unset($_REQUEST["{$key}"]);
        }
        
        // get currient order info
        $order_info = fn_get_order_info($_REQUEST['order_id'], false, true, true, false);
        fn_check_first_order($order_info);
        if (empty($order_info)) {
                die('error getting order info');
        }
        $pre_products_all=$order_info['products'];
        $pre_products=array();
        foreach($pre_products_all as $key=>$value){
            if($_REQUEST['cart_products'][$key]['amount']!=$value['amount']){
                $pre_products[$key]['product_id']=$value['product_id'];
                $pre_products[$key]['amount']=$value['amount'];
            }
        }
        
        //file_put_contents('C:/projects/chfmart/totals.txt', '---CART: '.var_export($_REQUEST, true)."\r\n\r\n", FILE_APPEND);
        fn_define('ORDER_MANAGEMENT', true); // Defines that the cart is in order management mode now

        Tygh::$app['session']['cart'] = isset(Tygh::$app['session']['cart']) ? Tygh::$app['session']['cart'] : array();
        $cart = & Tygh::$app['session']['cart'];
        
        Tygh::$app['session']['cart'] = isset(Tygh::$app['session']['cart']) ? Tygh::$app['session']['cart'] : array();
        $cart = & Tygh::$app['session']['cart'];

        Tygh::$app['session']['customer_auth'] = isset(Tygh::$app['session']['customer_auth']) ? Tygh::$app['session']['customer_auth'] : array();
        $customer_auth = & Tygh::$app['session']['customer_auth'];
        
        Tygh::$app['session']['shipping_rates'] = isset(Tygh::$app['session']['shipping_rates']) ? Tygh::$app['session']['shipping_rates'] : array();
        $shipping_rates = & Tygh::$app['session']['shipping_rates']; 
        
        if (empty($customer_auth)) {
            $customer_auth = fn_fill_auth(array(), array(), false, 'C');
        }
        
        $force_notification = fn_get_notification_rules($_REQUEST);
        list($order_id, $action) = fn_place_order_manually($cart, $_REQUEST, $customer_auth, $action, $auth['user_id'], $force_notification);
        if ($order_id) {
            // save old order product(s) amount(s)
            foreach($pre_products as $key=>$value){
                $fields=array();
                $fields['order_id']=$_REQUEST['order_id'];
                $fields['product_id']=$value['product_id'];
                $fields['amount']=$value['amount'];
                db_query("REPLACE INTO ?:order_vendor_stock ?e", $fields);
            }
            
            die();
            //fn_order_placement_routines($action, $order_id, $force_notification, true);
        } else {
            die('error updating order');
            //return [CONTROLLER_STATUS_REDIRECT, 'order_management' . $suffix];
        }
    }
    
    return array(CONTROLLER_STATUS_OK, 'orders' . $suffix);
    
}else{

    if ($mode == 'manage') {
        $params['include_incompleted'] = true;

        if (fn_allowed_for('MULTIVENDOR')) {
            $params['company_name'] = true;
        }

        if (isset($params['phone'])) {
            $params['phone'] = str_replace(' ', '', preg_replace('/[^0-9\s]/', '', $params['phone']));
        }

        list($orders, $search, $totals) = fn_get_orders($params, Registry::get('settings.Appearance.admin_elements_per_page'), true);

        if (!empty($_REQUEST['redirect_if_one']) && count($orders) == 1) {
            return array(CONTROLLER_STATUS_REDIRECT, 'orders.details?order_id=' . $orders[0]['order_id']);
        }

        $company_id = fn_get_runtime_company_id();
        $shippings = fn_get_available_shippings($company_id);
        $shippings = array_column($shippings, 'shipping', 'shipping_id');

        $remove_cc = db_get_field(
            "SELECT COUNT(*)"
            . " FROM ?:status_data"
            . " WHERE status_id IN (?n)"
                . " AND param = 'remove_cc_info'"
                . " AND value = 'N'",
            array_keys(fn_get_statuses_by_type(STATUSES_ORDER))
        );
        $remove_cc = $remove_cc > 0 ? true : false;
        Tygh::$app['view']->assign('remove_cc', $remove_cc);

        Tygh::$app['view']->assign('orders', $orders);
        Tygh::$app['view']->assign('search', $search);

        Tygh::$app['view']->assign('totals', $totals);
        Tygh::$app['view']->assign('display_totals', fn_display_order_totals($orders));
        Tygh::$app['view']->assign('shippings', $shippings);

        $payments = fn_get_payments(array('simple' => true));
        Tygh::$app['view']->assign('payments', $payments);
    /* begin core edit */
        Tygh::$app['view']->assign('account_type', ACCOUNT_TYPE);
    /* end core edit */

        if (fn_allowed_for('MULTIVENDOR')) {
            Tygh::$app['view']->assign('selected_storefront_id', empty($_REQUEST['storefront_id']) ? 0 : (int) $_REQUEST['storefront_id']);
        }        
    }elseif($mode == 'get_orders'){
        if(!isset($_REQUEST['status']) || ($_REQUEST['status']!=NEW_UI_STATUS_PLACED && // Tab New 
           $_REQUEST['status']!=NEW_UI_STATUS_VCONFIRMED && // Tab Packing
           $_REQUEST['status']!=NEW_UI_STATUS_PACKED && // Tab Ready
           $_REQUEST['status']!=NEW_UI_STATUS_COMPLETE)){ // Tab Past Orders
            die();
        }else{
             if($_REQUEST['status']==NEW_UI_STATUS_COMPLETE){ // Tab Past Orders
                 
                // NEW_UI_STATUS_CANCELED
                // NEW_UI_STATUS_COMPLETE
                // NEW_UI_STATUS_PACKED
                $orders=db_get_array("SELECT ?:orders.order_id, ?:orders.issuer_id, ?:orders.user_id, ?:orders.is_parent_order, ?:orders.parent_order_id, ?:orders.company_id, ?:orders.company, ?:orders.timestamp, ?:orders.firstname, ?:orders.lastname, ?:orders.email, ?:orders.company, ?:orders.phone, ?:orders.status, ?:orders.total, CONCAT(issuers.firstname, ' ', issuers.lastname) as issuer_name, invoice_docs.doc_id as invoice_id, memo_docs.doc_id as credit_memo_id, ?:companies.company as company_name FROM ?:orders LEFT JOIN ?:users as issuers ON issuers.user_id = ?:orders.issuer_id LEFT JOIN ?:order_docs as invoice_docs ON invoice_docs.order_id = ?:orders.order_id AND invoice_docs.type = 'I' LEFT JOIN ?:order_docs as memo_docs ON memo_docs.order_id = ?:orders.order_id AND memo_docs.type = 'C' LEFT JOIN ?:companies ON ?:companies.company_id = ?:orders.company_id WHERE 1 AND ?:orders.is_parent_order != 'Y' AND ?:orders.company_id = ".fn_get_runtime_company_id()." AND 
                    ?:orders.status='".NEW_UI_STATUS_COMPLETE."' OR 
                    ?:orders.status='".NEW_UI_STATUS_CANCELED."' OR 
                    ?:orders.status='".NEW_UI_STATUS_DISPATCHED."' 
                    ORDER BY ?:orders.timestamp desc, ?:orders.order_id desc");
                foreach($orders as $order_key=>$order_value){
                    if($order_value['status']==NEW_UI_STATUS_DISPATCHED){
                        $need_to_unset=true;
                        // get shipment status
                        $shipments=db_get_array("SELECT shipment_id FROM ?:shipment_items WHERE order_id=?i", $order_value['order_id']);
                        if($shipments!==false && is_array($shipments) && count($shipments)>0){
                            foreach($shipments as $shipment){
                                $shipment_row=db_get_row("SELECT status FROM ?:shipments WHERE shipment_id=?s", $shipment['shipment_id']);
                                if($shipment_row!==false && is_array($shipment_row) && count($shipment_row)>0){
                                    if($shipment_row['status']==NEW_UI_STATUS_PICKEDUP || $shipment_row['status']==NEW_UI_STATUS_OFD){
                                        $need_to_unset=false;
                                        break;
                                    }  
                                }
                                
                            }
                            if($need_to_unset) unset($orders[$order_key]);
                        }else{
                            unset($orders[$order_key]);
                        }
                    }    
                
                    if(!isset($need_to_unset) || !$need_to_unset) $orders[$order_key]['product_count']=fn_new_ui_get_product_count($order_value['order_id']);    
                }
                $result_array=array();
                foreach($orders as $value){
                    array_push($result_array, $value);
                }
                echo json_encode($result_array, JSON_PRETTY_PRINT);
                die();

             }else{ // Rest of the tabs
                $orders=db_get_array("SELECT ?:orders.order_id, ?:orders.issuer_id, ?:orders.user_id, ?:orders.is_parent_order, ?:orders.parent_order_id, ?:orders.company_id, ?:orders.company, ?:orders.timestamp, ?:orders.firstname, ?:orders.lastname, ?:orders.email, ?:orders.company, ?:orders.phone, ?:orders.status, ?:orders.total, CONCAT(issuers.firstname, ' ', issuers.lastname) as issuer_name, invoice_docs.doc_id as invoice_id, memo_docs.doc_id as credit_memo_id, ?:companies.company as company_name FROM ?:orders LEFT JOIN ?:users as issuers ON issuers.user_id = ?:orders.issuer_id LEFT JOIN ?:order_docs as invoice_docs ON invoice_docs.order_id = ?:orders.order_id AND invoice_docs.type = 'I' LEFT JOIN ?:order_docs as memo_docs ON memo_docs.order_id = ?:orders.order_id AND memo_docs.type = 'C' LEFT JOIN ?:companies ON ?:companies.company_id = ?:orders.company_id WHERE 1 AND ?:orders.is_parent_order != 'Y' AND ?:orders.company_id = ".fn_get_runtime_company_id()." AND ?:orders.status='".$_REQUEST['status']."' ORDER BY ?:orders.timestamp desc, ?:orders.order_id desc");
                foreach($orders as $order_key=>$order_value){
                    $orders[$order_key]['product_count']=fn_new_ui_get_product_count($order_value['order_id']);    
                }
                echo json_encode($orders, JSON_PRETTY_PRINT);
                die();
             }
        }
    }elseif($mode == 'get_order'){

        if(!is_numeric($_REQUEST['order_id'])){
            die();
        }else{
            $_REQUEST['order_id'] = empty($_REQUEST['order_id']) ? 0 : $_REQUEST['order_id'];
        /* begin edit core */ 
            //$delivery_agents_array=db_get_array('SELECT agent_id, name FROM ?:delivery_agents WHERE status = ?s', 'A');
        /* end edit core */

            $order_info = fn_get_order_info($_REQUEST['order_id'], false, true, true, false);
            fn_check_first_order($order_info);

            if (empty($order_info)) {
                die();
            }

            if (!empty($order_info['is_parent_order']) && $order_info['is_parent_order'] == 'Y') {
                // Get children orders
                $children_order_ids = db_get_fields('SELECT order_id FROM ?:orders WHERE parent_order_id = ?i', $order_info['order_id']);

                return array(CONTROLLER_STATUS_REDIRECT, 'orders.manage?order_id=' . implode(',', $children_order_ids));
            }

            /*if (isset($order_info['need_shipping']) && $order_info['need_shipping']) {
                $company_id = !empty($order_info['company_id']) ? $order_info['company_id'] : null;

                $shippings = fn_get_available_shippings($company_id);
                Tygh::$app['view']->assign('shippings', $shippings);
            }*/

            $downloads_exist = false;
            
            // get order status changing history with date/time
            $i=0;
            $status_array[$i]['status']=NEW_UI_STATUS_PLACED;
            $status_array[$i]['timestamp']=$order_info['timestamp'];
            $statuses_history=db_get_array("SELECT status, timestamp FROM ?:order_vendor_status WHERE order_id=?i ORDER BY timestamp", $_REQUEST['order_id']);
            if($statuses_history!==false && is_array($statuses_history) && count($statuses_history)>0){
                foreach($statuses_history as $status_row){
                    $i++;
                    $status_array[$i]['status']=$status_row['status'];
                    $status_array[$i]['timestamp']=$status_row['timestamp'];                }                
            }
            $order_info['status_history']=$status_array;

            // get stock for product(s) of the order?
            $stock=db_get_array("SELECT product_id, amount FROM ?:order_vendor_stock WHERE order_id=?i", $_REQUEST['order_id']);
            $stock_array=array();
            if($stock!==false && is_array($stock) && count($stock)>0)
                foreach($stock as $stock_row){
                    $stock_array["{$stock_row['product_id']}"]=$stock_row['amount'];   
                }

            foreach ($order_info['products'] as $k => $v) {

                if (!$downloads_exist && !empty($v['extra']['is_edp']) && $v['extra']['is_edp'] == 'Y') {
                    $downloads_exist = true;
                }

                $order_info['products'][$k]['main_pair'] = fn_get_cart_product_icon(
                    $v['product_id'], $order_info['products'][$k]
                );
                
                if(isset($stock_array["{$v['product_id']}"])){
                    $order_info['products'][$k]['amount_stock']=$stock_array["{$v['product_id']}"];
                }else{
                    $order_info['products'][$k]['amount_stock']=''; 
                }
                
            }


            //list($shipments) = fn_get_shipments_info(array('order_id' => $params['order_id'], 'advanced_info' => true));
            //$use_shipments = !fn_one_full_shipped($shipments);

            // Check for the shipment access
            // If current edition is FREE, we still need to check shipments accessibility (need to display promotion link)
            if (!fn_check_user_access($auth['user_id'], 'edit_order')) {
                $order_info['need_shipment'] = false;
            }

//            foreach ($shipments as $shipment_key => $shipment) {
//                $order_info['shipping'][$shipment['group_key']]['shipment_keys'][] = $shipment_key;
//            }

            //Tygh::$app['view']->assign('shipments', $shipments);
            //Tygh::$app['view']->assign('use_shipments', $use_shipments);
            //Tygh::$app['view']->assign('carriers', Shippings::getCarriers());
        /* begin edit core */
            if(isset($order_info['shipping'][0]['shipping_id'])){
                $row=db_get_row("SELECT delivery_time FROM ?:shipping_descriptions WHERE shipping_id=?i", $order_info['shipping'][0]['shipping_id']);
                if(is_array($row) && isset($row['delivery_time'])){
                    $delivery_time=$row['delivery_time'];
                    $delivery_hm=explode(':', $delivery_time);
                }
            }
            $order_t=$order_info['timestamp'];

            if(isset($delivery_hm) && is_array($delivery_hm) && count($delivery_hm)==2){
                $t_order=mktime(0, 0, 0, date("n", $order_t), date("j", $order_t), date("Y", $order_t));
                if(date("H", $order_t)<23){
                    $t_tomorrow=$t_order+86400;
                    $delivery_time_full=mktime($delivery_hm[0], $delivery_hm[1], 0, date("n", $t_tomorrow), date("j", $t_tomorrow), date("Y", $t_tomorrow));
                    $order_info['delivery_timestamp']=$delivery_time_full;
                }else{
                    $t_day_after_tomorrow=$t_order+172800;
                    $delivery_time_full=mktime($delivery_hm[0], $delivery_hm[1], 0, date("n", $t_day_after_tomorrow), date("j", $t_day_after_tomorrow), date("Y", $t_day_after_tomorrow));
                    $order_info['delivery_timestamp']=$delivery_time_full;
                }
            }
            //$order_info['delivery_timestamp']=time()+10805;
        /* end edit core */    
            Tygh::$app['view']->assign('order_info', $order_info);
            Tygh::$app['view']->assign('status_settings', fn_get_status_params($order_info['status']));
        /* begin edit core */ 
            //Tygh::$app['view']->assign('account_type', ACCOUNT_TYPE);
            //Tygh::$app['view']->assign('delivery_agents', $delivery_agents_array);
        /* end edit core */ 


            // Check if customer's email is changed
//            if (!empty($order_info['user_id'])) {
//                $current_email = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", $order_info['user_id']);
//                if (!empty($current_email) && $current_email != $order_info['email']) {
//                    Tygh::$app['view']->assign('email_changed', true);
//                }
//            }
            echo json_encode($order_info, JSON_PRETTY_PRINT);
            die();
        }
    }elseif($mode=='change_status'){
        if(!is_numeric($_REQUEST['order_id'])){
            die('wrong order id');
        }else{
            if(!isset($_REQUEST['status']) || (
               $_REQUEST['status']!=NEW_UI_STATUS_VCONFIRMED &&
               $_REQUEST['status']!=NEW_UI_STATUS_PACKED)){
                die('empty or wrong status');
            }else{
                
                $order_info = fn_get_order_info($_REQUEST['order_id'], false, true, true, false);
                
                if($order_info['company_id']!=fn_get_runtime_company_id())
                    die('can not change status');
                
                if(fn_change_order_status($_REQUEST['order_id'], $_REQUEST['status'])){
                    //// record status and changing time to database table
                    //$status_data['order_id']=$_REQUEST['order_id'];
                    //$status_data['status']=$_REQUEST['status'];
                    //$status_data['timestamp']=time();
                    //db_query("REPLACE INTO ?:order_vendor_status ?e", $status_data);
                    die();
                }else{
                    die('can not change status');    
                }
            }
                
        }
    }elseif($mode=="totals_form"){
        fn_define('ORDER_MANAGEMENT', true); // Defines that the cart is in order management mode now

        Tygh::$app['session']['cart'] = isset(Tygh::$app['session']['cart']) ? Tygh::$app['session']['cart'] : array();
        $cart = & Tygh::$app['session']['cart'];
        
        Tygh::$app['session']['cart'] = isset(Tygh::$app['session']['cart']) ? Tygh::$app['session']['cart'] : array();
        $cart = & Tygh::$app['session']['cart'];

        Tygh::$app['session']['customer_auth'] = isset(Tygh::$app['session']['customer_auth']) ? Tygh::$app['session']['customer_auth'] : array();
        $customer_auth = & Tygh::$app['session']['customer_auth'];
        
        Tygh::$app['session']['shipping_rates'] = isset(Tygh::$app['session']['shipping_rates']) ? Tygh::$app['session']['shipping_rates'] : array();
        $shipping_rates = & Tygh::$app['session']['shipping_rates']; 
        
        if (empty($customer_auth)) {
            $customer_auth = fn_fill_auth(array(), array(), false, 'C');
        }
        
        ////
        
        fn_clear_cart($cart, true);
        $customer_auth = fn_fill_auth(array(), array(), false, 'C');

        $cart_status = md5(serialize($cart));
        fn_form_cart($_REQUEST['order_id'], $cart, $customer_auth, !empty($_REQUEST['copy']));

        fn_store_shipping_rates($_REQUEST['order_id'], $cart, $customer_auth);

        if ($cart_status == md5(serialize($cart))) {
            // Order info was not found or customer does not have enought permissions
            return array(CONTROLLER_STATUS_DENIED, '');
        }

        if (empty($_REQUEST['copy'])) {
            $cart['order_id'] = $_REQUEST['order_id'];
        } elseif ($_REQUEST['copy'] !== '1') {
            return array(CONTROLLER_STATUS_DENIED, '');
        }
        
        //////////////////////////////////////////////////////////
        
        //
        // Prepare order status info
        //
        $get_additional_statuses = false;
        if (!empty($cart['order_id'])) {
            $order_info = fn_get_order_short_info($cart['order_id']);
            $cart['order_status'] = $order_info['status'];

            if ($cart['order_status'] == STATUS_INCOMPLETED_ORDER) {
                $get_additional_statuses = true;
            }

            if (!empty($order_info['issuer_id'])) {
                $cart['issuer_data'] = fn_get_user_short_info($order_info['issuer_id']);
            }
        }
        $order_statuses = fn_get_simple_statuses(STATUSES_ORDER, $get_additional_statuses, true);
        Tygh::$app['view']->assign('order_statuses', $order_statuses);

        //
        // Prepare customer info
        //
        $profile_fields = fn_get_profile_fields('O', $customer_auth);

        $cart['profile_id'] = empty($cart['profile_id']) ? 0 : $cart['profile_id'];
        Tygh::$app['view']->assign('profile_fields', $profile_fields);

        //Get user profiles
        $user_profiles = fn_get_user_profiles($customer_auth['user_id']);
        Tygh::$app['view']->assign('user_profiles', $user_profiles);

        //Get countries and states
        Tygh::$app['view']->assign('countries', fn_get_simple_countries(true, CART_LANGUAGE));
        Tygh::$app['view']->assign('states', fn_get_all_states());
        Tygh::$app['view']->assign('usergroups', fn_get_usergroups(array('type' => 'C', 'status' => array('A', 'H')), DESCR_SL));

        if (!empty($customer_auth['user_id']) && (empty($cart['user_data']) || (!empty($_REQUEST['profile_id']) && $cart['profile_id'] != $_REQUEST['profile_id']))) {
            $cart['profile_id'] = !empty($_REQUEST['profile_id']) ? $_REQUEST['profile_id'] : 0;
            $cart['user_data'] = fn_get_user_info($customer_auth['user_id'], true, $cart['profile_id']);
        }

        if (!empty($cart['user_data'])) {
            fn_filter_hidden_profile_fields($cart['user_data'], 'O');
            $cart['ship_to_another'] = fn_check_shipping_billing($cart['user_data'], $profile_fields);
        }

        //
        // Get products info
        // and shipping rates
        //

        // Clean up saved shipping rates
        // unset(Tygh::$app['session']['shipping_rates']);

        if (!empty($shipping_rates)) {
            define('CACHED_SHIPPING_RATES', true);
        }

        $cart['calculate_shipping'] = true;

        // calculate cart - get products with options, full shipping rates info and promotions
        list ($cart_products, $product_groups) = fn_calculate_cart_content($cart, $customer_auth);
        Tygh::$app['view']->assign('product_groups', $product_groups);

        if (fn_allowed_for('MULTIVENDOR') && !empty($cart['order_id'])) {
            $order_info = fn_get_order_info($cart['order_id']);
            if (isset($order_info['company_id'])) {
                Tygh::$app['view']->assign('order_company_id', $order_info['company_id']);
            }
        }

        fn_gather_additional_products_data($cart_products, array('get_icon' => true, 'get_detailed' => true, 'get_options' => true, 'get_discounts' => false));

        Tygh::$app['view']->assign('cart_products', $cart_products);

        Tygh::$app['view']->assign('update_options', true);

        //
        //Get payment methods
        //
        $payment_methods = fn_get_payments(array('usergroup_ids' => $customer_auth['usergroup_ids']));

        // Check if payment method has surcharge rates
        foreach ($payment_methods as $k => $v) {
            if (!isset($cart['payment_id'])) {
                $cart['payment_id'] = $v['payment_id'];
            }
            $payment_methods[$k]['surcharge_value'] = 0;
            if (floatval($v['a_surcharge'])) {
                $payment_methods[$k]['surcharge_value'] += $v['a_surcharge'];
            }
            if (floatval($v['p_surcharge'])) {
                $payment_methods[$k]['surcharge_value'] += fn_format_price($cart['total'] * $v['p_surcharge'] / 100);
            }
        }

        fn_update_payment_surcharge($cart, $auth);
        if (!empty($cart['payment_surcharge'])) {
            $payment_methods[$cart['payment_id']]['surcharge_value'] = $cart['payment_surcharge'];
        }

        //Get payment method info
        if (!empty($cart['payment_id']) && isset($payment_methods[$cart['payment_id']])) {
            $payment_data = fn_get_payment_method_data($cart['payment_id']);
            Tygh::$app['view']->assign('payment_method', $payment_data);
        } elseif (!empty($payment_methods)) {
            $payment_data = fn_get_payment_method_data(reset($payment_methods)['payment_id']);
            Tygh::$app['view']->assign('payment_method', $payment_data);
        }

        Tygh::$app['view']->assign('payment_methods', $payment_methods);

        //
        // Check if order information is complete
        //
        if (fn_cart_is_empty($cart)) {
            Tygh::$app['view']->assign('is_empty_cart', true);
        }

        if (empty($cart['user_data']) || !fn_check_profile_fields($cart['user_data'], 'O', $customer_auth)) {
            Tygh::$app['view']->assign('is_empty_user_data', true);
        }

        Tygh::$app['view']->assign('is_order_management', true);

        if (!empty($order_info['storefront_id'])) {
            Tygh::$app['view']->assign('selected_storefront_id', $order_info['storefront_id']);
        } elseif (!empty($_REQUEST['storefront_id'])) {
            Tygh::$app['view']->assign('selected_storefront_id', $_REQUEST['storefront_id']);
        } else {
            /** @var \Tygh\Storefront\Repository $repository */
            $repository = Tygh::$app['storefront.repository'];

            Tygh::$app['view']->assign('selected_storefront_id', $repository->findDefault()->storefront_id);
        }
        Tygh::$app['view']->assign('cart', $cart);

        if (!Tygh::$app['view']->getTemplateVars('user_data') && !empty($cart['user_data'])) {
            Tygh::$app['view']->assign('user_data', $cart['user_data']);
        }

        Tygh::$app['view']->assign('customer_auth', $customer_auth);
        Tygh::$app['view']->assign('order_id', $_REQUEST['order_id']);
        Tygh::$app['view']->display('addons/new_ui/views/new_orders/totals_form.tpl');
        die();
    }
}

//
// Calculate gross total and totally paid values for the current set of orders
//
function fn_display_order_totals($orders)
{
    $result = array();
    $result['gross_total'] = 0;
    $result['totally_paid'] = 0;

    if (is_array($orders)) {
        foreach ($orders as $k => $v) {
            $result['gross_total'] += $v['total'];
            if ($v['status'] == 'C' || $v['status'] == 'P') {
                $result['totally_paid'] += $v['total'];
            }
        }
    }

    return $result;
}

function fn_print_order_packing_slips($order_ids, $pdf = false, $lang_code = CART_LANGUAGE)
{
    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];
    $html = array();

    if (!is_array($order_ids)) {
        $order_ids = array($order_ids);
    }

    if ($pdf == true) {
        fn_disable_live_editor_mode();
    }

    foreach ($order_ids as $order_id) {
        if (Registry::get('settings.Appearance.email_templates') == 'old') {
            $order_info = fn_get_order_info($order_id, false, true, false, false);

            if (empty($order_info)) {
                continue;
            }

            list($shipments) = fn_get_shipments_info(array('order_id' => $order_info['order_id'], 'advanced_info' => true));

            $view->assign('order_info', $order_info);
            $view->assign('shipments', $shipments);

            $html[] = $view->displayMail('orders/print_packing_slip.tpl', false, 'A', $order_info['company_id'], $lang_code);
        } else {
            /** @var \Tygh\Template\Document\PackingSlip\Type $packing_slip */
            $packing_slip = Tygh::$app['template.document.packing_slip.type'];
            $result = $packing_slip->renderByOrderId($order_id, $lang_code);

            if (!$result) {
                continue;
            }

            $view->assign('content', $result);
            $result = $view->displayMail('common/wrap_document.tpl', false, 'A');
            $html[] = $result;
        }
        if ($pdf == false && $order_id != end($order_ids)) {
            $html[] = "<div style='page-break-before: always;'>&nbsp;</div>";
        }
    }

    if ($pdf == true) {
        return Pdf::render($html, __('packing_slip') . '-' . implode('-', $order_ids));
    }

    return implode("\n", $html);
}

/**
 * Updates order details in the administration panel.
 *
 * @param array $params Order details
 *
 * @internal
 */
function fn_update_order_details(array $params)
{
    // Update customer's email if its changed in customer's account
    if (!empty($params['update_customer_details']) && $params['update_customer_details'] == 'Y') {
        $u_id = db_get_field("SELECT user_id FROM ?:orders WHERE order_id = ?i", $params['order_id']);
        $current_email = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", $u_id);
        db_query("UPDATE ?:orders SET email = ?s WHERE order_id = ?i", $current_email, $params['order_id']);
    }

    // Log order update
    fn_log_event('orders', 'update', array(
        'order_id' => $params['order_id'],
    ));

    db_query('UPDATE ?:orders SET ?u WHERE order_id = ?i', $params['update_order'], $params['order_id']);

    $force_notification = fn_get_notification_rules($params);

    //Update shipping info
    if (!empty($params['update_shipping'])) {
        foreach ($params['update_shipping'] as $group_key => $shipment_group) {
            foreach($shipment_group as $shipment_id => $shipment) {
                $shipment['order_id'] = $params['order_id'];
                fn_update_shipment($shipment, $shipment_id, $group_key, true, $force_notification);
            }
        }
    }

    $edp_data = array();
    $order_info = fn_get_order_info($params['order_id']);
    if (!empty($params['activate_files'])) {
        $edp_data = fn_generate_ekeys_for_edp(array(), $order_info, $params['activate_files']);
    }

    /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
    $event_dispatcher = Tygh::$app['event.dispatcher'];
    /** @var \Tygh\Notifications\Settings\Factory $notification_settings_factory */
    $notification_settings_factory = Tygh::$app['event.notification_settings.factory'];
    $notification_rules = $notification_settings_factory->create($force_notification);

    $event_dispatcher->dispatch(
        'order.updated',
        ['order_info' => $order_info],
        $notification_rules,
        new OrderProvider($order_info)
    );
    if ($edp_data) {
        $notification_rules = fn_get_edp_notification_rules($force_notification, $edp_data);
        $event_dispatcher->dispatch(
            'order.edp',
            [
                'order_info' => $order_info,
                'edp_data' => $edp_data
            ],
            $notification_rules,
            new OrderProvider($order_info, $edp_data)
        );
    }

    fn_order_notification($order_info, $edp_data, $force_notification);

    if (!empty($params['prolongate_data']) && is_array($params['prolongate_data'])) {
        foreach ($params['prolongate_data'] as $ekey => $v) {
            $newttl = fn_parse_date($v, true);
            db_query('UPDATE ?:product_file_ekeys SET ?u WHERE ekey = ?s', array('ttl' => $newttl), $ekey);
        }
    }

    // Update file downloads section
    if (!empty($params['edp_downloads'])) {
        foreach ($params['edp_downloads'] as $ekey => $v) {
            foreach ($v as $file_id => $downloads) {
                $max_downloads = db_get_field("SELECT max_downloads FROM ?:product_files WHERE file_id = ?i", $file_id);
                if (!empty($max_downloads)) {
                    db_query('UPDATE ?:product_file_ekeys SET ?u WHERE ekey = ?s', array('downloads' => $max_downloads - $downloads), $ekey);
                }
            }
        }
    }

    /**
     * Executes after order details were updated in the administration panel, allows to perform additional actions
     * like sending notifications.
     *
     * @param array $params             Order details
     * @param array $order_info         Order information
     * @param array $edp_data           Downloadable products data
     * @param array $force_notification Notification rules
     */
    fn_set_hook('update_order_details_post', $params, $order_info, $edp_data, $force_notification);
}

function fn_new_ui_get_product_count($order_id){
    $product_count=db_get_field("SELECT COUNT(product_id) AS num FROM ?:order_details WHERE order_id=?i", $order_id);
    return $product_count;
}

/**
 * Places an order from the administration panel.
 *
 * @param array  $cart               Order cart contents
 * @param array  $params             Request parameters
 * @param array  $customer_auth      Customer authentication data
 * @param string $action             Order placement action
 * @param int    $issuer_id          ID of a user who issues the order
 * @param array  $force_notification Notification rules
 *
 * @return array Order ID and the placement action
 *
 * @internal
 */
function fn_place_order_manually(&$cart, $params, $customer_auth, $action, $issuer_id, $force_notification)
{
    // Clean up saved shipping rates
    unset(Tygh::$app['session']['shipping_rates']);

    // update totals and etc.
    fn_update_cart_by_data($cart, $params, $customer_auth);

    if (!empty($params['shipping_ids'])) {
        fn_checkout_update_shipping($cart, $params['shipping_ids']);
    }

    if (empty($cart['stored_shipping'])) {
        $cart['calculate_shipping'] = true;
    }

    // fill out payment method by default if no one was chosen
    if (empty($cart['payment_id'])) {
        $cart['payment_id'] = (!empty($params['payment_id'])) ? $params['payment_id'] : 0;
    }

    if ((float) $cart['total'] == 0) {
        $cart['payment_id'] = 0;
    }

    // recalculate cart content after update
    list($cart_products, $product_groups) = fn_calculate_cart_content($cart, $customer_auth);
    fn_update_payment_surcharge($cart, $customer_auth);

    /** @var \Tygh\Storefront\Repository $repository */
    $repository = Tygh::$app['storefront.repository'];
    $default_storefront = $repository->findDefault();

    $cart['storefront_id'] = !empty($params['storefront_id']) ? $params['storefront_id'] : $default_storefront->storefront_id;

    $cart['notes'] = !empty($params['customer_notes']) ? $params['customer_notes'] : '';
    $cart['payment_info'] = !empty($params['payment_info']) ? $params['payment_info'] : array();

    list($order_id, $process_payment) = fn_place_order($cart, $customer_auth, $action, $issuer_id);

    if ($order_id) {
        if ($action != 'save') {
            $action = 'route';
        }

        $is_status_set_by_payment = false;
        if ($process_payment) {
            $payment_info = !empty($cart['payment_info'])
                ? $cart['payment_info']
                : [];
            $is_status_set_by_payment = fn_start_payment($order_id, $force_notification, $payment_info);
        }

        if (!empty($params['update_order']['details'])) {
            db_query('UPDATE ?:orders SET details = ?s WHERE order_id = ?i', $params['update_order']['details'],
                $order_id);
        }

        $requested_status = isset($params['order_status'])
            ? $params['order_status']
            : null;

        $current_status = fn_get_order_short_info($order_id)['status'];
        $is_status_change_required = $requested_status && $current_status !== $requested_status;

        // order.updated event will be triggered only when order notification wasn't set by any other means
        $is_order_placed_notification_required = true;

        // change status if it was provided
        if ($is_status_change_required) {
            if ($is_status_set_by_payment) {
                $is_order_placed_notification_required = false;
                fn_set_notification(
                    NotificationSeverity::WARNING,
                    __('warning'),
                    __('status_changed_after_process_payment')
                );
            } elseif (fn_check_permissions('orders', 'update_status', 'admin')) {
                if (fn_change_order_status($order_id, $requested_status, '', $force_notification)) {
                    $is_order_placed_notification_required = false;
                    $actual_status = fn_get_order_short_info($order_id)['status'];
                    if ($requested_status !== $actual_status) {
                        fn_set_notification(
                            NotificationSeverity::WARNING,
                            __('warning'),
                            __('status_changed')
                        );
                    }
                } else {
                    fn_set_notification(
                        NotificationSeverity::ERROR,
                        __('error'),
                        __('error_status_not_changed')
                    );
                }
            }
        }

        if ($is_order_placed_notification_required) {
            $order_info = fn_get_order_info($order_id);

            $edp_data = fn_generate_ekeys_for_edp([
                'status_from' => STATUS_INCOMPLETED_ORDER,
                'status_to'   => $order_info['status'],
            ], $order_info);

            /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
            $event_dispatcher = Tygh::$app['event.dispatcher'];
            /** @var \Tygh\Notifications\Settings\Factory $notification_settings_factory */
            $notification_settings_factory = Tygh::$app['event.notification_settings.factory'];
            $notification_rules = $notification_settings_factory->create($force_notification);

            $event_dispatcher->dispatch(
                'order.updated',
                ['order_info' => $order_info],
                $notification_rules,
                new OrderProvider($order_info)
            );
            if ($edp_data) {
                $notification_rules = fn_get_edp_notification_rules($force_notification, $edp_data);
                $event_dispatcher->dispatch(
                    'order.edp',
                    [
                        'order_info' => $order_info,
                        'edp_data' => $edp_data
                    ],
                    $notification_rules,
                    new OrderProvider($order_info, $edp_data)
                );
            }

            fn_order_notification($order_info, $edp_data, $force_notification, 'order.updated');
        }

        /**
         * Executes after an order was created in the administration panel, allows you to perform additional actions
         * and modify returned results.
         *
         * @param array  $cart                                  Order cart contents
         * @param array  $params                                Request parameters
         * @param array  $customer_auth                         Customer authentication data
         * @param string $action                                Order placement action
         * @param int    $issuer_id                             ID of a user who issues the order
         * @param array  $force_notification                    Notification rules
         * @param array  $order_info                            Order information
         * @param array  $edp_data                              Downloadable products information
         * @param bool   $is_order_placed_notification_required Whether a new order notification must be sent
         */
        fn_set_hook(
            'place_order_manually_post',
            $cart,
            $params,
            $customer_auth,
            $action,
            $issuer_id,
            $force_notification,
            $order_info,
            $edp_data,
            $is_order_placed_notification_required
        );
    }

    return [$order_id, $action];
}

