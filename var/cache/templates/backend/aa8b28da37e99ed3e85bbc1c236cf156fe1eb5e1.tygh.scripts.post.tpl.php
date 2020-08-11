<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:33:14
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14601126725f2d11ca892e92-87007355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8b28da37e99ed3e85bbc1c236cf156fe1eb5e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\index\\scripts.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14601126725f2d11ca892e92-87007355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_pre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d11ca8c9a28_18420546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d11ca8c9a28_18420546')) {function content_5f2d11ca8c9a28_18420546($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_vendor_profile_changes_notice'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
	_.tr({
		text_vendor_profile_changes_notice: '<?php echo strtr($_smarty_tpl->__("text_vendor_profile_changes_notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
	});
	_.vendor_pre = '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['vendor_pre']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
';
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo smarty_function_script(array('src'=>"js/addons/vendor_data_premoderation/func.js"),$_smarty_tpl);?>


<?php }} ?>
