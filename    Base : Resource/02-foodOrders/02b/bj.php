<?php #form-test01.php
/**
 * Comic Book Subscription Form
 *
 *
 * Scaps data and returns a list
 * Users can select items and quantities from list
 * Users can also order polybacks, backboards, white boxs
 * show total with tax, subtotal
 * allow order revision
 * submit final order
 *
 *
 * @TODO   Remove unneeded checks (Genger)
 * @TODO   Add login? If new? Recover Password?
 * @TODO   Show Comic img thumbnails
 * @TOSO   make images links so folks can check out offerings
 *
 **/


include '_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include '_inc/myHeader-inc.php';  //Uses THIS_PAGE
//include './_Classes/OrderForm.php';     //Class

//REF :: http://www.w3schools.com/php/php_form_complete.asp

// define variables and set to empty values
$SubscriberNameErr = $EmailErr = $PublisherErr = "";
$SubscriberName = $Email = $Comment = $Publisher = "";

//define math variables
$numTot = 0;
$numSub = 0;
$tax = 1.08;
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["SubscriberName"])) {
		$SubscriberNameErr = "Name is required";
	} else {
		$SubscriberName = test_input($_POST["SubscriberName"]);
		// check string validity
		// SEE: http://stackoverflow.com/questions/3028642/regular-expression-for-letters-numbers-and
		// "/^[a-zA-Z ]*$/" alpha + whitespace ONLY
		// "/^[A-Za-z0-9\-\_]*$/" alphanumeric + underscores + dashes

		if (!preg_match("/^[A-Za-z0-9\-\_]*$/", $SubscriberName)) {
			$SubscriberNameErr = "Only letters, Numbers, and some special characters - no white space allowed";
		}
	}


	if (empty($_POST["Email"])) {
		$EmailErr = "Email is required";
	} else {
		$Email = test_input($_POST["Email"]);
		// check if e-mail address is well-formed
		if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
			$EmailErr = "Invalid Email format";
		}
	}


	if (empty($_POST["Comment"])) {
		$Comment = "";
	} else {
		$Comment = test_input($_POST["Comment"]);
	}


	if (empty($_POST["Publisher"])) {
		$PublisherErr = "Publisher Selection is required";
	} else {
		$Publisher = test_input($_POST["Publisher"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if( isset($_POST['Commit'])){ //Order placed
	//show successful results...
	echo '<h2 style="color:orange">Order Placed (Show Order)</h2>
		<hr />';

	echo '<b>' . ucFirst($_POST[SubscriberName ]) . '</b>, You have place an order for the following items:<br />';
	
	
	
	
	
	$numSub      = $numSub * 3.99;
	$numBoxLG    = (int)$_POST['LongBox']      * 4.5;
	$numBoards   = (int)$_POST['ShortBox']     * 3.25;
	$numBoards   = (int)$_POST['BackingBoard'] * .25;
	$numPolybag  = (int)$_POST['PolyBag']      * .5;


	
	$subTot = $numSub + $numBoxLG + $numBoxSM + $numBoards + $numPolybag;

	$taxTot = $subTot * $tax;

	$numTot = $subTot + $taxTot;
	
	setlocale(LC_MONETARY, 'en_US.UTF-8');

	echo '<b>Subtotal:</b> ' . money_format('%.2n', $subTot) . '<br />';
	echo '<b>Tax:</b> '      . money_format('%.2n', $taxTot) . '<br />';
	echo '<b>Total:</b> '    . money_format('%.2n', $numTot) . '<br />';
	
	
	
		

	echo '<br /><br />POST:<pre>';
	myDump($_POST);
	echo '</pre>';

	echo '<br /><br />ARRAY:<pre>';
	myDump($newRelease);
	echo '</pre>';
	
	
	
	
	
	
	
	
	 echo 'A <br />
	 B <br />
	 C <br />
	 
	 <hr />
	 <h3>TOTAL</h3>
	 <b>SUBTOTAL:</b> totSub <br />
	 <b>TAX: </b> tax  <br />
	 <b>TOTAL: </b> tot  <br />
	 
	 <br /><br />
	 Thank you for your order and patronage, You can expect your order to arrive in 2-4 weeks. Thank you.';


	echo '<hr /><br /><br />POST:<pre>';
	myDump($_POST);
	echo '</pre>';

	echo '<br /><br />ARRAY:<pre>';
	myDump($newRelease);
	echo '</pre>';
	
	

}else if( //if we cleared all the errors...
	isset($_POST['Submit']) && isset($_POST['Publisher']) &&
	($SubscriberNameErr == '') && ($EmailErr == '') &&
	//($GenderErr == '') &&
	($PublisherErr == '')
	){ //show current order for review and final submission...
	echo '<h2 style="color:orange">State Two (Validations passed)</h2>';

	//will replace with datascrape info later
	$newRelease = [
		'All-New Wolverine #7' => '3.99',
		'Captain America Omnibus Volume 1 HC (New Printing)' => '125.00',
		'Amazing Spider-Man #11' => '3.99',
		'Daredevil #6 (David Lopez Story Thus Far Variant Cover)' => 'AR',
		'Doctor Strange #7 (Chris Bachalo Regular Cover)' => '3.99',
	];


	//Extend the class?

	//SEE http://stackoverflow.com/questions/36969469/retain-input-value-on-submit-reload-from-input-created-from-associative-array-n/36969789?noredirect=1#comment61496765_36969789

echo '<form
		method="post"
		action="' . htmlspecialchars(THIS_PAGE) . '">

		<p><b>' . $SubscriberName . '</b> - he following comics are available from <b>' . $Publisher . '</b> to select from.</p>';

		/*
			Why did I use str_replace() function?

			You cannot use dot or space in input field names. From the documentation:
			Dots and spaces in variable names are converted to underscores. For example becomes $_REQUEST["a_b"].

			Solution: Use str_replace() to replace all white spaces with underscores so that $_POST can detect user submitted value.

			If you want to see the contents of $_POST superglobal, do var_dump($_POST);.

		*/

		echo '<style>
		.input-narrow { font-size: 14px;
			font-family: "Open Sans Condensed", sans-serif;
			width: 3em;
			margin-right: .5em;
			margin-bottom: .5em;
			}

		</style>';
	
	
		foreach ($newRelease as $title => $price) {
			$myDescription = $title;                //readable
			$title = str_replace(' ', '_', $title); //$_POST freindly

			
			echo '<input class="input-narrow"
				type="number"
				name="' . $title . '"
				value="';

				// SOLUTION: str_replace() all white space to underscores
				// THEN $_POST can detect user submitted value.
				if(isset($_POST[$title])){
					//round($_POST[$title], 2);
					
					echo $_POST[$title];
					
					$numSub += $_POST[$title];
				}else{
					echo ""; // could be exclaimation point or something
				}

				echo '" /> $' . $price . ' (ea.) - <i>' . $myDescription .  '</i><br />';
			
			
			// We use string replace here so title can be 'readable' in html

		}

		echo '<h3>Extras</h3>
		
			<input class="input-narrow" type="number"
				name="LongBox" value="' . (int)$_POST['LongBox'] . '" /> 
				$4.50 (ea.) - <i> Acid free long storage box (White)</i> 
			<br />
			
			<input class="input-narrow" type="number"
				name="ShortBox" value="' . (int)$_POST['ShortBox'] . '" /> 
				$3.25 (ea.) - <i> Acid free short storage box (White)</i> 
			<br />

			
			<input class="input-narrow" type="number"
				name="Polybag" value="' . (int)$_POST['Polybag'] . '" />
				$.50 (ea.) - <i> Acid free mylar polybag</i> 
			<br />
			
			<input class="input-narrow" type="number"
				name="BackingBoard" value="' . (int)$_POST['BackingBoard'] . '" />
				$.25 (ea.) - <i> Acid Free backing boards</i> 
			<br />
			
			<!--my hidden values-->
			<input type="hidden" name="SubscriberName" value="' . $_POST['SubscriberName']. '">
			<input type="hidden" name="Email" value="' . $_POST['Email']. '">
			<input type="hidden" name="Publisher" value="' . $_POST['Publisher']. '">

		<br /><br />
		<input type="submit" name="Submit" value="Revise Order"> | 
		<input type="submit" name="Commit" value="Place Order">

	</form>';

	echo '<hr />';

	
	echo '<h3> Items Ordered</h3>
	<p>Your current order currently contains:</p>


	<b>Current Order:</b> ' . $numSub . ' Issues order<br />';

	$numSub      = $numSub * 3.99;
	$numBoxLG    = (int)$_POST['LongBox']      * 4.5;
	$numBoards   = (int)$_POST['ShortBox']     * 3.25;
	$numBoards   = (int)$_POST['BackingBoard'] * .25;
	$numPolybag  = (int)$_POST['PolyBag']      * .5;


	
	$subTot = $numSub + $numBoxLG + $numBoxSM + $numBoards + $numPolybag;

	$taxTot = $subTot * $tax;

	$numTot = $subTot + $taxTot;
	
	setlocale(LC_MONETARY, 'en_US.UTF-8');

	echo '<b>Subtotal:</b> ' . money_format('%.2n', $subTot) . '<br />';
	echo '<b>Tax:</b> '      . money_format('%.2n', $taxTot) . '<br />';
	echo '<b>Total:</b> '    . money_format('%.2n', $numTot) . '<br />';
	
	
	
		

	echo '<br /><br />POST:<pre>';
	myDump($_POST);
	echo '</pre>';

	echo '<br /><br />ARRAY:<pre>';
	myDump($newRelease);
	echo '</pre>';


}else{
	//there is an error with some data/no data
	echo '<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form
	method="post"
	action="' . htmlspecialchars(THIS_PAGE) . '">


	Subscriber: <input type="text" name="SubscriberName" value="' . $SubscriberName . '">
	<span class="error">* ' . $SubscriberNameErr . '</span>
	<br><br>

	E-mail: <input type="text" name="Email" value="' .  $Email . '">
	<span class="error">* ' . $EmailErr . '</span>
	<br><br>

	<select name="Publisher">
		<option value=""';

			$Publisher = $_POST["Publisher"];

			 if (isset($Publisher) && $Publisher == "") echo "selected";

			//Will want to go overkill later with all publishers....
			//use dataScrape to get all pubs publishing that week...
			echo '>Select Publisher</option>

			<option value="Marvel"';
			if (isset($Publisher) && $Publisher == "Marvel") echo "selected";
			echo '> Marvel</option>

			<option value="DC"';
			if (isset($Publisher) && $Publisher == "DC") echo "selected";
			echo '>DC</option>

			<option value="Image"';
			if (isset($Publisher) && $Publisher == "Image") echo "selected";
			echo '>Image</option>

		</select><span class="error">* ' . $PublisherErr . '</span>
	<br /><br />

	<input type="submit" name="Submit" value="Submit">
</form>';


	echo '<br /><br />POST:<pre>';
		myDump($_POST);
	echo '</pre>';

}


include '_inc/myFooter-inc.php';
