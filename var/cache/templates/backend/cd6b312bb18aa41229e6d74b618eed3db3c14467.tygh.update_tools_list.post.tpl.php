<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3753810695f2d2104770dc9-91628025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6b312bb18aa41229e6d74b618eed3db3c14467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3753810695f2d2104770dc9-91628025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21047851f5_36535117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21047851f5_36535117')) {function content_5f2d21047851f5_36535117($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }?>
<?php }} ?>
