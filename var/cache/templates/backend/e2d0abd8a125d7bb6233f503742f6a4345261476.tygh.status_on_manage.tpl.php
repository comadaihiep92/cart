<?php /* Smarty version Smarty-3.1.21, created on 2020-08-12 05:17:36
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\products\components\status_on_manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10871685355f33514080aeb6-84216794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2d0abd8a125d7bb6233f503742f6a4345261476' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\products\\components\\status_on_manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10871685355f33514080aeb6-84216794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items_status' => 0,
    'status' => 0,
    'hidden' => 0,
    'statuses' => 0,
    'dynamic_object' => 0,
    'non_editable_status' => 0,
    'popup_additional_status_class' => 0,
    'non_editable' => 0,
    'display' => 0,
    'default_status_text' => 0,
    'prefix' => 0,
    'btn_meta' => 0,
    'status_target_id' => 0,
    'st_result_ids' => 0,
    'update_controller' => 0,
    'hide_for_vendor' => 0,
    'popup_additional_class' => 0,
    'id' => 0,
    'table' => 0,
    'object_id_name' => 0,
    'st_return_url' => 0,
    'extra_params' => 0,
    'status_id' => 0,
    'status_meta' => 0,
    'confirm' => 0,
    'ajax_full_render' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f3351408845b1_03825670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f3351408845b1_03825670')) {function content_5f3351408845b1_03825670($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
?><?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['statuses']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['dynamic_object'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['dynamic_object']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['non_editable_status']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['popup_additional_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['popup_additional_status_class']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:status_name_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:status_name_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['non_editable']->value||$_smarty_tpl->tpl_vars['display']->value=="text") {?>
    <span class="view-status">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:status_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:status_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:status_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </span>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['prefix']->value)===null||$tmp==='' ? "select" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['btn_meta'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_meta']->value)===null||$tmp==='' ? "btn-text" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['status_target_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['status_target_id']->value)===null||$tmp==='' ? ((($tmp = @$_smarty_tpl->tpl_vars['st_result_ids']->value)===null||$tmp==='' ? '' : $tmp)) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['update_controller'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['update_controller']->value)===null||$tmp==='' ? "tools" : $tmp), null, 0);?>

    <div class="cm-popup-box <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>dropdown<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['popup_additional_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="product_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:status_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:status_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <a href="#"
                <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="sw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap"<?php }?>
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_meta']->value, ENT_QUOTES, 'UTF-8');?>
 btn dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>cm-combination<?php }?>"
                data-toggle="dropdown"
            >
        <?php }?>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value[$_smarty_tpl->tpl_vars['status']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_status_text']->value : $tmp), ENT_QUOTES, 'UTF-8');?>

        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <span class="caret"></span>
            </a>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:status_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php if ($_smarty_tpl->tpl_vars['id']->value&&!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
            <ul class="dropdown-menu">
                <?php $_smarty_tpl->tpl_vars['extra_params'] = new Smarty_variable("&table=".((string)$_smarty_tpl->tpl_vars['table']->value)."&id_name=".((string)$_smarty_tpl->tpl_vars['object_id_name']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['st_return_url']->value) {?>
                    <?php ob_start();
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['st_return_url']->value), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['extra_params'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['extra_params']->value)."&redirect_url=".$_tmp5, null, 0);?>
                <?php }?>

                <?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items_status']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status_id']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
                    <li <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['status_id']->value) {?>class="disabled"<?php }?>>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:status_select_item")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:status_select_item"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a class="status-link-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>cm-confirm<?php }?> <?php if ($_smarty_tpl->tpl_vars['status']->value==$_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php } else { ?>cm-ajax cm-post <?php if ($_smarty_tpl->tpl_vars['ajax_full_render']->value) {?>cm-ajax-full-render<?php }
}?>"
                            <?php if ($_smarty_tpl->tpl_vars['status_target_id']->value) {?>
                                data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                            href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['update_controller']->value).".update_status?id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&status=".((string)$_smarty_tpl->tpl_vars['status_id']->value).((string)$_smarty_tpl->tpl_vars['extra_params']->value).((string)$_smarty_tpl->tpl_vars['dynamic_object']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            onclick="return fn_check_object_status(this, '<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
', '<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['status_id']->value]['params']['color'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');
}?>');"
                            >
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

                            </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:status_select_item"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </li>
                <?php } ?>
            </ul>

            <?php if (!Smarty::$_smarty_vars['capture']['avail_box']) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/select_popup.js"),$_smarty_tpl);?>

                <?php $_smarty_tpl->_capture_stack[0][] = array("avail_box", null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php }?>
        <?php }?>
    <!--product_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select--></div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:status_name_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
