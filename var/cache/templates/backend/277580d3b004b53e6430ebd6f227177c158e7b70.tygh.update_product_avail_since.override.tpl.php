<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:43
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14437326505f2d20334e08b3-04509093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '277580d3b004b53e6430ebd6f227177c158e7b70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_avail_since.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14437326505f2d20334e08b3-04509093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20334f2566_88699315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20334f2566_88699315')) {function content_5f2d20334f2566_88699315($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
