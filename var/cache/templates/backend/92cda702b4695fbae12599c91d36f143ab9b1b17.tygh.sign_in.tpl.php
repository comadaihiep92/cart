<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 14:19:18
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6542646925f2d38b6d146b8-42572050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92cda702b4695fbae12599c91d36f143ab9b1b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6542646925f2d38b6d146b8-42572050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d38b6d28722_44678746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d38b6d28722_44678746')) {function content_5f2d38b6d28722_44678746($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
