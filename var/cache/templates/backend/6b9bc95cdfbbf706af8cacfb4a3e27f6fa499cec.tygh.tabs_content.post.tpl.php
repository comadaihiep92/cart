<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\tags\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2870836695f2d203752c1e1-07709232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9bc95cdfbbf706af8cacfb4a3e27f6fa499cec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\tags\\hooks\\products\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2870836695f2d203752c1e1-07709232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2037542d99_66006071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2037542d99_66006071')) {function content_5f2d2037542d99_66006071($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_products']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['product_data']->value,'input_name'=>"product_data",'allow_save'=>true,'object_type'=>"P",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
