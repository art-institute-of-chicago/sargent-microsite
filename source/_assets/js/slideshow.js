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
		speed: 650,

		pagination: '.swiper-pagination',
		paginationClickable: true,

	});

});
