<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:46
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\bestsellers\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14157627455f2d2036f0c9e0-38757531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83a49d0df7c5afcc1aafc95fe9376080281cfab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\detailed_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14157627455f2d2036f0c9e0-38757531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_edit_sales_amount' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2036f26179_13099953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2036f26179_13099953')) {function content_5f2d2036f26179_13099953($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestselling','sales_amount'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("bestselling"),'target'=>"#acc_bestsellers"), 0);?>

<div id="acc_bestsellers" class="collapse in <?php if (!$_smarty_tpl->tpl_vars['allow_edit_sales_amount']->value) {?>cm-hide-inputs<?php }?>">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['sales_amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }} ?>
