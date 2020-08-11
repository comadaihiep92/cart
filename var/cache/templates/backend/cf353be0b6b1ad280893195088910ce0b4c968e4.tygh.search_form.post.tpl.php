<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:47:38
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\tags\hooks\products\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15825254825f2d152a9f4647-48288846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf353be0b6b1ad280893195088910ce0b4c968e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\tags\\hooks\\products\\search_form.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15825254825f2d152a9f4647-48288846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d152aa11cf9_68387918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d152aa11cf9_68387918')) {function content_5f2d152aa11cf9_68387918($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tag'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<div class="control-group">
    <label class="control-label" for="elm_tag"><?php echo $_smarty_tpl->__("tag");?>
</label>
    <div class="controls">
    <input id="elm_tag" type="text" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tag'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();"/>
    </div>
</div>
<?php }?><?php }} ?>
