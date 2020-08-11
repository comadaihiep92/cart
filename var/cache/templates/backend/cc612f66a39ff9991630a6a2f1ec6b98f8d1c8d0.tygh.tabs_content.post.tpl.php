<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10293078925f2d2037ba0837-14995556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc612f66a39ff9991630a6a2f1ec6b98f8d1c8d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10293078925f2d2037ba0837-14995556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2037bb35f0_85421837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2037bb35f0_85421837')) {function content_5f2d2037bb35f0_85421837($_smarty_tpl) {?><div class="hidden" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
