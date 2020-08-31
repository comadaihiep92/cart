{if $smarty.const.ACCOUNT_TYPE=="vendor"}
	{if $runtime.controller == 'new_orders' && $runtime.mode == 'manage'}
		{style src="addons/new_ui/new_orders.less"}
	{else}
		{style src="addons/new_ui/orders.less"}
	{/if}
{elseif $smarty.const.ACCOUNT_TYPE=="admin"}
	{style src="addons/new_ui/orders.less"}
{/if}