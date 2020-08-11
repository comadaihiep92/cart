<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 09:08:43
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19611882745f30e46b19b685-54266277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9424aa4a304b952f4ef5cf9917f31a810fb7e8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\colorpicker.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19611882745f30e46b19b685-54266277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_meta' => 0,
    'cp_attrs' => 0,
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
    'show_picker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30e46b6106a0_75711682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30e46b6106a0_75711682')) {function content_5f30e46b6106a0_75711682($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.render_tag_attrs.php';
?><div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = @$_smarty_tpl->tpl_vars['cp_attrs']->value)===null||$tmp==='' ? array() : $tmp));?>
>
    <input
        type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }} ?>
