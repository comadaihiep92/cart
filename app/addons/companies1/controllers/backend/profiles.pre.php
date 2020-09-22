<?php

if(ACCOUNT_TYPE=='admin'){
    if ($_SERVER['REQUEST_METHOD'] != 'POST' && $mode == 'update' && ACCOUNT_TYPE=='admin' && PERM_VIEW_POC){
        if(isset($_REQUEST['user_type'])){
            $user_type=$_REQUEST['user_type'];
        }elseif(!isset($_REQUEST['user_type']) && isset($_REQUEST['user_id'])){
            $user_type=db_get_field("SELECT user_type FROM ?:users WHERE user_id=?i", $_REQUEST['user_id']);
        }
        
        if($user_type=='A'){ // get poc settings fields from database table
            
            $poc_data=fn_restore_post_data('poc_data');
            if(!is_array($poc_data) || count($poc_data)<1){
                $poc_settings=db_get_row("SELECT display_for_cities, type FROM ?:companies1_poc_settings WHERE user_id=?i", $_REQUEST['user_id']);
                if(!is_array($poc_settings) || count($poc_settings)!=2){
                    $poc_settings['display_for_cities']='';   
                    $poc_settings['type']='';   
                }
                $poc_cities=db_get_array("SELECT city FROM ?:companies1_poc_cities WHERE user_id=?i", $_REQUEST['user_id']);
                if(!is_array($poc_cities) || count($poc_cities)<1){
                    $poc_settings['cities']=''; 
                }elseif(is_array($poc_cities) && count($poc_cities)>0){
                    $cities=array();
                    foreach($poc_cities as $city) array_push($cities, $city['city']);
                    $cities_str=implode(', ', $cities);
                    $poc_settings['cities']=$cities_str;    
                }
            }else{
                $poc_settings=$poc_data;    
            }
            
            if(!isset($poc_settings['display_for_cities'])) $poc_settings['display_for_cities']='';
            
            if(is_array($poc_settings) && count($poc_settings)>0){

                Tygh::$app['view']->assign('cities', $poc_settings['cities']);
                
                if($poc_settings['display_for_cities']==1){
                    Tygh::$app['view']->assign('display_for_cities_checked', ' checked');
                }
                
                if($poc_settings['type']=='S'){
                    Tygh::$app['view']->assign('type_S_selected', ' selected');
                }elseif($poc_settings['type']=='E'){
                    Tygh::$app['view']->assign('type_E_selected', ' selected');                    
                }
                
            }
            
        }
    } elseif ($_SERVER['REQUEST_METHOD'] != 'POST' && $mode == 'add' && ACCOUNT_TYPE == 'admin' && $_REQUEST['user_type'] == 'A' && PERM_MANAGE_POC) {
        $poc_settings = fn_restore_post_data('poc_data');
        if (is_array($poc_settings) && count($poc_settings) > 0) {

            if (!isset($poc_settings['display_for_cities']))
                $poc_settings['display_for_cities'] = '';

            Tygh::$app['view']->assign('cities', $poc_settings['cities']);

            if ($poc_settings['display_for_cities'] == 1) {
                Tygh::$app['view']->assign('display_for_cities_checked', ' checked');
            }

            if ($poc_settings['type'] == 'S') {
                Tygh::$app['view']->assign('type_S_selected', ' selected');
            } elseif ($poc_settings['type'] == 'E') {
                Tygh::$app['view']->assign('type_E_selected', ' selected');
            }
        }
    }
    
}