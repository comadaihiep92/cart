<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:01
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\companies\components\reason_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16691636075f2d20f94d8c42-53474492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c501d68ccba26733d33168aaa2265b445e721d93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\companies\\components\\reason_container.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16691636075f2d20f94d8c42-53474492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'mandatory_notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20f94fd764_48301922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20f94fd764_48301922')) {function content_5f2d20f94fd764_48301922($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</label>
    <div class="controls">
    <textarea class="span9" name="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" id="action_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->tpl_vars['mandatory_notification']->value) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
        </div>
    </div>
</div>
</div><?php }} ?>
