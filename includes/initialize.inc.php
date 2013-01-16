<?php

/*Header("Cache-Control: must-revalidate");
Header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
$offset = 60 * 60 * 24 * 1;
$ExpireString = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpireString);*/
  
// gzip compression
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
	ob_start("ob_gzhandler");
else
    ob_start();


// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:'.DS.'server'.DS.'wamp'.DS.'www'.DS.'glug_nith');
	
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// used to display search results link (temporarily)
defined('DOMAIN_NAME') ? null : define('DOMAIN_NAME','http://glug.nith.ac.in/');
//DOMAIN_NAME='glug.nith.ac.in';

// load config file first
include_once(LIB_PATH.DS.'config.inc.php');

// load basic functions next so that everything after can use them
include_once(LIB_PATH.DS.'functions.inc.php');

// load core objects
//require_once(LIB_PATH.DS.'session.class.php');


// load database-related classes
//require_once(LIB_PATH.DS.'data_analysis.class.php');

?>
