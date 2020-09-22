<?php /* Smarty version Smarty-3.1.21, created on 2020-09-22 17:12:13
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\companies1\hooks\menu\profile.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12637412945f6a063d2ea7c4-28852760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a353bbfd6ba52666e64c096c84fb571fa32464' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\companies1\\hooks\\menu\\profile.pre.tpl',
      1 => 1594984168,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12637412945f6a063d2ea7c4-28852760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f6a063dabda55_23582559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a063dabda55_23582559')) {function content_5f6a063dabda55_23582559($_smarty_tpl) {?><?php if (@constant('ACCOUNT_TYPE')=="vendor"&&@constant('VENDOR_PERM_MANAGE_USERS')=="Y") {?>
<li><a href="<?php echo htmlspecialchars(fn_url("companies1.manage"), ENT_QUOTES, 'UTF-8');?>
">Manage users</a></li>
<?php }?>
<?php }} ?>
