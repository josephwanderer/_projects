<head>
 <title>Convert Temperature</title>
 </head>
 <body>
 <h2>Temperature Conversion</h2>
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
 Degrees:
 <input type = "text" name = "degree" size=3>
 <select name="scale"> <option value="celcius">Celsius</option> <option value="fahrenheit">Fahrenheit</option> <option value="kelvin">Kelvin</option> </select>
 <br/>
 <input type = "submit" name = "Convert Temperature"/>
 </form>

<?php

include './classes/Temperature_class.php';
#THIS SHOULD BE DONE VIA POST - THESE AREN'T BOOKMARKABLE PAGES


 //check for input
 if (array_key_exists('degree',$_GET)){
	$scale = $_GET['scale'];
	$degree = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);

		 $temperature = new Temperature();

	//check that input is not NULL or NaN
	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
		if ($scale == "celcius")
		{
			 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>celsius</td></tr>";

			 $temp = $temperature->c2f($degree);
			 print "<tr><td>$temp</td><td>fahrenheit</td></tr>";

			 $temp = $temperature->c2k($degree);
			 print "<tr><td>$temp</td><td>kelvin</td></tr>"; }

		if ($scale == "fahrenheit")
		{
			 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>$degree</td><td>farhenheit</td></tr>";

			 $temp = $temperature->f2c($degree);
			 print "<tr><td>$temp</td><td>celsius</td></tr>";

			 $temp = $temperature->f2k($degree);
			 print "<tr><td>$temp</td><td>kelvin</td></tr>";}

		 if ($scale == "kelvin")
		{
			 print "<table border><tr><th colspan=2> Conversion Results</th></tr><tr><td>
			 $degree</td><td>kelvin</td></tr>";

			 $temp = $temperature->k2f($degree);
			 print "<tr><td>$temp</td><td>fahrenheit</td></tr>";

			 $temp = $temperature->k2c($degree);
			 print "<tr><td>$temp</td><td>celsius</td></tr>";}

	 }
	 else
		//print an error message if input is NULL or NaN
		echo "<span style = \"color:red\">*Please Enter a Valid Temperature.</span>";
}
 ?>
