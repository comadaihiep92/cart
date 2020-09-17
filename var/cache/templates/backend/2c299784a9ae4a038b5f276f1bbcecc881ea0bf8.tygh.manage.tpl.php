<?php /* Smarty version Smarty-3.1.21, created on 2020-09-17 03:50:51
         compiled from "C:\xampp\htdocs\cart\design\backend\templates\addons\new_ui\views\new_orders\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15175358445f32a36e617333-05676851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c299784a9ae4a038b5f276f1bbcecc881ea0bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cart\\design\\backend\\templates\\addons\\new_ui\\views\\new_orders\\manage.tpl',
      1 => 1600303849,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15175358445f32a36e617333-05676851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f32a36e7a9146_11375651',
  'variables' => 
  array (
    'runtime' => 0,
    'statuses' => 0,
    'config' => 0,
    'search' => 0,
    'orders' => 0,
    'page_title' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f32a36e7a9146_11375651')) {function content_5f32a36e7a9146_11375651($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_admin_new_orders','orders'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="new") {?>
    <p><?php echo $_smarty_tpl->__("text_admin_new_orders");?>
</p>
<?php }?>

<?php $_smarty_tpl->tpl_vars['order_status_descr'] = new Smarty_variable(fn_get_simple_statuses(@constant('STATUSES_ORDER'),true,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['order_statuses'] = new Smarty_variable(fn_get_statuses(@constant('STATUSES_ORDER'),$_smarty_tpl->tpl_vars['statuses']->value,true,true), null, 0);?>



<div id="newSell" class="newSell">
    
    
         <div class="newSell__left">
            <h2 class="newSell__title">
                <a href="#">Hotel The Leela Palace</a>
                Hotel The Leela Palace
            </h2>
            <div class="newSell__star" itemprop="starRating" itemtype="https://schema.org/Rating" itemscope="true">
                <meta itemprop="ratingValue" content="5"><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                    <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                    </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                    <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                    </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                    <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                    </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                    <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                    </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                    <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                    </svg></span>
            </div>
            <div>
                <button class="newSell__button" type="button" tabindex="-1">
                    <span class="mr-3 newSell__button--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="24" height="24" viewBox="0 0 24 24">
                            <path class="svg-color--primary" fill="#37454D" d="M19.8 5h-1.1c.1-.6.1-1 .1-1 0-.6-.5-1-1-1h-12c-.5 0-1 .4-1 1 0 0 0 .4.1 1H3.8c-.5 0-1 .4-1 1 0 .2 0 2.2 2.3 4.1.7.6 1.6 1 2.6 1.4.7.6 1.6 1.1 2.5 1.4L9.9 16H8.8c-.4 0-.8.3-1 .7l-1 3c-.1.3 0 .6.1.9.3.3.6.4.9.4h8c.3 0 .6-.1.8-.4.2-.3.2-.6.1-.9l-1-3c-.1-.4-.5-.7-1-.7h-1.1l-.3-3.2c1-.2 1.8-.7 2.5-1.4 1-.3 1.9-.8 2.6-1.4 2.2-1.9 2.3-3.9 2.3-4.1.1-.5-.3-.9-.9-.9zm-14-1h12s0 .4-.1 1c0 .3-.1.6-.2 1-.2.9-.5 2.1-1.2 3.3-.3.5-.6.9-.9 1.2-.6.6-1.3 1-2.1 1.2-.3.2-.8.3-1.5.3 0 0 .1 0 0 0h-.5c-.4 0-.7-.1-1-.2-.8-.2-1.6-.7-2.2-1.2-.4-.4-.7-.8-.9-1.2-.6-1.3-.9-2.5-1.1-3.4-.1-.4-.3-2-.3-2zm-2 2H5c.2 1 .6 2.4 1.3 3.8-.1-.2-.3-.3-.5-.5-1.9-1.6-2-3.2-2-3.3zm11 11l1 3h-8l1-3h6zm-3.9-1l.3-3h1.2l.3 3h-1.8zm7-6.7c-.2.2-.4.3-.6.5C18 8.4 18.4 7 18.6 6h1.2c0 .1 0 1.7-1.9 3.3z"></path>
                        </svg>
                    </span>
                    <span class="newSell__pop" >Popular Choice</span>
                </button>
            </div>
            <div class="newSell__off">
                <img class="newSell__off--icon" src="https://i.imgur.com/RU7mR4S.png" alt="" />
                <span class="newSell__off--text">Get upto 45% OFF on Fresh Vegetables</span>
            </div>
            <div class="newSell__review">
                <span class="newSell__review--rate">
                    <span class="newSell__review--text">9.5</span>
                </span>
                <span class="newSell__review--count" ><strong class="newSell__review--bold" >Excellent </strong>(3020 reviews)</span>

            </div>
        </div>
        <div class="newSell__mid">
            <div >
                <span >Availability:</span>
                <span >
                    56&nbsp;item(s)
                </span>
            </div>
        </div>
       
    
    
    
    <div class="newSell__right">
        <div class="newSell__right--top">
            <p class="newSell__fsai">FSAI: <span>546546</span></p>
            <div class="newSell__days">
                <div class="newSell__days--row">
                     <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="16" height="16" viewBox="0 0 16 16">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M-1-1h18v18H-1z"></path>
                            <path d="M8 .5a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" fill="#316300"></path>
                            <path d="M6.5 10.625l5.25-5.25m-7.5 3l2.25 2.25" stroke="#FFF" stroke-linecap="round" stroke-width="2"></path>
                        </g>
                    </svg>
                    <span class="newSell__green">2 Days Return Period</span>
                </div>
                <div class="newSell__days--row">
                     <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="16" height="16" viewBox="0 0 16 16">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M-1-1h18v18H-1z"></path>
                            <path d="M8 .5a7.5 7.5 0 100 15 7.5 7.5 0 000-15z" fill="#316300"></path>
                            <path d="M6.5 10.625l5.25-5.25m-7.5 3l2.25 2.25" stroke="#FFF" stroke-linecap="round" stroke-width="2"></path>
                        </g>
                    </svg>
                    <span class="newSell__green">Cash On Delivery</span>
                </div>
            </div>
            <div class="newSell__action">
                <a href="#" class="newSell__price">$180</a>
                <div>
                    <button class="newSell__buynow">
                        <span class="newSell__buynow--icon">icon</span><span>Buy now</span>
                    </button>
                    <button class="newSell__save">
                        <span>icon</span>
                    </button>
                </div>
            </div>
           
        </div>
        <div class="newSell__right--bottom">
            <p class="newSell__time"><span>icon</span><a class="newSell__shipping" href="#"> Shipping:</a> by <span>Tomorrow, 10:30, from <strong>$0</strong></p>
            <p class="newSell__covid">Covid icons displayed here</p>
        </div>
    </div>
</div>


<div class="orders__header">
    <div class="row">
        <div class="col-xs-7">
            <ul class="nav nav-tabs count-status">
               
                <li class="tab__li active" data-tab="tab1">
                    
                        
                        
                    
                </li>
                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab2" >
                    
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab3" >
                    
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab4">
                    
                </li>
               
            </ul>
        </div>

    </div>
</div>






<?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_icon"] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
<?php $_smarty_tpl->tpl_vars["c_dummy"] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

<?php $_smarty_tpl->tpl_vars["rev"] = new Smarty_variable((($tmp = @$_REQUEST['content_id'])===null||$tmp==='' ? "pagination_contents" : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars["page_title"] = new Smarty_variable($_smarty_tpl->__("orders"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["extra_status"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>



<div class="have-content">
    <!-- order -->
    <div class="have-tab have-order" id="new" data-tab="tab1">
    
        <div class="have-order__left search-order" >
            <div class="search-order__box-input">
            
            <input class="search-order__input searchID" type="search" name="search"  onchange="searchId()" placeholder="Search"></input>
            </div>
            
            
            <ul class="search-order__list">
               
                
  
            </ul>
            
        </div>
  
        <div class="have-order__content">
                
                
 
        </div>
       
    </div>

    
    <!-- packing -->

    <div class="have-tab have-packing" id="packing" data-tab="tab2">
        <div class="have-packing__left search-packing" >
            <div class="search-packing__box-input">
            
            <input class="search-packing__input" type="search" placeholder="Search">
            </div>
            <ul class="search-packing__list">
            
                

            </ul>
        </div>
        <div class="have-packing__content">
            
        </div>
    </div>


    <!-- ready -->
    <div class="have-tab have-ready" id="ready" data-tab="tab3">
        <div class="have-ready__left search-ready" >
            <div class="search-ready__box-input">
            
            <input class="search-ready__input" type="search" placeholder="Search">
            </div>
            <ul class="search-ready__list">

             
                
            </ul>
        </div>
        <div class="have-ready__content">
             
           
        </div>
    </div>

    <!-- past -->
    <div class="have-tab have-past" id="past" data-tab="tab4">
        <div class="have-past__left search-past" >
            <div class="search-past__box-input">
            
            <input class="search-past__input" type="search" placeholder="Search">
            </div>
            <ul class="search-past__list">

            
 
            </ul>
        </div>
        <div class="have-past__content">
            
            
        </div>
    </div>
    
</div>

<div hidden id="spinner"></div>
<!-- Modal -->
<div class="modal modal-showStork " id="showStork" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    <div class="modal-content modal-showStork__content modal-showStork__content--active step1">
      <div class="modal-body">
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top">Enter your desired quantily and click continue</div>
            <div class="order-modal__list order-modal__markout">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
                    <div class="order-modal__conme">
                        
                        
                    </div>
                    
                    <div class="order-modal__input">
                        
                    </div>
                    <div class="formHere"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer modal-showStork__footer">
        <div class="order-modal__buttons">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-dismiss="modal">Cancel</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--continue" data-toggle="modal" data-target="#continue" onclick="continueModal()">Continue</button>
        </div>
      </div>
    </div>

    
    <div class="modal-content modal-showStork__content step2">
      <div class="modal-body">
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top">Note: Order once confirmed can't be edited again.</div>
            <div class="order-modal__list order-modal__markout">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
                    <div class="order-modal__conme2">
                        
                        
                    </div>
                    
                    <div class="order-modal__input2">
                        
                    </div>
                    <div class="formHere2"></div>
                </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer modal-showStork__footer">
        <div class="order-modal__buttons">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-toggle="modal" onclick="backModal()">Back</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--confirm" data-toggle="modal" data-target="#confirm" onclick="confirmModal()">Confirm</button>
        </div>
      </div>
    </div>

    
    <div class="modal-content modal-showStork__content step3">
      <div class="modal-body">
        
            <svg class="checkmark success" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark_circle_success" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark_check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" stroke-linecap="round"/>
            </svg>
        
      </div>
      
    </div>

  </div>
</div>





<?php } else { ?>
    
    <p class="no-items no-data-new">
    
    You Are Offline
        <span>Due to the outlet inactivity, we have switched OFF your outlet. If you wish to receive orders at this time, please turn your restaurant ON, by using the toggle in your Partner App. You will not be able to receive any orders until you turn your restaurant ON</span>
    </p>
    
        
        
        
    
<?php }?>







<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'content_id'=>"manage_orders",'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
// --- online version:
   /* const NEW_UI_STATUS_PLACED = 'G'; // Placed
    const NEW_UI_STATUS_VCONFIRMED = 'E'; // Vendor Confirmed
    const NEW_UI_STATUS_PACKED = 'A';
    const NEW_UI_STATUS_COMPLETE = 'C';

    const NEW_UI_STATUS_CANCELED = 'I'; // Canceled

    const NEW_UI_STATUS_DISPATCHED = 'H';

    const NEW_UI_STATUS_PICKEDUP = 'P'; // Picked up (shipment)
    const NEW_UI_STATUS_OFD = 'B'; // Out for delivery (shipment) */

    const NEW_UI_STATUS_PLACED = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_PLACED'), ENT_QUOTES, 'UTF-8');?>
'; // Placed
    const NEW_UI_STATUS_VCONFIRMED = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_VCONFIRMED'), ENT_QUOTES, 'UTF-8');?>
'; // Vendor Confirmed
    const NEW_UI_STATUS_PACKED = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_PACKED'), ENT_QUOTES, 'UTF-8');?>
';
    const NEW_UI_STATUS_COMPLETE = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_COMPLETE'), ENT_QUOTES, 'UTF-8');?>
';

    const NEW_UI_STATUS_CANCELED = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_CANCELED'), ENT_QUOTES, 'UTF-8');?>
'; // Canceled

    const NEW_UI_STATUS_DISPATCHED = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_DISPATCHED'), ENT_QUOTES, 'UTF-8');?>
';

    const NEW_UI_STATUS_PICKEDUP = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_PICKEDUP'), ENT_QUOTES, 'UTF-8');?>
'; // Picked up (shipment)
    const NEW_UI_STATUS_OFD = '<?php echo htmlspecialchars(@constant('NEW_UI_STATUS_OFD'), ENT_QUOTES, 'UTF-8');?>
'; // Out for delivery (shipment)

    const MONEY = "₹";

    // fetch status with status
    async function getStatus(status) {
        
        let url = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.get_orders&status=${status}`;
        try {
            let res = await fetch(url);
           // console.log("con me no 2 +++++++: ", res)
            return await res.json();

        }
        catch (error) {
            console.log(error)
        }
    }
    // fetch total form

    async function getTotalForm() {
        
        let url = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.totals_form&order_id=78417`;
        try {
            let res = await fetch(url);
           // console.log("con me no 2 +++++++: ", res)
            //return await res.text();
            return await res.text();

        }
        catch (error) {
            console.log(error)
        }
    }

   /* async function getTotalForm() {

        let response = await fetch('http://localhost:8080/cart/vendor.php?dispatch=new_orders.totals_form&order_id=78417');

        console.log(response.status); // 200
        console.log(response.statusText); // OK

        if (response.status === 200) {
            let data = await response.text();
            // handle data
            console.log('data ne ba con: ', data)
        }
    } */

    

    async function searchId(status) {
        let datas = await getStatus("G");

        let inputSearch = document.querySelector('.searchID').value;

        console.log("inputSearch: ", inputSearch);

        const result = datas.filter(data => data.order_id == inputSearch);
        console.log("result search: ", result)
        
    }
    

    /* render count status length */
    async function renderCountStatus(status, tab) {
        let datas = await getStatus(status);

        console.log("data: ----- ", datas);
        console.log("length: ----- ", datas.length);


        // count length of status
        let statusLength = datas.length;


        // html
        let htmlStatus = `
        ${status === NEW_UI_STATUS_PLACED ? `<a href="#new" class="tab__link" title="New"  >
                <span class="icon new-orders-icon"></span>
                <span>New</span>
                <span class="number number--order">${statusLength}</span>
            </a>` : ''} 
        ${status === NEW_UI_STATUS_VCONFIRMED ? `<a href="#packing" class="tab__link" title="Packing" >
                <span class="icon preparing-orders-icon"></span>
                <span>Packing</span>
                <span class="number number--packing">${statusLength}</span>
            </a>` : ''} 
        ${status === NEW_UI_STATUS_PACKED ? `  <a href="#ready" class="tab__link" title="Ready" >
                <span class="icon ready-orders-icon"></span>
                <span>Ready</span>
                <span class="number number--ready">${statusLength}</span>
            </a>` : ''} 
        ${status === NEW_UI_STATUS_COMPLETE ? `<a href="#past" class="tab__link" title="More"  >
                <span class="icon more-orders-icon"></span>
                <span>Past Orders</span>
                <span class="number number--past">${statusLength}</span>
            </a>` : ''} 

        `

        // define to first class queryselector
        let containerStatus = document.querySelector(`.tab__li[data-tab=${tab}]`);

        // show html
        containerStatus.innerHTML = htmlStatus;

    }

    // set 4 status for 4 tab
    renderCountStatus(NEW_UI_STATUS_PLACED, "tab1");
    renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
    renderCountStatus(NEW_UI_STATUS_PACKED, "tab3");
    renderCountStatus(NEW_UI_STATUS_COMPLETE, "tab4");

    let totalProducts = 0;

    function timestampConvert(time) {
        var seconds_now = new Date().getTime() / 1000;
        let received_sec_ago = Math.floor((seconds_now - time))
        console.log("received_sec_ago: ", received_sec_ago)

        let minutes = Math.floor((seconds_now - time) / 60 ) ;
        let hours = Math.floor((seconds_now - time) / 60 / 60) ;
        let days = Math.floor((seconds_now - time) / 60 / 60 / 24);

        if(received_sec_ago < 59) {
            return `Received a minute ago`
        }
        else if(received_sec_ago < 3599) {
            received_sec_ago = minutes
            return `Received ${received_sec_ago} minute ago`
        } else if(received_sec_ago > 3600 && received_sec_ago < 86400) {
            received_sec_ago = hours
            return `Received ${received_sec_ago} hours ago`
        } else {
            received_sec_ago = days
            return `Received ${received_sec_ago} days ago`
        }

    }

    // render status left side
    async function renderLeftSide(status, path) {
        let datas = await getStatus(status);
        
        //console.log("-----------datas----------:", datas[0].order_id)
        //var seconds_now = new Date().getTime() / 1000;
        //let received_sec_ago=seconds_now-datas.timestamp;
        // console.log("received_sec_ago: ", Math.floor((seconds_now - 1597635814) / 60 ));

        let html = "";


        datas.map(data => {
            let htmlItem = `
                ${status === NEW_UI_STATUS_PLACED ?
                `<li class="search-order__box" data-order="order${data.order_id}" onclick="renderDetails(${data.order_id})" >
                    <div class="search-order__left">
                        <h3 class="search-order__id">
                            Order #${data.order_id}
                        </h3>
                        <p class="search-order__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                        <p class="search-order__time">${timestampConvert(data.timestamp)}</p>
                    </div>
                    <div class="search-order__right">
                        <div class="search-order__img-box">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <p class="search-order__assign">Assigning...</p>
                    </div>
                </li>` : ''} 
                
                ${status === NEW_UI_STATUS_VCONFIRMED ? 
                `<li class="search-packing__box search-packing__box--column search-packing__box--nopd" data-order="order${data.order_id}" onclick="renderDetailsPacking(${data.order_id})">
                    <div class="search-packing__container">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--packing">
                                Order #${data.order_id}
                            </h3>
                            <p class="search-packing__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                            <p class="search-packing__time">${timestampConvert(data.timestamp)}</p>
                        </div>
                        <div class="search-packing__right">
                            <div class="search-packing__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-packing__assign">Assigning...</p>
                        </div>
                    </div>
                    <div class="search-packing__notcf">
                        <img src="https://i.imgur.com/QBVp9RA.png" />
                        <span>Order not confirmed within 6 mins</span>
                    </div>
                </li>` : '' }

                ${status === NEW_UI_STATUS_PACKED ? `
                <li class="search-ready__box search-ready__box--column search-ready__box--nopd" data-order="order${data.order_id}" onclick="renderDetailsReady(${data.order_id})">
                    <div class="search-ready__container">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--packing">
                                Order #${data.order_id}
                            </h3>
                            <p class="search-ready__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                            <p class="search-ready__time">${timestampConvert(data.timestamp)}</p>
                        </div>
                        <div class="search-ready__right">
                            <div class="search-ready__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-ready__assign">Assigned</p>
                        </div>
                    </div>
                
                </li>` : '' }
                

                ${status === NEW_UI_STATUS_COMPLETE ? ` 
                    ${data.status === NEW_UI_STATUS_COMPLETE ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order${data.order_id}" onclick="renderDetailsPast(${data.order_id})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    Order #${data.order_id}
                                </h3>
                                <p class="search-past__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                                <p class="search-past__time">${timestampConvert(data.timestamp)}</p>
                            </div>
                            <div class="search-past__right">
                                <div class="search-past__img-box">
                                    <img src="https://i.imgur.com/tOnmHoj.png" />
                                </div>
                                <p class="search-past__assign">Delevered</p>
                            </div>
                        </div>
                        <div class="search-past__notcf">
                            <img src="https://i.imgur.com/tYGS0xL.png" />
                            <span class="search-past__notcf--past">Order packing correct</span>
                        </div>
                    </li>` : 
                    `${data.status === NEW_UI_STATUS_CANCELED ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order${data.order_id}" onclick="renderDetailsPast(${data.order_id})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    Order #${data.order_id}
                                </h3>
                                <p class="search-past__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                                <p class="search-past__time">${timestampConvert(data.timestamp)}</p>
                            </div>
                            <div class="search-past__right">
                                <div class="search-past__img-box">
                                    <img src="https://i.imgur.com/KtN88Ni.png" />
                                </div>
                                <p class="search-past__assign">Cancelled</p>
                            </div>
                        </div>
                        <div class="search-past__notcf">
                            <img src="https://i.imgur.com/QBVp9RA.png" />
                            <span>Food ready not pressed</span>
                        </div>
                    </li>` 
                    : `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order${data.order_id}" onclick="renderDetailsPast(${data.order_id})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    Order #${data.order_id}
                                </h3>
                                <p class="search-past__desc">${data.product_count} items for ${MONEY}${data.total}</p>
                                <p class="search-past__time">${timestampConvert(data.timestamp)}</p>
                            </div>
                            <div class="search-past__right">
                                <div class="search-past__img-box">
                                    <img src="https://i.imgur.com/UKWKNWg.png" />
                                </div>
                                <p class="search-past__assign">Out for delivery</p>
                            </div>
                        </div>
                        <div class="search-past__notcf">
                            <img src="https://i.imgur.com/tYGS0xL.png" />
                            <span class="search-past__notcf--past">Order packing correct</span>
                        </div>
                    </li>
                    `}`}
                    
               ` : '' }
            `;

            html +=htmlItem;
        });

        let container = document.querySelector(`.search-${path}__list`);

        container.innerHTML = html;

        // render details content with first id

        `${status === NEW_UI_STATUS_PLACED ? renderDetails(datas[0].order_id) : `${status === NEW_UI_STATUS_VCONFIRMED ? renderDetailsPacking(datas[0].order_id) : `${status === NEW_UI_STATUS_PACKED ? renderDetailsReady(datas[0].order_id) : renderDetailsPast(datas[0].order_id)}`}`}`;

        // active css with first id
        `${status === NEW_UI_STATUS_PLACED ? activeOrder("order", datas[0].order_id) : `${status === NEW_UI_STATUS_VCONFIRMED ? activeOrder("packing", datas[0].order_id) : `${status === NEW_UI_STATUS_PACKED ?  activeOrder("ready", datas[0].order_id) : activeOrder("past", datas[0].order_id)}`}`}`;
    }

    renderLeftSide(NEW_UI_STATUS_PLACED, "order");
    renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");
    renderLeftSide(NEW_UI_STATUS_PACKED, "ready");
    renderLeftSide(NEW_UI_STATUS_COMPLETE, "past");

    function activeOrder(path, id) {
        document.querySelector(`.search-${path}__box[data-order=order${id}]`).classList.add('active')
       
        let orders = {
            list: document.querySelector(`ul.search-${path}__list`),
            all: document.querySelectorAll(`.search-${path} .search-${path}__box`),
        }
        orders.all.forEach(f => {
        f.addEventListener('mousedown', () => {
            f.classList.contains('active') || setAciveChat(f);
            //console.log("list: ",orders.list, "all: ",orders.all);
        })
        });

        function setAciveChat(f) {
            orders.list.querySelector('.active').classList.remove('active')
            f.classList.add('active')
        }
    }

   /* setInterval(async function() {
            let abb = await getStatus();
            console.log('reset---------: ',abb)
            renderData();
        }, 2000); */

    async function getDataProduct(id) {
        spinner.removeAttribute('hidden');
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.get_order&order_id=${id}`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }
    }

    // get curent day

    function getCurentDays() {
        
        var datetime = new Date().toLocaleString();
        //console.log("datetime: ", datetime)
        return datetime;
    }
    getCurentDays()

    function sum(ids) {
       

        let quantity = document.querySelectorAll(`input[name="quantity"]`);
        //console.log("quantity: ", quantity.length)
        //console.log("price: ", price)
        let sumTotal = 0;
        for(let i = 0; i <= quantity.length - 1; i++) {
            console.log("value: ", quantity[i].value , "price: ", price)
            let sums = quantity[i].value * price;
            //console.log("sums: ", sums)
            sumTotal += sums;
            //console.log("sumTotal: ", sumTotal)
        }

        
       
        let total = `
            <div class="order-modal__grand-total">
                <p class="order-modal__grand">Grand total</p>
                <p class="order-modal__amount order-modal__amount--big">${MONEY}${sumTotal}</p>
            </div>  
        `
        let containerInput = document.querySelector('.order-modal__input');
        containerInput.innerHTML = total;
    }


    // get data modal
    async function getModals(ids) {
        
        document.querySelector(".step1").style.display="block";
        document.querySelector(".step2").style.display="none";
        document.querySelector(".step3").style.display="none";

        let totalForm = await getTotalForm();
        console.log("totalForm: ----- ", totalForm);
        
        let details = await getDataProduct(ids);
        //console.log("details: ----- ", details);

        let dataModal = '';
        let count = 1;
        
        let form = totalForm
      
     


      
        for(let a in details.products ) {
            //console.log("a: ", a, "det: ", details.products[a].product)
            console.log("key___product: ", details.products[a].amount )
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            //console.log('total product:', Object.keys(details.products).length)
            //console.log("z: ", pName)
            let option = ''
            for(let i = 1; i <= details.products[a].amount; i++) {
                console.log(i)
                if(i == details.products[a].amount) {
                    console.log('adbbff')
                    $("select option[value='details.products[a].amount']").attr("selected","selected");
                }

                option +=`

                    
                    <option class="optionA" value="${i}">${i}</option>
                `
            }

          //console.log(option)
            let htmlItem0 = `
                    <div class="order-modal__conmeno">
                        <span class="order-modal__index">${count++}</span>
                        <div class="order-modal__details--left">
                            <img src="https://i.imgur.com/76y9dFM.png" />
                            <div class="order-modal__dish">
                                <p class="order-modal__title">${pName.product}</p>
                                <p class="order-modal__type">${pName.product_code}</p>
                            </div>
                        </div>
                        <div class="order-modal__details--right">
                            <p class="order-modal__amount">${pName.price}</p>
                        </div>

                        
                        
                        
                        <select class="order-modal__quantity" id="${pName.item_id}" onchange="changeAmount(${details.order_id},this.value)"  name="[${pName.item_id}][amount]"  value="${pName.amount}">
                            
                               ${option}
                            
                            
                            
                        </select>
                        
                    </div>
            `

            dataModal += htmlItem0;
          

        }
       
      
        
        let total = `
            <div class="order-modal__grand-total">
                <p class="order-modal__grand">Grand total</p>
                <p class="order-modal__amount order-modal__amount--big" id="total">${MONEY}${details.total}</p>
            </div>  

            <div id="result" > </div>
            <input type="hidden" name="result_ids" value="my_id" />
          
        `


        let containerModal = document.querySelector('.order-modal__conme');
        containerModal.innerHTML = dataModal;
       
        let containerInput = document.querySelector('.order-modal__input');
        containerInput.innerHTML = total;
        let containerForm = document.querySelector('.formHere');
        containerForm.innerHTML = form;

        let containerModal2 = document.querySelector('.order-modal__conme2');
        containerModal2.innerHTML = dataModal;
       
        let containerInput2 = document.querySelector('.order-modal__input2');
        containerInput2.innerHTML = total;
        let containerForm2 = document.querySelector('.formHere2');
        containerForm2.innerHTML = form;
        
        $(".formHere button").hide();
        $(".formHere2 button").hide();
        /*let btn2 = document.querySelector('.formHere button').classList.add('cm-ajax');
        console.log("btn: ", btn2)

        $(function() {
            $('form').submit(function() {
                console.log('form submit', $('form').serializeObject())
                $('#result').text(JSON.stringify($('form').serializeObject()));
                return false;
            });
        });*/
        
       //let btn = document.querySelector('.form-table').classList.add('cm-ajax');
      // let btn = $(".form-table").addClass('cm-ajax-full-render cm-ajax')
       //let btn2 = $(".form-table button").addClass('cm-ajax')
      // console.log("btn: ", btn)
/*console.log($(".formHere  button"))
        $(".formHere form button").click(function(e){    
            e.preventDefault();
                $.ajax({    
                    type: "POST",
                    url: "http://localhost:8080/cart/vendor.php",
                    data: $(".formHere form").serialize(),
                    cache: false,
                    success: function(response)
                    {    if(response =="done")
                        {    alert("Form submitted successfully!", response);    }
                        else
                        {    alert("Form submission failed!");    }
                    },
                    error:function(response){    alert(response);    }
                });
        })*/
       /* $(".formHere form button").click(function(e){    
           e.preventDefault();
            var endpoint = 'http://localhost:8080/cart/vendor.php?dispatch=new_orders.update_totals'; 

            $.ajax({ 
                type: "POST",
                url: endpoint,
                data: $('.formHere form').serializeArray(),
                success: function (response) {
                    console.log('success post', JSON.parse(response));
                    let newTotal = JSON.parse(response)
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                        //$('#result').text($('.form-table').serializeObject());
                    // return false;
                    $('#total').text(`₹${newTotal.total}.00`)
                }
            });
        })
        function updateTotals(e){    
           e.preventDefault();
            var endpoint = 'http://localhost:8080/cart/vendor.php?dispatch=new_orders.update_totals'; 

            $.ajax({ 
                type: "POST",
                url: endpoint,
                data: $('.formHere form').serializeArray(),
                success: function (response) {
                    console.log('success post', JSON.parse(response));
                    let newTotal = JSON.parse(response)
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                        //$('#result').text($('.form-table').serializeObject());
                    // return false;
                    $('#total').text(`₹${newTotal.total}.00`)
                }
            });
        }
        */

    }

    async function changeAmount(ids, val) {
         let details = await getDataProduct(ids);
        for(let a in details.products ) {
            let pName = details.products[a];
            
            let inputUpdate = document.getElementsByName(`cart_products[${pName.item_id}][amount]`)[0];
            let idUpdate = document.getElementsByName(`[${pName.item_id}][amount]`)[0];
            //idUpdate.value = val;
            inputUpdate.value = idUpdate.value;

           
            
            console.log("updateInput:", inputUpdate)
            console.log("idUpdate:", idUpdate)
            //console.log("update:", inputUpdate.value = idUpdate.value)
            console.log("button: ")
        }
        
            updateTotals2();
    }
function updateTotals2(e){    
          // e.preventDefault();
            var endpoint = 'http://localhost:8080/cart/vendor.php?dispatch=new_orders.update_totals'; 

            $.ajax({ 
                type: "POST",
                url: endpoint,
                data: $('.formHere form').serializeArray(),
                success: function (response) {
                    console.log('success post', JSON.parse(response));
                    let newTotal = JSON.parse(response)
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                    //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                        //$('#result').text($('.form-table').serializeObject());
                    // return false;
                    $('#total').text(`₹${newTotal.total}.00`)
                }
            });
        }


    // new
    async function renderDetails(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

       /* document.querySelector(`.search-order__box[data-order=order${details.order_id}]`).classList.add('active')
        document.querySelector(`.have-order__mid--rel[data-order=order${details.order_id}]`).classList.add('active')
        document.querySelector(`.search-order__right-top[data-order=order${details.order_id}]`).classList.add('active') */

      /*  let abc = Object.keys(details.products).forEach(key => {
            console.log("obj: ",key, details.products[key].product);
            return details.products[key].product;
        });
        console.log("aaa: ", abc); 

        Object.keys(details.product_groups).forEach(key => {
            console.log("key: ",key, "obj: ",details.product_groups[key].products.amount);
           
        });*/
       
        let html2 = "";
        let htmlSub = "";
        
        let stt = 1;
        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log('total product:', Object.keys(details.products).length)
            console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-order__details">
                                <div class="search-order__details--left">
                                    <span class="search-order__title">${stt++}</span>
                                    <div class="search-order__dish">
                                        <p class="search-order__title">
                                            ${pName.product}
                                        </p> 
                                        
                                        <p class="search-order__type">${pName.product_code}</<?php echo '?>'; ?>

                                        <p class="search-order__price">
                                            ${pName.price}
                                        </p>
                                    </div>
                                </div>
                                <div class="search-order__details--right">
                                    <p class="search-order__amount">X
                                        ${pName.amount}
                                    </p>
                                </div>
                            </li>
            `
            htmlSub += htmlItem0;
        }

        let htmlTaxes = "";
        for(let a in details.taxes ) {
            console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        ${MONEY}${tName.tax_subtotal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
            console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === "G") {
                console.log("GGGGG")
                timePrint = `
                ${countTimeHistory(index.timestamp)}</p>
                `
            }
        }
    

            let htmlItem2 = `
               <div class="have-order__mid">
                    <div class="have-order__mid--rel active" data-order="order${details.order_id}">
                        <div class="search-order__box search-order__box--mid">
                            <div class="search-order__left">
                                <h3 class="search-order__id search-order__id--bold">
                                    Order #${details.order_id}  <span class="search-order__new">New</span>
                                </h3>
                                <p class="search-order__desc search-order__desc--gray">${totalProducts} items for ${MONEY}${details.total}</p>
                                
                            </div>
                            <div class="search-order__right">
                                <div class="search-order__right-print dropdown show">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                    </a>
                                    <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_invoice&order_id=${details.order_id}">Invoice</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Invoice (PDF)</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Packing slip</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="search-order__date">${timePrint}</p>
                            </div>
                        </div>
                        <ul class="search-order__list-details">
                        
                            
                           
                       
                        </ul>

                        <div class="search-order__buttons">
                        
                            <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#showStork" value="Mark out of stock"  onclick="getModals(${details.order_id})"/>

                            <input type="button" class="search-order__buttons--btn search-order__buttons--confirm" onclick="getChange(${details.order_id})" value="Confirm order" ></input>
                        </div>
                    </div>

                </div>

                <div class="have-order__right">
                   
                    <div class="search-order__right-top active" data-order="order${details.order_id}">
                        <div class="search-order__right-box">
                            <div class="search-order__img-box search-order__img-box--big">
                                <img src="https://i.imgur.com/CYDfvhi.png" />
                            </div>
                            <div class="search-order__right-content">
                                <h4 class="search-order__right-title">
                                    Packing Time
                                </h4>
                                <p class="search-order__right-time">
                                    20 mins
                                </p>
                                <p class="search-order__right-status">
                                    Packing not started
                                </p>
                            </div>
                        </div>
                        
                        <div class="search-order__right-box">
                            <div class="search-order__img-box search-order__img-box--big">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <div class="search-order__right-content">
                                <h4 class="search-order__right-title">
                                    Delivery Executive
                                </h4>
                                <p class="search-order__right-assign">
                                    Pending assignent...
                                </p>
                                
                            </div>
                        </div>

                        <div class="search-order__right-box">
                            <div class="search-order__img-box search-order__img-box--big">
                                <img src="https://i.imgur.com/OFK8M5L.png" />
                            </div>
                            <div class="search-order__right-content">
                                <h4 class="search-order__right-title">
                                    Grand Total
                                </h4>
                 
                                    <p class="search-order__right-price">
                                        ${MONEY}${details.total}
                                    </p>
                              
                                <div class="search-order__right-info">
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Item total</p>
                                        <p class="search-order__right-money">${MONEY}${details.subtotal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Shipping cost</p>
                                        <p class="search-order__right-money">${MONEY}${details.shipping_cost}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">GST</p>
                                        <p class="search-order__right-money search-order__right-taxes">
                                            
                                        </p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Discount</p>
                                        <p class="search-order__right-money">${MONEY}${details.subtotal_discount}</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="search-order__right-box">
                            <a class="search-order__link" href="javascript:void(0)">Need help with this order?</a>
                        </div>
                    </div>
                   
                </div>
            `;
          

            html2 += htmlItem2; 

   
        let container2 = document.querySelector('.have-order__content');
        container2.innerHTML = html2;
        let containerSub = document.querySelector('.search-order__list-details')
        containerSub.innerHTML = htmlSub;
        let containerTaxes = document.querySelector('.search-order__right-taxes')
        containerTaxes.innerHTML = htmlTaxes;
     
    }
    

    // packing
    async function renderDetailsPacking(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);
        

        let html2 = "";
        let htmlSub = "";
        let stt = 1;
        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-packing__details">
                                <div class="search-packing__details--left">
                                    <span class="search-packing__title">${stt++}</span>
                                    <div class="search-packing__dish">
                                        <p class="search-packing__title">${pName.product}</p>
                                        <p class="search-packing__type">${pName.product_code}</p>
                                        <p class="search-packing__price">${pName.price}</p>
                                    </div>
                                </div>
                                <div class="search-packing__details--right">
                                    <p class="search-packing__amount">X  ${pName.amount}</p>
                                </div>
                            </li>
                            
            `
            htmlSub += htmlItem0;
        }
        let htmlTaxes = "";
        for(let a in details.taxes ) {
            console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        ${MONEY}${tName.tax_subtotal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
            console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === "G") {
                console.log("GGGGG")
                timePrint = `
                ${countTimeHistory(index.timestamp)}</p>
                `
            }
        }

        let htmlItem2 = `
            <div class="have-packing__mid">
                <div class="have-packing__mid--rel active" data-order="order${details.order_id}">
                    <div class="search-packing__box search-packing__box--mid">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--bold search-packing__id--packing">
                                Order #${details.order_id}<span class="search-packing__new search-packing__new--packing">Packing</span>
                            </h3>
                            <p class="search-packing__desc search-packing__desc--gray">${totalProducts} items for ${MONEY}${details.total}</p>
                            
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_invoice&order_id=${details.order_id}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">${timePrint}</p>
                        </div>
                    </div>
                    <ul class="search-packing__list-details">
                        
                        
                    </ul>

                
                    <div class="search-packing__buttons">
                        <input type="button" class="search-packing__buttons--btn search-packing__buttons--packing" value="Mark order packed" onclick="getPacked(${details.order_id})"/>
                    </div>
                </div>
                
            </div>
            <div class="have-packing__right">
                <div class="search-packing__right-top active" data-order="order${details.order_id}">
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/CYDfvhi.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Packing Time
                            </h4>
                            <p class="search-packing__right-time">
                                10 mins remaning
                            </p>
                            <p class="search-packing__right-status">
                                Packin started
                            </p>
                        </div>
                    </div>
                    
                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Delivery Executive
                            </h4>
                            <p class="search-packing__right-assign">
                                Pending assignent...
                            </p>
                            
                        </div>
                    </div>

                    <div class="search-packing__right-box">
                        <div class="search-packing__img-box search-packing__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-packing__right-content">
                            <h4 class="search-packing__right-title">
                                Grand Total
                            </h4>
                            <p class="search-packing__right-price">
                                ${MONEY}${details.total}
                            </p>
                            <div class="search-packing__right-info">
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Item total</p>
                                    <p class="search-packing__right-money">${MONEY}${details.subtotal}</p>
                                </div>
                                <div class="search-packing__right-row">
                                        <p class="search-packing__right-label">Shipping cost</p>
                                        <p class="search-packing__right-money">${MONEY}${details.shipping_cost}</p>
                                    </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">GST</p>
                                    <p class="search-packing__right-money search-packing__right-taxes">
                                            </p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Discount</p>
                                    <p class="search-packing__right-money">${MONEY}${details.subtotal_discount}</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-packing__right-box">
                        <a class="search-packing__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
                
            </div>
        `;
          

        html2 += htmlItem2; 

   
        let container2 = document.querySelector('.have-packing__content');
        container2.innerHTML = html2;
        let containerSub = document.querySelector('.search-packing__list-details')
        containerSub.innerHTML = htmlSub;
        let containerTaxes = document.querySelector('.search-packing__right-taxes')
        containerTaxes.innerHTML = htmlTaxes;
     
    }

    // ready
    async function renderDetailsReady(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

        let html2 = "";
        let htmlSub = "";
      
        let stt = 1;
        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log('total product:', Object.keys(details.products).length)
            console.log("z: ", pName)
            let htmlItem0 = `
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <span class="search-ready__title">${stt++}</span>
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">${pName.product}</p>
                                    <p class="search-ready__type">${pName.product_code}</p>
                                    <p class="search-ready__price">${pName.price}</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X${pName.amount}</p>
                            </div>
                        </li>
            `
            htmlSub += htmlItem0;
        }
        let htmlTaxes = "";
        for(let a in details.taxes ) {
            console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        ${MONEY}${tName.tax_subtotal}
            `
            htmlTaxes += htmlTax;
        }

        

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
            console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === "G") {
                console.log("GGGGG")
                timePrint = `
                ${countTimeHistory(index.timestamp)}</p>
                `
            }
        }

        let htmlItem2 = `
            <div class="have-ready__mid">
                <div class="have-ready__mid--rel active" data-order="order${details.order_id}">
                    <div class="search-ready__box search-ready__box--mid">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--bold search-ready__id--packing">
                                Order #${details.order_id}<span class="search-ready__new search-ready__new--packing">Ready</span>
                            </h3>
                            <p class="search-ready__desc search-ready__desc--gray">${totalProducts} items for ${MONEY}${details.total}</p>
                    
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_invoice&order_id=${details.order_id}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">${timePrint}</p>
                        </div>
                    </div>
                    <ul class="search-ready__list-details">
                        
                        
                    </ul>
                </div>
            </div>
            <div class="have-ready__right">
                <div class="search-ready__right-top active" data-order="order${details.order_id}">
                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Delivery Executive
                            </h4>
                            
                            <p class="search-ready__right-person">
                                Utpal Choudhury
                            </p>
                            <p class="search-ready__right-phone">
                                <img src="https://i.imgur.com/xbHY2sf.png"><span class="search-ready__right-first-num">+91</span><span>5647867875</span>
                            </p>
                            <div class="search-ready__right-pickup">
                                <p class="search-ready__right-pickup-text">Pick up arriving in</p>
                                
                                <div id="countdown">
                                <div id="countdown-number"></div>
                                <svg class="countdown" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <circle r="90" cx="100" cy="100"></circle>
                                    <circle class="countdown-circle" r="90" cx="100" cy="100"></circle>
                                </svg>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Grand Total
                            </h4>
                            <p class="search-ready__right-price">
                               ${MONEY}${details.total}
                            </p>
                            <div class="search-ready__right-info">
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Item total</p>
                                    <p class="search-ready__right-money">${MONEY}${details.subtotal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Shipping cost</p>
                                    <p class="search-ready__right-money">${MONEY}${details.shipping_cost}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">GST</p>
                                    <p class="search-ready__right-money search-ready__right-taxes">
                                            
                                    </p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Discount</p>
                                    <p class="search-ready__right-money">${MONEY}${details.subtotal_discount}</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="search-ready__right-box">
                        <a class="search-ready__link" href="javascript:void(0)">Need help with this order?</a>
                    </div>
                </div>
            </div>
            `;
          

        html2 += htmlItem2; 

   
        let container2 = document.querySelector('.have-ready__content');
        container2.innerHTML = html2;
        let containerSub = document.querySelector('.search-ready__list-details')
        containerSub.innerHTML = htmlSub;
        let containerTaxes = document.querySelector('.search-ready__right-taxes')
        containerTaxes.innerHTML = htmlTaxes;

        function fancyTimeFormat(time) {
            // Hours, minutes and seconds
            const hrs = ~~(time / 3600);
            const mins = ~~((time % 3600) / 60);
            const secs = ~~time % 60;

            // Output like "1:01" or "4:03:59" or "123:03:59"
            let ret = "";

            if (hrs > 0) {
                ret += "" + hrs + ":" + (mins < 10 ? "0" : "");
            }

            ret += "" + mins + ":" + (secs < 10 ? "0" : "");
            ret += "" + secs;
            return ret;
        }

        const countdownNumberEl = document.getElementById("countdown-number");
        const circle = document.getElementsByClassName("countdown-circle")[0];
        const countdown = 300;
        let newcountdown = countdown;
        const maxoffset = 2 * Math.PI * 100;
        let offset = 0;
        countdownNumberEl.textContent = fancyTimeFormat(countdown);

        tick = setInterval(function() {
        newcountdown = --newcountdown <= 0 ? 0 : newcountdown;
        if (offset - maxoffset / countdown >= -Math.abs(maxoffset)) {
            offset = offset - maxoffset / countdown;
        } else {
            offset = -Math.abs(maxoffset);
            clearInterval(tick);
        }

        countdownNumberEl.textContent = fancyTimeFormat(newcountdown);
        circle.setAttribute("style", "stroke-dashoffset:" + offset + "px");
        }, 1000);

     
    }
    
    function countTimeHistory(time) {
       
        let ts = new Date(time * 1000);
        console.log("ts: ",ts.toLocaleString());
        return ts.toLocaleString();
    }
    


    // past
    async function renderDetailsPast(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

        console.log("time history: ", details.status_history)

        let html2 = "";
        let htmlSub = "";
        
        let place = '';
        
        let confirm = '';

        let packed = '';

        let delivery = '';

        let cancel = '';

        
        let timeArray = details.status_history;

        for(let a in timeArray) {
            console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === "G") {
                console.log("GGGGG")
                place = `
                <p class="search-past__box-time-h">${countTimeHistory(index.timestamp)}</p>
                <p class="search-past__box-time-p">Placed</p>`
            } else if (index.status === "E") {
                console.log("EEEEE")
                confirm = `
                <p  class="search-past__box-time-h">${countTimeHistory(index.timestamp)}</p>
                <p class="search-past__box-time-p">Confirmed</p>`
            } else if (index.status === "A") {
                console.log("AAAAAAA")
                packed = `
                <p  class="search-past__box-time-h">${countTimeHistory(index.timestamp)}</p>
                <p class="search-past__box-time-p">Packed</p>`
            } else if (index.status === "C") {
                console.log("CCCCCCCCC")
                delivery = ` 
                <p  class="search-past__box-time-h">${countTimeHistory(index.timestamp)}</p>
                <p class="search-past__box-time-p">Delivered</p>`
            } else if (index.status === "I") {
                console.log("canncel IIIIIII")
                cancel = ` 
                <p  class="search-past__box-time-h">${countTimeHistory(index.timestamp)}</p>
                <p class="search-past__box-time-p">Canceled</p>`
            } else {
                console.log('nothing')
            }
        }

        let timeCompleted = `
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        ${place}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        ${confirm}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        ${packed}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        ${delivery}
                        
                    </div>
                </div>`

        let timeOutFor = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                ${place}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                ${confirm}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                ${packed}
                            </div>
                        </div>`
        let timeCancel = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                ${place}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                ${cancel}
                                 
                            </div>
                        </div>`
        
        let htmlTime = `
            ${details.status === NEW_UI_STATUS_COMPLETE ? `${timeCompleted}` : `${details.status === NEW_UI_STATUS_CANCELED ? `${timeCancel}` : `${timeOutFor}` }` }
        `

        let stt = 1;
        for(let a in details.products ) {
            //console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            //console.log('total product:', Object.keys(details.products).length)
            //console.log("z: ", pName)
            let htmlItem0 = `
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <span class="search-packing__title">${stt++}</span>
                                <div class="search-past__dish">
                                    <p class="search-past__title">${pName.product}</p>
                                    <p class="search-past__type">${pName.product_code}</p>
                                    <p class="search-past__price">${pName.price}</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X${pName.amount}</p>
                            </div>
                        </li>
            `
            htmlSub += htmlItem0;
        }
    
        let htmlTaxes = "";
        for(let a in details.taxes ) {
            console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        ${MONEY}${tName.tax_subtotal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray2 = details.status_history;
        let timePrint = '';
        for(let a in timeArray2) {
            console.log("time history: ", timeArray2[a])
            let index = timeArray2[a];

            if(index.status === "G") {
                console.log("GGGGG")
                timePrint = `
                ${countTimeHistory(index.timestamp)}</p>
                `
            }
        }
        let htmlItem2 = `
            <div class="have-past__mid">
                <div class="have-past__mid--rel active" data-order="order${details.order_id}">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            ${details.status === NEW_UI_STATUS_COMPLETE  ? ` 
                                <h3 class="search-past__id search-past__id--bold search-past__id--packing">
                                    Order #${details.order_id}<span class="search-past__new search-past__new--packing">Delivered</span>
                                </h3>` : `${details.status === NEW_UI_STATUS_CANCELED  ? `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    Order #${details.order_id}<span class="search-past__new search-past__new--delevered">Cancelled</span>
                                </h3>` : `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    Order #${details.order_id}<span class="search-past__new search-past__new--delevered">Out for delivery</span>
                                </h3>
                            `}`} 
                            <p class="search-past__desc search-past__desc--gray">${totalProducts} items for ${MONEY}${details.total}</p>
  
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_invoice&order_id=${details.order_id}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://localhost:8080/cart/vendor.php?dispatch=orders.print_packing_slip&order_id=${details.order_id}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">${timePrint}</p>
                        </div>
                    </div>
                    <div class="search-past__box-time">
                        
                    </div>
                    <ul class="search-past__list-details">
                        
                        
                        
                    </ul>
                </div>

            
            
            </div>
            <div class="have-past__right">
                <div class="search-past__right-top active" data-order="order${details.order_id}">
                    <div class="search-past__right-box">
                        <div class="search-past__img-box search-past__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-past__right-content">
                            <h4 class="search-past__right-title">
                                Grand Total
                            </h4>
                            <p class="search-past__right-price">
                                ${MONEY}${details.total}
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">${MONEY}${details.subtotal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Shipping cost</p>
                                    <p class="search-past__right-money">${MONEY}${details.shipping_cost}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money search-past__right-taxes">
                                            
                                    </p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">${MONEY}${details.subtotal_discount}</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
                </div>
            </div>
            `;
          

        html2 += htmlItem2; 

   
        let container2 = document.querySelector('.have-past__content');
        container2.innerHTML = html2;
        let containerSub = document.querySelector('.search-past__list-details')
        containerSub.innerHTML = htmlSub;
        let containerTime = document.querySelector('.search-past__box-time')
        containerTime.innerHTML = htmlTime;
        let containerTaxes = document.querySelector('.search-past__right-taxes')
        containerTaxes.innerHTML = htmlTaxes;


    }
    
  
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

    function continueModal() {
        document.querySelector(".step1").style.display="none";
        document.querySelector(".step2").style.display="block";
        
    }
    function backModal() {
        document.querySelector(".step1").style.display="block";
        document.querySelector(".step2").style.display="none";
    }

    function confirmModal() {
        document.querySelector(".step2").style.display="none";
        document.querySelector(".step3").style.display="block";
    }
    /*document.getElementById("new").style.display="none";
        document.getElementById("packing").style.display="flex";*/
    
    document.querySelector('.tab__li[data-tab=tab1]').classList.add('active');
    document.querySelector('.have-tab[data-tab=tab1]').classList.add('activeTab');

    let tabs = {
    list: document.querySelector('ul.nav-tabs'),
    all: document.querySelectorAll('.nav-tabs .tab__li'),

    },
    tabsContent = {
        container: document.querySelector('.have-content'),
        current: null,
        tab: null,
    }

    console.log("tabs list: ",tabs.list, "all: ",tabs.all);
    console.log("tabs container: ",tabsContent.container, "current: ",tabsContent.current, "tab: ",tabsContent.tab);
    
    
    tabs.all.forEach(f => {
            
        f.addEventListener('mousedown', () => {
            
            //console.log("func: ",f)
            //console.log("tabs list: ",tabs.list, "all: ",tabs.all);
            //console.log("tabs container: ",tabsContent.container, "current tab: ",tabsContent.current, "tab: ",tabsContent.tab);
                
                // set time out for change tab
                f.classList.contains('activeTab') || setAciveTabs(f);
              /*  spinner.removeAttribute('hidden');
                setTimeout(function() {
                    spinner.setAttribute('hidden', '');
                    f.classList.contains('activeTab') || setAciveTabs(f);
                }, 1000) */
            })
        }
    );

    function setAciveTabs(f) {
        
        tabs.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        tabsContent.current = tabsContent.container.querySelector('.activeTab')
        tabsContent.tab = f.getAttribute('data-tab')
        tabsContent.current.classList.remove('activeTab')
        tabsContent.container.querySelector('[data-tab="' + tabsContent.tab + '"]').classList.add('activeTab')
    
    }


<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>

    const spinner = document.getElementById("spinner");

    async function getChange(id) {
        spinner.removeAttribute('hidden');
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.change_status&order_id=${id}&status=E`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus(NEW_UI_STATUS_PLACED, "tab1");
        renderLeftSide(NEW_UI_STATUS_PLACED, "order");

        renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
        renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");

        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.add('activeTab');
    }

    async function getPacked(id) {
        spinner.removeAttribute('hidden');
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.change_status&order_id=${id}&status=A`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
        renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");

        renderCountStatus(NEW_UI_STATUS_PACKED, "tab3");
        renderLeftSide(NEW_UI_STATUS_PACKED, "ready");

        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.add('activeTab');
        
    }
    
   
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    function openReady() {
        console.log('open ready')
        /*
        document.getElementById("packing").style.display="none";
        document.getElementById("ready").style.display="flex";*/

        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.add('activeTab');
    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    function openPast() {
        console.log('open ready')
        document.getElementById("ready").style.display="none";
        document.getElementById("past").style.display="flex";

    }
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>



<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
