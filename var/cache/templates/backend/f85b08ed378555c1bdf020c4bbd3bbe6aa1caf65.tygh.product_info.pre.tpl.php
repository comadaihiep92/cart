<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:24
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5531803825f2d2098ecb878-01627968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85b08ed378555c1bdf020c4bbd3bbe6aa1caf65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5531803825f2d2098ecb878-01627968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2098f1dde7_94609845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2098f1dde7_94609845')) {function content_5f2d2098f1dde7_94609845($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
