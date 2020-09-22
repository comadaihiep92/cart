<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\BlockManager\Layout;
use Tygh\Common\Robots;
use Tygh\Enum\ProductTracking;
use Tygh\Enum\ProfileTypes;
use Tygh\Enum\StorefrontStatuses;
use Tygh\Helpdesk;
use Tygh\Navigation\LastView;
use Tygh\Providers\VendorServicesProvider;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Themes\Styles;
use Tygh\Themes\Themes;
use Tygh\Tools\DateTimeHelper;
use Tygh\Tygh;
use Tygh\VendorPayouts;

if (!defined('BOOTSTRAP')) { die('Access denied'); }
if (ACCOUNT_TYPE!='vendor') { die('Access denied'); }

$roles_array=array('o', 's', 'm');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $suffix = '';

    //
    // Processing additon of new company
    //
    if ($mode == 'add') {

        $suffix = '.add';
        
        // Checking for required fields for new vendor user
        if ((!empty($_REQUEST['companies1_data']['role']) && in_array($_REQUEST['companies1_data']['role'], $roles_array)) &&
            !empty($_REQUEST['companies1_data']['firstname']) &&
            !empty($_REQUEST['companies1_data']['email']) &&
            !empty($_REQUEST['companies1_data']['phone'])) {
            
            $phone=fn_companies1_check_phone($_REQUEST['companies1_data']['phone']);
            if($phone===false){
                fn_set_notification('E', __('error'), 'Phone number you entered is incorrect. Please enter valid mobile phone number in India.'); 
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.add';
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }                  
            }else{
                $_REQUEST['companies1_data']['phone']=$phone;   
            }
            
            $_REQUEST['companies1_data']['password1']=$_REQUEST['companies1_data']['password2']=fn_companies1_rand_string(8);
            
            /*
            $_POST['companies1_data']['password1']=$_POST['companies1_data']['password2']='';
            
            // check if passwords are equal
            if($_REQUEST['companies1_data']['password1']!=$_REQUEST['companies1_data']['password2']){
                fn_set_notification('E', __('error'), 'Passwords are not equal.');
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.add';
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }
            }
            */
            // check if permissions set
            if((!isset($_REQUEST['companies1_data']['orders']) || $_REQUEST['companies1_data']['orders']!="1") &&
               (!isset($_REQUEST['companies1_data']['catalog']) || $_REQUEST['companies1_data']['catalog']!="1") &&
               (!isset($_REQUEST['companies1_data']['metrics']) || $_REQUEST['companies1_data']['metrics']!="1") &&
               (!isset($_REQUEST['companies1_data']['discounts']) || $_REQUEST['companies1_data']['discounts']!="1") &&
               (!isset($_REQUEST['companies1_data']['users']) || $_REQUEST['companies1_data']['users']!="1")){
                fn_set_notification('E', __('error'), 'Please select at least one permission.'); 
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.add';
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }                
            }
                
            
            $_REQUEST['companies1_data']['company_id']=Tygh::$app['session']['auth']['company_id'];
            $user_id = fn_companies1_update_user(
                    '',
                    $_REQUEST['companies1_data'],
                    $auth,
                    false,
                    true);
            
            if (!empty($user_id)) {

                $redirect_url = '/vendor.php?dispatch=companies1.manage';
                        
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }
                
            } else {
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.add';
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }   
            }
        }


    }

    //
    // Processing updating of company element
    //
    if ($mode == 'update') {

        // Checking for required fields for new vendor user
        if ((!empty($_REQUEST['companies1_data']['role']) && in_array($_REQUEST['companies1_data']['role'], $roles_array)) &&
            !empty($_REQUEST['companies1_data']['firstname']) &&
            !empty($_REQUEST['companies1_data']['email']) &&
            !empty($_REQUEST['companies1_data']['phone'])) {
            
            $phone=fn_companies1_check_phone($_REQUEST['companies1_data']['phone']);
            if($phone===false){
                fn_set_notification('E', __('error'), 'Phone number you entered is incorrect. Please enter valid mobile phone number in India.'); 
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.add';
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }                  
            }else{
                $_REQUEST['companies1_data']['phone']=$phone;   
            }            
            /*
            $_POST['companies1_data']['password1']=$_POST['companies1_data']['password2']='';
            
            // check if passwords are equal
            if(isset($_REQUEST['companies1_data']['password1']) && !empty($_REQUEST['companies1_data']['password1'])){
                if($_REQUEST['companies1_data']['password1']!=$_REQUEST['companies1_data']['password2']){
                    fn_set_notification('E', __('error'), 'Passwords are not equal.');
                    fn_save_post_data('companies1_data', 'update');
                    $redirect_url = '/vendor.php?dispatch=companies1.update&company_id='.$_REQUEST['company_id'];
                    if (defined('AJAX_REQUEST')) {
                        Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                        Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                        exit();
                    }
                }
            }
            */
            // check if permissions set
            if((!isset($_REQUEST['companies1_data']['orders']) || $_REQUEST['companies1_data']['orders']!="1") &&
               (!isset($_REQUEST['companies1_data']['catalog']) || $_REQUEST['companies1_data']['catalog']!="1") &&
               (!isset($_REQUEST['companies1_data']['metrics']) || $_REQUEST['companies1_data']['metrics']!="1") &&
               (!isset($_REQUEST['companies1_data']['discounts']) || $_REQUEST['companies1_data']['discounts']!="1") &&
               (!isset($_REQUEST['companies1_data']['users']) || $_REQUEST['companies1_data']['users']!="1")){
                fn_set_notification('E', __('error'), 'Please select at least one permission.'); 
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.update&company_id='.$_REQUEST['company_id'];
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }                
            }
                
            $company_id=$_REQUEST['company_id'];
            $_REQUEST['companies1_data']['company_id']=Tygh::$app['session']['auth']['company_id'];
            $user_id = fn_companies1_update_user(
                    $company_id,
                    $_REQUEST['companies1_data'],
                    $auth,
                    false,
                    false);
            
            if (!empty($user_id)) {

                $redirect_url = '/vendor.php?dispatch=companies1.manage';
                        
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }
                
            } else {
                fn_save_post_data('companies1_data', 'update');
                $redirect_url = '/vendor.php?dispatch=companies1.update&company_id='.$company_id;
                if (defined('AJAX_REQUEST')) {
                    Tygh::$app['ajax']->assign('non_ajax_notifications', true);
                    Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

                    exit();
                }   
            }
        }
    }
    
    if ($mode === 'update_vendor_status') {
        $params = array_merge([
            'company_id' => 0,
            'status'        => null,
            'return_url'    => '',
        ], $_REQUEST);

        $result=fn_companies1_update_status(Tygh::$app['session']['auth']['company_id'], $params['status']);
        
        if ($result) {
            fn_set_notification(
                'W',
                __('information'),
                "Vendor status has been changed."
            );
        }

        $redirect_url = 'vendor.php';
        if (defined('AJAX_REQUEST')) {
            Tygh::$app['ajax']->assign('non_ajax_notifications', true);
            Tygh::$app['ajax']->assign('force_redirection', fn_url($redirect_url));

            exit();
        }                
        
        /*
        if (defined('AJAX_REQUEST')) {
            $ajax = Tygh::$app['ajax'];
            $ajax->assign('result', $result);
        }
        */
        return [CONTROLLER_STATUS_OK, urldecode($params['return_url'])];
    }

    if ($mode == 'delete') {

        fn_delete_user($_REQUEST['user_id']);
        //fn_companies1_delete_user($_REQUEST['user_id']);

        return array(CONTROLLER_STATUS_REDIRECT, 'companies1.manage');
    }

}

if ($mode == 'manage') {
    
    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];
    if (fn_allowed_for('MULTIVENDOR')) {
        fn_companies1_set_navigation_sections('companies1');
    }
    
    $params = $_REQUEST;
    
    list($vendor_users, $search) = fn_companies1_get_users_int($params, $auth, Registry::get('settings.Appearance.admin_elements_per_page'));

    foreach($vendor_users as $key=>$value){
        if($value['role']=="o") $vendor_users[$key]['role']='Owner';
        elseif($value['role']=="s") $vendor_users[$key]['role']='Store Manager';
        elseif($value['role']=="m") $vendor_users[$key]['role']='Order Manager';
        
    }
    
    $view->assign([
        'vendor_users' => $vendor_users,
        'search'    => $search,
    ]);

} elseif ($mode == 'update' || $mode == 'add') {
 
    if($mode == 'update' && isset($_GET['company_id'])){
        
        $company_id = !empty($_REQUEST['company_id']) ? $_REQUEST['company_id'] : 0;
        $companies1_data = $extra = array();
        
        if ($company_id) {
            $companies1_data=fn_restore_post_data('companies1_data');
            if(!is_array($companies1_data) || count($companies1_data)<1){
                $companies1_data = fn_companies1_get_user($company_id, Tygh::$app['session']['auth']['company_id']);
            }
            // role
            if(isset($companies1_data['role'])){
                if($companies1_data['role']=="o") $companies1_data['o_selected']=' selected';
                elseif($companies1_data['role']=="s") $companies1_data['s_selected']=' selected';
                elseif($companies1_data['role']=="m") $companies1_data['m_selected']=' selected';
            }
            // permissions
            if(isset($companies1_data['orders']) && $companies1_data['orders']=="1") $companies1_data['orders_checked']=' checked';
            if(isset($companies1_data['catalog']) && $companies1_data['catalog']=="1") $companies1_data['catalog_checked']=' checked';
            if(isset($companies1_data['metrics']) && $companies1_data['metrics']=="1") $companies1_data['metrics_checked']=' checked';
            if(isset($companies1_data['discounts']) && $companies1_data['discounts']=="1") $companies1_data['discounts_checked']=' checked';
            if(isset($companies1_data['users']) && $companies1_data['users']=="1") $companies1_data['users_checked']=' checked';
        }

        if ($mode == 'update' && empty($companies1_data)) {
            return array(CONTROLLER_STATUS_NO_PAGE);
        }

        // vendor user edit form
        Tygh::$app['view']->assign('h2_tile', 'Editing vendor user');
        Tygh::$app['view']->assign('h2_company_name', $companies1_data['firstname']);
        Tygh::$app['view']->assign('action_button', 'Save');
        Tygh::$app['view']->assign('action', 'update');
        Tygh::$app['view']->assign('company_id', $company_id);
        Tygh::$app['view']->assign('companies1_data', $companies1_data);
        
    }else{
        
        // display vendor user add form
        $companies1_data=fn_restore_post_data('companies1_data');
        // role
        if(isset($companies1_data['role'])){ 
            if($companies1_data['role']=="o") $companies1_data['o_selected']=' selected';
            elseif($companies1_data['role']=="s") $companies1_data['s_selected']=' selected';
            elseif($companies1_data['role']=="m") $companies1_data['m_selected']=' selected';
        }
        // permissions
        if(isset($companies1_data['orders']) && $companies1_data['orders']=="1") $companies1_data['orders_checked']=' checked';
        if(isset($companies1_data['catalog']) && $companies1_data['catalog']=="1") $companies1_data['catalog_checked']=' checked';
        if(isset($companies1_data['metrics']) && $companies1_data['metrics']=="1") $companies1_data['metrics_checked']=' checked';
        if(isset($companies1_data['discounts']) && $companies1_data['discounts']=="1") $companies1_data['discounts_checked']=' checked';
        if(isset($companies1_data['users']) && $companies1_data['users']=="1") $companies1_data['users_checked']=' checked';
        
        if(isset($companies1_data) && is_array($companies1_data)){
            Tygh::$app['view']->assign('companies1_data', $companies1_data);
        }
        Tygh::$app['view']->assign('h2_tile', 'New vendor user');
        Tygh::$app['view']->assign('action_button', 'Create');
        Tygh::$app['view']->assign('action', 'add');
        Tygh::$app['view']->assign('company_id', 0);
    }
    
}elseif ($mode == 'update_status') {
    
        if (fn_companies1_change_user_status($_REQUEST['id'], $_REQUEST['status'], '', $status_from, false)) {
            fn_set_notification('N', __('notice'), __('status_changed'));
        } else {
            fn_set_notification('E', __('error'), __('error_status_not_changed'));
            Tygh::$app['ajax']->assign('return_status', $status_from);
        }
        if (!empty($_REQUEST['return_url'])) {
            return array(CONTROLLER_STATUS_REDIRECT, $_REQUEST['return_url']);
        }
        exit;
}elseif ($mode == 'delete') {

    fn_delete_user($_REQUEST['user_id']);
    fn_companies1_delete_user($_REQUEST['user_id']);

    return array(CONTROLLER_STATUS_REDIRECT, 'companies1.manage');
    
}elseif ($mode == 'm_delete') {

        if (!empty($_REQUEST['companies1_users_ids'])) {
            foreach ($_REQUEST['companies1_users_ids'] as $user_id) {
                fn_delete_user($user_id);
                fn_companies1_delete_user($user_id);
            }
        }

        return array(CONTROLLER_STATUS_OK, 'companies1.manage');
}

function fn_companies1_set_navigation_sections($active_section)
{

    Registry::set('navigation.dynamic.active_section', $active_section);
}

function fn_companies1_rand_string($length) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

function fn_companies1_check_phone($phone){
    $phone=str_replace('(', '', $phone);
    $phone=str_replace(')', '', $phone);
    $phone=str_replace('-', '', $phone);
    
    if(preg_match("/\+([0-9]{12})/", $phone, $arr)){
        if($arr[1][0]=='9' && $arr[1][1]=='1'){
            return $phone;
        }else{
            return false;
        }
    }else{
        // add Indian code to phone
        if(strlen($phone)==10){
            $phone='91'.$phone;
            if(!is_numeric($phone)){
                return false;
            }
            return '+'.$phone;
        }else{
            return false;  
        }
    }

}

