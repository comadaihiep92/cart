<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\products\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3729073425f2d2006c16ea5-88176449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94c522c903c384b01a911d5a2b946d28962e7ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\products\\components\\picker\\item.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3729073425f2d2006c16ea5-88176449',
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
  'unifunc' => 'content_5f2d2006c376c0_21832281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2006c376c0_21832281')) {function content_5f2d2006c376c0_21832281($_smarty_tpl) {?>
    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <i class="glyph-image"></i></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
