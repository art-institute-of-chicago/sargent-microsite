// Handle query string for slideshow
$(document).ready( function() {

	// Helper function to get query string, sufficient for our purpose
	function param(name) {
		return (location.search.split(name + '=')[1] || '').split('&')[0];
	}

	// Get initial slide number
	var initial = param('q') || 1;

	// Initialize the slideshow
	var slideshow = new Swiper ('.swiper-container', {

		loop: true,
		a11y: true,

		onInit: function( swiper ) {
			swiper.slideTo(initial, 0);
		},

		autoplayDisableOnInteraction: false,
		autoplay: 5000,
		speed: 500,

		pagination: '.swiper-pagination',
		paginationClickable: true,

	});

	// Replace background images based on screen width
	var $slides = $('.slide-foobar');
	var $window = $(window);
	var $body = $("body");

	var swapSlide = function( slide, screen ) {

		var $slide = $( slide );
		var image = $slide.attr('data-slide-image');

		$slide.attr('style', "background-image: url('images/content/slideshow-" + screen + "-" + image +  ".jpg')");

	};

	var swapSlideImageClass = function() {

		// Synchronizing this to mq-smallish in _slideshow.scss
		var win_width_in_em = $window.width() / parseFloat($body.css("font-size"));

		if( win_width_in_em < 48 )
		{

			$slides.removeClass('slide-desktop');
			$slides.addClass('slide-mobile');

			$slides.each( function( i, slide ) { swapSlide( slide, 'mobile') } );

		} else {

			$slides.removeClass('slide-mobile');
			$slides.addClass('slide-desktop');

			$slides.each( function( i, slide ) { swapSlide( slide, 'desktop') } );

		}

	};


	swapSlideImageClass();

	$window.resize( swapSlideImageClass );

});
