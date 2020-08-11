<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:36:02
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\products\components\products_update_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2130915835f2d20824fe2e9-29525523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae9bc6131996e6112e5fd2256cee9296b6625d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\products\\components\\products_update_options.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2130915835f2d20824fe2e9-29525523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabindex' => 0,
    'product_options' => 0,
    'product_data' => 0,
    'except_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2082545077_71993087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2082545077_71993087')) {function content_5f2d2082545077_71993087($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('link_an_existing_option','forbidden_combinations','allowed_combinations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("extra", null, null); ob_start(); ?>

    <div class="pull-left">
        <div class="object-selector object-selector--options">
            <select id="option_add"
                    class="cm-object-selector"
                    form="form"
                    <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>
                        tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    multiple
                    name="product_data[linked_option_ids][]"
                    data-ca-enable-search="true"
                    data-ca-load-via-ajax="true"
                    data-ca-escape-html="false"
                    data-ca-close-on-select="false"
                    data-ca-page-size="10"
                    data-ca-data-url="<?php echo fn_url("product_options.get_available_options_list?product_id=".((string)$_REQUEST['product_id']));?>
"
                    data-ca-placeholder="<?php echo $_smarty_tpl->__("link_an_existing_option");?>
"
                    data-ca-allow-clear="false"
            >
            </select>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:update_product_options_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:update_product_options_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type']=="F") {?>
                <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("forbidden_combinations"), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["except_title"] = new Smarty_variable($_smarty_tpl->__("allowed_combinations"), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_href'=>"product_options.exceptions?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0);?>


            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:update_product_options_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("views/product_options/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>"product",'extra'=>Smarty::$_smarty_vars['capture']['extra'],'product_id'=>$_REQUEST['product_id'],'view_mode'=>"embed"), 0);?>

<?php }} ?>
