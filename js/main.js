// Main Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  ScrollMagic Controller
	// ===================================================

	var mainController = new ScrollMagic.Controller();


	// ===================================================
	//  Navbar Toggling
	// ===================================================

	var navScene = new ScrollMagic.Scene({
		triggerElement: 'main#main',
		triggerHook: 0,
		offset: 50
	})
	.on('enter', function() { // if viewport moved by 75px, remove 'top-position' class
		$('#ccgm-header.front-page').removeClass('top-position');
	})
	.on('leave', function() {// if viewport is < 75px from top, add 'top-position' class
		$('#ccgm-header.front-page').addClass('top-position');
	})
	// .addIndicators()
	.addTo(mainController);


	// ===================================================
	//  Header Spacer for not front-page pages
	// ===================================================

	$('.header-spacer').height($('#ccgm-header').outerHeight());


	// ===================================================
	//  Sticky Footer
	// ===================================================

	var windowHeight = $(window).height(),
		headerHeight = $('#ccgm-header').outerHeight(),
		footerHeight = $('#colophon').outerHeight(),
		mainHeight = $('main.site-main');

	var minMainHeight = windowHeight - (headerHeight + footerHeight);

	mainHeight.css('min-height', minMainHeight);


	// ===================================================
	//  Slick Carousel for Featured Posts
	// ===================================================

	$('.featured-posts-carousel').slick({
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 6000,
		dots: true,
		prevArrow: '<button class="carousel-button prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
		nextArrow: '<button class="carousel-button next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>'
	});

});