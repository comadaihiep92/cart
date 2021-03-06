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

use Tygh\Enum\Addons\VendorDataPremoderation\ProductStatuses;

defined('BOOTSTRAP') or die('Access denied');

if ($mode === 'index' && defined('AJAX_REQUEST')) {

    /** @var Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];

    $require_approval_params = $disapproved_params = [
        'only_short_fields' => true,
        'extend'            => ['companies'],
        'company_status'    => 'A',
        'get_conditions'    => true,
    ];

    $require_approval_params['status'] = ProductStatuses::REQUIRES_APPROVAL;
    $disapproved_params['status'] = ProductStatuses::DISAPPROVED;

    list(, $joins, $conditions) = fn_get_products($require_approval_params);
    $require_approval_count = db_get_field(
        'SELECT COUNT(DISTINCT products.product_id) FROM ?:products AS products ?p WHERE 1 ?p',
        $joins,
        $conditions
    );

    list(, $joins, $conditions) = fn_get_products($disapproved_params);
    $disapproved_count = db_get_field(
        'SELECT COUNT(DISTINCT products.product_id) FROM ?:products AS products ?p WHERE 1 ?p',
        $joins,
        $conditions
    );

    $view->assign([
        'vendor_data_premoderation' => [
            'require_approval_count' => $require_approval_count,
            'disapproved_count'      => $disapproved_count,
        ],
    ]);
}

return [CONTROLLER_STATUS_OK];
