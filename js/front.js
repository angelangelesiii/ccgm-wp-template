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
	//  Slick for featured items
	// ===================================================

	$('.featured-container').slick({
		centerMode: true,
		slidesToShow: 2,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 6000,
		dots: true,
		arrows: false,
		prevArrow: '<button class="carousel-button prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
		nextArrow: '<button class="carousel-button next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
		responsive: [
			{
				breakpoint: 1023,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 639,
				settings: {
					centerMode: false,
					slidesToShow: 1,
				}
			}
		]
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
		y: '30%'
	}))
	// .addIndicators()
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
	// .addIndicators()
	.addTo(fpController);

});