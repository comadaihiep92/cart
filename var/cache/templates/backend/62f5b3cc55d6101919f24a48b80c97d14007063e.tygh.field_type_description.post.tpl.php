<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 18:22:21
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_plans\hooks\profile_fields\field_type_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6842010335f7b3a2d0b4aa8-68299305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f5b3cc55d6101919f24a48b80c97d14007063e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\profile_fields\\field_type_description.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6842010335f7b3a2d0b4aa8-68299305',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b3a2d0b8c68_07320088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b3a2d0b8c68_07320088')) {function content_5f7b3a2d0b8c68_07320088($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }?>
<?php }} ?>
