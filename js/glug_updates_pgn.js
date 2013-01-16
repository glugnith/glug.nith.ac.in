/*
	Copyright GLUG-NITH
	& Abhishek Rana
	
	
	// HTML Structure
	
	<div id="glug_update_prev_next">
		<div id="glug_update_next"> &gt;&gt; &nbsp;&nbsp;</div>
		<div id="glug_update_prev"> &lt;&lt; &nbsp; </div>
		<div class="float_clear"></div>
	</div>
	
	<div id="glug_updates">
		<div id="glug_updates_all">
			<ul>
				<li>Update 1</li>
				<li>Update 2</li>
				<li>Update 3</li>
			</ul>	
		</div>
		<div id="glug_updates_show">
		</div>
	</div>
	
	
	// CSS
	
	#glug_updates_all{
		height:0px;
		overflow:hidden;
	}
	
	#glug_update_prev{
		position:relative;
		float:right;
		color:#3B6FC0;
		display:block;
	}
	
	#glug_update_prev:hover{
		cursor:pointer;
		color:#003366;
	}
	
	#glug_update_next{
		position:relative;
		float:right;
		color:#3B6FC0;
		display:block;
	}
	
	#glug_update_next:hover{
		cursor:pointer;
		color:#003366;
	}


*/

(function($){
	$.fn.extend({ 
		glug_updates_pgn: function(options) {

			//Settings default values
			var defaults = {
				timeout : 10000											// time to display an update
			};
			
			$('#glug_updates_all').hide();								// hides all updates
			
			var options = $.extend(defaults, options);
								
			var total_updates = this.children().children().size();		// total number of updates
			var count = 0;
			var $next_update;
			$this = $(this);
			
			$next_update =  $this.children().children().eq(count).html();
			$('#glug_updates_show').html(
				$next_update
			);
			
			// displays updates one after another
			setInterval(function(){
				if(count==total_updates-1){
					count = -1;
				}	
				count=count+1;
				$next_update =  $this.children().children().eq(count).html();
				$('#glug_updates_show').fadeOut(500,function(){
						$('#glug_updates_show').html($next_update)
					}).fadeIn(500);
			},options.timeout);		
			
			// next button
			$("#glug_update_next").click(function(){
				//alert("fdf");
				if(count==total_updates-1){
					count = -1;
				}	
				count=count+1;
				$next_update =  $this.children().children().eq(count).html();
				$('#glug_updates_show').fadeOut(500,function(){
					$('#glug_updates_show').html($next_update)
				}).fadeIn(500);
				
			});
			
			// previous button
			$("#glug_update_prev").click(function(){
				count=count-1;
				if(count==-1){
					count = total_updates-1;
				}	
				$next_update =  $this.children().children().eq(count).html();
				$('#glug_updates_show').fadeOut(500,function(){
					$('#glug_updates_show').html($next_update)
				}).fadeIn(500);
				
			});
				  
    	}
		
	});
})(jQuery);