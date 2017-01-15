<?php //myToolbox-inc.php

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

session_start(); # Start the session
$_SESSION["mySession"];

//how to assign / play with session variable
	if (($_SESSION[" mySession"]) < 22){
		$_SESSION["mySession"] = 23;
	}


function myDump($str = ''){

	return '<pre>' . var_dump($str) . '</pre><br />';


}
