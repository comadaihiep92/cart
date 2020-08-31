<?php /* Smarty version Smarty-3.1.21, created on 2020-08-26 12:07:44
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\new_ui\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7750842355f46266076cf92-05517717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '964530b9d4f1c378e0b235e06c92d5f014453b27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\new_ui\\hooks\\index\\styles.post.tpl',
      1 => 1598005471,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7750842355f46266076cf92-05517717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f462660832a64_09340700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f462660832a64_09340700')) {function content_5f462660832a64_09340700($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.style.php';
?><?php if (@constant('ACCOUNT_TYPE')=="vendor") {?>
	<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='new_orders'&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=='manage') {?>
		<?php echo smarty_function_style(array('src'=>"addons/new_ui/new_orders.less"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_style(array('src'=>"addons/new_ui/orders.less"),$_smarty_tpl);?>

	<?php }?>
<?php } elseif (@constant('ACCOUNT_TYPE')=="admin") {?>
	<?php echo smarty_function_style(array('src'=>"addons/new_ui/orders.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
