<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 12:33:57
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\geo_maps\hooks\order_management\profiles_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2857801695f2d2005892050-46594231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2780044f8274a2b68440f50ee363124f6a119ca7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\geo_maps\\hooks\\order_management\\profiles_info.post.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2857801695f2d2005892050-46594231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d20058bc179_68967853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d20058bc179_68967853')) {function content_5f2d20058bc179_68967853($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map'));
?>
<div class="sidebar-row" id="om_ajax_location_map">
    <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
        <div class="cm-geo-map-container cm-aom-map-container"
             data-ca-geo-map-language="<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
"
             data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"
        ></div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__('no_data');?>

    <?php }?>
<!--om_ajax_location_map--></div>
<?php }} ?>
