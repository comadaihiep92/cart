<?php

use Tygh\Registry;

if(ACCOUNT_TYPE=='vendor'){
// ORDERS
$schema['central']['orders']['position'] = 100;

// PRODUCTS
$products_tmp=$schema['central']['products']['items']['products']['subitems'];
$schema['central']['products']['items']=$products_tmp;
unset($schema['central']['products']['items']['products']);

// Products with Submenu
$schema['central']['products']['items']['master_products.products_being_sold'] = [
    'href'     => 'products.manage',
    'position' => 100,
];

$schema['central']['products']['items']['master_products.products_that_vendors_can_sell'] = [
    'href'     => 'products.master_products',
    'position' => 200,
];

// REPORTS
$schema['central']['reports']['position'] = 300;
$schema['central']['reports']['items']['sales_reports']=array(
    'href' => 'sales_reports.view',
    'position' => 200,
);
$schema['central']['reports']['items']['vendor_accounting']=array(
    'href' => 'companies.balance',
    'position' => 300,
);

// PROFILE
$role=fn_companies1_get_role(Tygh::$app['session']['auth']['user_id']);
if($role!==false && $role=='o'){
    $schema['central']['profile']['position'] = 400;
    $schema['central']['profile']['items']['companies1_profile']=array(
        'attrs' => array(
            'class' => 'is-addon'
        ),
        'href' => 'companies.update&company_id='.Tygh::$app['session']['auth']['company_id'],
        'position' => 2000
    );
}

// PROMOTIONS
$schema['central']['promotions']['position'] = 500;
$schema['central']['promotions']['items']['promotions']=array(
    'href' => 'promotions.manage',
    'position' => 200,
);

// HELP
$schema['central']['help']['position'] = 600;
$schema['central']['help']['items']['help']=array(
    'href' => 'vendor_help.view',
    'position' => 200,
);

// unset
unset($schema['central']['customers']);
unset($schema['central']['marketing']);
unset($schema['central']['vendors']);

/* begin apply permissions to menu */
$vendor_perm=fn_companies1_get_permissions();
// -- orders
if(!in_array('o', $vendor_perm)){
	unset($schema['central']['orders']);
}
// -- products
if(!in_array('c', $vendor_perm)){
	unset($schema['central']['products']);
}
// -- business metrics
if(!in_array('m', $vendor_perm)){
	unset($schema['central']['reports']['items']['sales_reports']);
	unset($schema['central']['reports']['items']['vendor_accounting']);
}
// -- discounts
if(!in_array('d', $vendor_perm)){
	unset($schema['central']['promotions']);
}
/* end apply permissions to menu */
}

return $schema;
