<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6933042445f2d2037e4e2c6-91160155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90e08dcd56998851341b978aef7f18f725e67c2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6933042445f2d2037e4e2c6-91160155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2037e6a0f3_35094486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2037e6a0f3_35094486')) {function content_5f2d2037e6a0f3_35094486($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?>
<?php }} ?>
