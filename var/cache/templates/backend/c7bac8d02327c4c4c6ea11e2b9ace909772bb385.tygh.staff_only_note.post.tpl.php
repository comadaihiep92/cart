<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:59
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\barcode\hooks\orders\staff_only_note.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4561781675f2d21337a4ac7-25287908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7bac8d02327c4c4c6ea11e2b9ace909772bb385' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\barcode\\hooks\\orders\\staff_only_note.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4561781675f2d21337a4ac7-25287908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21337c00d6_93133288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21337c00d6_93133288')) {function content_5f2d21337c00d6_93133288($_smarty_tpl) {?><div class="center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])."&no_session=Y"), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
