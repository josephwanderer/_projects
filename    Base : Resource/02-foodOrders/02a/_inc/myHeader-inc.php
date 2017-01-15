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
		required attribute does not work in safari...
	-->
	
	<script> 
		var forms = document.getElementsByTagName("form");
		for (var i = 0; i < forms.length; i++) {
				forms[i].noValidate = true;

				forms[i].addEventListener("submit", function(event) {
						//Prevent submission if checkValidity on the form returns false.
						if (!event.target.checkValidity()) {
								event.preventDefault();
								//Implement you own means of displaying error messages to the user here.
						}
				}, false);
		}
	</script>
	
</head>

<body>'; //BEGIN content area

echo '<h3>' . THIS_PAGE . '</h3>';
