<?php /* Smarty version Smarty-3.1.21, created on 2020-08-12 05:17:34
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\bulk_edit_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11540781595f33513e7344e3-45606878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98dae252129843e8e67da6b1ee00d662c5b8b35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\bulk_edit_items.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11540781595f33513e7344e3-45606878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f33513e75d6e8_82583063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f33513e75d6e8_82583063')) {function content_5f33513e75d6e8_82583063($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_approval','approve_selected','disapprove_selected','vendor_data_premoderation.disapprove_products'));
?>
<?php if (fn_check_permissions("premoderation","m_approve","admin")) {?>
    <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
        <span class="bulk-edit__btn-content dropdown-toggle"
              data-toggle="dropdown"
        >
            <?php echo $_smarty_tpl->__("product_approval");?>

            <span class="caret mobile-hide"></span>
        </span>

        <ul class="dropdown-menu">
            <li>
                <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("approve_selected"),'dispatch'=>"dispatch[premoderation.m_approve]",'form'=>"manage_products_form"));?>

            </li>

            <li>
                <a data-ca-target-id="disapproval_reason_0"
                   class="cm-dialog-opener cm-dialog-auto-size"
                >
                    <?php echo $_smarty_tpl->__("disapprove_selected");?>

                </a>
            </li>
        </ul>
    </li>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>0,'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_products")), 0);?>

<?php }?>
<?php }} ?>
