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

	$.stellar(
	{
	horizontalScrolling: false,
    verticalScrolling: true,
    scrollProperty: 'scroll',
    positionProperty: 'transform',
    parallaxBackgrounds: false,
    parallaxElements: true,
    responsive: true,
    hideDistantElements: false
	});
	
	adjustScreen();
})