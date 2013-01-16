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
					<h3>ProFTPD: Quick and Dirty</h3>
				</div>
				<div class="content_style2_info">
				
					<p>There are several ftp servers available off the shelf (Pure-FTPd, WU-FTPD and vsftpd to name a few). The advantage ProFTPD (<a href="http://www.proftpd.org">http://www.proftpd.org</a>) is that it is 'highly configurable'. vsftpd (<a href="http://vsftpd.beasts.org">http://vsftpd.beasts.org</a>) is supposed to be more fast and secure (and the choice is often a subject of flame wars, which we at GLUG-NITH really should hate! Right?), and each one has it's own special advantage so lets just leave it at that.</p>
		<p>Wow! thats a lot of philosophy for a tutorial thats supposed to be 'Quick and Dirty'! So, lets get down to the brass-tacks:</p>
		<br />

		<p><strong>1.</strong> If you are using Ubuntu or Fedora, or any distro with package management, get the proftpd package (Ubuntu users simply need to go to System->Administration->Synaptic Package Manager, and if it is already set up properly, install proftpd from the thousands of available packages. I think I'll write a small tutorial on synaptic one of these days!), or compile from source (If you are attempting compiling, you really don't need my advice at all! Go on and save yourself some time reading this :)).<br /><br />
		<a href="./pro_ftpd/pro_ftpd.jpg" target="_blank"><img src="./pro_ftpd/pro_ftpd_a.jpg" /></a><br />ProFTPD running.</p>
		<br />
		<p><strong>2</strong>. Once you have done that, edit /etc/proftpd.conf with root privileges. This is how:<br />
		Code (for Ubuntu users, and also for those with the sudo package installed and set up):<br />
		---------------------------------------------------------------------------------------------------------<br />
		sudo gedit /etc/proftpd.conf             ;(as user with sudoing powers)<br />
		---------------------------------------------------------------------------------------------------------<br />
		Code (for others):<br />
		---------------------------------------------------------------------------------------------------------<br />
		su -<br />
		gedit /etc/proftpd.conf                  ;(as root)<br />
		---------------------------------------------------------------------------------------------------------</p>
		<br />
		<p><strong>3.</strong> Copy and paste this config file into it. (It is a simpler form of the config I use):<br />
		<a href="./pro_ftpd/pro_ftpd.conf" target="_blank">proftpd.conf</a></p>
		<br />
		<p><strong>4.</strong> On Line 6, replace "TheHotChilipepper" (my notebook!) with the name of your server (keep it the same as your hostname, its's better that way).</p>
		<br />
		<p><strong>5.</strong> On Line 45, replace "/data/LinuxDownloads" one of the directories I share, with the directory _you_ want to share.</p>
		<br />
		<p><strong>6.</strong> Save the file.</p>
		<br />
		<p><strong>7.</strong> Restart ProFTPD:<br />
		Code (for Ubuntu users, and sudo fans):<br />
		---------------------------------------------------------------------------------------------------------<br />
		sudo /etc/init.d/proftpd restart<br />
		---------------------------------------------------------------------------------------------------------<br />
		Code (for others):<br />
		---------------------------------------------------------------------------------------------------------<br />
		su -<br />
		/etc/init.d/proftpd restart<br />
		---------------------------------------------------------------------------------------------------------<br />
		It Works now! (If neither you not me screwed it up anywhere). But wait a bit.</p>
		<br />
		<p><strong>8.</strong> Make sure proftpd starts upon booting each time. (Ubuntu users can go to System->Administration->Services, and check the 'FTP Server (proftpd)' opton, others, you will probably have an equivalent, simple way to do it, look around and use it).</p>
		<br />
		<p><strong>9.</strong> Go to a browser and type: ftp://<your-ip-address>/ and see what happens.</p>
		<br />
		<p><strong>10.</strong> It works? Great! It's doesnt, look and see if you made a mistake anywhere, If you think I made one in telling you, or if you cant figure it out, drop me a mail, or a scrap (we are all into orkut arent we? ;))</p>
		<br />
		<p>Thats it. 10 short steps is 'Quick and Dirty' right? Have fun!</p>
		<br />
		<p>Posted by <a href="mailto:arjunsha@gmail.com">Arjun Shankar.</a></p>
		
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