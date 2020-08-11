<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:00
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_plans\hooks\companies\list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19664333335f2d20f8e77d03-12489343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33eeef7303f9a702407798bf47e176334eedba62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\companies\\list_extra_th.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19664333335f2d20f8e77d03-12489343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20f8e8e6d1_67812428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20f8e8e6d1_67812428')) {function content_5f2d20f8e8e6d1_67812428($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan'));
?>
<th><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }} ?>
