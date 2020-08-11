<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:39:11
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_debt_payout\hooks\index\finance_statistic_balance.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12174049635f2d132f9fd693-09092974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71423fa0f8f3abb45db07979acfc510ab85e6983' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\finance_statistic_balance.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12174049635f2d132f9fd693-09092974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_pay_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d132fa44fc4_51295129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d132fa44fc4_51295129')) {function content_5f2d132fa44fc4_51295129($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_pay_button']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
