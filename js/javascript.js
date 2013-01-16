// JavaScript Document
$(document).ready(function(){
	
	$(".navbar_background_hover").hover(function(){
		$(this).css({'background-color': '#3B5998'});
	});
	
	$(".navbar_background_hover").hover(
		function() {
      		$(this).css({'background-color': '#0a457f', 'color':'#FFF'});
   		},
   		function() {
      		$(this).css({'background-color': '', 'text-decoration':'none'});
   		}

	);
	
	/*tuxedo animation starts */
	
	$('#tuxedo').animate({
			//opacity: 0.25,
			'bottom': '+=10px'
			//height: 'toggle'
	  	}, 1000, 'swing', function() {
			$('#tuxedo').animate({
				'bottom': '-=10px'
			}, 1000, 'swing', function(){
			});
	  	});
		
	
	setInterval(function() {
	  	$('#tuxedo').animate({
			//opacity: 0.25,
			'bottom': '+=10px'
			//height: 'toggle'
	  	}, 1000, 'swing', function() {
			$('#tuxedo').animate({
				'bottom': '-=10px'
			}, 1000, 'swing', function(){
			});
	  	});
	}, 10000);

	
	$('#tuxedo').click(function(){
		$('#tuxedo').animate({
			'bottom': '+=10px'
		  }, 1000, 'swing', function() {
			$('#tuxedo').animate({
					'bottom': '-=10px'
			}, 1000, 'swing', function(){
			});
		  });		
	});
	
	/*tuxedo animation ends */
	

	/* heading slide animation starts */	
	
	$(".content_style1_heading h3").hover(
	function (e) {
		$(this).animate({
			paddingLeft : '8px'
		}, {duration:300,easing:'swing'});
	},
	// this is called when the mouse leaves the link
	function () {
		$(this).animate({
			paddingLeft : '-8px'
		}, {duration:300,easing:'swing'});
	}
	);
	
	$(".content_style2_heading h3").hover(
	function (e) {
		$(this).animate({
			paddingLeft : '8px'
		}, {duration:300,easing:'swing'});
	},
	// this is called when the mouse leaves the link
	function () {
		$(this).animate({
			paddingLeft : '-8px'
		}, {duration:300,easing:'swing'});
	}
	);
	
	$(".content_style3_heading h3").hover(
	function (e) {
		$(this).animate({
			paddingLeft : '8px'
		}, {duration:300,easing:'swing'});
	},
	// this is called when the mouse leaves the link
	function () {
		$(this).animate({
			paddingLeft : '-8px'
		}, {duration:300,easing:'swing'});
	}
	);
	
	/* heading slide animation ends */


	/* glug updates start */
	
	$('#glug_updates_all').glug_updates_pgn({timeout:7000});
	
	/* glug updates ends */





});

	
	