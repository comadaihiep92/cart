<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:52:26
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_plans\views\vendor_plans\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20092364485f7b332a54c5e7-06974797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '534203d87ee8a3d1b7cd5600ee119af2a9011458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_plans\\views\\vendor_plans\\manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20092364485f7b332a54c5e7-06974797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'plans' => 0,
    'has_management_permissions' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'plan' => 0,
    'periodicities' => 0,
    'key' => 0,
    'item' => 0,
    'return_current_url' => 0,
    'preview_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b332a6235c2_94917285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b332a6235c2_94917285')) {function content_5f7b332a6235c2_94917285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','price','vendor_plans.best_choise_short','vendors','status','position_short','name','price','vendor_plans.best_choise_short','vendors','tools','vendor_plans.editing_vendor_plan','edit','delete','status','no_data','preview','vendor_plans.new_vendor_plan','vendor_plans.add_vendor_plan','vendor_plans.vendor_plans'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="vendor_plans_form" id="vendor_plans_form">

<?php $_smarty_tpl->tpl_vars['has_management_permissions'] = new Smarty_variable(fn_check_permissions("vendor_plans","update","admin","POST"), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars["return_current_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['plans']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative<?php if (!$_smarty_tpl->tpl_vars['has_management_permissions']->value) {?> cm-hide-inputs<?php }?> table-responsive">
    <thead>
    <tr>
        <th width="1%" class="left mobile-hide">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="6%" class="nowrap">
            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
        </th>
        <th width="28%">
            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
        </th>
        <th width="22%" class="center">
            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
        </th>
        <th width="10%" class="center nowrap"><?php echo $_smarty_tpl->__("vendor_plans.best_choise_short");?>
</th>
        <th width="12%" class="center"><?php echo $_smarty_tpl->__("vendors");?>
</th>
        <th width="10%" class="nowrap">&nbsp;</th>
        <th width="10%" class="right">
            <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}
echo $_smarty_tpl->__("status");?>
</a>
        </th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['plan']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-ct-company-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
        <td class="left mobile-hide">
            <input type="checkbox" name="plan_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
        </td>
        <td class="left" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
            <input type="text" name="plans_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden" />
        </td>
        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("name");?>
">
            <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                <a class="row-status cm-external-click" data-ca-external-click-id="<?php echo htmlspecialchars("opener_plan_".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                </a>
            <?php }?>
        </td>
        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("price");?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[@constant('CART_PRIMARY_CURRENCY')]['symbol'], ENT_QUOTES, 'UTF-8');?>
)">
            <input type="text" name="plans_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['price'], ENT_QUOTES, 'UTF-8');?>
" size="6" class="input-mini input-hidden" />&nbsp;<select name="plans_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][periodicity]" class="input-small input-hidden"><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['periodicities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['plan']->value['periodicity']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option><?php } ?></select>
        </td>
        <td class="center" data-th="<?php echo $_smarty_tpl->__("vendor_plans.best_choise_short");?>
">
            <input type="radio" name="default_plan" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> checked="checked"<?php }?> />
        </td>
        <td class="center" data-th="<?php echo $_smarty_tpl->__("vendors");?>
">
            <a href="<?php echo htmlspecialchars(fn_url("companies.manage?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])), ENT_QUOTES, 'UTF-8');?>
" class="badge"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['companies_count'], ENT_QUOTES, 'UTF-8');?>
</a>
        </td>
        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_plans:list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_plans:list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                    <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"plan_".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'title_start'=>$_smarty_tpl->__("vendor_plans.editing_vendor_plan"),'title_end'=>$_smarty_tpl->tpl_vars['plan']->value['plan'],'link_text'=>$_smarty_tpl->__("edit"),'act'=>"link",'href'=>"vendor_plans.update?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])), 0);?>
</li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'href'=>"vendor_plans.delete?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'text'=>$_smarty_tpl->__("delete"),'method'=>"POST"));?>
</li>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_plans:list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <div class="hidden-tools">
                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>

            </div>
        </td>
        <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['plan']->value['plan_id'],'status'=>$_smarty_tpl->tpl_vars['plan']->value['status'],'hidden'=>true,'update_controller'=>"vendor_plans",'hide_for_vendor'=>!$_smarty_tpl->tpl_vars['has_management_permissions']->value), 0);?>

        </td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['plans']->value&&$_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_items", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'target'=>"_blank",'text'=>$_smarty_tpl->__("preview"),'href'=>$_smarty_tpl->tpl_vars['preview_uri']->value));?>
</li>
            <li class="divider mobile-hide"></li>
            <li class="mobile-hide"><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[vendor_plans.m_delete]",'form'=>"vendor_plans_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_items']));?>


        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[vendor_plans.m_update]",'but_role'=>"action",'but_target_form'=>"vendor_plans_form",'but_meta'=>"cm-submit"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_usergroups",'text'=>$_smarty_tpl->__("vendor_plans.new_vendor_plan"),'title'=>$_smarty_tpl->__("vendor_plans.add_vendor_plan"),'href'=>fn_url("vendor_plans.add"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_plans.manage",'view_type'=>"vendor_plans"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/vendor_plans/components/plans_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"vendor_plans.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("vendor_plans.vendor_plans"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
