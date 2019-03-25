@extends('template_two')

@section('main')
    <main>
        <div class="whole-section sect_home" ng-controller="home_owl" ng-cloak>
            <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
                <div class="panel">
                    <div id="discovery-container" class="pad-sm-20" style="float:left;width:100%;">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="no-mar-sm" style="margin-top: 94px;">
                                <div class="textHeaderContainerMarginTop_13o8qr2-o_O-textHeaderContainerWidth_peyti4 row-space-7">
                                    <h1 class="textHeader_8yxs9w">
                                        <span class="textHeaderTitle_153t78d-o_O-textHeader_rausch_hp6jb4">{{ $site_name }} </span>
                                        <!-- react-text: 7341 --><br>
                                        {{ trans('messages.home.desc') }}
                                        <!-- /react-text -->
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 hide-sm">
                            <div class="container_e4p5a8"><!-- react-empty: 18439 -->
                                <form action="{{ url('s') }}" class="simple-search" method="get" id="searchbar-form"
                                      name="simple-search">
                                    <div class="container_1tvwao0">
                                        <div class="container_mv0xzc" style="width: 100%;">
                                            <div class="label_1om3jpt">{{ trans('messages.header.where') }}</div>
                                            <div class="largeGeocomplete_1g20x4k">
                                                <div class="container_gor68n">
                                                    <div>
                                                        <div class="container_e296pg">
                                                            <div class="container_36rlri-o_O-block_r99te6">
                                                                <label class="label_hidden_1m8bb6v">{{ trans('messages.header.where') }}</label>
                                                                <div class="container_ssgg6h-o_O-container_noMargins_18e9acw-o_O-borderless_mflkgb-o_O-block_r99te6">
                                                                    <div class="inputContainer_178faes">
                                                                        <input autocomplete="off"
                                                                               class="input_70aky9-o_O-input_book_f17nnd-o_O-input_ellipsis_1bgueul-o_O-input_defaultPlaceholder_jsyynz"
                                                                               id="header-search-form" name="location"
                                                                               placeholder="{{ trans('messages.header.anywhere') }}"
                                                                               value="" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="focusUnderline_7131v4"></div>
                                        </div>
                                        <div class="container_mv0xzc-o_O-borderLeft_1ujj4hk-o_O-borderRight_1x9yfnn"
                                             style="width: 100%;">
                                            <div class="label_1om3jpt">{{ trans('messages.header.when') }}</div>
                                            <div class="webcot-lg-datepicker webcot-lg-datepicker--jumbo">
                                                <div class="dateRangePicker_e296pg-o_O-hidden_ajz5vs">
                                                    <div class="DateRangePickerDiv">
                                                        <div>
                                                            <div class="DateRangePickerInput">
                                                                <div class="DateInput">
                                                                    <input aria-label="Check In"
                                                                           class="DateInput__input needsclick"
                                                                           id="checkin" name="checkin" value=""
                                                                           placeholder="{{ trans('messages.header.checkin') }}"
                                                                           autocomplete="off"
                                                                           aria-describedby="DateInput__screen-reader-message-startDate"
                                                                           type="text">
                                                                    <div class="DateInput__display-text">{{ trans('messages.header.checkin') }}</div>
                                                                </div>
                                                                <div class="DateRangePickerInput__arrow" aria-hidden="true" role="presentation">-</div>
                                                                <div class="DateInput">
                                                                    <input aria-label="Check Out"
                                                                           class="DateInput__input needsclick"
                                                                           id="checkout" name="checkout" value=""
                                                                           placeholder="{{ trans('messages.header.checkout') }}"
                                                                           autocomplete="off"
                                                                           aria-describedby="DateInput__screen-reader-message-endDate"
                                                                           type="text">
                                                                    <div class="DateInput__display-text">{{ trans('messages.header.checkout') }}</div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="button" tabindex="-1"
                                                            class="button_1b5aaxl-o_O-button_large_c3pob4">
                                                        <span class="icon_12hl23n"></span>
                                                        <span class="copy_14aozyc-o_O-copy_fakePlaceholder_10k87om">{{ trans('messages.header.anytime') }}</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="focusUnderline_7131v4">

                                            </div>
                                        </div>
                                        <div class="container_mv0xzc" style="width: 100%;">
                                            <div class="search_guest">
                                                <div class="label_1om3jpt col-md-12 padding_left"> {{ trans('messages.header.guest') }} </div>
                                                <select id="guests" name="guests" class="gst gst_icon col-md-12 ">
                                                    @for($i=1;$i<=16;$i++)
                                                        <option value="{{ $i }}"> {{ ($i == '16') ? $i.'+ '.trans_choice('messages.home.guest',$i) : $i.' '.trans_choice('messages.home.guest',$i) }} </option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="save_search">
                                                <div class="container_mv0xzc save_but_block">
                                                    <!-- react-text: 18478 -->
                                                    <!-- /react-text -->
                                                    <button type="submit" class="btn btn-primary searchButton_n8fchz">
                                                        <span>{{ trans('messages.home.search') }}</span>
                                                    </button>
                                                    <div class="focusUnderline_7131v4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="focusUnderline_7131v4">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile view header -->
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 show-sm hide-md viedat">
                    <div class="searchBarWrapper_1aq8p3r">
                        <div class="container_puzkdo">
                            <div>
                                <div data-id="SearchBarSmall" class="container_1tvwao0">
                                    <div class="container_mv0xzc" style="width: 100%;">

                                        <button type="button" class="button_1b5aaxl button-sm-search">
                                            <span class="icon_12hl23n">
                                              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                                   style="display: block; fill: currentcolor; height: 18px; width: 18px;"><path
                                                          fill-rule="nonzero"></path></svg>
                                            </span>
                                            <span class="copy_14aozyc">
                                                {{ trans('messages.header.anywhere') }} · {{ trans('messages.header.anytime') }} · 1 {{ trans('messages.header.guest') }}
                                            </span>
                                        </button>
                                        <div class="focusUnderline_7131v4"></div>
                                    </div>
                                </div><!-- react-empty: 29505 -->
                            </div>
                        </div>
                    </div>


                    <div class="panel-drop-down hide-drop-down" style="z-index: 2000;">
                        <div class="panelContent_1jzf86v">
                            <div class="container_gvf938-o_O-container_dropdown_bed46g">
                                <div class="left_egy8rd">
                                    <button aria-haspopup="false" aria-expanded="false" class="container_1rp5252"
                                            type="button" style="padding: 20px; margin: -20px;">
                                        <svg viewBox="0 0 18 18" role="img" aria-label="Close" focusable="false"
                                             style="display: block; fill: rgb(72, 72, 72); height: 16px; width: 16px;">
                                            <path fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="right_8ydhe">
                                    <div class="text_5mbkop-o_O-size_small_1gg2mc">
                                        <button aria-disabled="false" class="component_9w5i1l-o_O-component_button_r8o91c" type="button">
                                            <span>Clear all</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="body_1sn4o6s-o_O-body_dropdown_7xdft6 arrow-button">
                                <button type="button"
                                        class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                            <span class="icon_12hl23n">
                              <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                   style="display: block; fill: currentcolor; height: 1em; width: 1em;"><g
                                          fill-rule="evenodd"><path></path></g></svg>
                            </span>
                                    <span class="copy_14aozyc">
                              <span>{{ trans('messages.header.anywhere') }}</span></span>
                                </button>
                                <div style="margin-top: 16px; margin-bottom: 16px;">
                                    <button type="button"
                                            class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                                <span class="icon_12hl23n">
                                  <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                       style="display: block; fill: currentcolor; height: 1em; width: 1em;"><path></path></svg>
                                </span>
                                        <span class="copy_14aozyc">{{ trans('messages.header.anytime') }}</span>
                                    </button>
                                </div>
                                <button type="button"
                                        class="button_1b5aaxl-o_O-button_border_hu7ym7-o_O-button_large_c3pob4">
                              <span class="icon_12hl23n">
                                <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"
                                     style="display: block; fill: currentcolor; height: 1em; width: 1em;"><path></path></svg>
                              </span>
                                    <span class="copy_14aozyc"><span><span>1 {{ trans('messages.header.guest') }}</span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="home-menu">
                        <li>
                            <a class="foryou current" href="{{ url('/') }}">{{ trans('messages.header.for_you') }}</a>
                        </li>
                        <li>
                            <a class="homes" href="{{ url('/s?current_refinement=Homes') }}">{{ trans('messages.header.homes') }} </a>
                        </li>
                        {{--HostExperienceBladeCommentStart
                        <li><a class="experiences" href="{{ url('/s?current_refinement=Experiences') }}">{{ trans('experiences.home.experiences') }} </a></li>
                        HostExperienceBladeCommentEnd--}}
                    </ul>
                </div>
                <div class="lazy-load-div1 lazy-load1 col-md-12 col-lg-12 col-sm-12 col-xs-12  p-0" id="lazy_load_slider">
                    {{--HostExperienceBladeCommentStart
                    @include('host_experiences.home_slider', ['title_text'=> trans('experiences.home.experiences'), 'see_all_link' => url('s?current_refinement=Experiences'),'category_id'=> 'all_exp' ])
                    HostExperienceBladeCommentEnd--}}
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="reservation.length > 0">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl"
                             style="padding:0; margin: 45px 0 15px;">
                            <h3 class="rowHeader pull-left">
                                <!-- react-text: 38121 -->{{ trans('messages.header.justbooked') }}<!-- /react-text --></h3>
                            <div class="seeMoreContainer_11b8zgn pull-right">

                                <a href="{{ url('s') }}" ng-if="reservation.length > 3">
                                    <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                                        <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span></span>
                                        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true"
                                             focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path>
                                        </svg>
                                    </button>
                                </a>

                            </div>
                        </div>

                        <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                             style="position:relative;padding:0px;">

                            <div class="owl-carousel cate1">
                                <div class="cateimg" ng-repeat="fetch_data in reservation">

                                    <a href=" @{{ url+fetch_data.room_id }}">
                                        <img ng-src="@{{ fetch_data.rooms.photo_name }} ">
                                    </a>

                                    <div class="panel-body panel-card-section">
                                        <div class="media">
                                            <div class="category_city hm_cate">
                                                <span class="pull-left">@{{ fetch_data.rooms.room_type_name }}</span>
                                                <span class="pull-left dot-cont">·</span>
                                                <span class="pull-left">@{{ fetch_data.rooms.beds }} @{{ fetch_data.rooms.bed_lang }}</span>
                                            </div>

                                            <a href=" @{{ url+fetch_data.room_id }}" target="listing_10001"
                                               class="text-normal" style="text-decoration:none !important;">
                                                <h3 title="@{{ fetch_data.rooms.name}}" itemprop="name"
                                                    class="h5 listing-name text-truncate row-space-top-1"
                                                    style="width:95%;" ng-if=" fetch_data.rooms.name">

                                                    @{{ fetch_data.rooms.name}}

                                                </h3>
                                            </a>
                                            <div class="exp_price">
                                                <span ng-bind-html="fetch_data.currency.symbol"></span>
                                                @{{ fetch_data.rooms.rooms_price.night }}
                                                {{ trans("messages.rooms.per_night") }}
                                                <span ng-if="fetch_data.rooms.booking_type == 'instant_book'">
                                                    <i class="icon icon-instant-book icon-beach"></i>
                                                </span>
                                            </div>
                                            <div itemprop="description"
                                                 class="pull-left text-muted rt_set listing-location text-truncate">
                                                <a href=" @{{ url+fetch_data.room_id }}" class="text-normal link-reset pull-left ">
                                                    <span class="pull-left" ng-bind-html="fetch_data.rooms.overall_star_rating"></span>
                                                </a>
                                                <a href=" @{{ url+fetch_data.room_id }}">
                                                    <span class="pull-left mr_mb" style="padding-left: 5px;">
                                  <span class="pull-left r-count ng-binding " ng-if="fetch_data.rooms.reviews_count > 0"
                                        style="font-size:15px;color:#555;"> @{{ fetch_data.rooms.reviews_count }} </span>
                                  <span ng-if="fetch_data.rooms.overall_star_rating!=''"
                                        class="pull-left r-label ng-binding" style="font-size:12px;color:#555;">
                                    @{{ fetch_data.rooms.reviews_count_lang }}
                                  </span>
                                </span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="recommented.length >0">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl "
                             style="padding:0px;     margin: 45px 0px 15px;">
                            <h3 class="rowHeader pull-left">
                                <!-- react-text: 38121 -->{{ trans('messages.header.recommend') }}<!-- /react-text --></h3>
                            <div class="seeMoreContainer_11b8zgn pull-right">

                                <a href="{{ url('s') }}" ng-if="recommented.length > 3">
                                    <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">

                                        <span class="text_13lu1ne"> <span>{{ trans('messages.header.seeall') }}</span></span>


                                        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true"
                                             focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path>
                                        </svg>
                                    </button>
                                </a>

                            </div>
                        </div>
                        <div class="home-bx-slider1 col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                             style="position:relative;padding:0px;">

                            <div class="owl-carousel cate2">

                                <div class="cateimg" ng-repeat="reservation in recommented">
                                    <a href=" @{{ url+reservation.id }}"><img ng-src="@{{ reservation.photo_name }}"/></a>

                                    <div class="panel-body panel-card-section">
                                        <div class="media">
                                            <div class="category_city hm_cate">
                                                <span class="pull-left">@{{ reservation.room_type_name }}</span>
                                                <span class="pull-left dot-cont">·</span>
                                                <span class="pull-left">@{{ reservation.beds }} @{{ reservation.bed_lang }}</span>
                                            </div>
                                            <a href=" @{{ url+reservation.id }}" target="listing_10001"
                                               class="text-normal" style="text-decoration:none !important;">
                                                <h3 title="@{{reservation.name}}" itemprop="name"
                                                    class="h5 listing-name text-truncate row-space-top-1 ng-binding"
                                                    style="width:95%;">
                                                    @{{ reservation.name}}
                                                </h3>
                                            </a>
                                            <div class="exp_price">
                                                <span ng-bind-html="reservation.rooms_price.currency.symbol"></span>
                                                @{{reservation.rooms_price.night }}
                                                {{ trans("messages.rooms.per_night") }}

                                                <span ng-if="reservation.booking_type == 'instant_book'">
                                                    <i class="icon icon-instant-book icon-beach"></i>
                                                </span>

                                            </div>
                                            <div itemprop="description"
                                                 class="rt_set pull-left text-muted listing-location text-truncate"><a
                                                        href="" class="text-normal link-reset pull-left">

                            <span class="pull-left">
                              <span class="pull-left ng-binding" ng-bind-html="reservation.overall_star_rating">
                              </span>
                            </span>

                                                    <span class="pull-left" style="padding-left: 5px;color:#555;">
                              <a href=" @{{ url+reservation.id }}">
                                <span ng-if="reservation.reviews_count > 0" class="pull-left r-count ng-binding"
                                      style="font-size:15px;color:#555;">
                                  @{{ reservation.reviews_count }}
                                </span><span ng-if="reservation.overall_star_rating"
                                             class="pull-left r-label ng-binding" style="color:#555;">
                                @{{ reservation.reviews_count_lang }}
                              </span>
                            </a>
                          </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 nwt_slid p-0" ng-if="most_viewed.length > 0">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 newsl"
                             style="padding:0px;     margin: 45px 0px 15px;">
                            <h3 class="rowHeader pull-left">
                                <!-- react-text: 38121 -->{{ trans('messages.header.most_viewed') }}<!-- /react-text -->
                            </h3>
                            <div class="seeMoreContainer_11b8zgn pull-right">

                                <a href="{{ url('s') }}" ng-if="most_viewed.length > 3">
                                    <button class="button_ops1o9-o_O-text_13lu1ne-o_O-button_flushRight_s5eog0">
                                        <span class="text_13lu1ne"><span>{{ trans('messages.header.seeall') }}</span> </span>
                                        <svg viewBox="0 0 18 18" role="presentation" aria-hidden="true"
                                             focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z"></path>
                                        </svg>
                                    </button>
                                </a>

                            </div>
                        </div>
                        <div class="home-bx-slider col-md-12 col-lg-12 col-sm-12 col-xs-12 "
                             style="position:relative;padding:0px;">
                            <div class="owl-carousel cate3">

                                <div class="cateimg" ng-repeat="view_count in most_viewed">
                                    <a href=" @{{ url+view_count.id }}"><img ng-src="@{{ view_count.photo_name}}"/></a>
                                    <div class="panel-body panel-card-section">
                                        <div class="media">
                                            <div class="category_city hm_cate">
                                                <span class="pull-left">@{{ view_count.room_type_name }}</span>
                                                <span class="pull-left dot-cont">·</span>
                                                <span class="pull-left">@{{ view_count.beds }} @{{ view_count.bed_lang }}</span>
                                            </div>
                                            <a href=" @{{ url+view_count.id }}" target="listing_10001" class="text-normal" style="text-decoration:none !important;">
                                                <h3 title="@{{view_count.name}}" itemprop="name"
                                                    class="h5 listing-name text-truncate row-space-top-1 ng-binding"
                                                    style="width:95%;">
                                                    @{{view_count.name}}
                                                </h3>
                                            </a>
                                            <div class="exp_price">
                                                <span ng-bind-html=" view_count.rooms_price.currency.symbol"></span>
                                                @{{ view_count.rooms_price.night }}
                                                {{ trans("messages.rooms.per_night") }}

                                                <span ng-if="view_count.booking_type == 'instant_book'">
                                                    <i class="icon icon-instant-book icon-beach"></i>
                                                </span>

                                            </div>
                                            <div itemprop="description"
                                                 class="rt_set pull-left text-muted listing-location text-truncate">
                                                <a href="" class="text-normal link-reset pull-left">
                                                    <span class="pull-left">

                                                        <span class="pull-left ng-binding" ng-bind-html=" view_count.overall_star_rating"></span>
                                                    </span>
                                                </a>
                                                <a href=" @{{ url+view_count.id }}">
                                                    <span class="pull-left rw_view" style="padding-left: 5px; ">
                                                        <span ng-if="view_count.reviews_count" class="pull-left r-count ng-binding" style="font-size:15px;color:#555;"> @{{ view_count.reviews_count }}</span>
                                                        <span ng-if="view_count.overall_star_rating" class="pull-left r-label ng-binding" style="font-size:12px;color:#555;">
                                                            @{{ view_count.reviews_count_lang }}
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="discovery-section explore_community exploer_banner page-container-no-padding" id="discover-recommendations" ng-init="city_count=city_count-1 ;">
                    <div class="section-intro text-center row-space-6 row-space-top-8" ng-if="home_city_explore.length!=0">
                        <h2 class="row-space-1">
                            <strong>{{ trans('messages.home.explore_world') }}</strong>
                        </h2>
                        <p class="text-lead">
                            {{ trans('messages.home.explore_desc') }}
                        </p>
                    </div>
                    <div class="discovery-tiles">
                        <div class="row">
                            <div ng-repeat="explore in home_city_explore " ng-init="j=6;x=7">
                                <div ng-class="$index % 10 == 0 || $index == j || $index == j+10 ? 'col-lg-8 col-md-6 col-sm-12 rm-padding-sm' : 'col-lg-4 col-md-6 col-sm-12 rm-padding-sm'">
                                    <div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image:url('@{{ explore.image_url }}');">
                                        <a href="@{{ explore.search_url }}" class="link-reset" data-hook="discovery-card">
                                            <div class="va-container va-container-v va-container-h">
                                                <div class="va-middle text-center text-contrast">
                                                    <div class="h2">
                                                        <strong>
                                                            @{{ explore.name }}
                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 our-community p-0">
                    <div class="row">
                        <div class="discovery-section explore_community page-container-responsive page-container-no-padding"
                             style="padding:0px;">
                            <div class="col-lg-12 nopad text-center" style="padding: 0;" ng-if="our_community.length!=0">
                                <h2 class="row-space-1" style="padding:30px 0px 15px;">
                                    <strong>
                                        {{trans('messages.home.our_community')}}
                                    </strong>
                                </h2>
                                <div class="col-lg-4 pos-rel com-img pad-left col-md-4 new_our_community"
                                     ng-repeat="our_community in our_community ">
                                    <div class="por_ab">
                                        <a class="com-link-img" href="@{{our_community.link}}" target="_blank"
                                           style="background: url(@{{our_community.image_url}});">
                                        </a>
                                        <div class="com-header">
                                            <!-- <a>Travelling</a> -->
                                        </div>
                                        <div class="com-sub">
                                            <h2 class="over-head" style="width:90% !important;">
                                                @{{our_community.title}}
                                            </h2>
                                            <p class="over-head" style="width:90% !important;"
                                               ng-bind-html="our_community.description">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer list of country start-->
        <div class="whole-section sect_home" style="background-color: #0e6cb5;">
            <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
                <div class="col-lg-12 col-md-12 col-sm-12 our-community p-0">
                    <div class="row">
                        <div class="discovery-section explore_community page-container-responsive page-container-no-padding" style="padding:0;">
                            <div class="col-lg-12 nopad text-center" style="padding: 0;margin-bottom: 50px">
                                <div style="margin-top: 40px">
                                    <div class="text-left">
                                        <strong  style="color: white;font-size: 22px">Explore RV Rentals By State</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Alabama
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Alaska
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Arizona
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Arkansas
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                California
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Colorado
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Connecticut
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Delaware
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                District of Columbia
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Florida
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Georgia
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Hawaii
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Idaho
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Illinois
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Indiana
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Iowa
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Kansas
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Kentucky
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Louisiana
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Maine
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Maryland
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Massachusetts
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Michigan
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Minnesota
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Mississippi
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Missouri
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Montana
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Nebraska
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Nevada
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                New Hampshire
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                New Jersey
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                New Mexico
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                New York
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                North Carolina
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                North Dakota
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Ohio
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Oklahoma
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Oregon
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Pennsylvania
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Rhode Island
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                South Carolina
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                South Dakota
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Tennessee
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Texas
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Utah
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Vermont
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Virginia
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Washington
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                West Virginia
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Wisconsin
                                            </a>
                                        </div>
                                        <div  align="left" class="link-column">
                                            <a href="#" style="color: white;font-size: 16px">
                                                Wyoming
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer list of country end-->
        </div>
    </main>
@stop



