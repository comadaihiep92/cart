<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:39:00
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\orders\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5134369205f2d2134890470-28736286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5256c0c4e87d842845deff32886dae980eeeb10d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5134369205f2d2134890470-28736286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21348a2a95_02698096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21348a2a95_02698096')) {function content_5f2d21348a2a95_02698096($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>
<?php }} ?>
