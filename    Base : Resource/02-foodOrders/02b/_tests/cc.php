<?php #form-orders.php
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


include './_inc/myToolbox-inc.php'; //Session, THIS_PAGE
include './_inc/myHeader-inc.php';  //Uses THIS_PAGE
include './_Classes/OrderForm.php'; //Class


# uses $_REQUEST($_POST or $_GET) to chek 'action'
if(isset($_REQUEST['act'])){ // eval to get the state of the form
	$myAction = (trim($_REQUEST['act']));
}else{
	$myAction = "";
}


//sanitize data
$mySubscriber = strip_tags($_POST['SubscriberName']); #sanitize data

//END CONFIG AREA ----------------------------------------------------------

switch ($myAction) {//check 'act' for type of process
	case "submitted":  // end deets
		showName();
		echo '<br />3';
		break;
	
	case "display":  // order deets
		$myValue = 'submitted'; //submit button title
	 	showName();	
		echo showForm($myState = 'submitted', $mySubscriber, $myValue);
		echo '<br />2';
	 	break;
	
	default:         // start deets 
		$myValue = 'display'; //submit button title
	 	echo showForm($myState = 'display', $mySubscriber, $myValue);
		echo '1';
}

include '_inc/myFooter-inc.php';


// Make functions or methods?
function showForm($myState, $mySubscriber, $myValue) {# shows form so user can enter their name.  Initial scenario
	return '
	<script type="text/javascript" src="./_js/util.js"></script>
		
	<script type="text/javascript">
		function checkForm(thisForm)
		{//check form data for valid info
			if(empty(thisForm.SubscriberName,"Please Enter Your Name")){
				return false;
			}
			

			return true;//if all is passed, submit!
		}
	</script>
	
 	<p><span class="error">* Indicates a required field.</span></p>
	
	<form 
		action="' . THIS_PAGE . '" 
		method="post" 
		onsubmit="return checkForm(this);">
		
		
		Subscriber: <input 
			type="text" 
			name="SubscriberName" 
			value="' . $mySubscriber . '"
			/>
		<font color="red"><b>*</b></font> <em>(alphabetic only)</em>
		<br /><br />
		
		E-mail: <input type="text" name="Email" value="' .  $Email . '"> 
		<span class="error">*</span>
		<br /><br/>

		
		ewiur
		
		
		
		
		<br />
		<br />
		
		<input type="submit" value="' . $myValue . '"> | 

		<input type="hidden" name="act" value="' . $myState . '" />
	</form>'; 

}


/**
 * loads a quick user message (flash/heads up) to provide user feedback
 *
 * Uses a Session to store the data until the data is displayed via showFeedback() loaded
 * inside the bottom of header_inc.php (or elsewhere)
 *
 * <code>
 * feedback('Flash!  This is an important message!'); #will show up next running of showFeedback()
 * </code>
 *
 * added version 2.07
 *
 * @param string $msg message to show next time showFeedback() is invoked
 * @return none
 * @see showFeedback()
 * @todo none
 */


/**
 * wrapper function for PHP session_start(), to prevent 'session already started' error messages.
 *
 * To view any session data, sessions must be explicitly started in PHP.
 * In order to use sessions in a variety of INC files, we'll check to see if a session
 * exists first, then start the session only when necessary.
 *
 *
 * @return void
 * @todo none
 */
function startSession() {
	//if(!isset($_SESSION)){@session_start();}
	if(isset($_SESSION))
	{
		return true;
	}else{
		@session_start();
	}
	if(isset($_SESSION)){
		return true;
	}else{
		return false;
	}
} #End startSession()


#flash message is a temporary message sent to the user
#load it here and show it one time when showFeedback() is called
function feedback($msg, $level="warning") {
	startSession();
	$_SESSION['feedback'] = $msg;
	$_SESSION['feedback-level'] = $level;

}


/**
 * shows a quick user message (flash/heads up) to provide user feedback
 *
 * Uses a Session to store the data until the data is displayed via showFeedback()
 *
 * Related feedback() function used to store message
 *
 * <code>
 * echo showFeedback(); #will show then clear message stored via feedback()
 * </code>
 *
 * changed from showFeedback() version 2.10
 *
 * @param none
 * @return string html & potentially CSS to style feedback
 * @see feedback()
 * @todo none
 */
function showFeedback() {
	startSession();//startSession() does not return true in INTL APP!

	$myReturn = "";  //init
	if(isset($_SESSION['feedback']) && $_SESSION['feedback'] != "")
	{#show message, clear flash
		if(defined('THEME_PHYSICAL') && file_exists(THEME_PHYSICAL . 'feedback.css'))
		{//check to see if feedback.css exists - if it does use that
			$myReturn .= '<link href="' . THEME_PATH . 'feedback.css" rel="stylesheet" type="text/css" />' . PHP_EOL;
		}else{//create css for feedback
			$myReturn .=
				'
				<style type="text/css">
				.feedback {  /* default style for div */
					border: 1px solid #000;
					margin:auto;
					width:100%;
					text-align:center;
					font-weight: bold;
				}

				.error {
					color: #000;
					background-color: #ee5f5b; /* error color */
				}

				.warning {
					color: #000;
					background-color: #f89406; /* warning color */
				}

				.notice {
					color: #000;
					background-color: #5bc0de; /* notice color */
				}

				.success {
					color: #000;
					background-color: #62c462; /* notice color */
				}
				</style>
				';

		}

		if(isset($_SESSION['feedback-level'])){$level = $_SESSION['feedback-level'];}else{$level = 'warning';}
		$myReturn .= '<div class="feedback ' . $level . '">'  . $_SESSION['feedback'] . '</div>';
		$_SESSION['feedback'] = ""; #cleared
		$_SESSION['feedback-level'] = "";
		return $myReturn; //data passed back for printing

	}
}


/**
 * Forcibly passes user to a URL.  Accepts either an absolute or relative address.
 *
 * This function is a alternative to the PHP header() function.
 *
 * Any page using myRedirect() needs ob_start() at the top of the page or header() errors
 * will occur i.e.: 'headers already sent'.
 *
 * Will sniff for "http://", "https://", which will force an absolute redirect, otherwise assume local.
 *
 * @param string $myURL locally referenced file, or absolute with 'http://' as destination for user
 * @return void
 * @todo examine HTTPS support
 */
function myRedirect($myURL) {
	$httpCheck = strtolower(substr($myURL,0,8)); # http:// or https://
	if(strrpos($httpCheck,"http://")>-1 || strrpos($httpCheck,"https://")>-1){//absolute URL
		header("Location: " . $myURL);
	}else{//relative URL
		$myProtocol = strtolower($_SERVER["SERVER_PROTOCOL"]); # Cascade the http or https of current address
		if(strrpos($myProtocol,"https")>-1){$myProtocol = "https://";}else{$myProtocol = "http://";}
		$dirName = dirname($_SERVER['REQUEST_URI']);  #Path derives properly on Windows & UNIX. alternatives: SCRIPT_URL, PHP_SELF
		$char = substr($dirName,strlen($dirName) - 1);
		if($char != "/"){$dirName .= "/";} # Only add slash if required!
		header("Location: " . $myProtocol . $_SERVER['HTTP_HOST'] . $dirName . $myURL);
	}
	die(); //added for safety!
} #End myRedirect()


function showName() {#form submits here we show entered name

	if(!isset($_POST['SubscriberName']) || $_POST['SubscriberName'] == ''){
		//data must be sent	
		feedback("No form data submitted"); #will feedback to submitting page via session variable
		myRedirect(THIS_PAGE);
	}  
	
	if(!ctype_alnum($_POST['SubscriberName'])){
		//data must be alphanumeric only	
		feedback("Only letters and numbers are allowed."); #will feedback to submitting page via session variable
		myRedirect(THIS_PAGE);
	}
	
}