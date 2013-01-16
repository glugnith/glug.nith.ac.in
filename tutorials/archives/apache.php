<?php 
	include_once "../includes/header2.php";
?>

<!-- Main Info starts -->
<div id="main_info_cont">
	<div id="main_info_left">
		<div id="main_info_left_in">
		
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>What is HTTP?</h3>
				</div>
				<div class="content_style1_info">
					<p>HTTP stands for Hyper Text Transfer Protocol. It is the method used to transfer or convey information on the World Wide Web. It is a patented open internet protocol whose original purpose was to provide a way to publish and receive HTML pages</p><br />
					<strong><a href="http://en.wikipedia.org/wiki/HTTP">&#187;&#187;HTTP@Wikipedia</a></strong>	
				</div>
			</div>
			<br />
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>Apache</h3>
				</div>
				<div class="content_style1_info">
					<p>The Apache HTTP Server Project is an effort to develop and maintain an open-source HTTP server for modern operating systems including UNIX and Windows NT. The goal of this project is to provide a secure, efficient and extensible server that provides HTTP services in sync with the current HTTP standards.</p>
			<p>Apache has been the most popular web server on the Internet since April 1996. The November 2005 Netcraft Web Server Survey found that more than 70% of the web sites on the Internet are using Apache, thus making it more widely used than all other web servers combined.</p>
			<p>The Apache HTTP Server is a project of the Apache Software Foundation</p><br />
					<strong><a href="http://www.apache.org/">&#187;&#187;Read more</a></strong>	
				</div>
			</div>
			
		</div>
	</div>
		
	
	<div id="main_info_center">
		<div id="main_info_center_in">
			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>Apache: Very Quick and Extremely Dirty</h3>
				</div>
				<div class="content_style2_info">
				
					 <p>Okay, I thought we might as well have a quick and dirty series. So this time it's apache. This is so easy, my dog can do it.</p><br />
		<p>Ubuntu users, open up synaptic and install apache (there's apache2 also, but I'm really not sure if it uses the same config file. Anyways, I got apache, so if you want to follow, you do it too), or install it from source. There are rpms also available all over the place. So whatever... lets just assume you got apache now. There's this file called httpd.conf. Mine is in the /etc/apache directory. Open it up in your favouite text editor (as root), and see if there is already a sample config file. It will usually be there. You dont need too many changes. I have attached my conf file, just in case ;) (<a href="./apache/httpd.conf">httpd.conf</a>). Just go to the line containing:
		<br />
--------------------------------------------------------------------------------------------------------<br />
DocumentRoot /var/www/html (or /var/www sometimes)<br />
--------------------------------------------------------------------------------------------------------<br /></p>

		<p>Either put your website in this directory (preferable) or change it to the directory containing your index.html (the first file that opens when someone opens your website)
All other files should be within this directory. You can also have symlinks pointing to various files/directories that are not in the DocumentRoot.</p>
		<p>Next go to this line:
		<br />
--------------------------------------------------------------------------------------------------------<br />
(AngleBracksOpen)Directory /var/www/html(AngleBracksClose) (or again /var/www)<br />
--------------------------------------------------------------------------------------------------------<br />
		and change it to what you set for DocumentRoot.</p>
		<p>For each symlink, assign a similiar directory block (from (AngleBracksOpen)Directory ...(AngleBracksClose) to (AngleBracksOpen)/Directory(AngleBracksClose)). Simply copying the settings defined for your DocumentRoot is fine. You are now good to go!<p>
		<p>Ubuntu users:
		<br />
--------------------------------------------------------------------------------------------------------<br />
sudo /etc/init.d/apache start<br />
--------------------------------------------------------------------------------------------------------<br /></p>
		<p>Make sure apache starts each boot by navigating to System->Administration->Services and checking on the apache option</p>
		<p>Fedora/RHEL people can type (as root ofcourse):
		<br />
--------------------------------------------------------------------------------------------------------<br />
service httpd start<br />
chkconfig httpd on<br />
--------------------------------------------------------------------------------------------------------<br /></p>
		<p>Enjoy!</p>
		<br />
		<img src="/apache/apache.jpg"><br /><br />Yes! We use Apache!!.</p><br />
		<p>Posted by <a href="mailto:arjunsha@gmail.com">Arjun Shankar</a> </p>
		<br />
		
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
