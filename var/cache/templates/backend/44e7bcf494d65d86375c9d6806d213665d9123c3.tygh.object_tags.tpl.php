<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\tags\views\tags\components\object_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9891321645f2d20375bf102-50484405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e7bcf494d65d86375c9d6806d213665d9123c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\tags\\views\\tags\\components\\object_tags.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9891321645f2d20375bf102-50484405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_save' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'input_name' => 0,
    'object' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20375f5c32_57215485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20375f5c32_57215485')) {function content_5f2d20375f5c32_57215485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('tags'));
?>
<div class="hidden" id="content_tags">

<?php echo smarty_function_script(array('src'=>"js/addons/tags/tags_autocomplete.js"),$_smarty_tpl);?>


    <div class="control-group <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php }?>">
        <label class="control-label"><?php echo $_smarty_tpl->__("tags");?>
:</label>
        <div class="controls">
            <ul id="my_tags">
                <input type="hidden" id="object_id" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" id="object_type" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
 />
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" value="" />
                <input type="hidden" id="object_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[tags][]" />
                <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>
</li><?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php }} ?>
