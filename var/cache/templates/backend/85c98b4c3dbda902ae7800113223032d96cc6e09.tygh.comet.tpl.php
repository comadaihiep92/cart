<?php /* Smarty version Smarty-3.1.21, created on 2020-08-07 11:33:13
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\common\comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13845897845f2d11c97c0d61-20220013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85c98b4c3dbda902ae7800113223032d96cc6e09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\common\\comet.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13845897845f2d11c97c0d61-20220013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f2d11c97d1d61_45403677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f2d11c97d1d61_45403677')) {function content_5f2d11c97d1d61_45403677($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
