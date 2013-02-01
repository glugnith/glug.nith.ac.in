<?php 
	include_once "includes/header.php";
?>

<!-- Main Info starts -->
<div id="main_info_cont">

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
			<div class="content_style1_cont">
				<div class="content_style1">
					<div class="content_style1_heading">
						<h3>Linux and the GNU Project</h3>
					</div>
					<div class="content_style1_info">
						<strong>The version of GNU which is widely used today is more often known as "Linux" and many users are not aware of the extent of its connection with the GNU Project.</strong><br /><br />
						<p>Linux is the kernel: the program in the system that allocates the machine's resources to the other programs that you run. The kernel is an essential part of an operating system, but useless by itself; it can only function in the context of a complete operating system. Linux is normally used in a combination with the GNU operating system: the whole system is basically GNU, with Linux functioning as its kernel.</p><br />
						<strong><a href="http://www.gnu.org/gnu/linux-and-gnu.html">&#187;&#187;Read more</a></strong>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	
	
	<div id="main_info_center">
		<div id="main_info_center_in">

			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>GLUG Mail</h3>
				</div>
				<br />
				<div id="glug_mail_cont" style="width:450px;margin:0 auto;">
				<?php
                    if (isset($_POST['submit_mail']))
                      {
                      //send email
               //       $email_from = NULL;
                //      $email_to   = NULL;
                 //     $subject 	  = NULL;
                  //    $message    = NULL;
                      $email_from = $_POST['email_from'] ;
                      $email_to = "glug-nith@glug.nith.ac.in" ;
                      $subject = $_POST['subject'] ;
                      $message = $_POST['message'] ;
                      $message = wordwrap($message, 70);
                      mail($email_to, $subject,$message . "\nFrom : " . $email_from, "From:" . "root@glug.nith.ac.in");
                      echo "Thank you for your feedback...";
                      }
                    else
                      {
                      echo "<table>
                                <form method='post' action='contactus.php'>
                                <tr>
                                    <td>Your email-id : </td>
                                    <td><input name='email_from' type='text' required='required' /> </td>
                                </tr>
                                <tr>
                                    <td>Subject: </td>
                                    <td><input name='subject' type='text' required='required'  /> </td>
                                </tr>
                                <tr>
                                    <td>Message: </td>
                                    <td><textarea name='message' rows='6' cols='40' required='required' ></textarea> </td>
                                </tr>
                                <tr> 
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type='submit' name='submit_mail' style='background-color:#044077; padding:5px 15px; color:#FFFFFF;'/> 
                                        <input type='reset' style='background-color:#044077; padding:5px 15px; color:#FFFFFF;'/> 
                                    </td>
                                </tr>
                            </form>
                            </table>
                            ";
                            
                      }
				?>
				</div>
			<br />
			<br />
			</div>
			<br />



			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>GLUG-NITH IRC Channel</h3>
				</div>
				<div class="content_style2_info">
					<p><strong>IRC webchat on GLUG NITH</strong>
					<br />
						Now webchat gateway interface is available through glug.nith.ac.in. This means you can use IRC webchat 24 hrs. Just select a nick and start discussing. The glug nith irc channel is #glugnith. Other popular channels are #fedora, #ubuntu, #c++ etc.
						<br />
						Visit IRC webchat interface <a href="/irc.php" target="_blank">here</a>.
<br/><br/>
    <!-- How to use IRC webchat interface -->
                            <h3>IRC How to?</h3>
                           <p>
                       <b>IRC (Internet Relay Chat)</b> is an Internet protocol for group communication.
                         <br />
                          <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat" target="_blank">&#187;&#187;Read about IRC on Wikipedia</a>
                           <br />
                 Each group(chat room) in IRC is identified by a channel name. You can join an IRC channel by entering your nick (like an username) and channel na    me(like #glugnith). Channel names always start with a # or ##. e.g. #glugnith, #fedora, #ubuntu, #c++ etc.
                             <br />
                              <b>#glugnith</b> is the official IRC channel of GLUG NITH. You can join this channel and be the part of the discussion. You can also a    sk any GNU/Linux related problems here. We almost always hang out here, so this is the fastest way to reach us.
                               <br />
                                Since IRC is blocked by our college proxy, so you cannot use an IM client like Pidgin to connect to an IRC server from NITH. But you c    an use freenode's webchat interface to connect to IRC.
                                 <br />
                                  <a href="http://glug.nith.ac.in/irc.php" target="_blank">&#187;&#187;Click here</a> to use the IRC webchat interface.
                               </p>
                           


					</p>
				</div>
			</div>
			<br />
			
			<div class="content_style2">
			<div class="content_style2_heading">
					<h3>Facebook Group of GLUG NITH</h3>
				</div>
				<div class="content_style2_info">
				<p>
									<strong>Join Us on Facebook</strong>
						<p>You can join GLUG NITH group at <a href="https://www.facebook.com/groups/glugnith/">facebook</a> or subscribe to our page at <a href="https://www.facebook.com/glugnith/">facebook</a> for latest updates.</p>
					</p>
				</div>
			</div>
			
			<br />
			
			<div class="content_style2">
			<div class="content_style2_heading">
					<h3>Mailing List</h3>
				</div>
				<div class="content_style2_info">
					<p>
						This mailing list is hosted at <a href="http://lists.nongnu.org">lists.nongnu.org</a> and was graciously allotted to us by <a href="http://savannah.gnu.org">savannah.gnu.org</a>.</p>
						<br />
						<h3><a href="http://savannah.gnu.org">Thank you Savannah!</a></h3><br />
						<div class="line1"></div>
						
						<strong>How to Subscribe?</strong>
						<p>Its easy! Go <a href="http://lists.nongnu.org/mailman/listinfo/glug-nith-discuss"><b>here</b></a>.</p>
						<div class="line1"></div>
						
						<strong>How to read old posts?</strong>
						<p>You can read the old posts <a href="http://lists.gnu.org/archive/html/glug-nith-discuss/"><b>here</b></a>.</p>
						<div class="line1"></div>
					</p>
				</div>
			</div>
		</div>
	</div>
	
				
		
	<div id="main_info_right">
		<div id="main_info_right_in">
			<?php 
				include_once "includes/main_info_right.php";
			?>
		</div>
	</div>
	
	<div class="float_clear">
	</div>
		
</div>


<!-- Main Info ends -->


<?php
	include_once "includes/footer.php";
?>
