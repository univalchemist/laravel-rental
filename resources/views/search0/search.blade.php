@extends('template_two')

@section('main')
    <main>
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
                <!---->
                <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: red;height: 500px">

                </div>
            </div>
        </div>
    </main>
@stop