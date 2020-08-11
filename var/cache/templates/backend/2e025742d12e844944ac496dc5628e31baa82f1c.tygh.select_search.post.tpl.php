<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:47:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\bestsellers\hooks\products\select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3716964855f2d152b49b865-54232838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e025742d12e844944ac496dc5628e31baa82f1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\bestsellers\\hooks\\products\\select_search.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3716964855f2d152b49b865-54232838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d152b4b2a20_81856609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d152b4b2a20_81856609')) {function content_5f2d152b4b2a20_81856609($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
