jQuery(document).ready(function ($) {
    "use strict"
    $('#resume_create_job_record_table_1').show("fast");
    $('#resume_create_add_more_job_records_1').show("fast");
    // ------- Bnner slider ------- //
    jQuery('#banner-slider').on('init', function (e, slick) {
        var $firstAnimatingElements = jQuery('div.banner-slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    jQuery('#banner-slider').on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = jQuery('div.banner-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });
    jQuery('#banner-slider').slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: true,
        arrows: false,
        fade: true
    });
    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
            var $this = jQuery(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function () {
                $this.removeClass($animationType);
            });
        });
    }
    // ------- Bnner slider ------- //

    // ------- Scroll Top Back ------- //
    var offset = 300,
            offset_opacity = 1200,
            scroll_top_duration = 700,
            $back_to_top = jQuery('.scrollup');
    jQuery(window).scroll(function () {
        (jQuery(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if (jQuery(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        jQuery('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration
                );
    });
    // ------- Scroll Top Back ------- //

    // ---------- Banner Slider Fix ---------- //
    jQuery(".nav-holder").sticky({topSpacing: -84});
    // ---------- Banner Slider Fix ---------- //

    // ------- Responsive Menu ------- //
    jQuery(".dropdowns").dropdowns();
    // ------- Responsive Menu ------- //

    // ------- Search modal ------- //
    jQuery("#open-search-modal").click(function () {
        jQuery(".search-modal").toggleClass("open-search-modal");
    });
    // ------- Search modal ------- //

    // ------- Search modal ------- //
    jQuery("#open-cart-modal").click(function () {
        jQuery(".cart-items").toggleClass("open-cart-modal");
    });
    // ------- Search modal ------- //

    // ------- Parallax ------- //    
    //Plugin activation
    jQuery(window).enllax();
    // jQuery('#some-id').enllax();
    //     jQuery('selector').enllax({
    //     type: 'background', // 'foreground'
    //     ratio: 0.5,
    //     direction: 'vertical' // 'horizontal'
    // });
    // ------- Parallax ------- //

    // ------- Timeline Slider ------- //
    jQuery('#about-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 500,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    jQuery('.prev').on("click", function () {
        jQuery('#about-slider').slick('slickPrev');
    });

    jQuery('.next').on("click", function () {
        jQuery('#about-slider').slick('slickNext');
    });
    // ------- Timeline Slider ------- //

    // ------- Testimonial ------- //
    jQuery('#testimonial-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
    });
    // ------- Testimonial ------- //

    // ------- Timeline Slider ------- //
    jQuery('#brands-logos-slider').slick({
        dots: false,
        infinite: false,
        speed: 700,
        arrows: false,
        slidesToShow: 7,
        slidesToScroll: 1,
        responsive: [
            {breakpoint: 102, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 991, settings: {slidesToShow: 5, slidesToScroll: 1}},
            {breakpoint: 600, settings: {slidesToShow: 4, slidesToScroll: 1}},
            {breakpoint: 480, settings: {slidesToShow: 3, slidesToScroll: 1}}
        ]
    });
    // ------- Timeline Slider ------- //

    // ------- Timeline Slider ------- //
    jQuery('#services-slider').slick({
        dots: false,
        infinite: false,
        speed: 700,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {breakpoint: 1200, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 992, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 641, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 481, settings: {slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    // ------- Timeline Slider ------- //

    // ------- Timeline Slider ------- //
    jQuery('#blog-grid-slider').slick({
        dots: false,
        infinite: false,
        speed: 700,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {breakpoint: 1200, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 992, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 481, settings: {slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    jQuery('.blog-grid-prev').on("click", function () {
        jQuery('#blog-grid-slider').slick('slickPrev');
    });

    jQuery('.blog-grid-next').on("click", function () {
        jQuery('#blog-grid-slider').slick('slickNext');
    });
    // ------- Timeline Slider ------- //


    // ------- Counter ------- //
    try {
        jQuery('#theme-counters').appear(function () {
            jQuery('#chapters-1, #chapters-2, #miles, #following').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });
            jQuery('#amount').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, '.');
                }
            });
            jQuery('.timer').each(count);
            function count(options) {
                var $this = jQuery(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    } catch (err) {
    }
    // ------- Counter ------- //

    // ------- Animated Progress Bar ------- //
    try {
        jQuery('#theme-skillgroup').appear(function () {
            jQuery('.theme-skillholder').each(function () {
                jQuery(this).find('.theme-skillbar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2500);
            });
        });
    } catch (err) {
    }
    // ------- Animated Progress Bar ------- //

    // ------- Timeline Slider ------- //
    jQuery('#reviews-list').slick({
        dots: true,
        infinite: false,
        speed: 700,
        arrows: true,
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    // ------- Timeline Slider ------- //

    // ------- Recent Post Slider ------- //
    jQuery('#recent-post-slider').slick({
        dots: true,
        infinite: true,
        speed: 1500,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {breakpoint: 1200, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 991, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 767, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 639, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    // ------- Recent Post Slider ------- //

    // ------- Accomodations Slider ------- //
    jQuery('#slider-post').slick({
        dots: false,
        infinite: true,
        speed: 700,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    // ------- accomodations-slider ------- //

    // ------- Product Slider ------- //  
    jQuery('#product-slider2').slick({
        dots: true,
        infinite: true,
        speed: 700,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {breakpoint: 992, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 991, settings: {slidesToShow: 3, slidesToScroll: 1}},
            {breakpoint: 768, settings: {slidesToShow: 2, slidesToScroll: 1}},
            {breakpoint: 481, settings: {slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    // ------- Product Slider ------- //

    // ------- Product Slides ------- //
    jQuery('#product-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '#product-thumnail'
    });
    jQuery('#product-thumnail').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '#product-slides',
        dots: false,
        focusOnSelect: true,
        arrows: false,
        responsive: [
            {breakpoint: 641, settings: {slidesToShow: 5, slidesToScroll: 1}},
            {breakpoint: 481, settings: {slidesToShow: 3, slidesToScroll: 1}}
        ]
    });
    // ------- Product Slides ------- //

    // ------- init cubeportfolio ------- //
    jQuery('#js-grid-juicy-projects').cubeportfolio({
        filters: '#js-filters-juicy-projects',
        loadMore: '#js-loadMore-juicy-projects',
        loadMoreAction: 'click',
        layoutMode: 'grid',
        defaultFilter: '*',
        animationType: 'quicksand',
        gapHorizontal: 35,
        gapVertical: 30,
        gridAdjustment: 'responsive',
        mediaQueries:
                [{width: 1500, cols: 3},
                    {width: 1100, cols: 3},
                    {width: 800, cols: 3},
                    {width: 480, cols: 2},
                    {width: 320, cols: 1}],
        caption: 'overlayBottomPush',
        displayType: 'sequentially',
        displayTypeSpeed: 100,
        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function (url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                data: {id: url},
                timeout: 10000
            })
                    .done(function (result) {
                        t.updateSinglePage(result);
                    })
                    .fail(function () {
                        t.updateSinglePage('AJAX Error! Please refresh the page!');
                    });
        },
    });
    // ------- init cubeportfolio ------- //

    // ------- Range Slider ------- //
    jQuery("#ex2").slider({});
    // ------- Range Slider ------- //

    // ------- Map ------- //  
    jQuery("#contact-map").gmap3({
        map: {
            options: {
                center: [46.578498, 2.457275],
                zoom: 5,
                scrollwheel: false
            }
        }
    });
    // ------- Map ------- //

    // ------- Auto height function ------- //
    var setElementHeight = function () {
        var width = jQuery(window).width();
        /*if (jQuery('.theme-hero-slider li img') >= height) {*/
        var height = jQuery(window).height();
        jQuery('.fullscreen').css('height', (height));
    }
    //       else {
    //            jQuery('.autoheight').css('min-height', (800));
    //        }
    //};
    jQuery(window).on("resize", function () {
        setElementHeight();
    }).resize();
    // ------- Auto height function ------- //

    // ------- Prety Photo ------- //
    jQuery("a[data-rel]").each(function () {
        jQuery(this).attr("rel", jQuery(this).data("rel"));
    });
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'dark_square',
        slideshow: 3000,
        autoplay_slideshow: false,
        social_tools: false
    });
    // ------- Prety Photo ------- //

    // ------- PrettyPhoto Video Popup ------- //
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    // ------- PrettyPhoto Video Popup ------- //

});

$('#resume_create_add_more_language_btn').on('click', function () {
    $('#resume_create_add_more_language_tr').hide("fast");
    $('#resume_create_more_language_tr').show("fast");
    $('#resume_create_hide_more_language_tr').show("fast");
});

$('#resume_create_hide_more_language_tr').on('click', function () {
    $('#resume_create_add_more_language_tr').show("fast");
    $('#resume_create_more_language_tr').hide("fast");
    $('#resume_create_hide_more_language_tr').hide("fast");
});


$('#resume_create_more_defects_fields_btn').on('click', function () {
    $('#resume_create_add_more_defects_fields_tr').hide("fast");
    $('#create_resume_defects_tr_3').show("fast");
    $('#resume_create_hide_more_defects_fields_tr').show("fast");
});

$('#resume_create_hide_more_defects_fields_btn').on('click', function () {
    $('#resume_create_add_more_defects_fields_tr').show("fast");
    $('#create_resume_defects_tr_3').hide("fast");
    $('#resume_create_hide_more_defects_fields_tr').hide("fast");
});


$('#resume_create_add_more_education_1_btn').on('click', function () {
    $('#resume_create_add_more_education_2_tr').show("fast");
    $('#resume_create_add_more_education_fields_1').show("fast");
    $('#resume_create_add_more_education_1_tr').hide("fast");
});

$('#resume_create_add_more_education_2_btn').on('click', function () {
    $('#resume_create_add_more_education_fields_2').show("fast");
    $('#resume_create_add_more_education_3_tr').show("fast");
    $('#resume_create_add_more_education_2_tr').hide("fast");
});
$('#resume_create_add_more_education_3_btn').on('click', function () {
    $('#resume_create_add_more_education_fields_3').show("fast");
    $('#resume_create_add_more_education_3_tr').hide("fast");
});

$('#resume_create_add_more_job_records_1_btn').on('click', function () {
    $('#resume_create_job_record_table_2').show("fast");
    $('#resume_create_add_more_job_records_2').show("fast");
    $('#resume_create_add_more_job_records_1').hide("fast");
});

$('#resume_create_add_more_job_records_2_btn').on('click', function () {
    $('#resume_create_job_record_table_3').show("fast");
    $('#resume_create_add_more_job_records_3').show("fast");
    $('#resume_create_add_more_job_records_2').hide("fast");
});

$('#resume_create_add_more_job_records_3_btn').on('click', function () {
    $('#resume_create_job_record_table_4').show("fast");
    $('#resume_create_add_more_job_records_3').hide("fast");
});

$('#resume_create_relatives_btn_yes').on('click', function () {
    $('#resume_create_relatives_info').show("fast");
});

$('#resume_create_relatives_btn_no').on('click', function () {
    $('#resume_create_relatives_info').hide("fast");
});

$('#create_resume_driving_license_btn_yes').on('click', function () {
    $('#resume_create_driving_license_type').show("fast");
});

$('#create_resume_driving_license_btn_no').on('click', function () {
    $('#resume_create_driving_license_type').hide("fast");
});

$('#reusme_create_apply_before_btn_yes').on('click', function () {
    $('#resume_create_apply_before_date').show("fast");
});

$('#reusme_create_apply_before_btn_no').on('click', function () {
    $('#resume_create_apply_before_date').hide("fast");
});




$('#reusme_create_contact_employer_btn_yes').on('click', function () {
    $('#resume_create_contact_employer_tr').show("fast");
});

$('#reusme_create_contact_employer_btn_no').on('click', function () {
    $('#resume_create_contact_employer_tr').hide("fast");
});

$('#resume_create_defects_btn_no').on('click', function () {
    $('#resume_create_hide_more_defects_fields_tr').hide("fast");
    $('#resume_create_add_more_defects_fields_tr').hide("fast");
    $('#create_resume_defects_tr_3').hide("fast");
    $('#create_resume_defects_tr_2').hide("fast");
    $('#create_resume_defects_tr_1').hide("fast");
});

$('#resume_create_defects_btn_yes').on('click', function () {
    $('#create_resume_defects_tr_1').show("fast");
    $('#create_resume_defects_tr_2').show("fast");
    $('#resume_create_add_more_defects_fields_tr').show("fast");
});


