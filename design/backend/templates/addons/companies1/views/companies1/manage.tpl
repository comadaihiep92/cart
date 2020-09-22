{include file="views/profiles/components/profiles_scripts.tpl"}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="vendor_users_form" id="companies1_form">
<input type="hidden" name="fake" value="1" />

{include file="common/pagination.tpl" save_current_page=true save_current_url=true}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

{assign var="return_url" value=$config.current_url|escape:"url"}

{if $vendor_users}
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <th width="1%" class="left mobile-hide">
            {include file="common/check_items.tpl"}</th>
        <th width="8%"><a class="cm-ajax" href="{"`$c_url`&sort_by=id&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("id")}{if $search.sort_by == "id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="25%"><a class="cm-ajax" href="{"`$c_url`&sort_by=name&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("name")}{if $search.sort_by == "firstname"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="20%"><a class="cm-ajax" href="{"`$c_url`&sort_by=phone&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("phone")}{if $search.sort_by == "phone"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="20%"><a class="cm-ajax" href="{"`$c_url`&sort_by=email&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("email")}{if $search.sort_by == "email"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=role&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">Role{if $search.sort_by == "role"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="20%"><a class="cm-ajax" href="{"`$c_url`&sort_by=created&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("registered")}{if $search.sort_by == "timestamp"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="5%" class="nowrap">&nbsp;</th>
        <th width="10%" class="right"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
    </tr>
    </thead>
    {foreach from=$vendor_users item=vendor_user}
    <tr class="cm-row-status-{$vendor_user.status|lower}" data-ct-vendor_user-id="{$vendor_user.company_id}">
        <td class="left mobile-hide">
            <input type="checkbox" name="companies1_users_ids[]" value="{$vendor_user.user_id}" class="cm-item" />
        </td>
        <td class="row-status" data-th="{__("id")}"><a href="{"companies1.update?company_id=`$vendor_user.user_id`"|fn_url}">&nbsp;<span>{$vendor_user.user_id}</span>&nbsp;</a></td>
        <td class="row-status" data-th="{__("name")}"><a href="{"companies1.update?company_id=`$vendor_user.user_id`"|fn_url}">{$vendor_user.firstname}</a></td>
        <td class="row-status" data-th="{__("phone")}"><a href="{"companies1.update?company_id=`$vendor_user.user_id`"|fn_url}">{$vendor_user.phone}</a></td>
        <td class="row-status" data-th="{__("email")}"><a href="mailto:{$vendor_user.email}">{$vendor_user.email}</a></td>
        <td class="row-status" data-th="Role">{$vendor_user.role}</td>
        <td class="row-status" data-th="{__("registered")}">{$vendor_user.timestamp|date_format:"`$settings.Appearance.date_format`, `$settings.Appearance.time_format`"}</td>
        <td class="nowrap" data-th="{__("tools")}">
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_items}
            </div>
        </td>
        {if "MULTIVENDOR"|fn_allowed_for}
            <td class="right nowrap" data-th="{__("status")}">
                {assign var="notify" value=true}
                {include file="addons/companies1/views/companies1/components/select_popup.tpl"
                    id=$vendor_user.user_id
                    status=$vendor_user.status
                    items_status="companies1"|fn_get_predefined_statuses:$vendor_user.status
                    object_id_name="user_id"
                    hide_for_vendor=$runtime.user_id
                    update_controller="companies1"
                    notify=$notify
                    notify_text=__("notify_vendor")
                    status_target_id="pagination_contents"
                    extra="&return_url=`$return_url`"
                }
            </td>
        {else}
            <td class="row-status" data-th="{__("stores_status")}">
                {include file="addons/companies1/views/companies1/components/vendor_user_status_switcher.tpl" vendor_user=$vendor_user}
            </td>
        {/if}
    </tr>
    {/foreach}
    </table>
</div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{if $vendor_users}
    {if !$runtime.company_id}
    {capture name="activate_selected"}
        {include file="addons/companies1/views/companies1/components/reason_container.tpl" type="activate"}
        <div class="buttons-container">
            {include file="buttons/save_cancel.tpl" but_text=__("proceed") but_name="dispatch[companies1.m_activate]" cancel_action="close" but_meta="cm-process-items"}
        </div>
    {/capture}
    {include file="common/popupbox.tpl" id="activate_selected" text=__("activate_selected") content=$smarty.capture.activate_selected link_text=__("activate_selected")}

    {capture name="disable_selected"}
        {include file="addons/companies1/views/companies1/components/reason_container.tpl" type="disable"}
        <div class="buttons-container">
            {include file="buttons/save_cancel.tpl" but_text=__("proceed") but_name="dispatch[companies1.m_disable]" cancel_action="close" but_meta="cm-process-items"}
        </div>
    {/capture}
    {include file="common/popupbox.tpl" id="disable_selected" text=__("disable_selected") content=$smarty.capture.disable_selected link_text=__("disable_selected")}
    {/if}
{/if}

{include file="common/pagination.tpl"}
</form>
{/capture}
{capture name="buttons"}
    {capture name="tools_items"}
        {hook name="vendor_users:manage_tools_list"}
            {*if $vendor_users && !"ULTIMATE"|fn_allowed_for}
                <li>{btn type="list" text=__("activate_selected") dispatch="dispatch[companies1.export_range]" form="vendor_users_form" class="cm-process-items cm-dialog-opener"  data=["data-ca-target-id" => "content_activate_selected"]}</li>                    
                <li>{btn type="list" text=__("disable_selected") dispatch="dispatch[companies1.export_range]" form="vendor_users_form" class="cm-process-items cm-dialog-opener"  data=["data-ca-target-id" => "content_disable_selected"]}</li>                    
            {/if*}
                <li>{btn type="delete_selected" dispatch="dispatch[companies1.m_delete]" form="vendor_users_form"}</li>

        {/hook}
    {/capture}
    {dropdown content=$smarty.capture.tools_items class="mobile-hide"}

{/capture}

{capture name="adv_buttons"}
    {if $is_vendor_users_limit_reached}
        {$promo_popup_title = __("ultimate_or_storefront_license_required", ["[product]" => $smarty.const.PRODUCT_NAME])}

        {include file="common/tools.tpl" tool_override_meta="btn cm-dialog-opener cm-dialog-auto-height" tool_href="functionality_restrictions.ultimate_or_storefront_license_required" prefix="top" hide_tools=true title=__("add_vendor") icon="icon-plus" meta_data="data-ca-dialog-title=\"$promo_popup_title\""}
    {else}
        {include file="common/tools.tpl" tool_href="companies1.add" prefix="top" hide_tools=true title="Add vendor user" icon="icon-plus"}
    {/if}
{/capture}


{include file="common/mainbox.tpl" title="Vendor users" content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
