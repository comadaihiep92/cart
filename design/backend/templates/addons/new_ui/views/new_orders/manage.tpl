{capture name="mainbox"}

{if $runtime.mode == "new"}
    <p>{__("text_admin_new_orders")}</p>
{/if}

{$order_status_descr = $smarty.const.STATUSES_ORDER|fn_get_simple_statuses:true:true}
{$order_statuses = $smarty.const.STATUSES_ORDER|fn_get_statuses:$statuses:true:true}
{* 
{capture name="sidebar"}
    {hook name="orders:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch="orders.manage" view_type="orders"}
    {include file="views/orders/components/orders_search_form.tpl" dispatch="orders.manage"}
    {/hook}
{/capture} *}


<div class="orders__header">
    <div class="row">
        <div class="col-xs-7">
            <ul class="nav nav-tabs count-status">
               
                <li class="tab__li active" data-tab="tab1">
                    {* <a href="#new" class="tab__link" title="New"  > *}
                        {* <span class="icon new-orders-icon"></span>
                        <span>New</span> *}
                        {* <span class="number number--order">1</span> *}
                    {* </a> *}
                </li>
                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab2" >
                    {* <a href="#packing" class="tab__link" title="Packing" >
                        <span class="icon preparing-orders-icon"></span>
                        <span>Packing</span>
                        <span class="number number--packing">1</span>
                    </a> *}
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab3" >
                    {* <a href="#ready" class="tab__link" title="Ready" >
                        <span class="icon ready-orders-icon"></span>
                        <span>Ready</span>
                        <span class="number number--ready">1</span>
                    </a> *}
                </li>

                <li>
                    <span class="orders-state-transition-indicator"></span>
                </li>

                <li class="tab__li" data-tab="tab4">
                    {* <a href="#past" class="tab__link" title="More"  >
                        <span class="icon more-orders-icon"></span>
                        <span>Past Orders</span>
                        <span class="number number--past">1</span>
                    </a> *}
                </li>
               
            </ul>
        </div>

    </div>
</div>

{* <form action="{""|fn_url}" method="post" target="_self" name="orders_list_form"> *}
{* <form action="{""|fn_url}" method="post" target="_self" name="orders_list_form"> *}

{* {include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id} *}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}

{assign var="page_title" value=__("orders")}
{assign var="extra_status" value=$config.current_url|escape:"url"}

{if $orders}
{* <div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
        <th width="50" class="left mobile-hide">
        {include file="common/check_items.tpl" check_statuses=$order_status_descr}
        </th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=order_id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("id")}{if $search.sort_by == "order_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th><a class="cm-ajax" href="{"`$c_url`&sort_by=date&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("date")}{if $search.sort_by == "date"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>




    {if $account_type!='vendor'}        
            <th><a class="cm-ajax" href="{"`$c_url`&sort_by=customer&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("customer")}{if $search.sort_by == "customer"}{$c_icon nofilter}{/if}</a></th>
            <th><a class="cm-ajax" href="{"`$c_url`&sort_by=phone&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("phone")}{if $search.sort_by == "phone"}{$c_icon nofilter}{/if}</a></th>
    {/if}
            {hook name="orders:manage_header"}{/hook}

            <th class="mobile-hide">&nbsp;</th>
            <th class="right"><a class="cm-ajax{if $search.sort_by == "total"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=total&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("total")}</a></th>

        </tr>
        </thead>

    

        {foreach from=$orders item="o"}
        {hook name="orders:order_row"}; 
        <tr>
            <td class="left mobile-hide">
                <input type="checkbox" name="order_ids[]" value="{$o.order_id}" class="cm-item cm-item-status-{$o.status|lower}" /></td>
            <td data-th="{__("id")}">
                <a href="{"orders.details?order_id=`$o.order_id`"|fn_url}" class="underlined">{__("order")} <bdi>#{$o.order_id}</bdi></a>
                {if $order_statuses[$o.status].params.appearance_type == NEW_UI_STATUS_CANCELED && $o.invoice_id}
                    <p class="muted">{__("invoice")} #{$o.invoice_id}</p>
                {elseif $order_statuses[$o.status].params.appearance_type == NEW_UI_STATUS_COMPLETE && $o.credit_memo_id}
                    <p class="muted">{__("credit_memo")} #{$o.credit_memo_id}</p>
                {/if}
                {include file="views/companies/components/company_name.tpl" object=$o}
            </td>
            <td data-th="{__("status")}">
                {if "MULTIVENDOR"|fn_allowed_for}
                    {assign var="notify_vendor" value=true}
                {else}
                    {assign var="notify_vendor" value=false}
                {/if}
    {if $account_type!='vendor'}
                {include file="common/select_popup.tpl"
                        suffix="o"
                        order_info=$o
                        id=$o.order_id
                        status=$o.status
                        items_status=$order_status_descr
                        update_controller="orders"
                        notify=true
                        notify_department=true
                        notify_vendor=$notify_vendor
                        status_target_id="orders_total,`$rev`"
                        extra="&return_url=`$extra_status`"
                        statuses=$order_statuses
                        btn_meta="btn btn-info o-status-`$o.status` btn-small"|lower
                        text_wrap=true
                }
    {else}
    {include file="views/orders/components/select_popup.tpl"
                        suffix="o"
                        order_info=$o
                        id=$o.order_id
                        status=$o.status
                        items_status=$order_status_descr
                        update_controller="orders"
                        notify=true
                        notify_department=true
                        notify_vendor=$notify_vendor
                        status_target_id="orders_total,`$rev`"
                        extra="&return_url=`$extra_status`"
                        statuses=$order_statuses
                        btn_meta="btn btn-info o-status-`$o.status` btn-small"|lower
                        text_wrap=true
                }
    {/if}
                {if $o.issuer_name}
                <p class="muted shift-left">{$o.issuer_name}</p>
                {/if}
            </td>
            <td class="nowrap" data-th="{__("date")}">{$o.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
    {if $account_type!='vendor'}        
            <td data-th="{__("customer")}">
                {if $o.email}<a href="mailto:{$o.email|escape:url}">@</a> {/if}
                {if $o.user_id}<a href="{"profiles.update?user_id=`$o.user_id`"|fn_url}">{/if}{$o.lastname} {$o.firstname}{if $o.user_id}</a>{/if}
                {if $o.company}<p class="muted">{$o.company}</p>{/if}
            </td>
            <td {if $o.phone}data-th="{__("phone")}"{/if}><bdi><a href="tel:{$o.phone}">{$o.phone}</a></bdi></td>
    {/if}
        {hook name="orders:manage_data"}{/hook}

        <td width="5%" class="center" data-th="{__("tools")}">
            {capture name="tools_items"}
                <li>{btn type="list" href="orders.details?order_id=`$o.order_id`" text={__("view")}}</li>
                {hook name="orders:list_extra_links"}
                    <li>{btn type="list" href="order_management.edit?order_id=`$o.order_id`" text={__("edit")}}</li>
                    <li>{btn type="list" href="order_management.edit?order_id=`$o.order_id`&copy=1" text={__("copy")}}</li>
                    {assign var="current_redirect_url" value=$config.current_url|escape:url}
                    <li>{btn type="list" href="orders.delete?order_id=`$o.order_id`&redirect_url=`$current_redirect_url`" class="cm-confirm" text={__("delete")} method="POST"}</li>
                {/hook}
            {/capture}
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_items}
            </div>
        </td>
        <td class="right" data-th="{__("total")}">
            {include file="common/price.tpl" value=$o.total}
        </td>
    </tr>
    {/hook}
    {/foreach}
    </table>
</div> *}


<div class="have-content">
    <!-- order -->
    <div class="have-tab have-order" id="new" data-tab="tab1">
    
        <div class="have-order__left search-order" >
            <div class="search-order__box-input">
            {* <i class="icon-search"></i> *}
            <input class="search-order__input searchID" type="search" name="search"  onchange="searchId()" placeholder="Search"></input>
            </div>
            {* get data *}
            
            <ul class="search-order__list">
               {* fecth list status NEW (G) *}
                
  
            </ul>
            
        </div>
  
        <div class="have-order__content">
                {* get detail NEW *}
                
 
        </div>
       
    </div>

    
    <!-- packing -->

    <div class="have-tab have-packing" id="packing" data-tab="tab2">
        <div class="have-packing__left search-packing" >
            <div class="search-packing__box-input">
            {* <i class="icon-search"></i> *}
            <input class="search-packing__input" type="search" placeholder="Search">
            </div>
            <ul class="search-packing__list">
            
                {* fecth list status PACKING (E) *}

            </ul>
        </div>
        <div class="have-packing__content">
            {* get detail PACKING *}
        </div>
    </div>


    <!-- ready -->
    <div class="have-tab have-ready" id="ready" data-tab="tab3">
        <div class="have-ready__left search-ready" >
            <div class="search-ready__box-input">
            {* <i class="icon-search"></i> *}
            <input class="search-ready__input" type="search" placeholder="Search">
            </div>
            <ul class="search-ready__list">

             {* fecth list status PACKING (A) *}
                
            </ul>
        </div>
        <div class="have-ready__content">
             {* get detail READY *}
           
        </div>
    </div>

    <!-- past -->
    <div class="have-tab have-past" id="past" data-tab="tab4">
        <div class="have-past__left search-past" >
            <div class="search-past__box-input">
            {* <i class="icon-search"></i> *}
            <input class="search-past__input" type="search" placeholder="Search">
            </div>
            <ul class="search-past__list">

            {* fecth list status PACKING (C) *}
 
            </ul>
        </div>
        <div class="have-past__content">
            {* get detail PAST *}
            
        </div>
    </div>
    
</div>
{$id = $store_location.store_location_id|default:"0"}
{$allow_save = $store_location|fn_allow_save_object:"store_locations" && fn_check_view_permissions("store_locator.update", "POST")}
{$show_save_btn = $allow_save scope = root}
{include file="addons/store_locator/pickers/map.tpl"}
<div class="control-group">
    <label class="control-label cm-required">{__("coordinates")} ({__("latitude_short")} &times; {__("longitude_short")}):</label>
    <label class="control-label cm-required hidden" for="elm_latitude">{__("latitude")}</label>
    <label class="control-label cm-required hidden" for="elm_longitude">{__("longitude")}</label>
    <div class="controls">
        {hook name="store_locator:select_coordinates"}
        <input type="text" name="store_location_data[latitude]" id="elm_latitude" value="{$store_location.latitude}" data-ca-latest-latitude="{$store_location.latitude}" class="input-small">
        &times;
        <input type="text" name="store_location_data[longitude]" id="elm_longitude" value="{$store_location.longitude}" data-ca-latest-longitude="{$store_location.longitude}" class="input-small">
        {/hook}
    </div>
</div>


<div hidden id="spinner"></div>
<div hidden id="spinnerDone">
<svg  class="checkmark success" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
    <circle class="checkmark_circle_success" cx="26" cy="26" r="25" fill="none"/>
    <path class="checkmark_check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" stroke-linecap="round"/>
</svg>
</div>
<!-- Modal -->
<div class="modal modal-showStork " id="showStork" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    {* step 1 *}
    <div class="modal-content modal-showStork__content modal-showStork__content--active step1">
      <div class="modal-body">
      <div hidden id="spinner2"></div>
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top title1">Enter your desired quantily and click continue</div>
            <div class="order-modal__top title2">Note: Order once confirmed can't be edited again.</div>
            <div class="order-modal__list order-modal__markout">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
                    <div class="order-modal__conme">
                        {* <div class="order-modal__conmeno">
                            <span class="order-modal__index">1</span>
                            <div class="order-modal__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="order-modal__dish">
                                    <p class="order-modal__title">Chicken Biryani</p>
                                    <p class="order-modal__type">Biryani</p>
                                </div>
                            </div>
                            <div class="order-modal__details--right">
                                <p class="order-modal__amount">$127</p>
                            </div>
                            <input class="order-modal__quantity" id="quantity" name="quantity" value="1" type="number" />
                        </div> *}
                        
                    </div>
                    
                    <div class="order-modal__input">
                        {* <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>   *}
                    </div>
                    <div class="formHere"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer modal-showStork__footer">
        <div class="order-modal__buttons order-modal__buttons1">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-dismiss="modal">Cancel</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--continue" data-toggle="modal" data-target="#continue" onclick="continueModal()">Continue</button>
        </div>
        <div class="order-modal__buttons order-modal__buttons2">
            {* <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-toggle="modal" onclick="backModal()">Back</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--confirm" data-toggle="modal" data-target="#confirm" onclick="confirmModal()">Confirm</button> *}
        </div>
      </div>
    </div>

    {* step 2 *}
    <div class="modal-content modal-showStork__content step2">
      <div class="modal-body">
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top">Note: Order once confirmed can't be edited again.</div>
            <div class="order-modal__list order-modal__markout">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
                    <div class="order-modal__conme2">
                        {* <div class="order-modal__conmeno">
                            <span class="order-modal__index">1</span>
                            <div class="order-modal__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="order-modal__dish">
                                    <p class="order-modal__title">Chicken Biryani</p>
                                    <p class="order-modal__type">Biryani</p>
                                </div>
                            </div>
                            <div class="order-modal__details--right">
                                <p class="order-modal__amount">$127</p>
                            </div>
                            <input class="order-modal__quantity" id="quantity" name="quantity" value="1" type="number" />
                        </div> *}
                        
                    </div>
                    
                    <div class="order-modal__input2">
                        {* <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>   *}
                    </div>
                    <div class="formHere2"></div>
                </div>
                {* <div class="order-modal__box"> 
                    <div class="order-modal__conme">
                        <div class="order-modal__conmeno">
                            <span class="order-modal__index">1</span>
                            <div class="order-modal__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
                                <div class="order-modal__dish">
                                    <p class="order-modal__title">Chicken Biryani</p>
                                    <p class="order-modal__type">Biryani</p>
                                </div>
                            </div>
                            <div class="order-modal__details--right">
                                <p class="order-modal__amount">$127</p>
                            </div>
                            <input class="order-modal__quantity order-modal__quantity--noedit" value="1" type="number" />
                        </div>
                        
                    </div>
                    
                    <div class="order-modal__input">
                        <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>  
                    </div>
                    
                </div> *}
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

    {* step 3 *}
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





{else}
    {* stork edit *}
    <p class="no-items no-data-new">
    {* {__("no_data")}  *}
    You Are Offline
        <span>Due to the outlet inactivity, we have switched OFF your outlet. If you wish to receive orders at this time, please turn your restaurant ON, by using the toggle in your Partner App. You will not be able to receive any orders until you turn your restaurant ON</span>
    </p>
    
        
        
        
    
{/if}
{* 
{if $orders}
    <div class="statistic clearfix" id="orders_total">
        {hook name="orders:statistic_list"}
        <div class="table-wrapper">
            <table class="pull-right ">
                {if $total_pages > 1 && $search.page != "full_list"}
                    <tr>
                        <td>&nbsp;</td>
                        <td width="100px">{__("for_this_page_orders")}:</td>
                    </tr>
                    <tr>
                        <td>{__("gross_total")}:</td>
                        <td>{include file="common/price.tpl" value=$display_totals.gross_total}</td>
                    </tr>
                    <tr>
                        <td>{__("totally_paid")}:</td>
                        <td>{include file="common/price.tpl" value=$display_totals.totally_paid}</td>
                    </tr>
                    <hr />
                    <tr>
                        <td>{__("for_all_found_orders")}:</td>
                    </tr>
                {/if}
                <tr>
                    <td class="shift-right">{__("gross_total")}:</td>
                    <td>{include file="common/price.tpl" value=$totals.gross_total}</td>
                </tr>
                {hook name="orders:totals_stats"}
                <tr>
                    <td class="shift-right"><h4>{__("totally_paid")}:</h4></td>
                    <td class="price">{include file="common/price.tpl" value=$totals.totally_paid}</td>
                </tr>
                {/hook}
            </table>
        </div>
        {/hook}
    <!--orders_total--></div>
{/if} *}

{* {include file="common/pagination.tpl" div_id=$smarty.request.content_id} *}

{* 
{capture name="adv_buttons"}
    {hook name="orders:manage_tools"}
        {include file="common/tools.tpl" tool_href="order_management.new" prefix="bottom" hide_tools="true" title=__("add_order") icon="icon-plus"}
    {/hook}
{/capture} *}

{* </form> *}
{/capture}

{* {capture name="buttons"}
    {capture name="tools_list"}
        {if $orders}
            <li>{btn type="list" text={__("bulk_print_invoice")} dispatch="dispatch[orders.bulk_print]" form="orders_list_form" class="cm-new-window"}</li>
            <li>{btn type="list" text={__("bulk_print_pdf")} dispatch="dispatch[orders.bulk_print..pdf]" form="orders_list_form"}</li>
            <li>{btn type="list" text={__("bulk_print_packing_slip")} dispatch="dispatch[orders.packing_slip]" form="orders_list_form" class="cm-new-window"}</li>
            <li>{btn type="list" text={__("view_purchased_products")} dispatch="dispatch[orders.products_range]" form="orders_list_form"}</li>

            <li class="divider"></li>
            <li class="mobile-hide">{btn type="list" text={__("export_selected")} dispatch="dispatch[orders.export_range]" form="orders_list_form"}</li>

            {if $orders && !$runtime.company_id}
                <li class="divider mobile-hide"></li>
                <li class="mobile-hide">{btn type="delete_selected" dispatch="dispatch[orders.m_delete]" form="orders_list_form"}</li>
            {/if}
        {/if}
        {hook name="orders:list_tools"}
        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
{/capture} *}

{include file="common/mainbox.tpl"
    title=$page_title
    sidebar=$smarty.capture.sidebar
    content=$smarty.capture.mainbox
    buttons=$smarty.capture.buttons
    adv_buttons=$smarty.capture.adv_buttons
    content_id="manage_orders"
    select_storefront=true
    storefront_switcher_param_name="storefront_id"
    selected_storefront_id=$selected_storefront_id
}



<script>
// --- online version:
   /* const NEW_UI_STATUS_PLACED = 'G'; // Placed
    const NEW_UI_STATUS_VCONFIRMED = 'E'; // Vendor Confirmed
    const NEW_UI_STATUS_PACKED = 'A';
    const NEW_UI_STATUS_COMPLETE = 'C';

    const NEW_UI_STATUS_CANCELED = 'I'; // Canceled

    const NEW_UI_STATUS_DISPATCHED = 'H';

    const NEW_UI_STATUS_PICKEDUP = 'P'; // Picked up (shipment)
    const NEW_UI_STATUS_OFD = 'B'; // Out for delivery (shipment) */
    const NEW_UI_STATUS_COMPANY_ACTIVE = 'A'; // company status active



    const NEW_UI_STATUS_PLACED = '{$smarty.const.NEW_UI_STATUS_PLACED}'; // Placed
    const NEW_UI_STATUS_VCONFIRMED = '{$smarty.const.NEW_UI_STATUS_VCONFIRMED}'; // Vendor Confirmed
    const NEW_UI_STATUS_PACKED = '{$smarty.const.NEW_UI_STATUS_PACKED}';
    const NEW_UI_STATUS_COMPLETE = '{$smarty.const.NEW_UI_STATUS_COMPLETE}';

    const NEW_UI_STATUS_CANCELED = '{$smarty.const.NEW_UI_STATUS_CANCELED}'; // Canceled

    const NEW_UI_STATUS_DISPATCHED = '{$smarty.const.NEW_UI_STATUS_DISPATCHED}';

    const NEW_UI_STATUS_PICKEDUP = '{$smarty.const.NEW_UI_STATUS_PICKEDUP}'; // Picked up (shipment)
    const NEW_UI_STATUS_OFD = '{$smarty.const.NEW_UI_STATUS_OFD}'; // Out for delivery (shipment)

    const MONEY = "₹";

    // fetch status with status
    async function getStatus(status) {
        
        let url = `vendor.php?dispatch=new_orders.get_orders&status={literal}${status}{/literal}`;
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

    async function getTotalForm(id) {
        spinner2.removeAttribute('hidden');
        
        let url = `vendor.php?dispatch=new_orders.totals_form&order_id={literal}${id}{/literal}`;
        try {
            let res = await fetch(url);
           // console.log("con me no 2 +++++++: ", res)
            //return await res.text();
            spinner2.setAttribute('hidden', '');
            return await res.text();

        }
        catch (error) {
            console.log(error)
        }
    }
    async function updateTotalForm(id) {
        spinner2.removeAttribute('hidden');
        
        let url = `vendor.php?dispatch=new_orders.stock_form&order_id={literal}${id}{/literal}`;
        try {
            let res = await fetch(url);
           // console.log("con me no 2 +++++++: ", res)
            //return await res.text();
            spinner2.setAttribute('hidden', '');
            return await res.text();

        }
        catch (error) {
            console.log(error)
        }
    }
    async function getStatusComp() {
       // spinner2.removeAttribute('hidden');
        
        let url = `vendor.php?dispatch=new_orders.get_company_status`;
        try {
            let res = await fetch(url);
          // console.log("con me no status +++++++: ", res)
            //return await res.text();
            //spinner2.setAttribute('hidden', '');
            return await res.json();

        }
        catch (error) {
            console.log(error)
        }
    }

    

    

    async function searchId(status) {
        let datas = await getStatus(NEW_UI_STATUS_PLACED);

        let inputSearch = document.querySelector('.searchID').value;

       // console.log("inputSearch: ", inputSearch);

        const result = datas.filter(data => data.order_id == inputSearch);
       // console.log("result search: ", result)
        
    }
    
     async function showStatus() {
        let datas = await getStatusComp();
        let fail = `
            <p class="no-items no-data-new">
            You Are Offline
                <span>Due to the outlet inactivity, we have switched OFF your outlet. If you wish to receive orders at this time, please turn your restaurant ON, by using the toggle in your Partner App. You will not be able to receive any orders until you turn your restaurant ON</span>
            </p>
        `
        let containerfail = document.querySelector('.have-order__content');
        containerfail.innerHTML = fail;
        console.log("status comp: ", datas)
         
        if(datas.company_status === NEW_UI_STATUS_COMPANY_ACTIVE){
            renderLeftSide(NEW_UI_STATUS_PLACED, "order")

            
            // update data after 10 sec
            setInterval(async function() {
                    let abb = await getStatus(NEW_UI_STATUS_PLACED);
                    renderLeftSide(NEW_UI_STATUS_PLACED, "order");
                    renderCountStatus(NEW_UI_STATUS_PLACED, "tab1");

                    renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");
                    renderLeftSide(NEW_UI_STATUS_PACKED, "ready");
                    renderLeftSide(NEW_UI_STATUS_COMPLETE, "past");

                    renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
                    renderCountStatus(NEW_UI_STATUS_PACKED, "tab3");
                    renderCountStatus(NEW_UI_STATUS_COMPLETE, "tab4");
                    //activeOrder("order",  )
                    console.log('reset---------: ',abb, abb.length)
                    
                    //renderDetails();
            }, 10000);
        } else {
            document.querySelector(".search-order__box-input").classList.add("hidden");
            fail
        }
        
     }
     showStatus()

    /* render count status length */
    async function renderCountStatus(status, tab) {
        let datas = await getStatus(status);

     //   console.log("data: ----- ", datas);
    //    console.log("length: ----- ", datas.length);


        // count length of status
        let statusLength = datas.length;


        // html
        let htmlStatus = `
        {literal}${status === NEW_UI_STATUS_PLACED{/literal} ? `<a href="#new" class="tab__link" title="New"  >
                <span class="icon new-orders-icon"></span>
                <span>New</span>
                <span class="number number--order">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === NEW_UI_STATUS_VCONFIRMED{/literal} ? `<a href="#packing" class="tab__link" title="Packing" >
                <span class="icon preparing-orders-icon"></span>
                <span>Packing</span>
                <span class="number number--packing">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === NEW_UI_STATUS_PACKED{/literal} ? `  <a href="#ready" class="tab__link" title="Ready" >
                <span class="icon ready-orders-icon"></span>
                <span>Ready</span>
                <span class="number number--ready">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === NEW_UI_STATUS_COMPLETE{/literal} ? `<a href="#past" class="tab__link" title="More"  >
                <span class="icon more-orders-icon"></span>
                <span>Past Orders</span>
                <span class="number number--past">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 

        `

        // define to first class queryselector
        let containerStatus = document.querySelector(`.tab__li[data-tab={literal}${tab}{/literal}]`);

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
        //console.log("received_sec_ago: ", received_sec_ago)

        let minutes = Math.floor((seconds_now - time) / 60 ) ;
        let hours = Math.floor((seconds_now - time) / 60 / 60) ;
        let days = Math.floor((seconds_now - time) / 60 / 60 / 24);

        if(received_sec_ago < 59) {
            return `Received a minute ago`
        }
        else if(received_sec_ago < 3599) {
            received_sec_ago = minutes
            return `Received {literal}${received_sec_ago}{/literal} minute ago`
        } else if(received_sec_ago > 3600 && received_sec_ago < 86400) {
            received_sec_ago = hours
            return `Received {literal}${received_sec_ago}{/literal} hours ago`
        } else {
            received_sec_ago = days
            return `Received {literal}${received_sec_ago}{/literal} days ago`
        }

    }

    // render status left side
    async function renderLeftSide(status, path) {
        let datas = await getStatus(status);

        // count length of status
        let statusLength = datas.length;
        
        //console.log("-----------datas----------:", datas[0].order_id)
        //var seconds_now = new Date().getTime() / 1000;
        //let received_sec_ago=seconds_now-datas.timestamp;
        // console.log("received_sec_ago: ", Math.floor((seconds_now - 1597635814) / 60 ));

        let html = "";


        datas.map(data => {
            let htmlItem = `
                {literal}${status === NEW_UI_STATUS_PLACED{/literal} ?
                `<li class="search-order__box" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetails({literal}${data.order_id}{/literal})" >
                    <div class="search-order__left">
                        <h3 class="search-order__id">
                            {literal}Order #${data.order_id}{/literal}
                        </h3>
                        <p class="search-order__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                        <p class="search-order__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
                    </div>
                    <div class="search-order__right">
                        <div class="search-order__img-box">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <p class="search-order__assign">Assigning...</p>
                    </div>
                </li>` : ''} 
                
                {literal}${status === NEW_UI_STATUS_VCONFIRMED{/literal} ? 
                `<li class="search-packing__box search-packing__box--column search-packing__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPacking({literal}${data.order_id}{/literal})">
                    <div class="search-packing__container">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--packing">
                                {literal}Order #${data.order_id}{/literal}
                            </h3>
                            <p class="search-packing__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                            <p class="search-packing__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
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

                {literal}${status === NEW_UI_STATUS_PACKED{/literal} ? `
                <li class="search-ready__box search-ready__box--column search-ready__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsReady({literal}${data.order_id}{/literal})">
                    <div class="search-ready__container">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--packing">
                                {literal}Order #${data.order_id}{/literal}
                            </h3>
                            <p class="search-ready__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                            <p class="search-ready__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
                        </div>
                        <div class="search-ready__right">
                            <div class="search-ready__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-ready__assign">Assigned</p>
                        </div>
                    </div>
                
                </li>` : '' }
                

                {literal}${status === NEW_UI_STATUS_COMPLETE{/literal} ? ` 
                    {literal}${data.status === NEW_UI_STATUS_COMPLETE{/literal} ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPast({literal}${data.order_id}{/literal})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    {literal}Order #${data.order_id}{/literal}
                                </h3>
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                                <p class="search-past__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
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
                    `{literal}${data.status === NEW_UI_STATUS_CANCELED{/literal} ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPast({literal}${data.order_id}{/literal})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    {literal}Order #${data.order_id}{/literal}
                                </h3>
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                                <p class="search-past__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
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
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPast({literal}${data.order_id}{/literal})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    {literal}Order #${data.order_id}{/literal}
                                </h3>
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}${MONEY}{/literal}{literal}${data.total}{/literal}</p>
                                <p class="search-past__time">{literal}${timestampConvert(data.timestamp)}{/literal}</p>
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

        let container = document.querySelector(`.search-{literal}${path}{/literal}__list`);

        container.innerHTML = html;

        // render details content with first id
        
        //`{literal}${status === NEW_UI_STATUS_PLACED{/literal} ? renderDetails(datas[0].order_id) : `{literal}${status === NEW_UI_STATUS_VCONFIRMED{/literal} ? renderDetailsPacking(datas[0].order_id) : `{literal}${status === NEW_UI_STATUS_PACKED{/literal} ? renderDetailsReady(datas[0].order_id) : renderDetailsPast(datas[0].order_id)}`}`}`;
        `{literal}${status === NEW_UI_STATUS_PLACED && statusLength > 0{/literal} ? renderDetails(datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_VCONFIRMED && statusLength > 0{/literal} ? renderDetailsPacking(datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_PACKED && statusLength > 0{/literal} ? renderDetailsReady(datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_COMPLETE && statusLength > 0{/literal} ? renderDetailsPast(datas[0].order_id) : []}`;

        // active css with first id
        //`{literal}${status === NEW_UI_STATUS_PLACED{/literal} ? activeOrder("order", datas[0].order_id) : `{literal}${status === NEW_UI_STATUS_VCONFIRMED{/literal} ? activeOrder("packing", datas[0].order_id) : `{literal}${status === NEW_UI_STATUS_PACKED{/literal} ?  activeOrder("ready", datas[0].order_id) : activeOrder("past", datas[0].order_id)}`}`}`;
        `{literal}${status === NEW_UI_STATUS_PLACED && statusLength > 0{/literal} ? activeOrder("order", datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_VCONFIRMED && statusLength > 0{/literal} ? activeOrder("packing", datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_PACKED && statusLength > 0{/literal} ?  activeOrder("ready", datas[0].order_id) : []}`;
        `{literal}${status === NEW_UI_STATUS_COMPLETE && statusLength > 0{/literal} ?  activeOrder("past", datas[0].order_id) : []}`;
    }


   renderLeftSide(NEW_UI_STATUS_PLACED, "order");


    renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");
   renderLeftSide(NEW_UI_STATUS_PACKED, "ready");
    renderLeftSide(NEW_UI_STATUS_COMPLETE, "past");

    function activeOrder(path, id) {
        document.querySelector(`.search-{literal}${path}{/literal}__box[data-order=order{literal}${id}{/literal}]`).classList.add('active')
       
        let orders = {
            list: document.querySelector(`ul.search-{literal}${path}{/literal}__list`),
            all: document.querySelectorAll(`.search-{literal}${path}{/literal} .search-{literal}${path}{/literal}__box`),
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

    // update data after 10 sec
   /* setInterval(async function() {
            let abb = await getStatus(NEW_UI_STATUS_PLACED);
            renderLeftSide(NEW_UI_STATUS_PLACED, "order");
            renderCountStatus(NEW_UI_STATUS_PLACED, "tab1");
            //activeOrder("order",  )
            console.log('reset---------: ',abb, abb.length)
            
            //renderDetails();
    }, 10000);
*/
    async function getDataProduct(id) {
        spinner.removeAttribute('hidden');
        let url2 = `vendor.php?dispatch=new_orders.get_order&order_id={literal}${id}{/literal}`;
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
            //console.log("value: ", quantity[i].value , "price: ", price)
            let sums = quantity[i].value * price;
            //console.log("sums: ", sums)
            sumTotal += sums;
            //console.log("sumTotal: ", sumTotal)
        }

        
       
        let total = `
            <div class="order-modal__grand-total">
                <p class="order-modal__grand">Grand total</p>
                <p class="order-modal__amount order-modal__amount--big">{literal}${MONEY}{/literal}{literal}${sumTotal}{/literal}</p>
            </div>  
        `
        let containerInput = document.querySelector('.order-modal__input');
        containerInput.innerHTML = total;
    }


    // get data modal
    async function getModals(ids) {
        document.querySelector(".step3").style.display="none";
        document.querySelector(".step1").style.display="block";
      //  document.querySelector(".step2").style.display="none";
        

        document.querySelector(".title1").style.display="block";
        document.querySelector(".order-modal__buttons1").style.display="flex";
        document.querySelector(".title2").style.display="none";
        document.querySelector(".order-modal__buttons2").style.display="none";
        $(".order-modal__quantity").removeClass('order-modal__quantity--noedit').attr("disabled", false);
        let idOrder = ids;


        let totalForm = await getTotalForm(idOrder);
      //  console.log("totalForm: ----- ", totalForm);
        
        let details = await getDataProduct(ids);
        //console.log("details: ----- ", details);

        let dataModal = '';
        let count = 1;
        
        let form = totalForm;
        let button = '';
        
        



      
        for(let a in details.products ) {
            //console.log("a: ", a, "det: ", details.products[a].product)
           // console.log("key___product: ", details.products[a].amount )
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            //console.log('total product:', Object.keys(details.products).length)
            //console.log("z: ", pName)
            let option = ''
           
            for(let i = 1; i <= details.products[a].amount ; i++) {
                option +=`  
                    <option class="optionA" value="{literal}${i}{/literal}">{literal}${i}{/literal}</option>
                `
                //console.log(i, details.products[a].amount)
                if(i == details.products[a].amount) {
                    //console.log('bang nhau: ', details.products[a].amount , i )
                     option +=`  
                    <option class="optionA" hidden selected value="{literal}${i}{/literal}">{literal}${i}{/literal}</option>
                `
                }

              
            }

          //console.log(option)
            let htmlItem0 = `
                    <div class="order-modal__conmeno">
                        <span class="order-modal__index">{literal}${count++}{/literal}</span>
                        <div class="order-modal__details--left">
                            <img src="https://i.imgur.com/76y9dFM.png" />
                            <div class="order-modal__dish">
                                <p class="order-modal__title">{literal}${pName.product}{/literal}</p>
                                <p class="order-modal__type">{literal}${pName.product_code}{/literal}</p>
                            </div>
                        </div>
                        <div class="order-modal__details--right">
                            <p class="order-modal__amount">{literal}${pName.price}{/literal}</p>
                        </div>

                        {* onchange="sum({literal}${details.order_id}{/literal})" *}
                        {* name="cart_products{literal}[${pName.item_id}]{/literal}[amount]" *}
                        {* <input class="order-modal__quantity" id="{literal}${pName.item_id}{/literal}" onchange="changeAmount({literal}${details.order_id}{/literal},this.value)"  name="{literal}[${pName.item_id}]{/literal}[amount]"  value="{literal}${pName.amount}{/literal}" type="number" /> *}
                        <select class="order-modal__quantity " id="{literal}${pName.item_id}{/literal}" onchange="changeAmount({literal}${details.order_id}{/literal},this.value)"  name="{literal}[${pName.item_id}]{/literal}[amount]"  value="{literal}${pName.amount}{/literal}">
                            
                               {literal}${option}{/literal}
                            
                            
                            {* <option value="0">0</option>
                             <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="20" selected="selected">20</option>  *}
                        </select>
                        
                    </div>
            `

            dataModal += htmlItem0;
          
            button = `
            
                <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-toggle="modal" onclick="backModal()">Back</button>
                <button type="button" class="order-modal__buttons--btn order-modal__buttons--confirm" data-toggle="modal" data-target="#confirm" onclick="confirmModal({literal}${details.order_id}{/literal})">Confirm</button>
           
            `
        }
       
      
        
        let total = `
            <div class="order-modal__grand-total">
                <p class="order-modal__grand">Grand total</p>
                <p class="order-modal__amount order-modal__amount--big" id="total">{literal}${MONEY}{/literal}{literal}${details.total}{/literal}</p>
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
        let containerButton= document.querySelector('.order-modal__buttons2');
        containerButton.innerHTML = button;

        
        $(".formHere button").hide();
        $(".formHere2 button").hide();
     

    }
    // change amount
    async function changeAmount(ids, val) {
        let details = await getDataProduct(ids);
        for(let a in details.products ) {
            let pName = details.products[a];
            
            let inputUpdate = document.getElementsByName(`cart_products{literal}[${pName.item_id}]{/literal}[amount]`)[0];
            let idUpdate = document.getElementsByName(`{literal}[${pName.item_id}]{/literal}[amount]`)[0];
            //idUpdate.value = val;
            inputUpdate.value = idUpdate.value;

           
            
          //  console.log("updateInput:", inputUpdate)
          //  console.log("idUpdate:", idUpdate)
            //console.log("update:", inputUpdate.value = idUpdate.value)
          //  console.log("button: ")
        }
        
            updateTotals2();
    }

    // update total
    function updateTotals2(e){    
        // e.preventDefault();
        var endpoint = 'vendor.php?dispatch=new_orders.update_totals'; 

        $.ajax({ 
            type: "POST",
            url: endpoint,
            data: $('.formHere form').serializeArray(),
            success: function (response) {
               // console.log('success post', JSON.parse(response));
                let newTotal = JSON.parse(response)
                //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                    //$('#result').text($('.form-table').serializeObject());
                // return false;
                $('#total').text(`₹{literal}${newTotal.total}{/literal}.00`)
            }
        });
    }
    // save new amount and total
    function saveTotals(id){    
        // e.preventDefault();
        var endpoint = 'vendor.php?dispatch=new_orders.place_order.save'; 

        $.ajax({ 
            type: "POST",
            url: endpoint,
            data: $('.formHere form').serializeArray(),
            success: function (response) {
                renderDetails(id);
              //  console.log('save completed!')
                //console.log('success post', JSON.parse(response));
                //let newTotal = JSON.parse(response)
                //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                //$('#total').text(JSON.stringify($('.formHere form').serializeObject()));
                    //$('#result').text($('.form-table').serializeObject());
                // return false;
                //$('#total').text(`₹{literal}${newTotal.total}{/literal}.00`)
                //console.log("response save: ", response)
            }
        });
    }


    // new
    async function renderDetails(ids) {
        let details = await getDataProduct(ids);
       // console.log("details: ----- ", details);

        
       /* document.querySelector(`.search-order__box[data-order=order{literal}${details.order_id}{/literal}]`).classList.add('active')
        document.querySelector(`.have-order__mid--rel[data-order=order{literal}${details.order_id}{/literal}]`).classList.add('active')
        document.querySelector(`.search-order__right-top[data-order=order{literal}${details.order_id}{/literal}]`).classList.add('active') */

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
           // console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
           console.log('total product:', Object.keys(details.products).length)
           // console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-order__details">
                                <div class="search-order__details--left">
                                    <span class="search-order__title">{literal}${stt++}{/literal}</span>
                                    <div class="search-order__dish">
                                        <p class="search-order__title">
                                            {literal}${pName.product}{/literal}
                                        </p> 
                                        
                                        <p class="search-order__type">{literal}${pName.product_code}{/literal}</?>
                                        <p class="search-order__price">
                                            {literal}${pName.price}{/literal}
                                        </p>
                                    </div>
                                </div>
                                <div class="search-order__details--right">
                                    <p class="search-order__amount">X
                                        {literal}${pName.amount}{/literal}
                                    </p>
                                </div>
                            </li>
            `
            htmlSub += htmlItem0;
        }

        let htmlTaxes = "";
        for(let a in details.taxes ) {
           // console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        {literal}${MONEY}{/literal}{literal}${tName.tax_subtotal}{/literal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
          //  console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === NEW_UI_STATUS_PLACED) {
              //  console.log("GGGGG")
                timePrint = `
                {literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                `
            }
        }
    

            let htmlItem2 = `
               <div class="have-order__mid">
                    <div class="have-order__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                        <div class="search-order__box search-order__box--mid">
                            <div class="search-order__left">
                                <h3 class="search-order__id search-order__id--bold">
                                    {literal}Order #${details.order_id}{/literal}  <span class="search-order__new">New</span>
                                </h3>
                                <p class="search-order__desc search-order__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${MONEY}{/literal}{literal}${details.total}{/literal}</p>
                                
                            </div>
                            <div class="search-order__right">
                                <div class="search-order__right-print dropdown show">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                    </a>
                                    <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a target="_blank" href="vendor.php?dispatch=orders.print_invoice&order_id={literal}${details.order_id}{/literal}">Invoice</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Invoice (PDF)</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Packing slip</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="search-order__date">{literal}${timePrint}{/literal}</p>
                            </div>
                        </div>
                        <ul class="search-order__list-details">
                        
                            {* product details *}
                           
                       
                        </ul>

                        <div class="search-order__buttons">
                        
                            <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#showStork" value="Mark out of stock"  onclick="getModals({literal}${details.order_id}{/literal})"/>

                            <input type="button" class="search-order__buttons--btn search-order__buttons--confirm" onclick="getChange({literal}${details.order_id}{/literal})" value="Confirm order" ></input>
                        </div>
                    </div>

                </div>

                <div class="have-order__right">
                   
                    <div class="search-order__right-top active" data-order="order{literal}${details.order_id}{/literal}">
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
                                        {literal}${MONEY}{/literal}{literal}${details.total}{/literal}
                                    </p>
                              
                                <div class="search-order__right-info">
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Item total</p>
                                        <p class="search-order__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal}{/literal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Shipping cost</p>
                                        <p class="search-order__right-money">{literal}${MONEY}{/literal}{literal}${details.shipping_cost}{/literal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">GST</p>
                                        <p class="search-order__right-money search-order__right-taxes">
                                            {* get taxes *}
                                        </p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Discount</p>
                                        <p class="search-order__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal_discount}{/literal}</p>
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
        //console.log("details: ----- ", details);
        
        if(details.length === 0) return;

        let html2 = "";
        let htmlSub = "";
        let stt = 1;
        for(let a in details.products ) {
            //console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
           // console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-packing__details">
                                <div class="search-packing__details--left">
                                    <span class="search-packing__title">{literal}${stt++}{/literal}</span>
                                    <div class="search-packing__dish">
                                        <p class="search-packing__title">{literal}${pName.product}{/literal}</p>
                                        <p class="search-packing__type">{literal}${pName.product_code}{/literal}</p>
                                        <p class="search-packing__price">{literal}${pName.price}{/literal}</p>
                                    </div>
                                </div>
                                <div class="search-packing__details--right">
                                    <p class="search-packing__amount">X  {literal}${pName.amount}{/literal}</p>
                                </div>
                            </li>
                            
            `
            htmlSub += htmlItem0;
        }
        let htmlTaxes = "";
        for(let a in details.taxes ) {
           // console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        {literal}${MONEY}{/literal}{literal}${tName.tax_subtotal}{/literal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
            //("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === NEW_UI_STATUS_PLACED) {
               // console.log("GGGGG")
                timePrint = `
                {literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                `
            }
        }

        let htmlItem2 = `
            <div class="have-packing__mid">
                <div class="have-packing__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-packing__box search-packing__box--mid">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--bold search-packing__id--packing">
                                {literal}Order #${details.order_id}{/literal}<span class="search-packing__new search-packing__new--packing">Packing</span>
                            </h3>
                            <p class="search-packing__desc search-packing__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${MONEY}{/literal}{literal}${details.total}{/literal}</p>
                            
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_invoice&order_id={literal}${details.order_id}{/literal}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">{literal}${timePrint}{/literal}</p>
                        </div>
                    </div>
                    <ul class="search-packing__list-details">
                        
                        
                    </ul>

                
                    <div class="search-packing__buttons">
                        <input type="button" class="search-packing__buttons--btn search-packing__buttons--packing" value="Mark order packed" onclick="getPacked({literal}${details.order_id}{/literal})"/>
                    </div>
                </div>
                
            </div>
            <div class="have-packing__right">
                <div class="search-packing__right-top active" data-order="order{literal}${details.order_id}{/literal}">
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
                                {literal}${MONEY}{/literal}{literal}${details.total}{/literal}
                            </p>
                            <div class="search-packing__right-info">
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Item total</p>
                                    <p class="search-packing__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-packing__right-row">
                                        <p class="search-packing__right-label">Shipping cost</p>
                                        <p class="search-packing__right-money">{literal}${MONEY}{/literal}{literal}${details.shipping_cost}{/literal}</p>
                                    </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">GST</p>
                                    <p class="search-packing__right-money search-packing__right-taxes">
                                            {* get taxes *}</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Discount</p>
                                    <p class="search-packing__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal_discount}{/literal}</p>
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
        //console.log("details: ----- ", details);
        if(details.length === 0) return;

        let html2 = "";
        let htmlSub = "";
      
        let stt = 1;
        for(let a in details.products ) {
           // console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
           // console.log('total product:', Object.keys(details.products).length)
           // console.log("z: ", pName)
            let htmlItem0 = `
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <span class="search-ready__title">{literal}${stt++}{/literal}</span>
                                <div class="search-ready__dish">
                                    <p class="search-ready__title">{literal}${pName.product}{/literal}</p>
                                    <p class="search-ready__type">{literal}${pName.product_code}{/literal}</p>
                                    <p class="search-ready__price">{literal}${pName.price}{/literal}</p>
                                </div>
                            </div>
                            <div class="search-ready__details--right">
                                <p class="search-ready__amount">X{literal}${pName.amount}{/literal}</p>
                            </div>
                        </li>
            `
            htmlSub += htmlItem0;
        }
        let htmlTaxes = "";
        for(let a in details.taxes ) {
           // console.log("a: ", a, "taxes: ", details.taxes[a].tax_subtotal)
            let tName = details.taxes[a];
           
            let htmlTax = `
                        {literal}${MONEY}{/literal}{literal}${tName.tax_subtotal}{/literal}
            `
            htmlTaxes += htmlTax;
        }

        

        let timeArray = details.status_history;
        let timePrint = '';
        for(let a in timeArray) {
           // console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === NEW_UI_STATUS_PLACED) {
               // console.log("GGGGG")
                timePrint = `
                {literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                `
            }
        }

        let htmlItem2 = `
            <div class="have-ready__mid">
                <div class="have-ready__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-ready__box search-ready__box--mid">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--bold search-ready__id--packing">
                                {literal}Order #${details.order_id}{/literal}<span class="search-ready__new search-ready__new--packing">Ready</span>
                            </h3>
                            <p class="search-ready__desc search-ready__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${MONEY}{/literal}{literal}${details.total}{/literal}</p>
                    
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_invoice&order_id={literal}${details.order_id}{/literal}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">{literal}${timePrint}{/literal}</p>
                        </div>
                    </div>
                    <ul class="search-ready__list-details">
                        {* get item above *}
                        
                    </ul>
                </div>
            </div>
            <div class="have-ready__right">
                <div class="search-ready__right-top active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-ready__right-box">
                        <div class="search-ready__img-box search-ready__img-box--big">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <div class="search-ready__right-content">
                            <h4 class="search-ready__right-title">
                                Delivery Executive
                            </h4>
                            {* <p class="search-ready__right-assign">
                                Pending assignent...
                            </p> *}
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
                               {literal}${MONEY}{/literal}{literal}${details.total}{/literal}
                            </p>
                            <div class="search-ready__right-info">
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Item total</p>
                                    <p class="search-ready__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Shipping cost</p>
                                    <p class="search-ready__right-money">{literal}${MONEY}{/literal}{literal}${details.shipping_cost}{/literal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">GST</p>
                                    <p class="search-ready__right-money search-ready__right-taxes">
                                            {* get taxes *}
                                    </p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Discount</p>
                                    <p class="search-ready__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal_discount}{/literal}</p>
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
        //console.log("ts: ",ts.toLocaleString());
        return ts.toLocaleString();
    }
    


    // past
    async function renderDetailsPast(ids) {
        let details = await getDataProduct(ids);
        //console.log("details: ----- ", details);
if(details.length === 0) return;
       // console.log("time history: ", details.status_history)

        let html2 = "";
        let htmlSub = "";
        
        let place = '';
        
        let confirm = '';

        let packed = '';

        let delivery = '';

        let cancel = '';

        
        let timeArray = details.status_history;

        for(let a in timeArray) {
            //console.log("time history: ", timeArray[a])
            let index = timeArray[a];

            if(index.status === NEW_UI_STATUS_PLACED) {
               // console.log("GGGGG")
                place = `
                <p class="search-past__box-time-h">{literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                <p class="search-past__box-time-p">Placed</p>`
            } else if (index.status === NEW_UI_STATUS_VCONFIRMED) {
              //  console.log("EEEEE")
                confirm = `
                <p  class="search-past__box-time-h">{literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                <p class="search-past__box-time-p">Confirmed</p>`
            } else if (index.status === NEW_UI_STATUS_PACKED) {
                //console.log("AAAAAAA")
                packed = `
                <p  class="search-past__box-time-h">{literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                <p class="search-past__box-time-p">Packed</p>`
            } else if (index.status === NEW_UI_STATUS_COMPLETE) {
                //console.log("CCCCCCCCC")
                delivery = ` 
                <p  class="search-past__box-time-h">{literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                <p class="search-past__box-time-p">Delivered</p>`
            } else if (index.status === NEW_UI_STATUS_CANCELED) {
               // console.log("canncel IIIIIII")
                cancel = ` 
                <p  class="search-past__box-time-h">{literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                <p class="search-past__box-time-p">Canceled</p>`
            } else {
                console.log('nothing')
            }
        }

        let timeCompleted = `
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        {literal}${place}{/literal}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        {literal}${confirm}{/literal}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        {literal}${packed}{/literal}
                    </div>
                </div>
                <div class="search-past__box-time-list">
                    <img src="https://i.imgur.com/1Tyk2hG.png" />
                    <div class="search-past__box-time-hour">
                        {literal}${delivery}{/literal}
                        {* <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Canceled</p> *}
                    </div>
                </div>`

        let timeOutFor = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                {literal}${place}{/literal}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                {literal}${confirm}{/literal}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                {literal}${packed}{/literal}
                            </div>
                        </div>`
        let timeCancel = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                {literal}${place}{/literal}
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                {literal}${cancel}{/literal}
                                 {* <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Canceled</p> *}
                            </div>
                        </div>`
        
        let htmlTime = `
            {literal}${details.status === NEW_UI_STATUS_COMPLETE{/literal} ? `{literal}${timeCompleted}{/literal}` : `{literal}${details.status === NEW_UI_STATUS_CANCELED{/literal} ? `{literal}${timeCancel}{/literal}` : `{literal}${timeOutFor}{/literal}` }` }
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
                                <span class="search-packing__title">{literal}${stt++}{/literal}</span>
                                <div class="search-past__dish">
                                    <p class="search-past__title">{literal}${pName.product}{/literal}</p>
                                    <p class="search-past__type">{literal}${pName.product_code}{/literal}</p>
                                    <p class="search-past__price">{literal}${pName.price}{/literal}</p>
                                </div>
                            </div>
                            <div class="search-past__details--right">
                                <p class="search-past__amount">X{literal}${pName.amount}{/literal}</p>
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
                        {literal}${MONEY}{/literal}{literal}${tName.tax_subtotal}{/literal}
            `
            htmlTaxes += htmlTax;
        }

        let timeArray2 = details.status_history;
        let timePrint = '';
        for(let a in timeArray2) {
            //console.log("time history: ", timeArray2[a])
            let index = timeArray2[a];

            if(index.status === NEW_UI_STATUS_PLACED) {
               // console.log("GGGGG")
                timePrint = `
                {literal}${countTimeHistory(index.timestamp)}{/literal}</p>
                `
            }
        }
        let htmlItem2 = `
            <div class="have-past__mid">
                <div class="have-past__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            {literal}${details.status === NEW_UI_STATUS_COMPLETE {/literal} ? ` 
                                <h3 class="search-past__id search-past__id--bold search-past__id--packing">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--packing">Delivered</span>
                                </h3>` : `{literal}${details.status === NEW_UI_STATUS_CANCELED {/literal} ? `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--delevered">Cancelled</span>
                                </h3>` : `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--delevered">Out for delivery</span>
                                </h3>
                            `}`} 
                            <p class="search-past__desc search-past__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${MONEY}{/literal}{literal}${details.total}{/literal}</p>
  
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_invoice&order_id={literal}${details.order_id}{/literal}">Invoice</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="vendor.php?dispatch=orders.print_packing_slip&order_id={literal}${details.order_id}{/literal}">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">{literal}${timePrint}{/literal}</p>
                        </div>
                    </div>
                    <div class="search-past__box-time">
                        
                    </div>
                    <ul class="search-past__list-details">
                        
                        {* get data above *}
                        
                    </ul>
                </div>

            
            
            </div>
            <div class="have-past__right">
                <div class="search-past__right-top active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-past__right-box">
                        <div class="search-past__img-box search-past__img-box--big">
                            <img src="https://i.imgur.com/OFK8M5L.png" />
                        </div>
                        <div class="search-past__right-content">
                            <h4 class="search-past__right-title">
                                Grand Total
                            </h4>
                            <p class="search-past__right-price">
                                {literal}${MONEY}{/literal}{literal}${details.total}{/literal}
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Shipping cost</p>
                                    <p class="search-past__right-money">{literal}${MONEY}{/literal}{literal}${details.shipping_cost}{/literal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money search-past__right-taxes">
                                            {* get taxes *}
                                    </p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">{literal}${MONEY}{/literal}{literal}${details.subtotal_discount}{/literal}</p>
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
    
  
</script>


{* make tab *}
<script>

    function continueModal() {
       // document.querySelector(".step1").style.display="none";
       // document.querySelector(".step2").style.display="block";
       
         document.querySelector(".title1").style.display="none";
        document.querySelector(".order-modal__buttons1").style.display="none";
         document.querySelector(".title2").style.display="block";
        document.querySelector(".order-modal__buttons2").style.display="flex";
        //document.querySelector(".order-modal__quantity").classList.add('order-modal__quantity--noedit');
       $(".order-modal__quantity").addClass('order-modal__quantity--noedit').attr("disabled", true);
    }
    function backModal() {
        //document.querySelector(".step1").style.display="block";
        //document.querySelector(".step2").style.display="none";
         document.querySelector(".title1").style.display="block";
        document.querySelector(".order-modal__buttons1").style.display="flex";
         document.querySelector(".title2").style.display="none";
        document.querySelector(".order-modal__buttons2").style.display="none";
        $(".order-modal__quantity").removeClass('order-modal__quantity--noedit').attr("disabled", false);
    }

    function confirmModal(id) {
        let newId = id;
        saveTotals(id);
        document.querySelector(".step1").style.display="none";
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

   // console.log("tabs list: ",tabs.list, "all: ",tabs.all);
  //  console.log("tabs container: ",tabsContent.container, "current: ",tabsContent.current, "tab: ",tabsContent.tab);
    
    
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


</script>

{* spin *}

<script>

    const spinner = document.getElementById("spinner");
    const spinner2 = document.getElementById("spinner2");
    const spinnerDone = document.getElementById("spinnerDone");
   // console.log('spinner2: ',spinner2 )

    async function getChange(id) {
        spinner.removeAttribute('hidden');
        let url2 = `vendor.php?dispatch=new_orders.change_status&order_id={literal}${id}{/literal}&status={literal}${NEW_UI_STATUS_VCONFIRMED}{/literal}`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            
            spinnerDone.removeAttribute('hidden');
            setTimeout(function() {
                    spinnerDone.setAttribute('hidden', '');
                }, 3000) 
            
            //return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus(NEW_UI_STATUS_PLACED, "tab1");
        renderLeftSide(NEW_UI_STATUS_PLACED, "order");

        renderDetails(id);
        renderDetailsPacking(id);


        renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
        renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");

        //document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        //document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');
      /*  document.querySelector('.tab__li[data-tab=tab1]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.add('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.remove('activeTab');

        */
    }

    async function getPacked(id) {
        spinner.removeAttribute('hidden');
        let url2 = `vendor.php?dispatch=new_orders.change_status&order_id={literal}${id}{/literal}&status={literal}${NEW_UI_STATUS_PACKED}{/literal}`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            spinnerDone.removeAttribute('hidden');
            setTimeout(function() {
                    spinnerDone.setAttribute('hidden', '');
                }, 3000) 
           // return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus(NEW_UI_STATUS_VCONFIRMED, "tab2");
        renderLeftSide(NEW_UI_STATUS_VCONFIRMED, "packing");

        renderDetails(id);
        renderDetailsPacking(id);
        
        renderCountStatus(NEW_UI_STATUS_PACKED, "tab3");
        renderLeftSide(NEW_UI_STATUS_PACKED, "ready");
/*
        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.add('activeTab');
        */
    }
    
   
</script>



<script>
    function openReady() {
       // console.log('open ready')
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
</script>



<script>
    function openPast() {
        //console.log('open ready')
        document.getElementById("ready").style.display="none";
        document.getElementById("past").style.display="flex";

    }
</script>

<script>



</script>