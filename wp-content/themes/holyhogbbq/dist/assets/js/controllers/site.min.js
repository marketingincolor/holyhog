jQuery( function($)
{
	var sc = new SiteController($);
	sc.init();
});

function SiteController($)
{
	if( ! window.hh_watch_scroll )
		window.hh_watch_scroll = {};

	window.hh_watch_scroll.cateringPhotos = true;

	var selectors = {
		cateringPhotos: ".catering-photos"
	};

	var cateringPhotosHeight = $( selectors.cateringPhotos ).length > 0 ? $( selectors.cateringPhotos ).offset().top : null;

	self.init = function()
	{
		initMenuToggle();
		initFooterParallax();
	};

	function initMenuToggle()
	{
		$('.nav-menu-toggle').click( function()
		{
			$('.nav-container').toggleClass('active')
		});
	}

	function initFooterParallax()
	{
		if( $( selectors.cateringPhotos ).length > 0 ) {
			$( window ).on( "scroll", function() {
				windowDidScroll();
			});
		}

		windowDidScroll();
	}

	function windowDidScroll()
	{
		if( window.hh_watch_scroll.cateringPhotos )
			cateringPhotosParallax();
		
		if( doneWatchingScroll() )
			removeScrollWatch();
	}

	function cateringPhotosParallax()
	{
		if( $( window ).scrollTop() + $( window ).height() > cateringPhotosHeight ) {
			$( selectors.cateringPhotos + ' .photo' ).addClass( 'visible' );
			window.hh_watch_scroll.cateringPhotos = false;
		}
	}

	function removeScrollWatch()
	{
		$(window).off( 'scroll' );
	}

	function doneWatchingScroll()
	{
		for( var prop in window.hh_watch_scroll )
			if( window.hh_watch_scroll[prop] )
				return false;

		return true;
	}

	return self;
};
