<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

define('CITIES_DEST_ID', 9);
define('CITIES_ELEM_TYPE', 'T');

define('PERM_USER_GROUP_ID', 8);

define('PERM_VIEW_POC', fn_check_user_access(Tygh::$app['session']['auth']['user_id'], 'view_poc'));
define('PERM_MANAGE_POC', fn_check_user_access(Tygh::$app['session']['auth']['user_id'], 'manage_poc'));

fn_register_hooks(
    'update_company',
    'update_profile',
    'post_delete_user',
    'get_orders',
    'get_order_info',
    'get_users',
    'get_user_info_pre',
    'get_companies',
    'get_company_data',
    'get_promotions',
    'get_products'
);
