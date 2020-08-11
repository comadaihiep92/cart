<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:04
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\discussion\hooks\categories\fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10520389245f2d204893d4c1-53765791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4008c9ddb71cb8b65fd2e514470faf48a36f356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10520389245f2d204893d4c1-53765791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d204895c7a3_89676524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d204895c7a3_89676524')) {function content_5f2d204895c7a3_89676524($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
