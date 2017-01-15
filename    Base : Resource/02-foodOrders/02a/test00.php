<?php // test.php -- test security/sanitization of data...



include '_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include '_inc/myHeader-inc.php';  //Uses THIS_PAGE
//include './_Classes/OrderForm.php';     //Class


// define variables and set to empty values
$UserNameErr = $EmailErr = $genderErr = "";
$UserName = $Email = $gender = $comment = "";


//Sanitize Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["UserName"])) {
    $UserNameErr = "Name is required";
  } else {
    $UserName = test_input($_POST["UserName"]);
    // check if username only contains letters, numbers, and underscores
		
    if (!preg_match("/^[A-Za-z0-9-_]*$/", $UserName)) {
      $UserNameErr = "Only letters, numbers, and underscores allowed (no spaces)"; 
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

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// data? SHOW!
if(isset( $_POST['Submit'])){
	echo '<h2>PHP Form Validation - END TEST</h2>
	<p>NOTE: <p><strong>Note:</strong> The required attribute of the input tag is not supported in Internet Explorer 9 and earlier versions, or in Safari.</p>';

	var_dump($_POST);

}else{ // data? ASK!


// see: http://www.w3schools.com/php/php_form_complete.asp
//required attribute - not work in safari browser
//see :http://www.html5rocks.com/en/tutorials/forms/constraintvalidation/#toc-safari
	//referenced here...
//http://stackoverflow.com/questions/19613923/javascript-for-html5-required-field-set-up-to-work-in-safari
	
echo '
	<h2>PHP Form Validation - Begin State #1</h2>
	
	<p><span class="error">* required field.</span></p>
	
	<form method="post" action="' . htmlspecialchars(THIS_PAGE) . '">
	
	User: <input type="text" name="UserName" value="' . $UserName . '" required>
	<span class="error">* ' . $UserNameErr . '</span>
	<br><br>

	E-mail: <input type="text" name="Email" value="' . $Email . '" required >
	<span class="error">* ' . $EmailErr . '</span>
	<br><br>

	Comment: <textarea name="comment" rows="5" cols="40">' . $comment . '</textarea>
	<br><br>

	Gender:
	<input type="radio" name="gender" '; 

	if (isset($gender) && $gender=="female") 
	{
		echo "checked";
	}

	echo 'value="female">Female
		<input type="radio" name="gender" ';

			if (isset($gender) && $gender=="male") 
			{
				echo "checked";
			}

	echo 'value="male">Male
		<span class="error">* ' . $genderErr . '</span>
		<br><br>
		<input type="submit" name="Submit" value="Submit">  
	</form>
	';


	echo "<h2>My Input:</h2>";
	echo '<pre>';
	echo myDump($_POST);
	echo '</pre>';

}


include '_inc/myFooter-inc.php';