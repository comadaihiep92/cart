<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:59
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\storefronts\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3284237405f2d2007bff045-31821616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8cda39b4ea57b382000715d98676af4df0b77ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\storefronts\\components\\picker\\item.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3284237405f2d2007bff045-31821616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2007c16be0_45115867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2007c16be0_45115867')) {function content_5f2d2007c16be0_45115867($_smarty_tpl) {?><div class="object-picker__storefronts-main">
    <div class="object-picker__storefronts-name">
        <div class="object-picker__storefronts-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
