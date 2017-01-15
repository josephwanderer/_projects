<?php #form-test01.php

include '_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include '_inc/myHeader-inc.php';  //Uses THIS_PAGE
include './_Classes/OrderForm.php';     //Class

// Instantiate obj
$myOrder = new OrderForm($Publisher, $Title, $TitleDesc, $Comment, $Price, $Quantity, $SubTotal, $Tax, $Total );

$myOrder->Publisher  = ucfirst($_POST['Publisher']);
$myOrder->Title      = $_POST['Title'];
$myOrder->TitleDesc  = $_POST['TitleDesc'];

$myOrder->Comment    = $_POST['Comment'];
$myOrder->Price      = $_POST['Price'];

$myOrder->Quantity   = $_POST['Quantity'];
$myOrder->SubTotal   = $_POST['SubTotal'];
$myOrder->Tax        = $_POST['Tax'];
$myOrder->Total      = $_POST['Total'];


echo '<hr />';
if(isset($_POST['Submit']))
{ //show DATA
	echo '<p style="color: orange;"> Step Two.</p>';
	
	//Edit current order
	$myOrder->getMyOrder(); 


	myDump($_POST);

	echo '<br /><br />';

	myDump(myOrder);

	echo '<hr /><br/>';

	//display order form - also allows to update order
	echo $myOrder->getOrderForm();

}else{ //Ask data
	echo '<p style="color: red;"> Step One.</p>';

	echo $myOrder->getOrderForm();
}


include '_inc/myFooter-inc.php';
