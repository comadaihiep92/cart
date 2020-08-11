<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:37
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9378822795f2d202d55d2b1-53706758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78eb9b35f22a4a6d7c7e7b688a6704358711d8ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9378822795f2d202d55d2b1-53706758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_product_data' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202d5717d0_24126250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202d5717d0_24126250')) {function content_5f2d202d5717d0_24126250($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.variation_of_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['parent_product_data']->value) {?>
    <div class="control-group">
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['variation_name']));?>

            </p>
        </div>
    </div>
<?php }?><?php }} ?>
