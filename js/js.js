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
		
	$('#path').magnificPopup({
		items:
		{
		type:'inline',
		src:'<div class="white-popup">Path Kami : Escalades Revinesia</div>'
		}
		});
		
	$('.band').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=6'
		}
		});
		
	$('.vocal').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=11'
		}
		});
		
	$('.PU').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=9'
		}
		});
		
	$('.basket').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=30'
		}
		});
		
	$('.catur').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=24'
		}
		});
		
	$('.futsal').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=21'
		}
		});
		
	$('.md').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=19'
		}
		});
		
	$('.mural').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=17'
		}
		});
		
	$('.paskibra').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=13'
		}
		});
		
	$('.story').magnificPopup({
		items:
		{
		type:'iframe',
		src:'http://www.osissmak5penaburjakarta.com/escalades/wp/?p=15'
		}
		});
		
	$("#warung").owlCarousel({
    items : 3,
    lazyLoad : true,
    navigation : true
  }); 
	
})

