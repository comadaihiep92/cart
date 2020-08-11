<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\profiles\components\profile_orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18303206355f2d2104405727-11053205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcdda0eea04655bff29566cbbcc2f977ad269611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\profiles\\components\\profile_orders.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18303206355f2d2104405727-11053205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'can_view_orders' => 0,
    'user_data' => 0,
    'user_type' => 0,
    'orders_stats' => 0,
    'settled_statuses' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d210443f249_11671939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d210443f249_11671939')) {function content_5f2d210443f249_11671939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_format_price')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.format_price.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('orders','total_orders','total_paid_orders','total_spent_money'));
?>
<?php if ($_smarty_tpl->tpl_vars['can_view_orders']->value&&$_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_type']->value==smarty_modifier_enum("UserTypes::CUSTOMER")) {?>
    <div class="sidebar-row">
        <h6><?php echo $_smarty_tpl->__("orders");?>
</h6>
        <ul class="unstyled">
            <li><?php echo $_smarty_tpl->__("total_orders");?>
 <span><a class="pull-right" href="<?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_paid_orders");?>
 <span><a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_tmp3), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_settled_orders'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
</a></span></li>
            <li><?php echo $_smarty_tpl->__("total_spent_money");?>
 <a class="pull-right" href="<?php ob_start();
echo htmlspecialchars(http_build_query(array("status"=>array_values($_smarty_tpl->tpl_vars['settled_statuses']->value))), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo htmlspecialchars(fn_url("orders.manage?is_search=Y&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])."&".$_tmp4), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @smarty_modifier_format_price($_smarty_tpl->tpl_vars['orders_stats']->value[$_smarty_tpl->tpl_vars['user_data']->value['user_id']]['total_spend'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]))===null||$tmp==='' ? 0 : $tmp);?>
</a></li>
        </ul>
    </div>
<?php }?><?php }} ?>
