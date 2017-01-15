<?php
	//get the html for this weeks comic releases from comiclist.com
	$html = file_get_contents('http://www.comiclist.com/index.php/newreleases/this-week');



	$myData = new DOMDocument();

	//disable libxml errors
	libxml_use_internal_errors(TRUE);

	//if any html is actually returned
	if(!empty($html)){ //process

		$myData->loadHTML($html);

		//remove errors for yucky html
		libxml_clear_errors('<br>');

		$myData_xpath = new DOMXPath($myData);





		//echo __LINE__ . '<br /><br />';
		//var_dump ($myData);
		//die;

		//get all the h2's with an id
		//$myData_row = $myData_xpath->query('//h2[@id]');

		//get all publishers (u's)
		//$myData_row = $myData_xpath->query('/html/body/div[2]/div/div[1]/div/div[3]/div[2]/p/b/u');

		//get all the prices!
		$myData_row = $myData_xpath->query('/html/body/div[2]/div/div[1]/div/div[3]/div[2]/p[46]/text()');

		if($myData_row->length > 0){
			foreach($myData_row as $row){
				echo $row->nodeValue . "<br/>";
			}
		}
	}
