<?php

if(ACCOUNT_TYPE=='vendor'){
    if(!fn_companies1_check_permissions('d')) return array(CONTROLLER_STATUS_DENIED);
}elseif($mode=='update' && isset($_REQUEST['promotion_id']) && is_numeric($_REQUEST['promotion_id'])){
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $company_id=db_get_field("SELECT ?:storefronts_promotions.storefront_id AS company_id FROM ?:promotions, ?:storefronts_promotions WHERE ?:promotions.promotion_id=?:storefronts_promotions.promotion_id AND ?:promotions.promotion_id=?i", $_REQUEST['promotion_id']);
        if(!$company_id || $company_id<=0) return array(CONTROLLER_STATUS_DENIED);
        // get city of the company
        $company_city=db_get_field("SELECT city FROM ?:companies WHERE company_id=?i", $company_id);
        if(!$company_city || empty($company_city)) return array(CONTROLLER_STATUS_DENIED);
        // check admin city(s)
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        if(!in_array($company_city, $cities_arr)) return array(CONTROLLER_STATUS_DENIED);

    }
}

