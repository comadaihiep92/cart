<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\hooks\orders\extra_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17497201785f2d2132bb8976-69831283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0f88cf2875f14aff74f6d27e650c81ecb9a69be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\orders\\extra_list.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17497201785f2d2132bb8976-69831283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    '_class' => 0,
    'gift_key' => 0,
    'gift' => 0,
    'settings' => 0,
    '_colspan' => 0,
    'addons' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2132c2e184_30749468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2132c2e184_30749468')) {function content_5f2d2132c2e184_30749468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('collapse_sublist_of_items','gift_certificate','print_card','code','free','free','gift_cert_to','gift_cert_from','amount','send_via','email','postal_mail','product','price','quantity','discount','tax','subtotal','deleted_product','sku'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>
<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
>
    <td>
        <div class="pull-left">
        <i id="on_gc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination icon-caret-right"></i><i title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_gc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="hand cm-combination hidden icon-caret-down"></i>
        </div>
        <div class="pull-left">
            <?php echo $_smarty_tpl->__("gift_certificate");?>
&nbsp;
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"gift_certificates.print?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&gift_cert_cart_id=".((string)$_smarty_tpl->tpl_vars['gift_key']->value),'but_text'=>$_smarty_tpl->__("print_card"),'but_role'=>"text",'but_meta'=>"cm-new-window text-button-simple"), 0);?>

            <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
            <p><?php echo $_smarty_tpl->__("code");?>
:&nbsp;<a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['gift']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a></p>
            <?php }?>
        </div>
    </td>
    <td><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>
    <td class="center">&nbsp;1</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
    <td>-</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
    <td>-</td>
    <?php }?>
    <td class="right">&nbsp;<span><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></span></td>
</tr>
<?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable("4", null, 0);?>
<tr <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
 class="row-more hidden">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
        <?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?>
        <td>&nbsp;</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
        <?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);?>
        <td>&nbsp;</td>
    <?php }?>
    <td>&nbsp;</td>
</tr>

<tr id="gc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');?>
 hidden row-more row-gray">
    <td colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">

        <table width="100%" class="table-condensed">
        <tr class="no-border">
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("gift_cert_to");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("gift_cert_from");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['sender'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("amount");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['amount']), 0);?>
</td>
        </tr>
        <tr>
            <td class="nowrap"><span><?php echo $_smarty_tpl->__("send_via");?>
</span>:</td>
            <td>&nbsp;</td>
            <td class="nowrap" width="100%"><?php if ($_smarty_tpl->tpl_vars['gift']->value['send_via']=="E") {
echo $_smarty_tpl->__("email");
} else {
echo $_smarty_tpl->__("postal_mail");
}?></td>
        </tr>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?>
        <table width="100%" class="table-condensed">
        <tr class="no-border">
            <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th width="10%"><?php echo $_smarty_tpl->__("price");?>
</th>
            <th width="10%" class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <th width="10%"><?php echo $_smarty_tpl->__("discount");?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
            <th width="10%"><?php echo $_smarty_tpl->__("tax");?>
</th>
            <?php }?>
            <th class="right" width="10%"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["sub_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["sub_key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']&&$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
        <tr valign="top">
            <td>
                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product']) {?>
                    <?php if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['oi']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['oi']->value['product'],50,"...",true), ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['oi']->value['deleted_product']) {?></a><?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("deleted_product");?>

                <?php }?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?>
                <p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div class="options-info">&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td>
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['original_price']), 0);?>
</td>
            <td class="center">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <td>
                <?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0);
} else { ?>-<?php }?></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
            <td>
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0);?>
</td>
            <?php }?>
            <td class="nowrap right">
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);?>
</td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
        <?php }?>
    </td>
</tr>
<?php } ?>

<?php }?><?php }} ?>
