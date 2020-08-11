<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:04
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\seo\hooks\categories\fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3486758465f2d20488b6e54-34795149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a353658bbb2a167132beefff0c866d9380c975c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\seo\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3486758465f2d20488b6e54-34795149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20488d7c64_86338892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20488d7c64_86338892')) {function content_5f2d20488d7c64_86338892($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <label class="checkbox" for="seo_name">
    	<input type="checkbox" value="seo_name" id="seo_name" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
    <?php echo $_smarty_tpl->__("seo_name");?>
</label>
<?php }?><?php }} ?>
