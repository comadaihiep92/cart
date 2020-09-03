<style >
#newSell,
.newSell {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  flex-flow: row nowrap;
  height: 250px;
  padding: 10px 15px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  margin: 10px 0;
  border: 2px solid transparent;
}
#newSell:hover,
.newSell:hover {
  border-color: #379424;
}
#newSell__left,
.newSell__left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding-right: 10px;
  border-right: 1px solid #cdd0d2;
}
#newSell__title,
.newSell__title {
  color: #379424 !important;
  font-size: 20px !important;
  line-height: 1.25;
  font-weight: 700 !important;
}
#newSell__title > a,
.newSell__title > a {
  color: #379424 !important;
  font-size: 20px !important;
  line-height: 1.25;
  font-weight: 700 !important;
}
#newSell__star,
.newSell__star {
  margin: 0;
}
#newSell__button,
.newSell__button {
  background: #fdf3e5;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 8px 12px;
  font-size: 14px;
  color: #37454d;
  margin: 10px 0;
}
#newSell__pop,
.newSell__pop {
  margin-left: 12px;
}
#newSell__off,
.newSell__off {
  border-top: 1px solid #cdd0d2;
  border-bottom: 1px solid #cdd0d2;
  padding: 10px 0;
}
#newSell__off--icon,
.newSell__off--icon {
  margin-left: 5px;
  margin-right: 10px;
}
#newSell__off--text,
.newSell__off--text {
  font-size: 14px;
  color: #ff671f;
  font-weight: 700;
}
#newSell__review,
.newSell__review {
  padding: 10px 0;
}
#newSell__review--rate,
.newSell__review--rate {
  width: 30px;
  height: 18px;
  border-radius: 18px;
  background: #316300;
  display: inline-block;
  margin-left: 5px;
  margin-right: 10px;
}
#newSell__review--text,
.newSell__review--text {
  font-weight: 700;
  color: #fff;
  text-align: center;
  line-height: 1.25;
  display: block;
}
#newSell__review--count,
.newSell__review--count {
  font-size: 14px;
  color: #37454d;
}
#newSell__linkto,
.newSell__linkto {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 66%;
  text-decoration: none !important;
}
#newSell__mid,
.newSell__mid {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  margin: 0 auto;
}
#newSell__mid span,
.newSell__mid span {
  font-size: 13px;
  color: #43b02a;
}
#newSell__right,
.newSell__right {
  display: flex;
  flex-direction: column;
}
#newSell__right--top,
.newSell__right--top {
  display: flex;
  padding: 10px;
  background: #ecf3e6;
  flex-direction: column;
  margin-bottom: 10px;
}
#newSell__right--bottom,
.newSell__right--bottom {
  text-align: center;
  border: 1px solid #cdd0d2;
  padding: 10px 0;
  margin: 0;
}
#newSell__fsai,
.newSell__fsai {
  color: #4c4d4c;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  margin-bottom: 15px;
}
#newSell__days,
.newSell__days {
  display: flex;
  align-items: center;
  margin-bottom: 25px;
}
#newSell__days--row,
.newSell__days--row {
  display: flex;
  align-items: center;
  margin-right: 12px;
}
#newSell__green,
.newSell__green {
  margin-left: 4px;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  color: #316300;
  line-height: 1;
}
#newSell__action,
.newSell__action {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
#newSell__price,
.newSell__price {
  font-size: 20px;
  font-weight: 700;
  color: #316300;
}
#newSell__time,
.newSell__time {
  color: #393939;
  font-size: 12px;
}
#newSell__shipping,
.newSell__shipping {
  color: #316300;
  font-size: 12px;
}
#newSell__buynow,
.newSell__buynow {
  background: #fb6823;
  border: none;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 14px;
  color: #fff;
  font-weight: 700;
  margin-right: 20px;
  height: 42px;
}
#newSell__buynow--icon,
.newSell__buynow--icon {
  margin-right: 5px;
}
#newSell__save,
.newSell__save {
  background: #f1f0ef;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 14px;
  color: #000;
  font-weight: 700;
  border: 1px solid #c3c3c3;
  box-sizing: border-box;
  height: 42px;
}
#newSell__covid,
.newSell__covid {
  margin-bottom: 0;
  border-top: 1px solid #cdd0d2;
  margin-left: 0;
  padding-top: 10px;
  font-size: 14px;
  font-style: normal;
  font-weight: 700;
  color: #316300;
  line-height: 1;
  padding-bottom: 0;
}
@media (max-width: 1199.98px) {
  
}
@media (max-width: 991.98px) {
  
}
@media (max-width: 767.98px) {
  #newSell,
  .newSell {
    flex-direction: column;
    align-items: center;
    height: auto;
  }
  #newSell__left,
  .newSell__left {
    padding-right: 0;
    border-right: unset;
    width: 100%;
  }
  #newSell__off,
  .newSell__off {
    width: 100%;
  }
  #newSell__right,
  .newSell__right {
    width: 100%;
  }
  #newSell__mid,
  .newSell__mid {
    padding: 20px 0;
  }
  #newSell__linkto,
  .newSell__linkto {
    width: 100%;
    flex-direction: column;
  }
}
@media (max-width: 575.98px) {
  #newSell__left,
  .newSell__left {
    width: 100%;
  }
  .newSell__title {
    margin-top: 0;
  }
  #newSell__off,
  .newSell__off {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }
  .newSell__button--icon {
    display: none;
  }
  #newSell__pop,
  .newSell__pop {
    margin-left: 0;
  }
  #newSell__off--icon,
  .newSell__off--icon {
    margin-left: 0;
    margin-right: 5px;
  }
  #newSell__mid,
  .newSell__mid {
    padding: 0;
    margin-bottom: 10px;
  }
  #newSell__fsai,
  .newSell__fsai {
    padding: 0;
    margin-bottom: 10px;
  }
  #newSell__days,
  .newSell__days {
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 10px;
  }
  #newSell__green,
  .newSell__green {
    font-size: 12px;
  }
  #newSell__days--row,
  .newSell__days--row {
    margin-right: 0;
    margin-bottom: 0;
  }
  #newSell__linkto,
  .newSell__linkto {
    width: 100%;
    flex-direction: column;
  }
}


</style>

{if $items|default:[]}

    <div class="ty-sellers-list">
    {foreach $items as $vendor_product}
        {$company_id = $vendor_product.company_id}
        {$product_id = $vendor_product.product_id}
        {$obj_prefix = "`$company_id`-"}
        {if !empty($vendor_product.min_qty)}
            {$amount=$vendor_product.min_qty}
        {elseif !empty($vendor_product.qty_step)}
            {$amount=$vendor_product.qty_step}
        {else}
            {$amount="1"}
        {/if}

        <div class="ty-sellers-list__item">
            <form action="{""|fn_url}"
                  method="post"
                  name="vendor_products_form_{$company_id}"
                  enctype="multipart/form-data"
                  class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle"
                  data-ca-master-products-element="product_form"
                  data-ca-master-products-master-product-id="{$vendor_product.master_product_id}"
                  data-ca-master-products-product-id="{$vendor_product.product_id}"
            >
                <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,average_rating*"/>
                <input type="hidden" name="product_data[{$product_id}][product_id]" value="{$product_id}" />
                <input type="hidden" name="product_data[{$product_id}][amount]" value="{$amount}" />
                {$show_logo = $vendor_product.company.logos}

                {include file="common/company_data.tpl"
                        company=$vendor_product.company
                        show_name=true
                        show_links=true
                        show_logo=$show_logo
                        show_city=true
                        show_country=true
                        show_rating=true
                        show_posts_count=false
                        show_location=true
                }

                {* <div class="ty-sellers-list__content"> *}

                    {hook name="companies:vendor_products"}
                    {* <div class="ty-sellers-list__image">
                        {$logo="logo_`$company_id`"}
                        {$smarty.capture.$logo nofilter}
                    </div> *}

                    {* <div class="ty-sellers-list__title">
                        {$name="name_`$company_id`"}
                        {$smarty.capture.$name nofilter}

                        {$rating="rating_`$company_id`"}
                        <div class="sellers-list__rating">
                            {$smarty.capture.$rating nofilter}
                        </div>
                    </div> *}

                    {* {$location="location_`$company_id`"}
                    {if $smarty.capture.$location|trim}
                        <div class="ty-sellers-list__item-location">
                            <a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="company-location"><bdi>
                                    {$smarty.capture.$location nofilter}
                                </bdi></a>
                        </div>
                    {/if} *}

                    {include file="common/product_data.tpl"
                        product=$vendor_product
                        show_add_to_cart=true
                        show_amount_label=false
                        show_product_amount=true
                        show_add_to_wishlist=true
                        show_buy_now=false
                    }

                    {* <div class="ty-sellers-list__controls">
                        {$product_amount = "product_amount_`$product_id`"}
                        {$smarty.capture.$product_amount nofilter}

                        <div class="ty-sellers-list__price">
                            <a class="ty-sellers-list__price-link"
                               href="{"products.view?product_id={$product_id}"|fn_url}"
                            >
                                {include file="common/price.tpl"
                                    value=$vendor_product.price
                                    class="ty-price-num"
                                }
                            </a>

                            {if $addons.reward_points.status == "A"}
                                {include file="addons/reward_points/views/products/components/product_representation.tpl"
                                    product=$vendor_product
                                }
                            {/if}
                        </div>

                        <div class="ty-sellers-list__buttons">
                            {$add_to_cart = "add_to_cart_`$product_id`"}
                            {$smarty.capture.$add_to_cart nofilter}

                            {$list_buttons = "list_buttons_`$product_id`"}
                            {$smarty.capture.$list_buttons nofilter}
                        </div>

                    </div> *}

                    {* newSell *}
                    <div id="newSell" class="newSell">
                        {* <a href="{"products.view?product_id={$product_id}"|fn_url}" class="newSell__linkto"> *}
                            <div class="newSell__left">
                                {* <h2 class="newSell__title">Hotel The Leela Palace</h2> *}
                                <h2 class="newSell__title">
                                    {$name="name_`$company_id`"}
                                    {$smarty.capture.$name nofilter}
                                </h2>
                                <div class="newSell__star" itemprop="starRating" itemtype="https://schema.org/Rating" itemscope="true">
                                    {* <meta itemprop="ratingValue" content="5"><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                                        </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                                        </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                                        </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                                        </svg></span><span class="icon-ic star"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21a.667.667 0 00-.545-.534l-3.604-.6L6.63.455a.666.666 0 00-1.262.001L4.16 4.076l-3.603.6a.667.667 0 00-.233 1.228L3.2 7.63l-1.165 3.493a.67.67 0 00.25.758.672.672 0 00.798-.026L6 9.52l2.917 2.333a.66.66 0 00.796.027.665.665 0 00.252-.758L8.8 7.63l2.876-1.725a.667.667 0 00.312-.696z"></path>
                                        </svg></span> *}
                                    {$rating="rating_`$company_id`"}
                                    <div class="sellers-list__rating">
                                        {$smarty.capture.$rating nofilter}
                                    </div>
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
                                    {* <span >Availability:</span>
                                    <span >
                                        56&nbsp;item(s)
                                    
                                    </span> *}
                                    {$product_amount = "product_amount_`$product_id`"}
                                    {$smarty.capture.$product_amount nofilter}
                                </div>
                            </div>
                        {* </a> *}
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
                                    {* <span class="newSell__price">$180</span> *}
                                    <a class="ty-sellers-list__price-link" href="{"products.view?product_id={$product_id}"|fn_url}">
                                        {include file="common/price.tpl"
                                            value=$vendor_product.price
                                            class="ty-price-num"
                                        }
                                    </a>
                                    <div>
                                        {* <button class="newSell__buynow">
                                            <span class="newSell__buynow--icon">icon</span><span>Buy now</span>
                                        </button> *}
                                        {* <button class="newSell__save">
                                            <span>icon</span>
                                        </button> *}
                                        {$add_to_cart = "add_to_cart_`$product_id`"}
                                        {$smarty.capture.$add_to_cart nofilter}
                                        {$list_buttons = "list_buttons_`$product_id`"}
                                        {$smarty.capture.$list_buttons nofilter}
                                        
                                    </div>
                                </div>
                            
                            </div>
                            <div class="newSell__right--bottom">
                                <p class="newSell__time"><span>icon</span><a class="newSell__shipping" href="#"> Shipping:</a> by <span>Tomorrow, 10:30, from <strong>$0</strong></p>
                                <p class="newSell__covid">Covid icons displayed here</p>
                            </div>
                        </div>
                    </div>
                    {/hook}
                {* </div> *}
            </form>
        </div>
        
    {/foreach}
    </div>
{/if}
