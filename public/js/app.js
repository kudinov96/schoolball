var App = {
    Mediator: {
        sub: function (channel, callback) {
            $(document).on(channel, callback);
        }, pub: function (channel) {
            $(document).trigger(channel);
        }
    }
};

function slideToElement(selector, speed, offset) {
    speed = speed || 1000;
    offset = $(selector).offset().top;
    $(window).scrollTo(offset, speed);
}

if ($('.contentBlock--methods_content_tab_inner-mtdt').length) {
    var resizeTimer;
    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(mtdtHeight, 100);
    });
    mtdtHeight();
}
if ($('.contentBlock--champions_content_tab_inner-mtdt').length) {
    var resizeTimer;
    $(window).resize(function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(mtdtHeight, 100);
    });
    mtdtHeight();
}

function mtdtHeight() {
    $('.contentBlock--methods_content_tab_inner-mtdt .contentBlock__mtdt').removeAttr('style');
    $('.contentBlock--methods_content_tab_inner-mtdt').each(function () {
        var _ths = $(this);
        var _h0 = _ths.find('.contentBlock__mtdt').eq(0).height();
        var _h1 = _ths.find('.contentBlock__mtdt').eq(1).height();
        _h = _h0;
        if (_h1 > _h0) _h = _h1;
        _ths.find('.contentBlock__mtdt').css('height', (_h + 20) + 'px');
    });
}

$(window).scroll(function () {
    var toTop = $('.toTop');
    if ($(this).scrollTop() > 200) {
        if (!toTop.is(':visible')) {
            toTop.fadeIn();
        }
    } else {
        if (toTop.is(':visible')) {
            toTop.fadeOut();
        }
    }
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if (scrolled > 150) {
        $('.topNav--slide').addClass('active');
    } else {
        $('.topNav--slide').removeClass('active');
    }
});
$(function () {
    if (document.getElementById('menu') && document.getElementById('panel')) {
    }
    $(document).on("click", ".contentBlock--methodsInfoNew .contentBlock__button .btn-submit", function () {
        var _fl = $(this).data('fl');
        $(".modal-body #methodsform-file").val(_fl);
    });
    $(document).on("click", ".pButtonMethod", function () {
        setTimeout(function () {
            $('#shld .close').trigger('click')
        }, 3000);
    });
    $('.btn-submit--tglside').click(function () {
        $('#rating').toggleClass('other-side');
    });
    $('.rating-star_set').click(function () {
        _ths = $(this);
        _getRatingVal(_ths.data('val'), _ths.closest('.rating-card__inner--back'), 1);
    });
    $('.rating-star_set').hover(function () {
        _ths = $(this);
        _getRatingVal(_ths.data('val'), _ths.closest('.rating-card__inner--back'), 0);
    }, function () {
        _ths = $(this);
        _getRatingVal(0, _ths.closest('.rating-card__inner--back'), 0);
    });

    function _getRatingVal(_n, _prnt, _set) {
        if (_n == 0) {
            _r = _prnt.find('.rating-card__starsblock').data('r');
            if ($('#ratingform-r' + _r).length) {
                _n = $('#ratingform-r' + _r).val();
                if (!_n) _n = 0;
            }
        }
        _class = '';
        _new_v = '';
        if (_n == '0.5') {
            _new_v = 'Ужасно';
            _class = 'star_05';
        } else if (_n == '1.0') {
            _new_v = 'Очень плохо';
            _class = 'star_10';
        } else if (_n == '1.5') {
            _new_v = 'Плохо';
            _class = 'star_15';
        } else if (_n == '2.0') {
            _new_v = 'Приемлемо';
            _class = 'star_20';
        } else if (_n == '2.5') {
            _new_v = 'Обычно';
            _class = 'star_25';
        } else if (_n == '3.0') {
            _new_v = 'Нормально';
            _class = 'star_30';
        } else if (_n == '3.5') {
            _new_v = 'Хорошо';
            _class = 'star_35';
        } else if (_n == '4.0') {
            _new_v = 'Очень хорошо';
            _class = 'star_40';
        } else if (_n == '4.5') {
            _new_v = 'Почти идеал';
            _class = 'star_45';
        } else if (_n == '5.0') {
            _new_v = 'Идеально';
            _class = 'star_50';
        }
        _prnt.find('.rating-card__star--back').removeClass('star_05 star_10 star_15 star_20 star_25 star_30 star_35 star_40 star_45 star_50').addClass(_class);
        _prnt.find('.rating-card__numbers').html(_n);
        _prnt.find('.rating-card__title2').html(_new_v);
        if (_set == 1 && _n != 0) {
            _r = _prnt.find('.rating-card__starsblock').data('r');
            if ($('#ratingform-r' + _r).length) {
                $('#ratingform-r' + _r).val(_n);
            }
        }
    }

    $('.contentBlock--subscription__tariffList_tariff__form_input--select').on('change', function () {
        var _that = $(this);
        getPriceFormServer({
            product_id: parseInt(_that.data('app_id')),
            restaurant_id: parseInt(_that.val())
        }, function (price) {
            _that.parents('.contentBlock--subscription__tariffList_tariff').find('.contentBlock--subscription__tariffList_tariff_price').html(price);
        });
    });
    $('.lightbox').fancybox();
    //$(".phone-input").mask("+7(999) 999-9999");
    var params = {product_id: 0, restaurant_id: 0};
    $('#orderform-restaurant_id').on('change', function () {
        var active = parseInt($(this).val());
        var container = $('.scheduleContainer');
        params.restaurant_id = active;
        if (active > 0) {
            $('.payment-leftMessage').addClass('payment-leftMessage--scheduling');
            App.Mediator.pub('changePaymentPlayground');
            var activeSlide = container.find('.slider#pg' + active);
            activeSlide.show();
            container.show();
            container.find('.slider').not(activeSlide).hide();
            if (restaurantsList.length > 0) {
                for (var i = 0; i <= restaurantsList.length; i++) {
                    if (restaurantsList[i].id == active) {
                        active = restaurantsList[i];
                        $('.payment_description--playground').html(active.address);
                        break;
                    }
                }
            }
            if (params.product_id > 0) {
                getPriceFormServer(params, setPrice);
            }
        } else {
            container.hide();
            $('.payment-leftMessage').removeClass('payment-leftMessage--scheduling');
        }
    });
    $('#orderform-product_id').on('change', function () {
        var active = $(this).val();
        params.product_id = parseInt(active);
        if (params.restaurant_id > 0) {
            getPriceFormServer(params, setPrice);
        }
        if (active == 1) {
            $('.payment_description--type').show();
        } else {
            $('.payment_description--type').hide();
        }
        if (active == 1 || active == 2) {
            $('.payment_description--date').show();
        } else {
            $('.payment_description--date').hide();
        }
        if (productsList.length > 0) {
            for (var i = 0; i <= productsList.length; i++) {
                if (productsList[i].id == active) {
                    active = productsList[i];
                    $('.payment_description--product').html(active.description);
                    break;
                }
            }
        }
    });

    function setPrice(price) {
        $('.payment_price').html(price);
    }

    function getPriceFormServer(params, callback) {
        $.ajax({
            data: params, url: '/store/default/price', type: 'GET', success: function (data) {
                data = JSON.parse(data);
                callback(data.price);
            }
        });
    }

    $('.toTop_link').on('click', function () {
        $(window).scrollTo(0, 400);
    });
    $('.topNav_list_item_link').on('click', function () {
        var rel = $(this).attr('rel');
        slideToElement('#' + rel, 1000);
        return false;
    });
    $('.sideNav_list_item_link').on('click', function () {
        var rel = $(this).attr('rel');
        resetMenu = function () {
            container.className = 'container';
        }, resetMenu();
        document.getElementById('btnCls').classList.toggle('hide');
        document.getElementById('btnOpn').classList.toggle('hide');
        slideToElement('#' + rel, 1000);
        return false;
    });
    $('.contentBlock--motivate_next').on('click', function () {
        slideToElement('.contentBlock--subscription', 500);
        return false;
    });
    $('.contentBlock--principles__tabs_tab').on('click', function () {
        var id = $(this).attr('href'), content = $('#' + id);
        $(this).addClass('contentBlock--principles__tabs_tab--active');
        $('.contentBlock--principles__tabs_tab').not(this).removeClass('contentBlock--principles__tabs_tab--active');
        content.addClass('contentBlock--principles__tabs_content_tab--active');
        $('.contentBlock--principles__tabs_content_tab').not(content).removeClass('contentBlock--principles__tabs_content_tab--active');
        return false;
    });
});
if (typeof google !== 'undefined') {
    var _zoom = 10;
    var _center = 0;
    if (window.location.href.search('spb') >= 0) {
        _zoom = 11;
        _center = new google.maps.LatLng(60.024267, 30.331575);
    } else if (window.location.href.search('nsk') >= 0) {
        _center = new google.maps.LatLng(55.001260, 82.955146);
    } else {
        // _center = new google.maps.LatLng(55.845228, 37.637919);55.739775 55.739775, 37.691242
        _center = new google.maps.LatLng(55.739775, 37.691242);
    }

    var _img = '/sball/static/mainweb/images/markerN.png';
    if ($('.otdel-map').data('zoom')) {
        _zoom = 13;
        _img = '/sball/static/mainweb/images/markerA.png';
    }
    window.SuperMap = {
        id: 'map',
        options: {
            center: _center,
            zoom: _zoom,
            zoomControl: true,
            mapTypeControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: true,
            streetViewControl: false,
            gestureHandling: "greedy",
        },
        markers: [],
        addMarker: function (options) {
            options.map = options.map || this.link;
            options.icon = '/sball/static/mainweb/images/markerA.png?1';
            var marker = new google.maps.Marker(options);
            this.markers.push(marker);
            var that = this;
            var infowindow = new google.maps.InfoWindow({content: '<span class="map-selector-item__address">' + options.title + '</span>'});
            marker.addListener('click', function () {
                that.initArea(marker.app_id);
                infowindow.open(options.map, marker);
            });
            return marker;
        },
        getAreaPosition: function (element) {
            return {lat: parseFloat($(element).data('lat')), lng: parseFloat($(element).data('lng'))}
        },
        initArea: function (id) {
            var areaItem = $('.map-selector-item[data-id="' + id + '"]');
            areaItem.addClass('map-selector-item--active').addClass('slick-active').addClass('slick-current');
            var addr = areaItem.find(".map-selector-item__address").html();
            $('.map-selector-item').not(areaItem).removeClass('slick-current').removeClass('slick-active').removeClass('map-selector-item--active');
            SuperMap.link.setCenter(SuperMap.getAreaPosition(areaItem));
            SuperMap.link.setZoom(_zoom);
            this.markers.forEach(function (item, i, markers) {
                if (item.app_id !== id) {
                    item.setIcon('/sball/static/mainweb/images/markerA.png');
                } else {
                    item.setIcon(_img);
                }
            });
            $.ajax({
                url: areaItem.find('.map-selector-item__link').attr('href'), type: "GET", success: function (data) {
                    $('.contentBlock--areas_contentWrapper').html(data);
                    App.Mediator.pub('area.load');
                }
            });
        },
        styles: [{
            "featureType": "landscape",
            "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
        }, {
            "featureType": "poi",
            "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.highway",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
        }, {
            "featureType": "road.local",
            "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
        }, {
            "featureType": "transit",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
        }]
    };
    _last = '';
    SuperMap.initialize = function () {
        if (document.getElementById(SuperMap.id)) {
            SuperMap.link = new google.maps.Map(document.getElementById(SuperMap.id), SuperMap.options);
            SuperMap.link.set('styles', SuperMap.styles);
            $('.map-selector-item').each(function () {
                var params = {
                    position: SuperMap.getAreaPosition(this),
                    app_id: $(this).data('id'),
                    title: $(this).find('.map-selector-item__address').html()
                };
                SuperMap.addMarker(params);
            });
            SuperMap.link.addListener('click', function () {
                SuperMap.link.setOptions({scrollwheel: true});
            });
        }
        if ($('.otdel-map').data('zoom') && $('.map-selector-item').length == 1) {
            SuperMap.initArea($('.map-selector-item').data('id'));
        }
    };
    //google.maps.event.addDomListener(window, 'load', SuperMap.initialize);
}
$(function () {
    if (window.location.hash.slice(1, 7) == 'method') {
        goTab.call($('a[href="' + window.location.hash + '"]').parent('.contentBlock--methods__tabs_tab'));
    }
    if (window.location.hash.slice(1, 7) == 'tablechamp') {
        goTab.call($('a[href="' + window.location.hash + '"]').parent('.contentBlock--champions__tabs_tab'));
    }
    $('.contentBlock--methods__tabs_tab').on('click', function () {
        return goTab.call($(this));
    });
    $('.contentBlock--champions__tabs_tab').on('click', function () {
        return goTabChamp.call($(this));
    });
    $('.map-selector-item').click(function () {
        var id = $(this).data('id');
        SuperMap = window.SuperMap;
        SuperMap.initArea(id);
    });
    if (window.location.hash.slice(1, 7) == 'thanks') {
        $('#thsmdlbut').trigger('click');
    }
    if (window.location.hash.slice(1, 10) == 'ratingths') {
        $('#thsrtngmdlbut').trigger('click');
    }
    if (window.location.hash.slice(1, 10) == 'recallths') {
        $('#recallthsbut').trigger('click');
    }
});

function goTab() {
    var id = $(this).find('.contentBlock--methods__tabs_tab_link').attr('href'), content = $(id);
    $(this).addClass('contentBlock--methods__tabs_tab--active');
    url = window.location.origin + "/methods" + id;
    $('.contentBlock--methods__tabs_tab--active').not(this).removeClass('contentBlock--methods__tabs_tab--active');
    content.addClass('contentBlock--methods_content_tab--active');
    $('.contentBlock--methods_content_tab').not(content).removeClass('contentBlock--methods_content_tab--active');
    mtdtHeight();
    $("#method-tabs").collapse("hide");
    return false;
}

function goTabChamp() {
    var id = $(this).find('.contentBlock--champions__tabs_tab_link').attr('href'), content = $(id);
    $(this).addClass('contentBlock--champions__tabs_tab--active');
    url = window.location.origin + "/tablechamp" + id;
    if (!!(window.history && history.pushState)) window.history.pushState(null, null, url);
    $('.contentBlock--champions__tabs_tab--active').not(this).removeClass('contentBlock--champions__tabs_tab--active');
    content.addClass('contentBlock--champions_content_tab--active');
    $('.contentBlock--champions_content_tab').not(content).removeClass('contentBlock--champions_content_tab--active');
    mtdtHeight();
    return false;
}

"use strict";
$(function () {
    var elements = ['pageHeader'], breakpoint = 0, scrollingContainer = $(window), activePostfix = '--scrolled';
    handleScrollEvent();
    $(window).on('scroll', function (e) {
        handleScrollEvent()
    });

    function handleScrollEvent() {
        var scrolled = scrollingContainer.scrollTop();
        for (var i = 0; i <= elements.length - 1; i++) {
            var selector = "." + elements[i], activeClass = elements[i] + activePostfix;
            if (scrolled > breakpoint) {
                $(selector).addClass(activeClass)
            } else {
                $(selector).removeClass(activeClass)
            }
        }
    }
});
var areaSlider, scheduleSlider, selectorListSlider = $('.map-selector__list').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: false,
    centerMode: false,
    prevArrow: '.map-selector__control--prev',
    nextArrow: '.map-selector__control--next'
});

function sliderAreaInit() {
    areaSlider = $('.slider--areas > .slider_slides').slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });
    $('.slider--areas .slider_slide_link').on('click', function () {
        areaSlider.slick('slickNext');
        return false;
    });
    scheduleSlider = $('.slider--schedule > .slider_slides').not('.scheduleContainer > .slider--schedule > .slider_slides').slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
    });
    $('.slider--schedule .slider_slide_link').on('click', function () {
        scheduleSlider.slick('slickNext');
        return false;
    });
}

$(function () {
    App.Mediator.sub('area.load', sliderAreaInit);
    App.Mediator.pub('area.load');
    App.Mediator.sub('area.click', function () {
    });
    App.Mediator.sub('changePaymentPlayground', function () {
        var active = $('#orderform-restaurant_id').val();
        scheduleSlider = $('.slider--schedule#pg' + active + ' > .slider_slides');
        setTimeout(function () {
            scheduleSlider.slick({infinite: true, dots: true, slidesToShow: 1, slidesToScroll: 1, arrows: false});
        }, 10);
    });
    $('.main-slider').slick({
        infinite: true,
        dots: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
    });
    $('.slider--trainers > .slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '.slider--trainers_controls--prev',
        nextArrow: '.slider--trainers_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
            breakpoint: 768,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider--activity > .slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '.slider--activity_controls--prev',
        nextArrow: '.slider--activity_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 2, slidesToScroll: 1}}, {
            breakpoint: 768,
            settings: {slidesToShow: 1, slidesToScroll: 1}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider--guest > .slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        prevArrow: '.slider--trainers_controls--prev',
        nextArrow: '.slider--trainers_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 2, slidesToScroll: 1}}, {
            breakpoint: 768,
            settings: {slidesToShow: 1, slidesToScroll: 1}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider--methods > .slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '.slider--methods_controls--prev',
        nextArrow: '.slider--methods_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 1}}, {
            breakpoint: 768,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider  > .services-list.slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '.slider--services_controls--prev',
        nextArrow: '.slider--services_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
            breakpoint: 768,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider  > .camp-list.slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '.slider--camp_controls--prev',
        nextArrow: '.slider--camp_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 1}}, {
            breakpoint: 768,
            settings: {slidesToShow: 2, slidesToScroll: 1}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider  > .directions-list.slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '.slider--directions_controls--prev',
        nextArrow: '.slider--directions_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
            breakpoint: 768,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
    $('.slider  > .recall-list.slider_slides').slick({
        infinite: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '.slider--recall_controls--prev',
        nextArrow: '.slider--recall_controls--next',
        responsive: [{breakpoint: 1980, settings: {slidesToShow: 1, slidesToScroll: 1}}, {
            breakpoint: 768,
            settings: {slidesToShow: 1, slidesToScroll: 1}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    });
});
$('.slider  > .rating-list.slider_slides').slick({
    infinite: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '.slider--rating_controls--prev',
    nextArrow: '.slider--rating_controls--next',
    responsive: [{breakpoint: 1980, settings: {slidesToShow: 4, slidesToScroll: 4}}, {
        breakpoint: 768,
        settings: {slidesToShow: 2, slidesToScroll: 1}
    }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
});
$('.slider--faq > .slider_slides').slick({
    infinite: true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: '.slider--faq_controls--prev',
    nextArrow: '.slider--faq_controls--next',
    responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
        breakpoint: 768,
        settings: {slidesToShow: 2, slidesToScroll: 2}
    }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
});
$('.slider--result > .slider_slides').slick({
    infinite: true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '.slider--result_controls--prev',
    nextArrow: '.slider--result_controls--next',
    responsive: [{breakpoint: 1980, settings: {slidesToShow: 3, slidesToScroll: 3}}, {
        breakpoint: 768,
        settings: {slidesToShow: 2, slidesToScroll: 2}
    }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
});
$(document).ready(function () {
    $('.tabs_menu a').click(function (e) {
        e.preventDefault();
        $('.tabs_menu .contentBlock--champion_table_cell_switch--active').removeClass(' contentBlock--champion_table_cell_switch--active');
        $(this).addClass(' contentBlock--champion_table_cell_switch--active');
        var tab = $(this).attr('href');
        $('.tab').not(tab).css({'display': 'none'});
        $(tab).fadeIn(400);
    });
});
$('.slider--services_slide_service_info_more').on('click', function () {
    var back = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--back');
    back.addClass('slider--services_slide_service--back--active');
    $('.slider--services_slide_service--back').not(back).removeClass('slider--services_slide_service--back--active');
    var front = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--front');
    front.addClass('slider--services_slide_service--front--active');
    $('.slider--services_slide_service--front').not(front).removeClass('slider--services_slide_service--front--active');
    return false;
});
$('.slider--trainers_slide_trainer_info_more').on('click', function () {
    var back = $(this).parents('.slider--trainers_slide').find('.slider--trainers_slide_trainer--back');
    back.addClass('slider--trainers_slide_trainer--back--active');
    $('.slider--trainers_slide_trainer--back').not(back).removeClass('slider--trainers_slide_trainer--back--active');
    var front = $(this).parents('.slider--trainers_slide').find('.slider--trainers_slide_trainer--front');
    front.addClass('slider--trainers_slide_trainer--front--active');
    $('.slider--trainers_slide_trainer--front').not(front).removeClass('slider--trainers_slide_trainer--front--active');
    return false;
});
$('.slider--faq_slide_question_info_more').on('click', function () {
    var back = $(this).parents('.slider--faq_slide').find('.slider--faq_slide_question--back');
    back.addClass('slider--faq_slide_question--back--active');
    $('.slider--faq_slide_question--back').not(back).removeClass('slider--faq_slide_question--back--active');
    var front = $(this).parents('.slider--faq_slide').find('.slider--faq_slide_question--front');
    front.addClass('slider--faq_slide_question--front--active ');
    $('.slider--faq_slide_question--front').not(front).removeClass('slider--faq_slide_question--front--active ');
    return false;
});
$('.slider--result_slide_player_info_more').on('click', function () {
    var back = $(this).parents('.slider--result_slide').find('.slider--result_slide_player--back');
    back.addClass('slider--result_slide_player--back--active');
    $('.slider--result_slide_player--back').not(back).removeClass('slider--result_slide_player--back--active');
    var front = $(this).parents('.slider--result_slide').find('.slider--result_slide_player--front');
    front.addClass('slider--result_slide_player--front--active ');
    $('.slider--result_slide_player--front').not(front).removeClass('slider--result_slide_player--front--active ');
    return false;
});
$('.slider--services_slide_service_close').on('click', function () {
    var back = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--back');
    back.removeClass('slider--services_slide_service--back--active');
    var front = $(this).parents('.slider--services_slide').find('.slider--services_slide_service--front');
    front.removeClass('slider--services_slide_service--front--active');
    return false;
});
$('.slider--trainers_slide_trainer_close').on('click', function () {
    var back = $(this).parents('.slider--trainers_slide').find('.slider--trainers_slide_trainer--back');
    back.removeClass('slider--trainers_slide_trainer--back--active');
    var front = $(this).parents('.slider--trainers_slide').find('.slider--trainers_slide_trainer--front');
    front.removeClass('slider--trainers_slide_trainer--front--active');
    return false;
});
$('.slider--faq_slide_question_close').on('click', function () {
    var back = $(this).parents('.slider--faq_slide').find('.slider--faq_slide_question--back');
    back.removeClass('slider--faq_slide_question--back--active');
    var front = $(this).parents('.slider--faq_slide').find('.slider--faq_slide_question--front');
    front.removeClass('slider--faq_slide_question--front--active');
    return false;
});
$('.slider--result_slide_player_close').on('click', function () {
    var back = $(this).parents('.slider--result_slide').find('.slider--result_slide_player--back');
    back.removeClass('slider--result_slide_player--back--active');
    var front = $(this).parents('.slider--result_slide').find('.slider--result_slide_player--front');
    front.removeClass('slider--result_slide_player--front--active');
    return false;
});
if (window.innerWidth < 50000) {
    jQuery(".text_review").each(function () {
        var review_full = jQuery(this).html();
        var review = review_full;
        if (review.length > 50000) {
            review = review.substring(0, 50000);
            jQuery(this).html(review + '<div class="read_more" style="cursor: pointer;"> <p><b>Читать полностью ...</b></p></div>');
        }
        jQuery(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function () {
        jQuery(this).parent().html(jQuery(this).parent().find(".full_text").html());
    });
}

function mobilecheck() {
    var check = false;
    (function (a) {
        if (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
}

var SidebarMenuEffects = (function () {
    function hasParentClass(e, classname) {
        if (e === document) return false;
        if (classie.has(e, classname)) {
            return true;
        }
        return e.parentNode && hasParentClass(e.parentNode, classname);
    }

    function init() {
        var container = document.getElementById('container'),
            buttons = Array.prototype.slice.call(document.querySelectorAll('#st-trigger-effects > button')),
            eventtype = mobilecheck() ? 'touchstart' : 'click', resetMenu = function () {
                classie.remove(container, 'st-menu-open');
            }, bodyClickFn = function (evt) {
                if (!hasParentClass(evt.target, 'st-menu')) {
                    resetMenu();
                    document.getElementById('btnCls').classList.toggle('hide');
                    document.getElementById('btnOpn').classList.toggle('hide');
                    document.removeEventListener(eventtype, bodyClickFn);
                }
            };
        buttons.forEach(function (el, i) {
            var effect = el.getAttribute('data-effect');
            el.addEventListener(eventtype, function (ev) {
                ev.stopPropagation();
                ev.preventDefault();
                document.getElementById('btnCls').classList.toggle('hide');
                document.getElementById('btnOpn').classList.toggle('hide');
                classie.toggle(container, effect);
                setTimeout(function () {
                    classie.toggle(container, 'st-menu-open');
                }, 25);
            });
        });
    }

    init();
})();

function openbox(id) {
    display = document.getElementById(id).style.display;
    if (display == 'none') {
        document.getElementById(id).style.display = 'block';
    } else {
        document.getElementById(id).style.display = 'none';
    }
}

+function ($) {
    'use strict';
    var Tab = function (element) {
        this.element = $(element)
    }
    Tab.VERSION = '3.3.5'
    Tab.TRANSITION_DURATION = 150
    Tab.prototype.show = function () {
        var $this = this.element
        var $ul = $this.closest('ul:not(.dropdown-menu)')
        var selector = $this.data('target')
        if (!selector) {
            selector = $this.attr('href')
            selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '')
        }
        if ($this.parent('li').hasClass('active')) return
        var $previous = $ul.find('.active:last a')
        var hideEvent = $.Event('hide.bs.tab', {relatedTarget: $this[0]})
        var showEvent = $.Event('show.bs.tab', {relatedTarget: $previous[0]})
        $previous.trigger(hideEvent)
        $this.trigger(showEvent)
        if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return
        var $target = $(selector)
        this.activate($this.closest('li'), $ul)
        this.activate($target, $target.parent(), function () {
            $previous.trigger({type: 'hidden.bs.tab', relatedTarget: $this[0]})
            $this.trigger({type: 'shown.bs.tab', relatedTarget: $previous[0]})
        })
    }
    Tab.prototype.activate = function (element, container, callback) {
        var $active = container.find('> .active')
        var transition = callback && $.support.transition && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

        function next() {
            $active.removeClass('active').find('> .dropdown-menu > .active').removeClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', false)
            element.addClass('active').find('[data-toggle="tab"]').attr('aria-expanded', true)
            if (transition) {
                element[0].offsetWidth
                element.addClass('in')
            } else {
                element.removeClass('fade')
            }
            if (element.parent('.dropdown-menu').length) {
                element.closest('li.dropdown').addClass('active').end().find('[data-toggle="tab"]').attr('aria-expanded', true)
            }
            callback && callback()
        }

        $active.length && transition ? $active.one('bsTransitionEnd', next).emulateTransitionEnd(Tab.TRANSITION_DURATION) : next()
        $active.removeClass('in')
    }

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.tab')
            if (!data) $this.data('bs.tab', (data = new Tab(this)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.tab
    $.fn.tab = Plugin
    $.fn.tab.Constructor = Tab
    $.fn.tab.noConflict = function () {
        $.fn.tab = old
        return this
    }
    var clickHandler = function (e) {
        e.preventDefault()
        Plugin.call($(this), 'show')
    }
    $(document).on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler).on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)
}(jQuery);
