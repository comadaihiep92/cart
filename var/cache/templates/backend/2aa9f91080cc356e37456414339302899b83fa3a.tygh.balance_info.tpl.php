<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:52:31
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\companies\components\balance_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5427759435f7b332f1ab423-83486020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa9f91080cc356e37456414339302899b83fa3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\companies\\components\\balance_info.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5427759435f7b332f1ab423-83486020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b332f1bc845_91007121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b332f1bc845_91007121')) {function content_5f7b332f1bc845_91007121($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_payouts.income_carried_forward','vendor_payouts.income','vendor_payouts.balance_carried_forward','vendor_payouts.balance'));
?>
<div class="statistic-list pull-right clearfix" id="balance_total">
    <div class="table-wrapper">
        <table width="100%">
            <thead>
            <tr>
                <th></th>
                <th width="15%" class="right"><h4>Totals</h4></th>
            </tr>
            </thead>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income_carried_forward'])) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.income_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income_carried_forward']), 0);?>
</span></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['income'])) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.income");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['income']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income']), 0);?>
</h4></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward'])) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.balance_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward']), 0);?>
</span></td>
                </tr>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['totals']->value['balance'])) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.balance");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['balance']>0) {?>success<?php } else { ?>error<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance']), 0);?>
</h4></td>
                </tr>
            <?php }?>
        </table>
    </div>
<!--balance_total--></div>
<?php }} ?>
