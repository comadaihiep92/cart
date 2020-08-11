<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:42
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_availability.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:453552595f2d203271c363-56339920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc971f2730c200019706c81b249f1c1cd8065d56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_availability.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '453552595f2d203271c363-56339920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d203272e431_70333824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d203272e431_70333824')) {function content_5f2d203272e431_70333824($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("availability")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
