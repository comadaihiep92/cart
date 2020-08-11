<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:35:12
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\reward_points\hooks\categories\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3728640535f2d2050319368-56930490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43b3e1793d1f45395d3f0ef8ed481dd800e22bf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\reward_points\\hooks\\categories\\tabs_content.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3728640535f2d2050319368-56930490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_type' => 0,
    'category_data' => 0,
    'reward_usergroups' => 0,
    'm' => 0,
    'm_id' => 0,
    'reward_points' => 0,
    'point' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d205034e9d0_41511087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d205034e9d0_41511087')) {function content_5f2d205034e9d0_41511087($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('earned_points','override_g_points','usergroup','amount','amount_type','usergroup','amount','amount_type','absolute','points_lower','percent'));
?>
<div class="hidden" id="content_reward_points">
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("earned_points"),'target'=>"#reward_points_categories_hook"), 0);?>

    <div id="reward_points_categories_hook" class="in collapse">
        <fieldset>
            <input type="hidden" name="category_data[is_op]" value="N">
            <label for="rp_is_op" class="checkbox">
                <input type="checkbox" name="category_data[is_op]" id="rp_is_op" value="Y" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms([<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php }
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php } ?>], !this.checked);">
                <?php echo $_smarty_tpl->__("override_g_points");?>

            </label>
        <br>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-responsive">
            <thead class="cm-first-sibling">
            <tr>
                <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                <th width="40%"><?php echo $_smarty_tpl->__("amount_type");?>
</th>
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
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                        <input type="hidden" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td data-th="<?php echo $_smarty_tpl->__("amount");?>
">
                        <input type="text" id="earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['point']->value['amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['category_data']->value['is_op']!="Y") {?>disabled="disabled"<?php }?>></td>
                    <td data-th="<?php echo $_smarty_tpl->__("amount_type");?>
">
                        <select id="points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="category_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount_type]" <?php if ($_smarty_tpl->tpl_vars['object_type']->value==@constant('CATEGORY_REWARD_POINTS')&&$_smarty_tpl->tpl_vars['category_data']->value['is_op']!='Y') {?>disabled="disabled"<?php }?> class="input-xlarge">
                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="A") {?>selected<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                            <option value="P" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type']=="P") {?>selected<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
        </fieldset>
    </div>
</div><?php }} ?>
