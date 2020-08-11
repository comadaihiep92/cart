<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\update_product_status.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13573012165f2d202f99a954-07823464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec6099bef5a8bd32869b6bfdb4dcfc4bddb969c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\update_product_status.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13573012165f2d202f99a954-07823464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202f9b7bc2_03331502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202f9b7bc2_03331502')) {function content_5f2d202f9b7bc2_03331502($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapproval_reason'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason']&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")||$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"))) {?>
    <div class="control-group">
        <label for="elm_disapproval_reason" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
        </label>
        <div class="controls">
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>
<?php }?><?php }} ?>
