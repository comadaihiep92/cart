<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:25
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15692349185f2d20991a3092-45824066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93c5f97256eff33d5e41e10db3fef5b27c92c9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\product_info.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15692349185f2d20991a3092-45824066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20991bb4e4_95013628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20991bb4e4_95013628')) {function content_5f2d20991bb4e4_95013628($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
