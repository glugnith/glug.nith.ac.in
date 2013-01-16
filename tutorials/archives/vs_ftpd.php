<?php 
	include_once "../includes/header2.php";
?>

<!-- Main Info starts -->
<div id="main_info_cont">
	<div id="main_info_left">
		<div id="main_info_left_in">
		
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>What is FTP?</h3>
				</div>
				<div class="content_style1_info">
					<p>FTP stands for File Transfer Protocol.It is a protocol widely used for transferring files over any network that supports the TCP/IP protocol suite. There are two computers involved in an FTP transfer: a server and a client. The FTP server, running FTP server software, listens on the network for connection requests from other computers. The client computer, running FTP client software, initiates a connection to the server. Once connected, the client can do a number of file manipulation operations such as uploading files to the server, download files from the server, rename or delete files on the server and so on.<br />
					The FTP protocol is described in RFC959.</p><br />
					<strong><a href="http://www.w3.org/Protocols/rfc959/">&#187;&#187;Read RFC959</a></strong>	
				</div>
			</div>
			<br />
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>RFC</h3>
				</div>
				<div class="content_style1_info">
					<p>In internetworking and computer network engineering, Request for Comments (RFC) documents are a series of memoranda encompassing new research, innovations, and methodologies applicable to Internet technologies.</p><br />
					<strong><a href="http://www.rfc-editor.org/">&#187;&#187;Read more</a></strong>	
				</div>
			</div>
			
		</div>
	</div>
		
	
	<div id="main_info_center">
		<div id="main_info_center_in">
			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>vsftpd: Short n Sweet</h3>
				</div>
				<div class="content_style2_info">
				
					<p>We use vsftpd for hosting our ftp server, and it only makes sense that there should be a tutorial for this too.. Though I had talked about ProFTPD before, this one is simpler, easier, and faster, with the disadvantage of having lesser choice in configuring things.</p><br />
		<p>Quickly getting down to business, synaptic/apt/yum cultists get vsftpd from your repository. Others install from source, unless ofcourse, it is already there, and fire up a nice text editor as root. Open the config file. The one for a default RHEL install (which is what GLUG uses, by the way) is at /etc/vsftpd/vsftpd.conf. Check your man page for where yours should be.</p><br />
		<p>Now check out the config file, it is more or less going to be like this: <a href=/tutorials/vsftpd.conf>vsftpd.conf</a>. If its blank, copy mine in.</p><br />
		<p>Notice that local_enable is set to NO. So that only anonymous access is allowed. write_enable is also set to NO (for obvious reasons ;)). Most of the opions are self explanatory. You can set ftpd_banner to some nice text you want to show on login.</p><br />
		<p>Now the last three lines in my config file. "no_anon_password=YES", this means that anonymous users (like a browser) wont be asked for a password. It doesn't matter right? "listen=YES" makes sure that the server runs as standalone (and not through inetd or xinetd), this is preferable for performance reasons (someone told me this, not sure myself). I have set "anon_root" to the directory that I want to allow FTP access to, for the anonymous users (who also happen to be the only kind of users for our server).</p><br />
		<p>There are options to limit download speeds (cant let them have all of your resources can you? :)) Check out the man page. It talks about these also.</p><br />
		<p>Thats it! Save the file, RHEL/Fedora users hit these lines in a terminal as root:<br />
--------------------------------------------------------------------------------------------------------<br />
service vsftpd start<br />
chkconfig vsftp on<br />
--------------------------------------------------------------------------------------------------------<br /></p>

<p>Others do the equivalent, to make sure your service starts, and starts each time you boot.</p><br />
<p>Enjoy!</p><br />
		<img src="./vs_ftpd./vs_ftpd.jpg"><br />Our vsftpd server, as seen from a browser.</p><br />
		<p>Posted by <a href="mailto:arjunsha@gmail.com">Arjun Shankar</a>.</p>
		
				</div>
			</div>
		</div>
	</div>
	
	
			
	<div id="main_info_right">
		<div id="main_info_right_in">
			<?php 
				include_once "../includes/main_info_right.php";
			?>
		</div>
	</div>
	
	
	<div class="float_clear">
	</div>
		
</div>


<!-- Main Info ends -->

<div class="clear_float">
</div>

<?php
	include_once "../includes/footer.php";
?>