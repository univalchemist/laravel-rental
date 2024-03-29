var home_autocomplete, home_mob_autocomplete,
    daterangepicker_format = $('meta[name="daterangepicker_format"]').attr("content"),
    datepicker_format = $('meta[name="datepicker_format"]').attr("content"),
    datedisplay_format = $('meta[name="datedisplay_format"]').attr("content"), current_refinement = "Homes";

function guests_select_option(e, t) {
    "Homes" == t ? $(e + " option:gt(9)").removeAttr("disabled").show() : (value = $(e).val(), value - 0 > 10 && $(e + " option").removeAttr("selected"), $(e + " option:gt(9)").attr("disabled", !0).hide())
}

function datepicker_hide_on_scroll() {
    $(document).on("click", ".hasDatepicker.ui-datepicker-target", function () {
        $(this).hasClass("hasDatepicker") && ($("#ui-datepicker-div").show(), $(this).datepicker("show"))
    }), $(window).width() > 760 ? datepicker_on_descktop_scroll() : datepicker_on_mobile_scroll()
}

function datepicker_hide() {
    $("#ui-datepicker-div").hide(), $(".hasDatepicker").datepicker("hide"), $(".hasDatepicker, .ui-datepicker-target").blur(), $(".tooltip.fade.top.in").hide()
}

function datepicker_on_mobile_scroll() {
    $(window).on("touchmove", function (e) {
        datepicker_hide()
    }), $(".manage-listing-row-container,.manage-listing-content-wrapper,.modal-content,.contact-modal,.sidebar").on("touchmove", function () {
        datepicker_hide(), $(".ui-datepicker-target").trigger("blur")
    })
}

function datepicker_on_descktop_scroll() {
    $(window).scroll(function (e) {
        datepicker_hide(), $("body").trigger("mousedown")
    }), $(".manage-listing-row-container,.manage-listing-content-wrapper,.modal-content,.contact-modal,.sidebar").scroll(function () {
        datepicker_hide(), $("body").trigger("mousedown")
    })
}

function homeAutocomplete() {
    document.getElementById("location") && (home_autocomplete = new google.maps.places.Autocomplete(document.getElementById("location"))).addListener("place_changed", trigger_checkin), document.getElementById("mob-search-location") && (home_mob_autocomplete = new google.maps.places.Autocomplete(document.getElementById("mob-search-location")), google.maps.event.addListener(home_mob_autocomplete, "place_changed", function () {
        var e = $("#mob-search-location").val().replace(" ", "+");
        window.location.href = APP_URL + "/s?location=" + e
    }))
}

$(".header_refinement").click(function () {
    current_refinement = $(this).attr("data"), $(".header_refinement_input").val(current_refinement), $(".header_refinement").removeClass("active"), $(this).addClass("active"), guests_select_option("#modal_guests", current_refinement), guests_select_option("#header-search-guests", current_refinement)
}), guests_select_option("#modal_guests", current_refinement), guests_select_option("#header-search-guests", current_refinement), $(document).ready(function () {
    $("#header-search-checkin").attr("placeholder", datedisplay_format), $("#header-search-checkout").attr("placeholder", datedisplay_format), $(".holecheck").click(function (e) {
        e.stopPropagation()
    })
}), $(document).mouseup(function (e) {
    var t = $(".header-dropdown");
    t.is(e.target) || 0 !== t.has(e.target).length || t.hide()
}), $("ul.menu-group li a").click(function () {
}), $(function () {
    $("#my-element").textfill({maxFontPixels: 36})
}), datepicker_hide_on_scroll(), $(window).resize(function () {
    datepicker_hide_on_scroll()
}), $("#host-profile-contact-btn").click(function () {
    $("body").addClass("pos-fix")
}), $(".modal-close").click(function () {
    $("body").removeClass("pos-fix"), $("#ui-datepicker-div").hide()
}), $("#accept_submit").attr("disabled", "disabled"), $(document).ready(function () {
    $(document).on("click", "#tos_confirm", function () {
        0 == $("#tos_confirm").val() ? ($("#accept_submit").removeAttr("disabled"), $("#tos_confirm").val("1")) : ($("#accept_submit").attr("disabled", "disabled"), $("#tos_confirm").val("0"))
    }), $(document).on("click", "#pre_approve_button", function () {
        $("div").remove(".alert-success")
    })
}), $(function () {
    var e = !1, t = !1;
    $("[rel~=tooltip]").bind("mouseenter", function () {
        if (e = $(this), tip = e.attr("title"), t = $('<div id="tooltip1"></div>'), !tip || "" == tip) return !1;
        e.removeAttr("title"), t.css("opacity", 0).html(tip).appendTo("body");
        var a = function () {
            $(window).width() < 1.5 * t.outerWidth() ? t.css("max-width", $(window).width() / 2) : t.css("max-width", 340);
            var a = e.offset().left + e.outerWidth() / 2 - t.outerWidth() / 2,
                o = e.offset().top - t.outerHeight() - 20;
            if (a < 0 ? (a = e.offset().left + e.outerWidth() / 2 - 20, t.addClass("left")) : t.removeClass("left"), a + t.outerWidth() > $(window).width() ? (a = e.offset().left - t.outerWidth() + e.outerWidth() / 2 + 20, t.addClass("right")) : t.removeClass("right"), o < 0) {
                o = e.offset().top + e.outerHeight();
                t.addClass("top")
            } else t.removeClass("top");
            t.css({left: a, top: o}).animate({top: "+=10", opacity: 1}, 50)
        };
        a(), $(window).resize(a);
        var o = function () {
            t.animate({top: "-=10", opacity: 0}, 50, function () {
                $(this).remove()
            }), e.attr("title", tip)
        };
        e.bind("mouseleave", o), t.bind("click", o)
    })
}), $(function () {
    $(".host_banner_content_slider_item").hide(), $("#host_banner_content_slider_item_0").show(), $("#host_banner_slider").responsiveSlides({
        auto: !0,
        pager: !1,
        nav: !1,
        speed: 2e3,
        timeout: 5e3,
        namespace: "host_banner_slider_item",
        before: function (e) {
            items_count = $("#host_banners_count").val(), current_index = $("." + this.namespace + "2_on").index(), next_index = current_index + 1, next_index > items_count && (next_index = 0), $("#host_banner_content_slider_item_" + current_index).hide(), $("#host_banner_content_slider_item_" + next_index).fadeIn(1e3)
        }
    })
}), $(function () {
    $("#home_slider").responsiveSlides({
        auto: !0,
        pager: !1,
        nav: !1,
        speed: 2e3,
        timeout: 8e3
    }), $("#bottom_slider").responsiveSlides({auto: !0, pager: !1, nav: !0})
}), $("#bottom_slider").responsiveSlides({
    auto: !0,
    speed: 500,
    timeout: 4e3,
    pager: !1,
    nav: !0,
    random: !1,
    pause: !1,
    pauseControls: !0,
    prevText: "Previous",
    nextText: "Next",
    maxwidth: "",
    navContainer: "",
    manualControls: "",
    namespace: "bottom_slider",
    before: function () {
    },
    after: function () {
    }
}), !0 === $(".manage-listing-row-container").hasClass("has-collapsed-nav") && $("#js-manage-listing-nav").addClass("manage-listing-nav"), $(".js-show-how-it-works").click(function () {
    $(".js-how-it-works").slideToggle("fast", function () {
        $(".js-how-it-works").show()
    })
}), $(".js-close-how-it-works").click(function () {
    $(".js-how-it-works").slideToggle("fast", function () {
        $(".js-how-it-works").hide()
    })
}), $("#room-type-tooltip").mouseover(function () {
    $(".tooltip-room").show()
}), $("#room-type-tooltip").mouseout(function () {
    $(".tooltip-room").hide()
}), $('[id^="amenity-tooltip"]').on("mouseover", function () {
    var e = $(this).data("id");
    $("#ame-tooltip-" + e).show()
}), $('[id^="amenity-tooltip"]').on("mouseout", function () {
    $('[id^="ame-tooltip"]').hide()
}), $(".tool-amenity1").mouseover(function () {
    $(".tooltip-amenity1").show()
}), $(".tool-amenity1").mouseout(function () {
    $(".tooltip-amenity1").hide()
}), $(".tool-amenity2").mouseover(function () {
    $(".tooltip-amenity2").show()
}), $(".tool-amenity2").mouseout(function () {
    $(".tooltip-amenity2").hide()
}), $("a.become").mouseover(function () {
    $(".drop-down-menu-host").show()
}), $("a.become").mouseout(function () {
    $(".drop-down-menu-host").hide()
}), $(".trip-drop").mouseout(function () {
    $(".drop-down-menu-trip").hide()
}), $(".trip-drop").mouseover(function () {
    $(".drop-down-menu-trip").show()
}), $(".inbox-icon").mouseout(function () {
    $(".drop-down-menu-msg").hide()
}), $(".inbox-icon").mouseover(function () {
    $(".drop-down-menu-msg").show()
}), $(".drop-down-menu-host").mouseover(function () {
    $(this).show()
}), $(".drop-down-menu-host").mouseout(function () {
    $(this).hide()
}), $(".drop-down-menu-trip").mouseover(function () {
    $(this).show()
}), $(".drop-down-menu-trip").mouseout(function () {
    $(this).hide()
}), $(".drop-down-menu-msg").mouseover(function () {
    $(this).show()
}), $(".drop-down-menu-msg").mouseout(function () {
    $(this).hide()
}), $(".burger--sm").click(function () {
    $(".header--sm .nav--sm").css("visibility", "visible"), $("body").addClass("remove-pos-fix pos-fix"), $(".makent-header .header--sm .nav-content--sm").addClass("right-content")
}), $(".nav-mask--sm").click(function () {
    $(".header--sm .nav--sm").css("visibility", "hidden"), $("body").removeClass("remove-pos-fix pos-fix"), $(".makent-header .header--sm .nav-content--sm").removeClass("right-content")
}), $(".search-modal-trigger, #sm-search-field").click(function () {
    $("#search-modal--sm").removeClass("hide"), $("#search-modal--sm").attr("aria-hidden", "false")
}), $(".search-modal-container .modal-close").click(function () {
    $("#search-modal--sm").addClass("hide"), $("#search-modal--sm").attr("aria-hidden", "true")
}), $(".list-nav-link a").click(function () {
    $(".listing-nav-sm").removeClass("collapsed")
}), $("#href_pricing").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_terms").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#remove-manage").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_booking").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_basics").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_description").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_location").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_amenities").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_photos").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_details").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_guidebook").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#href_calendar").click(function () {
    $("#js-manage-listing-nav").removeClass("manage-listing-nav"), $("#js-manage-listing-nav").addClass("pos-abs"), $("#ajax_container").addClass("mar-left-cont")
}), $("#header-avatar-trigger").click(function (e) {
    e.preventDefault(), $(".tooltip.tooltip-top-right.dropdown-menu.drop-down-menu-login").toggle(), $(".become_dropdown").hide()
}), $(".header-become-host").click(function (e) {
    e.preventDefault(), $(".become_dropdown").toggle()
}), $(".login_popup_open").click(function (e) {
    $(".become_dropdown").css("display", "none")
}), "undefined" == typeof google && (window.location.href = APP_URL + "/in_secure"), homeAutocomplete();
var header_autocomplete, sm_autocomplete, previous_currency, current_url = window.location.href.split("?")[0],
    last_part = current_url.substr(current_url.lastIndexOf("/")),
    last_part1 = current_url.substr(current_url.lastIndexOf("/") + 1);

function headerAutocomplete() {
    document.getElementById("header-search-form") && (header_autocomplete = new google.maps.places.Autocomplete(document.getElementById("header-search-form")), google.maps.event.addListener(header_autocomplete, "place_changed", function () {
        $("#header-search-settings").addClass("shown"), $("#header-search-checkin").trigger("click"), $(".webcot-lg-datepicker button").trigger("click")
    })), document.getElementById("header-search-form-mob") && (sm_autocomplete = new google.maps.places.Autocomplete(document.getElementById("header-search-form-mob")), google.maps.event.addListener(sm_autocomplete, "place_changed", function () {
        $("#header-search-form").val($("#header-search-form-mob").val()), $("#modal_checkin").trigger("click")
    }))
}

function updateExperienceDatepicker(e, t) {
    void 0 !== $(e).data("daterangepicker") && $(e).data("daterangepicker").remove(), emptyValue(['input[name="checkin"]', 'input[name="checkout"]', e, t]), $(e).daterangepicker({
        minDate: start,
        singleDatePicker: !0,
        autoApply: !0,
        autoUpdateInput: !1,
        locale: {format: daterangepicker_format}
    }), $(e).on("apply.daterangepicker", function (a, o) {
        startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = o.startDate, endDate = o.endDate, $(e).data("daterangepicker").setStartDate(startDate), $(t).data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $(e).val(startDate.format(daterangepicker_format)), $(t).val(endDate.format(daterangepicker_format))
    })
}

function updateHomeDatepicker(e, t) {
    void 0 !== $(e).data("daterangepicker") && $(e).data("daterangepicker").remove(), emptyValue(['input[name="checkin"]', 'input[name="checkout"]', e, t]), $(e).daterangepicker({
        minDate: start,
        dateLimitMin: {days: 1},
        autoApply: !0,
        autoUpdateInput: !1,
        locale: {format: daterangepicker_format}
    }), $(e).on("apply.daterangepicker", function (a, o) {
        startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = o.startDate, endDate = o.endDate, $(e).data("daterangepicker").setStartDate(startDate), $(t).data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $(e).val(startDate.format(daterangepicker_format)), $(t).val(endDate.format(daterangepicker_format))
    })
}

function emptyValue(e) {
    $.each(e, function (e, t) {
        $(t).val("")
    })
}

function trigger_checkin() {
    $("#checkin").trigger("click")
}

function res_menu() {
    $(".sub_menu_header").click(function () {
        console.log("adsf"), $(".sub_menu_header").toggleClass("open")
    })
}

function ajax_cnt() {
    var e = $("#ajax_header").outerHeight(), t = $("#js-manage-listing-footer").outerHeight(),
        a = $("#header").outerHeight(), o = $(window).height() - (e + t + a);
    $("#ajax_container").css("cssText", "height : " + o + "px")
}

"/s" != last_part ? headerAutocomplete() : $("#header-search-form-mob").keypress(function (e) {
    13 === e.keyCode && e.preventDefault()
}), start = moment(), $("#header-search-checkin").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    locale: {format: daterangepicker_format}
}), $("#header-search-checkin").on("apply.daterangepicker", function (e, t) {
    startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = t.startDate, endDate = t.endDate, $("#header-search-checkout").data("daterangepicker").setStartDate(startDate), $("#header-search-checkout").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $("#header-search-checkin").val(startDate.format(daterangepicker_format)), $("#header-search-checkout").val(endDate.format(daterangepicker_format))
}), $("#header-search-checkout").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    locale: {format: daterangepicker_format}
}), $("#header-search-checkout").on("apply.daterangepicker", function (e, t) {
    startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = t.startDate, endDate = t.endDate, $("#header-search-checkin").data("daterangepicker").setStartDate(startDate), $("#header-search-checkin").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $("#header-search-checkin").val(startDate.format(daterangepicker_format)), $("#header-search-checkout").val(endDate.format(daterangepicker_format))
}), start = moment(), $("#modal_checkin").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    linkedCalendars: !1,
    locale: {format: daterangepicker_format}
}), $("#modal_checkin").on("apply.daterangepicker", function (e, t) {
    startDateInput = $("#modal_checkin"), endDateInput = $("#modal_checkout"), startDate = t.startDate, endDate = t.endDate, $("#modal_checkout").data("daterangepicker").setStartDate(startDate), $("#modal_checkout").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format))
}), $("#modal_checkout").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    linkedCalendars: !1,
    locale: {format: daterangepicker_format}
}), $("#modal_checkout").on("apply.daterangepicker", function (e, t) {
    startDateInput = $("#modal_checkin"), endDateInput = $("#modal_checkout"), startDate = t.startDate, endDate = t.endDate, $("#modal_checkin").data("daterangepicker").setStartDate(startDate), $("#modal_checkin").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format))
}), $("#searchbar-form").submit(function (e) {
    "" == $("#location").val() ? ($(".searchbar__location-error").removeClass("hide"), e.preventDefault()) : $(".searchbar__location-error").addClass("hide")
}), $("#location, #header-location--sm").keyup(function () {
    $(".searchbar__location-error").addClass("hide")
}), $(".normal_header_form").submit(function (e) {
    var t = $('input[name="checkin"]').val(), a = $('input[name="checkout"]').val(),
        o = $("#header-search-guests").val(), n = "", i = "";
    $(".head_room_type").each(function () {
        $(this).is(":checked") && (n += $(this).val() + ",")
    }), $(".head_cat_type").each(function () {
        $(this).is(":checked") && (i += $(this).val() + ",")
    }), n = n.slice(0, -1), i = i.slice(0, -1);
    var r = $("#header-search-form").val().replace(" ", "+");
    window.location.href = APP_URL + "/s?location=" + r + "&checkin=" + t + "&checkout=" + a + "&guests=" + o + "&room_type=" + n + "&host_experience_category=" + i + "&current_refinement=" + current_refinement, e.preventDefault()
}), $("#search-form--sm-btn").click(function (e) {
    var t = $("#header-search-form-mob").val();
    if ("" == t) return $(".searchbar__location-error").removeClass("hide"), !1;
    $(".searchbar__location-error").addClass("hide");
    var a = $("#modal_checkin").val(), o = $("#modal_checkout").val(), n = $("#modal_guests").val(), i = "", r = "";
    $(".mob_room_type").each(function () {
        $(this).is(":checked") && (i += $(this).val() + ",")
    }), $(".mob_cat_type").each(function () {
        $(this).is(":checked") && (r += $(this).val() + ",")
    }), i = i.slice(0, -1), r = r.slice(0, -1);
    var s = "";
    t && (s = t.replace(" ", "+")), window.location.href = APP_URL + "/s?location=" + s + "&checkin=" + a + "&checkout=" + o + "&guests=" + n + "&room_type=" + i + "&host_experience_category=" + r + "&current_refinement=" + current_refinement, e.preventDefault()
}), $("html").click(function () {
    $("#header-search-settings").removeClass("shown")
}), $(document).on("click", ".menu-item", function () {
    "#" == $(this).attr("href") && $("body").removeClass("pos-fix")
}), $("#header-search-settings").click(function (e) {
    e.stopPropagation()
}), $("#ui-datepicker-div").click(function (e) {
    e.stopPropagation()
}), $(".daterangepicker").click(function (e) {
    e.stopPropagation()
}), $(".searchbar").length && (start = moment(), $("#checkin").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    locale: {format: daterangepicker_format}
}), $("#checkin").on("apply.daterangepicker", function (e, t) {
    startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = t.startDate, endDate = t.endDate, $("#checkout").data("daterangepicker").setStartDate(startDate), $("#checkout").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $("#checkin").val(startDate.format(daterangepicker_format)), $("#checkout").val(endDate.format(daterangepicker_format))
}), $("#checkout").daterangepicker({
    minDate: start,
    dateLimitMin: {days: 1},
    autoApply: !0,
    autoUpdateInput: !1,
    locale: {format: daterangepicker_format}
}), $("#checkout").on("apply.daterangepicker", function (e, t) {
    startDateInput = $('input[name="checkin"]'), endDateInput = $('input[name="checkout"]'), startDate = t.startDate, endDate = t.endDate, $("#checkin").data("daterangepicker").setStartDate(startDate), $("#checkin").data("daterangepicker").setEndDate(endDate), startDateInput.val(startDate.format(daterangepicker_format)), endDateInput.val(endDate.format(daterangepicker_format)), $("#checkin").val(startDate.format(daterangepicker_format)), $("#checkout").val(endDate.format(daterangepicker_format))
})), app.controller("payment", ["$scope", "$http", function (e, t) {
    $(".open-coupon-section-link").click(function () {
        $("#billing-table").addClass("coupon-section-open"), $("#restric_apply").hide()
    }), $(".cancel-coupon").click(function () {
        $("#billing-table").removeClass("coupon-section-open"), $("#restric_apply").show(), $("#coupon_disabled_message").hide()
    }), $("#apply-coupon").click(function () {
        var e = $(".coupon-code-field").val(), a = $("input[name=session_key]").val(),
            o = APP_URL + "/payments/apply_coupon", n = $("input[name=guest_token]").val();
        n && (o = APP_URL + "/api_payments/apply_coupon?token=" + n), t.post(o, {
            coupon_code: e,
            s_key: a
        }).then(function (e) {
            e.data.message ? ($("#coupon_disabled_message").show(), $("#coupon_disabled_message").text(e.data.message), $("#after_apply_remove").hide()) : ($("#coupon_disabled_message").hide(), $("#restric_apply").hide(), $("#after_apply").hide(), $("#after_apply_remove").show(), $("#after_apply_coupon").show(), $("#after_apply_amount").show(), $("#applied_coupen_amount").text(e.data.coupon_amount), $("#payment_total").text(e.data.coupen_applied_total), window.location.reload())
        })
    }), $("#remove_coupon").click(function () {
        var e = APP_URL + "/payments/remove_coupon", a = $("input[name=guest_token]").val();
        a && (e = APP_URL + "/api_payments/remove_coupon?token=" + a), t.post(e, {}).then(function (e) {
            window.location.reload()
        })
    }), e.disableButton = function () {
        $("#checkout-form").submit(), $("#payment-form-submit").attr("disabled", "disabled"), $("#checkout-form :input").prop("disabled", !0)
    }
}]), $(document).on("change", "#payment-method-select", function () {
    "paypal" == $(this).val() ? ($("#payment-method-cc").hide(), $(".cc").hide(), $("." + $(this).val()).addClass("active"), $("." + $(this).val()).addClass("active"), $("." + $(this).val() + " > .payment-logo").removeClass("inactive")) : ($("#payment-method-cc").show(), $(".cc").show(), $(".paypal").removeClass("active"), $(".paypal > .payment-logo").addClass("inactive")), $('[name="payment_method"]').val($(this).val())
}), $(document).ready(function () {
    setTimeout(function () {
        "paypal" == $("#payment-method-select").val() ? ($("#payment-method-cc").hide(), $(".cc").hide(), $("." + $("#payment-method-select").val()).addClass("active"), $("." + $("#payment-method-select").val()).addClass("active"), $("." + $("#payment-method-select").val() + " > .payment-logo").removeClass("inactive")) : ($("#payment-method-cc").show(), $(".cc").show(), $(".paypal").removeClass("active"), $(".paypal > .payment-logo").addClass("inactive")), $('[name="payment_method"]').val($("#payment-method-select").val())
    }, 1e3)
}), $("#country-select").change(function () {
    $("#billing-country").text($("#country-select option:selected").text()), $('[name="country"]').val($(this).val())
}), $("#billing-country").text($("#country-select option:selected").text()), $('[name="country"]').val($("#country-select option:selected").val()), app.controller("footer", ["$scope", "$http", "$rootScope", function (e, t, a) {
    a.inbox_count = inbox_count, $("#currency_footer").click(function () {
        previous_currency = this.value
    }).change(function () {
        t.post(APP_URL + "/set_session", {
            currency: $(this).val(),
            previous_currency: previous_currency
        }).then(function (e) {
            location.reload()
        })
    }), $("#language_footer").change(function () {
        t.post(APP_URL + "/set_session", {language: $(this).val()}).then(function (e) {
            location.reload()
        })
    }), $(".room_status_dropdown").change(function () {
        var e = {};
        e.status = $(this).val();
        var a = JSON.stringify(e), o = $(this).attr("data-room-id");
        t.post("manage-listing/" + o + "/update_rooms", {data: a}).then(function (t) {
            "Unlisted" == e.status ? ($('[data-room-id="div_' + o + '"] > i').addClass("dot-danger"), $('[data-room-id="div_' + o + '"] > i').removeClass("dot-success")) : "Listed" == e.status && ($('[data-room-id="div_' + o + '"] > i').removeClass("dot-danger"), $('[data-room-id="div_' + o + '"] > i').addClass("dot-success"))
        })
    }), $(document).on("click", ".wl-modal-footer__text", function () {
        $(".wl-modal-footer__form").removeClass("hide")
    }), $("#send-email").unbind("click").click(function () {
        var e = $("#email-list").val();
        "" != e && t.post("invite/share_email", {emails: e}).then(function (e) {
            "true" == e.data ? ($("#success_message").fadeIn(800), $("#success_message").fadeOut(), $("#email-list").val("")) : ($("#error_message").fadeIn(800), $("#error_message").fadeOut())
        })
    })
}]), app.controller("payout_preferences", ["$scope", "$http", function (e, t) {
    $("#add-payout-method-button").click(function () {
        $("#payout_popup1").removeClass("hide").attr("aria-hidden", "false")
    }), $(document).ready(function () {
        $("#ssn_last_4").keypress(function (e) {
            if (8 != e.which && 0 != e.which && (e.which < 48 || e.which > 57)) return !1
        })
    }), $("#address").submit(function () {
        var e = '<div class="alert alert-error alert-error alert-header"><a class="close alert-close" href="javascript:void(0);"></a><i class="icon alert-icon icon-alert-alt"></i>';
        return "" == $("#payout_info_payout_address1").val().trim() ? ($("#popup1_flash-container").html(e + $("#blank_address").val() + "</div>"), !1) : "" == $("#payout_info_payout_city").val().trim() ? ($("#popup1_flash-container").html(e + $("#blank_city").val() + "</div>"), !1) : "" == $("#payout_info_payout_zip").val().trim() ? ($("#popup1_flash-container").html(e + $("#blank_post").val() + "</div>"), !1) : null == $("#payout_info_payout_country").val().trim() ? ($("#popup1_flash-container").html(e + $("#blank_country").val() + "</div>"), !1) : ($("#payout_info_payout2_address1").val($("#payout_info_payout_address1").val()), $("#payout_info_payout2_address2").val($("#payout_info_payout_address2").val()), $("#payout_info_payout2_city").val($("#payout_info_payout_city").val()), $("#payout_info_payout2_state").val($("#payout_info_payout_state").val()), $("#payout_info_payout2_zip").val($("#payout_info_payout_zip").val()), $("#payout_info_payout2_country").val($("#payout_info_payout_country").val()), $("#payout_popup1").addClass("hide"), void $("#payout_popup2").removeClass("hide").attr("aria-hidden", "false"))
    }), $("#payout_info_payout_country").change(function () {
        e.country = $(this).val(), $("#payout_info_payout_country1").val($(this).val()), "" == $("#payout_info_payout_country1").val() || void 0 == $("#payout_info_payout_country1").val() ? ($("#payout_info_payout_country1").val(""), e.payout_country = "", e.payout_currency = "") : (e.payout_country = $(this).val(), $("#payout_info_payout_country1").trigger("change"), e.change_currency())
    }), $("#select-payout-method-submit").click(function () {
        if (void 0 == $('[id="payout2_method"]:checked').val()) return $("#popup2_flash-container").html('<div class="alert alert-error alert-error alert-header"><a class="close alert-close" href="javascript:void(0);"></a><i class="icon alert-icon icon-alert-alt"></i>' + $("#choose_method").val() + "</div>"), !1;
        $("#payout_info_payout3_address1").val($("#payout_info_payout2_address1").val()), $("#payout_info_payout3_address2").val($("#payout_info_payout2_address2").val()), $("#payout_info_payout3_city").val($("#payout_info_payout2_city").val()), $("#payout_info_payout3_state").val($("#payout_info_payout2_state").val()), $("#payout_info_payout3_zip").val($("#payout_info_payout2_zip").val()), $("#payout_info_payout3_country").val($("#payout_info_payout2_country").val()), $("#payout3_method").val($('[id="payout2_method"]:checked').val()), $("#payout_info_payout4_address1").val($("#payout_info_payout2_address1").val()), $("#payout_info_payout4_address2").val($("#payout_info_payout2_address2").val()), $("#payout_info_payout4_city").val($("#payout_info_payout2_city").val()), $("#payout_info_payout4_state").val($("#payout_info_payout2_state").val()), $("#payout_info_payout4_zip").val($("#payout_info_payout2_zip").val()), $("#payout_info_payout4_country").val($("#payout_info_payout2_country").val()), $("#payout4_method").val($('[id="payout2_method"]:checked').val()), payout_method = $("#payout3_method").val(), "Stripe" == payout_method ? ($("#payout_popup2").addClass("hide"), $("#payout_popupstripe").removeClass("hide").attr("aria-hidden", "false")) : ($("#payout_popup2").addClass("hide"), $("#payout_popup3").removeClass("hide").attr("aria-hidden", "false"))
    }), $("#payout_paypal").submit(function () {
        if (payout_method = $("#payout3_method").val(), "PayPal" != payout_method) return !0;
        return !!/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($("#paypal_email").val()) || ($("#popup3_flash-container").removeClass("hide"), !1)
    }), e.change_currency = function () {
        var t, a = [];
        (angular.forEach(e.country_currency, function (e, t) {
            $("#payout_info_payout_country1").val() == t && (a = e)
        }), a) ? ((t = $("#payout_info_payout_currency")).empty(), $.each(a, function (o, n) {
            t.append($("<option></option>").attr("value", n).text(n)), "" != e.old_currency ? $("#payout_info_payout_currency").val(e.payout_currency) : $("#payout_info_payout_currency").val(a[0])
        }), "GB" == $("#payout_info_payout_country1").val() && "EUR" == $("#payout_info_payout_currency").val() ? ($(".routing_number_cls").addClass("hide"), $(".account_number_cls").html("IBAN")) : ($(".routing_number_cls").removeClass("hide"), $(".account_number_cls").html("Account Number"))) : ((t = $("#payout_info_payout_currency")).empty(), t.append($("<option></option>").attr("value", "").text("Select")));
        "" != $("#payout_info_payout_currency").val() && null != $("#payout_info_payout_currency").val() || $("#payout_info_payout_currency").val($("#payout_info_payout_currency option:first").val())
    }, $(document).on("change", "#payout_info_payout_country1", function () {
        e.change_currency(), "GB" == $("#payout_info_payout_country1").val() && "EUR" == $("#payout_info_payout_currency").val() ? ($(".routing_number_cls").addClass("hide"), $(".account_number_cls").html("IBAN")) : ($(".routing_number_cls").removeClass("hide"), $(".account_number_cls").html("Account Number")), e.payout_currency = $("#payout_info_payout_currency").val(), $("#payout_info_payout_currency").val($("#payout_info_payout_currency option:first").val()), $("#payout_info_payout_country").val($("#payout_info_payout_country1").val())
    }), $(document).on("change", "#payout_info_payout_currency", function () {
        e.payout_currency = $("#payout_info_payout_currency").val(), "GB" == $("#payout_info_payout_country1").val() && "EUR" == $("#payout_info_payout_currency").val() ? ($(".routing_number_cls").addClass("hide"), $(".account_number_cls").html("IBAN")) : ($(".routing_number_cls").removeClass("hide"), $(".account_number_cls").html("Account Number"))
    });
    var a = document.getElementById("stripe_publish_key").value;
    Stripe.setPublishableKey(a);

    function o(e, t) {
        if ($("#payout_stripe").removeClass("loading"), t.error) return $("#stripe_errors").html(""), "Must have at least one letter" == t.error.message ? $("#stripe_errors").html("Please fill all required fields") : $("#stripe_errors").html(t.error.message), !1;
        $("#stripe_errors").html("");
        var a = t.id;
        return $("#stripe_token").val(a), $("#payout_stripe").removeClass("loading"), $("#payout_stripe").submit(), !0
    }

    $("#payout_stripe").submit(function () {
        if ($("#payout_info_payout4_address1").val($("#payout_info_payout_address1").val()), $("#payout_info_payout4_address2").val($("#payout_info_payout_address2").val()), $("#payout_info_payout4_city").val($("#payout_info_payout_city").val()), $("#payout_info_payout4_state").val($("#payout_info_payout_state").val()), $("#payout_info_payout4_zip").val($("#payout_info_payout_zip").val()), stripe_token = $("#stripe_token").val(), "" != stripe_token) return !0;
        if ("" == $("#payout_info_payout_country1").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
        if ("" == $("#payout_info_payout_currency").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
        if ("" == $("#holder_name").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
        is_iban = $("#is_iban").val(), is_branch_code = $("#is_branch_code").val();
        var t = {
            country: $("#payout_info_payout_country1").val(),
            currency: $("#payout_info_payout_currency").val(),
            account_number: $("#account_number").val(),
            account_holder_name: $("#holder_name").val(),
            account_holder_type: $("#holder_type").val()
        };
        if ("No" == is_iban) if ("Yes" == is_branch_code) {
            if ("GB" != $("#payout_info_payout_country1").val() && "EUR" != $("#payout_info_payout_currency").val()) {
                if ("" == $("#routing_number").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
                if ("" == $("#branch_code").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
                t.routing_number = $("#routing_number").val() + "-" + $("#branch_code").val()
            }
        } else if ("GB" != $("#payout_info_payout_country1").val() && "EUR" != $("#payout_info_payout_currency").val()) {
            if ("" == $("#routing_number").val()) return $("#stripe_errors").html("Please fill all required fields"), !1;
            t.routing_number = $("#routing_number").val()
        }
        return $("#payout_stripe").addClass("loading"), country = e.payout_country, Stripe.bankAccount.createToken(t, o), !1
    }), $(".panel-close").click(function () {
        $(this).parent().parent().parent().parent().parent().addClass("hide")
    }), $('[id$="_flash-container"]').on("click", ".alert-close", function () {
        $(this).parent().parent().html("")
    })
}]), app.directive("postsPaginationTransaction", function () {
    return {
        restrict: "E",
        template: '<h3 class="status-text text-center" ng-show="loading">{{trans_lang.loading}}...</h3><h3 class="status-text text-center" ng-hide="result.length || loading">{{trans_lang.no_transactions}}</h3><ul class="pagination" ng-show="result.length"><li ng-show="currentPage > 1"><a href="javascript:void(0)" ng-click="pagination_result(type, 1)">&laquo;</a></li><li ng-show="currentPage > 1"><a href="javascript:void(0)" ng-click="pagination_result(type, currentPage-1)">&lsaquo; ' + $("#pagin_prev").val() + ' </a></li><li ng-repeat="i in range" ng-class="{active : currentPage == i}"><a href="javascript:void(0)" ng-click="pagination_result(type, i)">{{i}}</a></li><li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="pagination_result(type, currentPage+1)">' + $("#pagin_next").val() + ' &rsaquo;</a></li><li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="pagination_result(type, totalPages)">&raquo;</a></li></ul>'
    }
}).controller("transaction_history", ["$scope", "$http", function (e, t) {
    e.paid_out = 0, $("li > .tab-item").click(function () {
        var t = $(this).attr("aria-controls");
        "false" == $(this).attr("aria-selected") && ($(".tab-item").attr("aria-selected", "false"), $(this).attr("aria-selected", "true"), $(".tab-panel").hide(), $("#" + t).show()), e.type = t, e.pagination_result(t, 1)
    }), $('[class^="payout-"]').change(function () {
        var t = $(this).parent().parent().parent().parent().attr("id");
        e.type = t, e.pagination_result(t, 1)
    }), e.pagination_result = function (a, o) {
        var n = {};
        n.type = a, n.payout_method = $("#" + n.type + " .payout-method").val(), n.listing = $("#" + n.type + " .payout-listing").val(), n.year = $("#" + n.type + " .payout-year").val(), n.start_month = $("#" + n.type + " .payout-start-month").val(), n.end_month = $("#" + n.type + " .payout-end-month").val();
        var i = JSON.stringify(n);
        void 0 == o && (o = 1), "completed-transactions" == a && (e.completed_csv_param = "type=" + n.type + "&payout_method=" + n.payout_method + "&listing=" + n.listing + "&year=" + n.year + "&start_month=" + n.start_month + "&end_month=" + n.end_month + "&page=" + o), "future-transactions" == a && (e.future_csv_param = "type=" + n.type + "&payout_method=" + n.payout_method + "&listing=" + n.listing + "&page=" + o), e.result_show = !1, e.loading = !0, t.post(APP_URL + "/users/result_transaction_history?page=" + o, {data: i}).then(function (t) {
            if (e.loading = !1, e.result = t.data.data, 0 != e.result.length) {
                e.result_show = !0, e.totalPages = t.data.last_page, e.currentPage = t.data.current_page, e.type = a;
                for (var o = [], n = 1; n <= t.data.last_page; n++) o.push(n);
                e.range = o;
                var i = 0;
                for (n = 0; n < e.result.length; n++) i += e.result[n].amount;
                e.paid_out = e.result[0].currency_symbol + i
            }
        })
    }, e.pagination_result("completed-transactions", 1)
}]), app.controller("reviews", ["$scope", "$http", function (e, t) {
    $("li > .tab-item").click(function () {
        var e = $(this).attr("aria-controls");
        "false" == $(this).attr("aria-selected") && ($(".tab-item").attr("aria-selected", "false"), $(this).attr("aria-selected", "true"), $(".tab-panel").hide(), $("#" + e).show())
    })
}]), app.controller("help", ["$scope", "$http", function (e, t) {
    $(".help_nav .navtree-list .navtree-next").click(function () {
        var e = $(this).data("id"), t = $(this).data("name");
        $(".help_nav #navtree").css({left: "-300px"}), $(".help_nav .subnav-list li:first-child a").attr("aria-selected", "false"), $(".help_nav .subnav-list li").append('<li> <a class="subnav-item" href="#" data-node-id="0" aria-selected="true"> ' + t + " </a> </li>"), $(".help_nav #navtree-" + e).css({display: "block"})
    }), $(".help_nav .navtree-list .navtree-back").click(function () {
        var e = $(this).data("id");
        $(this).data("name");
        $(".help_nav #navtree").css({left: "0px"}), $(".help_nav .subnav-list li:first-child a").attr("aria-selected", "true"), $(".help_nav .subnav-list li").last().remove(), $(".help_nav #navtree-" + e).css({display: "none"})
    }), $("#help_search").autocomplete({
        source: function (e, t) {
            $.ajax({
                url: APP_URL + "/ajax_help_search",
                type: "GET",
                dataType: "json",
                data: {term: e.term},
                success: function (e) {
                    t(e), $(this).removeClass("ui-autocomplete-loading")
                }
            })
        }, search: function () {
            $(this).addClass("loading")
        }, open: function () {
            $(this).removeClass("loading")
        }
    }).autocomplete("instance")._renderItem = function (e, t) {
        return 0 != t.id ? ($("#help_search").removeClass("ui-autocomplete-loading"), $("<li>").append("<a href='" + APP_URL + "/help/article/" + t.id + "/" + t.question + "' class='article-link article-link-panel link-reset'><div class='hover-item__content'><div class='col-middle-alt article-link-left'><i class='icon icon-light-gray icon-size-2 article-link-icon icon-description'></i></div><div class='col-middle-alt article-link-right'>" + t.value + "</div></div></a>").appendTo(e)) : ($("#help_search").removeClass("ui-autocomplete-loading"), $("<li style='pointer-events: none;'>").append("<span class='article-link article-link-panel link-reset'><div class='hover-item__content'><div class='col-middle-alt article-link-left'><i class='icon icon-light-gray icon-size-2 article-link-icon icon-description'></i></div><div class='col-middle-alt article-link-right'>" + t.value + "</div></div></span>").appendTo(e))
    }
}]), app.controller("reviews_edit_host", ["$scope", "$http", function (e, t) {
    $(".next-facet").click(function () {
        $("#double-blind-copy").addClass("hide"), $("#host-summary").removeClass("hide"), $("#guest").removeClass("hide")
    }), $(".exp_review_submit").click(function () {
        var e = $(this).parent().parent().attr("id"), a = {};
        $("#" + e + "-form input, #" + e + " textarea").each(function () {
            "radio" != $(this).attr("type") ? a[$(this).attr("name")] = $(this).val() : $(this).is(":checked") && (a[$(this).attr("name")] = $(this).val())
        });
        var o = $("#reservation_id").val();
        if ("host-summary" == e || "guest" == e) {
            if ("" == $("#review_comments").val()) return $('[for="review_comments"]').show(), $("#review_comments").addClass("invalid"), !1;
            if ($('[for="review_comments"]').hide(), $("#review_comments").removeClass("invalid"), "host-summary" == e) {
                if (!$('[name="rating"]').is(":checked")) return $('[for="review_rating"]').show(), !1;
                $('[for="review_rating"]').hide()
            }
        }
        a.review_id = $("#review_id").val();
        var n = JSON.stringify(a);
        $(".review-container").addClass("loading"), t.post(APP_URL + "/host_experience_reviews/edit/" + o, {data: n}).then(function (e) {
            $(".review-container").removeClass("loading"), e.data.success && (window.location.href = APP_URL + "/users/reviews")
        })
    }), $(".review_submit").click(function () {
        var e = $(this).parent().parent().attr("id"), a = {};
        $("#" + e + "-form input, #" + e + " textarea").each(function () {
            "radio" != $(this).attr("type") ? a[$(this).attr("name")] = $(this).val() : $(this).is(":checked") && (a[$(this).attr("name")] = $(this).val())
        });
        var o = $("#reservation_id").val();
        if ("host-summary" == e || "guest" == e) {
            if ("" == $("#review_comments").val()) return $('[for="review_comments"]').show(), $("#review_comments").addClass("invalid"), !1;
            if ($('[for="review_comments"]').hide(), $("#review_comments").removeClass("invalid"), "host-summary" == e) {
                if (!$('[name="rating"]').is(":checked")) return $('[for="review_rating"]').show(), !1;
                $('[for="review_rating"]').hide()
            }
        }
        a.review_id = $("#review_id").val();
        var n = JSON.stringify(a);
        $(".review-container").addClass("loading"), t.post(APP_URL + "/reviews/edit/" + o, {data: n}).then(function (t) {
            $(".review-container").removeClass("loading"), t.data.success && ("host-details" != e && "guest" != e || (window.location.href = APP_URL + "/users/reviews"), $("#review_id").val(t.data.review_id), $("#" + e).addClass("hide"), $("#" + e).next().removeClass("hide"))
        })
    })
}]), $(document).on("change", "#user_profile_pic", function () {
    $("#ajax_upload_form").submit()
}), app.controller("cancel_reservation", ["$scope", "$http", function (e, t) {
    $(document).ready(function () {
        $("[id$='-trigger']").click(function () {
            var e = $(this).attr("id").replace("-trigger", "");
            if ("header-avatar" != e) {
                $("#reserve_code").val(e), $("#reserve_id").val(e);
                var a = {};
                a.id = e;
                var o = JSON.stringify(a);
                t.post(APP_URL + "/reservation/cencel_request_send", {data: o}).then(function (e) {
                    if ("false" == e.data.success) {
                        var t = "#cancel-modal";
                        $(t).removeClass("hide"), $(t).addClass("show"), $(t).attr("aria-hidden", "false")
                    } else location.reload()
                })
            }
        }), $("[id$='-trigger-pending']").click(function () {
            var e = $(this).attr("id").replace("-trigger-pending", "");
            $("#reserve_code_pending").val(e), $("#reserve_id").val(e);
            var t = "#pending-cancel-modal";
            $(t).removeClass("hide"), $(t).addClass("show"), $(t).attr("aria-hidden", "false")
        }), $('[data-behavior="modal-close"]').click(function (e) {
            e.preventDefault(), $(".modal").removeClass("show"), $(".modal").attr("aria-hidden", "true"), $("body").removeClass("pos-fix")
        })
    }), e.dispute_form_errors = [], e.trigger_create_dispute = function (t) {
        e.dispute_reservation_data = t, e.dispute_form_errors = [], $("body").addClass("pos-fix"), $("#dispute_modal").removeClass("hide").addClass("show").attr("aria-hidden", "false")
    }, e.submit_create_dispute = function () {
        $("#dipute_form_content").addClass("loading"), t({
            method: "POST",
            url: APP_URL + "/disputes/create",
            headers: {"Content-Type": "multipart/form-data"},
            data: e.dispute_reservation_data,
            transformRequest: function (e, t) {
                var a = new FormData;
                return angular.forEach(e, function (e, t) {
                    "object" == jQuery.type(e) ? $.each(e, function (e, o) {
                        a.append(t + "[]", o)
                    }) : a.append(t, e)
                }), delete t()["Content-Type"], a
            }
        }).success(function (t) {
            if ("error" == t.status) e.dispute_form_errors = t.errors; else if (e.dispute_form_errors = [], window.location.reload(), "success" == t.status) return;
            $("#dipute_form_content").removeClass("loading")
        }).error(function (t, a) {
            e.dispute_form_errors = [], $("#dipute_form_content").removeClass("loading")
        })
    }
}]), app.directive("file", function () {
    return {
        scope: {file: "="}, link: function (e, t, a) {
            t.bind("change", function (t) {
                var a = t.target.files;
                e.file = a || void 0, e.$apply()
            })
        }
    }
}), app.controller("edit_profile", ["$scope", "$http", function (e, t) {
    e.users_phone_numbers = [], e.phone_number_val = [], e.phone_code_val = [], e.otp_val = [];
    var a = $("#phone_numbers_wrapper");
    t.post(APP_URL + "/users/get_users_phone_numbers", {}).then(function (t) {
        e.users_phone_numbers = t.data
    }), e.add_phone_number = function () {
        a.addClass("loading"), new_phone_number = {
            id: "",
            phone_number: "",
            phone_code: e.default_phone_code,
            status: "Null"
        }, e.users_phone_numbers.push(new_phone_number), a.removeClass("loading")
    }, e.remove_phone_number = function (e) {
        a.addClass("loading"), a.removeClass("loading")
    }, e.update_phone_number = function (o) {
        a.addClass("loading"), phone_number_val = e.phone_number_val[o] ? e.phone_number_val[o] : "", phone_code_val = e.phone_code_val[o], t.post(APP_URL + "/users/update_users_phone_number", {
            phone_number: phone_number_val,
            phone_code: phone_code_val
        }).then(function (t) {
            "Success" == t.data.status ? (e.users_phone_numbers[o].phone_number_error = "", e.users_phone_numbers = t.data.users_phone_numbers, e.phone_number_val[o] = "") : e.users_phone_numbers[o].phone_number_error = t.data.message, a.removeClass("loading")
        })
    }, e.verify_phone_number = function (o) {
        a.addClass("loading"), phone_number = e.users_phone_numbers[o], otp_val = e.otp_val[o] ? e.otp_val[o] : "", t.post(APP_URL + "/users/verify_users_phone_number", {
            otp: otp_val,
            id: phone_number.id
        }).then(function (t) {
            "Success" == t.data.status ? (e.users_phone_numbers[o].otp_error = "", e.users_phone_numbers = t.data.users_phone_numbers, e.otp_val[o] = "") : e.users_phone_numbers[o].otp_error = t.data.message, a.removeClass("loading")
        })
    }, e.remove_phone_number = function (o) {
        a.addClass("loading"), phone_number = e.users_phone_numbers[o], t.post(APP_URL + "/users/remove_users_phone_number", {id: phone_number.id}).then(function (t) {
            "Success" == t.data.status ? (e.users_phone_numbers[o].phone_number_error = "", e.users_phone_numbers = t.data.users_phone_numbers) : e.users_phone_numbers[o].phone_number_error = t.data.message, a.removeClass("loading")
        })
    }, $(".language-link").click(function (e) {
        e.preventDefault(), $("body").addClass("pos-fix"), $(".mini-language").show()
    }), $(".login-close-language").click(function (e) {
        $("body").removeClass("pos-fix"), $(".mini-language").hide()
    }), $(".top-home").click(function (e) {
        e.stopPropagation()
    }), $("#language_save_button").click(function () {
        $("#selected_language").html(""), $(".language_select").each(function () {
            $(this).is(":checked") && $("#selected_language").append('<span class="btn btn-lang space-1">' + $(this).data("name") + '  <a href="javascript:void(0)" class="text-normal" id="remove_language"> <input type="hidden" value=" ' + $(this).val() + '" name="language[]"> <i class="x icon icon-remove" title="Remove from selection"></i></a> </span>'), $(".mini-language").hide(), $("body").removeClass("pos-fix")
        })
    }), $(document).on("click", '[id^="remove_language"]', function () {
        $(this).parent().remove()
    })
}]), app.controller("Tabsh", ["$scope", function (e) {
    e.show = 1, e.tab1 = !0
}]), $(document).ready(function () {
    $(document).on("click", ".sidebarbar", function () {
        $(".main_bar").toggleClass("newmain"), $(".het").toggleClass("het1")
    })
}), $(window).on("scroll touchmove", function () {
    $(window).scrollTop() + $(window).height() == $(document).height() || 0 == $(window).scrollTop() ? $(".mobover").removeClass("overall") : $(".mobover").addClass("overall")
}), $(document).ready(function () {
    $("#ftb, #ftbm").click(function () {
        $(".home_pro").show(), $(".checkout").show(), $(".exp_cat").hide(), updateHomeDatepicker("#header-search-checkin", "#header-search-checkout"), updateHomeDatepicker("#modal_checkin", "#modal_checkout")
    }), $("#ftb1, #ftbm1").click(function () {
        $(".checkout").hide(), $(".exp_cat").show(), $(".home_pro").hide(), updateExperienceDatepicker("#header-search-checkin", "#header-search-checkout"), updateExperienceDatepicker("#modal_checkin", "#modal_checkout")
    })
}), $(window).scroll(function () {
    var e = $(".makent-header.new").innerHeight();
    $(".tespri").height();
    $(window).scrollTop() >= e ? ($(".tespri").addClass("fixed"), $(".listing-nav-sm").addClass("sidenv"), $(".manage-listing-row-container").addClass("fixset")) : ($(".tespri").removeClass("fixed"), $(".listing-nav-sm").removeClass("sidenv"), $(".manage-listing-row-container").removeClass("fixset"))
}), lang = $("html").attr("lang"), rtl = !1, "ar" == lang && (rtl = !0), $(document).ready(function () {
    $(".slide1").owlCarousel({
        loop: !1,
        margin: 20,
        rtl: rtl,
        responsiveClass: !0,
        responsive: {
            0: {items: 1, nav: !0},
            425: {items: 2, nav: !0},
            736: {items: 2, nav: !0},
            992: {items: 2, nav: !0},
            1024: {items: 3, nav: !0}
        }
    })
}), function (e) {
    e(window).on("load", function () {
        e("#content-1").mCustomScrollbar({theme: "minimal"})
    })
}(jQuery), function (e) {
    e(window).on("load", function () {
        e("#content-3").mCustomScrollbar({theme: "minimal"})
    })
}(jQuery), function (e) {
    e(window).on("load", function () {
        e(window).width() >= 1024 && e("#content-4").mCustomScrollbar({theme: "minimal"})
    })
}(jQuery), $(document).ready(function () {
    var e = $(".listing-nav-sm");
    $(window).scroll(function () {
        e.stop().animate({top: 117 - $(window).scrollTop() + "px"}, "slow")
    })
}), $("#contact-host-link").click(function () {
    $("body").addClass("pos-fix3")
}), $(".mod_cls").click(function () {
    $("body").removeClass("pos-fix3")
}), $(".pop-striped").click(function () {
    $("body").addClass("pos-fix3")
}), $(".panel-close").click(function () {
    $("body").removeClass("pos-fix3")
}), $(".ser_mobtab").click(function () {
    $("body").addClass("pos-fix3")
}), $(".modal-close").click(function () {
    $("body").removeClass("pos-fix3")
}), $(".ser_mobtab").click(function () {
    $("html").addClass("pos-fixing")
}), $(".modal-close").click(function () {
    $("html").removeClass("pos-fixing")
}), $(".button_1b5aaxl").click(function () {
    $("html").addClass("pos-fixing")
}), $(".modal-close").click(function () {
    $("html").removeClass("pos-fixing")
}), $(".burger--sm").click(function () {
    $(".header--sm .nav--sm").css("visibility", "visible"), $(".makent-header .header--sm .nav-content--sm").addClass("right-content"), $(".arrow-icon").toggleClass("fa-angle-down"), $(".arrow-icon").toggleClass("fa-angle-up"), $(".arrow-icon1").toggleClass("fa-bars"), $(".arrow-icon1").toggleClass("fa-bars-up"), $("body").addClass("pos-fix"), $("body").addClass("remove-pos-fix pos-fix"), $(".makent-header .header--sm .title--sm").toggleClass("hide")
}), $(".nav-mask--sm").click(function () {
    $(".header--sm .nav--sm").css("visibility", "hidden"), $(".makent-header .header--sm .nav-content--sm").removeClass("right-content"), $(".arrow-icon").toggleClass("fa-angle-down"), $(".arrow-icon").toggleClass("fa-angle-up"), $(".arrow-icon1").toggleClass("fa-bars"), $(".arrow-icon1").toggleClass("fa-bars-up"), $("body").removeClass("remove-pos-fix pos-fix"), $(".makent-header .header--sm .title--sm").toggleClass("hide")
}), $("#add-payout-method-button").click(function () {
    $("body").addClass("pos-fix3")
}), $(".modal-close").click(function () {
    $("body").removeClass("pos-fix3")
}), $(".gut1").click(function () {
    $("body").addClass("pos-fix3")
}), $(".clsfa").click(function () {
    $("body").removeClass("pos-fix3")
}), $(document).ready(function () {
    res_menu()
}), $(window).scroll(function () {
    ajax_cnt()
}), $(window).resize(function () {
    ajax_cnt()
}), $(document).ready(function () {
    ajax_cnt()
}), setTimeout(function () {
    ajax_cnt()
}, 10), $(document).ready(function () {
    $("#imageGallery").lightSlider({
        gallery: !0,
        item: 1,
        loop: !1,
        thumbItem: 9,
        slideMargin: 0,
        enableDrag: !1,
        enableTouch: !1,
        thumbnail: !0,
        currentPagerPosition: "left",
        onSliderLoad: function (e) {
            e.lightGallery({
                selector: "#imageGallery .lslide",
                mode: "lg-fade",
                closable: !1,
                mousewheel: !1,
                enableDrag: !1,
                enableSwipe: !1,
                loop: !1,
                hideControlOnEnd: !0,
                slideEndAnimatoin: !1
            })
        }
    })
}), $(".more_photo").on("click", function () {
    $("#imageGallery li img").trigger("click"), $(document).ready(function () {
        $("#imageGallery").lightSlider({
            gallery: !0,
            item: 1,
            loop: !1,
            thumbItem: 9,
            slideMargin: 0,
            enableDrag: !1,
            enableTouch: !1,
            thumbnail: !0,
            currentPagerPosition: "left",
            onSliderLoad: function (e) {
                e.lightGallery({
                    selector: "#imageGallery .lslide",
                    mode: "lg-fade",
                    closable: !1,
                    mousewheel: !1,
                    loop: !1,
                    enableDrag: !1,
                    enableSwipe: !1,
                    hideControlOnEnd: !0,
                    slideEndAnimatoin: !1
                })
            }
        })
    })
}), app.controller("home_owl", ["$scope", "$http", function (e, t) {
    e.ajax_home = function () {
        $(".home_exprt").addClass("loading"), t.get(APP_URL + "/ajax_home").then(function (t) {
            e.host_experiences = t.data.host_experiences, e.featured_host_experience_categories = t.data.featured_host_experience_categories, e.reservation = t.data.reservation, e.recommented = t.data.recommented, e.most_viewed = t.data.most_viewed, e.url = APP_URL + "/rooms/", setTimeout(function () {
                $(".hm_slide1").owlCarousel({
                    loop: !1,
                    margin: 20,
                    rtl: rtl,
                    responsiveClass: !0,
                    responsive: {
                        0: {items: 1, nav: !0},
                        425: {items: 2, nav: !0},
                        736: {items: 3, nav: !0},
                        992: {items: 3, nav: !0},
                        1025: {items: 4, nav: !0}
                    }
                }), $(".cate1").owlCarousel({
                    loop: !1,
                    margin: 20,
                    rtl: rtl,
                    responsiveClass: !0,
                    responsive: {
                        0: {items: 1, nav: !0},
                        425: {items: 2, nav: !0},
                        736: {items: 2, nav: !0},
                        992: {items: 2, nav: !0},
                        1024: {items: 3, nav: !0}
                    }
                }), $(".cate2").owlCarousel({
                    loop: !1,
                    margin: 20,
                    rtl: rtl,
                    responsiveClass: !0,
                    responsive: {
                        0: {items: 1, nav: !0},
                        425: {items: 2, nav: !0},
                        736: {items: 2, nav: !0},
                        992: {items: 2, nav: !0},
                        1024: {items: 3, nav: !0}
                    }
                }), $(".cate3").owlCarousel({
                    loop: !1,
                    margin: 20,
                    rtl: rtl,
                    responsiveClass: !0,
                    responsive: {
                        0: {items: 1, nav: !0},
                        425: {items: 2, nav: !0},
                        736: {items: 2, nav: !0},
                        992: {items: 2, nav: !0},
                        1024: {items: 3, nav: !0}
                    }
                }), $(".home_exprt").removeClass("loading")
            }, 20)
        })
    }, $(window).one("scroll", function () {
        e.ajax_home()
    });
    var a = "";
    e.ajax_home_explore = function () {
        a = 1, t.get(APP_URL + "/ajax_home_explore").then(function (t) {
            e.home_city_explore = t.data.home_city, e.city_count = t.data.city_count
        })
    };
    var o = "";
    e.ajax_our_community = function () {
        o = 1, t.get(APP_URL + "/ajax_our_community").then(function (t) {
            e.our_community = t.data.our_community_banners
        })
    }, $(".explore_community").addClass("loading"), $(window).scroll(function () {
        var t = $(".explore_community").offset().top, o = $(".explore_community").outerHeight(), n = $(window).height();
        $(this).scrollTop() > t + o - n && "" == a && e.ajax_home_explore(), setTimeout(function () {
            $(".explore_community").removeClass("loading")
        }, 2e3)
    }), $(window).scroll(function () {
        var t = $(".our-community .explore_community").offset().top,
            a = $(".our-community .explore_community").outerHeight(), n = $(window).height();
        $(this).scrollTop() > t + a - n && "" == o && e.ajax_our_community(), setTimeout(function () {
            $(".our-community .explore_community").removeClass("loading")
        }, 2e3)
    })
}]), $(document).ready(function () {
    $(".profile_slider").owlCarousel({
        loop: !1,
        margin: 20,
        rtl: rtl,
        responsiveClass: !0,
        responsive: {
            0: {items: 1, nav: !0},
            425: {items: 2, nav: !0},
            736: {items: 2, nav: !0},
            992: {items: 2, nav: !0},
            1024: {items: 3, nav: !0}
        }
    })
}), $(window).scroll(function () {
    $("#tooltip1").hide()
});