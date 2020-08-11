<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:42
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\hooks\profiles\list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17377371795f2d2122855976-98390079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6187c1c5b6ff669a181f691999d739700e8a2979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\list_extra_links.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17377371795f2d2122855976-98390079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d21228ec576_11254949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d21228ec576_11254949')) {function content_5f2d21228ec576_11254949($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
