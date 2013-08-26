<?php
/*
  EAGL
  Core
*/

include "_eagl/config.php"; // includes the config file

$eagl_thispage = basename($_SERVER['PHP_SELF']); // global variable to return the current page name





function eagl_getFilesize($file,$digits = 2) {
	if (is_file($file)) {
	$filePath = $file;
	  if (!realpath($filePath)) {
	  $filePath = $_SERVER["DOCUMENT_ROOT"].$filePath;
	  }
	$fileSize = filesize($filePath);
	$sizes = array("TB","GB","MB","KB","B");
	$total = count($sizes);
	  while ($total-- && $fileSize > 1024) {
	  $fileSize /= 1024;
	  }
	return round($fileSize, $digits)." ".$sizes[$total];
	}
  return false;
}



	/*
	======================
	  LOADING JAVASCRIPT
	======================
	*/
	echo "\n\t<!-- Javascript Files -->\n";
	$eagl_scriptsarray = explode(", ",$eagl_scripts);
	reset($eagl_scriptsarray);
		while (list(, $value) = each($eagl_scriptsarray)) {
			echo "\t<script src='scripts/$value.js'></script> <!-- $value.js -->\n";
		}
	/*
	===============================================================================================================================
	*/


	/*
	======================
	  LOADING STYLESHEETS
	======================
	*/
	  echo "\n\t<!-- Stylesheet Files -->\n";
	  $eagl_stylesarray = explode(", ",$eagl_stylesheets);
	  reset($eagl_stylesarray);
	  while (list(, $eagl_stylesheet) = each($eagl_stylesarray)) {
		echo "\t<link rel='stylesheet' href='style/css/$eagl_stylesheet.css' /> <!-- $eagl_stylesheet -->\n";
	  }
	  echo "\t<!--[if lte IE 6]>\n\t\t<link rel='stylesheet' href='style/css/$eagl_legacystylesheet.css' />\n\t<![endif]-->\n";
	  echo "\t<style> nav a[href='$eagl_thispage'] {color:  #eb5448;} </style>\n";
	  echo "\t<style> nav[role='navigation'] a[href='$eagl_thispage'] {color:  #eb5448;} </style>\n";
	/*
	===============================================================================================================================
	*/











function eagl_createSlug($string){
  $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  return $slug;
}






$eagl_birthDate = explode("/", $eagl_birthDate);
//get age from date or birthdate
$eagl_age = (date("md", date("U", mktime(0, 0, 0, $eagl_birthDate[0], $eagl_birthDate[1], $eagl_birthDate[2]))) > date("md") ? ((date("Y")-$eagl_birthDate[2])-1):(date("Y")-$eagl_birthDate[2]));









function ago($time)
{
   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");
   $now = time();
	   $difference = $now - $time;
	   $tense = "ago";
   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	   $difference /= $lengths[$j];
   }
   $difference = round($difference);
   if($difference != 1) {
	   $periods[$j].= "s";
   }
   return "$difference $periods[$j] ago ";
}


	/*
	======================
	  LOADING BLOG POSTS
	======================
	*/

	function eagl_generateBloglist() {
		if ($handle = opendir('blog')) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != ".." && $entry != ".htaccess.conf") {
				  $lines = file("blog/$entry");
			$title = $lines[1];
			$thedate = $lines[2];
					echo "<figure><h3><a href='article.php?post=$entry' role='link'>$title</a></h3>\n <time>$thedate</time></figure>";
				}
			}
			closedir($handle);
	   }
	}
	/*
	===============================================================================================================================
	*/



	/*
	======================
	  GENERATE FILE LIST
	======================
	*/

	function eagl_generateFilelist($dir) {
		if ($handle = opendir("$dir")) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != ".." && $entry != ".htaccess.conf" && $entry != ".git" && $entry != ".DS_Store") {

					echo "<a href='page_editor.php?post=$dir$entry' role='button'>$entry</a>\n";
				}
			}
			closedir($handle);
	   }
	}
	/*
	===============================================================================================================================
	*/








function eagl_getLinecount($file) {
	$linecount = 0;
	$handle = fopen($file, "r");
	while(!feof($handle)){
	  $line = fgets($handle);
	  $linecount++;
	}
	fclose($handle);
	echo $linecount;
}






function eagl_generateBlogpost() {
  $post = $_GET['post'];
  echo file_get_contents("blog/$post");
}

function eagl_includeAll($dir) {
  foreach (glob("$dir/*.php") as $filename) {
	include $filename;
  }
}

function redirect($location) {
  header( "Location: $location" ) ;
}

function eagl_alert($title, $message) {
  echo "<div role='alert'><h4>$title</h4><p>$message</p></div>";
}

$eagl_user = "$eagl_adminUsername";
$eagl_pass = hash('whirlpool', "$eagl_adminPassword");
$eagl_today = date("F j Y");
$eagl_todayNum = date("Y n d");
$eagl_author = "$eagl_firstName $eagl_lastName";
$eagl_admin = "$eagl_author";


function eagl_secure() {
  if ($_SESSION['loggedIn'] == "true") {
	# code...
  } else {
	header( "Location: login.php" ) ;
  }
}

function eagl_loginSuccess() {
  $_SESSION['loggedIn'] = "true";
  $_SESSION['user'] = "$eagl_user";
 header( "Location: dashboard.php" );
}

function eagl_loginFailure() {
  echo "You Suck!";
  echo $userAttempt;
  echo $passAttemptHashed;
  echo $passAttemptNoHash;
}


if ($eagl_scripts !== "" && $eagl_stylesheets !== "" && $eagl_legacystylesheet !== "" && $eagl_nostyles == "false" && $eagl_developerInfo == "false") {
  $eagl_productionReady = "true";
} else {
  $eagl_productionReady = "false";
}

?>