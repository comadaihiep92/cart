<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:59
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\hooks\orders\totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5206786655f2d21333b9573-55441154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d476b9cb85ac897b70a6fb522dd865e871d0cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\orders\\totals_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5206786655f2d21333b9573-55441154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'certificate' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21333da0a3_25738549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21333da0a3_25738549')) {function content_5f2d21333da0a3_25738549($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('payment_information','gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['payment_id']==0) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("payment_information")), 0);?>

<?php }?>
    <tr>
        <td class="right muted strong"><?php echo $_smarty_tpl->__("gift_certificate");?>
</td>
        <td>&nbsp;</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["certificate"]->key;
?>
        <tr>
            <td><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['certificate']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td class="right text-success">-<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0);?>
</td>
        </tr>
    <?php } ?>
<?php }?><?php }} ?>
