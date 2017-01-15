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

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>'; //BEGIN content area

echo '<h3>' . THIS_PAGE . '</h3>';
