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
		
	
		
	<div id="main_info_center">
		<div id="main_info_center_in">
			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>Downloads</h3>
				</div>
				<div class="content_style2_info">
					<p>You can use GLUG NITH ftp server to download latest iso's. You can visit GLUG NITH ftp server <a href="ftp://glug.nith.ac.in" target="_blank"><b>HERE</b></a>
						<br /><br />
						<h2>apt-get from GLUG-NITH Ubuntu archive mirror</h2>
						<div class="line1"></div>
						<p><b>GLUG-NITH</b> now hosts the ubuntu archive mirror. It means you can install packages for ubuntu using <b>apt-get</b> or <b>synaptic</b> from ubuntu mirror at glug-nith server anytime.</p>
                        <br/>
                         <h3>Manual Installation</h3>
						<p>To add glug-nith to your <b>sources.list</b> file edit <b>/etc/apt/sources.list</b> file, comment everything and following two lines in the file after uncommenting all the stuff there.
						<br />
                           <br/>
						<b>deb http://glug.nith.ac.in/ubuntu/archives/ [your ubuntu release code name] main restricted universe multiverse</b>
						<br />
						<b>deb-src http://glug.nith.ac.in/ubuntu/archives/ [your ubuntu release code name] main restricted universe multiverse</b>
						<br />
                        <br />
						CodeName is an unique name for every release of ubuntu. e.g  natty for 11.04, quantal for 12.10 etc.
						<br />
                        <b>Eg:</b> 
                        <br/>
                        For Ubuntu 12.10 installation, the codename is <b>quantal</b>, so you can add following two lines to download archives/updates from glug server. <br/>
                       <br/>
                       <b>deb http://glug.nith.ac.in/ubuntu/archives/ <b>quantal</b> main restricted universe multiverse</b>
                       <br />
                       <b>deb-src http://glug.nith.ac.in/ubuntu/archives/ <b>quantal</b> main restricted universe multiverse</b>
                        <br />
                         <br/>

						After editing the <b>sources.list</b> run <b>sudo apt-get update</b> command in terminal and now you can use <b>sudo apt-get install [some software here, eg: vim]</b> anytime. 
						</p>
                        <p>Doing so have some advantage of higher speed downloading the softwares during non Internet hours when the proxy server is not busy. Proxy server allows connection to glug.nith.ac.in 24 hours round the clock</p>
						<br />
<h3>Automatic Installation</h3>
                        You can download the script <a href="/scripts/glug-mirror.sh">here</a>. Run this script and it will automatically adjust your <b>Ubuntu</b> installation to download and update via glug servers. Basically what it does is same as described above in manual installation.  
                        <br/>
                            <br/>
                         Most common mistake here is that you get a message 'Permission Denied'. This is because the script you downloaded is not executable. To set the executable bit here, enter this command : chmod +x glug-mirror.sh . After it execute the script again. You should have now this issue resolved.
                        <br />
                         <br/>
						<h2>ISO Images</h2>
						<div class="line1"></div>
						<h4>Ubuntu</h4>
						<p>GLUG NITH now hosts the cd mirror of ubuntu. <a href="/ubuntu/releases"> Click here</a> to download the iso's of ubuntu.</p><br />
						
						<h4>Fedora</h4>
						<p>The latest iso images of Fedora are available. Click to start download.</p>
						<p><a href="ftp://glug.nith.ac.in/downloads/Fedora-18-i686-Live-Desktop.iso">Fedora 18 GNOME x86 Desktop </a></p>
						<p><a href="ftp://glug.nith.ac.in/downloads/Fedora-18-x86_64-Live-Desktop.iso">Fedora 18 GNOME 64-bit Desktop </a></p>
						<p><a href="ftp://glug.nith.ac.in/downloads/Fedora-18-i686-Live-KDE.iso">Fedora 18 KDE x86 Desktop </a></p>
						<p><a href="ftp://glug.nith.ac.in/downloads/Fedora-18-x86_64-Live-KDE.iso">Fedora 18 KDE 64-bit Desktop </a></p><br />

			                        <h4>Linux Mint</h4>
						<p>The latest iso images of Linux Mint are available. Click to start download.</p>
                        <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14.1-cinnamon-dvd-32bit.iso">Linux Mint 14 CINNAMON DVD(32-bit)</a></p>
                        <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14.1-cinnamon-dvd-64bit.iso">Linux Mint 14 CINNAMON DVD(64-bit)</a></p>
						<p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14.1-mate-dvd-32bit.iso">Linux Mint 14 MATE DVD(32-bit)</a></p>
                        <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14.1-mate-dvd-64bit.iso">Linux Mint 14 MATE DVD(64-bit)</a></p>
                        <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14-kde-dvd-32bit.iso">Linux Mint 14 KDE DVD(32-bit)</a></p>
                        <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-14-kde-dvd-64bit.iso">Linux Mint 14 KDE DVD(64-bit)</a></p>
                       <!-- <p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-12-gnome-cd-nocodecs-32bit.iso">Linux Mint 12 GNOME NOCODECS(32-bit) </a></p>
						<p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-12-gnome-cd-nocodecs-64bit.iso">Linux Mint 12 GNOME NOCODECS(64-bit) </a></p>
						<p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-12-gnome-dvd-32bit.iso">Linux Mint 12 GNOME DVD(32-bit) </a></p>
						<p><a href="ftp://glug.nith.ac.in/linuxmint/linuxmint-12-gnome-dvd-64bit.iso">Linux Mint 12 GNOME DVD(64-bit) </a></p>  -->


						<div class="line1"></div>
						
						<h4>How to create Live-USB on Windows</h4>
						<p>You can download UNetbootin.exe for windows from <a href="/downloads/unetbootin-windows-583.exe">here</a></p>
                        <p>Download UNetbootin for Linux from <a href="/downloads/unetbootin-linux-583">here</a></p>
                        <p>Download UNetbootin for Mac from <a href="/downloads/unetbootin-mac-583.zip">here</a></p> and create the startup disk by selecting the iso of you favourite distribution.
                                            <!--   <h4>Download Wine 1.4 and Wine Tricks</h4>
                                               <p>You can download wine 1.4 debian package X86_64from <a href ="./tutorials/wine.deb">here</a></p>
                                               <p>You can download wine 1.4 debian package X86 from <a href ="./tutorials/wine1.4_i386.deb">here</a></p>
                                               <p>You can download wine tricks from <a href="./tutorials/winetricks.tar.gz">here</a></p>  -->
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
