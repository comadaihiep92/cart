<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 17:49:45
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\companies1\hooks\profiles\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12983302025f7b32891236b6-33399210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf31c64a24e5149b68bfefeac125d719d92b3e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\companies1\\hooks\\profiles\\tabs_content.post.tpl',
      1 => 1595519778,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12983302025f7b32891236b6-33399210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cities' => 0,
    'display_for_cities_checked' => 0,
    'type_S_selected' => 0,
    'type_E_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f7b328915c381_27373542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b328915c381_27373542')) {function content_5f7b328915c381_27373542($_smarty_tpl) {?><?php if (@constant('PERM_VIEW_POC')) {?>
<div id="content_poc" class="hidden">
    <div class="control-group">
        <label for="poc_city" class="control-label">Assigned City(s)</label>
        <div class="controls">
            <input name="poc_data[cities]" type="text" id="poc_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cities']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large user-success"<?php if (!@constant('PERM_MANAGE_POC')) {?> disabled<?php }?>>
            <div><i>comma separated list</i></div>
        </div>
    </div>
    <div class="control-group">
        <label for="poc_poc" class="control-label">Display as POC to Vendors for the selected cities</label>
        <div class="controls">
            <input name="poc_data[display_for_cities]" id="poc_poc" type="checkbox" value="1"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_for_cities_checked']->value, ENT_QUOTES, 'UTF-8');
if (!@constant('PERM_MANAGE_POC')) {?> disabled<?php }?>>
        </div>
    </div>
    
    <div class="control-group">
Poc type(s)
    </div>
        <div class="control-group">
            <label class="control-label" for="poc_type">Sales</label>
            <div class="controls">
                <select name="poc_data[type]" id="poc_type" class="user-success"<?php if (!@constant('PERM_MANAGE_POC')) {?> disabled<?php }?>>
                        <option value="">---</option>
                        <option value="S"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_S_selected']->value, ENT_QUOTES, 'UTF-8');?>
>Sales</option>
                        <option value="E"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type_E_selected']->value, ENT_QUOTES, 'UTF-8');?>
>Escalation</option>
                </select>                
            </div>
        </div>
</div>
<?php }?><?php }} ?>
