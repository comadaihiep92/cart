<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:39:01
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\orders\detailed_after_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21101005435f2d21355d7822-73805866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78a0d58ea0a301b7ea8487304b953ee73d3afef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\detailed_after_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21101005435f2d21355d7822-73805866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21355ea5f4_98604776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21355ea5f4_98604776')) {function content_5f2d21355ea5f4_98604776($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
