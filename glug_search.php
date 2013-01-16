<?php

set_time_limit("600");

$keyword=trim($_POST["glug_search"]);
if($keyword==""){
	echo"Please enter your keyword";
	exit;
}

function listFiles($dir,$keyword,&$array){

	$handle=opendir($dir);
	while(($file=readdir($handle))!==false){
		if($file!="."&&$file!=".."){											//if it is a directory, then continue
			if(is_dir("$dir/$file")){
				listFiles("$dir/$file",$keyword,$array);
			}
			else{
				$data=fread(fopen("$dir/$file","r"),filesize("$dir/$file"));	//read file
				if(stristr("<body([^>]+)>(.+)</body>",$data,$b)){
					$body=strip_tags($b["2"]);
				}
				else{
					$body=strip_tags($data);
				}
				if($file!="glug_search.php"){
					if(stristr("$keyword",$body)){
						if(stristr("<title>(.+)</title>",$data,$m)){
							$title=$m["1"];
						}
						else{
							$title="no title";
						}
						$array[]="$dir/$file $title";
					}
				}
			}
		}
	}
}

$array=array();
listFiles(".","$keyword",$array);
foreach($array as $value){
	list($filedir,$title)=split("[ ]",$value,"2");
	echo "$title "."
	\n";
} 

?>