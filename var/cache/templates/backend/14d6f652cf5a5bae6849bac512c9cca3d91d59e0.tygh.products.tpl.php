<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:57
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\order_management\components\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5123946555f2d2005b8f842-74037528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d6f652cf5a5bae6849bac512c9cca3d91d59e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\order_management\\components\\products.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5123946555f2d2005b8f842-74037528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'cart_products' => 0,
    'key' => 0,
    'cp' => 0,
    'settings' => 0,
    'original_price' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'id' => 0,
    'autofocus' => 0,
    'order_company_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2005c0b1a2_14391928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2005c0b1a2_14391928')) {function content_5f2d2005c0b1a2_14391928($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product','price','discount','quantity','options','product','delete','sku','price','free','discount','quantity','options','expand_collapse_list','expand_collapse_list','show_options','expand_collapse_list','expand_collapse_list','hide_options','nocombination'));
?>
<table width="100%" class="table table--relative table-responsive table-middle order-management-products">
<thead>
    <tr>
        <th class="left">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
        <th width="50%"><?php echo $_smarty_tpl->__("product");?>
</th>
        <th width="20%" colspan="2"><?php echo $_smarty_tpl->__("price");?>
</th>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
        <th width="10%"><?php echo $_smarty_tpl->__("discount");?>
</th>
        <?php }?>
        <th class="center"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <th width="3%"><?php echo $_smarty_tpl->__("options");?>
</th>
    </tr>
</thead>

<?php $_smarty_tpl->_capture_stack[0][] = array("extra_items", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:products_extra_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:products_extra_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:products_extra_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php  $_smarty_tpl->tpl_vars["cp"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["cp"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["cp"]->key => $_smarty_tpl->tpl_vars["cp"]->value) {
$_smarty_tpl->tpl_vars["cp"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["cp"]->key;
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"order_management:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"order_management:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<tr>
    <td class="left order-management-product-check">
        <input type="checkbox" name="cart_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>
    <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
        <div class="order-product-image">
            <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>(($tmp = @$_smarty_tpl->tpl_vars['cp']->value['main_pair']['icon'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cp']->value['main_pair']['detailed'] : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['cp']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['cp']->value['product_id']))), 0);?>

        </div>
        <div class="order-product-info">
            <a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['cp']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['cp']->value['product'];?>
</a>
            <a class="cm-confirm cm-post hidden-tools icon-remove-sign order-management-delete" href="<?php echo htmlspecialchars(fn_url("order_management.delete?cart_ids[]=".((string)$_smarty_tpl->tpl_vars['key']->value)), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("delete");?>
"></a>
            <div class="products-hint">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['cp']->value['product_code']) {?><p class="products-hint__code"><?php echo $_smarty_tpl->__("sku");?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['cp']->value), 0);?>

        </div>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("price");?>
" width="3%" class="order-management-price-check">
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
            <?php echo $_smarty_tpl->__("free");?>

            <?php } else { ?>
            <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_price]" value="N" />
            <input class="inline order-management-price-check-checkbox" type="checkbox" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_price]" value="Y" <?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price']=="Y") {?>checked="checked"<?php }?> onchange="Tygh.$('#db_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
,#manual_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();"/>
        <?php }?>
    </td>
    <td class="left order-management-price">
    <?php if (!$_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price']=="Y") {?>
            <?php echo smarty_function_math(array('equation'=>"price - modifier",'price'=>$_smarty_tpl->tpl_vars['cp']->value['original_price'],'modifier'=>(($tmp = @$_smarty_tpl->tpl_vars['cp']->value['modifiers_price'])===null||$tmp==='' ? 0 : $tmp),'assign'=>"original_price"),$_smarty_tpl);?>

        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["original_price"] = new Smarty_variable($_smarty_tpl->tpl_vars['cp']->value['original_price'], null, 0);?>
        <?php }?>
        <span class="<?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price']=="Y") {?>hidden<?php }?>" id="db_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['original_price']->value), 0);?>
</span>
        <div class="<?php if ($_smarty_tpl->tpl_vars['cp']->value['stored_price']!="Y") {?>hidden<?php }?>" id="manual_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cp']->value['base_price'],'view'=>"input",'input_name'=>"cart_products[".((string)$_smarty_tpl->tpl_vars['key']->value)."][price]",'class'=>"input-hidden input-full",'product_id'=>$_smarty_tpl->tpl_vars['cp']->value['product_id']), 0);?>

        </div>
    <?php }?>
    </td>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>
    <td data-th="<?php echo $_smarty_tpl->__("discount");?>
" class="no-padding nowrap">
    <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>''), 0);?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['order_id']) {?>
        <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][stored_discount]" value="Y" />
        <input type="text" class="input-hidden input-mini cm-numeric" size="5" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][discount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['discount'], ENT_QUOTES, 'UTF-8');?>
" data-a-sign="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol']);?>
" data-a-dec="," data-a-sep="." />
        <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cp']->value['discount']), 0);?>

        <?php }?>
    <?php }?>
    </td>
    <?php }?>
    <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center order-management-quantity">
        <input type="hidden" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>
        <input type="hidden" size="3" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <span class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" id="amount_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input class="input-hidden input-micro" type="text" size="3" name="cart_products[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['amount'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>disabled="disabled"<?php }?> />
        <!--amount_update_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    </td>
    <td data-th="<?php echo $_smarty_tpl->__("options");?>
" width="3%" class="nowrap order-management-options">
        <?php if ($_smarty_tpl->tpl_vars['cp']->value['product_options']) {?>
        <div id="on_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand cm-combination-options-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="order-management-options-desktop">
                <div class="icon-list-ul cm-external-click" data-ca-external-click-id="on_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="order-management-options-mobile">
                <div class="btn cm-external-click" data-ca-external-click-id="on_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_options");?>
</div>
            </div>
        </div>
        <div id="off_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hand hidden cm-combination-options-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="order-management-options-desktop">
                <div class="icon-list-ul cm-external-click" data-ca-external-click-id="off_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="order-management-options-mobile">
                <div class="btn cm-external-click"  data-ca-external-click-id="off_product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("hide_options");?>
</div>
            </div>
        </div>
        <?php }?>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['cp']->value['product_options']) {?>
<tr id="product_options_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-ex-op hidden row-more row-gray order-management-options-content">
    <td class="mobile-hide">&nbsp;</td>
    <td colspan="<?php if ($_smarty_tpl->tpl_vars['cart']->value['use_discount']) {?>9<?php } else { ?>8<?php }?>">
        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['cp']->value['product_options'],'name'=>"cart_products",'id'=>$_smarty_tpl->tpl_vars['key']->value,'use_exceptions'=>"Y",'product'=>$_smarty_tpl->tpl_vars['cp']->value,'additional_class'=>"option-item"), 0);?>

        <div id="warning_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" class="pull-left notification-title-e hidden">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->__("nocombination");?>
</div>
    </td>
</tr>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"order_management:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } ?>

<tr>
    <td colspan="7" class="mixed-controls">
        <div class="form-inline object-product-add cm-object-product-add-container">
            <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"product_data",'multiple'=>true,'select_class'=>"cm-object-product-add",'autofocus'=>$_smarty_tpl->tpl_vars['autofocus']->value,'view_mode'=>"simple",'display'=>"options_price",'extra_var'=>"order_management.add",'company_id'=>$_smarty_tpl->tpl_vars['order_company_id']->value), 0);?>

        </div>
    </td>
</tr>

    <?php echo Smarty::$_smarty_vars['capture']['extra_items'];?>

</table><?php }} ?>
