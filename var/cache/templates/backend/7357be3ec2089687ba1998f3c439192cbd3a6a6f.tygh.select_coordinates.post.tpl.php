<?php /* Smarty version Smarty-3.1.21, created on 2020-09-22 18:57:42
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\store_locator\addons\geo_maps\hooks\store_locator\select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1780541455f6a1ef604c600-67673351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7357be3ec2089687ba1998f3c439192cbd3a6a6f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\store_locator\\addons\\geo_maps\\hooks\\store_locator\\select_coordinates.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1780541455f6a1ef604c600-67673351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f6a1ef6061d51_66002710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a1ef6061d51_66002710')) {function content_5f6a1ef6061d51_66002710($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>
