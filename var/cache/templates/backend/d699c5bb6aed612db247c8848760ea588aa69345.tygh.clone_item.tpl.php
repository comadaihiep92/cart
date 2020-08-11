<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:46
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\buttons\clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2525084895f2d20362683b6-20021892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd699c5bb6aed612db247c8848760ea588aa69345' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\buttons\\clone_item.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2525084895f2d20362683b6-20021892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d203628ad21_47929992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d203628ad21_47929992')) {function content_5f2d203628ad21_47929992($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
