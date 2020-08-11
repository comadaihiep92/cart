<input type="hidden"
       data-ca-paypal-for-marketplaces-checkout="true"
       data-ca-paypal-for-marketplaces-payer-id="{$payment_method.processor_params.payer_id}"
       data-ca-paypal-for-marketplaces-environment="{if $payment_method.processor_params.mode == "live"}production{else}sandbox{/if}"
       data-ca-paypal-for-marketplaces-button="place_order_{$tab_id}"
       data-ca-paypal-for-marketplaces-style-color="{$payment_method.processor_params.style.color|default:"gold"}"
       data-ca-paypal-for-marketplaces-style-size="{$payment_method.processor_params.style.size|default:"medium"}"
       data-ca-paypal-for-marketplaces-style-shape="{$payment_method.processor_params.style.shape|default:"pill"}"
       data-ca-paypal-for-marketplaces-style-tagline="{$payment_method.processor_params.style.tagline|default:"false"}"
       data-ca-paypal-for-marketplaces-funding="{$payment_method.processor_params.funding|default:[]|json_encode}"
/>