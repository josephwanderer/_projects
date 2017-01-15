<?php #class-test01.php

//THIS_PAGE called via myToolbox-inc.php which is included in main page

// REMOVE file extension - prove we are playing with constant
$myFileName = substr(THIS_PAGE, 0, (strlen(THIS_PAGE))-(strlen(strrchr(THIS_PAGE, '.'))));


echo '<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>' . $myFileName . '</title>
		<meta name="description" content="The HTML5 Herald">
		<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/styles.css?v=1.0">
	
	<style>
		.error {color: #FF0000;}
	</style>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- 
		required attribute does not work in safari, some versions of i.e. 
	  js-webshim corrects this, needs jQuery to work
	-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>	
	<script src="https://afarkas.github.io/webshim/js-webshim/minified/polyfiller.js"></script> 
	
	<script> 
		webshim.activeLang("en");
		webshims.polyfill("forms");
		webshims.cfg.no$Switch = true;
	</script>
	
	<script>
    $.webshims.polyfill("mediaelement");
  </script>
	
	<!-- END webshim -->
</head>

<body>'; //BEGIN content area

echo '<h3>' . THIS_PAGE . '</h3>';
