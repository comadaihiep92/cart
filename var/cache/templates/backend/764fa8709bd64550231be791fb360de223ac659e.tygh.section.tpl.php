<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:04
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10624296485f2d20842af3d7-32181595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '764fa8709bd64550231be791fb360de223ac659e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\section.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10624296485f2d20842af3d7-32181595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20842c8572_71455415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20842c8572_71455415')) {function content_5f2d20842c8572_71455415($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
