<form action="{""|fn_url}" method="post" class="form-table" name="om_cart_form" enctype="multipart/form-data">
{foreach from=$cart_products item="cp" key="key"}
        <input type="hidden" name="cart_products[{$key}][product_id]" value="{$cp.product_id}" />
        <input type="hidden" name="cart_products[{$key}][amount]" value="{$cp.amount}" />
{/foreach}
<input type="hidden"  name="order_id" value="{$order_id}"  />
<button type="submit" name="dispatch[new_orders.place_order.save]" value="Recalculate">Update order</button>
</form>