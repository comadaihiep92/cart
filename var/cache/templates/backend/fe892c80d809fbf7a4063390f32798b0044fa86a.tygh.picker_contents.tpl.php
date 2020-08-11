<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 09:19:35
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\pickers\users\picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20531775585f30e6f718cc60-28034093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe892c80d809fbf7a4063390f32798b0044fa86a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\pickers\\users\\picker_contents.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20531775585f30e6f718cc60-28034093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30e6f793e6e4_60092693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30e6f793e6e4_60092693')) {function content_5f30e6f793e6e4_60092693($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_items_added','id','email','person_name','registered','type','active','id','email','person_name','registered','type','administrator','vendor_administrator','customer','affiliate','active','disable','active','no_data','choose','add_users_and_close','add_users'));
?>
<?php if (!$_REQUEST['extra']) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
    var display_type = '<?php echo strtr($_REQUEST['display'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    $.ceEvent('on', 'ce.formpost_add_users_form', function(frm, elm) {
        var users = {};

        if ($('input.cm-item:checked', frm).length > 0) {

            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                var item = $(this).parent().siblings();

                if (display_type == 'radio') {
                    users[id] = item.find('.user-name').text()
                } else {
                    users[id] = {
                        email: item.find('.user-email').text(),
                        user_name: item.find('.user-name').text()
                    };
                }
            });

            if (display_type == 'radio') {
                
                $.cePicker('add_js_item', frm.data('caResultId'), users, 'u', {
                    '{user_id}': '%id',
                    '{user_name}': '%item'
                });
                
            } else {
                
                $.cePicker('add_js_item', frm.data('caResultId'), users, 'u', {
                    '{user_id}': '%id',
                    '{email}': '%item.email',
                    '{user_name}': '%item.user_name'
                });
                

                $.ceNotification('show', {
                    type: 'N',
                    title: _.tr('notice'),
                    message: _.tr('text_items_added'),
                    message_state: 'I'
                });
            }
        }

        return false;
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/users_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"profiles.picker",'extra'=>"<input type=\"hidden\" name=\"result_ids\" value=\"pagination_".((string)htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8', true))."\">",'put_request_vars'=>true,'form_meta'=>"cm-ajax",'in_popup'=>true), 0);?>


<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" name="add_users_form">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <th width="1%" class="center">
            <?php if ($_REQUEST['display']=="checkbox") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
            <?php }?>
        <th><?php echo $_smarty_tpl->__("id");?>
</th>
        <th><?php echo $_smarty_tpl->__("email");?>
</th>
        <th><?php echo $_smarty_tpl->__("person_name");?>
</th>
        <th><?php echo $_smarty_tpl->__("registered");?>
</th>
        <th><?php echo $_smarty_tpl->__("type");?>
</th>
        <th class="right"><?php echo $_smarty_tpl->__("active");?>
</th>
    </tr>
    </thead>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
    <tr>
        <td class="left" data-th="">
            <?php if ($_REQUEST['display']=="checkbox") {?>
            <input type="checkbox" name="add_users[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
            <?php } elseif ($_REQUEST['display']=="radio") {?>
            <input type="radio" name="selected_user_id" class="cm-item" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php }?>
        </td>
        <td data-th="<?php echo $_smarty_tpl->__("id");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
</td>
        <td data-th="<?php echo $_smarty_tpl->__("email");?>
"><span class="user-email"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8');?>
</span></td>
        <td data-th="<?php echo $_smarty_tpl->__("person_name");?>
"><span class="user-name"><?php if ($_smarty_tpl->tpl_vars['user']->value['firstname']||$_smarty_tpl->tpl_vars['user']->value['lastname']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php }?></span></td>
        <td data-th="<?php echo $_smarty_tpl->__("registered");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
        <td data-th="<?php echo $_smarty_tpl->__("type");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="A") {
echo $_smarty_tpl->__("administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="V") {
echo $_smarty_tpl->__("vendor_administrator");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C") {
echo $_smarty_tpl->__("customer");
} elseif ($_smarty_tpl->tpl_vars['user']->value['user_type']=="P") {
echo $_smarty_tpl->__("affiliate");
}?></td>
        <td class="right" data-th="<?php echo $_smarty_tpl->__("active");?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['status']=="D") {
echo $_smarty_tpl->__("disable");
} else {
echo $_smarty_tpl->__("active");
}?></td>
    </tr>
    <?php } ?>
    </table>
</div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['data_id'])), 0);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:picker_opts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:picker_opts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:picker_opts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="buttons-container">
    <?php if ($_REQUEST['display']=="radio") {?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("choose"), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["but_close_text"] = new Smarty_variable($_smarty_tpl->__("add_users_and_close"), null, 0);?>
        <?php $_smarty_tpl->tpl_vars["but_text"] = new Smarty_variable($_smarty_tpl->__("add_users"), null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>

</form>
<?php }} ?>
