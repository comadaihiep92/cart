<?php

use Tygh\Registry;

function fn_new_ui_set_order_stock($array){
    
    if(!is_array($array)) return 'internal error[1]';
    
    if(!isset($array['order_id']) || !is_numeric($array['order_id'])) return 'invalid or empty order id';
    
    if(!isset($array['products']) || !is_array($array['products'])) return 'empty products list';
    
    // check order_id
    $cust_profile_id=db_get_field("SELECT profile_id FROM ?:orders WHERE order_id=?i AND company_id=?i AND status=?s", $array['order_id'], fn_get_runtime_company_id(), NEW_UI_STATUS_PLACED);
    if($cust_profile_id===false) return 'internal error[2]';
    
    if($cust_profile_id>0){
        // get order products info
        $products=db_get_array("SELECT product_id, price, amount FROM ?:order_details WHERE order_id=?i", $array['order_id']);
        if($products===false) return 'internal error[3]';
        if(!is_array($products) || count($products)<=0) return 'given order does not contain products';
        
        // reformat $products
        $products_arr=array();
        foreach($products as $row){
            $products_arr["{$row['product_id']}"]=array(
                'amount' => $row['amount'],
                'price' => $row['price']
            );   
        }
        
        // check post products list
        $order_to_be_canceled=true;
        foreach($array['products'] as $product_id=>$stock){
            
            if(!is_numeric($product_id)) return 'product id must be integer';
            if(!is_numeric($stock)) return 'stock number must be integer';
            
            if($stock>$products_arr[$product_id]['amount']){
                return 'stock amount must be less or equal ordered amount';
            }elseif($stock>0){
                $order_to_be_canceled=false;    
            }
        }
        
        // save out of stock to database table
        foreach($array['products'] as $product_id=>$stock){
            $db_array=array(
                'order_id' => $array['order_id'],
                'product_id' => $product_id,
                'amount' => $stock
            );
            
            db_query("REPLACE INTO ?:order_vendor_stock ?e", $db_array);
        }
        
        // order_to_be_canceled ?
        if($order_to_be_canceled){
            fn_change_order_status($array['order_id'], NEW_UI_STATUS_CANCELED, NEW_UI_STATUS_PLACED);
        }
        
        // count stock_out_amount
        $stock_out_amount=0;
        foreach($array['products'] as $product_id=>$stock){
            $amount_diff=$products_arr["{$product_id}"]['amount']-$stock;
            $amount_to_charge=$amount_diff*$products_arr["{$product_id}"]['price'];
            $stock_out_amount+=$amount_to_charge;
        }
        
        if($stock_out_amount>0){ // charge vendor % & charge back to customer's wallet
            // charge vendor %
            $percent=(float)Registry::get('addons.new_ui.vendor_penalty_percent');
            $k=$percent*0.01;
            $amount_to_charge_vendor=$stock_out_amount*$k;
            fn_new_ui_charge_vendor($amount_to_charge_vendor);
            
            // charge back to customer's wallet
            fn_new_ui_chargebak_customer($cust_profile_id, $stock_out_amount);
            
        }
        
        return '';
        
        
    }else{
        return 'order can not be fetched';
    }
    
}

function fn_new_ui_charge_vendor($amount){
    
    // check vendor_penalty_grant_period
    $t_now=time();
    $period_days=(int)Registry::get('addons.new_ui.vendor_penalty_grant_period');
    $onboard_t=db_get_field("SELECT timestamp FROM ?:companies WHERE company_id=?i", Tygh::$app['session']['auth']['company_id']);
    $t_till=$onboard_t+($period_days*86400);
    if($t_now>$t_till){
        // TODO: charge_vendor
    }
    
}

function fn_new_ui_chargebak_customer($amount){
    
    // 2DO
    
}

function fn_new_ui_schedule_ivr($order_id){
    
    // schedule vendor user ivr
    $t=time();
    $user_id=Tygh::$app['session']['auth']['user_id'];
    $user_field=db_get_field("SELECT phone FROM ?:users WHERE user_id=?i", $user_id);
    if(!empty($user_field)){
        $user_fields=array(
            'order_id'=>$order_id,
            'phone'=>$user_field,
            'created'=>$t,
            'owner'=>'U'
        );
        db_query("INSERT INTO ?:order_vendor_ivr ?e", $user_fields);
    }
    
    // schedule vendor owner ivr
    $company_id=Tygh::$app['session']['auth']['company_id'];
    $owner_field=db_get_field("SELECT phone FROM ?:companies WHERE company_id=?i", $company_id);
    if(!empty($owner_field)){
        $owner_fields=array(
            'order_id'=>$order_id,
            'phone'=>$owner_field,
            'created'=>$t,
            'owner'=>'O'
        );
        db_query("INSERT INTO ?:order_vendor_ivr ?e", $owner_fields);
    }

}

function fn_new_ui_change_order_status_post($order_id, $status_to, $status_from, $force_notification, $place_order, $order_info, $edp_data){
    
    $status_data['order_id']=$order_id;
    $status_data['status']=$status_to;
    $status_data['timestamp']=time();
    db_query("REPLACE INTO ?:order_vendor_status ?e", $status_data);
    
}


