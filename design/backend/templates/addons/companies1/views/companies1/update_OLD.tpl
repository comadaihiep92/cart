<!-- Actions -->
<div class="actions cm-sticky-scroll"
     data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd" 
     data-ca-top="45" 
     data-ca-padding="45"
     id="actions_panel">
    <div class="actions__wrapper ">

        <div class="btn-bar-left pull-left mobile-hidden">
            <div class="pull-left"><div class="btn-group" id="last_edited_items">
                    <a class="btn cm-back-link"><i class="icon-arrow-left "></i></a>
                    <!--last_edited_items--></div></div>
        </div>
        <div class="btn-bar-left pull-left overlay-navbar-open-container mobile-visible">
            <div class="pull-left"><a role="button" class="btn mobile-visible mobile-menu-toggler">
                    <i class="icon icon-align-justify mobile-visible-inline overlay-navbar-open"></i>
                </a></div>
        </div>
        <div class="title pull-left">
            <h2 class="title__heading"
                title="{$h2_tile}"
                >
                <span class="title__part-start mobile-hidden">{$h2_tile}</span>
                <span class="title__part-end">{$h2_company_name}</span>
            </h2>

            <!--mobile quick search-->
            <div class="mobile-visible pull-right search-mobile-group cm-search-mobile-group" 
                 data-ca-search-mobile-back="search_mobile_back"
                 data-ca-search-mobile-btn="search_mobile_btn"
                 data-ca-search-mobile-block="search_mobile_block"
                 data-ca-search-mobile-input="gs_text_mobile"
                 >
                <button class="btn search-mobile-btn" id="search_mobile_btn"><i class="icon-search search-mobile-icon"></i></button>
                <div class="search search-mobile-block cm-search-mobile-search hidden" id="search_mobile_block">
                    <button class="search-mobile-back" type="button" id="search_mobile_back"><i class="icon-remove"></i></button>
                    <button class="search_button search-mobile-button" type="submit" title="Search for products, customers, orders and CMS pages" id="search_button_mobile" form="global_search"><i class="icon-search"></i></button>
                    <label for="gs_text_mobile" class="search-mobile-label"><input type="text" class="cm-autocomplete-off search-mobile-input" id="gs_text_mobile" name="q" value="" form="global_search" disabled /></label>
                </div>
            </div>
            <!--mobile end quick search-->
        </div>
        <div class="btn-bar btn-toolbar dropleft pull-right" >
            <a     data-ca-dispatch="dispatch[companies1.{$action}]"  data-ca-target-form="companies1_update_form" class="btn btn-primary cm-submit btn-primary "> {$action_button}</a>
        </div>


    </div>
    <!--actions_panel--></div>

<div class="admin-content-wrapper ">

    <!-- Sidebar left -->


    <!--Content-->
    <div class="content  " >
        <div class="content-wrap">
            <!-- Inline script moved to the bottom of the page -->
            <div class="cm-tabs-content">
                <form class="form-horizontal form-edit cm-comet cm-ajax cm-disable-check-changes" action="/vendor.php" method="post" id="companies1_update_form" enctype="multipart/form-data"> 
                    <input type="hidden" name="company_id" value="{$company_id}" />
                    <div id="content_detailed"> 
                        <fieldset>
                            <h4 class="subheader  " >
                                Information
                            </h4>
                            <div class="control-group profile-field-company">
                                <label
                                    for="elm_36"
                                    class="control-label cm-profile-field cm-required "
                                    >Name:</label>
                                <div class="controls">
                                    <input
                                        type="text"
                                        id="elm_36"
                                        name="companies1_data[firstname]"
                                        size="36"
                                        value="{$companies1_data.firstname}"
                                        class="input-large "
                                        />
                                </div>
                            </div>                            
                            <div class="control-group profile-field-company">
                                <label
                                    for="elm_37"
                                    class="control-label cm-profile-field cm-required "
                                    >Phone:</label>
                                <div class="controls">
                                    <input
                                        type="text"
                                        id="elm_37"
                                        name="companies1_data[phone]"
                                        size="36"
                                        value="{$companies1_data.phone}"
                                        class="input-large "
                                        />
                                </div>
                            </div>
                            <div class="control-group profile-field-email">
                                <label
                                    for="elm_38"
                                    class="control-label cm-profile-field cm-required cm-email "
                                    >E-mail:</label>
                                <div class="controls">
                                    <input
                                        type="text"
                                        id="elm_38"
                                        name="companies1_data[email]"
                                        size="32"
                                        value="{$companies1_data.email}"
                                        class="input-large "
                                        />
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password1" class="control-label{if $company_id<=0} cm-required{/if}">Password:</label>
                                <div class="controls">
                                    <input type="password" id="password1" name="companies1_data[password1]" class="input-large cm-autocomplete-off" size="32" maxlength="32" value="" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="password2" class="control-label{if $company_id<=0} cm-required{/if}">Confirm password:</label>
                                <div class="controls">
                                    <input type="password" id="password2" name="companies1_data[password2]" class="input-large cm-autocomplete-off user-success" size="32" maxlength="32" value="" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                </div>
                            </div>                                        
                        </fieldset>
                        <fieldset>
                            <h4 class="subheader  " >
                                Permissions
                            </h4>
                            <div class="control-group">
                                <label
                                    for="perm_orders"
                                    class="control-label "
                                    >Orders</label>
                                <div class="controls">
                                    <input
                                        type="checkbox"
                                        id="perm_orders"
                                        name="companies1_data[orders]"
                                        value="1"
                                        {$companies1_data.orders_checked}/>
                                </div>
                            </div>                            
                            <div class="control-group">
                                <label
                                    for="perm_catalog"
                                    class="control-label "
                                    >Product catalog managment</label>
                                <div class="controls">
                                    <input
                                        type="checkbox"
                                        id="perm_catalog"
                                        name="companies1_data[catalog]"
                                        value="1"
                                        {$companies1_data.catalog_checked}/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label
                                    for="perm_metrics"
                                    class="control-label "
                                    >Business metrics</label>
                                <div class="controls">
                                    <input
                                        type="checkbox"
                                        id="perm_metrics"
                                        name="companies1_data[metrics]"
                                        value="1"
                                        {$companies1_data.metrics_checked}/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label
                                    for="perm_discounts"
                                    class="control-label "
                                    >Discounts</label>
                                <div class="controls">
                                    <input
                                        type="checkbox"
                                        id="perm_discounts"
                                        name="companies1_data[discounts]"
                                        value="1"
                                        {$companies1_data.discounts_checked}/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label
                                    for="perm_users"
                                    class="control-label "
                                    >User management</label>
                                <div class="controls">
                                    <input
                                        type="checkbox"
                                        id="perm_users"
                                        name="companies1_data[users]"
                                        value="1"
                                        {$companies1_data.users_checked}/>
                                </div>
                            </div>                                   
                        </fieldset>                                        
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <!--/Content-->

    <!-- Sidebar -->
    <div class="sidebar cm-sidebar" id="elm_sidebar">
        <div class="sidebar-toggle"><i class="icon-chevron-left sidebar-icon"></i></div>
        <div class="sidebar-wrapper">
        </div>
        <!--elm_sidebar--></div>
</div>


<!-- Inline script moved to the bottom of the page -->

