<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:25
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16351523675f2d20993533b4-01444834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea310d82406b816e5f459f7e4d88db49d2ee4059' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\modifier.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16351523675f2d20993533b4-01444834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_integer' => 0,
    'mod_value' => 0,
    'display_sign' => 0,
    'mod_type' => 0,
    'span_id' => 0,
    'no_ids' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2099373410_37011553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2099373410_37011553')) {function content_5f2d2099373410_37011553($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_integer']->value==true) {
$_smarty_tpl->tpl_vars["mod_value"] = new Smarty_variable(round($_smarty_tpl->tpl_vars['mod_value']->value), null, 0);
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['mod_value']->value>0) {?>+<?php } else { ?>-<?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value=="A"||$_smarty_tpl->tpl_vars['mod_type']->value=="F") {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0);
} else {
if ($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?><span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars(abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value) {?></span><?php }?>%<?php }?><?php }} ?>
