<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:39:15
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\orders\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12802273805f2d1333595385-03566329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4a0bc9b1f3ddcb3e01ae808fcc338e15f35e368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\orders\\manage.tpl',
      1 => 1595506636,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12802273805f2d1333595385-03566329',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d13335de5e0_21559425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d13335de5e0_21559425')) {function content_5f2d13335de5e0_21559425($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')=="vendor") {?>
	<?php echo $_smarty_tpl->getSubTemplate ("views/orders/manage_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ("views/orders/manage_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
