<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:11
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\products\components\products_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4361621255f2d2013956b73-49586252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0d4a68414b2f146f22af48aac825434dd052761' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\products\\components\\products_list.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4361621255f2d2013956b73-49586252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'products' => 0,
    'hide_amount' => 0,
    'show_radio' => 0,
    'c_url' => 0,
    'rev' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'show_price' => 0,
    'is_order_management' => 0,
    'checkbox_name' => 0,
    'product' => 0,
    'hide_options' => 0,
    'show_aoc' => 0,
    'additional_class' => 0,
    'default_product_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20139fcfa9_46132476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20139fcfa9_46132476')) {function content_5f2d20139fcfa9_46132476($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','quantity','product_name','price','add_product','no_data'));
?>
<div id="add_product">
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @"pagination_".((string)$_REQUEST['data_id']))===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>



<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<input type="hidden" id="add_product_id" name="product_id" value=""/>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table--relative table-responsive">
    <thead>
    <tr>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_head")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_head"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="1%">
                <?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>&nbsp;<?php } else {
echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
            </th>
        <?php }?>
        <th width="80%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=product&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("product_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="product") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <th class="right" width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("price");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <th class="center" width="5%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
            <th class="center" width="5%"></th>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_head"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </tr>
    </thead>
    <?php if (!$_smarty_tpl->tpl_vars['checkbox_name']->value) {
$_smarty_tpl->tpl_vars["checkbox_name"] = new Smarty_variable("add_products_ids", null, 0);
}?>
    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <tr id="picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <td class="center" width="1%" data-th=""><input type="<?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>radio<?php } else { ?>checkbox<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
        <?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("product_name");?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:product_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:product_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                <label for="checkbox_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</label>
            <?php } else { ?>
                <div><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</div>
            <?php }?>
            <div class="product-list__labels">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="product-code">
                        <span class="product-code__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            

            <?php if (!$_smarty_tpl->tpl_vars['hide_options']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'show_aoc'=>$_smarty_tpl->tpl_vars['show_aoc']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value), 0);?>

            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:product_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </td>
        <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <td class="cm-picker-product-options right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A") {?><input class="input-medium" id="product_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" size="3" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="" /><?php } else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0);
}?></td>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
            <td class="center nowrap cm-value-changer" width="5%">
                <div class="input-prepend input-append">
                    <a class="btn no-underline strong increase-font cm-decrease"><i class="icon-minus"></i></a>
                    <input id="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['default_product_amount']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step']>1) {?> data-ca-step="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                    <a class="btn no-underline strong increase-font cm-increase"><i class="icon-plus"></i></a>
                </div>
            </td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
            <td class="center nowrap" width="5%">
                <div>
                    <a class="btn cm-process-items cm-submit cm-ajax cm-add-product" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_product");?>
" data-ca-dispatch="dispatch[order_management.add]" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-form="add_products"><i class="icon-share-alt" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"></i></a>
                </div>
            </td>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_list:table_columns")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_list:table_columns"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_list:table_columns"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    function _switchAOC(id, disable)
    {
        var aoc = $('#sw_option_' + id + '_AOC');
        if (aoc.length) {
            aoc.addClass('cm-skip-avail-switch');
            aoc.prop('disabled', disable);
            disable = aoc.prop('checked') ? true : disable;
        }

        $('.cm-picker-product-options', $('#picker_product_row_' + id)).switchAvailability(disable, false);
    }

    $(document).ready(function() {

        $.ceEvent('on', 'ce.commoninit', function(context) {
            if (context.find('tr[id^=picker_product_row_]').length) {
                if (!$('.cm-add-product').length) {
                    context.find('.cm-picker-product-options').switchAvailability(true, false);
                } else {
                    context.find('.cm-picker-product-options').switchAvailability(false, false);
                }
            }
        });

        $(_.doc).on('click', '.cm-increase,.cm-decrease', function() {
            var inp = $('input', $(this).closest('.cm-value-changer'));
            var new_val = parseInt(inp.val()) + ($(this).is('a.cm-increase') ? 1 : -1);
            var disable = new_val > 0 ? false : true;
            var _id = inp.prop('id').replace('product_id_', '');

            _switchAOC(_id, disable);
        });

        $.ceEvent('on', 'ce.formajaxpost_add_products', function(response, params) {
            if ($('.cm-add-product').length && response.current_url) {
                var url = response.current_url;

                $.ceAjax('request', url, {
                    method: 'get',
                    result_ids: 'button_trash_products,om_ajax_update_totals,om_ajax_update_payment,om_ajax_update_shipping',
                    full_render: true
                });
            }
        });

        $(_.doc).on('click', '.cm-add-product', function() {
            if ($(this).prop('id')) {
                var _id = $(this).prop('id');
                $('#add_product_id').val(_id);
            }
        });

        $(_.doc).on('change', '.cm-amount', function() {
            var new_val = parseInt($(this).val());
            var disable = new_val > 0 ? false : true;
            var _id = $(this).prop('id').replace('product_id_', '');

            _switchAOC(_id, disable);
        });

        $(_.doc).on('click', '.cm-item', function() {
            var disable = (this.checked) ? false : true;
            var _id = $(this).prop('id').replace('checkbox_id_', '');

            _switchAOC(_id, disable);
        });

        $(_.doc).on('click', '.cm-check-items', function() {
            var form = $(this).parents('form:first');
            var _checked = this.checked;
            $('.cm-item', form).each(function () {
                if (_checked && !this.checked || !_checked && this.checked) {
                    $(this).click();
                }
            });
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>
<?php }} ?>
