function adjustScreen(){
	$("#vidIndex").attr( "width", window.innerWidth );
	
	$("#background-vid").css({ 
		height : window.innerHeight, 
		width : window.innerWidth, 
		marginBottom : -window.innerHeight 
	});
}

$(window).resize( adjustScreen );

$(function(){
 	$.scrollIt(
	{
	easing: 'easeInOutSine',
  	scrollTime: 850,
	activeClass: 'active',
	});
});


$(document).ready(function ($) {

	
	
	adjustScreen();
	
	$('#youtube').magnificPopup({
		items:
		{
		type:'iframe',
		src:'https://www.youtube.com/watch?v=9wH5oWtbOFU'
		}
		});
	
	$("#warung").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigation : true
  	}); 
})

//Disable Parallax On Mobile
var stellarApplied = false;

function removeParallax(vertOffset)
{
    if (stellarApplied)
    {
        stellarApplied = false;
        $.stellar("destroy");
        $("*[data-stellar-ratio]").attr("style", "");
        $(".parallax[data-stellar-background-ratio]").css("background-position", "50% 50%");
    }
}

function SetUpParallax (vertOffset)
{
    vertOffset = vertOffset ? vertOffset : 0;

    // Don't enable parallax on touch devices (aka mobile/tablet)
    if (!Modernizr.touch && window.screen.width > 768)
    {
    	if($(window).width() <= 768)
    	{
            removeParallax();
        }
        else
        {
        	if(!stellarApplied)
        	{
                $.stellar({
                    
                    //-- Set scrolling to be in either one or both directions
                    horizontalScrolling: false,
                    verticalScrolling: true,
                    scrollProperty: 'scroll',
                    positionProperty: 'transform',
                    parallaxBackgrounds: false,
                    parallaxElements: true,
                    responsive: false,
                    hideDistantElements: false
                });

                stellarApplied = true;
            }
        }
    }
}
