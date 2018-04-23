$(document).ready(function() {

	// Declaring selectors ahead of time for speed
	var $window = $(window);
	var $header = $('header');
	var $placeholder = $('#header-placeholder');

	var $slideshow = $('.slideshow');

	// For development, exit if the header is hidden
	if( $header.length < 1 ) {
		return false;
	}

	// "Sticky" the navigation when the user scrolls below the header
	var offsetHeader;
	var heightHeader;

	var updateHeaderStats = function() {

		heightHeader = $header.outerHeight();
		$placeholder.height( heightHeader );

		// Adjust slideshow
		var width = $slideshow.width();
		var height = $window.innerHeight();

		$slideshow.css('padding-bottom', (height - heightHeader - 24) / width * 100 + '%');

		if( $placeholder.is(":visible") ) {
			offsetHeader = $placeholder.offset().top;
		} else {
			offsetHeader = $header.offset().top;
		}

	};

	updateHeaderStats();

	$window.resize( updateHeaderStats );

	var stickied = false;

	var stickyNavigation = function() {

		if( $window.scrollTop() > offsetHeader ) {
			if( !stickied ) {
				updateHeaderStats();
				$header.addClass('sticky');
				$placeholder.addClass('sticky');
				stickied = true;
			}
		}else{
			if( stickied ) {
				$header.removeClass('sticky');
				$placeholder.removeClass('sticky');
				stickied = false;
			}
		}

	};

	stickyNavigation();

	$window.on('scroll touchmove', stickyNavigation );
	$window.resize( stickyNavigation );

});
