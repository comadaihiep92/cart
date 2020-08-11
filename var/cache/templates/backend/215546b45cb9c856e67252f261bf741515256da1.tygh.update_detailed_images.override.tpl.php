<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_detailed_images.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4340765625f2d202fc62886-35566306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215546b45cb9c856e67252f261bf741515256da1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_detailed_images.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4340765625f2d202fc62886-35566306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202fc8a3c9_20829764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202fc8a3c9_20829764')) {function content_5f2d202fc8a3c9_20829764($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('images'));
?>
<?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['image_pairs'])===null||$tmp==='' ? array() : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>
