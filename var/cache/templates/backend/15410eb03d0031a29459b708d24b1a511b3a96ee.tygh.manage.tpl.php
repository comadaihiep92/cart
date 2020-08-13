<?php /* Smarty version Smarty-3.1.21, created on 2020-08-13 05:52:35
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\views\reward_points\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11525870025f34aaf3b5c795-72925632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15410eb03d0031a29459b708d24b1a511b3a96ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\views\\reward_points\\manage.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11525870025f34aaf3b5c795-72925632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_type' => 0,
    'show_update_for_all' => 0,
    'reward_usergroups' => 0,
    'm' => 0,
    'm_id' => 0,
    'reward_points' => 0,
    'point' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f34aaf3c19fe9_47902519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f34aaf3c19fe9_47902519')) {function content_5f34aaf3c19fe9_47902519($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('earned_points','usergroup','amount','amount','type','usergroup','amount','amount','type','absolute','points_lower','percent','tools','reward_points'));
?>
<?php if (fn_allowed_for("ULTIMATE")) {?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->tpl_vars["show_update_for_all"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <div id="content_reward_points">
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="reward_points">
        
            <input type="hidden" name="selected_section" value="reward_points">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars(fn_url("reward_points.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("earned_points")), 0);?>


            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead class="cm-first-sibling">
                    <tr>
                        <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
&nbsp;<?php echo $_smarty_tpl->__("type");?>
</th>
                        <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>
                        <th></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars["m_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["point"] = new Smarty_variable($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m_id']->value], null, 0);?>
                    <tr id="container_earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                            <input type="hidden" name="reward_points[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount");?>
">
                            <input type="text" id="earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="reward_points[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['point']->value['amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>disabled="disabled"<?php }?>>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount");?>
&nbsp;<?php echo $_smarty_tpl->__("type");?>
">
                            <select name="reward_points[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount_type]" id="type_earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="expanded input-xlarge" <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>disabled="disabled"<?php }?>>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                            </select>
                        </td>
                        <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>
                        <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('display'=>true,'name'=>"reward_points[".((string)$_smarty_tpl->tpl_vars['m_id']->value)."][update_all_vendors]",'hide_element'=>"earned_points_".((string)$_smarty_tpl->tpl_vars['object_type']->value)."_".((string)$_smarty_tpl->tpl_vars['m_id']->value),'object_id'=>$_smarty_tpl->tpl_vars['m_id']->value), 0);?>

                        </td>
                        <?php }?>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>

            <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[reward_points.update]",'but_role'=>"submit-link",'but_target_form'=>"reward_points"), 0);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        </form>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("reward_points"),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'content'=>Smarty::$_smarty_vars['capture']['mainbox']), 0);?>
<?php }} ?>
