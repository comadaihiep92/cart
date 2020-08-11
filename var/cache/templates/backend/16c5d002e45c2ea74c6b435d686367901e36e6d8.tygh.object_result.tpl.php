<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:34:38
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\select2\components\object_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13361505815f2d202e7b9ba7-44544532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c5d002e45c2ea74c6b435d686367901e36e6d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\select2\\components\\object_result.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13361505815f2d202e7b9ba7-44544532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'icon' => 0,
    'content_pre' => 0,
    'prefix' => 0,
    'content' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d202e7e1bc4_85205925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d202e7e1bc4_85205925')) {function content_5f2d202e7e1bc4_85205925($_smarty_tpl) {?><div class="object-selector-result-wrapper">
    <span class="object-selector-result">
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <span class="object-selector-result__icon-wrapper">
                <i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
 object-selector-result__icon"></i>
            </span>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['content_pre']->value;?>

        <span class="object-selector-result__text"><span class="object-selector-result__prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
</span> <span class="object-selector-result__body">[text]</span></span>
        <span class="object-selector-result__append">[append]</span>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </span>
    <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
        <div class="object-selector-result__help">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php }?>
</div><?php }} ?>
