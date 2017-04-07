jQuery( function($)
{
	var cc = new CommunityController($);
	cc.init();
});

function CommunityController($)
{
	var selectors = {};

	self.init = function()
	{
		initInstafeed();
		initFitVid();
	};

	function initInstafeed()
	{
		var feed = new Instafeed({
			clientId: '122b5e2d33854d998742f8097faaa9cf',
			get: 'tagged',
			tagName: 'holyhogbbq',
			limit: 12,
			resolution: 'low_resolution',
			template: '<div class="photo"><img src="{{image}}"></div>'
		});

		feed.run();
	}

	function initFitVid() 
	{
		$('iframe').wrap('<div class="fitvid"></div>');
		$('.fitvid').fitVids();
	}

	return self;
};
