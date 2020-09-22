<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');

}

if ($_SERVER['REQUEST_METHOD'] != 'POST' && ($mode == 'update' || $mode == 'add') && ACCOUNT_TYPE=='admin' && PERM_VIEW_POC) {
    
    if(isset($_REQUEST['user_type'])){
        $user_type=$_REQUEST['user_type'];
    }elseif($mode=='update' && !isset($_REQUEST['user_type']) && isset($_REQUEST['user_id'])){
        $user_type=db_get_field("SELECT user_type FROM ?:users WHERE user_id=?i", $_REQUEST['user_id']);
    }
    
    if($mode == 'add' && !PERM_MANAGE_POC) return;
    
    if($user_type=='A'){
        Registry::set('navigation.tabs.poc', [
            'title'=>'POC',
            'js'=>true,
        ]);
    }
}elseif($_SERVER['REQUEST_METHOD']=='POST' && $mode == 'add' && PERM_MANAGE_POC){
    fn_save_post_data('poc_data', 'update');
}
