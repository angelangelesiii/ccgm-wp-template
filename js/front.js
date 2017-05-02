// Front Page Javascript
// Author: Zimit Media

(function($) {})( jQuery ); // JQuery WordPress workaround

jQuery(document).ready(function($){ // Document Ready

	// ===================================================
	//  TYPED JS
	// ===================================================

	$('.welcome .changing').typed({
		strings: [
			'cares for you.',
			'loves you.',
			'wants you.'
			],
		typeSpeed: 50,
		backSpeed: 25,
		backDelay: 3000,
		loop: true
	});


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


	// ===================================================
	//  Recent Posts Stagger
	// ===================================================

	var rpStagger = new ScrollMagic.Scene({
		triggerElement: '.posts-strip',
		triggerHook: 1,
		offset: 150,
		reverse: false
	})
	.setTween(TweenMax.staggerFrom('.recent-posts .article-item', 1.25, {
		y: '50px',
		autoAlpha: 0,
		ease: Power3.easeOut
	}, 0.32))
	.addIndicators()
	.addTo(fpController);

});