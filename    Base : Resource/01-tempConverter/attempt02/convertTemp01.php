<?php #form-test01.php

include '_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include '_inc/myHeader-inc.php';  //Uses THIS_PAGE
include './_Classes/Temp.php';     //Class

// Instantiate obj
$myTemp = new Temp($FirstName, $TempType, $Temp);

$myTemp->FirstName  = ucfirst($_POST['FirstName']);
$myTemp->Temp       = $_POST['Temp'];
$myTemp->Type       = $_POST['Type'];

echo '<hr />';
if(isset($_POST['Temp']))
{ //show DATA

	myDump($_POST);

	echo "<p>{$myTemp->getTemp()}</p>";

	echo "<hr />";

	echo "<p>{$myTemp->convertTemperature()}</p>";

	echo "<hr />Use the form below to revise the results";
	echo $myTemp->getForm();


}else{ //Ask data
	echo '<p>Please specify your Name, the number of the temperature you wish to convert, and the type of conversion you wish to make.</p>';

	echo $myTemp->getForm();
}


include '_inc/myFooter-inc.php';
