/*
Vizion-Al/ML-Digital Marketing Responsive HTML5 Template
Author: iqonicthemes.in
Version: 1.0
Design and Developed by: iqonicthemes.in
*/

/*----------------------------------------------
Index Of Script
------------------------------------------------

1.Page Loader
2.Back To Top
3.Header
4.Scrolling


------------------------------------------------
Index Of Script
----------------------------------------------*/

$(document).ready(function() {

    /*------------------------
    Page Loader
    --------------------------*/
    jQuery("#load").fadeOut();
    jQuery("#loading").delay(0).fadeOut("slow");



    /*------------------------
    Back To Top
    --------------------------*/
    $('#back-to-top').fadeOut();
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 250) {
            $('#back-to-top').fadeIn(1400);
        } else {
            $('#back-to-top').fadeOut(400);
        }
    });
    // scroll body to 0px on click
    $('#top').on('click', function() {
        $('top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    /*------------------------
    Header
    --------------------------*/
    $('.navbar-nav li a').on('click', function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 0
        }, 1500);
        e.preventDefault();
    });
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('header').addClass('menu-sticky');
        } else {
            $('header').removeClass('menu-sticky');
        }
    });


    /*------------------------
    Scrolling
    --------------------------*/
jQuery(window).on("scroll", onScroll);
    jQuery('.navbar-nav li a[href^="#"]').on('click', function(e) {
    jQuery('.main-header').addClass('menu-sticky');
    jQuery(window).off("scroll");
    jQuery('.navbar-nav li a').each(function() {
        jQuery(this).parent().removeClass('active');
    })
    jQuery(this).parent().addClass('active');
var target = this.hash;
//if( target.length ) {
var nav = jQuery(target);
if (nav.length) {
    var contentNav = nav.offset().top;
    //e.preventDefault();
    jQuery('html, body').stop().animate({
        'scrollTop': contentNav
    }, 1500, 'swing', function() {
        window.location.hash = target;
        jQuery(window).on("scroll", onScroll);
    });
}
});
function onScroll(event){
    var scrollPos = jQuery(window).scrollTop() + 80;
    jQuery('.navbar-nav li a[href^="#"]').each(function() {
    if (jQuery(this).attr("href").indexOf('https://') == -1) {
        var refElement = jQuery(jQuery(this).attr("href"));
    } else {
        var refElement = jQuery(this);
    }
if (jQuery(this).attr("href").indexOf('https://') == -1) {
    if (!refElement.length) return; // if the length is 0 (nothing selected) skip the rest of this iteration where the accessing of the position happens
    if (refElement.position().top <= scrollPos) {
        jQuery(document).find('.nav-item').removeClass("active");
        jQuery(this).parent().addClass("active");
    } else {
        jQuery(this).parent().removeClass("active");
    }
}
});
}


});




/*------------------------
		Owl Carousel
		--------------------------*/
		$('.owl-carousel').each(function() {
			var $carousel = $(this);
			$carousel.owlCarousel({
				items: $carousel.data("items"),
				loop: $carousel.data("loop"),
				margin: $carousel.data("margin"),
				nav: $carousel.data("nav"),
				dots: $carousel.data("dots"),
				autoplay: $carousel.data("autoplay"),
				autoplayTimeout: $carousel.data("autoplay-timeout"),
				navText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>'],
				responsiveClass: true,
				responsive: {
					// breakpoint from 0 up
					0: {
						items: $carousel.data("items-mobile-sm")
					},
					// breakpoint from 480 up
					480: {
						items: $carousel.data("items-mobile")
					},
					// breakpoint from 786 up
					786: {
						items: $carousel.data("items-tab")
					},
					// breakpoint from 1023 up
					1023: {
						items: $carousel.data("items-laptop")
					},
					1199: {
						items: $carousel.data("items")
					}
				}
			});
		});















