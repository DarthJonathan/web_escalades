/*
  Slidemenu
*/
(function() {
	var $body = $(document.body)

	$('.menu-trigger').on('click', function() {
		if( $body.hasClass('menu-active') ){
			$(".container").animate({  
				left: 0
			}, {
				duration : 300
			});
			$body.removeClass('menu-active');
		}
		else {
			$(".container").animate({  
				opacity:1
			}, {
				duration : 300
			});
			$body.addClass('menu-active');
		}

	});

}).call(this);