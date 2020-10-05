<?php /* Smarty version Smarty-3.1.21, created on 2020-09-22 19:01:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\addons\components\addon_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4745823545f6a1ff6749472-47980003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c94ddaffb12e28054fec2fe097a239364b08e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\addons\\components\\addon_info.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4745823545f6a1ff6749472-47980003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_version' => 0,
    'addon_supplier' => 0,
    'addon_supplier_link' => 0,
    'addon_install_datetime' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f6a1ff6766e34_86188715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a1ff6766e34_86188715')) {function content_5f6a1ff6766e34_86188715($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('version'));
?>
<div class="addon-info pull-left">
    <small class="muted addon-version"><?php echo $_smarty_tpl->__("version");?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addon_version']->value)===null||$tmp==='' ? 0.1 : $tmp), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php if ($_smarty_tpl->tpl_vars['addon_supplier']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['addon_supplier_link']->value) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier_link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } else { ?>
            <small class="muted addon-supplier"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addon_supplier']->value, ENT_QUOTES, 'UTF-8');?>
</small>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_install_datetime']->value) {?>
        <small class="muted addon-installed-date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['addon_install_datetime']->value,((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</small>
    <?php }?>
</div><?php }} ?>
