<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:55
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\subheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18613171545f2d2003e3bbc9-17635189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b36233f9f73a70c0a5faf6256010fe8ea8670f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\subheader.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18613171545f2d2003e3bbc9-17635189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notes' => 0,
    'notes_id' => 0,
    'meta' => 0,
    'target' => 0,
    'title' => 0,
    'additional_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d2003e54ed5_50614796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d2003e54ed5_50614796')) {function content_5f2d2003e54ed5_50614796($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['notes']->value,'id'=>$_smarty_tpl->tpl_vars['notes_id']->value), 0);?>

<?php }?>
<h4 class="subheader <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target']->value) {?> hand<?php }?>" <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>data-toggle="collapse" data-target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['additional_id']->value) {?><span class="muted"><small> #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
</small></span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['target']->value) {?><span class="icon-caret-down"></span><?php }?>
</h4>
<?php }} ?>
