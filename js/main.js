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

});