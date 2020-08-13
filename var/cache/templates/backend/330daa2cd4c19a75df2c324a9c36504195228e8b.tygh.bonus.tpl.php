<?php /* Smarty version Smarty-3.1.21, created on 2020-08-13 05:55:15
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\promotions\components\bonus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2971062185f34ab9346d387-82969936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '330daa2cd4c19a75df2c324a9c36504195228e8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\promotions\\components\\bonus.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2971062185f34ab9346d387-82969936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bonus_data' => 0,
    'item_id' => 0,
    'l' => 0,
    'prefix' => 0,
    'schema' => 0,
    '_items' => 0,
    '_k' => 0,
    'v' => 0,
    'elm_id' => 0,
    'promotion_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f34ab9354d877_03181224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f34ab9354d877_03181224')) {function content_5f34ab9354d877_03181224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.include_ext.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','yes','no_data'));
?>
<?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_bonus_".((string)$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']), null, 0);?>

<div class="conditions-tree-node clearfix cm-row-item">
    <div class="pull-right">
        <a class="hand icon-trash cm-delete-row cm-tooltip" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
    </div>
    <label><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
:&nbsp;</label>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[bonus]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['bonus'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="input") {?>
    <input class="input-text" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" /><?php echo $_smarty_tpl->__("yes");?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="checkbox") {?>
    <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" <?php if ($_smarty_tpl->tpl_vars['bonus_data']->value['value']=="Y") {?>checked="checked"<?php }?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="select") {?>
    <?php $_smarty_tpl->tpl_vars["_items"] = new Smarty_variable(fn_get_promotion_variants((($tmp = @$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function'] : $tmp)), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['_items']->value) {?>
    <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]">
        <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_k']->value==$_smarty_tpl->tpl_vars['bonus_data']->value['value']) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);
}?></option>
        <?php } ?>
    </select>
    <?php } else { ?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="" />
    <p><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type']=="picker") {?>
        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['picker'],'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['elm_id']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[value]",'item_ids'=>$_smarty_tpl->tpl_vars['bonus_data']->value['value'],'params_array'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['params'],'owner_company_id'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'but_meta'=>'pull-left'),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses']) {?>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_bonus]">
            <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['bonus_data']->value['discount_bonus']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);?>
</option>
            <?php } ?>
        </select>

        <input class="input-medium cm-numeric" data-a-dec="." data-a-sep="" data-a-sign="" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bonus_data']->value['discount_value'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
            $('.cm-numeric').autoNumeric('init');
        <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
</div><?php }} ?>
