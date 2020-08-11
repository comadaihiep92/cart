<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:11
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\categories\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12420764455f2d204fe67cd9-82757314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4188f9c36af444cc46b64d055715abe511853c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\detailed_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12420764455f2d204fe67cd9-82757314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d204fe888c0_34063548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d204fe888c0_34063548')) {function content_5f2d204fe888c0_34063548($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_category'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE"))||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_category_setting"), 0);?>

<fieldset>
	<div id="discussion_category_setting" class="in collapse">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"C",'title'=>$_smarty_tpl->__("discussion_title_category"),'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['category_discussion_type']), 0);?>

	</div>
</fieldset>
<?php }?><?php }} ?>
