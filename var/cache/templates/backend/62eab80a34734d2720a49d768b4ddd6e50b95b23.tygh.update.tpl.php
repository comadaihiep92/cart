<?php /* Smarty version Smarty-3.1.21, created on 2020-10-05 18:12:33
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\store_locator\views\store_locator\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12895339595f6a1ef4539f40-78620964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62eab80a34734d2720a49d768b4ddd6e50b95b23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\store_locator\\views\\store_locator\\update.tpl',
      1 => 1601910751,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12895339595f6a1ef4539f40-78620964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f6a1ef49b1087_03847061',
  'variables' => 
  array (
    'store_location' => 0,
    'allow_save' => 0,
    'suffix' => 0,
    'id' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'states' => 0,
    'state_id' => 0,
    'state' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'destinations' => 0,
    'destination' => 0,
    'title_start' => 0,
    'title_end' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a1ef49b1087_03847061')) {function content_5f6a1ef49b1087_03847061($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','position','address','phone','store_locator.work_time','description','country','select_country','state','select_state','city','coordinates','latitude_short','longitude_short','latitude','longitude','surcharge','store_locator.surcharge_changes_hint','store_locator.main_destination','tt_addons_store_locator_views_store_locator_update_store_locator.main_destination','none','store_locator.show_to','tt_addons_store_locator_views_store_locator_update_store_locator.show_to','new_store_location'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['store_location']->value['store_location_id'])===null||$tmp==='' ? "0" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['store_location']->value,"store_locations")&&fn_check_view_permissions("store_locator.update","POST"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_save']->value, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/store_locator/pickers/map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" class="form-horizontal form-edit<?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?> cm-hide-inputs<?php }?>" name="store_locations_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="store_location_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" class="cm-no-hide-input" name="selected_section" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['selected_section'])===null||$tmp==='' ? "detailed" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <div id="content_detailed">
            <fieldset>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:content_detailed")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:content_detailed"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                <div class="control-group">
                    <label for="elm_name" class="cm-required control-label"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input type="text" id="elm_name" name="store_location_data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"store_location_data[company_id]",'id'=>"company_id_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['store_location']->value['company_id']), 0);?>


                <div class="control-group">
                    <label class="control-label" for="elm_position"><?php echo $_smarty_tpl->__("position");?>
:</label>
                    <div class="controls">
                        <input type="text" name="store_location_data[position]" id="elm_position" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3">
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_pickup_address" class="control-label"><?php echo $_smarty_tpl->__("address");?>
</label>
                    <div class="controls">
                        <input class="input-large" type="text" name="store_location_data[pickup_address]" id="elm_pickup_address" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['pickup_address'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_pickup_phone" class="control-label"><?php echo $_smarty_tpl->__("phone");?>
</label>
                    <div class="controls">
                        <input class="input-large" type="text" name="store_location_data[pickup_phone]" id="elm_pickup_phone" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_pickup_work_time" class="control-label"><?php echo $_smarty_tpl->__("store_locator.work_time");?>
</label>
                    <div class="controls">
                        <input class="input-large" type="text" name="store_location_data[pickup_time]" id="elm_pickup_work_time" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['pickup_time'], ENT_QUOTES, 'UTF-8');?>
" />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_description"><?php echo $_smarty_tpl->__("description");?>
:</label>
                    <div class="controls">
                        <textarea id="elm_description" name="store_location_data[description]" cols="55" rows="2" class="cm-wysiwyg input-textarea-long"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_country"><?php echo $_smarty_tpl->__("country");?>
:</label>
                    <div class="controls">
                        <?php $_smarty_tpl->tpl_vars["countries"] = new Smarty_variable(fn_get_simple_countries(1,@constant('CART_LANGUAGE')), null, 0);?>
                        <select id="elm_country_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="store_location_data[country]" class="select cm-country cm-location-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                            <?php  $_smarty_tpl->tpl_vars["country"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["country"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["country"]->key => $_smarty_tpl->tpl_vars["country"]->value) {
$_smarty_tpl->tpl_vars["country"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["country"]->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['store_location']->value['country']==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="elm_country"><?php echo $_smarty_tpl->__("state");?>
:</label>
                    <div class="controls">
                        <select id="elm_state_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-state cm-location-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="store_location_data[state]">
                            <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                            <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_smarty_tpl->tpl_vars['state_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['store_location']->value['country']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state_id']->value = $_smarty_tpl->tpl_vars['state']->key;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['state_id']->value==$_smarty_tpl->tpl_vars['store_location']->value['state']) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                        <input type="text"
                               id="elm_state_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_d"
                               name="store_location_data[state]"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['state'], ENT_QUOTES, 'UTF-8');?>
"
                               disabled="disabled"
                               class="cm-state cm-location-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"
                        />
                    </div>
                </div>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
                    (function(_, $) {
                        $.ceRebuildStates('init', {
                            default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['store_location']->value['country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
                            states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

                        });
                    }(Tygh, Tygh.$));
                <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



                <div class="control-group">
                    <label class="control-label" for="elm_city"><?php echo $_smarty_tpl->__("city");?>
:</label>
                    <div class="controls">
                        <input type="text" name="store_location_data[city]" id="elm_city" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['city'], ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label cm-required"><?php echo $_smarty_tpl->__("coordinates");?>
 (<?php echo $_smarty_tpl->__("latitude_short");?>
 &times; <?php echo $_smarty_tpl->__("longitude_short");?>
):</label>
                    <label class="control-label cm-required hidden" for="elm_latitude"><?php echo $_smarty_tpl->__("latitude");?>
</label>
                    <label class="control-label cm-required hidden" for="elm_longitude"><?php echo $_smarty_tpl->__("longitude");?>
</label>
                    <div class="controls">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:select_coordinates")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:select_coordinates"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <input type="text" name="store_location_data[latitude]" id="elm_latitude" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-latitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['latitude'], ENT_QUOTES, 'UTF-8');?>
" class="input-small">
                        &times;
                        <input type="text" name="store_location_data[longitude]" id="elm_longitude" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" data-ca-latest-longitude="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['longitude'], ENT_QUOTES, 'UTF-8');?>
" class="input-small">
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:select_coordinates"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>

                <?php echo $_smarty_tpl->getSubTemplate ("views/localizations/components/select.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_from'=>$_smarty_tpl->tpl_vars['store_location']->value['localization'],'data_name'=>"store_location_data[localization]"), 0);?>


                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:detailed_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:detailed_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:detailed_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"store_location_data[status]",'id'=>"elm_status",'obj_id'=>$_smarty_tpl->tpl_vars['store_location']->value['location_id'],'obj'=>$_smarty_tpl->tpl_vars['store_location']->value), 0);?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:content_detailed"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </fieldset>
        </div>

        <div id="content_addons">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:addons_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:addons_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:addons_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>

        <div id="content_pickup">

            <?php if (!empty($_smarty_tpl->tpl_vars['store_location']->value['pickup_surcharge'])) {?>
                
                <div class="control-group cm-hide-inputs">
                    <label class="control-label" for="elm_pickup_surcharge"><?php echo $_smarty_tpl->__("surcharge");?>
:</label>
                    <div class="controls">
                        <input id="elm_pickup_surcharge" type="text" name="store_location_data[pickup_surcharge]" class="input-mini" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_location']->value['pickup_surcharge'], ENT_QUOTES, 'UTF-8');?>
" size="4"> <?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>

                        <p><?php echo $_smarty_tpl->__("store_locator.surcharge_changes_hint");?>
</p>
                    </div>
                </div>
            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:content_pickup")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:content_pickup"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['destinations']->value) {?>
                <div class="control-group">
                    <label class="control-label"><?php echo $_smarty_tpl->__("store_locator.main_destination");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_store_locator_views_store_locator_update_store_locator.main_destination")), 0);?>
:</label>
                    <div class="controls">
                        <select name="store_location_data[main_destination_id]" id="main_destination">
                            <option value=""><?php echo $_smarty_tpl->__("none");?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['store_location']->value['main_destination_id']===$_smarty_tpl->tpl_vars['destination']->value['destination_id']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group store-locator__pickup-destinations-list<?php if (!$_smarty_tpl->tpl_vars['store_location']->value['main_destination_id']) {?> hidden<?php }?>">
                    <label class="control-label"><?php echo $_smarty_tpl->__("store_locator.show_to");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_store_locator_views_store_locator_update_store_locator.show_to")), 0);?>
:</label>
                    <div class="controls">
                        <?php  $_smarty_tpl->tpl_vars['destination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['destination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['destination']->key => $_smarty_tpl->tpl_vars['destination']->value) {
$_smarty_tpl->tpl_vars['destination']->_loop = true;
?>
                            <label class="checkbox inline" for="destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <input
                                    type="checkbox"
                                    name="store_location_data[pickup_destinations_ids][]"
                                    class="store-locator__destination"
                                    id="destinations_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['store_location']->value['pickup_destinations_ids']&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['destination']->value['destination_id'],$_smarty_tpl->tpl_vars['store_location']->value['pickup_destinations_ids'])) {?>
                                        checked="checked"
                                    <?php }?>
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination_id'], ENT_QUOTES, 'UTF-8');?>
"
                                /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['destination']->value['destination'], ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php } ?>
                    </div>
                </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:content_pickup"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        

    </form>

    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"store_locator:tabs_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"store_locator:tabs_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"store_locator:tabs_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'track'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['title_start'] = new Smarty_variable($_smarty_tpl->__('editing_store_location'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable($_smarty_tpl->tpl_vars['store_location']->value['name'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->__("new_store_location"), null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_start'=>$_smarty_tpl->tpl_vars['title_start']->value,'title_end'=>$_smarty_tpl->tpl_vars['title_end']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/destinations.js"),$_smarty_tpl);?>

<?php }} ?>
