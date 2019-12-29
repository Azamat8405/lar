
(function($) {

	var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#page-wrapper'),
		$banner = $('#banner'),
		$header = $('#header');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');

			}, 100);
		});

	// Mobile?
		if (browser.mobile)
			$body.addClass('is-mobile');
		else {

			breakpoints.on('>medium', function() {
				$body.removeClass('is-mobile');
			});

			breakpoints.on('<=medium', function() {
				$body.addClass('is-mobile');
			});

		}

		// Scrolly.
		$('.scrolly')
			.scrolly({
				speed: 1500,
				offset: $header.outerHeight()
			});

		// Menu.
		$('#menu')
			.append('<a href="#menu" class="close"></a>')
			.appendTo($body)
			.panel({
				delay: 500,
				hideOnClick: true,
				hideOnSwipe: true,
				resetScroll: true,
				resetForms: true,
				side: 'right',
				target: $body,
				visibleClass: 'is-menu-visible'
			});

		// Header.
		if ($banner.length > 0
		&&	$header.hasClass('alt')) {
			$window.on('resize', function() { $window.trigger('scroll'); });
		}


})(jQuery);



var t = 1;
var interval;
var imgnum = 1;
var fon = "fon";
var fon_nums = 11;
function FadeInFon()
{
	t = 0.5;
	interval = setInterval(function(){
		t = parseFloat(t) + parseFloat('0.030');
		if(t >= 1)
		{
			clearInterval( interval );
			if(imgnum == fon_nums){
				imgnum = 1;
			}
			else{
				imgnum++;
			}
			fadeOutFon();
		}
		$('#page-wrapper').css('background-image', '-webkit-linear-gradient(top, rgba(0,0,0,'+t+'), rgba(0,0,0,'+t+')), url(/images/'+fon+imgnum+'.jpg)');
	}, 40);
}

function fadeOutFon()
{
	interval = setInterval(function(){

		t = parseFloat(t) - parseFloat('0.010');
		if(t < 0.5)
		{
			clearInterval( interval );
			setTimeout(function(){
				FadeInFon();
			}, 2000);
		}
		$('#page-wrapper').css('background-image', '-webkit-linear-gradient(top, rgba(0,0,0,'+t+'), rgba(0,0,0,'+t+')), url(/images/'+fon+imgnum+'.jpg)');
	}, 40);
}

setTimeout(function(){

	window.location.href
	var reg_exp = RegExp("\/gto");
	if(reg_exp.test(window.location.href))
	{
		fon = "gto";
		fon_nums = 2
	}
	FadeInFon();
}, 5000);


$(window).on("load", function() {

	$('.spotlight').each(function(){
		var t = $(this).find('.image img').get(0).height;
		$(this).find('.content').css('height', t);
	});

	setTimeout(function(){
		$('.spotlight').each(function(){
			var t = $(this).find('.image img').get(0).height;
			$(this).find('.content').css('height', t);
		});
	}, 200);
});

