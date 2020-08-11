<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 06:01:20
         compiled from "C:\xampp\htdocs\cart\design\backend\mail\templates\common\wrap_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17048564155f30b880e0f308-61344377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2832494e60cc1316767e57eaa2ec02dcc800db71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\mail\\templates\\common\\wrap_document.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17048564155f30b880e0f308-61344377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30b881237294_97221125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30b881237294_97221125')) {function content_5f30b881237294_97221125($_smarty_tpl) {?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">
<head>

<style type="text/css" media="screen,print">
body {
    padding: 0;
    margin: 0;
    text-align: center;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}

#print-wrapp {
	max-width: 800px;
	width: 100%;
	margin: 0px auto;
	text-align: initial;
}

</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table id="print-wrapp">
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</td>
	</tr>
</table>
</body>
</html><?php }} ?>
