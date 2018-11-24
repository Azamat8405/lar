var t = 1;
var interval;
var imgnum = 1;
function FadeInFon()
{
	t = 0.5;
	interval = setInterval(function(){
		t = parseFloat(t) + parseFloat('0.020');
		if(t >= 1)
		{
			clearInterval( interval );
			if(imgnum == 11){
				imgnum = 1;
			}
			else{
				imgnum++;				
			}
			fadeOutFon();
		}
		$('#page-wrapper').css('background-image', '-webkit-linear-gradient(top, rgba(0,0,0,'+t+'), rgba(0,0,0,'+t+')), url(/images/fon'+imgnum+'.jpg)');
	}, 40);
}

function fadeOutFon()
{
	interval = setInterval(function(){

		t = parseFloat(t) - parseFloat('0.005');
		if(t < 0.5)
		{
			clearInterval( interval );
			setTimeout(function(){
				FadeInFon();
			}, 4000);
		}
		$('#page-wrapper').css('background-image', '-webkit-linear-gradient(top, rgba(0,0,0,'+t+'), rgba(0,0,0,'+t+')), url(/images/fon'+imgnum+'.jpg)');
	}, 40);
}

setTimeout(function(){
	FadeInFon();
}, 7000);

$banner = $('#banner');
$header = $('#header');
$(window).scroll(function(){

	if($banner.outerHeight() <=  $(document).scrollTop())
	{
		$header.removeClass('alt');
	}
	else
	{
		$header.addClass('alt');
	}
});