<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:52:15
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\vendor_terms\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2455766425f7b331f318078-19472203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd260e7ffd7432b1e033118e1fe6421fc4e0442d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\vendor_terms\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2455766425f7b331f318078-19472203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b331f321a23_27106373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b331f321a23_27106373')) {function content_5f7b331f321a23_27106373($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip")), 0);?>
:</label>
        <div class="controls">
            <textarea id="elm_company_terms" name="company_data[terms]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
