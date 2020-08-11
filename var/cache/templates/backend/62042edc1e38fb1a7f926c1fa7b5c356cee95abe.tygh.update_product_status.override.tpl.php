<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\update_product_status.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14435923755f2d202f210411-64750954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62042edc1e38fb1a7f926c1fa7b5c356cee95abe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\update_product_status.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14435923755f2d202f210411-64750954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'show_premoderation_reason' => 0,
    'obj' => 0,
    'items_status' => 0,
    'status' => 0,
    'hidden' => 0,
    'non_editable_status' => 0,
    'id' => 0,
    'config' => 0,
    'current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202f252bb4_52179041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202f252bb4_52179041')) {function content_5f2d202f252bb4_52179041($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('status','vendor_data_premoderation.approve_product_btn','vendor_data_premoderation.disapprove_product_btn','vendor_data_premoderation.disapproval_reason','vendor_data_premoderation.enter_disapproval_reason'));
?>
<?php $_smarty_tpl->tpl_vars['show_premoderation_reason'] = new Smarty_variable(!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value&&fn_check_permissions("premoderation","m_approve","admin")) {?>
    <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj']->value['status'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['items_status']->value)===null||$tmp==='' ? (fn_get_product_statuses($_smarty_tpl->tpl_vars['status']->value,$_smarty_tpl->tpl_vars['hidden']->value)) : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['non_editable_status']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_status_container")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_status_container"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div data-ca-product-status-container="true">
            <div class="control-group">
                <label class="control-label cm-required"><?php echo $_smarty_tpl->__("status");?>
:</label>
                <div class="controls">
                    <input
                        type="hidden"
                        name="product_data[status]"
                        class="product__status-switcher"
                        id="elm_product_status_0_<?php echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>
"
                        value=<?php echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>

                        data-ca-product-status-switcher="true"
                        disabled
                    >
                    <div class="btn-group" id="product_status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_select">
                        <?php $_smarty_tpl->tpl_vars['current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
                        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"premoderation_approve",'text'=>$_smarty_tpl->__("vendor_data_premoderation.approve_product_btn"),'href'=>"premoderation.m_approve?product_ids[]=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value),'icon'=>"icon-thumbs-up",'icon_first'=>true,'class'=>"btn",'method'=>"POST"));?>

                        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'id'=>"premoderation_disapprove",'text'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product_btn"),'icon'=>"icon-thumbs-down",'icon_first'=>true,'class'=>"btn",'data'=>array("data-ca-premoderation-disapprove"=>"true")));?>

                    </div>
                </div>
            </div>

            <div
                class="control-group <?php if (!$_smarty_tpl->tpl_vars['show_premoderation_reason']->value||!$_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason']) {?>hidden<?php }?>"
                data-ca-product-disapproval-reason-section="false">
                <label for="elm_disapproval_reason"
                    class="control-label"
                >
                    <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
                </label>
                <div class="controls">
                    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['show_premoderation_reason']->value&&fn_check_permissions("premoderation","m_approve","admin")) {?>
                        <textarea class="input-large 
                            <?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value) {?>hidden<?php }?>"
                            rows="5"
                            name="product_data[premoderation_reason]"
                            placeholder="<?php echo $_smarty_tpl->__("vendor_data_premoderation.enter_disapproval_reason");?>
"
                            disabled="disabled"
                            data-ca-product-disapproval-reason="true"
                        ></textarea>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_premoderation_reason']->value) {?>
                        <p data-ca-product-disapproval-reason-text="true"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
                    <?php }?>
                </div>
            </div>
        </div>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_status_container"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
