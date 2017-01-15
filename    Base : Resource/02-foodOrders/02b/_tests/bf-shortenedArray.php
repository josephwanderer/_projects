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
$SubscriberNameErr = $EmailErr = $GenderErr = $PublisherErr = "";
$SubscriberName = $Email = $Gender = $Comment = $Publisher = "";

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


	if (empty($_POST["Gender"])) {
		$GenderErr = "Gender is required";
	} else {
		$Gender = test_input($_POST["Gender"]);
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


//if we cleared all the errors...
if(
	isset($_POST['Submit']) &&
	isset($_POST['Publisher']) &&
	($SubscriberNameErr == '') &&
	($EmailErr == '') &&
	//($GenderErr == '') &&
	($PublisherErr == '')

	)
{
	//show successful results...
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

echo '<form
		method="post"
		action="' . htmlspecialchars(THIS_PAGE) . '">

		<p><b>' . $SubscriberName . '</b> - he following comics are available from <b>' . $Publisher . '</b> to select from.</p>';


		foreach ($newRelease as $title => $price) {
				echo $title . ' - ' . $price .  ' (ea.) <input type="number" name="' . $title . '" value="' . $_POST[$title] . '" >
				<br />
				-- ' . $title . ' --
				<br/><br />';
		}

		echo '<label for="ShortBox">Comic Storage Box, Short: $2.75</label>
		<input
			type="range"
			min="0" max="100"
			name="ShortBox"
			value="' . $_POST['ShortBox']. '"
			id="ShortBox"
			step="1"
			oninput="outputUpdate(value)">
		<output
			for="ShortBox"
			id="this->volume">' . $_POST['ShortBox']. '</output>
		<br /><br />


		<label for="LongBox">Comic Storage Box, Long: $4.50</label>
		<input
			type="range"
			min="0" max="100"
			name="LongBox"
			value="' . $_POST['LongBox']. '"
			id="LongBox" step="1"
			oninput="outputUpdate(value)">
		<output for="LongBox" id="volume">' . $_POST['LongBox']. '</output>
		<br /><br />


		<label for="Boards">Cardboard Backing Boards (acid Free): $.50</label>
		<input
			type="range"
			min="0" max="100"
			name="Boards"
			value="' . $_POST['Boards']. '"
			id="Boards" step="1"
			oninput="outputUpdate(value)">
		<output for="Boards" id="volume">' . $_POST['Boards']. '</output>
		<br /><br />


		<label for="PolyBags">Polybags (acid Free): $.50</label>
		<input
			type="range"
			min="0" max="100"
			name="PolyBags"
			value="' . $_POST['PolyBags']. '"
			id="PolyBags" step="1"
			oninput="outputUpdate(value)">
		<output for="PolyBags" id="volume">' . $_POST['PolyBags']. '</output>
		<br /><br />



		<!--my hidden values-->
			<input type="hidden" name="SubscriberName" value="' . $_POST['SubscriberName']. '">
			<input type="hidden" name="Email" value="' . $_POST['Email']. '">
			<input type="hidden" name="Publisher" value="' . $_POST['Publisher']. '">

		<br /><br />
		<input type="submit" name="Submit" value="Submit">


		<!-- my javascripts - for this section only - make clever footer load -->
		<script src="./_js/stopExecutionOnTimeout.js?t=1"></script>

		<script>var sliders = document.querySelectorAll(\'input[type="range"]\');
			for (var i in sliders) {
					if (window.CP.shouldStopExecution(1)) {
							break;
					}
					sliders[i].onchange = function () {
							document.querySelector(\'output[for="\' + this.name + \'"]\').innerHTML = this.value;
					};
			}
			window.CP.exitedLoop(1);
			//# sourceURL=pen.js
		</script>

	</form>';

	echo '<hr />';



	echo '<br /><br />POST:<pre>';
	myDump($_POST);
	echo '</pre>';


	echo '<br /><br />ARRAY:<pre>';
	myDump($newRelease);
	echo '</pre>';

	echo '<hr />';

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
