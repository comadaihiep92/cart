<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:33:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\companies\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8138250235f2d11c8d915f5-40526924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb6ecf048e91d2245052238212351f0e7c8430da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\companies\\components\\picker\\item.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8138250235f2d11c8d915f5-40526924',
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
  'unifunc' => 'content_5f2d11c8da2308_38791184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d11c8da2308_38791184')) {function content_5f2d11c8da2308_38791184($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
