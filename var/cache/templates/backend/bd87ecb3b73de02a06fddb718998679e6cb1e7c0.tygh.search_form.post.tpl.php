<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:47:38
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\bestsellers\hooks\products\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2419213075f2d152aa6ffc5-86526826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd87ecb3b73de02a06fddb718998679e6cb1e7c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\search_form.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2419213075f2d152aa6ffc5-86526826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d152aa8a6f6_34414928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d152aa8a6f6_34414928')) {function content_5f2d152aa8a6f6_34414928($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sales_amount'));
?>
<div class="control-group">
    <label class="control-label" for="sales_amount_from"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
    <div class="controls">
        <input type="text" name="sales_amount_from" id="sales_amount_from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_from'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" /> - <input type="text" name="sales_amount_to" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sales_amount_to'], ENT_QUOTES, 'UTF-8');?>
" onfocus="this.select();" class="input-mini" />
    </div>
</div><?php }} ?>
