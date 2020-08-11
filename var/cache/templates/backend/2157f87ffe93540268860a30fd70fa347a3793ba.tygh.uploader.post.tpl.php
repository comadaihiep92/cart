<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:48
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\hidpi\hooks\fileuploader\uploader.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10501249205f2d2038dee790-99186081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2157f87ffe93540268860a30fd70fa347a3793ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\hidpi\\hooks\\fileuploader\\uploader.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10501249205f2d2038dee790-99186081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_image' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2038e0e1b9_81599571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2038e0e1b9_81599571')) {function content_5f2d2038e0e1b9_81599571($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_FALSE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" class="cm-image-field" />
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidpi-mark">
        <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_TRUE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?> class="cm-image-field" />
        <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <i class="cm-tooltip icon-question-sign" title="<?php echo $_smarty_tpl->__("hidpi.upload_high_res_image.tooltip");?>
"></i>
    </label>
<?php }?><?php }} ?>
