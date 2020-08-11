<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:48
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4873255195f2d20380596a6-55790259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd38b8c0b9243f419fdafc9aeb482263313846f4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4873255195f2d20380596a6-55790259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'is_form_readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d203807ca55_45206104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d203807ca55_45206104')) {function content_5f2d203807ca55_45206104($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_group_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php } elseif (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>}
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[product_variations.add_product]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php }?>

<?php }} ?>
