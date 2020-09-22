<?php

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
use Tygh\Tools\SecurityHelper;
use Tygh\Languages\Languages;

function fn_companies1_update_user($user_id, $user_data, &$auth, $ship_to_another, $notify_user)
{

    $_REQUEST['user_type']='V';
    
    fn_set_hook('update_user_pre', $user_id, $user_data, $auth, $ship_to_another, $notify_user);
    
    fn_vendor_api_key_update_user_pre($user_id, $user_data, $auth, $ship_to_another, $notify_user);
        
    array_walk($user_data, 'fn_trim_helper');
    $register_at_checkout = isset($user_data['register_at_checkout']) && $user_data['register_at_checkout'] == 'Y' ? true : false;

    $api_status_old = false;

    if (!empty($user_id)) {
        $current_user_data = db_get_row(
            "SELECT user_id, company_id, is_root, status, user_type, email, user_login, lang_code, password, salt, last_passwords"
            . " FROM ?:users WHERE user_id = ?i",
            $user_id
        );

        if (empty($current_user_data)) {
            fn_set_notification('E', __('error'), __('object_not_found', array('[object]' => __('user'))),'','404');

            return false;
        }

        /*if (!fn_check_editable_permissions($auth, $current_user_data)) {
            fn_set_notification('E', __('error'), __('access_denied'));

            return false;
        }

        if (!empty($user_data['profile_id']) && AREA != 'A') {
            $profile_ids = db_get_fields("SELECT profile_id FROM ?:user_profiles WHERE user_id = ?i", $user_id);
            if (!in_array($user_data['profile_id'], $profile_ids)) {
                fn_set_notification('W', __('warning'), __('access_denied'));

                return false;
            }
        }*/

        if ($current_user_data['user_type'] == 'A' && AREA != 'A') {
            if (
                isset($user_data['email']) && $user_data['email'] != $current_user_data['email'] // Change email
                || !empty($user_data['password1']) || !empty($user_data['password2']) // Change password
            ) {
                fn_set_notification('E', __('error'), __('error_change_admin_data_in_frontend'));

                return false;
            }
        }

        if (fn_allowed_for('ULTIMATE')) {
            if (AREA != 'A' || empty($user_data['company_id'])) {
                //we should set company_id for the frontdend, in the backend company_id received from form
                if ($current_user_data['user_type'] == 'A') {
                    if (!isset($user_data['company_id']) || AREA != 'A' || Registry::get('runtime.company_id')) {
                        // reset administrator's company if it was not set to root
                        $user_data['company_id'] = $current_user_data['company_id'];
                    }
                } elseif (Registry::get('settings.Stores.share_users') == 'Y') {
                    $user_data['company_id'] = $current_user_data['company_id'];
                } else {
                    $user_data['company_id'] = Registry::ifGet('runtime.company_id', 1);
                }
            }
        }

        if (fn_allowed_for('MULTIVENDOR')) {
            if (AREA != 'A') {
                //we should set company_id for the frontend
                $user_data['company_id'] = $current_user_data['company_id'];
            }
        }

        $api_status_old = (bool) db_get_field("SELECT api_key FROM ?:users WHERE user_id = ?i", $user_id);

        $action = 'update';
    } else {
        $current_user_data = array(
            'status' => (AREA != 'A' && Registry::get('settings.General.approve_user_profiles') == 'Y') ? 'D' : (!empty($user_data['status']) ? $user_data['status'] : 'A'),
            'user_type' => 'C', // FIXME?
        );

        $action = 'add';

        $user_data['lang_code'] = !empty($user_data['lang_code']) ? $user_data['lang_code'] : CART_LANGUAGE;
        $user_data['timestamp'] = isset($user_data['timestamp']) ? fn_parse_date($user_data['timestamp']) : TIME;
    }

    $original_password = '';
    $current_user_data['password'] = !empty($current_user_data['password']) ? $current_user_data['password'] : '';
    $current_user_data['salt'] = !empty($current_user_data['salt']) ? $current_user_data['salt'] : '';

    // Set the user type
    $user_data['user_type'] = 'V';

    /*if (
        Registry::get('runtime.company_id')
        && !fn_allowed_for('ULTIMATE')
        && (
            !fn_check_user_type_admin_area($user_data['user_type'])
            || (
                isset($current_user_data['company_id'])
                && $current_user_data['company_id'] != Registry::get('runtime.company_id')
            )
        )
    ) {
        fn_set_notification('W', __('warning'), __('access_denied'));

        return false;
    }*/

    // Check if this user needs login/password
    if (fn_user_need_login($user_data['user_type'])) {
        // Check if user_login already exists
        // FIXME
        if (!isset($user_data['email'])) {
            $user_data['email'] = db_get_field("SELECT email FROM ?:users WHERE user_id = ?i", $user_id);
        }

        $is_exist = fn_is_user_exists($user_id, $user_data);

        if ($is_exist) {
            fn_set_notification('E', __('error'), __('error_user_exists'), '', 'user_exist');

            return false;
        }
        
        // check phone number
        $is_exist2 = db_get_field('SELECT user_id FROM ?:users WHERE phone=?s AND user_id!=?i', $user_data['phone'], $user_id);

        if ($is_exist2) {
            fn_set_notification('E', __('error'), 'The phone number you have chosen already exists. Please try another one.');

            return false;
        }

        // Check the passwords
        if (!empty($user_data['password1']) || !empty($user_data['password2'])) {
            $user_data['password1'] = !empty($user_data['password1']) ? trim($user_data['password1']) : '';
            $original_password = $user_data['password1'];
            $user_data['password2'] = !empty($user_data['password2']) ? trim($user_data['password2']) : '';

        }

        // if the passwords are not set and this is not a forced password check
        // we will not update password, otherwise let's check password
        if (!empty(Tygh::$app['session']['auth']['forced_password_change']) || !empty($user_data['password1']) || !empty($user_data['password2'])) {

            $valid_passwords = true;

            if ($user_data['password1'] != $user_data['password2']) {
                $valid_passwords = false;
                fn_set_notification('E', __('error'), __('error_passwords_dont_match'));
            }

            // PCI DSS Compliance
            if (fn_check_user_type_admin_area($user_data['user_type'])) {

                $msg = array();
                // Check password length
                $min_length = Registry::get('settings.Security.min_admin_password_length');
                if (fn_strlen($user_data['password1']) < $min_length || fn_strlen($user_data['password2']) < $min_length) {
                    $valid_passwords = false;
                    $msg[] = str_replace("[number]", $min_length, __('error_password_min_symbols'));
                }

                // Check password content
                if (Registry::get('settings.Security.admin_passwords_must_contain_mix') == 'Y') {
                    $tmp_result = preg_match('/\d+/', $user_data['password1']) && preg_match('/\D+/', $user_data['password1']) && preg_match('/\d+/', $user_data['password2']) && preg_match('/\D+/', $user_data['password2']);
                    if (!$tmp_result) {
                        $valid_passwords = false;
                        $msg[] = __('error_password_content');
                    }
                }

                if ($msg) {
                    fn_set_notification('E', __('error'), implode('<br />', $msg));
                }

                // Check last 4 passwords
                if (!empty($user_id)) {
                    $prev_passwords = !empty($current_user_data['last_passwords']) ? explode(',', $current_user_data['last_passwords']) : array();

                    if (!empty(Tygh::$app['session']['auth']['forced_password_change'])) {
                        // if forced password change - new password can't be equal to current password.
                        $prev_passwords[] = $current_user_data['password'];
                    }

                    if (in_array(fn_generate_salted_password($user_data['password1'], $current_user_data['salt']), $prev_passwords)) {
                        $valid_passwords = false;
                        fn_set_notification('E', __('error'), __('error_password_was_used'));
                    } else {
                        if (count($prev_passwords) >= 5) {
                            array_shift($prev_passwords);
                        }
                        $user_data['last_passwords'] = implode(',', $prev_passwords);
                    }
                }
            } // PCI DSS Compliance

            if (!$valid_passwords) {
                return false;
            }

            $user_data['salt'] = fn_generate_salt();
            $user_data['password'] = fn_generate_salted_password($user_data['password1'], $user_data['salt']);
            if ($user_data['password'] != $current_user_data['password'] && !empty($user_id)) {
                // if user set current password - there is no necessity to update password_change_timestamp
                $user_data['password_change_timestamp'] = Tygh::$app['session']['auth']['password_change_timestamp'] = TIME;
            }
            unset(Tygh::$app['session']['auth']['forced_password_change']);
            fn_delete_notification('password_expire');

        }
    }

    $user_data['status'] = (AREA != 'A' || empty($user_data['status'])) ? $current_user_data['status'] : $user_data['status']; // only administrator can change user status

    // Fill the firstname, lastname and phone from the billing address if the profile was created or updated through the admin area.
    if (AREA == 'A' || Registry::get('settings.Checkout.address_position') == 'billing_first') {
        $main_address_zone = BILLING_ADDRESS_PREFIX;
        $alt_address_zone = SHIPPING_ADDRESS_PREFIX;
    } else {
        $main_address_zone = SHIPPING_ADDRESS_PREFIX;
        $alt_address_zone = BILLING_ADDRESS_PREFIX;
    }

    $user_data = fn_fill_contact_info_from_address($user_data, $main_address_zone, $alt_address_zone);

    if (!fn_allowed_for('ULTIMATE')) {
        //for ult company_id was set before
        fn_set_company_id($user_data);
    }

    if (!empty($current_user_data['is_root']) && $current_user_data['is_root'] == 'Y') {
        $user_data['is_root'] = 'Y';
    } else {
        $user_data['is_root'] = 'N';
    }

    // check if it is a root admin
    $is_root_admin_exists = db_get_field(
        "SELECT user_id FROM ?:users WHERE company_id = ?i AND is_root = 'Y' AND user_id != ?i",
        $user_data['company_id'], !empty($user_id) ? $user_id : 0
    );
    $user_data['is_root'] = empty($is_root_admin_exists) && $user_data['user_type'] !== 'C' ? 'Y' : 'N';

    unset($user_data['user_id']);

    if (!empty($user_data['raw_api_key'])) {
        $user_data['api_key'] = fn_generate_api_key_hash(trim($user_data['raw_api_key']));
    }

    if (!empty($user_id)) {
        db_query("UPDATE ?:users SET ?u WHERE user_id = ?i", $user_data, $user_id);

        // delete old permissions
        db_query("DELETE FROM ?:companies1_permissions WHERE user_id = ?i", $user_id);
        
        // insert permissions
        $permissions=array('orders', 'catalog', 'metrics', 'discounts', 'users');
        foreach($permissions as $permission){
            $permission_data=array();
            if($user_data[$permission]=="1"){
                $permission_data['user_id']=$user_id;
                $permission_data['permission']=$permission[0];
                db_query("INSERT INTO ?:companies1_permissions ?e" , $permission_data);
            }
        }
        
        // delete old role
        db_query("DELETE FROM ?:companies1_roles WHERE user_id = ?i", $user_id);
        
        // insert role
        $roles=array('o', 's', 'm');
        $role_data=array();
        if(in_array($user_data['role'], $roles)){
           $role_data['user_id']=$user_id;
           $role_data['role']=$user_data['role'];
           db_query("INSERT INTO ?:companies1_roles ?e" , $role_data); 
        }
        
        fn_clean_usergroup_links($user_id, $current_user_data['user_type'], $user_data['user_type']);

        fn_log_event('users', 'update', array(
            'user_id' => $user_id,
        ));
    } else {
        if (!isset($user_data['password_change_timestamp'])) {
            $user_data['password_change_timestamp'] = 1;
        }

        $user_id = db_query("INSERT INTO ?:users ?e" , $user_data);
        
        // insert permissions
        $permissions=array('orders', 'catalog', 'metrics', 'discounts', 'users');
        foreach($permissions as $permission){
            $permission_data=array();
            if($user_data[$permission]=="1"){
                $permission_data['user_id']=$user_id;
                $permission_data['permission']=$permission[0];
                db_query("INSERT INTO ?:companies1_permissions ?e" , $permission_data);
            }
        }
        
        // insert role
        $roles=array('o', 's', 'm');
        $role_data=array();
        if(in_array($user_data['role'], $roles)){
           $role_data['user_id']=$user_id;
           $role_data['role']=$user_data['role'];
           db_query("INSERT INTO ?:companies1_roles ?e" , $role_data); 
        }

        fn_log_event('users', 'create', array(
            'user_id' => $user_id,
        ));
    }
    $user_data['user_id'] = $user_id;

    // Set/delete insecure password notification
    if (AREA == 'A' && Registry::get('config.demo_mode') != true && !empty($user_data['password1'])) {
        if (!fn_compare_login_password($user_data, $user_data['password1'])) {
            fn_delete_notification('insecure_password');
        } else {
            $lang_var = 'warning_insecure_password_email';

            fn_set_notification('E', __('warning'), __($lang_var, array(
                '[link]' => fn_url("profiles.update?user_id=" . $user_id)
            )), 'K', 'insecure_password');
        }
    }

    if (empty($user_data['user_login'])) { // if we're using email as login or user type does not require login, fill login field
        db_query("UPDATE ?:users SET user_login = 'user_?i' WHERE user_id = ?i AND user_login = ''", $user_id, $user_id);
    }

    // Fill shipping info with billing if needed
    if (empty($ship_to_another)) {
        $profile_fields = fn_get_profile_fields($user_data['user_type']);
        $use_default = (AREA == 'A') ? true : false;
        fn_fill_address($user_data, $profile_fields, $use_default);
    }

    $user_data['profile_id'] = fn_update_user_profile($user_id, $user_data, $action);

    $updated_user_info = fn_get_user_info($user_id, true, $user_data['profile_id']);
    $user_data = array_merge($user_data, $updated_user_info);

    if ($register_at_checkout) {
        $user_data['register_at_checkout'] = 'Y';
    }
    $lang_code = (AREA == 'A' && !empty($user_data['lang_code'])) ? $user_data['lang_code'] : CART_LANGUAGE;

    if (!fn_allowed_for('ULTIMATE:FREE')) {
        $user_data['usergroups'] = db_get_hash_array(
            "SELECT lnk.link_id, lnk.usergroup_id, lnk.status, a.type, b.usergroup"
            . " FROM ?:usergroup_links as lnk"
            . " INNER JOIN ?:usergroups as a ON a.usergroup_id = lnk.usergroup_id AND a.status != 'D'"
            . " LEFT JOIN ?:usergroup_descriptions as b ON b.usergroup_id = a.usergroup_id AND b.lang_code = ?s"
            . " WHERE a.status = 'A' AND lnk.user_id = ?i AND lnk.status != 'D' AND lnk.status != 'F'"
            , 'usergroup_id', $lang_code, $user_id
        );
    }

    /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
    $event_dispatcher = Tygh::$app['event.dispatcher'];

    // Send notifications to customer
    if (!empty($notify_user)) {

        // Notify customer about profile activation (when update profile only)
        if ($action == 'update' && $current_user_data['status'] === 'D' && $user_data['status'] === 'A') {

            $event_dispatcher->dispatch('profile.activated.' . strtolower($user_data['user_type']), ['user_data' => $user_data]);

        } elseif ($action == 'update' && $current_user_data['status'] === 'A' && $user_data['status'] === 'D') {

            $event_dispatcher->dispatch('profile.deactivated.' . strtolower($user_data['user_type']), ['user_data' => $user_data]);
        }

        // Notify customer about profile add/update
        $prefix = ($action == 'add') ? 'create' : 'update';

        // Send password to user only if it was created by admin or vendor
        if ($action == 'add' && AREA != 'C' && $auth['user_id'] != $user_id) {
            $password = $original_password;
        } else {
            $password = null;
        }

        $api_status_new = !empty($user_data['api_key']);
        if ($api_status_new && !$api_status_old) {
            $api_access_status = 'enabled';
        } elseif ($api_status_old && !$api_status_new) {
            $api_access_status = 'disabled';
        } else {
            $api_access_status = 'unchanged';
        }

        $event_dispatcher->dispatch(sprintf('profile.%s.%s',
                ($prefix == 'create') ? 'created' : 'updated',
                strtolower($user_data['user_type'])
        ), [
            'user_data'         => $user_data,
            'password'          => $password,
            'api_access_status' => $api_access_status,
            'prefix'            => $prefix,
            'lang_code'         => $lang_code
        ]);
    }

    if ($action == 'add') {
        if (AREA != 'A') {
            if (Registry::get('settings.General.approve_user_profiles') == 'Y') {

                fn_set_notification('W', __('important'), __('text_profile_should_be_approved'));

                // Notify administrator about new profile
                $event_dispatcher->dispatch('profile.added', ['user_data' => $user_data]);

            } else {
                fn_set_notification('N', __('information'), __('text_profile_is_created'));
            }
        }

        if (!is_null($auth)) {
            if (!empty($auth['order_ids'])) {
                db_query("UPDATE ?:orders SET user_id = ?i WHERE order_id IN (?n)", $user_id, $auth['order_ids']);
            }
        }
    } else {
        if (AREA == 'C') {
            fn_set_notification('N', __('information'), __('text_profile_is_updated'), '', 'profile_updated');
        }
    }
    
    fn_vendor_api_key_update_profile($action, $user_data, $current_user_data);
    
    fn_set_hook('update_profile', $action, $user_data, $current_user_data);

    return array($user_id, !empty($user_data['profile_id']) ? $user_data['profile_id'] : false);
}

function fn_companies1_get_user($company_id, $vedor_id){
    
    if (empty($company_id) || empty($vedor_id)) {
        return false;
    }

    // get user data
    $user_data = db_get_row("SELECT phone, email, firstname FROM ?:users WHERE user_type='V' AND user_id = ?i AND company_id=?i", $company_id, $vedor_id);
    if(!$user_data){
        return false;
    }
    
    // get permissions
    $permissions_array=array('o'=>'orders', 'c'=>'catalog', 'm'=>'metrics', 'd'=>'discounts', 'u'=>'users');
    $permissions=db_get_array("SELECT permission FROM ?:companies1_permissions WHERE user_id=?i", $company_id);
    foreach($permissions as $value){
        if(isset($permissions_array["{$value['permission'][0]}"]) && !empty($permissions_array["{$value['permission'][0]}"])){
            $user_data["{$permissions_array["{$value['permission'][0]}"]}_checked"]=' checked';    
        }
    }
    
    // get role
    $role_row = db_get_row("SELECT role FROM ?:companies1_roles WHERE user_id = ?i", $company_id);
    if(isset($role_row['role'])) $user_data['role']=$role_row['role'];
    
    return $user_data;
    
}

function fn_companies1_get_users_condition($db_field = 'user_id', $add_and = true, $user_id = '', $show_admin = false, $force_condition_for_area_c = false)
{
    if ($user_id === '') {
        $user_id = Registry::ifGet('runtime.user_id', '');
    }

    $skip_cond = AREA == 'C' && !$force_condition_for_area_c && !fn_allowed_for('ULTIMATE');

    if (!$user_id || $skip_cond) {
        $cond = '';
    } else {
        $cond = $add_and ? ' AND' : '';
        // FIXME 2tl show admin
        if ($show_admin && $user_id) {
            $cond .= db_quote(" $db_field IN (0, ?i)", $user_id);
        } else {
            $cond .= db_quote(" $db_field = ?i", $user_id);
        }
    }

    return $cond;
}

function fn_companies1_get_users_int($params, &$auth, $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
    // Init filter
    $_view = 'companies1';
    $params = LastView::instance()->update($_view, $params);

    // Set default values to input params
    $default_params = array (
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    // Define fields that should be retrieved
    $fields = array (
        '?:users.user_id',        
        '?:users.firstname',
        '?:users.phone',
        '?:users.email',        
        '?:companies1_roles.role',
        '?:users.status',        
        '?:users.timestamp',
    );

    // Define sort fields
    $sortings = array (
        'id' => '?:users.agent_id',
        'firstname' => '?:users.firstname',
        'email' => '?:users.email',
        'role' => '?:companies1_roles.role',
        'date' => '?:users.timestamp',
    );

    $condition = $join = $group = '';

    $condition .= fn_companies1_get_users_condition('?:users.user_id');

    $group .= " GROUP BY ?:users.user_id";

    if (isset($params['firstname']) && fn_string_not_empty($params['firstname'])) {
        $condition .= db_quote(" AND ?:users.firstname LIKE ?l", "%".trim($params['firstname'])."%");
    }

    if (isset($params['phone']) && fn_string_not_empty($params['phone'])) {
        $condition .= db_quote(" AND ?:users.phone LIKE ?l", "%".trim($params['phone'])."%");
    }
    
    if (isset($params['email']) && fn_string_not_empty($params['email'])) {
        $condition .= db_quote(" AND ?:users.email LIKE ?l", "%".trim($params['email'])."%");
    }

    if (!empty($params['user_id'])) {
        $condition .= db_quote(' AND ?:users.user_id IN (?n)', $params['user_id']);
    }

    if (!empty($params['exclude_user_id'])) {
        $condition .= db_quote(' AND ?:users.user_id != ?i', $params['exclude_user_id']);
    }

    if (!empty($params['created_from']) && !empty($params['created_to'])) {
        $condition .= db_quote(' AND ?:users.timestamp BETWEEN ?i AND ?i', $params['created_from'], $params['created_to']);
    }

    $sorting = db_sort($params, $sortings, 'firstname', 'asc');

    // Paginate search results
    $limit = '';
    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(DISTINCT(?:users.user_id)) FROM ?:users $join WHERE company_id=?i $condition", Tygh::$app['session']['auth']['company_id']);
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    if (!empty($params['get_conditions'])) {
        return array($fields, $join, $condition);
    }

    $users = db_get_array("SELECT " . implode(', ', $fields) . " FROM ?:users, ?:companies1_roles $join WHERE ?:users.company_id=?i AND ?:users.user_id=?:companies1_roles.user_id $condition $group $sorting $limit", Tygh::$app['session']['auth']['company_id']);

    return array($users, $params);
}

function fn_companies1_delete_user($user_id)
{
    if (empty($user_id) || $user_id==Tygh::$app['session']['auth']['user_id']) {
        return false;
    }

    $can_delete = true;
    
    // delete permissions
    db_query("DELETE FROM ?:companies1_permissions WHERE user_id = ?i", $user_id);

    // delete user
    $result = db_query("DELETE FROM ?:users WHERE user_id = ?i AND company_id = ?i", $user_id, Tygh::$app['session']['auth']['company_id']);

    return $result;
}

function fn_companies1_change_user_status($user_id, $status_to, $reason = '', &$status_from = '', $skip_query = false)
{

    if($user_id==Tygh::$app['session']['auth']['user_id']){
        return false;
    }
    
    if (empty($status_from)) {
        $status_from = db_get_field("SELECT status FROM ?:users WHERE user_id = ?i", $user_id);
    }

    if (!in_array($status_to, array('A', 'D')) || $status_from == $status_to) {
        return false;
    }

    $result = $skip_query ? true : db_query("UPDATE ?:users SET status = ?s WHERE user_id = ?i", $status_to, $user_id);

    if (!$result) {
        return false;
    }

    return $result;
}

function fn_companies1_get_permissions(){
    
    $result=array();
    
    $perm_array = db_get_array("SELECT permission FROM ?:companies1_permissions WHERE user_id = ?i", Tygh::$app['session']['auth']['user_id']);
    
    if(is_array($perm_array) && count($perm_array)>0){
        foreach($perm_array as $perm){
            array_push($result, $perm['permission']);
        }
    }else{
        array_push($result, 'o');    
        array_push($result, 'c');    
        array_push($result, 'm');    
        array_push($result, 'd');    
        array_push($result, 'u');    
    }
    
    return $result;
    
}

function fn_companies1_check_permissions($perm){
    
    if(ACCOUNT_TYPE!='vendor') return true;
    
    $permissions=fn_companies1_get_permissions();
    
    if(!in_array($perm, $permissions)) return false;
    
    return true;
    
}

function fn_companies1_check_main_user($user_id){
    $permissions=db_get_array("SELECT permission FROM ?:companies1_permissions WHERE user_id=?i", $user_id);

    if(!$permissions || (is_array($permissions) && count($permissions)==0)){
        return true;
    }
    return false;
}

function fn_companies1_get_role($user_id){
    
    $role_row = db_get_row("SELECT role FROM ?:companies1_roles WHERE user_id = ?i", $user_id);
    if(is_array($role_row) && isset($role_row['role']) && $role_row['role']=='o'){
        return $role_row['role'];
    }else{
        // check if given user is main admin of given vendor
        if(fn_companies1_check_main_user($user_id)) return 'o';
        return false;
    }
    return false;
}

function fn_companies1_get_status($company_id){
    $status=db_get_field("SELECT status FROM ?:companies WHERE company_id=?i", $company_id);
    if($status=='D') return 'D';
    
    if($status=='P'){
        $result=db_get_array("SELECT COUNT(company_id) AS num FROM ?:companies1_status WHERE company_id=?i", $company_id);
        if(is_array($result) && count($result)==1 && $result[0]['num']==1){
            return 'P';
        }else{
            return 'D';
        }        
    }
    
    return $status;
}

function fn_companies1_update_status($company_id, $status){
    if($status=='Y') $status='P'; else $status='A';
    
    $cur_status=fn_companies1_get_status($company_id);
    
    if($cur_status=='P' && $status!='A') return false;
    if($cur_status=='A' && $status!='P') return false;
    
    if($cur_status=='P'){
        $result=db_get_array("SELECT COUNT(company_id) AS num FROM ?:companies1_status WHERE company_id=?i", $company_id);
        if(is_array($result) && count($result)==1){
            db_query("UPDATE ?:companies SET status=?s WHERE company_id=?i", $status, $company_id);
            db_query("DELETE FROM ?:companies1_status WHERE company_id=?i", $company_id);
        }else{
            return false;    
        }
    }elseif($cur_status=='A'){
        db_query("UPDATE ?:companies SET status=?s WHERE company_id=?i", $status, $company_id);
        db_query("INSERT INTO ?:companies1_status (company_id) VALUES (?i)", $company_id);
    }else{
        return false;
    }
    return true;
}

function fn_companies1_update_company($company_data, $company_id, $lang_code, $action){
    
    if($company_data['status']!='P'){
        db_query("DELETE FROM ?:companies1_status WHERE company_id=?i", $company_id);
    }
    
}

function fn_companies1_update_profile($action, $user_data, $current_user_data){
    
    if(ACCOUNT_TYPE=='admin' && $user_data['user_type']=='A' && PERM_MANAGE_POC){
        
        if(isset($_REQUEST['poc_data']) && isset($user_data['user_id']) && $user_data['user_id']>0){
            $display_for_cities=$type='';
            
            if(!isset($_REQUEST['poc_data']['cities']) || empty($_REQUEST['poc_data']['cities'])){
                db_query("DELETE FROM ?:companies1_poc_settings WHERE user_id=?i", $user_data['user_id']);
                fn_save_post_data('poc_data', 'update');
                fn_set_notification('E', __('error'), 'POC Assigned City(s) can not be empty');
                return;
            }
            
            $cities=explode(',', $_REQUEST['poc_data']['cities']);
            $cities_filtered=array();
            foreach($cities as $city){
                $city=trim($city);
                $is_city=db_get_field("SELECT COUNT(element_id) AS num FROM ?:destination_elements WHERE destination_id=?i AND element_type=?s AND element=?s", CITIES_DEST_ID, CITIES_ELEM_TYPE, $city);
                if($is_city==1) array_push($cities_filtered, $city);
            }
            
            if(count($cities)!=count($cities_filtered)){
                fn_save_post_data('poc_data', 'update');
                fn_set_notification('E', __('error'), 'Some city(s) in POC Assigned City(s) field is incorrect.');
                return;
            }
            
            db_query("DELETE FROM ?:companies1_poc_cities WHERE user_id=?i", $user_data['user_id']);
            foreach($cities_filtered as $city){
                db_query("INSERT INTO ?:companies1_poc_cities (user_id, city) VALUES(?i, ?s)", $user_data['user_id'], $city);
            }
            
            if(isset($_REQUEST['poc_data']['display_for_cities']) && $_REQUEST['poc_data']['display_for_cities']=='1'){
                $display_for_cities=1;
            }
            if(isset($_REQUEST['poc_data']['type']) && 
               ($_REQUEST['poc_data']['type']=='S' || $_REQUEST['poc_data']['type']=='E' || $_REQUEST['poc_data']['type']=='')){
                $type=$_REQUEST['poc_data']['type'];
            }
            
            db_query("REPLACE INTO ?:companies1_poc_settings (user_id, display_for_cities, type) VALUES(?i, ?i, ?s)", $user_data['user_id'], $display_for_cities, $type);
            fn_restore_post_data('poc_data');
        }
        
    }
}

function fn_companies1_post_delete_user($user_id, $user_data, $result){
    
    if($user_id<=0 || $result<=0) return;
    db_query("DELETE FROM ?:companies1_poc_cities WHERE user_id=?i", $user_id);
    db_query("DELETE FROM ?:companies1_poc_settings WHERE user_id=?i", $user_id);
    
}

function fn_companies1_get_user_cities($user_id) {
    $poc_cities = db_get_array("SELECT city FROM ?:companies1_poc_cities WHERE user_id=?i", $user_id);
    if (!is_array($poc_cities) || count($poc_cities) < 1) {
        return array();
    } else {
        $cities=array();
        foreach($poc_cities as $poc_city){
            array_push($cities, $poc_city['city']);
        }
        return $cities;
    }
}

function fn_companies1_get_orders($params, $fields, $sortings, &$condition, $join, $group){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        $condition.=" AND ?:orders.s_city IN (".  implode(', ', $cities_str_arr).")";
    }
    
}

function fn_companies1_get_order_info($order, $additional_data){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        
        if(!in_array($order['s_city'], $cities_arr)){
            die('Forbidden');
        }
        
    }
    
}

function fn_companies1_get_users($params, $fields, $sortings, &$condition, $join, $auth){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        
        $condition['acp_city']=" AND ?:user_profiles.s_city IN (".  implode(', ', $cities_str_arr).")";
        
    }
    
}

function fn_companies1_get_user_info_pre($user_id, $get_profile, $profile_id){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        $user_city=db_get_field("SELECT s_city FROM ?:user_profiles WHERE user_id=?i", $user_id);
        if(!$user_city || empty($user_city)) die('Forbidden');
        
        if(!in_array($user_city, $cities_arr)){
            die('Forbidden');
        }
        
    }    
}

function fn_companies1_get_companies($params, $fields, $sortings, &$condition, $join, $auth, $lang_code, $group){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        
        if(count($cities_str_arr)>0) $condition.=" AND ?:companies.city IN (".  implode(', ', $cities_str_arr).")";
        
    }
    
}

function fn_companies1_get_company_data($company_id, $lang_code, $extra, $fields, $join, &$condition){
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        
        if(count($cities_str_arr)>0) $condition.=" AND companies.city IN (".  implode(', ', $cities_str_arr).")";
        
    }
    
}

function fn_companies1_get_promotions($params, $fields, $sortings, &$condition, &$join, $group, $lang_code){
    
    if(ACCOUNT_TYPE=='vendor') return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        
        
        $join.=" LEFT JOIN ?:storefronts_promotions ON ?:promotions.promotion_id=?:storefronts_promotions.promotion_id LEFT JOIN ?:companies ON ?:storefronts_promotions.storefront_id=?:companies.company_id";
        $condition.=" AND ?:companies.city IN (".implode(', ', $cities_str_arr).")";
        
    }
    
}

function fn_companies1_get_products($params, $fields, $sortings, &$condition, $join, $sorting, $group_by, $lang_code, $having){
    
    if(ACCOUNT_TYPE=='vendor' || 
      (isset($params['show_master_products_only']) && $params['show_master_products_only']===true)) 
      return;
    
    $usergroups=fn_get_user_usergroup_links(Tygh::$app['session']['auth']['user_id']);
    $is_usergroup=false;
    foreach($usergroups as $ug){
        if($ug['usergroup_id']==PERM_USER_GROUP_ID) $is_usergroup=true;
    }
    
    if($is_usergroup){
        $cities_arr=fn_companies1_get_user_cities(Tygh::$app['session']['auth']['user_id']);
        $cities_str_arr=array();
        foreach($cities_arr as $city){
            array_push($cities_str_arr, "'".$city."'");
        }
        
        $condition.=" AND companies.city IN (".implode(', ', $cities_str_arr).")";
    }    
}