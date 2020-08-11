<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\products\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607708105f2d203792a9a9-29394410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a2dcaea73703059d0a15aa558632a2433984bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\products\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1607708105f2d203792a9a9-29394410',
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
  'unifunc' => 'content_5f2d203793e596_24205875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d203793e596_24205875')) {function content_5f2d203793e596_24205875($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id']), 0);?>

<?php }?>
<?php }} ?>
