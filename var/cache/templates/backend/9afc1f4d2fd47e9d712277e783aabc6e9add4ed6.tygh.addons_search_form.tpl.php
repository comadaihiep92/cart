<?php /* Smarty version Smarty-3.1.21, created on 2020-08-11 16:52:26
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\views\addons\components\addons_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18348569815f32a29a32a4e6-94763194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afc1f4d2fd47e9d712277e783aabc6e9add4ed6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\views\\addons\\components\\addons_search_form.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18348569815f32a29a32a4e6-94763194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'extra' => 0,
    'search' => 0,
    'hide_for_vendor' => 0,
    'developers' => 0,
    'developer' => 0,
    'dispatch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f32a29a400d52_67208485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f32a29a400d52_67208485')) {function content_5f32a29a400d52_67208485($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search','name','remove','status','any','not_installed','installed','active','disabled','developer','any','search'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("search");?>
</h6>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 addons-search-form">
        <?php echo $_smarty_tpl->tpl_vars['extra']->value;?>

        
        <div class="sidebar-field ">
            <label for="elm_addon"><?php echo $_smarty_tpl->__("name");?>
</label>
            <input type="text" name="q" id="elm_addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" size="30" autofocus />
            <i class="icon icon-remove hidden" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
"></i>
        </div>
        <?php if (!$_smarty_tpl->tpl_vars['hide_for_vendor']->value) {?>
        <div class="sidebar-field">
            <label for="elm_addon_status"><?php echo $_smarty_tpl->__("status");?>
</label>

            <select id="elm_addon_status" name="type">
                <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['type'])||$_smarty_tpl->tpl_vars['search']->value['type']=='any') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <option value="not_installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='not_installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("not_installed");?>
</option>
                <option value="installed" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='installed') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("installed");?>
</option>
                <option value="active" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='active') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                <option value="disabled" <?php if ($_smarty_tpl->tpl_vars['search']->value['type']=='disabled') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        </div>
        <div class="sidebar-field">
            <label for="elm_addon_source"><?php echo $_smarty_tpl->__("developer");?>
</label>
            <select id="elm_addon_source" name="supplier">
                <option value="" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['supplier'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                <?php  $_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['developer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['developers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->key => $_smarty_tpl->tpl_vars['developer']->value) {
$_smarty_tpl->tpl_vars['developer']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['supplier']==$_smarty_tpl->tpl_vars['developer']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['developer']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
        </div>
        <?php }?>

        <div class="sidebar-field">
            <input class="btn" type="submit" name="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dispatch']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->__("search");?>
">
        </div>
    </form>
</div><?php }} ?>
