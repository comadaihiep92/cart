<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:44
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\seo\hooks\products\update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1689561795f2d2034f18799-24102965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c4bf19a109a97021c16ba3a0d9d8eae61a4d5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\seo\\hooks\\products\\update_seo.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1689561795f2d2034f18799-24102965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_uri' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2034f2f246_41566078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2034f2f246_41566078')) {function content_5f2d2034f2f246_41566078($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['view_uri']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>
