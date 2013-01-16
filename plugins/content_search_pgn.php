<?php
/*
	Copyright GLUG-NITH
	& Abhishek Rana
*/

$keyword1 = $_POST['glug_search'];
$keyword2 = trim($keyword1);
$keyword = stripslashes($keyword2);


function content_search_select($fp,$keyword_in,$str_cmp1,$str_cmp2){
	
	$content = "";									// contains all the the content of the main_info_center_in
	$flag_content = 0;								
	while (!feof($fp)){
		$line = fgets($fp);
				
		if(stristr($line,$str_cmp1)){	
			$flag_content = 1;						// starts concatination of $line
		}
		if(stristr($line,$str_cmp2)){
			$flag_content = 0;						// stops concatination of $line
		}
		if($flag_content){
			$content = $content.$line;				// concatination of $line to $contents
		}
	}
			
	$tags_allowed = '<p><br><br/><br />';
	$content_strip = strip_tags($content,$tags_allowed);
	
	if (preg_match('/'.$keyword_in.'/i',$content_strip)){ 	// contains all the content of the class main_info_center_in only if it contains the $keyword_in

		$keyword_pos = stripos($content_strip,$keyword_in);
		$content_strip_substr = substr($content_strip,$keyword_pos,200);		
					
		$content_strip_substr_rep1 = str_replace("<br /><br />","<br />",$content_strip_substr);
		$content_strip_substr_rep2 = str_replace("<br><br>","<br />",$content_strip_substr_rep1);
		$content_strip_substr_rep3 = str_replace("</p><br />","</p>",$content_strip_substr_rep2);
		$content_strip_substr_rep4 = str_replace("</p><br>","</p>",$content_strip_substr_rep3);
		
		$keyword_in_up = strtoupper($keyword_in);
		$keyword_in_lw = strtolower($keyword_in);
		$keyword_in_uf = ucfirst($keyword_in);
		$keyword_in_uw = ucwords($keyword_in);
		
		$content_strip_substr_rep5 = str_replace($keyword_in_up,'<strong>'.$keyword_in_up.'</strong>',$content_strip_substr_rep4);
		$content_strip_substr_rep6 = str_replace($keyword_in_lw,'<strong>'.$keyword_in_lw.'</strong>',$content_strip_substr_rep5);
		$content_strip_substr_rep7 = str_replace($keyword_in_uf,'<strong>'.$keyword_in_uf.'</strong>',$content_strip_substr_rep6);
		$content_strip_substr_rep = str_replace($keyword_in_uw,'<strong>'.$keyword_in_uw.'</strong>',$content_strip_substr_rep7);
					
		return $content_strip_substr_rep;
	}
		
}

function content_search($keyword_in){
	// files to be searched
	$filename = array("projects.php",
				  "downloads.php",
				  "faq.php",
				  "index.php",
				  "links.php",
				  "contactus.php",
				  "media.php",
				  "tutorials.php",
				  "wiki.php",
				  "tutorials/apache.php",
				  "tutorials/pro_ftpd.php",
				  "tutorials/vs_ftpd.php",
                  "tutorials/gnu_octave.php",
                  ""
				  );
	$filename2 = "includes/main_info_right.php";
	
	$flag_content_found = 0;
	
	$i=0;
	while(isset($filename[$i])){
		$fp1 = fopen($filename[$i], "r") or die("File could not be opened!");
		$fp2 = fopen($filename[$i], "r") or die("File could not be opened!"); 
		
		// main_info_center search
		$str_cmp1 = '<div id="main_info_center">';
		$str_cmp2 = '<div id="main_info_right">';
		$content_result1 = content_search_select($fp1,$keyword_in,$str_cmp1,$str_cmp2);
		if($content_result1){
			print"$content_result1...<br />";
			print"<div id='search_link'>";
			print"<a href='./$filename[$i]'>".DOMAIN_NAME."$filename[$i]</a>";
			print"</div>";
			print"<br /><div class='line1'></div><br />";
			$flag_content_found =1;
		}
		
		// main_info_left search
		$str_cmp3 = '<div id="main_info_left">';
		$str_cmp4 = '<div id="main_info_center">';
		$content_result2 = content_search_select($fp2,$keyword_in,$str_cmp3,$str_cmp4);
		if($content_result2){
			print"$content_result2...<br />";
			print"<div id='search_link'>";
			print"<a href='./$filename[$i]'>".DOMAIN_NAME."$filename[$i]</a>";
			print"</div>";
			print"<br /><div class='line1'></div><br />";
			$flag_content_found =1;
		}
		
		fclose($fp1);
		fclose($fp2);
		
		$i++;
	}
	
	$fp3 = fopen($filename2, "r") or die("File could not be opened!"); 
	
	// main_info_right search
	$str_cmp5 = '<div id="main_info_right_search_starts">';
	$str_cmp6 = '<div id="main_info_right_search_ends">';
	$content_result3 = content_search_select($fp3,$keyword_in,$str_cmp5,$str_cmp6);
	if($content_result3){
		print"$content_result3...<br />";
		print"<div id='search_link'>";
		print"<a href='./index.php'>".DOMAIN_NAME."index.php</a>";
		print"</div>";
		print"<br /><div class='line1'></div><br />";
		$flag_content_found =1;
	}
		
	fclose($fp3);

echo $content_result1;
	if($flag_content_found == 0){					// if no match is found
		print"No Match Found !!!";
	}

}


?>
