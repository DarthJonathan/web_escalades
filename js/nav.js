/*
  Slidemenu
*/
(function() {
	var $body = document.body
	, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

	if ( typeof $menu_trigger !== 'undefined' ) {
		$menu_trigger.addEventListener('click', function() {
			if( $body.className == 'menu-active' ){
				$(".container").animate({  
					left: 0
				}, {
					duration : 300
				});
				$body.className = '';
			}
			else {
				$(".container").animate({  
					opacity:1
				}, {
					duration : 300
				});
				$body.className = 'menu-active';
			}

//			$body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
		});
	}

}).call(this);