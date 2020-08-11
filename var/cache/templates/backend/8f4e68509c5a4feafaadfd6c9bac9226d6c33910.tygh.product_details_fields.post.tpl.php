<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:37
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\companies\product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2123051025f2d202de57ca0-98952378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4e68509c5a4feafaadfd6c9bac9226d6c33910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\companies\\product_details_fields.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2123051025f2d202de57ca0-98952378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202de867d0_27240409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202de867d0_27240409')) {function content_5f2d202de867d0_27240409($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>
