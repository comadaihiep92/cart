<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:38:58
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\product_variations\hooks\shipments\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5237217275f2d2132515e85-32310021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18e9644abbbb1a8c95e5805bdd4c268a60845476' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\product_variations\\hooks\\shipments\\product_info.pre.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5237217275f2d2132515e85-32310021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'product' => 0,
    'variation_features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d213252f821_74101226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d213252f821_74101226')) {function content_5f2d213252f821_74101226($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']||$_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>

    <?php if ($_smarty_tpl->tpl_vars['oi']->value['variation_features']) {?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['oi']->value['variation_features'], null, 0);?>
    <?php } else { ?>
        
        <?php $_smarty_tpl->tpl_vars['variation_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['variation_features'], null, 0);?>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['variation_features']->value,'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
