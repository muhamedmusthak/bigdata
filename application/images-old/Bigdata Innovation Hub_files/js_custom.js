/*---------------------------------------------------------------------------------
/* Custom javascript code for this site.
/*---------------------------------------------------------------------------------*/
jQuery(document).ready(function() {
    /*jQuery('.page-template-page-overview .tabs-list a').click(function(e) {
        e.preventDefault();
        $( "#corporate_content" ).addClass('ajaxloading');
        $( "#corporate_content" ).load(  this.href +' #corporate_content> *' , function() {
              $('#corporate_content').modal('hide');
              $( "#corporate_content" ).removeClass('ajaxloading');
        });
    });*/
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

    }else{

       $('a[href^="tel:"]').on('click',function(e){e.preventDefault();});
       $('a[href^="tel:"]').attr('href', 'javascript:void(0);');
    }
    jQuery('.about-us-content-tabs .tab-item').click(function() {
        var about_content_id = jQuery(this).attr('id');
        jQuery('.content-about-us').fadeOut();
        jQuery(this).closest('#page').find('#a_' + about_content_id).fadeIn();
        jQuery('.about-us-content-tabs .tab-item').removeClass('active');
        jQuery(this).addClass('active');
    });


    // JAWS Cookie Capture -- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // var capturetrigger_interval = setInterval(function(){

    //     clearInterval(capturetrigger_interval);
    //     var formData = new FormData();
    //     formData.append('action', 'capturecookie');
    //     formData.append('jigkey', jigsawjs.jignonce);
    //     formData.append('ad_url', window.location.pathname + window.location.search);

    //     jQuery.ajax({
    //         type: 'POST',
    //         url: jigsawjs.ajaxurl,
    //         dataType: 'json',
    //         data: formData,
    //         enctype: 'multipart/form-data',
    //         processData: false, // tell jQuery not to process the data
    //         contentType: false, // tell jQuery not to set contentType
    //         success: function(data) {

    //         },
    //         error: function(data) {

    //         }
    //     });

    // }, 1000);
    /* JAWS Cookie Capture Ends Here //////////////////////////////////////////////////////////////////////////////////////////////////////////// */



    jQuery('.tab-style2-alt .tab-style2-item').click(function() {
        jQuery('.tab-style2-alt .tab-style2-item').removeClass('active');
        jQuery(this).addClass('active');
    });




    if (jQuery('#cd-dropdown').length >= 1) {
        jQuery('#cd-dropdown').dropdown({
            gutter: 5,
            stack: false,
            delay: 100,
            slidingIn: 100
        });
    }

    // jQuery("#profile-popup-li").click(function () {

         // JAWS -- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //     var formData = new FormData();
    //     formData.append('action', 'refreshprofile');
    //     formData.append('jigkey', jigsawjs.jignonce);

    //     jQuery.ajax({
    //         type: 'POST',
    //         url: jigsawjs.ajaxurl,
    //         dataType: 'json',
    //         data: formData,
    //         enctype: 'multipart/form-data',
    //         processData: false, // tell jQuery not to process the data
    //         contentType: false, // tell jQuery not to set contentType
    //         success: function(data) {

    //             $('#profilejigsaw').attr('src', data.photo_url);
    //             $('#display_name').val(data.name);
    //             $('#email').val(data.email);
    //             $('#mobile_number').val(data.phone);

    //             if (data.soc_fb.length > 0) $("*[data-social='Facebook']").addClass("on");
    //             else $("*[data-social='Facebook']").removeClass("on");

    //             if (data.soc_gp.length > 0) $("*[data-social='Google']").addClass("on");
    //             else $("*[data-social='Google']").removeClass("on");

    //             if (data.soc_li.length > 0) $("*[data-social='LinkedIn']").addClass("on");
    //             else $("*[data-social='LinkedIn']").removeClass("on");

    //         },
    //         error: function(data) {
    //             //location.reload();
    //         }
    //     });

    // });


    jQuery('.bottom-arrow a img').click(function() {
        jQuery('html , body').animate({
            scrollTop: jQuery('#learning-path').offset().top
        }, 1000);

    });
    /************************************/





    /************************************/



    jQuery('li.menu').click(function(e) {
        e.preventDefault();
        jQuery("#main-nav ul li").not(':last-child').toggleClass('hide_imp');
        jQuery("#pop-menu-section").toggleClass('pop-active');
        //jQuery("#pop-menu-section").fadeToggle('400','swing','');
        //jQuery(".menu-image").toggleClass('hide_imp');



        //jQuery('.logo-sticky img').fadeToggle('400','swing','');

        /*jQuery(".header-logo").toggleClass('hide_imp');*/
        //jQuery(".logo-full , .logo-small").toggleClass('hide_imp');
        //jQuery('#pop-menu-section').css({"overflow":"scroll"});

        if (jQuery('#pop-menu-section').hasClass('pop-active')) {
            jQuery('body').addClass('pop-active');
        } else {
            jQuery('body').removeClass('pop-active');
        }
    });


    jQuery('li.about').click(function(e) {
        e.preventDefault();
        jQuery("#main-nav ul li").toggleClass('hide_imp');
        jQuery("#pop-menu-section-two").toggleClass('pop-active');
        //jQuery("#pop-menu-section").fadeToggle('400','swing','');
        //jQuery(".menu-image").toggleClass('hide_imp');



        //jQuery('.logo-sticky img').fadeToggle('400','swing','');

        /*jQuery(".header-logo").toggleClass('hide_imp');*/
        //jQuery(".logo-full , .logo-small").toggleClass('hide_imp');
        //jQuery('#pop-menu-section').css({"overflow":"scroll"});

        if (jQuery('#pop-menu-section-two').hasClass('pop-active')) {
            jQuery('body').addClass('pop-active');
        } else {
            jQuery('body').removeClass('pop-active');
        }
    });

    jQuery('.mobile-login').click(function(e) {
        setTimeout(function() {
            jQuery("#pop-menu-section").removeClass('pop-active');
            jQuery('body').removeClass('pop-active');
            jQuery("#main-nav ul li").not(':last-child').removeClass('hide_imp');
        }, 300);
    });



    jQuery('#pop-menu-section, header, .menu-close, .menu-close img, .close-menu').on('click', function(e) {
        if (e.target !== this) return;
        //Hide pop code jQuey.
        if (jQuery('#pop-menu-section').hasClass('pop-active')) {

            e.preventDefault();
            jQuery("#main-nav ul li").not(':last-child').toggleClass('hide_imp');
            jQuery("#pop-menu-section").toggleClass('pop-active');

            if (jQuery('#pop-menu-section').hasClass('pop-active')) {
                jQuery('body').addClass('pop-active')
            } else {
                jQuery('body').removeClass('pop-active');
            }

        }

    });

    jQuery('#pop-menu-section-two, header, .menu-close, .menu-close img, .close-menu').on('click', function(e) {
        if (e.target !== this) return;
        //Hide pop code jQuey.
        if (jQuery('#pop-menu-section-two').hasClass('pop-active')) {

            e.preventDefault();
            jQuery("#main-nav ul li").toggleClass('hide_imp');
            jQuery("#pop-menu-section-two").toggleClass('pop-active');

            if (jQuery('#pop-menu-section-two').hasClass('pop-active')) {
                jQuery('body').addClass('pop-active')
            } else {
                jQuery('body').removeClass('pop-active');
            }

        }

    });

    var hpowl = jQuery("#popular-learning-slider-1");
    hpowl.owlCarousel({
        items: 3,
        responsive: true,
        navigation: false,
pagination: false,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        addClassActive: true,
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [980, 2], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: true, // itemsMobile disabled - inherit from itemsTablet option
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.direction-next').show();
        $('.direction-prev').show();

        $('.direction-next').removeClass('disabled');
        $('.direction-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.direction-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.direction-next').addClass('disabled');
        }

      } else {
        $('.direction-next').hide();
        $('.direction-prev').hide();
      }
    }
    });

    // Custom Navigation Events
    jQuery(".slider-direction-nav .direction-next").click(function() {
        hpowl.trigger('owl.next');
        return false;
    });

    jQuery(".slider-direction-nav .direction-prev").click(function() {
        hpowl.trigger('owl.prev');
        return false;
    });



    var owl = jQuery("#popular-learning-slider-hiw");
    owl.owlCarousel({
        items: 2,
        responsive: true,
        step: 3,
        navigation: false,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        addClassActive: true,
        itemsDesktop: [1000, 2], //5 items between 1000px and 901px
        itemsDesktopSmall: [980, 2], // betweem 900px and 601px
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: true, // itemsMobile disabled - inherit from itemsTablet option
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.direction-next').show();
        $('.direction-prev').show();

        $('.direction-next').removeClass('disabled');
        $('.direction-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.direction-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.direction-next').addClass('disabled');
        }

      } else {
        $('.direction-next').hide();
        $('.direction-prev').hide();
      }
    }
    });

    // Custom Navigation Events
    jQuery(".slider-direction-nav .direction-next").click(function() {
        owl.trigger('owl.next');
        return false;
    });

    jQuery(".slider-direction-nav .direction-prev").click(function() {
        owl.trigger('owl.prev');
        return false;
    });

    //alumni work at slider for mobile size


    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    var testslider = $('.slider-nav').slick({
        slidesToShow: 3,
        speed:1000,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        arrows: false,
        pauseOnHover:false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }]
    });
    var waypoints = $('#testimonial').waypoint({
      triggerOnce: !0,
      offset: +100,
      handler: function(direction) {
        $('.slider-nav')[0].slick.slickGoTo(0);
      }
    })
    var i = 1;
    var logo_multiple_owl = jQuery("#alumni-logos-mobile-size-slider");
    logo_multiple_owl.owlCarousel({
        items: 4,
        slideSpeed: 200,
        autoPlay: false,
        responsive: true,
        navigation: false,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        addClassActive: true,
        itemsDesktop: [1000, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [980, 3], // betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0
        itemsMobile: true,
        pagination: true,
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }






    });




    var i = 1;
    var blog_multiple_owl = jQuery("#blog-slider-box-for-mobile");
    blog_multiple_owl.owlCarousel({
        items: 4,
        slideSpeed: 200,
        autoPlay: true,
        responsive: true,
        navigation: true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        addClassActive: true,
        itemsDesktop: [1400, 4], //5 items between 1000px and 901px
        itemsDesktopSmall: [1120, 3], // betweem 900px and 601px
        itemsTablet: [850, 2], //2 items between 600 and 0
        itemsTablet: [650, 1], //1.5 items between 600 and 0
        itemsMobile: true,
        pagination: false,
        itemsMobile: [479, 1],
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }






    });




    //Course detail page on add js code.

    jQuery('.slider-section-course-detail').each(function() {

        var detail_page_carsole = jQuery(this);
        detail_page_carsole.owlCarousel({
            margin: 0,
            loop: false,
            autoWidth: true,
            items: 1,
            dots: false,
            nav: true,
            navRewind: false,
            navText: [
                "Previous",
                "Next"
            ],
            responsive : {
            850 : {
               items: 3,
            },
        }

        });
    });

    //curriculam section
    $('.open-item').click(function(event) {
       var c =$(this).parents('.owl-stage'),d= $(this).data('item'),co=$(this).parents('.slider-section-course-detail');
       $(this).parents('.item').fadeOut();
       c.find('.collapsed-'+d).removeClass('hide');
       //co.trigger('update.owl.carousel');
        var carousel = co.data('owlCarousel');
        var width = 0;
        co.find('.item:visible').each(function(index, el) {
            width+= $(this).width();
        });
         co.find('.owl-stage').width(width);

    });
    $('.video_blured').click(function(event) {
        event.preventDefault();
    });
    var case_study_coverd_slider = jQuery("#case_study_coverd_slider");
    case_study_coverd_slider.owlCarousel({
        items: 3,
        autoplaySpeed: 200,
        autoplay: true,
        responsive: true,
        nav: true,
        navRewind: false,
        dots: false,
        responsiveRefreshRate: 200,
        navText: [
            "Previous",
            "Next"
        ],

        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            900: {
                items: 3,

            }
        }
    });
        var what_you_get_slider_course = jQuery("#what_you_get_slider_course");
    what_you_get_slider_course.owlCarousel({
        items: 3,
        autoplaySpeed: 200,
        autoplay: false,
        responsive: true,
        nav: true,
        navRewind: false,
        dots: false,
        responsiveRefreshRate: 200,
        navText: [
            "Previous",
            "Next"
        ],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            900: {
                items: 3,

            }
        }

    });




    var what_you_get_slider = jQuery("#what_you_get_slider");
    what_you_get_slider.owlCarousel({
        items: 3,
        slideSpeed: 200,
        autoPlay: false,
        responsive: true,
        navigation: true,
        pagination: false,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        addClassActive: true,
        itemsDesktop: [1400, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [1120, 3], // betweem 900px and 601px
        itemsTablet: [850, 2], //2 items between 600 and 0

        itemsMobile: [479, 1],

        navigationText: [
            "Previous",
            "Next"
        ],
        afterAction: function(){
       if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }






    });





});
/**
Show Header on Scroll up
**/

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event) {
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('scrolled')
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            if (jQuery(this).scrollTop() > 100) {
                $('header').addClass('scrolled');
            }
        }
    }

    lastScrollTop = st;
}
jQuery(window).scroll(function() {
    var WHeight = jQuery(window).height();

    if (WHeight >= 900) {
        WHeight = 826;
    } else if (WHeight <= 470) {
        WHeight = 376;
    } else {
        WHeight = WHeight - 94;
    }
    if (jQuery(this).scrollTop() > 300) {
        jQuery('header').addClass("topfixed");
    } else {
        jQuery('header').removeClass("topfixed");
        jQuery('header').removeClass("scrolled");
        //setTimeout(function() {
        jQuery('header').removeClass("stickyheader");
        //}, 1000);
    }

    if (jQuery(this).scrollTop() > WHeight) {

        jQuery('body').addClass("sticky-header-active");
        jQuery('header').addClass("stickyheader");
    } else {

    }

});

/************ Payment page ***************/

jQuery(document).ready(function() {
    jQuery('.left-option-list ul li').click(function() {
        var id_attr = jQuery(this).attr('id');
        jQuery('.right-container-payment-method .inner-box').hide();
        jQuery('.left-option-list ul li').css('border-right', '1px solid #e9eaea');
        jQuery(this).closest('.payment-type-current-system').find('#a_' + id_attr).show();
        jQuery(this).css('border-right', 'none');
        jQuery('.left-option-list ul li').removeClass('ver-tab-active');
        jQuery(this).addClass('ver-tab-active');
    });

    var counter = 0;

    var month = {};
    month[0] = 'Jan';
    month[1] = 'Feb';
    month[2] = 'Mar';
    month[3] = 'Apr';
    month[4] = 'May';
    month[5] = 'Jun';
    month[6] = 'Jul';
    month[7] = 'Aug';
    month[8] = 'Sep';
    month[9] = 'Oct';
    month[10] = 'Nov';
    month[11] = 'Dec';
    jQuery('#month_inc').click(function() {
        if (counter < 11) {
            counter++;
        }
        jQuery('[name="month-name"]').html(month[counter]);
    });
    jQuery('#month_dec').click(function() {
        if (counter > 0) {
            counter--;
        }
        jQuery('[name="month-name"]').html(month[counter]);
    });

    var counter = 0;
    var year = {};
    year[0] = '2015';
    year[1] = '2016';
    year[2] = '2017';
    year[3] = '2018';
    year[4] = '2019';
    year[5] = '2020';
    year[6] = '2021';
    year[7] = '2022';
    year[8] = '2023';
    year[9] = '2024';
    year[10] = '2025';
    year[11] = '2026';
    year[12] = '2027';
    year[13] = '2028';
    year[14] = '2029';
    year[15] = '2030';



    jQuery('.year-box #year-inc').click(function() {
        if (counter < 15) {
            counter++
        }
        jQuery('[name="year"]').html(year[counter]);
    });


    jQuery('.year-box #year-dec').click(function() {
        if (counter > 0) {
            counter--;
        }

        jQuery('[name="year"]').html(year[counter]);

    });









    /************* Path Finder Steps **********/

    jQuery('.field-radio').find('input').click(function() {
        var cu = jQuery(this);
        if(cu.hasClass('skilsets-change')){
            if(cu.val()=='y'){
                $('#learn_skillsets').data('section',"step-specialize-yes");
            }else{
                $('#learn_skillsets').data('section',"step-specialize");
            }
        }
        setTimeout(function() {
            jQuery(".path-steps").removeClass('active');
            var section = cu.parents('.path-steps').data('section');
            cu.parents('.path-steps').addClass('path-prev');
            var step = cu.data('section');
            jQuery("." + step).addClass('active').data('from', section);
            if (step == 'step-complete') {
                jQuery(".find-path-holder").addClass('ajaxloading');
                jQuery('.step-footer').addClass('load-on');
                pathdinder();
            }
            jQuery(".prev").data('section', section);
        }, 50);
    });
    jQuery(document).on('click',".toggle-content",function(e) {
        e.preventDefault();
        var ele=$(this),text = ele.text() == 'SEE MORE' ? 'SEE LESS' : 'SEE MORE';
        $('.path-short').slideToggle('slow');
        ele.toggleClass('on').find('.toggle-text').text(text);
    });
    jQuery(document).on('click',".toggle-features",function(e) {
        e.preventDefault();
        var ele=$(this);
        $('.path-short').slideToggle('slow');
        ele.toggleClass('on');
        return false;
    });
    jQuery(".path-steps .button").click(function(e) {
        e.preventDefault();
        jQuery(".path-steps").removeClass('active');
        $(this).parents('.path-steps').addClass('path-prev');
        $('.step-2').addClass('active');
        jQuery(".prev").data('section', 'step-1');
        jQuery(".step-direction").removeClass('first-stage');
    });
    jQuery(".next").click(function() {
        jQuery(".path-steps.active").find('input:checked').trigger('click');
    });
    jQuery(".prev").click(function() {
        var step = jQuery('.path-steps.active').data('from');
        if (step) {
            var current = jQuery(".path-steps.active");
            jQuery('.path-steps.active').data('to', current);
            current.removeClass('path-prev');
            jQuery(".path-steps").removeClass('active');
            jQuery("." + step).addClass('active');
        }
    });

    // function pathdinder() {
        //$('.step-complete').show().html('');

        // jQuery(".ajaxloading").fadeIn();
    //     jQuery.ajax({
    //         type: 'POST',
    //         url: jigsawjs.ajaxurl,
    //         data: {
    //             action: 'pathfinder',
    //             formdata: jQuery('#findpathform').serializeArray(),
    //             jigkey: jigsawjs.jignonce,
    //         },
    //         success: function(data) {
    //             setTimeout(function() {
    //                 $('.step-complete').show().html(data);
    //                 jQuery('.step-footer,.find-path-holder').hide().removeClass('ajaxloading');
    //                 jQuery('.step-footer').removeClass('load-on');
    //             }, 4000);
    //         },
    //         error: function(data) {
    //             alert('Something went wrong!');
    //         },

    //     });
    // }
    $(window).resize(function() {
        var maxHeight = -1;
        $('.find-path-holder .path-steps').each(function() {
            maxHeight = maxHeight > $(this).find('.step-inner').outerHeight() ? maxHeight : $(this).find('.step-inner').outerHeight();
        });
        jQuery(".find-path-holder").height(maxHeight);

    });
     $(document).on('click','.disbledlink', function (e) {
         e.preventDefault();
     });
    /*********** Magnific Popup *********/
    $(document).on('click','.popup-with-form-sucees-story', function (e) {
        var curl = $(this).data('url');
        var hurl = curl;

        $.magnificPopup.open({
              items: {
                src: curl,
                type: 'ajax',
              },
              callbacks: {
                open: function() {
                    if (typeof (history.pushState) != "undefined") {
                        history.pushState(null, null, hurl);
                    }
                    jQuery('body').addClass('modal-on');
                },
                close: function() {
                    window.history.go(-1);
                     jQuery('body').removeClass('modal-on');
                },

            },
              mainClass: 'mfp-fade'
        });
    });
    $(document).on('click','.closemagnifice', function (e) {
        e.preventDefault();
     $.magnificPopup.close();
    });
    $(document).on('click','.popup-with-form-sucees', function () {

        $.magnificPopup.open({
              items: {
                  src: '#pathfinder-steps',
              },
              type: 'inline'
          });
        $.magnificPopup.instance.st.callbacks = {
            open: function() {

                var maxHeight = -1;

                $('.find-path-holder .path-steps').each(function() {
                    maxHeight = maxHeight > $(this).find('.step-inner').outerHeight() ? maxHeight : $(this).find('.step-inner').outerHeight();

                });
                console.log(maxHeight);
                jQuery(".find-path-holder").height(maxHeight);

                var magnificPopup = jQuery.magnificPopup.instance,
                    cur = magnificPopup.st.el;

                var container_id = cur.attr('href');

                if (container_id == '#pathfinder-steps') {
                    jQuery(container_id).closest('.mfp-container').addClass('pathfinder-container');
                    jQuery(".path-steps").removeClass('active path-prev');
                    $('.step-1').addClass('active').removeClass('path-prev');
                    jQuery(".step-complete").hide();
                    jQuery(".find-path-holder").show();
                    jQuery('#pathfinder-steps .button').attr('data-disabled', '');
                    $('.ipt-radio').prop('checked', false);
                    jQuery('.step-footer').show();
                    jQuery('.prev').data('section', 'step-1');
                    jQuery('.next').data('section', '');
                    jQuery(".step-direction").addClass('first-stage');
                }
                if (container_id == '#popup-login') {

                    jQuery(container_id).closest('.mfp-container').addClass('login-container');

                }

                jQuery(container_id).closest('.mfp-container').addClass('popup-main-container');
                  jQuery('body').addClass('modal-on');
            }
            ,
            close: function() {
               jQuery('body').removeClass('modal-on');
            }
        }
        $(window).trigger('resize');

    });
    jQuery('.popup-with-form,.pathfinder-menu a').magnificPopup({

        callbacks: {
            open: function() {
                var maxHeight = -1;

                $('.find-path-holder .path-steps').each(function() {
                    maxHeight = maxHeight > $(this).find('.step-inner').outerHeight() ? maxHeight : $(this).find('.step-inner').outerHeight();
                });
                jQuery(".find-path-holder").height(maxHeight);
                var magnificPopup = jQuery.magnificPopup.instance,
                    cur = magnificPopup.st.el;

                var container_id = cur.attr('href');

                if (container_id == '#pathfinder-steps') {
                    jQuery(container_id).closest('.mfp-container').addClass('pathfinder-container');
                    jQuery(".path-steps").removeClass('active path-prev');
                    $('.step-1').addClass('active').removeClass('path-prev');
                    jQuery(".step-complete").hide();
                    jQuery(".find-path-holder").show();
                    jQuery('#pathfinder-steps .button').attr('data-disabled', '');
                    $('.ipt-radio').prop('checked', false);
                    jQuery('.step-footer').show();
                    jQuery('.prev').data('section', 'step-1');
                    jQuery('.next').data('section', '');
                    jQuery(".step-direction").addClass('first-stage');
                    if (jQuery('#pop-menu-section').hasClass('pop-active')) {

            jQuery("#main-nav ul li").not(':last-child').toggleClass('hide_imp');
            jQuery("#pop-menu-section").toggleClass('pop-active');

            if (jQuery('#pop-menu-section').hasClass('pop-active')) {
                jQuery('body').addClass('pop-active')
            } else {
                jQuery('body').removeClass('pop-active');
            }

        }
                }
                if (container_id == '#popup-login') {

                    jQuery(container_id).closest('.mfp-container').addClass('login-container');

                }
                if($(container_id).find('.jigsawforms').length){
                    $(container_id).find('.jigsawforms').removeClass('formsuccess');
                }
                jQuery(container_id).closest('.mfp-container').addClass('popup-main-container');
                jQuery('body').addClass('modal-on');

                if (typeof (history.pushState) != "undefined") {
                    var query = cur.attr('href');
                    history.pushState(null, null, query);
                }
            }
            ,
            close: function() {
                jQuery('body').removeClass('modal-on');
                var loc = window.location;
                var query = loc.protocol + '//' + loc.host + loc.pathname;
                if (typeof (history.pushState) != "undefined") {
                    history.pushState(null, null, query);
                }
            }

        },
        mainClass: 'mfp-fade'

    });


//     jQuery(document).ready(function() {

//         if(jigsawjs.pricing && !jigsawjs.isindia && !readCookie('user_currency')){
//             jQuery.magnificPopup.open({
//                 items: {
//                     src: '#popup-switch-currency'
//                 },
//                callbacks: {
//                     open: function() {
//                        jQuery('body').addClass('modal-on');
//                     },
//                     close: function() {
//                        jQuery('body').removeClass('modal-on');
//                        createCookie('user_currency','usd',1);
//                     }
//                 }
//             });
//         }

//         if (getParameterByName('profile')) {
//             if($('#forcelogin').length){
//                 jQuery.magnificPopup.open({
//                     items: {
//                         src: '#profile-popup'
//                     },
//                     showCloseBtn: false,
//                     enableEscapeKey:false,
//                     closeOnBgClick:false,
//                    callbacks: {
//                         open: function() {
//                            jQuery('body').addClass('modal-on');
//                         },
//                         close: function() {
//                            jQuery('body').removeClass('modal-on');
//                         }
//                     }
//                 });
//             }else{
//                 jQuery.magnificPopup.open({
//                     type: "inline",
//                     items: {
//                         src: '#profile-popup'
//                     },
//                    callbacks: {
//                         open: function() {
//                            jQuery('body').addClass('modal-on');
//                         },
//                         close: function() {
//                            jQuery('body').removeClass('modal-on');
//                         }
//                     }
//                 });
//             }
//         }
//         $(".digitsonly").keypress(function (e) {
//      if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
//         return false;
//     }
// });
//     });
    // function createCookie(name,value,days) {
    // if (days) {
    //     var date = new Date();
    //     date.setTime(date.getTime()+(days*24*60*60*1000));
    //     var expires = "; expires="+date.toGMTString();
    // }
    // else var expires = "";
    // document.cookie = name+"="+value+expires+"; path="+jigsawjs.cookiepath;
    // }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    $('body').on('change', '.ajax-money input', function() {
        var label = $("label[for='"+$(this).attr('id')+"']"),cur=$(this).val();
        $('.ajax-money label').removeClass('checked');
        label.addClass('checked');
        $('.path-price-list').addClass('hide');
        $('.path-price-'+cur).removeClass('hide');
        createCookie('user_currency',cur,1);

    });
    $('.video_popup_public').click(function(event) {
        event.preventDefault();
        var page= $('#corsedataholder').data('page'),cnt= parseInt(readCookie('jig_vid_'+page)),count=0;
        if(readCookie('jig_vid_'+page)){
            count = parseInt(readCookie('jig_vid_'+page))+1;
        }
        if(count>1){
           $.magnificPopup.open({
            items: {
              src: '#popup-login',
            },
            type: 'inline'
          });
        }else{
             $.magnificPopup.open({
             iframe: {
                 markup: '<div id="home-video" class="popupbox-main white-popup-block privacy"><div class="popup-content"><div class="popupbox-inner"><div class="video-placeholder">' +
                     '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                     '</div></div></div><button title="Close (Esc)" type="button" class="mfp-close">×</button></div>',
             },
              items: {
                src: $(this).data('url'),
              },
              type: 'iframe'
            });
        }
        createCookie('jig_vid_'+page,count,30);
    });
    $('.play-video-button').magnificPopup({
        iframe: {
            markup: '<div id="home-video" class="popupbox-main white-popup-block privacy"><div class="popup-content"><div class="popupbox-inner"><div class="video-placeholder">' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div></div></div><button title="Close (Esc)" type="button" class="mfp-close">×</button></div>',
        },
        //disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        mainClass: 'mfp-fade',
        callbacks: {
                    open: function() {
                       jQuery('body').addClass('modal-on');
                    },
                    close: function() {
                       jQuery('body').removeClass('modal-on');
                    }
                }
    });
    jQuery(document).on('click', '.video_popup', function(event) {
        $.magnificPopup.close();
        event.preventDefault();
        var curl = $(this).attr('href');
        jQuery.magnificPopup.open({
            items: {
                src: curl,
                type: 'iframe',
            },
            iframe: {
                markup: '<div id="home-video" class="popupbox-main white-popup-block privacy"><div class="popup-content"><div class="popupbox-inner"><div class="video-placeholder">' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div></div></div><button title="Close (Esc)" type="button" class="mfp-close">Ã—</button></div>',
            },
            callbacks: {
                open: function() {

                    jQuery('body').addClass('modal-on');
                },
                close: function() {

                     jQuery('body').removeClass('modal-on');
                },

            },
            mainClass: 'mfp-fade'
        });
    });

    /************untargeted steps******************/





    jQuery('.untarget-next').hide();
    jQuery('.untargeted-disable-next').show();
    jQuery(".untargeted-steps").each(function(e) {
        if (e != 0)
            jQuery(this).hide();
    });
    jQuery('.field-radio').find('input').click(function() {
        jQuery(this).parents('.untargeted-steps').find('.step-direction .untarget-next').attr("data-disabled", "ok");
        jQuery(this).parents('.untargeted-steps').find('.step-direction .untarget-next').show();
        jQuery(this).parents('.untargeted-steps').find('.step-direction .untargeted-disable-next').hide();
        jQuery(this).parents('.box-with-border').find(".untarget-next").trigger('click');

    });
    jQuery(".untarget-next , .untarget-first-button").click(function() {


        if (jQuery(this).attr('data-disabled') == "disabled") {
            return false;
        }


        if (jQuery(".untargeted-steps:visible").next().length != 0)
            jQuery(".untargeted-steps:visible").next().fadeIn("slow").prev().hide();
        else {
            jQuery(".untargeted-steps:visible").hide();
            jQuery(".untargeted-steps:first").fadeIn("slow");
        }
        return false;
    });

    jQuery(".untarget-prev").click(function() {
        if (jQuery(".untargeted-steps:visible").prev().length != 0)
            jQuery(".untargeted-steps:visible").prev().fadeIn("slow").next().hide();
        else {
            jQuery(".untargeted-steps:visible").hide();
            jQuery(".untargeted-steps:last").fadeIn("slow");
        }
        return false;
    });

});



/****************executive program steps*******************/

jQuery(document).ready(function() {
    jQuery(".executive-program-popup").each(function(e) {
        if (e != 0)
            jQuery(this).hide();
    });
    $.validator.addMethod("mobilenumber", function(value, element) {
        return this.optional(element) || /^[0-9-+\s]+$/.test(value);
    }, "Invalid Number");
    jQuery.validator.addClassRules("mobilenumber", {
      mobilenumber: true,
    });
    $.validator.addMethod('filesize', function(value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    },"The file is exceeding the maximum file size of 2 MB.");
    jQuery(".program-detail-next").click(function() {

        if($(this).parents('.multipart').length && $(this).parents('.multipart').find('.appform-add-field').length){
            $(this).parents('.multipart').find(".field").each(function(){
                $(this).addClass('checked');
            });
        }
        jQuery("#executiveform").submit();
        if($("#executiveform").valid()){
        if (jQuery(".executive-program-popup:visible").next().length != 0)
            jQuery(".executive-program-popup:visible").next().fadeIn("slow").prev().hide();
        else {
            jQuery(".executive-program-popup:visible").hide();
            jQuery(".executive-program-popup:first").fadeIn("slow");
        }
        if($(window).width() < 768){
        jQuery('html , body').animate({
                            scrollTop: jQuery('.popupbox-main').offset().top
                        }, 1000);
    }
        if(jQuery('.executive-program-popup-final').is(':visible')){
        if($(window).width() > 768){
                        setTimeout(function() {
                            $.magnificPopup.close();
                        }, 3500);
                    }else{
                       setTimeout(function() {
                            $.magnificPopup.close();
                        }, 4500);

                    }
                }
        }
        return false;
    });

    jQuery(".executive-step-prev").click(function() {


            if (jQuery(".executive-program-popup:visible").prev().length != 0)
                jQuery(".executive-program-popup:visible").prev().fadeIn("slow").next().hide();
            else {
                jQuery(".executive-program-popup:visible").hide();
                jQuery(".executive-program-popup:last").fadeIn("slow");
            }

    });


    /*jQuery('.card-items .card-content p').addClass('card-content-in-text');
    jQuery('.card-content-in-text').each(function(){
    var txt= jQuery(this).text();
    if(txt.length > 80)
    jQuery(this).text(txt.substring(0,80) + '.....');
    });*/

    jQuery(".payment-method-mobile-options").on("change", function() {
        var sel_opt = jQuery(this).val();
        jQuery('.inner-box').hide();
        jQuery(this).closest('.right-container-payment-method').find('#a_' + sel_opt).show();
    });
});



jQuery(window).on("resize", function() {
    var WHeight = jQuery(window).height(),
        HHeight = jQuery('#header-fixed header').height(),
        BHeight =  jQuery('.homepage-banner.parallax_section_1').height(),
        Fheight = WHeight - 50;
    if(BHeight<Fheight){
       jQuery("#banner.homepage-banner").css({
           height: Fheight
       });
   }else{
     jQuery("#banner.homepage-banner").css({
           height: 'auto'
       });
   }

}).resize();




jQuery(document).on('click','a.ac-toggle-checkout',function(e) {
    e.preventDefault();
    jQuery(this).toggleClass('on');
});
/****************Jigsaw Function*******************/
jQuery(document).ready(function(jQuery) {
    //Counter up
    jQuery('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    //Delete User
    jQuery('#delete_user').click(function(event) {
        if (!confirm('Are you sure?')) {
            event.preventDefault();
        }
    })


    //Upcoming notification
    jQuery('#course-landing-course-list').on('click', '.course-upcoming', function(event) {
        event.preventDefault();
        jQuery.magnificPopup.open({
            items: {
                src: '#popupform-notifyme'
            },
            mainClass: 'mfp-fade'

        });
        $('#popupform-notifyme').data('item', $(this).data('item'));
        jQuery('.contact-form').removeClass('formsuccess');
        jQuery(".contact-form").find('.alert').addClass('hide');
        jQuery(".contact-form")[0].reset();
        $('#coursedata').val($(this).data('course'));

    });
    //category filter
    /*$('.categoryfilter').on('click touchstart', 'li.tab-style2-item a', function(event) {
        event.preventDefault();
        $('.categoryfilter li.tab-style2-item').removeClass('activetab');
        $(this).parent('li').addClass('activetab');

    });*/


    $(function() {
        $('#course-landing-course-list').mixItUp({
            layout: {
                display: 'flex'
            }
        });
        /*$('#article-listing').mixItUp({
            layout: {
                display: 'flex'
            }
        });*/
        $('#article-listing').on('click', 'li.tab-style3-item a', function(event) {
            event.preventDefault();

        });
    });
    //bottom-see-all-link
    jQuery('.bottom-see-all-link').click(function(e) {
        e.preventDefault();
        jQuery('.accordion-section').removeClass('light-opacity');
        jQuery('.bottom-see-all-link').parent().fadeOut('fast');
        jQuery('.course_collapse').slideDown('slow');
    });
    //See more link
    jQuery(document).on('click', '.more_course', function(e) {
        e.preventDefault();
        $(this).parent().fadeOut('fast');
        $(this).parents('.courses-detail').find('.module_collapse').slideDown('slow');
    });
    //Modal success stroies

    jQuery(document).on('click', '.openmodal', function(event) {
        event.preventDefault();
        var curl = $(this).data('url'),
            hurl = $(this).attr('href');
        jQuery.magnificPopup.open({
            items: {
                src: curl,
                type: 'ajax',
            },
            callbacks: {
                open: function() {
                    if (typeof (history.pushState) != "undefined") {
                        history.pushState(null, null, hurl);
                    }
                    jQuery('body').addClass('modal-on');
                },
                close: function() {
                    window.history.go(-1);
                     jQuery('body').removeClass('modal-on');
                },

            },
            mainClass: 'mfp-fade'
        });
    });

    /* $('#success_modal').on('click', '.openmodal', function(event) {
    event.preventDefault();
    //history.pushState(null, null, this.href); //history.pushState([data], [title], [url]);
    $('.openmodal').magnificPopup({
      type: 'ajax'
    });
   });*/
    //Scroll to
    $('.scrollto').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1000);
        event.preventDefault();
    });
    var isiPad = navigator.userAgent.match(/iPad/i) != null;
    if(isiPad){
        $('.scrollto').bind('touchstart', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 60
            }, 1000);
            event.preventDefault();
        });
    }
    //expert carousel
    $('#expert_carousel').owlCarousel({
        loop: true,
        items: 3,
        navigation: true, // Show next and prev buttons
        pagination: false,
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }
    });
    $('#corporate-overview-card-slider').owlCarousel({
        loop: true,
        items: 4,
        navigation: true, // Show next and prev buttons
        pagination: false,
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }
    });

    $('#testimony-carousel').owlCarousel({
        loop: false,
        items: 1,
        nav: true, // Show next and prev buttons
        dots: false,
        navRewind: false,
        itemsCustom: false,
        singleItem:true
    });
    $('#features-main-executive').owlCarousel({
        nav: true,
        dots: false,
        navRewind: false,
    });
    $('#corporate-overview-feature-slider').owlCarousel({
        items: 4,
        navigation: true, // Show next and prev buttons
        pagination: false,
        afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }
    });
    $('.fetch_position').click(function(event) {
        $('#position_field').val($(this).data('position'));
    });
    $('.linkbtn').click(function(e) {
        if($(e.target).is('.linkbtn a') || $(e.target).is('.linkbtn a *')) return;
            window.location = $(this).data("href");
        return false;
    });
    $('.people-pop').click(function(event) {
         jQuery.magnificPopup.open({
                items: {
                    src: '#about-popup'
                },
               callbacks: {
                    open: function() {
                       jQuery('body').addClass('modal-on');
                    },
                    close: function() {
                       jQuery('body').removeClass('modal-on');
                    }
                }
            });
       var arr = ["people-title", "people-designation", "people-content", "people-thumb"],
            e = $(this).parents('.popup-with-form-people');
        jQuery.each(arr, function(i, val) {
            if (val == 'people-thumb') {
                $('#about-popup').find('#' + val).attr("src", e.find('.' + val).attr('src'));
            }
            $('#about-popup').find('#' + val).text(e.find('.' + val).text());
        });
    });

});


$(document).ready(function() {
    $(document).on('click','.detailed-form',function(event) {
        event.preventDefault();
        $('.form-part-2').toggleClass('hide');
        if($(this).text()==' fill the detailed form'){
            $(this).text(' fill the short form');
        }else{
            $(this).text(' fill the detailed form');
             if($(window).width() < 1050){
                jQuery('html , body').animate({
                    scrollTop: jQuery('.popupbox-main').offset().top
                }, 1000);
            }
        }

    });
    // $('.socilalinker').click(function(event) {
    //     var c = $(this);
    //     if (c.hasClass('on')) {
    //         $(this).removeClass('on');
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'removesocial',
    //                 social: c.data('social'),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 if (data.status) {
    //                     c.removeClass('on');
    //                 } else {
    //                     c.addClass('on');
    //                 }

    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },
    //         });
    //     } else {
    //         c.addClass('loading');
    //         window.location = $(this).data('url');
    //     }
    // });
    $("#jigsaw-announcements").owlCarousel({
        items: 1,
        responsive: true,
        navigation: true, // Show next and prev buttons
        singleItem: true,
        pagination: true,
        autoPlay: true,
        rtl:true,
       // items:4,
        loop:true,
        autoplayTimeout:500,
        autoplayHoverPause:true,
         afterAction: function(){
      if ( this.itemsAmount > this.visibleItems.length ) {
        $('.owl-next').show();
        $('.owl-prev').show();

        $('.owl-next').removeClass('disabled');
        $('.owl-prev').removeClass('disabled');
        if ( this.currentItem == 0 ) {
          $('.owl-prev').addClass('disabled');
        }
        if ( this.currentItem == this.maximumItem ) {
          $('.owl-next').addClass('disabled');
        }

      } else {
        $('.owl-next').hide();
        $('.owl-prev').hide();
      }
    }


    });

});
(function($) {
    $('.accordion .accordion-section-title').click(function() {
        var allPanels = $('.accordion > .accordion-section  .accordion-section-content');
        allPanels.slideUp();
        if ($(this).next().is(':visible')) {
            $(this).next().slideUp();
        } else {
            $(this).next().slideDown();
        }
        var carousel = $(this).parents('.accordion-section').find('.owl-carousel').data('owlCarousel');
        carousel._width = $(this).parents('.accordion-section').find('.owl-carousel').width()+500;
        carousel.invalidate('width');
        carousel.refresh();
        return false;
    });
    $('[data-toggle="tooltip"]').tooltip();
})(jQuery);
jQuery(window).scroll(function() {
    if (jQuery('.scroll-fix-header').length) {
        var tabTop = jQuery('#tabs').offset().top,
            tabHeight = jQuery('#tabs').height();
        topPos = tabTop - tabHeight;
        if (jQuery(this).scrollTop() > topPos) {
            jQuery('.scroll-fix-header').addClass('fixed');
             jQuery('header').addClass('header-hidden');
        } else {
            jQuery('.scroll-fix-header').removeClass('fixed');
             jQuery('header').removeClass('header-hidden');
        }
    }
    if (jQuery('.scroll-fix-top').length) {
        var tabTos = jQuery('.scroll-fix-top-header').offset().top;
        if (jQuery(this).scrollTop() > tabTos) {
            jQuery('.scroll-fix-top').addClass('fixed');
            jQuery('header').addClass('header-hidden');
        } else {
            jQuery('header').removeClass('header-hidden');
            jQuery('.scroll-fix-top').removeClass('fixed');
        }
    }
});
// Cache selectors
var lastId,
    topMenu = $("#scrollspy-nav"),
    topMenuHeight = topMenu.parents('.row').outerHeight() + 35,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e) {
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 300);
    e.preventDefault();
});

// Bind to scroll
$(window).scroll(function() {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href=#" + id + "]").parent().addClass("active");
            if($('#scrollspy-nav').length){
            var leftPos = menuItems.filter("[href=#" + id + "]").parent().offset().left;
            $('#scrollspy-nav').stop().animate({
                scrollLeft: leftPos
            }, 300);
            }
        }

});

if($('.tab-item').length){
    var leftPos = $('.tabs-list').find('.active').offset().left;
    $('.tabs-list').stop().animate({
                scrollLeft: leftPos
            }, 300);
}

/*$(function(){

  $('a.question-mark').hover(function(e){ // Hover event

    var titleText = $(this).attr('title');
    $(this)
      .data('tiptext', titleText)
      .removeAttr('title');
    if(titleText){
       if ($(window).width() < 767) {
        $('<p class="cs-tooltip"></p>')
         .text(titleText)
         .appendTo('body')
         .css('top', (e.pageY - 10) + 'px')
          .css('left', (e.pageX + 20) + 'px')
         .fadeIn('slow');
         }else{
           $('<p class="cs-tooltip"></p>')
         .text(titleText)
         .appendTo('body')
         .css('top', (e.pageY - 10) + 'px')
         .css('left', (e.pageX + 20) + 'px')
         .fadeIn('slow');
         }
    }


  }, function(){ // Hover off event

    $(this).attr('title', $(this).data('tiptext'));
    $('.cs-tooltip').remove();

  }).mousemove(function(e){ // Mouse move event
    if ($(window).width() < 767) {
        var Width = $('.cs-tooltip').width();
    $('.cs-tooltip')
      .css('top', (e.pageY - 10) + 'px')
      .css('left', (e.pageX - Width  -10) + 'px')
 }else{
    $('.cs-tooltip')
      .css('top', (e.pageY - 10) + 'px')
      .css('left', (e.pageX + 20) + 'px');
 }
 });

});*/
//Checkout functions
$(document).ready(function() {
    if($('#forcelogin').length){
        jQuery.magnificPopup.open({
            type: "inline",
            showCloseBtn: false,
            enableEscapeKey:false,
            closeOnBgClick:false,
            items: {
                src: '#popup-login-alt'
            },
            callbacks: {
                open: function() {
                    jQuery('#popup-login-alt').closest('.mfp-container').addClass('login-container');
                }
            }//,
            //mainClass: 'mfp-fade'
        });
    }
    if($('#check_total').length){
        var learn_mode = $('.learn_mode:checked').data('mode'),subtotal = $('#price_' + learn_mode).val();
        $('#emioption').val(0);
        $('#emi_control').val(0);
        $('#couponcode').val('');
        $('#addons').val('');
        $('.grant_total').removeClass('emi_on');
        getemi($('#check_total').data('price'),subtotal,learn_mode,true);
    }

    $('.product-action-text').click(function(event) {
        event.preventDefault();
        if ($(this).hasClass('addon-add')) {
            $(this).parents('.product-detail').addClass('light-opacity-added');
            $(this).text('- REMOVE').removeClass('addon-add').addClass('addon-remove');
        } else {
            $(this).parents('.product-detail').removeClass('light-opacity-added');
            $(this).text('+ ADD').removeClass('addon-remove').addClass('addon-add');
        }
        addoncheckout();

    });

    $(document).on('click','.checkout-toggle',function(event) {
        if ($(this).hasClass('on')) {
            $('.emioptionstr_' + $('.learn_mode:checked').data('mode')).slideDown();
            $('#emioption').val(1);
            $('#instalment').removeClass('hide');
            $('.grant_total').addClass('emi_on');
        } else {
            $('.emioptionstr_' + $('.learn_mode:checked').data('mode')).slideUp(10);
            $('#emioption').val(0);
            $('#instalment').addClass('hide');
            $('.grant_total').removeClass('emi_on');
        }
        updatecart();
    });
    $('.learn_mode').change(function(event) {
        var sub = price = 0
        $('.checkout-toggle').removeClass('on');
        $('.checkout_type').html($(this).data('mode').toUpperCase());
        $('#main_price').html($('.premium-price').data($(this).data('mode')));
        $('.level-choose-table').removeClass('regular premium').addClass($(this).data('mode'));
        $('#learnmode').val($(this).data('mode'));
        $('.emioptions').hide();
        if($('.emioptionstr_' + $(this).data('mode')).length){

        //$('#avail_instalments').show();
            if ($('.checkout-toggle').hasClass('on')) {
                $('.emioptionstr_' + $(this).data('mode')).show();
            }
        }else{
            $('#avail_instalments').hide();
        }
        updatecart();
    });

    function addoncheckout() {
        var addon = 0,
            addonarray = new Array();
        $('.addon-remove').each(function(index, el) {
            if ($(this).data('price')) {
                addon += $(this).data('price');
                addonarray[index] = $(this).data('id');
            }
        });
        if (addon) {
            $('#check_addon').text(mformat(addon)).data('price', addon);
            $('#addons').val(addonarray.join(","));
            $('.addon_courses').removeClass('hide');
        } else {
            $('#check_addon').text(mformat(0)).data('price', 0);
            $('.addon_courses').addClass('hide');
            $('#addons').val('');
        }
        updatecart();
    }
    mformat = function(x) {
        x =  parseFloat(x).toFixed(2);
        x = x.toString();
        var afterPoint = '';
        if (x.indexOf('.') > 0)
            afterPoint = x.substring(x.indexOf('.'), x.length);
        x = Math.floor(x);
        x = x.toString();
        var lastThree = x.substring(x.length - 3);
        var otherNumbers = x.substring(0, x.length - 3);
        if (otherNumbers != '')
            lastThree = ',' + lastThree;
        var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;
        return res;
    }

    function updatecart(emicheck) {
        if (typeof(emicheck)==='undefined') emicheck= true;
        var total = 0,
            add = 0,
            sub = 0,
            tax = 0,
            subtotal = 0,
            emisubtotal = 0,
            learn_mode = $('.learn_mode:checked').data('mode'),
            emisubtotal = $('#downpayment_' + learn_mode).val(),
            subtotal = $('#price_' + learn_mode).val();
            emibase = 0,
            addon = 0;
        $('.addon-remove').each(function(index, el) {
            if ($(this).data('price')) {
                addon = addon + $(this).data('price');
            }
        });
        if($('#emioption').val()==1){
            $('#check_subtotal').data('price', parseFloat(emisubtotal)).text(mformat(emisubtotal));
        } else {
            $('#check_subtotal').data('price', parseFloat(subtotal)).text(mformat(subtotal));
        }

        $('#check_subtotal').data('price', parseFloat(subtotal)).text(mformat(subtotal));

        $('.cadd:visible').each(function(index, el) {
            add += $(this).data('price');
        });

        $('.csub').each(function(index, el) {
            sub += $(this).data('price');
        });

        total = add - sub;
        emibase = +subtotal + +addon - sub;

        // TAX SHOULD NOT BE ADDED TO USD VALUES ////////////////////////////////////////////////////////////////////////////////////////////////////
        if ($("#is-india-check").val() == "false") tax = 0;
        else {
            tax = total * ($('#tax').val() / 100);
            tax = tax.toFixed(2);
        }

        $('#check_tax').text(mformat(tax)).data('price', parseFloat(tax));
        total = total + parseFloat(tax);
        $('#check_total').text(mformat(total));
        if(emicheck){
            if($('#emioption').val()==1){
                getemi(total,emibase,learn_mode);
            }else{
                getemi(total,emibase,learn_mode,false);
            }
        }

    }
    // function getemi(total,emibase,learn_mode,hide){
    //     $('.right-box-checkout').addClass('loading');
    //     jQuery.ajax({
    //        type: 'POST',
    //        url: jigsawjs.ajaxurl,
    //        dataType: 'json',
    //        data: {
    //            action: 'getemi',
    //            learnmode: learn_mode,
    //            hide:hide,
    //            total:total,
    //            emibase:emibase,
    //            control:$('#emi_control').val(),
    //            jigkey: jigsawjs.jignonce,
    //        },
    //        success: function(data) {
    //           if(data.emi){
    //             if ($('.checkout-toggle').hasClass('on')) {
    //                 $('#instalment').html(data.emi_charge).removeClass('hide');
    //                 if(data.emi_value!=$('#emicharge').val()){
    //                     updatecart();
    //                 }
    //                 $('#emicharge').val(data.emi_value);
    //             }else{
    //                 $('#instalment').html(data.emi_charge).addClass('hide');
    //                 $('#emicharge').val(data.emi_value);
    //             }
    //             updatecart(false);
    //             $('#checkouttable').html(data.emi);
    //         }else{
    //             $('#checkouttable').html('');
    //             $('#instalment').html(data.emi_charge).addClass('hide');
    //             $('#emioption').val(0);
    //             $('.grant_total').removeClass('emi_on');
    //             updatecart(false);
    //         }
    //         $('.right-box-checkout').removeClass('loading');
    //        },
    //        error: function(data) {
    //            alert('Something went wrong!');
    //            $('.right-box-checkout').removeClass('loading');
    //        },
    //    });
    // }

    $(document).on('change','#instal_control',function(event) {
        $('#emi_control').val($(this).val());
        updatecart();
    });

    function getoffer(offer) {
        var subtotal = $('#check_subtotal').data('price');
        if (offer.offer) {
           coupon = subtotal * (offer.offer / 100);
        }
        if (offer.offer_value) {
            coupon =  offer.offer_value ;
        }
        if (offer.order_value) {
            //$("#check_subtotal").data("price", offer.order_value);
            //$("#check_subtotal").html(mformat(offer.order_value));

            $("#check_tax").data("price", offer.tax_value);
            $("#check_tax").html(mformat(offer.tax_value));

            $("#check_total").data("price", offer.total_value);
            $("#check_total").html(mformat(offer.total_value));

            coupon = offer.discount_amount;
        }
        $('#check_coupon').text(mformat(coupon)).data('price', parseFloat(coupon));
        $('.couponsection').removeClass('hide');
        $('.coupon-code').remove();
    }
    // jQuery("#couponform").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawcoupons',
    //                 coupon: jQuery(form).find('#coupon_code').val(),
    //                 item: jQuery(form).find('#itemcode').val(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 if (data.status) {
    //                     getoffer(data);
    //                     if (!data.order_value)
    //                         updatecart();
    //                     $('.alert').removeClass('alert-danger').addClass('alert-success').html(data.message).removeClass('hide');
    //                     $('#couponcode').val(data.coupon);
    //                 } else {
    //                     $('.alert').addClass('alert-danger').html(data.message).removeClass('hide');
    //                     $('.couponsection').addClass('hide');
    //                     $('#check_coupon').text('').data('price', '');
    //                 }
    //             },
    //             error: function(data) {
    //                 $('.alert').removeClass('alert-success').addClass('alert-danger').html('Something went wrong!').removeClass('hide');
    //                 $('.couponsection').addClass('hide')
    //                 $('#check_coupon').text('').data('price', '');
    //             },

    //         });
    //     }
    // });

    //Forms
    function shownotification(data, form) {
        if (data.status) {
            $(form).find('.alert').removeClass('hide').html(data.message).removeClass('alert-danger alert-success').addClass(data.classname);
            $(form).addClass('formsuccess');
        } else {
            $(form).find('.alert').removeClass('hide').html(data.message).removeClass('alert-danger alert-success').addClass(data.classname);
        }
        $(form).removeClass('formloading');
    }
    //Form validation
    $("#fileupload").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#profilejigsaw').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    // jQuery("#profile_form").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         $('.update-account-form-button').text('Updating..').attr('disabled', true);
    //         var formData = new FormData($('#profile_form')[0]);
    //         formData.append('action', 'socialprofile');
    //         formData.append('jigkey', jigsawjs.jignonce);
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: formData,
    //             enctype: 'multipart/form-data',
    //             processData: false, // tell jQuery not to process the data
    //             contentType: false, // tell jQuery not to set contentType
    //             success: function(data) {
    //                 if (data.image) {
    //                     $('#profilejigsaw').attr('src', data.image);
    //                 }
    //                 $('.update-account-form-button').text('Updated').attr('disabled', false);
    //                 setTimeout(function(){
    //                     $('.update-account-form-button').text('Update').attr('disabled', false);
    //                     $.magnificPopup.close();
    //                 }, 3500);

    //             },
    //             error: function(data) {
    //                 shownotification(form, data);
    //             },


    //         });
    //     }
    // });

    // jQuery("#downloadform").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         //$(form).find('.send-button').text('Sending..');
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 if(data.status){
    //                     window.location.href = $('#downloalink').val();
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
    // jQuery("#surveyform").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         $(form).find('.send-button').text('Sending..');
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 if(data.status){
    //                     $('.untargeted-steps').addClass('hide');
    //                     adshow();
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
    function adshow(){
        var result = 1;
        result *= $('input[name=city]:checked').data('value');
        result *= $('input[name=qualification]:checked').data('value');
        result *= $('input[name=experience]:checked').data('value');
        result *= $('input[name=industry]:checked').data('value');
        var pack = parseInt($('input[name=salary]:checked').data('value'), 10) ;
        if(pack >= 0 && pack <= 2)
            pack = 2;
        else if (pack > 2 && pack <= 4)
            pack = 4;
        else if (pack > 4 && pack <= 6)
             pack = 6;
        else if (pack > 6 && pack <= 8)
            pack = 8;
        else if (pack > 8 && pack <= 10)
            pack = 10;
        result *= pack;
        var lower = result + 1;
        var upper = result - 1;
        $('.per-annual-price span').html(upper.toFixed(2)+' - '+ lower.toFixed(2));
        $('#success-target').removeClass('hide').show();
    }
    // jQuery("#course_notify").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         //$(form).find('.send-button').text('Sending..');
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 shownotification(data, form);
    //                 var cls = $('#popupform-notifyme').data('item');
    //                 $('.' + cls).find('.nofify-me').html('Notified');
    //                 //$(form).find('.send-button').text('Sent');
    //                  if($(window).width() > 768){
    //                     setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 3500);
    //                      jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                 }else{
    //                    setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 4500);
    //                     jQuery('html , body').animate({
    //                         scrollTop: jQuery('.popupbox-main').offset().top - 120
    //                     }, 1000);
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
    // jQuery("#offer_notify").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //        // $(form).find('.send-button').text('Sending..');
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 shownotification(data, form);
    //                 if($(window).width() > 768){
    //                     setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 3500);
    //                      jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                 }else{
    //                    setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 4500);
    //                     jQuery('html , body').animate({
    //                         scrollTop: jQuery('.popupbox-main').offset().top - 120
    //                     }, 1000);
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
    // jQuery("#contact-form").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         //$(form).find('.send-button').text('Sending..').attr('disabled', true);
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {

    //                 shownotification(data, form);
    //                 //$(form).find('.send-button').text('Sent').attr('disabled', false);
    //                 if($(window).width() > 768){
    //                     setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 3500);
    //                      jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                     if(jQuery('#contact').length){
    //                        jQuery('html , body').animate({
    //                            scrollTop: jQuery('#contact').offset().top-50
    //                        }, 200);
    //                     }
    //                 }else{
    //                    setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 4500);
    //                     jQuery('html , body').animate({
    //                         scrollTop: jQuery('.popupbox-main').offset().top
    //                     }, 1000);
    //                     if(jQuery('#contact').length){
    //                        jQuery('html , body').animate({
    //                            scrollTop: jQuery('#contact-form').offset().top -120
    //                        }, 200);

    //                     }
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });

    // commonforms input validation rules
	$.validator.addMethod("specialChrs", function (value, element) {
        return new RegExp('^[a-zA-Z0-9 ]+$').test(value)
    }, "Special Characters not permitted");
	jQuery.validator.addClassRules("nospecial", {
		specialChrs: true,
    });
	$.validator.addMethod('notNumber', function (value, element) {
		var reg = /[0-9]/; if (reg.test(value)) { return false; } else { return true; }
	}, 'Only alphabatic characters allowed.');
	jQuery.validator.addClassRules('nonum', {
		notNumber: true
	});
    // jQuery('.commonforms').each(function(index, el) {
    //     jQuery(this).validate({
    //         errorElement: 'span',
    //         submitHandler: function(form) {
    //             //$(form).find('.send-button').text('Sending..').attr('disabled', true);
    //             jQuery.ajax({
    //                 type: 'POST',
    //                 url: jigsawjs.ajaxurl,
    //                 dataType: 'json',
    //                 data: {
    //                     action: 'jigsawforms',
    //                     formdata: jQuery(form).serializeArray(),
    //                     jigkey: jigsawjs.jignonce,

    //                     // JAWS - Added ad_url to form data /////////////////////////////////////////////////////////////////////////////////////////////////////////
    //                     ad_url: window.location.pathname + window.location.search
    //                 },
    //                 success: function(data) {

    //                     shownotification(data, form);
    //                     //$(form).find('.send-button').text('Sent').attr('disabled', false);
    //                     if($(window).width() > 768){
    //                         setTimeout(function() {
    //                             $.magnificPopup.close();
    //                         }, 3500);
    //                          jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                     }else{
    //                        setTimeout(function() {
    //                             $.magnificPopup.close();
    //                         }, 4500);
    //                         jQuery('html , body').animate({
    //                             scrollTop: jQuery('.popupbox-main').offset().top - 120
    //                         }, 1000);
    //                     }
    //                 },
    //                 error: function(data) {
    //                     alert('Something went wrong!');
    //                 },

    //             });
    //         }
    //     });
    // });

    $('.webinardatalink').click(function(event) {
       $('#webinardata').val($(this).data('item'));
       $('#webinardate').val($(this).data('date'));
    });
    // jQuery("#register_webinar").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         //$(form).find('.send-button').text('Sending..').attr('disabled', true);
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             data: {
    //                 action: 'jigsawforms',
    //                 formdata: jQuery(form).serializeArray(),
    //                 jigkey: jigsawjs.jignonce,
    //             },
    //             success: function(data) {
    //                 shownotification(data, form);
    //                 //$(form).find('.send-button').text('Sent').attr('disabled', false);
    //                 if($(window).width() > 768){
    //                     setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 3500);
    //                      jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                 }else{
    //                    setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 4500);
    //                     jQuery('html , body').animate({
    //                         scrollTop: jQuery('.popupbox-main').offset().top - 120
    //                     }, 1000);
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });

    // jQuery("#applyjob").validate({
    //     errorElement: 'span',
    //     submitHandler: function(form) {
    //         //$(form).find('.send-button').text('Sending..').attr('disabled', true);
    //         $(form).addClass('formloading');
    //         var formData = new FormData($('#applyjob')[0]);
    //         formData.append('file', $('#fileuploadresume')[0].files[0]);
    //         formData.append('action', 'jigsawforms');
    //         formData.append('jigkey', jigsawjs.jignonce);
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             //contentType: 'json',
    //             data: formData,
    //             enctype: 'multipart/form-data',
    //             processData: false, // tell jQuery not to process the data
    //             contentType: false, // tell jQuery not to set contentType
    //             success: function(data) {
    //                 shownotification(data, form);
    //                 //$(form).find('.send-button').text('Sent').attr('disabled', false);
    //                 if($(window).width() > 768){
    //                     setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 3500);
    //                      jQuery('.mfp-wrap').animate({
    //                         scrollTop: 0
    //                     }, 1000);
    //                 }else{
    //                    setTimeout(function() {
    //                         $.magnificPopup.close();
    //                     }, 4500);
    //                     jQuery('html , body').animate({
    //                         scrollTop: jQuery('.popupbox-main').offset().top - 120
    //                     }, 1000);
    //                 }
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
    String.prototype.format = function() {
      var args = arguments;
      return this.replace(/{(\d+)}/g, function(match, number) {
        return typeof args[number] != 'undefined'
          ? args[number]
          : match
        ;
      });
    };
    jQuery("#eduadd").click(function(event) {
        event.preventDefault();
        $(".educationdetails .field").each(function(){
            $(this).removeClass('checked');
        });
        jQuery("#executiveform").submit();
        if(jQuery("#executiveform").valid()){
          var cardTemplate = $("#educlone").html();
           var item =   $('#educlone').data('item')+1;
            $('#educlone').data('item',item);
          var template = cardTemplate.format($('#school_parent').val(), $('#year').val(),$('#qualification').val(),$('#qualification').val(),$('#gpa').val(),item);
          $(".educationdetails .field").each(function(){
              $(this).addClass('checked');
               $(this).val('');
          });

          $("#edulist").append(template);
        }


    });
    jQuery(document).on('click', '.itemremoveapp', function(e) {
        e.preventDefault();
        $(this).parents('.field-main').remove();
      /*  console.log($(this).parent(".application-form"));
        if(!$(this).parents(".application-form").find('.appform-add-field').length){
            $(this).parents(".application-form .field-main").each(function(){
               $(this).removeClass('checked');
               $(this).val('');
            });
        } */

    });

    jQuery("#jobadd").click(function(event) {
        event.preventDefault();
        $(".jobdetails .field").each(function(){
            $(this).removeClass('checked');
        });
        var cardTemplate = $("#jobclone").html();
        if(jQuery("#executiveform").valid()){
        var item =   $('#educlone').data('item')+1;
        $('#jobclone').data('item',item);
        var template = cardTemplate.format($('#organization').val(), $('#designation').val(),$('#job_from').val(),$('#job_to').val(),$('#currently').val(),item);
        $(".jobdetails .field").each(function(){
            $(this).addClass('checked');
            $(this).val('');
        });
        if($('#currently').is('checked')){
            $(template).addClass('appform-add-field-highlighted')
        }
        $("#joblist").append(template);
        }
    });

    $("#fileuploadresume").change(function() {
        if($('input[type=file]')[0].files[0].name){
              $('.uploadsidebos').removeClass('hide');
              $('.doctitle').html($(this)[0].files[0].name)
        }else{
           $('.uploadsidebos').addClass('hide');
              $('.doctitle').html('')
        }

    });
    jQuery(".formclone").click(function(event) {
     var c= $(this).parents('.filedholder');
     c.find('.clone').clone().removeClass('hide clone').appendTo( c.find('.append'));
     });
    // jQuery("#executiveform").validate({
    //     errorElement: 'span',
    //     ignore:".checked, :not(:visible)",
    //     submitHandler: function(form) {
    //         var formData = new FormData($('#executiveform')[0]);
    //         formData.append('file', $('#fileuploadresume')[0].files[0]);
    //         formData.append('action', 'jigsawforms');
    //         formData.append('jigkey', jigsawjs.jignonce);
    //         if(!$('#fileuploadresume')[0].files[0]){
    //             return false;
    //         }
    //         jQuery.ajax({
    //             type: 'POST',
    //             url: jigsawjs.ajaxurl,
    //             dataType: 'json',
    //             //contentType: 'json',
    //             data: formData,
    //             enctype: 'multipart/form-data',
    //             processData: false, // tell jQuery not to process the data
    //             contentType: false, // tell jQuery not to set contentType
    //             success: function(data) {
				// 	$('#ga_track').trigger('click');
    //             },
    //             error: function(data) {
    //                 alert('Something went wrong!');
    //             },

    //         });
    //     }
    // });
     jQuery('.jigsawforms').find("input[type=text],textarea,input[type=tel],input[type=email]").each(function(ev)
      {
            if($(this).attr("placeholder"))
           $(this).attr("placeholder", 'Eg. '+$(this).attr("placeholder"));
      });
     jQuery('.downlogin').click(function(event) {

     });

});
//Share links
(function($) {
    if (typeof google === 'object' && typeof google.maps === 'object') {
           var autocomplete;
           autocomplete = new google.maps.places.Autocomplete((document.getElementById('city')),
                 {
                   types: ['(cities)'],
                 });

           function onPlaceChanged() {
               var place = autocomplete.getPlace();
               var city = place.address_components[0].long_name;
               var state = place.address_components[2].long_name;
               $('#city').val(city);
               $('#state').val(state);
           }
            google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
    }

    $.fn.customerPopup = function(e, intWidth, intHeight, blnResize) {
        e.preventDefault();
        intWidth = intWidth || '500';
        intHeight = intHeight || '400';
        strResize = (blnResize ? 'yes' : 'no');
        var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
            strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,
            objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
    }
    $(document).ready(function($) {
        $('.sharelinks a').on("click", function(e) {
            $(this).customerPopup(e);
        });

        var uhash = window.location.hash;
        if($(uhash).length){
            $('a[href="' + uhash + '"]').click();
        }
        $( "input[name='jig_change_price']" ).click(function(event) {
           $( "input[name='jig_change_price']:not(:checked)" ).attr('checked', true).trigger('change');
        });
    });

    $(window).bind('popstate', function (e) {

        var uhash = window.location.hash;
        if($(uhash).length) {
            $('a[href="' + uhash + '"]').click();
        }
        else {
            $.magnificPopup.close();
        }
    });

}(jQuery));

/*$(document).ready(function() {

   $('a').on('click touchend', function(e) {
    if($(this).closest(".card-items").length<=0){
        var el = $(this);
      var link = el.attr('href');
      window.location = link;
  }
   });

});*/

if (window.location.hash == '#_=_'){
    history.replaceState
        ? history.replaceState(null, null, window.location.href.split('#')[0])
        : window.location.hash = '';
}
