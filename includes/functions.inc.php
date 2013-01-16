<?php

function redirect_to( $location = NULL ) {
  	if ($location != NULL) {
    	header("Location: {$location}");
    	exit;
  	}
}

function include_template($template="") {
	include(SITE_ROOT.DS.'includes'.DS.$template);
}

?>