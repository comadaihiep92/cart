<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\order_management\components\discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9263890455f2d2006d3a7d2-23036759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d859fa3c85b9c9fd20f9f1b29583fe3d5a102b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\order_management\\components\\discounts.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9263890455f2d2006d3a7d2-23036759',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2006d5a7a1_09951693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2006d5a7a1_09951693')) {function content_5f2d2006d5a7a1_09951693($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
