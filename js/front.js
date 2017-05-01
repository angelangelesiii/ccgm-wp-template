// Front Page Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  ScrollMagic Controller
	// ===================================================

	var fpController = new ScrollMagic.Controller();


	// ===================================================
	//  Banner Parallax
	// ===================================================

	var bannerParallax = new ScrollMagic.Scene({
		triggerElement: '.banner',
		triggerHook: 0,
		duration: '130%'
	})
	.setTween(TweenMax.to('.parallax-bg', 1, {
		y: '20%'
	}))
	.addIndicators()
	.addTo(fpController);

});