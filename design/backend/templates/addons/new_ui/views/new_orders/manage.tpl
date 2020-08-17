{capture name="mainbox"}

{if $runtime.mode == "new"}
    <p>{__("text_admin_new_orders")}</p>
{/if}

{$order_status_descr = $smarty.const.STATUSES_ORDER|fn_get_simple_statuses:true:true}
{$order_statuses = $smarty.const.STATUSES_ORDER|fn_get_statuses:$statuses:true:true}

{capture name="sidebar"}
    {hook name="orders:manage_sidebar"}
    {include file="common/saved_search.tpl" dispatch="orders.manage" view_type="orders"}
    {include file="views/orders/components/orders_search_form.tpl" dispatch="orders.manage"}
    {/hook}
{/capture}

<div class="orders__header">
    <div class="row">
        <div class="col-xs-7">
            <ul class="nav nav-tabs count-status">
               
                <li class="tab__li active" data-tab="tab1">
                    {* <a href="#new" class="tab__link" title="New"  > *}
                        {* <span class="icon new-orders-icon"></span>
                        <span>New</span> *}
                        {* <span class="number number--order">1</span> *}
                    </a>
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
<form action="{""|fn_url}" method="post" target="_self" name="orders_list_form">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

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
                {if $order_statuses[$o.status].params.appearance_type == "I" && $o.invoice_id}
                    <p class="muted">{__("invoice")} #{$o.invoice_id}</p>
                {elseif $order_statuses[$o.status].params.appearance_type == "C" && $o.credit_memo_id}
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
            <input class="search-order__input" type="search" placeholder="Search">
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

<div hidden id="spinner"></div>
<!-- Modal -->
<div class="modal modal-showStork fade" id="showStork" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-showStork__content">
      <div class="modal-body">
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top">Enter your desired quantily and click continue</div>
            <div class="order-modal__list">
                <p class="order-modal__label">Enter Quantity</p>
                <div class="order-modal__box"> 
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
                            <input class="order-modal__quantity" value="1" type="number" />
                        </div>
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
                            <input class="order-modal__quantity" value="1" type="number" />
                        </div>
                    </div>
                    
                    <div class="order-modal__input">
                       
                        <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer modal-showStork__footer">
        <div class="order-modal__buttons">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-dismiss="modal">Cancel</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--continue" data-toggle="modal" data-target="#continue" onclick="hideModal()">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Continue -->
<div class="modal modal-showStork fade" id="continue" tabindex="-1" role="dialog" aria-labelledby="continue" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-showStork__content">
      <div class="modal-body">
        <div class="order-modal modal-showStork__margin">
            <div class="order-modal__top">Note: Order once confirmed can't be edited again.</div>
            <div class="order-modal__list">
            
                <p class="order-modal__label">Quantity</p>
                <div class="order-modal__box"> 
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
                    <div class="order-modal__input">
                        <input class="order-modal__quantity order-modal__quantity--noedit" value="1" type="number" />
                        <div class="order-modal__grand-total">
                            <p class="order-modal__grand">Grand total</p>
                            <p class="order-modal__amount order-modal__amount--big">$127</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer modal-showStork__footer">
        <div class="order-modal__buttons">
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--cancel" data-dismiss="modal" onclick="backModal()">Back</button>
            <button type="button" class="order-modal__buttons--btn order-modal__buttons--confirm">Confirm</button>
        </div>
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

{include file="common/pagination.tpl" div_id=$smarty.request.content_id}

{* 
{capture name="adv_buttons"}
    {hook name="orders:manage_tools"}
        {include file="common/tools.tpl" tool_href="order_management.new" prefix="bottom" hide_tools="true" title=__("add_order") icon="icon-plus"}
    {/hook}
{/capture} *}

</form>
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

    // fetch status with status
    async function getStatus(status) {
        
        let url = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.get_orders&status={literal}${status}{/literal}`;
        try {
            let res = await fetch(url);
            return await res.json();

        }
        catch (error) {
            console.log(error)
        }
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
        {literal}${status === "G"{/literal} ? `<a href="#new" class="tab__link" title="New"  >
                <span class="icon new-orders-icon"></span>
                <span>New</span>
                <span class="number number--order">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === "E"{/literal} ? `<a href="#packing" class="tab__link" title="Packing" >
                <span class="icon preparing-orders-icon"></span>
                <span>Packing</span>
                <span class="number number--packing">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === "A"{/literal} ? `  <a href="#ready" class="tab__link" title="Ready" >
                <span class="icon ready-orders-icon"></span>
                <span>Ready</span>
                <span class="number number--ready">{literal}${statusLength}{/literal}</span>
            </a>` : ''} 
        {literal}${status === "C"{/literal} ? `<a href="#past" class="tab__link" title="More"  >
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
    renderCountStatus("G", "tab1");
    renderCountStatus("E", "tab2");
    renderCountStatus("A", "tab3");
    renderCountStatus("C", "tab4");

    let totalProducts = 0;

    // render status left side
    async function renderLeftSide(status, path) {
        let datas = await getStatus(status);
        
        var seconds_now = new Date().getTime() / 1000;

        //let received_sec_ago=seconds_now-datas.timestamp;

        console.log("received_sec_ago: ", Math.floor((seconds_now - 1597635814) / 60 ));

        let html = "";

        datas.map(data => {
            let htmlItem = `
                {literal}${status === "G"{/literal} ?
                `<li class="search-order__box" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetails({literal}${data.order_id}{/literal})" >
                    <div class="search-order__left">
                        <h3 class="search-order__id">
                            {literal}Order #${data.order_id}{/literal}
                        </h3>
                        <p class="search-order__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                        <p class="search-order__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago </p>
                    </div>
                    <div class="search-order__right">
                        <div class="search-order__img-box">
                            <img src="https://i.imgur.com/UKWKNWg.png" />
                        </div>
                        <p class="search-order__assign">Assigning...</p>
                    </div>
                </li>` : ''} 
                
                {literal}${status === "E"{/literal} ? 
                `<li class="search-packing__box search-packing__box--column search-packing__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPacking({literal}${data.order_id}{/literal})">
                    <div class="search-packing__container">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--packing">
                                {literal}Order #${data.order_id}{/literal}
                            </h3>
                            <p class="search-packing__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                            <p class="search-packing__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago</p>
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

                {literal}${status === "A"{/literal} ? `
                <li class="search-ready__box search-ready__box--column search-ready__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsReady({literal}${data.order_id}{/literal})">
                    <div class="search-ready__container">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--packing">
                                {literal}Order #${data.order_id}{/literal}
                            </h3>
                            <p class="search-ready__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                            <p class="search-ready__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago</p>
                        </div>
                        <div class="search-ready__right">
                            <div class="search-ready__img-box">
                                <img src="https://i.imgur.com/UKWKNWg.png" />
                            </div>
                            <p class="search-ready__assign">Assigned</p>
                        </div>
                    </div>
                
                </li>` : '' }
                

                {literal}${status === "C"{/literal} ? ` 
                    {literal}${data.status === "C"{/literal} ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPast({literal}${data.order_id}{/literal})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    {literal}Order #${data.order_id}{/literal}
                                </h3>
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                                <p class="search-past__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago</p>
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
                    `{literal}${data.status === "I"{/literal} ? `
                    <li class="search-past__box search-past__box--column search-past__box--nopd" data-order="order{literal}${data.order_id}{/literal}" onclick="renderDetailsPast({literal}${data.order_id}{/literal})">
                        <div class="search-past__container">
                            <div class="search-past__left">
                                <h3 class="search-past__id search-past__id--delevered">
                                    {literal}Order #${data.order_id}{/literal}
                                </h3>
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                                <p class="search-past__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago</p>
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
                                <p class="search-past__desc">{literal}${data.product_count}{/literal} items for {literal}$${data.total}{/literal}</p>
                                <p class="search-past__time">Received {literal}${received_sec_ago=Math.floor((seconds_now - data.timestamp) / 60 )}{/literal} minute ago</p>
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
    }

    renderLeftSide("G", "order");
    renderLeftSide("E", "packing");
    renderLeftSide("A", "ready");
    renderLeftSide("C", "past");

   /* setInterval(async function() {
            let abb = await getStatus();
            console.log('reset---------: ',abb)
            renderData();
        }, 2000); */

    async function getDataProduct(id) {
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.get_order&order_id={literal}${id}{/literal}`;
        try {
            let res = await fetch(url2);
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }
    }

    // new
    async function renderDetails(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

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
      

        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log('total product:', Object.keys(details.products).length)
            console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-order__details">
                                <div class="search-order__details--left">
                                    <img src="https://i.imgur.com/76y9dFM.png" />
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
    

            let htmlItem2 = `
               <div class="have-order__mid">
                    <div class="have-order__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                        <div class="search-order__box search-order__box--mid">
                            <div class="search-order__left">
                                <h3 class="search-order__id search-order__id--bold">
                                    {literal}Order #${details.order_id}{/literal}  <span class="search-order__new">New</span>
                                </h3>
                                <p class="search-order__desc search-order__desc--gray">{literal}${totalProducts}{/literal} items for {literal}$${details.total}{/literal}</p>
                                
                            </div>
                            <div class="search-order__right">
                                <div class="search-order__right-print dropdown show">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                    </a>
                                    <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li>
                                            <a href="#">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="#">Invoice (PDF)</a>
                                        </li>
                                        <li>
                                            <a href="#">Packing slip</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="search-order__date">21 Jul 2020 02:08 PM</p>
                            </div>
                        </div>
                        <ul class="search-order__list-details">
                        
                            {* product details *}
                           
                       
                        </ul>

                        <div class="search-order__buttons">
                        
                            <input type="button" class="search-order__buttons--btn search-order__buttons--mark"  data-toggle="modal" data-target="#showStork" value="Mark out of stork" />

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
                                        {literal}${details.total}{/literal}
                                    </p>
                              
                                <div class="search-order__right-info">
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Item total</p>
                                        <p class="search-order__right-money">{literal}$${details.subtotal}{/literal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Shipping cost</p>
                                        <p class="search-order__right-money">{literal}$${details.shipping_cost}{/literal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">GST</p>
                                        <p class="search-order__right-money">{literal}$${details.taxes["6"].tax_subtotal}{/literal}</p>
                                    </div>
                                    <div class="search-order__right-row">
                                        <p class="search-order__right-label">Discount</p>
                                        <p class="search-order__right-money">{literal}$${details.subtotal_discount}{/literal}</p>
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
     
    }
    renderDetails(78398);

    // packing
    async function renderDetailsPacking(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);
        

        let html2 = "";
        let htmlSub = "";

        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log("z: ", pName)
            let htmlItem0 = `
                            <li class="search-packing__details">
                                <div class="search-packing__details--left">
                                    <img src="https://i.imgur.com/76y9dFM.png" />
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
    

            let htmlItem2 = `
               

            <div class="have-packing__mid">
                <div class="have-packing__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-packing__box search-packing__box--mid">
                        <div class="search-packing__left">
                            <h3 class="search-packing__id search-packing__id--bold search-packing__id--packing">
                                {literal}Order #${details.order_id}{/literal}<span class="search-packing__new search-packing__new--packing">Packing</span>
                            </h3>
                            <p class="search-packing__desc search-packing__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${details.total}{/literal}</p>
                            
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a href="#">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="#">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a href="#">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">21 Jul 2020 02:08 PM</p>
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
                                {literal}${details.total}{/literal}
                            </p>
                            <div class="search-packing__right-info">
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Item total</p>
                                    <p class="search-packing__right-money">{literal}$${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-packing__right-row">
                                        <p class="search-packing__right-label">Shipping cost</p>
                                        <p class="search-packing__right-money">{literal}$${details.shipping_cost}{/literal}</p>
                                    </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">GST</p>
                                    <p class="search-packing__right-money">{literal}$${details.taxes["6"].tax_subtotal}{/literal}</p>
                                </div>
                                <div class="search-packing__right-row">
                                    <p class="search-packing__right-label">Discount</p>
                                    <p class="search-packing__right-money">{literal}$${details.subtotal_discount}{/literal}</p>
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
     
    }
    renderDetailsPacking(78409);

    // ready
    async function renderDetailsReady(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

        let html2 = "";
        let htmlSub = "";
      

        for(let a in details.products ) {
            console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            console.log('total product:', Object.keys(details.products).length)
            console.log("z: ", pName)
            let htmlItem0 = `
                        <li class="search-ready__details">
                            <div class="search-ready__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
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
    

            let htmlItem2 = `
            <div class="have-ready__mid">
                <div class="have-ready__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-ready__box search-ready__box--mid">
                        <div class="search-ready__left">
                            <h3 class="search-ready__id search-ready__id--bold search-ready__id--packing">
                                {literal}Order #${details.order_id}{/literal}<span class="search-ready__new search-ready__new--packing">Ready</span>
                            </h3>
                            <p class="search-ready__desc search-ready__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${details.total}{/literal}</p>
                    
                        </div>
                        <div class="search-order__right">
                            <div class="search-order__right-print dropdown show">
                                <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="search-order__print" src="https://i.imgur.com/q6OYhBH.png" />
                                </a>
                                <ul class="search-order__right-print-list dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a href="#">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="#">Invoice (PDF)</a>
                                    </li>
                                    <li>
                                        <a href="#">Packing slip</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="search-order__date">21 Jul 2020 02:08 PM</p>
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
                                <div>Spin</div>
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
                               {literal}${details.total}{/literal}
                            </p>
                            <div class="search-ready__right-info">
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Item total</p>
                                    <p class="search-ready__right-money">{literal}$${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Shipping cost</p>
                                    <p class="search-ready__right-money">{literal}$${details.shipping_cost}{/literal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">GST</p>
                                    <p class="search-ready__right-money">{literal}$${details.taxes["6"].tax_subtotal}{/literal}</p>
                                </div>
                                <div class="search-ready__right-row">
                                    <p class="search-ready__right-label">Discount</p>
                                    <p class="search-ready__right-money">{literal}$${details.subtotal_discount}{/literal}</p>
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
     
    }
    renderDetailsReady(78404);

    // past
   async function renderDetailsPast(ids) {
        let details = await getDataProduct(ids);
        console.log("details: ----- ", details);

        let html2 = "";
        let htmlSub = "";
        

        let timeCompleted = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Confirmed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Packed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Delivered</p>
                            </div>
                        </div>`

        let timeOutFor = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Confirmed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Packed</p>
                            </div>
                        </div>`
        let timeCancel = `<div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:08 PM</p>
                                <p class="search-past__box-time-p">Placed</p>
                            </div>
                        </div>
                        <div class="search-past__box-time-list">
                            <img src="https://i.imgur.com/1Tyk2hG.png" />
                            <div class="search-past__box-time-hour">
                                <p  class="search-past__box-time-h">02:20 PM</p>
                                <p class="search-past__box-time-p">Canceled</p>
                            </div>
                        </div>`
        

        let htmlTime = `
            {literal}${details.status === "C"{/literal} ? `{literal}${timeCompleted}{/literal}` : `{literal}${details.status === "I"{/literal} ? `{literal}${timeCancel}{/literal}` : `{literal}${timeOutFor}{/literal}` }` }
        `
 

        for(let a in details.products ) {
            //console.log("a: ", a, "det: ", details.products[a].product)
            let pName = details.products[a];
            totalProducts = Object.keys(details.products).length;
            //console.log('total product:', Object.keys(details.products).length)
            //console.log("z: ", pName)
            let htmlItem0 = `
                        <li class="search-past__details">
                            <div class="search-past__details--left">
                                <img src="https://i.imgur.com/76y9dFM.png" />
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
    

            let htmlItem2 = `
            <div class="have-past__mid">
                <div class="have-past__mid--rel active" data-order="order{literal}${details.order_id}{/literal}">
                    <div class="search-past__box search-past__box--mid search-past__box--nomg">
                        <div class="search-past__left">
                            {literal}${details.status === "C" {/literal} ? ` 
                                <h3 class="search-past__id search-past__id--bold search-past__id--packing">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--packing">Delivered</span>
                                </h3>` : `{literal}${details.status === "I" {/literal} ? `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--delevered">Cancelled</span>
                                </h3>` : `
                                <h3 class="search-past__id search-past__id--bold search-past__id--delevered">
                                    {literal}Order #${details.order_id}{/literal}<span class="search-past__new search-past__new--delevered">Out for delivery</span>
                                </h3>
                            `}`} 
                            <p class="search-past__desc search-past__desc--gray">{literal}${totalProducts}{/literal} items for {literal}${details.total}{/literal}</p>
  
                        </div>
                        <div class="search-past__right">
                            
                            <img class="search-past__print" src="https://i.imgur.com/q6OYhBH.png" />
                            
                            <p class="search-past__date">21 Jul 2020 02:08 PM</p>
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
                                {literal}${details.total}{/literal}
                            </p>
                            <div class="search-past__right-info">
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Item total</p>
                                    <p class="search-past__right-money">{literal}$${details.subtotal}{/literal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Shipping cost</p>
                                    <p class="search-past__right-money">{literal}$${details.shipping_cost}{/literal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">GST</p>
                                    <p class="search-past__right-money">{literal}$${details.taxes["6"].tax_subtotal}{/literal}</p>
                                </div>
                                <div class="search-past__right-row">
                                    <p class="search-past__right-label">Discount</p>
                                    <p class="search-past__right-money">{literal}$${details.subtotal_discount}{/literal}</p>
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
     
    }
    renderDetailsPast(78409);
  
</script>


{* make tab *}
<script>
   

    function hideModal() {
        document.getElementById("showStork").style.display="none";
        document.getElementById("continue").style.display="block";
        document.querySelector(".modal-backdrop").style.display="none";
        console.log("hide")
    }
    function backModal() {
         document.getElementById("showStork").style.display="block";
         document.getElementById("continue").style.display="none";
         document.querySelector(".modal-backdrop").style.display="block";
         console.log("show")
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
        f.classList.contains('activeTab') || setAciveTabs(f);
        console.log("func: ",f)
         console.log("tabs list: ",tabs.list, "all: ",tabs.all);
        console.log("tabs container: ",tabsContent.container, "current tab: ",tabsContent.current, "tab: ",tabsContent.tab);
    })
    });

    function setAciveTabs(f) {
        tabs.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        tabsContent.current = tabsContent.container.querySelector('.activeTab')
        tabsContent.tab = f.getAttribute('data-tab')
        tabsContent.current.classList.remove('activeTab')
        tabsContent.container.querySelector('[data-tab="' + tabsContent.tab + '"]').classList.add('activeTab')
    
    }


</script>


{* new order *}
<script>
    window.onload = function() {
        /*document.querySelector('.search-order__box[data-order=order78398]').classList.add('active')
        document.querySelector('.have-order__mid--rel[data-order=order78398]').classList.add('active')
        document.querySelector('.search-order__right-top[data-order=order78398]').classList.add('active') */

        let orders = {
        list: document.querySelector('ul.search-order__list'),
        all: document.querySelectorAll('.search-order .search-order__box'),

        },
        ordersContent = {
            container: document.querySelector('.have-order .have-order__mid'),
            current: null,
            order: null,
        },
        detailContent = {
            container: document.querySelector('.have-order .have-order__right'),
            current: null,
            order: null,
        }

        /*console.log("list: ",orders.list, "all: ",orders.all);
        console.log("ordersContent: ",ordersContent.container, "current: ",ordersContent.current, "order: ",ordersContent.order);
        console.log("detailContent: ",detailContent.container, "current: ",detailContent.current, "order: ",detailContent.order);
        */
        orders.all.forEach(f => {
        f.addEventListener('mousedown', () => {
            
            f.classList.contains('active') || setAciveChat(f);
    
        })
        });

        function setAciveChat(f) {
            
            orders.list.querySelector('.active').classList.remove('active')
            f.classList.add('active')
            
            ordersContent.current = ordersContent.container.querySelector('.active')
            ordersContent.order = f.getAttribute('data-order')
            ordersContent.current.classList.remove('active')
            ordersContent.container.querySelector('[data-order="' + ordersContent.order + '"]').classList.add('active')

            detailContent.current = detailContent.container.querySelector('.active')
            detailContent.order = f.getAttribute('data-order')
            detailContent.current.classList.remove('active')
            detailContent.container.querySelector('[data-order="' + detailContent.order + '"]').classList.add('active')
        
        }
    };
 

</script>

{* packing *}

<script>
    /*document.querySelector('.search-packing__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-packing__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-packing__right-top[data-order=order9161]').classList.add('active') */

    let packings = {
    list: document.querySelector('ul.search-packing__list'),
    all: document.querySelectorAll('.search-packing .search-packing__box'),

    },
    packingsContent = {
        container: document.querySelector('.have-packing .have-packing__mid'),
        current: null,
        packing: null,
    },
    detailPacking = {
        container: document.querySelector('.have-packing .have-packing__right'),
        current: null,
        packing: null,
    }

    /*console.log("list: ",packings.list, "all: ",packings.all);
    console.log("ordersContent: ",packingsContent.container, "current: ",packingsContent.current, "packing: ",packingsContent.packing);
    console.log("detailContent: ",detailPacking.container, "current: ",detailPacking.current, "packing: ",detailPacking.packing);
*/
    packings.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAcivePacking(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAcivePacking(f) {
        packings.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        packingsContent.current = packingsContent.container.querySelector('.active')
        packingsContent.packing = f.getAttribute('data-order')
        packingsContent.current.classList.remove('active')
        packingsContent.container.querySelector('[data-order="' + packingsContent.packing + '"]').classList.add('active')

        detailPacking.current = detailPacking.container.querySelector('.active')
        detailPacking.packing = f.getAttribute('data-order')
        detailPacking.current.classList.remove('active')
        detailPacking.container.querySelector('[data-order="' + detailPacking.packing + '"]').classList.add('active')
    
    }

</script>

<script>

    const spinner = document.getElementById("spinner");

    async function getChange(id) {
        spinner.removeAttribute('hidden');
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.change_status&order_id={literal}${id}{/literal}&status=E`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus("G", "tab1");
        renderLeftSide("G", "order");

        renderCountStatus("E", "tab2");
        renderLeftSide("E", "packing");

        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.add('activeTab');
    }

    async function getPacked(id) {
        spinner.removeAttribute('hidden');
        let url2 = `http://localhost:8080/cart/vendor.php?dispatch=new_orders.change_status&order_id={literal}${id}{/literal}&status=A`;
        try {
            let res = await fetch(url2);
            spinner.setAttribute('hidden', '');
            return await res.json();
        }
        catch (error2) {
            console.log(error2)
        }

        renderCountStatus("E", "tab2");
        renderLeftSide("E", "packing");

        renderCountStatus("A", "tab3");
        renderLeftSide("A", "ready");

        document.querySelector('.tab__li[data-tab=tab1]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab1]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab2]').classList.remove('active');
        document.querySelector('.have-tab[data-tab=tab2]').classList.remove('activeTab');

        document.querySelector('.tab__li[data-tab=tab3]').classList.add('active');
        document.querySelector('.have-tab[data-tab=tab3]').classList.add('activeTab');
        
    }
    
   
</script>

{* ready *}
<script>
   /* document.querySelector('.search-ready__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-ready__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-ready__right-top[data-order=order9161]').classList.add('active')
*/
    let readys = {
    list: document.querySelector('ul.search-ready__list'),
    all: document.querySelectorAll('.search-ready .search-ready__box'),

    },
    readysContent = {
        container: document.querySelector('.have-ready .have-ready__mid'),
        current: null,
        ready: null,
    },
    detailReadys = {
        container: document.querySelector('.have-ready .have-ready__right'),
        current: null,
        ready: null,
    }
/*
    console.log("readys: ",readys.list, "all: ",readys.all);
    console.log("ordersContent: ",readysContent.container, "current: ",readysContent.current, "ready: ",readysContent.ready);
    console.log("detailContent: ",detailReadys.container, "current: ",detailReadys.current, "ready: ",detailReadys.ready);
*/
    readys.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAciveReady(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAciveReady(f) {
        readys.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        readysContent.current = readysContent.container.querySelector('.active')
        readysContent.ready = f.getAttribute('data-order')
        readysContent.current.classList.remove('active')
        readysContent.container.querySelector('[data-order="' + readysContent.ready + '"]').classList.add('active')

        detailReadys.current = detailReadys.container.querySelector('.active')
        detailReadys.ready = f.getAttribute('data-order')
        detailReadys.current.classList.remove('active')
        detailReadys.container.querySelector('[data-order="' + detailReadys.ready + '"]').classList.add('active')
    
    }

</script>

<script>
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
</script>

{* past *}
<script>
   /* document.querySelector('.search-past__box[data-order=order9161]').classList.add('active')
    document.querySelector('.have-past__mid--rel[data-order=order9161]').classList.add('active')
    document.querySelector('.search-past__right-top[data-order=order9161]').classList.add('active')
*/
    let pasts = {
    list: document.querySelector('ul.search-past__list'),
    all: document.querySelectorAll('.search-past .search-past__box'),

    },
    pastsContent = {
        container: document.querySelector('.have-past .have-past__mid'),
        current: null,
        past: null,
    },
    detailPasts = {
        container: document.querySelector('.have-past .have-past__right'),
        current: null,
        past: null,
    }
/*
    console.log("readys: ",readys.list, "all: ",readys.all);
    console.log("ordersContent: ",readysContent.container, "current: ",readysContent.current, "ready: ",readysContent.ready);
    console.log("detailContent: ",detailReadys.container, "current: ",detailReadys.current, "ready: ",detailReadys.ready);
*/
    pasts.all.forEach(f => {
    f.addEventListener('mousedown', () => {
         console.log('abc')
        f.classList.contains('active') || setAcivePast(f);
        console.log(f)
        console.log('axx')
    })
    });

    function setAcivePast(f) {
        pasts.list.querySelector('.active').classList.remove('active')
        f.classList.add('active')
        
        pastsContent.current = pastsContent.container.querySelector('.active')
        pastsContent.past = f.getAttribute('data-order')
        pastsContent.current.classList.remove('active')
        pastsContent.container.querySelector('[data-order="' + pastsContent.past + '"]').classList.add('active')

        detailPasts.current = detailPasts.container.querySelector('.active')
        detailPasts.past = f.getAttribute('data-order')
        detailPasts.current.classList.remove('active')
        detailPasts.container.querySelector('[data-order="' + detailPasts.past + '"]').classList.add('active')
    
    }

</script>

<script>
    function openPast() {
        console.log('open ready')
        document.getElementById("ready").style.display="none";
        document.getElementById("past").style.display="flex";

    }
</script>

