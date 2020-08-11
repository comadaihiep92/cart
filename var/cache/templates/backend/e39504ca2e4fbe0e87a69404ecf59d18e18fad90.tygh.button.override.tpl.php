<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 09:08:43
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\hooks\statuses\button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6589641295f30e46bcd2b58-21450108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39504ca2e4fbe0e87a69404ecf59d18e18fad90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\statuses\\button.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6589641295f30e46bcd2b58-21450108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30e46bce6a19_73797109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30e46bce6a19_73797109')) {function content_5f30e46bce6a19_73797109($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G') {?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>
