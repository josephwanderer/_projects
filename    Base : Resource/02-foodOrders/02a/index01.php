<?php #form-test01.php

include '_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include '_inc/myHeader-inc.php';  //Uses THIS_PAGE
include './_Classes/OrderForm.php';     //Class


//sanitize data
//sanitize data to prevent mischief
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //$name     = test_input($_POST["name"]);
  
	$Publisher  = test_input($_POST['Publisher']);
	$Title      = test_input($_POST['Title']);
	$TitleDesc  = test_input($_POST['TitleDesc']);

	$Comment    = test_input($_POST['Comment']);
	$Price      = test_input($_POST['Price']);

	$Quantity   = test_input($_POST['Quantity']);
	$SubTotal   = test_input($_POST['SubTotal']);
	$Tax        = test_input($_POST['Tax']);
	$Total      = test_input($_POST['Total']);
}

// Instantiate obj
$myOrder = new OrderForm($Publisher, $Title, $TitleDesc, $Comment, $Price, $Quantity, $SubTotal, $Tax, $Total );


//initialize properties
/*
$myOrder->Publisher  = $Publisher;
$myOrder->Title      = $Title;
$myOrder->TitleDesc  = $TitleDesc;

$myOrder->Comment    = $Comment;
$myOrder->Price      = $Price;

$myOrder->Quantity   = $Quantity;
$myOrder->SubTotal   = $SubTotal;
$myOrder->Tax        = $Tax;
$myOrder->Total      = $Total;
*/



echo '<hr />';	
	
if(isset($_POST['Submit']))
{ //show DATA

	echo '<p style="color: orange;"> Step Two.</p>';
	//Edit current order
	$myOrder->getMyOrder(); 

	echo '<br /><br />VAR_DUMP OF POST:<br />';

	myDump($_POST);

	echo '<br /><br />VAR_DUMP OF OBJECT:<br />';

	myDump(myOrder);

	echo '<hr /><br/>';

	//display order form - also allows to update order
	echo $myOrder->getOrderForm();

}else{ //Ask data
	echo '<h3 style="color: red;"> Step One - Issues to resolve</h3>
	<ul style="color: orange;">
		<li>Form submits instead of warning for title showing</li>
		<li>number allows string to submit</li>
		<li>comments don\'t carry over/</li>
	</ul>';

	echo $myOrder->getOrderForm();
}

include '_inc/myFooter-inc.php';
