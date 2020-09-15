<?php /* Smarty version Smarty-3.1.21, created on 2020-09-15 16:30:47
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\new_ui\views\new_orders\totals_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16005051345f4627bb828dc4-01742331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d78e701696e33e78baf30c0d135089c4a7aeae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\new_ui\\views\\new_orders\\totals_form.tpl',
      1 => 1600168854,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16005051345f4627bb828dc4-01742331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f4627bb896601_56142275',
  'variables' => 
  array (
    'cart_products' => 0,
    'key' => 0,
    'cp' => 0,
    'order_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f4627bb896601_56142275')) {function content_5f4627bb896601_56142275($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-table" name="om_cart_form" enctype="multipart/form-data">
<?php  $_smarty_tpl->tpl_vars["cp"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cp"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cp"]->key => $_smarty_tpl->tpl_vars["cp"]->value) {
$_smarty_tpl->tpl_vars["cp"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["cp"]->key;
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" size="3" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>
<input type="hidden"  name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"  />
<button type="submit" name="dispatch[new_orders.update_totals]" value="Recalculate">Update order</button>
</form><?php }} ?>
