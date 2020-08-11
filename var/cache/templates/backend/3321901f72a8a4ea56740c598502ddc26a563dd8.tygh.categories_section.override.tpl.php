<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:37
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11216245265f2d202d951e94-12604950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3321901f72a8a4ea56740c598502ddc26a563dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11216245265f2d202d951e94-12604950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202d969a37_68727946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202d969a37_68727946')) {function content_5f2d202d969a37_68727946($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
