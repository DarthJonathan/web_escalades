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


    	if(window.innerWidth <= 768 || Modernizr.touch)
    	{
            $.stellar("destroy");
        }
        else
        {
                $.stellar({
                
                    horizontalScrolling: false,
                    verticalScrolling: true,
                    scrollProperty: 'scroll',
                    positionProperty: 'transform',
                    parallaxBackgrounds: false,
                    parallaxElements: true,
                    responsive: true,
                    hideDistantElements: false
                });

        }
		
		if(window.innerWidth <= 500)
		{
			$("div").removeClass("bg_3")
		}
		
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
    navigation : true
  	}); 
	
})

