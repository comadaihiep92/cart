<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\products\components\status_on_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7199371695f2d202f37f0a9-52107011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debf228c8cb3172e1266628d9987dd03af7a0868' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\products\\components\\status_on_update.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7199371695f2d202f37f0a9-52107011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
    'items_status' => 0,
    'status' => 0,
    'hidden' => 0,
    'non_editable_status' => 0,
    'non_editable' => 0,
    'display' => 0,
    'meta' => 0,
    'input_name' => 0,
    'input_id' => 0,
    'status_id' => 0,
    'status_name' => 0,
    'statuses' => 0,
    'product_status_style' => 0,
    'data_product_statuses' => 0,
    'id' => 0,
    'obj_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202f408357_51464445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202f408357_51464445')) {function content_5f2d202f408357_51464445($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','status'));
?>
<?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj']->value['status'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['non_editable_status']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_status_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_status_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['non_editable']->value||$_smarty_tpl->tpl_vars['display']->value=="text"||$_smarty_tpl->tpl_vars['display']->value=="select"||$_smarty_tpl->tpl_vars['display']->value=="popup") {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("status_title", null, null); ob_start(); ?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value], ENT_QUOTES, 'UTF-8');?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['display']->value=="select") {?>
    <select class="input-small <?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['input_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
    >
        <?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status_id']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['status']->value===$_smarty_tpl->tpl_vars['status_id']->value) {?>
                        selected="selected"
                    <?php }?>
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
<?php } elseif ($_smarty_tpl->tpl_vars['display']->value=="popup") {?>
    <input <?php if ($_smarty_tpl->tpl_vars['meta']->value) {?>class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
           type="hidden"
           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
    <div class="cm-popup-box btn-group dropleft">
        <a id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn-text" data-toggle="dropdown">
            <?php echo Smarty::$_smarty_vars['capture']['status_title'];?>

            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu cm-select">
            <?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable(fn_get_default_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value), null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status_id']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['status_id']->value) {?>class="disabled"<?php }?>>
                    <a class="status-link-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php }?>"
                       onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['status_id']->value]['color'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                       data-ca-result-id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['input_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['input_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php if (!Smarty::$_smarty_vars['capture']['avail_box']) {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("avail_box", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['non_editable']->value||$_smarty_tpl->tpl_vars['display']->value=="text") {?>
    <div class="control-group">
        <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
        <div class="controls">
            <div class="text-type-value <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_status_style']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo Smarty::$_smarty_vars['capture']['status_title'];?>
</div>
        </div>
    </div>
<?php } else { ?>
<div class="control-group">
    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
    <div class="controls" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data_product_statuses']->value);?>
>
    
        <?php  $_smarty_tpl->tpl_vars["status_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["status_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["status_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["status_name"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["status_name"]->key => $_smarty_tpl->tpl_vars["status_name"]->value) {
$_smarty_tpl->tpl_vars["status_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["status_id"]->value = $_smarty_tpl->tpl_vars["status_name"]->key;
 $_smarty_tpl->tpl_vars["status_name"]->index++;
 $_smarty_tpl->tpl_vars["status_name"]->first = $_smarty_tpl->tpl_vars["status_name"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["status_cycle"]['first'] = $_smarty_tpl->tpl_vars["status_name"]->first;
?>
            <label class="radio inline" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                <input type="radio"
                       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                       class="product__status-switcher"
                       id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['status']->value===$_smarty_tpl->tpl_vars['status_id']->value||(!$_smarty_tpl->tpl_vars['status']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['status_cycle']['first'])) {?>checked="checked"<?php }?>
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

            </label>
        <?php } ?>
    </div>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_status_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
