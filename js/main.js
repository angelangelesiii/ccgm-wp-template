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
	//  Mobile Menu Box Toggling
	// ===================================================

	var mobileOverlay = $('header .mobile-menu-overlay'),
		mobileBox = $('header .mobile-menu-box');

	// Declare timelines for opening and closing of mobile menu
	var openMobile = new TimelineMax({
		paused: false
	});
	var closeMobile = new TimelineMax({
		// After animation for closing, hide the menu and overlay boxes
		// and remove overflow: hidden property of body.
		onComplete: function(e) {
			console.log('run!');
			mobileBox.hide();
			mobileOverlay.hide();
			$('body').removeClass('mobile-menu-open');
		}
	});

	// Define animations for opening mobile menu
	openMobile
		.from(mobileOverlay, 0.5, {
			autoAlpha: 0,
			ease: Power3.easeOut
		}, 'a')
		.to(mobileBox, 0.5, {
			left: 0,
			ease: Power3.easeOut
		}, 'a')
		.pause()
		;

	// Define animations for closing mobile menu
	closeMobile
		.to(mobileOverlay, 0.5, {
			autoAlpha: 0,
			ease: Power3.easeOut
		}, 'a')
		.to(mobileBox, 0.5, {
			left: '-100%',
			ease: Power3.easeOut
		}, 'a')
		.pause()
		;

	var openButton = $('.mobile-menu-button.open-menu-button'),
		closeButton = $('.mobile-menu-button.close-menu-button');

	// Do these when open button is clicked.
	openButton.click(function(e){
		$('body').addClass('mobile-menu-open');
		mobileBox.show();
		mobileBox.scrollTop(0);
		mobileOverlay.show();
		openMobile.play(0);
	});

	// Do these when close button or overlay (shadow outside
	// the menu) is clicked.
	closeButton.click(function(e) {
		closeMobile.play(0);
	});
	mobileOverlay.click(function(e) {
		closeMobile.play(0);
	});


	// ===================================================
	//  Mobile Menu Box Item On Click Open Submenu
	// ===================================================

	// Mobile menu list item with children link selector
	var itemEl = $('#ccgm-header .mobile-menu-box li.menu-item.menu-item-has-children > a');

	// Click on the link then add class "open-submenu" to its parent li.menu-item
	itemEl.click(function(e){
		$(this).parent().toggleClass('open-submenu');
	});


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
		mainHeight = $('.site-content');

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

	$('.featured-posts-carousel').show();


});