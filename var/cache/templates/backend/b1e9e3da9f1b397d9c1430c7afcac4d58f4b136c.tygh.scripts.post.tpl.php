<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:33:14
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_plans\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8825386665f2d11ca941011-94204091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1e9e3da9f1b397d9c1430c7afcac4d58f4b136c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\index\\scripts.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8825386665f2d11ca941011-94204091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans_payments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d11ca962773_80498662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d11ca962773_80498662')) {function content_5f2d11ca962773_80498662($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['vendor_plans_payments']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo fn_url('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_plans/backend/plan.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_plans/backend/vendor.js"),$_smarty_tpl);?>

<?php }} ?>
