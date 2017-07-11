jQuery( function($)
{
	var hc = new HomeController($);
	hc.init();
});

function HomeController($)
{
	if( ! window.hh_watch_scroll )
		window.hh_watch_scroll = {};

	window.hh_watch_scroll.catering = true;
	window.hh_watch_scroll.locations = true;

	var selectors = {
		catering 		: '.catering',
		locations 		: '.locations',
		videoElem 		: '.homepage-video-feature video',
		videoControl 	: '.homepage-video-control'
	};

	var cateringHeight = $( selectors.catering ).offset().top;
	var locationsHeight = $( selectors.locations ).offset().top;

	self.init = function()
	{
		initEventListeners();
		initHomepageVideo();
		initHomepageParallax();
	};

	function initEventListeners()
	{
		$( selectors.videoControl ).click( toggleVideoPaused );
	}

	function toggleVideoPaused()
	{
		if( $( this ).hasClass( 'pause' ) )
			$( selectors.videoElem ).get(0).pause();
		else
			$( selectors.videoElem ).get(0).play();

		$( selectors.videoControl ).toggleClass( 'pause' );
	}

	function initHomepageVideo()
	{
		
	}

	function initHomepageParallax()
	{
		$( window ).on( 'scroll', function() {
			windowDidScroll();
		});

		windowDidScroll();
	}

	function windowDidScroll()
	{
		if( window.hh_watch_scroll.catering )
			cateringParallax();
		if( window.hh_watch_scroll.locations )
			locationsParallax();

		if( doneWatchingScroll() )
			removeScrollWatch();
	}

	function locationsParallax()
	{
		if( $( window ).scrollTop() + $( window ).height() > locationsHeight - 25 ) {
			$( selectors.locations + ' h2' ).addClass( 'visible' );
			window.hh_watch_scroll.locations = false;
		}
	}

	function cateringParallax()
	{
		if( $( window ).scrollTop() + $( window ).height() > cateringHeight - 25 ) {
			$( selectors.catering + ' span' ).addClass( 'visible' );
			window.hh_watch_scroll.catering = false;
		}
	}

	function removeScrollWatch()
	{
		$(window).off( 'scroll' );
	}

	function doneWatchingScroll()
	{
		for( var prop in window.hh_watch_scroll ) {
			console.log( window.hh_watch_scroll[prop] );
			if( window.hh_watch_scroll[prop] )
				return false;
		}

		return true;
	}

	return self;
};
