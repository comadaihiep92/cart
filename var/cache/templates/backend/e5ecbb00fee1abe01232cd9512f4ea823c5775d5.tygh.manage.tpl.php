<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 09:08:42
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\statuses\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984238345f30e46a3b5361-17007376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ecbb00fee1abe01232cd9512f4ea823c5775d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\statuses\\manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1984238345f30e46a3b5361-17007376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ability_sorting' => 0,
    'statuses' => 0,
    's' => 0,
    'type' => 0,
    'order_email_templates' => 0,
    'cur_href_delete' => 0,
    'can_create_status' => 0,
    'runtime' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30e46a4712a1_61562499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30e46a4712a1_61562499')) {function content_5f30e46a4712a1_61562499($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_customer_notification','edit_admin_notification','editing_status','no_data','new_status','add_status','add_status','unable_to_create_status','maximum_number_of_statuses_reached'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<div class="items-container <?php if ($_smarty_tpl->tpl_vars['ability_sorting']->value) {?>cm-sortable  ui-sortable<?php }?>" id="statuses_list"
     <?php if ($_smarty_tpl->tpl_vars['ability_sorting']->value) {?>data-ca-sortable-table="statuses" data-ca-sortable-id-name="status_id"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['statuses']->value) {?>
<div class="table-wrapper">
    <table class="table table-middle table-objects">
    <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['s']->value['is_default']!=="Y") {?>
            <?php $_smarty_tpl->tpl_vars["cur_href_delete"] = new Smarty_variable("statuses.delete?status=".((string)$_smarty_tpl->tpl_vars['s']->value['status'])."&type=".((string)$_smarty_tpl->tpl_vars['type']->value), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["cur_href_delete"] = new Smarty_variable('', null, 0);?>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("tool_items", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"statuses:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"statuses:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"statuses:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php if ($_smarty_tpl->tpl_vars['type']->value==@constant('STATUSES_ORDER')) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['order_email_templates']->value[$_smarty_tpl->tpl_vars['s']->value['status']]['C'])) {?>
                    <li>
                        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("edit_customer_notification"),'href'=>fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['order_email_templates']->value[$_smarty_tpl->tpl_vars['s']->value['status']]['C']->getId()))));?>

                    </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['order_email_templates']->value[$_smarty_tpl->tpl_vars['s']->value['status']]['A'])) {?>
                    <li>
                        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'text'=>$_smarty_tpl->__("edit_admin_notification"),'href'=>fn_url("email_templates.update?template_id=".((string)$_smarty_tpl->tpl_vars['order_email_templates']->value[$_smarty_tpl->tpl_vars['s']->value['status']]['A']->getId()))));?>

                    </li>
                <?php }?>
            <?php }?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("extra_data", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"statuses:extra_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"statuses:extra_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"statuses:extra_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php ob_start();
echo $_smarty_tpl->__("editing_status");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>mb_strtolower($_smarty_tpl->tpl_vars['s']->value['status'], 'UTF-8'),'text'=>$_smarty_tpl->tpl_vars['s']->value['description'],'href'=>"statuses.update?status=".((string)$_smarty_tpl->tpl_vars['s']->value['status'])."&type=".((string)$_smarty_tpl->tpl_vars['type']->value),'href_delete'=>$_smarty_tpl->tpl_vars['cur_href_delete']->value,'delete_target_id'=>"statuses_list,actions_panel",'header_text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['s']->value['description']),'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['s']->value['status_id']),'table'=>"statuses",'object_id_name'=>"status_id",'no_table'=>true,'draggable'=>$_smarty_tpl->tpl_vars['ability_sorting']->value,'nostatus'=>true,'tool_items'=>Smarty::$_smarty_vars['capture']['tool_items'],'extra_data'=>Smarty::$_smarty_vars['capture']['extra_data'],'text_wrap'=>true), 0);?>


    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--statuses_list--></div>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if (!isset($_smarty_tpl->tpl_vars['can_create_status']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['can_create_status'] = new Smarty_variable(true, null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/statuses/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status_data'=>array()), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"statuses:button")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"statuses:button"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"statuses:button"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php if (!(fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['can_create_status']->value) {?>
            <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_status",'action'=>"statuses.add",'text'=>$_smarty_tpl->__("new_status"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'link_text'=>$_smarty_tpl->__("add_status"),'act'=>"link"), 0);?>
</li>
            <?php } else { ?>
            <li><a id="status_limit_reached" href="#"><?php echo $_smarty_tpl->__("add_status");?>
</a></li>
            <?php }?>
        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"statuses:adv_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"statuses:adv_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"statuses:adv_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $){
        _.tr("unable_to_create_status", "<?php echo strtr($_smarty_tpl->__("unable_to_create_status"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
        _.tr("maximum_number_of_statuses_reached", "<?php echo strtr($_smarty_tpl->__("maximum_number_of_statuses_reached"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
        $("#status_limit_reached").on("click", function() {
            $.ceNotification("show", {
                type: "E",
                title: _.tr("unable_to_create_status"),
                message: _.tr("maximum_number_of_statuses_reached"),
                message_state: "I"
            });
        });
    })(Tygh, $);

<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
