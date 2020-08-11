<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\categories\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16949724335f2d20504f76d0-59835869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41aa68a03d0e1c4792655c93faf8912eb82b484' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16949724335f2d20504f76d0-59835869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2050510ec5_84420031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2050510ec5_84420031')) {function content_5f2d2050510ec5_84420031($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
