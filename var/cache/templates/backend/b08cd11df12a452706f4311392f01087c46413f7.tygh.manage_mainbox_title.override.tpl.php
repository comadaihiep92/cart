<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:47:39
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\manage_mainbox_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11760280665f2d152b95c3a7-40760070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b08cd11df12a452706f4311392f01087c46413f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\manage_mainbox_title.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11760280665f2d152b95c3a7-40760070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d152b96f735_67767334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d152b96f735_67767334')) {function content_5f2d152b96f735_67767334($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php }} ?>
