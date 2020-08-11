<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:33:14
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\call_requests\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6340973705f2d11caa85263-24263910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5c7365f3cd5a27e34f71ff0a7d3c1977fc775e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\call_requests\\hooks\\index\\scripts.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6340973705f2d11caa85263-24263910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d11caaa3e43_94878701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d11caaa3e43_94878701')) {function content_5f2d11caaa3e43_94878701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/call_requests/index.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask']) {?>
    Tygh.call_phone_mask = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['call_requests']['phone_mask'], ENT_QUOTES, 'UTF-8');?>
'
<?php }?>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
