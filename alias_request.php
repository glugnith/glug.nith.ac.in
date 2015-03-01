<?php
    include_once "includes/header.php";
?>

<!-- Main content Starts here -->
<div id = "main_info_cont">
    <div id="main_info_left">
		<div id="main_info_left_in">
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>What is GNU?</h3>
				</div>
				<div class="content_style1_info">
					<strong>In the words of Richard M. Stallman, the founder of the GNU Project:</strong><br /><br />
					<p>"GNU, which stands for Gnu's Not Unix, is the name for the complete Unix-compatible software system which I am writing so that I can give it away free to everyone who can use it. Several other volunteers are helping me. Contributions of time, money, programs and equipment are greatly needed."</p><br />
					<strong><a href="http://www.gnu.org/gnu/manifesto.html">&#187;&#187;Read GNU Manifesto</a></strong>
				</div>
			</div>
			<br /><br />
		</div>
	</div>
    <div id = "main_info_center">
        <div id = "main_info_center_in">
            <div class = "content_style2">
                <div class = "content_style2_heading">
                    <h3>GLUG E-mail account Request</h3>
                </div>
                <br>
                <div id = "glug_mail_cont" style = "width:450px; margin:0 auto;">
                	<?php
                		//script for getting user details 
                    	if ( isset ( $_POST['submit_request'] )) {
                    	    $_SESSION['name'] = $_POST['name'];
                    	    $_SESSION['rollno'] = $_POST['rollno'];
                    	    $_SESSION['email'] = $_POST['email'];
                    	    $email_to = "rohan@glug.nith.ac.in";
                    	    include('./assets/temp_user_register.php');
                    	} else {
                    	    require "includes/alias_form.php";
                    	}
                	?>
                </div>
            </div>
            <br/>
		</div>
        <!--The latest news goes here -->

        <center> <a class="twitter-timeline" width="520" height="200"  href="https://twitter.com/glugnith"  data-widget-id="315532987880054784">Tweets by @glugnith</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</center>

        <!-- End of News section -->
    </div>
    <div id="main_info_right">
		<div id="main_info_right_in">
			<?php 
				include_once "includes/main_info_right.php";
			?>
		</div>
	</div>
</div>
<?php
    include_once "./includes/footer.php";
?>
        
