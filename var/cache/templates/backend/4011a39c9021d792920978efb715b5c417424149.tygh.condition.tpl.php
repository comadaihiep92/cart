<?php /* Smarty version Smarty-3.1.21, created on 2020-08-13 05:54:38
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\promotions\components\condition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4885565985f34ab6e067fa4-82820667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4011a39c9021d792920978efb715b5c417424149' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\promotions\\components\\condition.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4885565985f34ab6e067fa4-82820667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'condition_data' => 0,
    'item_id' => 0,
    'l' => 0,
    'prefix' => 0,
    'schema' => 0,
    'p_md' => 0,
    'items' => 0,
    'v' => 0,
    'condition_element' => 0,
    '__k' => 0,
    '__v' => 0,
    '_k' => 0,
    'op' => 0,
    '_z' => 0,
    'picker_selected_companies' => 0,
    'elm_id' => 0,
    'params' => 0,
    'promotion_data' => 0,
    'preselected_child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f34ab6e22e7c8_12882993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f34ab6e22e7c8_12882993')) {function content_5f34ab6e22e7c8_12882993($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_include_ext')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','no_data','yes'));
?>
<?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_cond_".((string)$_smarty_tpl->tpl_vars['condition_data']->value['condition']), null, 0);?>

<div class="conditions-tree-node clearfix">
    <div class="pull-right">
        <a class="icon-trash cm-tooltip cm-delete-row" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
    </div>
    <label><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
&nbsp;</label>

    <?php $_smarty_tpl->tpl_vars["p_md"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['prefix']->value), null, 0);?>


    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="mixed") {?>
        
        <?php $_smarty_tpl->tpl_vars["condition_element"] = new Smarty_variable($_smarty_tpl->tpl_vars['condition_data']->value['condition_element'], null, 0);?>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition_element]" id="mixed_condition_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars["items"] = new Smarty_variable(fn_get_promotion_variants($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['conditions_function']), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_group']) {?>
                    <optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['group'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php  $_smarty_tpl->tpl_vars["__v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["__v"]->_loop = false;
 $_smarty_tpl->tpl_vars["__k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["__v"]->key => $_smarty_tpl->tpl_vars["__v"]->value) {
$_smarty_tpl->tpl_vars["__v"]->_loop = true;
 $_smarty_tpl->tpl_vars["__k"]->value = $_smarty_tpl->tpl_vars["__v"]->key;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['condition_element']->value) {?>
                                <?php $_smarty_tpl->tpl_vars["condition_element"] = new Smarty_variable($_smarty_tpl->tpl_vars['__k']->value, null, 0);?>
                            <?php }?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['__k']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['__k']->value==$_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['__v']->value['value'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </optgroup>
                <?php } else { ?>
                    <?php if (!$_smarty_tpl->tpl_vars['condition_element']->value) {?>
                        <?php $_smarty_tpl->tpl_vars["condition_element"] = new Smarty_variable($_smarty_tpl->tpl_vars['_k']->value, null, 0);?>
                    <?php }?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['_k']->value==$_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['value'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php }?>
            <?php } ?>
        </select>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
            (function (_, $) {
                $(document).ready(function () {
                    $('#mixed_condition_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function () {
                        fn_promotion_rebuild_mixed_data(<?php echo json_encode($_smarty_tpl->tpl_vars['items']->value);?>
, $(this).val(), '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['condition_element'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
');
                    }).trigger('change');
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="chained") {?>
        <div class="select2-wrapper--width-auto">
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition_element]" id="promotion_chained_condition_parent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['condition_element'], ENT_QUOTES, 'UTF-8');?>
" selected></option>
                <?php }?>
            </select>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']!="list"&&$_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']!="statement") {?>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" id="promotion_condition_operator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php  $_smarty_tpl->tpl_vars["op"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["op"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['operators']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["op"]->key => $_smarty_tpl->tpl_vars["op"]->value) {
$_smarty_tpl->tpl_vars["op"]->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_op_".((string)$_smarty_tpl->tpl_vars['op']->value), null, 0);?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['op']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['op']->value==$_smarty_tpl->tpl_vars['condition_data']->value['operator']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
</option>
            <?php } ?>
        </select>
    <?php }?>

    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['condition'], ENT_QUOTES, 'UTF-8');?>
"/>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="input") {?>
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium"/>
    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="select") {?>
        <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]">
            <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = fn_get_promotion_variants((($tmp = @$_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants_function'] : $tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['_k']->value==$_smarty_tpl->tpl_vars['condition_data']->value['value']) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants_function']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);
}?></option>
            <?php } ?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="picker") {?>

        <?php $_smarty_tpl->tpl_vars["_z"] = new Smarty_variable("params_".((string)$_smarty_tpl->tpl_vars['zone']->value), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props'][$_smarty_tpl->tpl_vars['_z']->value]) {?>
            <?php $_smarty_tpl->tpl_vars["params"] = new Smarty_variable($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props'][$_smarty_tpl->tpl_vars['_z']->value], null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["params"] = new Smarty_variable($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props']['params'], null, 0);?>
        <?php }?>

        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props']['picker'],'company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['elm_id']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[value]",'item_ids'=>$_smarty_tpl->tpl_vars['condition_data']->value['value'],'params_array'=>$_smarty_tpl->tpl_vars['params']->value,'owner_company_id'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'but_meta'=>"btn"),$_smarty_tpl);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="list") {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" value="in"/>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['condition_data']->value['value'])===null||$tmp==='' ? $_smarty_tpl->__("no_data") : $tmp), ENT_QUOTES, 'UTF-8');?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="statement") {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" value="eq"/>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y"/>
        <?php echo $_smarty_tpl->__("yes");?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="chained") {?>
        <div class="select2-wrapper--width-auto">
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['operator']=='in'||$_smarty_tpl->tpl_vars['condition_data']->value['operator']=='nin') {?>multiple<?php }?> class="hidden" id="promotion_chained_condition_child_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php  $_smarty_tpl->tpl_vars["preselected_child"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["preselected_child"]->_loop = false;
 $_from = explode(",",$_smarty_tpl->tpl_vars['condition_data']->value['value']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["preselected_child"]->key => $_smarty_tpl->tpl_vars["preselected_child"]->value) {
$_smarty_tpl->tpl_vars["preselected_child"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['preselected_child']->value) {?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preselected_child']->value, ENT_QUOTES, 'UTF-8');?>
" selected></option>
                    <?php }?>
                <?php } ?>
            </select>
        </div>
        <input id="promotion_chained_condition_child_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
               class="hidden input-long"/>
        <input id="promotion_chained_condition_child_input_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value_name]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
" class="hidden input-medium"/>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
            (function (_, $) {
                $(document).ready(function () {

                    var chainedCondition = new _.ChainedPromotionConditionForm({
                        operatorSelect: $('#promotion_condition_operator_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        parentSelect: $('#promotion_chained_condition_parent_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        childSelect: $('#promotion_chained_condition_child_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        childInput: $('#promotion_chained_condition_child_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        settings: {
                            parent: {
                                dataUrl: "<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['chained_options']['parent_url']), ENT_QUOTES, 'UTF-8');?>
"
                            }
                        }
                    });

                    chainedCondition.render();
                });
            })(Tygh, Tygh.$);
        <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type']=="mixed") {?>
        
        <select id="mixed_select_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" class="input-medium hidden"></select>
        <div class="cm-ajax-select-object shift-input shift-left">
            <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>'','text'=>'','result_elm'=>"mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value),'id'=>"mixed_ajax_select_".((string)$_smarty_tpl->tpl_vars['p_md']->value),'js_action'=>"$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').toggleBy(("."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val() != 'disable_select')); if ("."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val() == 'disable_select') "."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val('');"), 0);?>

        </div>
        <input id="mixed_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
               class="hidden input-medium"/>
        <input id="mixed_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
_name" type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value_name]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
" class="hidden input-medium"/>
    <?php }?>
</div>
<?php }} ?>
