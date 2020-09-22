{if $smarty.const.PERM_VIEW_POC}
<div id="content_poc" class="hidden">
    <div class="control-group">
        <label for="poc_city" class="control-label">Assigned City(s)</label>
        <div class="controls">
            <input name="poc_data[cities]" type="text" id="poc_city" value="{$cities}" class="input-large user-success"{if !$smarty.const.PERM_MANAGE_POC} disabled{/if}>
            <div><i>comma separated list</i></div>
        </div>
    </div>
    <div class="control-group">
        <label for="poc_poc" class="control-label">Display as POC to Vendors for the selected cities</label>
        <div class="controls">
            <input name="poc_data[display_for_cities]" id="poc_poc" type="checkbox" value="1"{$display_for_cities_checked}{if !$smarty.const.PERM_MANAGE_POC} disabled{/if}>
        </div>
    </div>
    
    <div class="control-group">
Poc type(s)
    </div>
        <div class="control-group">
            <label class="control-label" for="poc_type">Sales</label>
            <div class="controls">
                <select name="poc_data[type]" id="poc_type" class="user-success"{if !$smarty.const.PERM_MANAGE_POC} disabled{/if}>
                        <option value="">---</option>
                        <option value="S"{$type_S_selected}>Sales</option>
                        <option value="E"{$type_E_selected}>Escalation</option>
                </select>                
            </div>
        </div>
</div>
{/if}