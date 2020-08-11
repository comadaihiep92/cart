<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:47:36
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\components\easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3839873245f2d1528d19e82-22843570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abf37cadaf00ef5367320e932c8b81ef6938d129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\components\\easter_egg.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3839873245f2d1528d19e82-22843570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d1528d30400_38137998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d1528d30400_38137998')) {function content_5f2d1528d30400_38137998($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
