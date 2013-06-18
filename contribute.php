<?php 
	include_once "./includes/header.php";
?>

<!-- Main Info starts -->
<div id="main_info_cont">
	<div id="main_info_left">
		<div id="main_info_left_in">
			<div class="content_style1">
				<div class="content_style1_heading">
					<h3>What is Wine?</h3>
				</div>
				<div class="content_style1_info">
					<p>Wine is an Open Source implementation of the Windows API on top of X and Unix. Think of it as a compatibility layer for running Windows programs.</p>
					<p>Wine does not require Microsoft Windows, as it is a completely free alternative implementation of the Windows API consisting of 100% non-Microsoft code, however Wine can optionally use native Windows DLLs if they are available.</p><br />
					<strong><a href="http://www.winehq.com/">&#187;&#187;Visit Wine HQ</a></strong>
				</div>
			</div>
		
	<br /><br />
		
		<!--	<div class="content_style1">
				<div class="content_style1_heading">
					<h3>GluCki</h3>
				</div>
				<div class="content_style1_info">
					<p>GluCki is the official wiki of GNU/Linux Users Group of National Institute of Technology, Hamirpur. It is a collection of free knowledge based materials broadly centred around the GNU/Linux system.</p>
					<p>Being a wiki, it allows users complete freedom to edit the contents of the site and make their own contributions. All the contents of GluCki are written indigeniously by the members of GLUG NITH, and are mainly intended to address the needs of the NIT Hamirpur fraternity.</p><br />			
					<strong><a href="http://202.141.130.198/wiki">&#187;&#187;Visit GluCki</a></strong>
				</div>
                
			</div>-->
		</div>
	</div>
		
	
		
	<div id="main_info_center">
		<div id="main_info_center_in">
			<div class="content_style2">
				<div class="content_style2_heading">
					<h3>Contributing to website</h3>
				</div>
				<div class="content_style2_info">
					<p>
			Now you can easily make changes and contribute to the website in whatever way you like. Your contribution will help in building the website, keep it updated and allows GLUG-NITH community to extend with mutual collaboration. Moreover you will be learning a very famous industry tool git which is covered in the below few paragraphs.<br/><br/> 	
                <h2>Brief Introduction to Git and its power</h2>
                    <div class="line1"></div>
                    <p>
                    GLUG-NITH website source code is maintained and organised very beautifully via this famous tool called git. 
                    This way anyone can make changes to the website with even little knowledge of html, php and javascript. 
                    Those who know php and other complex stuff can also make modifications to the website source code which will then directly be reflected on the website after approval of the administrator.
                    </p><p>
                    You can add new articles to the website, new projects to the website, new information or anything you like. You change its footer, header, color or anything. With this type of management of the website source code everything can be changed in whatever way you like. However your change should be meaningfull and should be accepted by the GLUG community before approval of your peice of code. At the moment we have excluded the images and other heavy stuff to be included and distributed alongwith the website source code just to decrease the size of the package that you will download in the following steps.
                    </p><p>
                    Above was just a brief introduction of what you can do with the website source code using git. Following few paragraphs will provide you a more brief introduction of how you can make changes to the website source code using this very powerful tool called git.
                    </p><br/>
                    <h2> Installation </h2>
                      <div class="line1"></div>
                    <p>
                    Git like any other software can be installed using your standard package manager as :<br/>

                    <b>sudo apt-get install git</b><br/>

                    in Ubuntu or other Debian distributions.
<br/>
                    or 
<br/>
     <b>               sudo yum install git</b><br/>

                    in Fedora or other RPM based distributions.
                    </p><br/>
                    <h2> The website source code </h2>
                     <div class="line1"></div>
                    <p>
                        The website source code is hosted on github.com. Source code repository is at following URL : <br/>
                            <a href=https://github.com/glugnith/glug.nith.ac.in>https://github.com/glugnith/glug.nith.ac.in</a>
                                <br/>
                                </p><br/>
                                <h2>How to contribute ?</h2>
                                 <div class="line1"></div>
                                <p>
                                    This is the website source code but you cannot modify it unless you create your own account on <a href=http://github.com>github.com</a> and then fork this repository under your account. By fork, it means a copy of the same website source code for you to make modifications. You will then make changes to this forked website source code and then send a pull request which will be sent to the account on github from whom you forked the repository. In our case this account is <b>glugnith</b>. The glugnith owner on github then will see if your pull request need to be considered or not. In case of a good change or a good pull request, your request will be approved and will be merged with the main repository which is glugnith repository of website source code i.e from whom you forked the repository. The website administrator will then do some little operations to make that github code appear on the main website. Hence, finally your modification will travel to the website alongwith the approval of glug community.  
                                     </p>
                                     <br/>
                                     <p>
                                     One thing that must be noted here is in whole of this process, git manages everything very efficiently. The whole process will migrate your changes from one place to other, not the whole source code(except first time you clone the repository). So this way alot of bandwidth is saved and you do not need to wait for minutes to download and upload the whole source code if the same had to be accomplished manually without using git. 
                                     </p>
                                     <p>
                                     Apart from this, there are many other advantages of git. Git has all the history of the commits that has been done so far. You can see the git logs for that. You can also change the whole code to an earlier stage some months back or so. 
                                     </p>
                                     <p>
                                     This way you can very elegantly contribute to glug website source code. 
                                     </p><br/>
                    
                   <h2>Starting using it</h2>
                      <div class="line1"></div>
                      <p>
By this time, you might be wondering how to accomplish this whole thing. For that you need to be aware of this tool git. There are several references on the internet that can help you in getting familiar with git and start hacking. Since the website source code is hosted on <a href=http://github.com>Github</a> and they provide a very good guide to start learning and using git, best place to start using git is their <a href=https://help.github.com/articles/set-up-git>BootCamp</a>. This will help you in learning git from scratch and at the same time getting familiar with Github interface.
                    </p><br/>
                    <p>
                     The <a href=https://help.github.com/articles/set-up-git>BootCamp</a> mentioned above will help you in performing basic tasks that should be enough to contribute. For more information and learning more about git and ways to use git, nothing should be better than their official website and documentation <a href=http://git-scm.com/>here</a>.
                    </p>
<br/>                    
                    
                   <h2>Some Examples</h2>
                      <div class="line1"></div>
                      <p>
                       In this example, we will be doing a very basic change, say adding a new news article on the home page. First of all we mustbe well aware of where the files are in the directory structure. As the name of any home webpage is index.php or index.html, similarly in our case, you can easily observe an index.php file in the root directory of downloaded source code. Now you open this file index.php and find the section where you need to add the new news article. There will be section entitled with a comment saying <b>Latest news goes here</b>. You need to find this section. After finding this section, if you know a little html, you will know where you need to add the new news article. To keep uniformity in the style of the new articles, you just copy the old article within corresponding p tags and paste it as another section below it. Then you change all the links and text from there to make it your own news. Now you can save your file and exit.
                    </p><br/>
                    <p>
                    This was all about the changes you have made. Now will be using the GIT part. We will run some git commands which will serve as a request to the administrator of the website to include your change in the main repository. Follow the following commands in order.
                    </p><br/>
                       <p>
                       First you need to add this file to commit stage for committing it and saving your changes permanently. To do this, you can issue command as 
                       </p>
                      <b> git add index.php</b>
 <br/>This will make index.php file ready for committing. Now you commit this file with appropriate message as : <br/>
                   <b> git commit -m 'added a new news article on the website front page'</b> <br/>
                      This commits your change. Note that the message in the quotes after the -m flag is the message useful for the administrator to know about your change. This is highly recommended to add a suitable message with your commit.<br/>
                      Now that you have commited your change, you can push your changes to the github website. To do that, issue following command : <br/>
                       <b>git push origin master</b>
<br/><br/>
                Now when you open your github account, you will see your changes are reflected there. On the top, find this button named <b>Pull Request</b>. Then hit this button and your request to add the change will be submitted to the administrator of the website. As soon as he accepts your change, your change will be reflected on the main website.
<br/>
<br/> 
In case of any confusion, query you can frankly drop an email on admin@glug.nith.ac.in. We will be happy to respond.
<br/>
<br/>
                    </p>
					<h2>Learning Material</h2>
                      <div class="line1"></div>
					If you want to learn more about git than there are plenty of books , websites, video tutorials online which you can read
					and watch both online and offline .The links to directly download them are provided below</br>
					</br></br>
					<a href="https://github.s3.amazonaws.com/media/progit.en.pdf"><b>1.Pro Git-</b></a>  It's an official book of the Git and GitHub community written by Scott Chacon and published by Apress.</br></br>
					<a href="http://it-ebooks.info/go.php?id=919-1371556924-6aefe9f2faf570c17fa3f92881d42669"><b>2.Version Control with Git-</b></a>Version Control with Git takes you step-by-step through ways to
					track, merge, and manage software projects, using this highly flexible, open source version</br>
					control system.</br></br>
					<a href="http://it-ebooks.info/go.php?id=1759-1371556930-ca26e1a6d8a0a8076267868a145b3726"><b>3.Git: Version Control for Everyone-</b></a>A complete beginner's workflow for version control of common documents and content. E
					xamples used are from non-techie, day to day computing activities we all engage in. Learn through multiple modes - readers learn theory to understand the concept and reinforce it by practical tutorials.
					Ideal for users on Windows, Linux, and Mac OS X.</br></br>
					<a href="http://it-ebooks.info/go.php?id=45-1371556925-a36612fe99cabace47573a78fd96e557"><b>4.Pragmatic Guide to Git-</b></a> Need to learn how to wrap your head around Git, but don't need a lot of hand holding? Grab this book if you're new to Git, not to the world of programming. Git tasks displayed 
					on two-page spreads provide all the context you need, without the extra fluff.</br>
					</br>
					<h4>Great articles-</h4>Here are some of the great links to articles which provide you all the information t																												
					you need to know about git.</br>
					</br>
					<a href="http://answers.oreilly.com/topic/801-how-to-learn-git-a-link-roundup/"><b>1.How to learn git - A link roundup-</b></a>This article consists of links to the  entire material available on the web related to git.It consists of links to		
					to videos , blog , wikis , reference etc. Just click it and start learning.</br></br>
					<a href="http://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide"><b>2.Git for beginners: The definitive practical guide-</b></a>  An article on stack overflow website consists of all the faq, installation , references to git. 
				</div>
			</div>
		</div>
	</div>
	
		
		
	<div id="main_info_right">
		<div id="main_info_right_in">
			<?php 
				include_once "./includes/main_info_right.php";
			?>
		</div>
	</div>
	
	
	<div class="float_clear">
	</div>
		
</div>


<!-- Main Info ends -->


<?php
	include_once "./includes/footer.php";
?>
