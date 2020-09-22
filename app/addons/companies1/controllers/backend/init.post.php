<?php

if(ACCOUNT_TYPE=='vendor'){
    
    $vendor_perm=fn_companies1_get_permissions();
    
    // -- vendor users management
    if(in_array('u', $vendor_perm)){
        define('VENDOR_PERM_MANAGE_USERS', 'Y');
    }else{
        define('VENDOR_PERM_MANAGE_USERS', '');        
    }
    
    // get company status
    $user_perm=fn_companies1_check_permissions('o');
    $user_role=fn_companies1_get_role(Tygh::$app['session']['auth']['user_id']);
    Tygh::$app['view']->assign('vendor_user_perm', $user_perm);
    Tygh::$app['view']->assign('vendor_user_role', $user_role);
    if($user_perm || $user_role=='o'){
    
        Tygh::$app['view']->assign('company_id', Tygh::$app['session']['auth']['company_id']);
        Tygh::$app['view']->assign('return_url', 'companies1.manage');
        $company_status=fn_companies1_get_status(Tygh::$app['session']['auth']['company_id']);
        Tygh::$app['view']->assign('company_status_real', $company_status);
        if($company_status=='A'){
            Tygh::$app['view']->assign('company_status', 'N');    
        }else{
            Tygh::$app['view']->assign('company_status', 'Y');            
        }
    }
}