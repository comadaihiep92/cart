<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:37
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_debt_payout\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10022807325f2d202d9ef669-58456959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36378685463668a5d0d1eb1eed683226c41cc5dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\products\\categories_section.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10022807325f2d202d9ef669-58456959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202da02f12_00016486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202da02f12_00016486')) {function content_5f2d202da02f12_00016486($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
