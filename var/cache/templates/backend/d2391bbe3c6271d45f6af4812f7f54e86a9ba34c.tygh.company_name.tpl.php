<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:25
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\companies\components\company_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1896285735f2d2099251ed7-48702602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2391bbe3c6271d45f6af4812f7f54e86a9ba34c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\companies\\components\\company_name.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1896285735f2d2099251ed7-48702602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'simple' => 0,
    '_company_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20992743a7_71855894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20992743a7_71855894')) {function content_5f2d20992743a7_71855894($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['object']->value['company_id']) {?>
    <?php if (!$_smarty_tpl->tpl_vars['object']->value['company_name']) {?>
        <?php $_smarty_tpl->tpl_vars['_company_name'] = new Smarty_variable(fn_get_company_name($_smarty_tpl->tpl_vars['object']->value['company_id']), null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['simple']->value) {?>
        <small class="muted"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php } else { ?>
        <p class="muted"><small><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['object']->value['company_name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['_company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
</small></p>
    <?php }?>
<?php }?><?php }} ?>
