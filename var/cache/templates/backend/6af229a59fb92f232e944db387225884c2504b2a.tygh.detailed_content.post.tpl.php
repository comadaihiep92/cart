<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:52:14
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\seo\hooks\companies\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8584447885f7b331ee0dd69-17872557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af229a59fb92f232e944db387225884c2504b2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\seo\\hooks\\companies\\detailed_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8584447885f7b331ee0dd69-17872557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b331ee11c99_06107112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b331ee11c99_06107112')) {function content_5f7b331ee11c99_06107112($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0);?>

<?php }?><?php }} ?>
