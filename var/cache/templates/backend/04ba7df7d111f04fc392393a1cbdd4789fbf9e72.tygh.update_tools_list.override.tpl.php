<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:02
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_debt_payout\hooks\products\update_tools_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20534146305f2d2082406120-99876031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ba7df7d111f04fc392393a1cbdd4789fbf9e72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\products\\update_tools_list.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20534146305f2d2082406120-99876031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2082441fc0_49419647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2082441fc0_49419647')) {function content_5f2d2082441fc0_49419647($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
