jQuery(document).ready(function($) {

    "use strict";

    if($('body').hasClass("rtl")) {
        var rtlValue = true;
    } else {
        var rtlValue = false;
    }

    /**
     * Ticker script
     */
     $("#newsTicker").lightSlider({
        item: 1,
        vertical: true,
        loop: true,
        verticalHeight: 35,
        pager: false,
        enableTouch: false,
        enableDrag: false,
        auto: true,
        controls: true,
        speed: 1350,
        rtl: rtlValue,
        prevHtml: '<i class="fa fa-chevron-left"></i>',
        nextHtml: '<i class="fa fa-chevron-right"></i>',
        onSliderLoad: function() {
            $('#ep-newsTicker').removeClass('cS-hidden');
        }
    });

    /**
     * Slider script
     */
     $('.slider-posts').each(function() {
        $(".ep-main-slider").lightSlider({
            item: 1,
            auto: true,
            pager: false,
            loop: true,
            speed: 1350,
            pause: 5200,
            enableTouch: false,
            enableDrag: false,
            rtl: rtlValue,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            onSliderLoad: function() {
                $('.ep-main-slider').removeClass('cS-hidden');
            }
        });
    });

    /**
     * Featured posts Slider script
     */
     $('.featured-slider-posts').each(function() {
        $(".ep-feat-slider").lightSlider({
            item: 3,
            auto: true,
            pager: true,
            loop: true,
            speed: 1350,
            pause: 5200,
            enableTouch: false,
            enableDrag: false,
            rtl: rtlValue,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            onSliderLoad: function() {
                $('.ep-feat-slider').removeClass('cS-hidden');
            },
            responsive: [{
                breakpoint: 840,
                settings: {
                    item: 2,
                    slideMove: 1,
                    slideMargin: 6,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1,
                }
            }
            ]
        });
    });

    /**
     * Default widget tabbed
     */
     $("#ep-tabbed-widget").tabs();


    //Search toggle
    $('.ep-header-search-wrapper .search-main').click(function() {
        $('.search-form-main').slideToggle();
        $('.search-form-main .search-field').focus();
    });

    //responsive menu toggle
    $('.ep-header-menu-wrapper .menu-toggle').click(function(event) {
        $('.ep-header-menu-wrapper #site-navigation').slideToggle('slow');
    });

    //responsive sub menu toggle
    $('#site-navigation .menu-item-has-children,#site-navigation .page_item_has_children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');

    $('#site-navigation .sub-toggle').click(function() {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).parent('.page_item_has_children').children('ul.children').first().slideToggle('1000');
        $(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
    });

    /**
     * Scroll To Top
     */
     $(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            $('#ep-scrollup').fadeIn('slow');
        } else {
            $('#ep-scrollup').fadeOut('slow');
        }
    });

     $('#ep-scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    /**
     * Toggle for top featured posts section
     */
     $('.ep-top-featured-toggle').click(function(e) {
        e.preventDefault();
        $(this).parents('.ep-top-header-wrap').next('.ep-top-featured-wrapper').slideToggle('slow');
        $(this).toggleClass('toggle-opened');
    });

 });