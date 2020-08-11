<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:48
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\products\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13360603215f2d2038edb568-68815214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9a56eebbd019745c02088e96c0b203740ac2db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13360603215f2d2038edb568-68815214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2038ef09e6_96724304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2038ef09e6_96724304')) {function content_5f2d2038ef09e6_96724304($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
