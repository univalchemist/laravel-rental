@extends('template_two')

@section('main')
    {{--<div class="flash-container"></div>--}}
    <main id="site-content" role="main" ng-controller="search-page" ng-init="setParams()">
        <div class="whole-section sect_home">
            <div class="page-container-responsive new-page-container mini-rel-top row-space-top-1">
                <div class="panel">
                    <div id="discovery-container" class="pad-sm-20" style="float:left;width:100%;">
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
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top: 50px;">
                    <div class="row">
                        <!-- side bar -->
                        <div class="col-lg-3 col-md-4 show-out-md">
                            <div class="left-sidebar">
                                <div class="left-sidebar-container-1">
                                    <div class="left-side-bar-title">
                                        Price
                                    </div>
                                    <div class="left-sidebar-dropdown-container">
                                        <div class="select-container" style="z-index: 80">
                                            <select class="selectpicker">
                                                <option>Min</option>
                                                <option>$75</option>
                                                <option>$150</option>
                                                <option>$200</option>
                                                <option>$250</option>
                                            </select>
                                        </div>
                                        <div class="select-container" style="z-index: 80">
                                            <select class="selectpicker">
                                                <option>Max</option>
                                                <option>$75</option>
                                                <option>$150</option>
                                                <option>$200</option>
                                                <option>$250+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-line-fluid"></div>

                                <div class="left-sidebar-container-2">
                                        <div class="left-side-bar-title">
                                            Type of Room
                                            <span class="glyphicon glyphicon-question-sign"></span>
                                        </div>
                                        @foreach($room_types as $row)
                                            <div class="rv-type-container">
                                                <input type="checkbox" value="{{ $row->id }}" id="room_type_{{ $row->id }}"
                                                       class=""
                                                        {{in_array($row->id, $room_type_selected)  ? "checked" : ""}} />
                                                <label class="search_check_label" for="room_type_{{ $row->id }}">{{ $row->name }}</label>
                                            </div>
                                        @endforeach
                                </div>
                                <div class="divider-line"></div>

                                <div class="left-sidebar-container-3">
                                    <div class="left-side-bar-title">
                                        {{ trans('messages.lys.amenities') }}
                                    </div>
                                    @php $type_num = 1 @endphp
                                    @foreach($amenities as $row_amenities)

                                        @if($type_num < 5)
                                            <div class=" rv-type-container">
                                                <input type="checkbox" id="mob_amenities_{{ $row_amenities->id }}"
                                                       value="{{ $row_amenities->id }}"
                                                       class="amenities" {{in_array($row_amenities->id, $amenities_selected) ? 'checked' : ''}} />
                                                <label class="search_check_label"
                                                       for="mob_amenities_{{ $row_amenities->id }}">{{ $row_amenities->name }}</label>
                                            </div>
                                        @else
                                            @if($type_num == 5)
                                                <div class="rv-type-more-tab">
                                                    <div class="rv-type-more-less-button">See more...</div>
                                                    <div class="rv-type-more-container">
                                            @endif
                                                <div class="rv-type-container">
                                                    <input type="checkbox" id="mob_amenities_{{ $row_amenities->id }}"
                                                           value="{{ $row_amenities->id }}"
                                                           class="amenities" {{in_array($row_amenities->id, $amenities_selected) ? 'checked' : ''}} />
                                                    <label class="search_check_label"
                                                           for="mob_amenities_{{ $row_amenities->id }}">{{ $row_amenities->name }}</label>
                                                </div>
                                        @endif

                                        @php $type_num++ @endphp
                                    @endforeach
                                            @if($type_num > 4)
                                                    </div>
                                                    <div class="rv-type-more-less-button" style="display: none">See less</div>
                                                </div >
                                            @endif

                                </div>
                                <div class="divider-line"></div>

                                <div class="left-sidebar-container-4">
                                    <div class="left-side-bar-title">
                                        {{ trans('messages.lys.property_type') }}
                                    </div>
                                    @php $property_num = 1 @endphp
                                    @foreach($property_type_dropdown as $row_property_type)
                                        @if($property_num < 5)
                                        <div class="rv-property-container">
                                            <input type="checkbox"
                                                   id="property_{{ $row_property_type->id }}"
                                                   value="{{ $row_property_type->id }}"
                                                   class="property_type" {{(in_array($row_property_type->id, $property_type_selected)) ? 'checked' : ''}} />
                                            <label class="search_check_label"
                                                   for="property_{{ $row_property_type->id }}">
                                                {{ $row_property_type->name }}
                                            </label>
                                        </div>
                                        @else
                                            @if($property_num == 5)
                                                <div class="rv-property-more-tab">
                                                    <div class="rv-property-more-less-button">See more...</div>
                                                    <div class="rv-property-more-container">
                                            @endif
                                                <div class=" rv-type-container">
                                                    <input type="checkbox"
                                                           id="property_{{ $row_property_type->id }}"
                                                           value="{{ $row_property_type->id }}"
                                                           class="property_type" {{(in_array($row_property_type->id, $property_type_selected)) ? 'checked' : ''}} />
                                                    <label class="search_check_label"
                                                           for="property_{{ $row_property_type->id }}">
                                                        {{ $row_property_type->name }}
                                                    </label>
                                                </div>
                                        @endif

                                        @php $property_num++ @endphp
                                    @endforeach
                                    @if($property_num > 4)
                                                    </div>
                                                    <div class="rv-property-more-less-button" style="display: none">See less</div>
                                                </div >
                                    @endif
                                </div>

                                <div class="divider-line-fluid"></div>

                                <div class="left-sidebar-container-5">
                                    <div class="guests-container">
                                        <div class="left-side-bar-title">
                                            Guests
                                        </div>
                                        <div class="left-sidebar-dropdown-container">
                                            <div class="select-container" style="z-index: 70">
                                                <select class="selectpicker">
                                                    <option>1+</option>
                                                    <option>2+</option>
                                                    <option>3+</option>
                                                    <option>4+</option>
                                                    <option>5+</option>
                                                    <option>6+</option>
                                                    <option>7+</option>
                                                    <option>8+</option>
                                                    <option>9+</option>
                                                    <option>10+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider-line-fluid"></div>

                                <div class="left-sidebar-container-6">
                                    <div class="additional-filters-container">
                                        <div class="left-side-bar-title">
                                            Additional Filters
                                        </div>
                                        <div class="rv-type-container">
                                            <input type="checkbox" name="filter_instant_book" id="filter_instant_book">
                                            <label for="filter_instant_book" class="search_check_label">
                                                <span class="glyphicon glyphicon-flash" style="color: #f6bc16!important"></span>
                                                Instant Book
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="main-header">
                                    <div class="some-title">
                                        Temecula - 509 RV Rentals
                                    </div>
                                    <div class="sort-order-container">
                                        <button data-toggle="modal" data-target="#filter-modal" class="btn btn-default filter-btn show-in-md">
                                            <span class="glyphicon glyphicon-filter"></span>
                                            <span>Filters</span>
                                        </button>
                                        <select class="selectpicker">
                                            <option value="3">Distance: Closest First</option>
                                            <option value="5">Price: Low to High</option>
                                            <option value="6">Price: High to Low</option>
                                            <option value="7">Sleeps: Least to Most</option>
                                            <option value="8">Sleeps: Most to Least</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="main-container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 item-container">
                                        <div class="card-search">
                                            <div class="card-image-container">
                                                <img class="card-img-top img-responsive" src="{{asset('images/city_new2.jpg')}}" alt="Card image cap">
                                                <div class="item-like">
                                                    <span class="glyphicon glyphicon-heart-empty"></span>
                                                </div>
                                                <div class="card-label">
                                                    <div class="glyphicon glyphicon-flash"></div>
                                                    <div class="label-text">Instant Booking</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-title-container">
                                                    <div class="card-title">
                                                        $135
                                                    </div>
                                                    <div class="card-button">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            View This RV
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-description">
                                                    Forest River Heritage Glen Wildwood 314
                                                </div>
                                                <div class="card-short-description">
                                                    1.7 miles from Shenyang
                                                </div>
                                                <div class="card-short-description">
                                                    Travel Trailer / Sleep 8
                                                </div>
                                                <div class="card-star-body">
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star card-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty card-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="filter-modal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="display: flex">
                                    <h4 class="modal-title" style="flex: 1">Filters</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body form-inline">
                                    <div class="left-sidebar">
                                        <div class="left-sidebar-container-1">
                                            <div class="left-side-bar-title">
                                                Price
                                            </div>
                                            <div class="left-sidebar-dropdown-container">
                                                <div class="select-container" style="z-index: 80">
                                                    <select class="selectpicker">
                                                        <option>Min</option>
                                                        <option>$75</option>
                                                        <option>$150</option>
                                                        <option>$200</option>
                                                        <option>$250</option>
                                                    </select>
                                                </div>
                                                <div class="select-container" style="z-index: 80">
                                                    <select class="selectpicker">
                                                        <option>Max</option>
                                                        <option>$75</option>
                                                        <option>$150</option>
                                                        <option>$200</option>
                                                        <option>$250+</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider-line-fluid"></div>

                                        <div class="left-sidebar-container-2">
                                            <div class="left-side-bar-title">
                                                Type of Room
                                                <span class="glyphicon glyphicon-question-sign"></span>
                                            </div>
                                            @foreach($room_types as $row)
                                                <div class="rv-type-container">
                                                    <input type="checkbox" value="{{ $row->id }}" id="room_type_{{ $row->id }}"
                                                           class=""
                                                            {{in_array($row->id, $room_type_selected)  ? "checked" : ""}} />
                                                    <label class="search_check_label" for="room_type_{{ $row->id }}">{{ $row->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="divider-line"></div>

                                        <div class="left-sidebar-container-3">
                                            <div class="left-side-bar-title">
                                                {{ trans('messages.lys.amenities') }}
                                            </div>
                                            @php $type_num = 1 @endphp
                                            @foreach($amenities as $row_amenities)

                                                @if($type_num < 5)
                                                    <div class=" rv-type-container">
                                                        <input type="checkbox" id="mob_amenities_{{ $row_amenities->id }}"
                                                               value="{{ $row_amenities->id }}"
                                                               class="amenities" {{in_array($row_amenities->id, $amenities_selected) ? 'checked' : ''}} />
                                                        <label class="search_check_label"
                                                               for="mob_amenities_{{ $row_amenities->id }}">{{ $row_amenities->name }}</label>
                                                    </div>
                                                @else
                                                    @if($type_num == 5)
                                                        <div class="rv-type-more-tab">
                                                            <div class="rv-type-more-less-button">See more...</div>
                                                            <div class="rv-type-more-container">
                                                                @endif
                                                                <div class="rv-type-container">
                                                                    <input type="checkbox" id="mob_amenities_{{ $row_amenities->id }}"
                                                                           value="{{ $row_amenities->id }}"
                                                                           class="amenities" {{in_array($row_amenities->id, $amenities_selected) ? 'checked' : ''}} />
                                                                    <label class="search_check_label"
                                                                           for="mob_amenities_{{ $row_amenities->id }}">{{ $row_amenities->name }}</label>
                                                                </div>
                                                                @endif

                                                                @php $type_num++ @endphp
                                                                @endforeach
                                                                @if($type_num > 4)
                                                            </div>
                                                            <div class="rv-type-more-less-button" style="display: none">See less</div>
                                                        </div >
                                                    @endif

                                        </div>
                                        <div class="divider-line"></div>

                                        <div class="left-sidebar-container-4">
                                            <div class="left-side-bar-title">
                                                {{ trans('messages.lys.property_type') }}
                                            </div>
                                            @php $property_num = 1 @endphp
                                            @foreach($property_type_dropdown as $row_property_type)
                                                @if($property_num < 5)
                                                    <div class="rv-property-container">
                                                        <input type="checkbox"
                                                               id="property_{{ $row_property_type->id }}"
                                                               value="{{ $row_property_type->id }}"
                                                               class="property_type" {{(in_array($row_property_type->id, $property_type_selected)) ? 'checked' : ''}} />
                                                        <label class="search_check_label"
                                                               for="property_{{ $row_property_type->id }}">
                                                            {{ $row_property_type->name }}
                                                        </label>
                                                    </div>
                                                @else
                                                    @if($property_num == 5)
                                                        <div class="rv-property-more-tab">
                                                            <div class="rv-property-more-less-button">See more...</div>
                                                            <div class="rv-property-more-container">
                                                                @endif
                                                                <div class=" rv-type-container">
                                                                    <input type="checkbox"
                                                                           id="property_{{ $row_property_type->id }}"
                                                                           value="{{ $row_property_type->id }}"
                                                                           class="property_type" {{(in_array($row_property_type->id, $property_type_selected)) ? 'checked' : ''}} />
                                                                    <label class="search_check_label"
                                                                           for="property_{{ $row_property_type->id }}">
                                                                        {{ $row_property_type->name }}
                                                                    </label>
                                                                </div>
                                                                @endif

                                                                @php $property_num++ @endphp
                                                                @endforeach
                                                                @if($property_num > 4)
                                                            </div>
                                                            <div class="rv-property-more-less-button" style="display: none">See less</div>
                                                        </div >
                                                    @endif
                                        </div>

                                        <div class="divider-line-fluid"></div>

                                        <div class="left-sidebar-container-5">
                                            <div class="guests-container">
                                                <div class="left-side-bar-title">
                                                    Guests
                                                </div>
                                                <div class="left-sidebar-dropdown-container">
                                                    <div class="select-container" style="z-index: 70">
                                                        <select class="selectpicker">
                                                            <option>1+</option>
                                                            <option>2+</option>
                                                            <option>3+</option>
                                                            <option>4+</option>
                                                            <option>5+</option>
                                                            <option>6+</option>
                                                            <option>7+</option>
                                                            <option>8+</option>
                                                            <option>9+</option>
                                                            <option>10+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="divider-line-fluid"></div>

                                        <div class="left-sidebar-container-6">
                                            <div class="additional-filters-container">
                                                <div class="left-side-bar-title">
                                                    Additional Filters
                                                </div>
                                                <div class="rv-type-container">
                                                    <input type="checkbox" name="filter_instant_book" id="filter_instant_book">
                                                    <label for="filter_instant_book" class="search_check_label">
                                                        <span class="glyphicon glyphicon-flash" style="color: #f6bc16!important"></span>
                                                        Instant Book
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-primary" style="width: 100%">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
@section('script')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.rv-type-more-less-button', function () {
                $('.rv-type-more-container').slideToggle(500);
                $('.rv-type-more-less-button').fadeToggle(500);
            });
            $(document).on('click', '.rv-property-more-less-button', function () {
                $('.rv-property-more-container').slideToggle(500);
                $('.rv-property-more-less-button').fadeToggle(500);
            });
        })
    </script>
@stop
@push('scripts')
    <script type="text/javascript">
        var min_slider_price = {!! $default_min_price !!};
        var max_slider_price = {!! $default_max_price !!};
        var min_slider_price_value = {!! $min_price !!};
        var max_slider_price_value = {!! $max_price !!};
        $(document).ready(function () {

            $("#wish_list_text").keyup(function () {
                $('#wish_list_btn').prop('disabled', true);
                var v_value = $(this).val();
                var len = v_value.trim().length;
                // alert(len);
                if (len == 0) {
                    $('#wish_list_btn').prop('disabled', true);
                } else {
                    $('#wish_list_btn').prop('disabled', false);
                }
            });
        });
    </script>

    <script src="{{url('js/host_experiences/search1.js?v='.$version)}}"></script>
    <script src="{{url('js/search.js?v='.$version)}}"></script>
@endpush