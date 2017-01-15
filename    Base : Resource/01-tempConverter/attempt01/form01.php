<?php
/**
 * Origin:  01-04c05 | form01.php
 *
 *
 **/


include './classes/Temp.php';
$temp = new Temp;

echo $temp->test();


define('THIS_PAGE', basename(__file__));
$pageName = pathinfo(THIS_PAGE, PATHINFO_FILENAME);

if(isset($_POST['tempEntered'])){ //if data, show

	echo '<pre>';
		#var_dump($_POST['tempEntered']);
		 var_dump($_POST);
	echo '</pre>';


}else{ //no data, show form

	echo '</p>' . $pageName . '</p>';
	echo '
		<form action="' . THIS_PAGE. '" method="post">
			<select name="TempType" form="TempType">
				<option value="f2c" selected>Fahrenheit to Celcius</option>
				<option value="f2k">Fahrenheit to Kelvin</option>
				<option value="c2f">Celcius to Fahrenheit</option>
				<option value="c2k">Celcius to Kelvin</option>
				<option value="k2f">Kelvin to Fahrenheit</option>
				<option value="k2c">KelvinC to elcius</option>
			</select>

			<input type="number" name="tempEntered" />
			<br />


			<input type="submit" name="Submit" />
		</form>
	';

//---END form

//AND Tha-tha-that's all folks!!!

}


#method to hop back along user history....
	echo '<button onclick="goBack()">Go Back</button>

	<script>
		function goBack()
		{
			window.history.back();
		}
	</script>';
