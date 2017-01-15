<?php
##"Falsy Values"
	#FALSE, NULL - Falsey Keywords
	#Zero (0, 0.0, '0', "0"0)
	#empty string (' ', " ")
	#An aray with zero elements []
	#A simpleXML object created from empty tags

##Truthy
	# -1 'false', 'null'



function getSort($arr2sort){//sorts an array
		// Ths sort() and rsort() functions change the original value of the array passed to them as an argument.
		sort($arr2sort);
		//rsort($arr2sort);
		foreach ($arr2sort as $name) { echo "<li>$name</li>";}
		echo '<br/>';
		}


function getCurrentMonthAbbreviation(){#echos NAME of current month as lowercase 3 let abbreviation
	//Used to select season image by replacing letters in file name with current month
	$monthAbbreviated = date('M'); //gets Month abbreviation - first letter capitalized
	$monthlySelection = strtolower($monthAbbreviated); //sets to lowercase so we can insert into filename
	echo $monthlySelection;
	}
function getCurrentDay(){ //Get the day of the week
	echo date('l'); #Uppercade D give Abbrev day (mon, tue), Lowercase L gives full day name
	}

function getSpotlightTxt(){
# get image & banner banner text based on season as defined by month range in array
	$nameMonth = date('M'); //gets Month abbreviation - first letter capitalized
	$nameMonth = strtolower($nameMonth); //sets to lowercase so we can insert into filename
	$monthNum = date('n'); #numeric equic of month, no leading zeroes; timezone set in config

	$features = array(
		'winter' => 'Beautiful arrangements for any occasion.',
		'spring' => 'It must be spring! Delicate daffodils have arrived.',
		'summer' => "It's summer, and we're in the pink!",
		'autumn' => "Summer's over, but our flowers are still a riot of colors."
		);

	$seasons = array(//use to find correct season
		'winter' => array('dec', 'jan', 'feb'),
		'spring' => array('mar', 'apr', 'may'),
		'summer' => array('jun', 'jul', 'aug'),
		'autumn' => array('sep', 'oct', 'nov')
		);

	foreach ($seasons AS $arrkey => $arrMonth){
		if (in_array($nameMonth, $arrMonth)){#in_array == is month in array?
		$seasons = $arrkey; #get current key

		echo $features[$seasons];
		break; #Stop when found/done
		}
	}
}
function getSpotlightImg(){
# get image & banner banner text based on season as defined by month range in array
	$nameMonth = date('M'); //gets Month abbreviation - first letter capitalized
	$nameMonth = strtolower($nameMonth); //sets to lowercase so we can insert into filename
	$monthNum = date('n'); #numeric equic of month, no leading zeroes; timezone set in config

	$features = array(
		'winter' => 'Beautiful arrangements for any occasion.',
		'spring' => 'It must be spring! Delicate daffodils have arrived.',
		'summer' => "It's summer, and we're in the pink!",
		'autumn' => "Summer's over, but our flowers are still a riot of colors."
		);

	$seasons = array(//use to find correct season
		'winter' => array('dec', 'jan', 'feb'),
		'spring' => array('mar', 'apr', 'may'),
		'summer' => array('jun', 'jul', 'aug'),
		'autumn' => array('sep', 'oct', 'nov')
		);

	foreach ($seasons AS $arrkey => $arrMonth){
		if (in_array($nameMonth, $arrMonth)){#in_array == is month in array?
		$seasons = $arrkey; #get current key
		echo $seasons;
		break; #Stop when found/done
		}
	}
}
function getSpotlight(){}
function getAltText(){# displays text in alt tag = current month based on date object as set in config
	$monthNum = date('n'); #numeric equic of month, no leading zeroes; timezone set in config

	$arrMonSpecialsAltText = ['January special: Cacti galore',
	'February special: Flowers and hearts for Valentines',
	'March special: Bright red camellias',
	'April special: Fresh tulips',
	'May special: Beautiful bougainvillea',
	'June special: Purple iris',
	'July special: Stunning white hydrangeas',
	'August special: Sunflowers',
	'September special: Pink crysanthemums',
	'October special: Purple orchids',
	'November special: Bonsai with rock',
	'December special: Dried flowers for decoration'];

	#print_r($arrMonthAltText);
	echo $arrMonSpecialsAltText[$monthNum - 1]; #minus 1 for zero index
	}





// Not used
function getConditionalGreeting(){
	#http://php.net/manual/en/timezones.php

	date_default_timezone_set('America/Los_Angeles');

	$day = date('l');
	$time = date('H:i');
	$hour = date('H');


	$greeting = '<h3>Using Conditionns</h3>';
	$greeting .= "<p>Today is $day. The time is now $time .</p>";

	if ($hour > 5 && $hour <12) {
		$greeting .= '<p>Good morning.</p>';}
	elseif ($hour >= 12 && $hour < 18) {
		$greeting .= '<p>Good afternoon.</p>';}
	elseif ($hour >=18 && $hour < 23) {
		$greeting .= '<p>Good evening.</p>';}
	else {$greeting .= '<p>It\'s late at night.</p>';}

	echo $greeting;
}
function randomize ($arr) {#randomize function is called in the right sidebar - an example of random (on page reload)
# returns a random item from an array sent to it.
# Uses count of array to determine highest legal random number.
# Used to show random HTML segments in sidebar, etc.
#
# <code>
# $arr[] = '<img src="mypic1.jpg" />';
# $arr[] = '<img src="mypic2.jpg" />';
# $arr[] = '<img src="mypic3.jpg" />';
# echo randomize($arr); #will show one of three random images
# </code>
#
# @param array array of HTML strings to display randomly
# @return string HTML at random index of array
# @see rotate()
# @todo none

		if(is_array($arr)){//Generate random item from array and return it
			return $arr[mt_rand(0, count($arr) - 1)];
		}else{
			return $arr;
		}
	}#end randomize()
function rotate ($arr) {//rotate function is called in the right sidebar - an example of rotation (on day of month)
# returns a daily item from an array sent to it.
# Uses count of array to determine highest legal rotated item.
# Uses day of month and modulus to rotate through daily items in sidebar, etc.
#
# <code>
# $arr[] = '<img src="mypic1.jpg" />';
# $arr[] = '<img src="mypic2.jpg" />';
# $arr[] = '<img src="mypic3.jpg" />';
# echo rotate($arr); #will return a different image each day for three days
# </code>
#  @param array array of HTML strings to display on a daily rotation
# @return string HTML at specific index of array based on day of month
# @see rotate()
# @todo none

		if(is_array($arr))
		{//Generate item in array using date and modulus of count of the array
			return $arr[((int)date("j")) % count($arr)];
		}else{
			return $arr;
		}
	}#end rotate





function convertSeconds2minutes($seconds) {
	// Convert to whole minutes by dividing by 60 and rounding down with floor()
	$minutes = floor($seconds / 60);
	// Obtain the number of seconds by using modulo division.
	$seconds = $seconds % 60;
	// Add a leading zero if the number of seconds is less than 10.
	$seconds = ($seconds < 10) ? '0' . $seconds : $seconds;
	// Use a double-quoted string to return the result.
	return "$minutes:$seconds";
	}

function convertSeconds2Time($seconds) {
		$dtF = new DateTime("@0");
		$dtT = new DateTime("@$seconds");
		return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
	}



function makeNav($navItem) {//created variable - plops in what is called when function used on page calling the function itself - this is like the strPromp
	 $output = ''; //Variable of 0 length
	 foreach($navItem as $pageLink => $displayedLink)
	 {
		 if ($pageLink == THIS_PAGE){
		 //url matches page - add active class
			 $output .='<li class="active"><a href="' . $pageLink . '">'  .
			 $displayedLink . '</a></li>' . PHP_EOL;} //PHP_EOL is php line end for all systems
		 else{
		 //don't add class
			 $output .='<li><a href="' . $pageLink . '">'  . $displayedLink . '</a></li>';}

	 }
	 return $output;
}
