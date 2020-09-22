<?php

if(ACCOUNT_TYPE=='vendor'){

	if($mode=='balance'){
	
            if(!fn_companies1_check_permissions('m')) return array(CONTROLLER_STATUS_DENIED);

	}elseif($mode=='update'){
            $role=fn_companies1_get_role(Tygh::$app['session']['auth']['user_id']);
            if($role===false || $role!='o'){
                return array(CONTROLLER_STATUS_DENIED);    
            }           
        }else{

            return array(CONTROLLER_STATUS_DENIED);

        }
}elseif($mode=='update' && $_SERVER['REQUEST_METHOD'] != 'POST' && isset($_REQUEST['company_id']) && $_REQUEST['company_id']>0){ 

    // add Status label if needed
    
    $status=db_get_field("SELECT status FROM ?:companies WHERE company_id=?i", $_REQUEST['company_id']);
   
    if($status=='P'){
        $result=db_get_array("SELECT COUNT(company_id) AS num FROM ?:companies1_status WHERE company_id=?i", $_REQUEST['company_id']);
        if(is_array($result) && count($result)==1 && $result[0]['num']==1){
            Tygh::$app['view']->assign('company_status_real', 'PBV');
        }       
    }
    
}