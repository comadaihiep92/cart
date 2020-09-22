<?php

if(ACCOUNT_TYPE=='vendor'){

    if(!fn_companies1_check_permissions('c')) return array(CONTROLLER_STATUS_DENIED);
    
}elseif($mode=='update' && isset($_REQUEST['product_id']) && is_numeric($_REQUEST['product_id'])){
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $company_id=db_get_field("SELECT company_id FROM ?:products WHERE ?:products.product_id=?i", $_REQUEST['product_id']);
        if($company_id>0){
            // get city of the company
            $company_city=db_get_field("SELECT city FROM ?:companies WHERE company_id=?i", $company_id);
            if(!$company_city || empty($company_city)) return array(CONTROLLER_STATUS_DENIED);
            // check admin city(s)
            $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
            if(!in_array($company_city, $cities_arr)) return array(CONTROLLER_STATUS_DENIED);
        }

    }    
}