<?php /* Smarty version Smarty-3.1.21, created on 2020-08-10 06:15:07
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\gift_certificates\views\gift_certificates\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11667716985f30bbbb64bed0-13529451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2390aea6603141e2e4d408bca20d9decaea1e926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\gift_certificates\\views\\gift_certificates\\update.tpl',
      1 => 1580800651,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11667716985f30bbbb64bed0-13529451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gift_cert_data' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'addons' => 0,
    'min_amount' => 0,
    'max_amount' => 0,
    'text_gift_cert_amount_alert' => 0,
    'id' => 0,
    'templates' => 0,
    'file' => 0,
    'name' => 0,
    'settings' => 0,
    'countries' => 0,
    '_country' => 0,
    'code' => 0,
    'country' => 0,
    'states' => 0,
    '_state' => 0,
    'state' => 0,
    'config' => 0,
    'search' => 0,
    'log' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'l' => 0,
    'product_item' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f30bbbb82a8b5_29682671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f30bbbb82a8b5_29682671')) {function content_5f30bbbb82a8b5_29682671($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_format_price')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.format_price.php';
if (!is_callable('smarty_modifier_sizeof')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.sizeof.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_gift_cert_amount_alert','information','gift_cert_code','status','gift_cert_to','gift_cert_from','message','amount','send_via_email','send_via_postal_mail','email','template','address','address_2','city','country','select_country','state','select_state','zip_postal_code','phone','free_products','notify_customer','date','email','person_name','order_id','balance','gift_cert_debit','date','email','person_name','order_id','balance','amount','free_products','deleted_product','gift_cert_debit','amount','free_products','deleted_product','no_data','gift_certificate_statuses','preview','delete','new_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {
    $(document).ready(function() {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-gc-validate-amount',
            message: _.tr('text_gift_cert_amount_alert'),
            func: function(id) {
                var max = parseFloat(max_amount);
                var min = parseFloat(min_amount);

                var amount = parseFloat($('#' + id).autoNumeric('get'));
                if ((amount <= max) && (amount >= min)) {
                    return true;
                }

                return false;
            }
        });
        
        $('#' + (send_via == 'E' ? 'post' : 'email') + '_block').switchAvailability(true, true);

        $(_.doc).on('click', 'input[name="gift_cert_data[send_via]"]', function() {
            $('#email_block').switchAvailability($(this).val() == 'P', true);
            $('#post_block').switchAvailability($(this).val() == 'E', true);
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator']=='') {?>
    <?php ob_start();?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],0);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['max_amount'] = new Smarty_variable($_tmp1, null, 0);?>
    <?php ob_start();?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],0);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['min_amount'] = new Smarty_variable($_tmp2, null, 0);?>
<?php } else { ?>
    <?php ob_start();?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['max_amount'] = new Smarty_variable($_tmp3, null, 0);?>
    <?php ob_start();?><?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['min_amount'] = new Smarty_variable($_tmp4, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['text_gift_cert_amount_alert'] = new Smarty_variable($_smarty_tpl->__("text_gift_cert_amount_alert",array("[min]"=>$_smarty_tpl->tpl_vars['min_amount']->value,"[max]"=>$_smarty_tpl->tpl_vars['max_amount']->value)), null, 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
var max_amount = '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['max_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var min_amount = '<?php echo strtr($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var send_via = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via'])===null||$tmp==='' ? "E" : $tmp), ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_gift_cert_amount_alert',  '<?php echo strtr($_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="_self" class=" form-horizontal form-edit" name="gift_certificates_form" enctype="multipart/form-data">
    <input type="hidden" name="gift_cert_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("information"),'target'=>"#acc_information"), 0);?>


    <div id="acc_information" class="collapse in">

    

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <div id="content_detailed" class="hidden">
    <?php }?>

    

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <fieldset>
        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
            <div class="controls">
                <input type="hidden" name="gift_cert_data[gift_cert_code]" id="elm_gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="text-type-value select-value-wrap"><span class="select-value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</span></div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_status"><?php echo $_smarty_tpl->__("status");?>
:</label>
            <div class="controls">
                <input type="hidden" name="certificate_status" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['status'], ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("common/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('status'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['status'],'display'=>"select",'name'=>"gift_cert_data[status]",'status_type'=>@constant('STATUSES_GIFT_CERTIFICATE'),'select_id'=>"elm_gift_cert_status"), 0);?>

            </div>
        </div>
        <?php }?>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"gift_cert_data[company_id]",'selected'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['company_id'],'id'=>"elm_gift_cert_data_company_id"), 0);?>

        <?php } else { ?>
            <input type="hidden" name="gift_cert_data[company_id]" value="0">
        <?php }?>

        <div class="control-group">
            <label for="elm_gift_cert_recipient" class="control-label cm-required"><?php echo $_smarty_tpl->__("gift_cert_to");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_gift_cert_recipient" class="input-large" name="gift_cert_data[recipient]"  maxlength="255" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['recipient'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group">
            <label for="elm_gift_cert_sender" class="control-label cm-required"><?php echo $_smarty_tpl->__("gift_cert_from");?>
:</label>
            <div class="controls">
                <input type="text" id="elm_gift_cert_sender" class="input-large" name="gift_cert_data[sender]" maxlength="255" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['sender'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_gift_cert_message"><?php echo $_smarty_tpl->__("message");?>
:</label>
            <div class="controls">
                <textarea id="elm_gift_cert_message" name="gift_cert_data[message]" cols="55" rows="6" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="cm-required control-label cm-gc-validate-amount" for="gift_cert_amount"><?php echo $_smarty_tpl->__("amount");?>
:</label>
            <div class="controls">
                <div class="text-type-value pull-left"><?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']!="Y") {
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
}?>&nbsp;</div>
                <input type="text"
                       id="gift_cert_amount"
                       name="gift_cert_data[amount]"
                       class="valign input-text-short inp-el cm-numeric"
                       data-p-sign="s"
                       data-a-sep="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator']=='') {?>
                           data-m-dec="0"
                       <?php } else { ?>
                           data-a-dec="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       size="5"
                       <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value) {?>
                           value="<?php echo htmlspecialchars(fn_format_rate_value($_smarty_tpl->tpl_vars['gift_cert_data']->value['amount'],'',$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['coefficient']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php } else { ?>
                           value="<?php echo htmlspecialchars(fn_format_rate_value($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['min_amount'],'',$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'],$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['coefficient']), ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                />


                <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['after']=="Y") {
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
}?>
                <p><small><?php echo $_smarty_tpl->tpl_vars['text_gift_cert_amount_alert']->value;?>
</small></p>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <label for="elm_gift_cert_send_via_email" class="radio inline">
                    <input id="elm_gift_cert_send_via_email" type="radio" name="gift_cert_data[send_via]" value="E" <?php if (!$_smarty_tpl->tpl_vars['id']->value||$_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=="E") {?>checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("send_via_email");?>

                </label>
                <label class="radio inline" for="elm_gift_cert_send_via_post">
                    <input id="elm_gift_cert_send_via_post" type="radio" name="gift_cert_data[send_via]" value="P" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=="P") {?>checked="checked"<?php }?>>
                    <?php echo $_smarty_tpl->__("send_via_postal_mail");?>

                </label>
            </div>
        </div>

        <div id="email_block" <?php if ($_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=="P") {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label for="elm_gift_cert_email" class="cm-required control-label cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_email" name="gift_cert_data[email]" class="input-large" maxlength="128" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['templates']->value)>1) {?>
                <div class="control-group">
                    <label class="control-label" for="elm_gift_cert_template"><?php echo $_smarty_tpl->__("template");?>
:</label>
                    <div class="controls">
                        <select id="elm_gift_cert_template" name="gift_cert_data[template]">
                        <?php  $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["name"]->_loop = false;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["name"]->key => $_smarty_tpl->tpl_vars["name"]->value) {
$_smarty_tpl->tpl_vars["name"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["name"]->key;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['file']->value==$_smarty_tpl->tpl_vars['gift_cert_data']->value['template']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
            <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["name"]->_loop = false;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["name"]->key => $_smarty_tpl->tpl_vars["name"]->value) {
$_smarty_tpl->tpl_vars["name"]->_loop = true;
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["name"]->key;
?>
                    <input type="hidden" name="gift_cert_data[template]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php } ?>
            <?php }?>
        </div>

        <div id="post_block" <?php if (!$_smarty_tpl->tpl_vars['id']->value||$_smarty_tpl->tpl_vars['gift_cert_data']->value['send_via']=="E") {?>class="hidden"<?php }?>>
            <div class="control-group">
                <label for="elm_gift_cert_address" class="control-label cm-required"><?php echo $_smarty_tpl->__("address");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_address" name="gift_cert_data[address]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="elm_gift_cert_address_2"><?php echo $_smarty_tpl->__("address_2");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_address_2" name="gift_cert_data[address_2]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['address_2'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <div class="control-group">
                <label for="elm_gift_cert_city" class="control-label cm-required"><?php echo $_smarty_tpl->__("city");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_city" name="gift_cert_data[city]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['gift_cert_data']->value['country'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] : $tmp), null, 0);?>
            <div class="control-group">
                <label for="elm_gift_cert_country" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
:</label>
                <div class="controls">
                    <select id="elm_gift_cert_country" name="gift_cert_data[country]" class="cm-country cm-location-billing">
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['gift_cert_data']->value['state'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] : $tmp), null, 0);?>
            <div class="control-group">
                <label for="elm_gift_cert_state" class="control-label cm-required"><?php echo $_smarty_tpl->__("state");?>
:</label>
                <div class="controls">
                    <select class="cm-state cm-location-billing" id="elm_gift_cert_state" name="gift_cert_data[state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                        <?php if ($_smarty_tpl->tpl_vars['states']->value&&$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>
                            <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['_state']->value==$_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        <?php }?>
                    </select>
                    <input type="text" id="elm_gift_cert_state_d" name="gift_cert_data[state]" class="cm-state cm-location-billing hidden" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled">
                </div>
            </div>

            <div class="control-group">
                <label for="elm_gift_cert_zipcode" class="control-label cm-required cm-zipcode cm-location-billing"><?php echo $_smarty_tpl->__("zip_postal_code");?>
:</label>
                <div class="controls">
                    <input type="text" id="elm_gift_cert_zipcode" name="gift_cert_data[zipcode]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['zipcode'], ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label cm-mask-phone-label" for="elm_gift_cert_phone"><?php echo $_smarty_tpl->__("phone");?>
:</label>
               <div class="controls">
                    <input type="text" class="cm-mask-phone" id="elm_gift_cert_phone" name="gift_cert_data[phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift_cert_data']->value['phone'], ENT_QUOTES, 'UTF-8');?>
">
               </div>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?></fieldset><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("free_products")), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"free_products",'item_ids'=>$_smarty_tpl->tpl_vars['gift_cert_data']->value['products'],'input_name'=>"gift_cert_data[products]",'type'=>"table",'picker_for'=>"gift_certificates",'placement'=>"right"), 0);?>

        <?php }?>
        
        <div class="control-group">
            <label for="notify_user" class="control-label">
                <?php echo $_smarty_tpl->__("notify_customer");?>

            </label>
            <div class="controls">
                <input type="checkbox" name="notify_user" id="notify_user" value="Y">
            </div>
        </div>
        </form>

    
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        </div>
        <div id="content_log" class="hidden">
            <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
            <?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['log']->value) {?>
            <div class="table-responsive-wrapper">
                <table class="table sortable table--relative table-responsive">
                <thead>
                    <tr>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="email") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("email");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("person_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=order_id&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("order_id");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="order_id") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("balance");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="debit") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=debit&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("gift_cert_debit");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="debit") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                    </tr>
                </thead>
                <tbody>
                <?php  $_smarty_tpl->tpl_vars["l"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["l"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["l"]->key => $_smarty_tpl->tpl_vars["l"]->value) {
$_smarty_tpl->tpl_vars["l"]->_loop = true;
?>
                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("email");?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']||$_smarty_tpl->tpl_vars['l']->value['order_email']) {?><a href="mailto:<?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['l']->value['email']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['l']->value['order_email']), ENT_QUOTES, 'UTF-8');
}?>" class="underlined"><?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['email'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['order_email'], ENT_QUOTES, 'UTF-8');
}?></a><?php } else { ?>-<?php }?></td>
                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("person_name");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['l']->value['user_id']) {?>
                            <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['l']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['order_firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['order_lastname'], ENT_QUOTES, 'UTF-8');?>

                        <?php } else { ?>
                            -
                        <?php }?>
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("order_id");?>
"><?php if ($_smarty_tpl->tpl_vars['l']->value['order_id']) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['l']->value['order_id'])."&selected_section=payment_information"), ENT_QUOTES, 'UTF-8');?>
" class="underlined">&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
&nbsp;</a><?php } else { ?>-<?php }?></td>
                    <td data-th="<?php echo $_smarty_tpl->__("balance");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?><span><?php echo $_smarty_tpl->__("amount");?>
:</span>&nbsp;<?php }
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['l']->value['amount']), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['l']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?>
                        <p><span><?php echo $_smarty_tpl->__("free_products");?>
:</span></p>
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars["product_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['l']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_item"]->key => $_smarty_tpl->tpl_vars["product_item"]->value) {
$_smarty_tpl->tpl_vars["product_item"]->_loop = true;
?>
                            <li>&nbsp;<span>&#187;</span>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?></li>
                        <?php } ?>
                        </ul>
                        <?php }?>
                    </td>
                    <td data-th="<?php echo $_smarty_tpl->__("gift_cert_debit");?>
">
                        <?php if ($_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?><span><?php echo $_smarty_tpl->__("amount");?>
:</span>&nbsp;<?php }
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['l']->value['debit']), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['l']->value['debit_products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=="Y") {?>
                        <p><span><?php echo $_smarty_tpl->__("free_products");?>
:</span></p>
                        <?php  $_smarty_tpl->tpl_vars["product_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['l']->value['debit_products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_item"]->key => $_smarty_tpl->tpl_vars["product_item"]->value) {
$_smarty_tpl->tpl_vars["product_item"]->_loop = true;
?>
                        <div>
                            &nbsp;<span>&#187;</span>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_item']->value['amount'], ENT_QUOTES, 'UTF-8');?>
 - <?php if ($_smarty_tpl->tpl_vars['product_item']->value['product']) {?><a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_item']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product_item']->value['product'],30,"...",true), ENT_QUOTES, 'UTF-8');?>
</a><?php } else {
echo $_smarty_tpl->__("deleted_product");
}?>
                        </div>
                        <?php } ?>
                        <?php }?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>
            <?php } else { ?>
                <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_REQUEST['selected_section']), 0);?>

    <?php }?>
    

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'href'=>"statuses.manage?type=G",'text'=>$_smarty_tpl->__("gift_certificate_statuses")));?>
</li>
                <li class="divider"></li>
            <?php }?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("preview"),'class'=>"cm-new-window cm-submit",'dispatch'=>"dispatch[gift_certificates.preview]",'form'=>"gift_certificates_form"));?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
                <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"gift_certificates.delete?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'method'=>"POST"));?>
</li>
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>


        <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
            <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("new_certificate"), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__('editing_certificate'), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['gift_cert_data']->value['gift_cert_code'], null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[gift_certificates.update]",'but_role'=>"submit-link",'extra'=>Smarty::$_smarty_vars['capture']['gift_extra_tools'],'save'=>$_smarty_tpl->tpl_vars['id']->value,'but_target_form'=>"gift_certificates_form"), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
