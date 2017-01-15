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
function getNameOfFile()
{ //Gets fileName sans extension :D
	$file = pathinfo( __FILE__ ); //gets the directory path
	$fileName = basename( $_SERVER['PHP_SELF'], '.' . $file[ 'extension' ] ); //cleans file name
	//var_dump($file);

	echo $fileName;//Here we print the name of the file w/o the extension
	}	
	
	
//str_repeat, not while loop		
function getBT($num = 0) 
{ // default value is 0 unless reset by int passed in by function call
	$num = (int) $num;     // cast num to integer
		if ($num < 0){     // if num is 0 (or a word) make it 1
	   		$num = 1;  
	    }
	    echo str_repeat('<br/>', $num);      // echo out as many <br/> as requested
		//return str_repeat('<br/>', $num);  // echo out as many <br/> as requested
	}

	function getHello($name){
		echo "Hello {$name}!";			
	}


function redirect_to($newLocation)
{
		header("Location: " . $newLocation);
		exit;		
	}	
	// example
	//redirect_to('http://yahoo.com');	

	//ex2 used in if else statement - must  add to end of url string: '?logged_in=1' or '?logged_in=2'
	//like so: http://localhost/Ly001php/sandbox/105a_redirectHeaders.php?logged_in=2
	//$logged_in = $_GET['logged_in'];

	//if ($logged_in == "1"){
	//	redirect_to('http://legion-of-super-heroes.hirospot.com');
	//}else{
	//	redirect_to('http://google.com');}




	

			//-----> DEBUG FUNCTIONS <-----//	
function debugLineNum($txt='')
{  //gets the current line number and file path
	$str  = '<br /><br />-=-=-=-=-=-=-=-=====-=-=-=-=-=-=-=-<br /><br/>';
	$str .= $txt . ' - ';
	$str .= "See Line " . __LINE__ . " in file <br />" . __FILE__;
	$str .= '<br /><br/>-=-=-=-=-=-=-=-=====-=-=-=-=-=-=-=-<br /><br />';
	return $str;

	//echo function to print return
	}
	//---- End Custom Config  ----//
		
			
function getLineNumber($txt='')
{  //gets the current line number and file path
	echo "See " . __LINE__ . " in file " . __FILE__;
	}
	

function getCopyright()
{
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


#Pathing tools
function getHere()
{  #http://stackoverflow.com/questions/7448944/determining-a-websites-root-location
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
	 
		
	
	
	
	
//compares two string types EXACTLY 
function isExact($value1, $value2){
		$output = "{$value1} === {$value2}: ";
		if ($value1 === $value2) {
			$output .= 'true <br />';
		}else{
			$output .= 'false <br />';
		}			
		return $output;	
	}
	//How to use:
	//echo isExact(0, false);
	//echo isExact(4, true);
	//echo isExact(0, '0');
	//echo isExact(0, '');
		
		
function isEqual($value1, $value2){
	$output = "{$value1} == {$value2}: ";
		if ($value1 == $value2) {
			$output .= 'true <br />';
		}else{
			$output .= 'false <br />';
		}			
		return $output;								
	}		
	//How to use:
	//echo isEqual(0, false);
	//echo isEqual(4, true);
	//echo isEqual(0, null);
	//echo isEqual(0, '0');
	
	// no need to close