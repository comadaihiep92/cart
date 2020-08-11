<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:11
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\seo\hooks\categories\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21122138585f2d204fdc7539-77728478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f5f46071417adae2f188901332370b3e16c024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\seo\\hooks\\categories\\detailed_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21122138585f2d204fdc7539-77728478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d204fdddd08_78651927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d204fdddd08_78651927')) {function content_5f2d204fdddd08_78651927($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['category_data']->value,'object_name'=>"category_data",'object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>"c"), 0);?>

<?php }?><?php }} ?>
