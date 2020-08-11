<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:25
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\block_manager\components\device_availability_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3801189665f2d205d3de4f5-62893813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f17e1510b3c385186c497ebd1fd0788705792b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\block_manager\\components\\device_availability_attributes.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3801189665f2d205d3de4f5-62893813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'devices' => 0,
    'device' => 0,
    'is_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d205d3f68e5_72691575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d205d3f68e5_72691575')) {function content_5f2d205d3f68e5_72691575($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
    data-ca-device-availability-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
="<?php if ($_smarty_tpl->tpl_vars['is_available']->value) {?>true<?php } else { ?>false<?php }?>"
<?php } ?>
<?php }} ?>
