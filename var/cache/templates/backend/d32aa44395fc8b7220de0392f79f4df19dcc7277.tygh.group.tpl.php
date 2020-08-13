<?php /* Smarty version Smarty-3.1.21, created on 2020-08-13 05:52:22
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\promotions\components\group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6888339005f34aae6433c25-04726047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd32aa44395fc8b7220de0392f79f4df19dcc7277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\promotions\\components\\group.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6888339005f34aae6433c25-04726047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'group' => 0,
    'selected_name' => 0,
    'root' => 0,
    'item_id' => 0,
    'prefix_md5' => 0,
    'hide_add_buttons' => 0,
    'zone' => 0,
    'k' => 0,
    'condition_data' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'schema' => 0,
    'c' => 0,
    '_k' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f34aae64aa0a6_42106074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f34aae64aa0a6_42106074')) {function content_5f34aae64aa0a6_42106074($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.in_array.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('promotions.cond_any','promotions.cond_all','promotions.cond_all','promotions.cond_any','promotions.cond_true','promotions.cond_false','promotions.cond_false','promotions.cond_true','remove_this_item','add_condition','add_group','text_promotions_group_condition','no_items'));
?>
<?php $_smarty_tpl->tpl_vars["prefix_md5"] = new Smarty_variable(md5($_smarty_tpl->tpl_vars['prefix']->value), null, 0);?>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[fake]" value="" disabled="disabled" />

<?php $_smarty_tpl->_capture_stack[0][] = array("set", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['group']->value['set']=="any") {?>
<?php $_smarty_tpl->tpl_vars["selected_name"] = new Smarty_variable($_smarty_tpl->__("promotions.cond_any"), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["selected_name"] = new Smarty_variable($_smarty_tpl->__("promotions.cond_all"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"field",'items'=>array("all"=>$_smarty_tpl->__("promotions.cond_all"),"any"=>$_smarty_tpl->__("promotions.cond_any")),'select_container_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[set]",'selected_key'=>$_smarty_tpl->tpl_vars['group']->value['set'],'selected_name'=>$_smarty_tpl->tpl_vars['selected_name']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("set_value", null, null); ob_start(); ?>
<?php if (!$_smarty_tpl->tpl_vars['group']->value||$_smarty_tpl->tpl_vars['group']->value['set_value']) {?>
<?php $_smarty_tpl->tpl_vars["selected_name"] = new Smarty_variable($_smarty_tpl->__("promotions.cond_true"), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["selected_name"] = new Smarty_variable($_smarty_tpl->__("promotions.cond_false"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"field",'items'=>array("0"=>$_smarty_tpl->__("promotions.cond_false"),"1"=>$_smarty_tpl->__("promotions.cond_true")),'select_container_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[set_value]",'selected_key'=>(($tmp = @$_smarty_tpl->tpl_vars['group']->value['set_value'])===null||$tmp==='' ? 1 : $tmp),'selected_name'=>$_smarty_tpl->tpl_vars['selected_name']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<ul class="conditions-tree-group cm-row-item">
    <li class="no-node<?php if ($_smarty_tpl->tpl_vars['root']->value) {?>-root<?php }?>">
        <?php if (!$_smarty_tpl->tpl_vars['root']->value) {?>
        <div class="pull-right">
            <a class="icon-trash cm-delete-row cm-tooltip conditions-tree-remove" name="remove" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove_this_item");?>
"></a>
        </div>
        <?php }?>
        <div id="add_condition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn-toolbar pull-right">
            <?php if (!$_smarty_tpl->tpl_vars['hide_add_buttons']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add(Tygh."."$"."(this).parents('div[id^=add_condition_]').prop('id'), false, 'condition');",'prefix'=>"simple",'link_text'=>$_smarty_tpl->__("add_condition")), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hide_tools'=>true,'tool_onclick'=>"fn_promotion_add_group(Tygh."."$"."(this).parents('div[id^=add_condition_]').prop('id'), '".((string)$_smarty_tpl->tpl_vars['zone']->value)."');",'prefix'=>"simple",'link_text'=>$_smarty_tpl->__("add_group")), 0);?>

            <?php }?>
        </div>
        <?php echo $_smarty_tpl->__("text_promotions_group_condition",array("[set]"=>Smarty::$_smarty_vars['capture']['set'],"[set_value]"=>Smarty::$_smarty_vars['capture']['set_value']));?>

    </li>

    <li class="no-node no-items <?php if ($_smarty_tpl->tpl_vars['group']->value['conditions']) {?>hidden<?php }?>">
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    </li>

    <?php  $_smarty_tpl->tpl_vars["condition_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["condition_data"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['conditions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["condition_data"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["condition_data"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["condition_data"]->key => $_smarty_tpl->tpl_vars["condition_data"]->value) {
$_smarty_tpl->tpl_vars["condition_data"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["condition_data"]->key;
 $_smarty_tpl->tpl_vars["condition_data"]->iteration++;
 $_smarty_tpl->tpl_vars["condition_data"]->last = $_smarty_tpl->tpl_vars["condition_data"]->iteration === $_smarty_tpl->tpl_vars["condition_data"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["conditions"]['last'] = $_smarty_tpl->tpl_vars["condition_data"]->last;
?>
    <li id="container_condition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-row-item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['conditions']['last']) {?> cm-last-item<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['set']) {?> 
            <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('root'=>false,'group'=>$_smarty_tpl->tpl_vars['condition_data']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[conditions][".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'elm_id'=>"condition_".((string)$_smarty_tpl->tpl_vars['prefix_md5']->value)."_".((string)$_smarty_tpl->tpl_vars['k']->value)), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('condition_data'=>$_smarty_tpl->tpl_vars['condition_data']->value,'prefix'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[conditions][".((string)$_smarty_tpl->tpl_vars['k']->value)."]",'elm_id'=>"condition_".((string)$_smarty_tpl->tpl_vars['prefix_md5']->value)."_".((string)$_smarty_tpl->tpl_vars['k']->value)), 0);?>

        <?php }?>
    </li>
    <?php } ?>

    <li id="container_add_condition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix_md5']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-row-item">
        <div class="conditions-tree-node">
        <select onchange="Tygh.$.ceAjax('request', '<?php echo fn_url("promotions.dynamic?zone=".((string)$_smarty_tpl->tpl_vars['zone']->value)."&promotion_id=".((string)$_REQUEST['promotion_id']));?>
&prefix=' + encodeURIComponent(this.name) + '&condition=' + this.value + '&elm_id=' + this.id, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'container_' + this.id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
)">
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["_k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schema']->value['conditions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["_k"]->value = $_smarty_tpl->tpl_vars["c"]->key;
?>
                <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['zone']->value,$_smarty_tpl->tpl_vars['c']->value['zones'])) {?>
                    <?php $_smarty_tpl->tpl_vars["l"] = new Smarty_variable("promotion_cond_".((string)$_smarty_tpl->tpl_vars['_k']->value), null, 0);?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
</option>
                <?php }?>
            <?php } ?>
        </select>
        </div>
    </li>
</ul>
<?php }} ?>
