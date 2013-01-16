<?php 
	include_once "../includes/header2.php";
?>

<!-- Main Info starts -->
<div id="main_info_cont">
	<div id="main_info_left">
		<div id="main_info_left_in">
		
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>What is GNU Octave?</h3>
				</div>
				<div class="content_style1_info">
					<p>GNU Octave is a high-level language, primarily intended for numerical computations. It provides a convenient command-line interface (CLI) for solving linear and nonlinear problems numerically, and for performing other numerical experiments using a language that is mostly compatible with MATLAB. It may also be used as a batch-oriented language. As part of the GNU Project, it is free software under the terms of the GNU General Public License (GPL).<br />
					</p><br />
					<strong><a href="http://www.gnu.org/software/octave/">&#187;&#187;Visit GNU Octave Home Page</a></strong>	
				</div>
			</div>
			
			
		</div>
	</div>
		
	
	<div id="main_info_center">
		<div id="main_info_center_in">
			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>GNU Octave</h3>
				</div>
				<div class="content_style2_info">
				
					<p>I think all of you must have heard about Matlab. MATLAB(MATrix LABoratory) is a numerical computing environment. It is a very good tool for developing mathematical, scientific, image processing, machine learning and many other type of applications which involve very intense numerical comuptations. Although Matlab is very cool, but the problem is that it is not free. So that's where GNU Octave comes into play. GNU Octave is free alternative to Matlab. The syntax of GNU Octave is very similar to Matlab. GNU Octave is distributed under GPL(GNU General Public Liscence). It means you can freely download, use and distribute GNU Octave. :)</p>
		<br />
		Now let us see how can we install GNU Octave and where to study about GNU Octave. GNU Octave is available for both Windows and Linux.
		<br /><br />
		
		<p><strong>1.</strong>You can build Octave from source code. Download the tarball of latest version of Octave from <a href="ftp://glug.nith.ac.in/gnu/octave/">here</a>. After extracting source code you can install GNU Octave by running commands './configure', 'make' and 'make install' in the source code tree.( I think you should not do this, instead you should use package management tool of your distro to install GNU Octave).
		</p><br />
		<p><strong>2.</strong>If you are using Ubuntu or Fedora, or any distro with package management, get the octave package (Ubuntu users simply need to go to System->Administration->Synaptic Package Manager, and if it is already set up properly, install octave from the thousands of available packages.
		</p>
		<br /><br />
<a href="./gnu_octave/install.jpg" target="_blank"><img src="./gnu_octave/install_a.jpg" /></a><br />Installing GNU Octave</p>
		<br />
		<p><strong>3.</strong>Alternatively you can download and install GNU Octave from terminal using apt-get or yum.<br />
		Ubuntu users should run <b>'sudo apt-get install octave'</b> in terminal and Fedora users should run <b>'sudo yum install octave'</b> in terminal to install GNU Octave.	
		</p><br />
		<p><strong>4.</strong>Once you have done that, run GNU Octave from terminal by entering the command 'octave'. Now Octave console will appear in front of you. This is where you will write commands. Some of the linux commands also work here(e.g. who,pwd,cd,ls etc.)<br />
	`	<br /><br />
<a href="./gnu_octave/start.jpg" target="_blank"><img src="./gnu_octave/start_a.jpg" /></a><br />GNU Octave Console</p>
		<br />
		<p><strong>5.</strong>Now i will show you how to load an image, display it and perform some basic operations on this image. Every variable is a matrix in Octave.</p>
		Now we will load an image into a variable 'img'(RGB image is a 3-d array) using the command.
		<br /><br />
		<b>img=imread('path of image');</b><br /><br />
		Now image matrix will be loaded into 'img' variable. This matrix will be of order [m*n*3](3 if you load a colored RGB image). Now use the following command to display image in a figure.
		<br /><br />
		<b>imshow(img);</b>
		<br /><br />
		Now we will find the mirror image of this image(we just swap the columns of image array, 1st column with last,2nd with last-1 and so on). The following command will do the same.
		<br />
		<b>mirror_img=img(:,end:-1:1,:)</b>
		<br /><br />
		Don't feel lost!! this is a simple matrix operation. Now display the mirror image and orginal image using following command.
		<br /><br />
		<b>imshow(img),figure,imshow(mirror_img)</b>
<br /><br />
<a href="./gnu_octave/show.jpg" target="_blank"><img src="./gnu_octave/show_a.jpg" /></a><br />Original Image and Mirror Image</p>
		<br />
		<br /><br />
		<p>You can read more about GNU Octave commands <a href="http://www.gnu.org/software/octave/doc/interpreter/" >here</a>.</p>
		<br />
		
		<p>Have fun.</p>
		<br />
	<p>	<a href="http://glug.nith.ac.in/~sanjeev/">Sanjeev Sharma</a></p>

		
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
