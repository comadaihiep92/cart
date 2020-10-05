<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:52:31
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\companies\components\balance_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9063155965f7b332f571b29-26644488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680f8fae4749f1db01a29f8d7708db15b12cf3a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\companies\\components\\balance_search_form.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9063155965f7b332f571b29-26644488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'payout_types' => 0,
    'type_id' => 0,
    'approval_statuses' => 0,
    'status_id' => 0,
    'status_description' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b332f594750_58689377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b332f594750_58689377')) {function content_5f7b332f594750_58689377($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','vendor','all_vendors','vendor_payouts.type','all','vendor_payouts.type.','vendor_payouts.approval_status','all'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="balance_search_form" method="get" class="cm-disable-empty">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>

<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php if ($_REQUEST['selected_section']!='') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="sidebar-field ajax-select">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("vendor");?>
</label>
        <div class="controls">
            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <input type="hidden" name="vendor" id="search_hidden_vendor" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['search']->value['vendor'])===null||$tmp==='' ? 'all' : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <?php echo $_smarty_tpl->getSubTemplate ("common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_url'=>"companies.get_companies_list?show_all=Y",'text'=>(($tmp = @fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']))===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") : $tmp),'result_elm'=>"search_hidden_vendor",'id'=>"company_search",'relative_dropdown'=>false), 0);?>

                <?php } else { ?>
                <?php echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['payout_types']->value) {?>
    <div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("vendor_payouts.type");?>
:</label>
        <select name="payout_type">
            <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
            <?php  $_smarty_tpl->tpl_vars['type_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payout_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_id']->key => $_smarty_tpl->tpl_vars['type_id']->value) {
$_smarty_tpl->tpl_vars['type_id']->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_REQUEST['payout_type']==$_smarty_tpl->tpl_vars['type_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_payouts.type.".((string)$_smarty_tpl->tpl_vars['type_id']->value));?>
</option>
            <?php } ?>
        </select>
    </div>
<?php }?>


<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("vendor_payouts.approval_status");?>
:</label>
    <select name="approval_status">
        <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
        <?php  $_smarty_tpl->tpl_vars['status_description'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_description']->_loop = false;
 $_smarty_tpl->tpl_vars['status_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['approval_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_description']->key => $_smarty_tpl->tpl_vars['status_description']->value) {
$_smarty_tpl->tpl_vars['status_description']->_loop = true;
 $_smarty_tpl->tpl_vars['status_id']->value = $_smarty_tpl->tpl_vars['status_description']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_REQUEST['approval_status']==$_smarty_tpl->tpl_vars['status_id']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_description']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>

<div class="sidebar-field">
    <?php echo $_smarty_tpl->getSubTemplate ("common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"balance_search_form",'display'=>"form"), 0);?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'no_adv_link'=>true,'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"balance"), 0);?>


</form>
</div>
<hr><?php }} ?>
