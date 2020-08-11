<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:24
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\block_manager\manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7444763415f2d205cc042a1-34265711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0223d1fb4dccb9331b7aa7fe7d69bbdfee50f412' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\block_manager\\manage_in_tab.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7444763415f2d205cc042a1-34265711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
    'dynamic_object_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d205cc57462_55016045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d205cc57462_55016045')) {function content_5f2d205cc57462_55016045($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value)>1) {?>
        <div class="content-variant-wrap content-variant-wrap--layout">
            <h6 class="muted"><?php echo $_smarty_tpl->__("switch_layout");?>
:</h6>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0);?>

        </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront_selector_submit_form_class'=>"cm-ajax",'storefront_selector_submit_form_result_ids'=>"content_blocks",'storefront_selector_submit_form_params'=>$_smarty_tpl->tpl_vars['dynamic_object_params']->value), 0);?>

<!--content_blocks--></div>
<?php }} ?>
