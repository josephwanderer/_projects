<?php

// asociative array stores each element as a key/value pair
$charBase = [
	'charID' 			=>	000001,
	'charCodename' 	=>	'cyclops',

	'charGender'		=> 0, // m or f
	// gender will determine variables like bodytype and hair style

	'charAge' 			=>	7, //0-10
	//infant, child, preteen, teen, young adult, adult, mature, middle-aged, senior, elderyly, ancient
	'charPhysique'		=>	5,
	//'anerexic', 'thin', 'average', 'athletic', 'muscular', 'bodybuilder', 'heavy', 'fat', 'obese'
	'charComplexion' 	=> 4,
	//'albino', 'light', 'fair', 'medium', 'tan', 'olive', 'brown', 'black', 'ebony'
	//(Fitpatrick Scale)
	'charEyeColor'  	=> 4,
	//'amber', 'black', 'blue', 'brown', 'gray', 'green', 'hazel', 'orange', 'purple', 'red', 'silver', 'violet', 'unnatural', 'unknown'
	'charHairColor'  	=> 3,
	//'Black', 'Blue', 'Brown', 'Gray', 'Green', 'Hazel', 'Purple', 'Unnatural', 'Unknown'
	'charHairStyle'  	=> 3,
	//none, bald, shaved, short, medium, long, floorlength
	'charDistinction'	=> 5,
	//none,
	//age lines, facial hair, freckles, eyepatch, glasses, piercing, scar, snaggletoothed,
	//unique, unknown
	'charEthnicity'  	=> 7,
	//none, alien, asain, black, hispanic, mixed, white, other, unknown
	];

	$arrColorHair = [
		0  => 'amber',
		1  => 'auburn',
		2  => 'black',
		3  => 'blonde',
		4  => 'blue',
		5  => 'brown',
		6  => 'brunette',
		7  => 'gold',
		8  => 'gray',
		9  => 'green',
		10 => 'hazel',
		11 => 'orange',
		12 => 'purple',
		13 => 'pink',
		14 => 'red',
		15 => 'silver',
		16 => 'violet',
		17 => 'white',
		18 => 'yellow',
		19 => 'mixed',
		20 => 'unknown'
	];

function getHaircolor($color=0){
	//$color = $int;

	switch ($color) {
			case 0:
				$color = "amber";
					break;
			case 1:
				$color = "black";
					break;
			case 2:
				$color = "blue";
					break;
			default:
				$color = "brown";

			return $color;
		}
}

function matchArray($int=0){
			//$var = $int;


		}

	if ($charBase['charGender'] >=0){
		echo "{$charBase['charCodename']} is a dude <br />";

		$charColor = getHaircolor($charBase['charEyeColor']);
		echo "{$charBase['charCodename']} has very $charColor eyes <br />";
		echo '<br /><br />';
}


function getArrayValue($arrName ="", $int=0){
	//sets a value based on the int match in the array called and returns the value!
	$value2return = $arrName[$int];
	return $value2return;
}


print_r($charBase);
echo '<br /><br /><br />';


echo getArrayValue($arrColorHair, 8);





