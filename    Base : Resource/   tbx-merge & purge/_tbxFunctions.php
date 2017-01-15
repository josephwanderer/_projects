<?php //_tbxFunctions.php

function dumpster($str='', $lineNumber, $fileName){#improved var_dump()/dumpdie()
/*
 * PURPOSE: Troubleshooting
 *
 * <code>
 * dumpster($obj, __LINE__, __FILE__);
 * </code>
 *
 * @param object $myObj any object or data we wish to view internally
 * @return none
*/

		if($lineNumber > 0){
				echo '<br /><br />';
				echo 'Declared in: <b><font color="orange">' . $fileName . '</font></b><br />';
				echo 'Line: <b><font color="orange">#' . $lineNumber . '</font></b><br />';
				}

		echo '<pre>';
				var_dump($str);
		echo '</pre>';

		echo '<code><pre>' . var_export($str, TRUE) . '</code></tt>';

		die;
}
/*
function __autoload($className){
		include './_class/' . $className . '.class.php';
}
*/







#formating functions
function myHeader($fileName){


		echo '<!doctype html>
		<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
		<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
		<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

				<title>"' .  basename($fileName) . '"</title>
				<meta name="description" content="">
				<meta name="author" content="">

				<meta name="viewport" content="width=device-width">

				<link rel="stylesheet" href="./_css/style.css">
		<body>
				<div class="outerWrapper">
				<div id="header-container">
						<header class="wrapper clearfix">
								<h1 id="title">Object-Oriented Programming with PHP Demo</h1>
						</header>
				</div>
				<div id="main-container">
						<div id="main" class="wrapper clearfix">

					<article>';

}

function myFooter(){
		echo '</article>

				</div> <!-- #main -->

				<div style="height:1em;">&nbsp;</div>
		</div> <!-- #main-container -->
		<div class="push"></div>
		</div><!-- #outerWrapper -->


		<div id="footer-container">
				<footer class="wrapper">
						<h3></h3>
				</footer>
		</div>

</body>
</html>';

}
