<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<object data="https://chfmart.com/index.php?dispatch=searchanise.async&no_session=Y" style="position:absolute;" width="0" height="0" type="text/html"></object>
<style>
.tasks {
  margin: 0px 20px 20px auto;
  background: #fafafa;
  border: 1px solid #cdd3d7;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  float: left;
}
@media screen and (min-width: 600px) {
.tasks {
  width: 300px;
  height: 90px;  
}
}
@media screen and (max-width: 600px) {
.tasks {
  width: 100%;
  height: 90px;  
}
}
.tasks p {
  margin-left: 27px;
  line-height: 17px;
}
.tasks-header {
  position: relative;
  line-height: 24px;
  padding: 7px 15px;
  color: #5d6b6c;
  text-shadow: 0 1px rgba(255, 255, 255, 0.7);
  background: #f0f1f2;
  border-bottom: 1px solid #d1d1d1;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, #f5f7fd, #e6eaec);
  background-image: -moz-linear-gradient(top, #f5f7fd, #e6eaec);
  background-image: -o-linear-gradient(top, #f5f7fd, #e6eaec);
  background-image: linear-gradient(to bottom, #f5f7fd, #e6eaec);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.03);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.03);
}

.tasks-title {
  line-height: inherit;
  font-size: 14px;
  font-weight: bold;
  color: inherit;
}

.tasks-lists {
  position: absolute;
  top: 50%;
  right: 10px;
  margin-top: -11px;
  padding: 10px 4px;
  width: 19px;
  height: 3px;
  font: 0/0 serif;
  text-shadow: none;
  color: transparent;
}

.tasks-lists:before {
  content: '';
  display: block;
  height: 3px;
  background: #8c959d;
  border-radius: 1px;
  -webkit-box-shadow: 0 6px #8c959d, 0 -6px #8c959d;
  box-shadow: 0 6px #8c959d, 0 -6px #8c959d;
}

.tasks-list-item {
  display: block;
  line-height: 24px;
  padding: 12px 15px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.tasks-list-item + .tasks-list-item {
  border-top: 1px solid #f0f2f3;
}

.tasks-list-mark {
  position: relative;
  display: inline-block;
  vertical-align: top;
  margin-right: 12px;
  width: 20px;
  height: 20px;
  border: 2px solid #c4cbd2;
  border-radius: 12px;
}

.tasks-list-mark:before {
  content: '';
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -5px 0 0 -6px;
  height: 4px;
  width: 8px;
  border: solid #39ca74;
  border-width: 0 0 4px 4px;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.tasks-list-cb:checked ~ .tasks-list-mark {
  border-color: #39ca74;
}
.tasks-list-cb:checked ~ .tasks-list-mark:before {
  display: block;
}
.tasks-list-desc {
  font-weight: bold;
  color: #8a9a9b;
  margin-left: 10px;
}

.tasks-list-cb:checked ~ .tasks-list-desc {
  color: #34bf6e;
}
</style>
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
                            <div class="control-group">
                                <label class="control-label cm-required" for="user_role">Choose user role:</label>
                                <div class="controls">
                                    <select name="companies1_data[role]" id="user_role" class="user-success">
                                        <option value="">Choose user role</option>
                                        <option value="o"{$companies1_data.o_selected}>Owner</option>     
                                        <option value="s"{$companies1_data.s_selected}>Store Manager</option>     
                                        <option value="m"{$companies1_data.m_selected}>Order Manager</option>       
                                    </select>
                                </div>
                            </div>
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
                                        class="input-large"
                                        />
                                </div>
                            </div>                            
                            <div class="control-group profile-field-company">
                                <label
                                    for="elm_37"
                                    class="control-label cm-profile-field cm-required "
                                    >Mobile:</label>
                                <div class="controls">
                                    <input
                                        type="tel" 
                                        id="elm_37"
                                        name="companies1_data[phone]"
                                        size="36"
                                        value="{$companies1_data.phone}"
                                        class="input-large"
                                        />
                                    <div><small>example: +910123456789</small></div>
                                </div>
                            </div>
                            <div class="control-group profile-field-email">
                                <label
                                    for="elm_38"
                                    class="control-label cm-profile-field cm-required cm-email "
                                    >E-mail:</label>
                                <div class="controls">
                                    <input
                                        type="email"
                                        id="elm_38"
                                        name="companies1_data[email]"
                                        size="32"
                                        value="{$companies1_data.email}"
                                        class="input-large"
                                        />
                                </div>
                            </div>

                        </fieldset>
                        <h4 class="subheader  " >
                            Permissions
                        </h4>

                        <section class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" class="tasks-list-cb" id="perm_orders" name="companies1_data[orders]" value="1"
                                           {$companies1_data.orders_checked}>

                                    <span class="tasks-list-desc">Order Taking</span><p>Accept, Edit & Cancel Orders. See order history</p>
                                </label>
                            </fieldset>
                        </section>

                        <section class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" class="tasks-list-cb" id="perm_catalog" name="companies1_data[catalog]" value="1" {$companies1_data.catalog_checked}>

                                    <span class="tasks-list-desc">Catalogue Management </span><p>Make item out of stock, List Products</p>
                                </label>
                            </fieldset>
                        </section>

                        <section class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" class="tasks-list-cb" id="perm_users" name="companies1_data[users]" value="1"
                                           {$companies1_data.users_checked}>

                                           <span class="tasks-list-desc">User Management </span><p>Create logins & permissions for staffs</p>
                                </label>
                            </fieldset>
                        </section>

                        <section class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" class="tasks-list-cb" id="perm_metrics" name="companies1_data[metrics]" value="1"
                                           {$companies1_data.metrics_checked}>

                                    <span class="tasks-list-desc">Business Metrics</span><p>Analyze reports & metrics of your business</p>
                                </label>
                            </fieldset>
                        </section>

                        <section class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" class="tasks-list-cb" id="perm_discounts" name="companies1_data[discounts]" value="1"
                                           {$companies1_data.discounts_checked}>

                                    <span class="tasks-list-desc">My Discounts</span><p>Help's to create trade discount</p>
                                </label>
                            </fieldset>
                        </section>
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
<script>
     $("#user_role").on('change', function () {
    var val = $(this).val();
    if (val === " " || val === "" || val === "o" || val === "m") {
        $('#checkbox1').prop('checked', false);
        return;
    }
    $('#perm_orders').prop('checked', true);
    $('#perm_catalog').prop('checked', true);
    $('#perm_metrics').prop('checked', false);
    $('#perm_discounts').prop('checked', false);
    $('#perm_users').prop('checked', false);
});
  $("#user_role").on('change', function () {
    var val = $(this).val();
    if (val === " " || val === "" || val === "s" || val === "m") {
        $('#checkbox1').prop('checked', false);
        return;
    }
    $('#perm_orders').prop('checked', true);
    $('#perm_catalog').prop('checked', true);
    $('#perm_metrics').prop('checked', true);
    $('#perm_discounts').prop('checked', true);
    $('#perm_users').prop('checked', true);
});
$("#user_role").on('change', function () {
    var val = $(this).val();
    if (val === " " || val === "" || val === "s" || val === "o") {
        $('#checkbox1').prop('checked', false);
        return;
    }
    $('#perm_orders').prop('checked', true);
    $('#perm_catalog').prop('checked', true);
    $('#perm_metrics').prop('checked', false);
    $('#perm_discounts').prop('checked', false);
    $('#perm_users').prop('checked', false);
});
$("#user_role").on('change', function () {
    var val = $(this).val();
    if (val === " " || val === "m" || val === "s" || val === "o") {
        $('#checkbox1').prop('checked', false);
        return;
    }
    $('#perm_orders').prop('checked', false);
    $('#perm_catalog').prop('checked', false);
    $('#perm_metrics').prop('checked', false);
    $('#perm_discounts').prop('checked', false);
    $('#perm_users').prop('checked', false);
});
</script>

<!-- Inline script moved to the bottom of the page -->

