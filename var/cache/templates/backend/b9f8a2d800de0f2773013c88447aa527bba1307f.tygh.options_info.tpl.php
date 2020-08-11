<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 08:18:18
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\options_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3821037695f30d89a9ffd41-98602122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f8a2d800de0f2773013c88447aa527bba1307f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\options_info.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3821037695f30d89a9ffd41-98602122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_options' => 0,
    'po' => 0,
    'has_option' => 0,
    'oi' => 0,
    'cp' => 0,
    'file' => 0,
    'order_info' => 0,
    'filename' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30d89aeddc07_46957589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30d89aeddc07_46957589')) {function content_5f30d89aeddc07_46957589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['po']->value['value']) {?>
            <?php $_smarty_tpl->tpl_vars["has_option"] = new Smarty_variable(true, null, 0);?>
            <?php break 1;?>
        <?php }?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['has_option']->value) {?>
        <strong><?php echo $_smarty_tpl->__("options");?>
: </strong><br />
        <ul class="unstyled"><?php  $_smarty_tpl->tpl_vars['po'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['po']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['po']->key => $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->_loop = true;
if (($_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::SELECTBOX")||$_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")||$_smarty_tpl->tpl_vars['po']->value['option_type']==smarty_modifier_enum("ProductOptionTypes::CHECKBOX"))&&!$_smarty_tpl->tpl_vars['po']->value['value']) {
continue 1;
}?><li><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
: </strong><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]||$_smarty_tpl->tpl_vars['cp']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]) {
$_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
$_smarty_tpl->tpl_vars["filename"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['file']->value['name']), null, 0);?><a href="<?php echo htmlspecialchars(fn_url("orders.get_custom_file?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&file=".((string)$_smarty_tpl->tpl_vars['file']->value['file'])."&filename=".((string)$_smarty_tpl->tpl_vars['filename']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>,&nbsp;<?php }
}
if (!$_smarty_tpl->tpl_vars["file"]->_loop) {
$_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cp']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["file"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["file"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->iteration++;
 $_smarty_tpl->tpl_vars["file"]->last = $_smarty_tpl->tpl_vars["file"]->iteration === $_smarty_tpl->tpl_vars["file"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["po_files"]['last'] = $_smarty_tpl->tpl_vars["file"]->last;
echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['po_files']['last']) {?>,&nbsp;<?php }
}
}
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers']=="Y") {
if (floatval($_smarty_tpl->tpl_vars['po']->value['modifier'])) {?>&nbsp;<bdi>(<?php echo $_smarty_tpl->getSubTemplate ("common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mod_type'=>$_smarty_tpl->tpl_vars['po']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['po']->value['modifier'],'display_sign'=>true), 0);?>
)</bdi><?php }
}
$_smarty_tpl->tpl_vars['option_displayed'] = new Smarty_variable(true, null, 0);?></li><?php } ?></ul>
    <?php }?>
<?php } else { ?>
    &nbsp;
<?php }?>
<?php }} ?>
