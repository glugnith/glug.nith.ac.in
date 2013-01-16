//	Copyright GLUG-NITH
//	& Abhishek Rana
	
// JavaScript Document
$(document).ready(function(){
	
	// images become draggable
	$(".images_slider_img").draggable({
		containment:"#slider_in",
		distance: 10,
		//opacity: 1
		//delay: 500
		//revert: true
	});
	
	// image mouse down function
	$('.images_slider_img').mousedown(function() {
		var rotAngle = 0;
		$(this).addClass('zindexTop');
		rotate(this,rotAngle);
	});
	
	// image mouse up function
	$('.images_slider_img').mouseup(function() {
		var rotAngle = randAngle();
		rotate(this,rotAngle);
		$(this).removeClass('zindexTop');
		
	});
	
	//initial shuffle
	$('.images_slider_img').each(function(index, element) {
        var rotAngle = randAngle();
		rotate(this,rotAngle);
		randPosition(this);
	});
	// automatically shuffle after an interval
	setInterval(function(){
	$('.images_slider_img').each(function(index, element) {
        var rotAngle = randAngle();
		rotate(this,rotAngle);
		randPosition(this);
    })},10000);
	
	// find random positions for the image within the container
	function randPosition(thiss){
		var contWidth  = $("#slider_in").width();
		var contHeight = $("#slider_in").height();
		var imgWidth   = $("#slider_in img").width();
		var imgHeight  = $("#slider_in img").height();
		
		var posXReal = contWidth - imgWidth;
		var posYReal = contHeight - imgHeight;
		
		var pos = $(thiss).position();
		var posX = pos.left;
		var posY = pos.top;

		var posXLimit = Math.floor(Math.random()*posXReal);
		var posYLimit = Math.floor(Math.random()*posYReal);
		
		rand_pos_flag = Math.floor(Math.random()*4);
		//alert(rand_pos_flag);
		if(rand_pos_flag==0){
			posXLimit = Math.floor(Math.random()*(posXReal-posX));
			posYLimit = Math.floor(Math.random()*(posYReal-posY));
		}
		else if(rand_pos_flag==1){
			posXLimit = Math.floor(Math.random()*(-posX));
			posYLimit = Math.floor(Math.random()*((posYReal-posY)));
		}
		else if(rand_pos_flag==2){
			posXLimit = Math.floor(Math.random()*((posXReal-posX)));
			posYLimit = Math.floor(Math.random()*(-posY));
		}
		else if(rand_pos_flag==3){
			posXLimit = Math.floor(Math.random()*(-posX));
			posYLimit = Math.floor(Math.random()*(-posY));
		}
		
		$(thiss).animate({
    		left: '+='+posXLimit,
			top: '+='+posYLimit
 			}, 100, function() {
  		});
	}
	
	// rotate the image with random angle
	function rotate(thiss,degree){
		$(thiss).animate({  borderSpacing: degree }, {
			step: function(now,fx) {
			$(this).css('-webkit-transform','rotate('+now+'deg)');
			$(this).css('-moz-transform','rotate('+now+'deg)');
			$(this).css('-o-transform','rotate('+now+'deg)');  
			$(this).css('-ms-transform','rotate('+now+'deg)');  
			$(this).css('transform','rotate('+now+'deg)'); 
			},
			duration:'slow'
		},'linear')
	}
	function randAngle(){			// between -180 and 180
		var rot= Math.floor(Math.random()*360);
		if(rot>180){
			rot=rot-180;
			rot=-rot;
		}
		return rot;
	}
	function randAngle2(){			// between -180 and 180
		var rot= Math.floor(Math.random()*2);
		return rot;
	}
	
	// click -> image rotate
	$("#image_shuffle").click(function(){
		$('.images_slider_img').each(function(index, element) {
			randPosition(this);
    	});
	});
	//  click -> image move to random positions
	$("#image_shuffle2").click(function(){
		$('.images_slider_img').each(function(index, element) {
       		var rotAngle = randAngle();
			rotate(this,rotAngle);
    	});
	});
	

// ------------------------ lightbox  -------------------------------
	$('#lightbox').hide();
	$('#lightbox_content').hide();
	
	// double click images
	$(".images_slider_img img").dblclick(function(){
		$('#lightbox').show();
		$('#lightbox_content').show();
		$('#lightbox').addClass('lightbox_overlay');
		
		var img_href = $(this).attr('src');
		var img_href2 = img_href.substring(15);
		var img_href3 = './images/gallery/slideshow_large/'+img_href2;
		var imgsrc = "<img src='"+img_href3+"'>";		
		$('#lightbox_content').addClass('lightbox_content_disp');
		$('#lightbox_image p').append(imgsrc);
		
		var img_caption = $(this).attr('alt');
		$('#lightbox_caption p').append(img_caption); 
				
	});
	
	// lightbox previous button click
	$("#lightbox_prev").click(function(){
		var prev_src1 = $(this).parent().prev().children().children().attr('src');
		var prev_src2 = prev_src1.substring(36);
		if((prev_src2.length) == '5'){		// images 1 to 9
			var curr_pic_no = prev_src2.charAt(0);
			var prev_pic_no = parseInt(curr_pic_no)-1;
			var prev_pic_href = './images/gallery/slideshow_large/img'+prev_pic_no+'.jpg';
			var prev_pic_src = "<img src='"+prev_pic_href+"'>";
			if(prev_pic_no != '0'){
				$('#lightbox_image p').html("");
				$('#lightbox_caption p').html("");
				$('#lightbox_image p').append(prev_pic_src);
			}
		}
		
		if((prev_src2.length) == '6'){		// images 10 to 99
			var curr_pic_no = prev_src2.substr(0,2);
			var prev_pic_no = parseInt(curr_pic_no)-1;
			var prev_pic_href = './images/gallery/slideshow_large/img'+prev_pic_no+'.jpg';
			var prev_pic_src = "<img src='"+prev_pic_href+"'>";
			if(prev_pic_no != '0'){
				$('#lightbox_image p').html("");
				$('#lightbox_caption p').html("");
				$('#lightbox_image p').append(prev_pic_src);
			}
		}
		
	});
	
	// lightbox next button click
	$("#lightbox_next").click(function(){
		
		var next_src1 = $(this).parent().prev().children().children().attr('src');
		var next_src2 = next_src1.substring(36);
		if((next_src2.length) == '5'){		// images 1 to 9
			var curr_pic_no = next_src2.charAt(0);
			var next_pic_no = parseInt(curr_pic_no)+1;
			var next_pic_href = './images/gallery/slideshow_large/img'+next_pic_no+'.jpg';
			var next_pic_src = "<img src='"+next_pic_href+"'>";
			var total_pics = $("#slider_in ul li").length;
			if(next_pic_no <= total_pics){
				$('#lightbox_image p').html("");
				$('#lightbox_caption p').html("");
				$('#lightbox_image p').append(next_pic_src);
			}
			;
		}
		
		if((next_src2.length) == '6'){		// images 10 to 99
			var curr_pic_no = next_src2.substr(0,2);
			var next_pic_no = parseInt(curr_pic_no)+1;
			var next_pic_href = './images/gallery/slideshow_large/img'+next_pic_no+'.jpg';
			var next_pic_src = "<img src='"+next_pic_href+"'>";
			var total_pics = $("#slider_in ul li").length;
			if(next_pic_no <= total_pics){
				$('#lightbox_image p').html("");
				$('#lightbox_caption p').html("");
				$('#lightbox_image p').append(next_pic_src);
			}
		}
		
	});
	
	// lightbox closes on clicking close button
	$("#lightbox_close").click(function(){
		$('#lightbox').hide();
		$('#lightbox_content').hide();
		$('#lightbox_image p').html("");
		$('#lightbox_caption p').html("");
	});
	
	// lightbox closes on clicking black background
	$("#lightbox").click(function(){
		$('#lightbox').hide();
		$('#lightbox_content').hide();
		$('#lightbox_image p').html("");
		$('#lightbox_caption p').html("");
	});


});


	