<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\object_picker_products_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6042064895f2d2006b79188-96332298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd80ff1135b2cb3aff29cab4b6f5e9343a4bc8a2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\object_picker_products_additional_info.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6042064895f2d2006b79188-96332298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2006b8b387_84268939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2006b8b387_84268939')) {function content_5f2d2006b8b387_84268939($_smarty_tpl) {?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }} ?>
