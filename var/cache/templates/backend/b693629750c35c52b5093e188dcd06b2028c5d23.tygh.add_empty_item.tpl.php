<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:46
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\buttons\add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:353759175f2d20361eb925-02350116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b693629750c35c52b5093e188dcd06b2028c5d23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\buttons\\add_empty_item.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '353759175f2d20361eb925-02350116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20361ffa18_77419633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20361ffa18_77419633')) {function content_5f2d20361ffa18_77419633($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
