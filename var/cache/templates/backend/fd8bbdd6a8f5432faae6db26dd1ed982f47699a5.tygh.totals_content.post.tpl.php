<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:59
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\hooks\orders\totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14582640435f2d213346ee30-96050472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd8bbdd6a8f5432faae6db26dd1ed982f47699a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\totals_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14582640435f2d213346ee30-96050472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2133496b06_26592859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2133496b06_26592859')) {function content_5f2d2133496b06_26592859($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points','points_lowercase','points_in_use','points_lowercase'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']));?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points']));?>
):</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
