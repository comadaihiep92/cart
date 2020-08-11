<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:37
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\products\update_product_name.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5304117005f2d202d4c5f73-09536638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0f2a79bebca3f2414e79d4fc2c673b64f62d8b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_name.override.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5304117005f2d202d4c5f73-09536638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202d4dc7b9_46307488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202d4dc7b9_46307488')) {function content_5f2d202d4dc7b9_46307488($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("product")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_name")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[product]" class="cm-no-hide-input">
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
