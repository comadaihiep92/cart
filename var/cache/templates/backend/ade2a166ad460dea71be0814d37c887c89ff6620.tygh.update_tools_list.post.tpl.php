<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\hooks\profiles\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7667453485f2d21047f1da1-28729699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade2a166ad460dea71be0814d37c887c89ff6620' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\update_tools_list.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7667453485f2d21047f1da1-28729699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2104806bc9_75712943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2104806bc9_75712943')) {function content_5f2d2104806bc9_75712943($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_user_points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C") {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("view_user_points");?>
</a></li>
<?php }?><?php }} ?>
