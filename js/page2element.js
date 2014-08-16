(function(){
	function adjustPage2Element(){
		var gw = Math.min( window.innerWidth, $("#page2format").width() );
		var gh = window.innerHeight;
		
		
		// content ratio
		var rx = 350;
		var ry = 400;

		// circle diameter ratio
		var cr = 100; 
		
		var scale = 1;

		if( gw / gh > rx / ry ){
			scale = gh / ry;
		}
		else {
			scale = gw / rx;
		}

		
		var c = $("#page2_container");
			
		// content size
		var cwidth = rx * scale;
		var cheight = ry * scale;
		var ccircle = cwidth * cr / rx;
		var cspace = cwidth * 3 / rx;

		c.css({
			width : cwidth,
			height : cheight
		});
		
		$(".circle_button").css({
			width : ccircle,
			height : ccircle,
			borderRadius : ccircle / 2,
			fontSize : '1.2em'
		});
		
		$(".circle_button_space").css({
			margin : cspace,
			borderRadius : ccircle / 2
		});
		
		$("#page2_title").css({
			fontSize : ccircle/3,
			marginBottom : ccircle/12,
			marginTop : ccircle /6
		});
	};

	$(window).on('resize', adjustPage2Element );
	adjustPage2Element();
}).call( this );
