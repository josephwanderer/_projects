<?php
/**
 * Origin:  01-04c05 | form01.php
 *
 *
 **/

define('THIS_PAGE', basename(__file__));
$pageName = pathinfo(THIS_PAGE, PATHINFO_FILENAME);

include './classes/Temp.php';
$temp = new Temp();



/*
echo $temp->tempEntered = $_POST['tempEntered'];
echo '<br />';
echo $temp->tempType    = $_POST['tempType'];
echo '<br />';
*/




if(isset($_POST['tempEntered'])){ //if data, show
		echo '<br />';

	$temp->tempEntered = $_POST['tempEntered'];
	$temp->tempType    = $_POST['tempType'];

	echo $temp->convertTemperature();


	echo '<pre>';
		 var_dump($_POST);

	echo '</pre>';






}else{ //no data, show form

	echo '</p>' . $pageName . '</p>';
	echo '
		<form action="' . htmlspecialchars(THIS_PAGE) . '" method="post">

			<input type="number" name="tempEntered" />

			<br />
			<select name="tempType" >
				<option value="f2c">Fahrenheit to Celcius</option>
				<option value="f2k">Fahrenheit to Kelvin</option>
				<option value="c2f">Celcius to Fahrenheit</option>
				<option value="c2k">Celcius to Kelvin</option>
				<option value="k2f">Kelvin to Fahrenheit</option>
				<option value="k2c" selected>Kelvin to Celcius</option>
			</select>

			<br />
			<input type="submit" name="Submit" />
		</form>



	';

//---END form

//AND Tha-tha-that's all folks!!!

}


#method to hop back along user history....
	echo '<br />
	<br />

	<button onclick="goBack()">Go Back</button>

	<script>
		function goBack()
		{
			window.history.back();
		}
	</script>';
