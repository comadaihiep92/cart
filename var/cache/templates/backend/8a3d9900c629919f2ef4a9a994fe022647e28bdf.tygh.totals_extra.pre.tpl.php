<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:59
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\hooks\order_management\totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2566405375f2d20070c2355-00814698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3d9900c629919f2ef4a9a994fe022647e28bdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\order_management\\totals_extra.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2566405375f2d20070c2355-00814698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gift_certificates' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20070d6d21_51644807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20070d6d21_51644807')) {function content_5f2d20070d6d21_51644807($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_cert_code'));
?>
<div class="control-group">
    <div class="controls">
        <select name="gift_cert_code" id="gift_cert_code">
            <option value="" disabled selected hidden><?php echo $_smarty_tpl->__("gift_cert_code");?>
</option>
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["code"]->key => $_smarty_tpl->tpl_vars["code"]->value) {
$_smarty_tpl->tpl_vars["code"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
