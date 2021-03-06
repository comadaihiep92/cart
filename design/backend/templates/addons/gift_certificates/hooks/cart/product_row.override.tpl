{if $product.item_type == "G"}
    <tr>
        <td data-th="{__("product")}">
            {__("gift_certificate")}
        </td>
        {if $show_price}
            <td class="center" data-th="{__("amount")}">{$product.amount}</td>
            <td class="right" data-th="{__("price")}">{include file="common/price.tpl" value=$product.price span_id="c_`$customer.user_id`_$product.item_id"}</td>
        {/if}
    </tr>
    <tr>
        <td {if $show_price}colspan="3"{/if}>
            <table cellpadding="0" cellspacing="0" border="0" width="90%" class="table table-responsive" align="center">
            <tr>
                <th width="100%">{__("product")}</th>
                {if $show_price}
                    <th class="center">{__("quantity")}</th>
                    <th class="right">{__("price")}</th>
                {/if}
            </tr>
            {foreach from=$products item="_product"}
                {if $_product.extra.extra.parent.certificate && $_product.extra.extra.parent.certificate == $product.item_id}
                {assign var="has_products" value=true}
                <tr>
                    <td data-th="{__("product")}">
                        <a href="{"products.update?product_id=`$_product.product_id`"|fn_url}">{$_product.product nofilter}</a>

                        {hook name="cart:product_info"}
                        {/hook}
                    </td>
                    {if $show_price}
                        <td class="center" data-th="{__("quantity")}">{$_product.amount}</td>
                        <td class="right" data-th="{__("price")}">{include file="common/price.tpl" value=$_product.price span_id="c_`$customer.user_id`_$_product.item_id"}</td>
                    {/if}
                </tr>
                {/if}
            {/foreach}
                {if !$has_products}
                    <tr>
                        <td colspan="3">
                            {__("text_no_products")}
                        </td>
                    </tr>
                {/if}
            </table>
        </td>
    </tr>
{/if}