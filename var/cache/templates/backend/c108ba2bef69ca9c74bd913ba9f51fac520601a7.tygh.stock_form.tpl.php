<?php /* Smarty version Smarty-3.1.21, created on 2020-09-20 04:02:41
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\new_ui\views\new_orders\stock_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18121417735f66aa314da6f7-94480351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c108ba2bef69ca9c74bd913ba9f51fac520601a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\new_ui\\views\\new_orders\\stock_form.tpl',
      1 => 1600345047,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18121417735f66aa314da6f7-94480351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart_products' => 0,
    'key' => 0,
    'cp' => 0,
    'order_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f66aa3155f736_19796279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f66aa3155f736_19796279')) {function content_5f66aa3155f736_19796279($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-table" name="om_cart_form" enctype="multipart/form-data">
<?php  $_smarty_tpl->tpl_vars["cp"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cp"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cp"]->key => $_smarty_tpl->tpl_vars["cp"]->value) {
$_smarty_tpl->tpl_vars["cp"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["cp"]->key;
?>
        <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } ?>
<input type="hidden"  name="order_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
"  />
<button type="submit" name="dispatch[new_orders.place_order.save]" value="Recalculate">Update order</button>
</form><?php }} ?>
