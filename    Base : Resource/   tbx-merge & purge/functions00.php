<?php
##"Falsy Values"
	#FALSE, NULL - Falsey Keywords
	#Zero (0, 0.0, '0', "0"0)
	#empty string (' ', " ")
	#An aray with zero elements []
	#A simpleXML object created from empty tags

##Truthy
	# -1 'false', 'null'

//data handling
function getNameOfFile(){ //Gets fileName sans extension :D
	$file = pathinfo( __FILE__ ); //gets the directory path
	$fileName = basename( $_SERVER['PHP_SELF'], '.' . $file[ 'extension' ] ); //cleans file name
	//var_dump($file);

	echo $fileName;//Here we print the name of the file w/o the extension
	}

#Pathing tools
function getHere(){
	#http://stackoverflow.com/questions/7448944/determining-a-websites-root-location
	#must be plopped into script to work - shows where THIS script is, not where function is called

	// Load the absolute server path to the directory the script is running in
	$fileDir = dirname(__FILE__);

	// Make sure we end with a slash
	if (substr($fileDir, -1) != '/') {
		$fileDir .= '/';
        }

	// Load the absolute server path to the document root
	$docRoot = $_SERVER['DOCUMENT_ROOT'];

	// Make sure we end with a slash
	if (substr($docRoot, -1) != '/') {
		$docRoot .= '/';
        }

	// Remove docRoot string from fileDir string as subPath string
	$subPath = preg_replace('~' . $docRoot . '~i', '', $fileDir);

	// Add a slash to the beginning of subPath string
	$subPath = '/' . $subPath;

	// Test subPath string to determine if we are in the web root or not
	if ($subPath == '/') {

		// if subPath = single slash, docRoot and fileDir strings were the same
            echo "<b> WE R HERE: web root folder of http://" . $_SERVER['SERVER_NAME'];
        } else {
            // Anyting else means the file is running in a subdirectory
            echo "<b>WE R HERE:</b> '" . $subPath . "' <br /><i>A subdirectory of http://" . $_SERVER['SERVER_NAME'] . "</i>";
        }
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


function getCopyright(){
	$copyRight = 'CopyrightHolder';
	$converted = strtoupper($copyRight);

	#date_default_timezone_set('America/Los_Angeles');

	$yearStart	= 2011;
	$yearCurrent = date('Y');

	if ($yearCurrent != $yearStart){//if unequal, print both
		$thisYear = date('y');
		$dates = "&copy; $yearStart &ndash; $yearCurrent $copyRight ";
		}else{ #equal, one date only
			$dates = "&copy; $yearStart $copyRight";
		}
		echo $dates;
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
function getBreak(){echo '<br />';}
function getBreaks(){echo '<br /><br /><br />';}

function makeNav($navItem)
       {//created variable - plops in what is called when function used on page calling the function itself - this is like the strPromp
       		$output = ''; //Variable of 0 length
       		foreach($navItem as $pageLink => $displayedLink)
       		{
       			if ($pageLink == THIS_PAGE){
       			//url matches page - add active class
       				$output .='<li class="active"><a href="' . $pageLink . '">'  . $displayedLink . '</a></li>' . PHP_EOL;} //PHP_EOL is php line end for all systems
       			else{
       			//don't add class
       				$output .='<li><a href="' . $pageLink . '">'  . $displayedLink . '</a></li>';}

       		}
       		return $output;
       }

//Troubleshooting functions
	#see gDoc: https://docs.google.com/document/d/1agfYpFQG96VU1T-YAMaNpOqw2ZIL23vsgDy9CgQU6AI/edit
	#constant DEBUG show errors when set to 'TRUE'

function myerror($myFile, $myLine, $errorMsg)
	{
		if(defined('DEBUG') && DEBUG)
		{
		   echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
		   echo "Error Message: <b>" . $errorMsg . "</b><br />";
		   die();
		}else{
			#no error, show some sort of message
			echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
			die();
		}
	}

function getTest(){
	echo '<br /><br /><br />testing 1 - 2 -3 testing<br /><br /><br />';}

/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.
 * Using our dbOut() function allows us to encapsulate the most common functions for removing
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * Later, we can add to this function sitewide, as new requirements or vulnerabilities develop.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str){
	if($str!=""){
		$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;} #End dbOut()
