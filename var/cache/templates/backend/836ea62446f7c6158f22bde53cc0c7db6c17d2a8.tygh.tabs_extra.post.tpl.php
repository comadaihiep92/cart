<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:48
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8752609555f2d2038383f50-52662728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836ea62446f7c6158f22bde53cc0c7db6c17d2a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8752609555f2d2038383f50-52662728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2038396b16_10431135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2038396b16_10431135')) {function content_5f2d2038396b16_10431135($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
