<?php
	//get the html returned from the following url
	$html = file_get_contents('http://pokemondb.net/evolution');

	$pokemon_doc = new DOMDocument();

	//disable libxml errors
	libxml_use_internal_errors(TRUE);

	//if any html is actually returned
	if(!empty($html)){ //process

			$pokemon_doc->loadHTML($html);

			//remove errors for yucky html
			libxml_clear_errors();

			$pokemon_xpath = new DOMXPath($pokemon_doc);

			//get all the h2's with an id
			$pokemon_row = $pokemon_xpath->query('//h2[@id]');

			if($pokemon_row->length > 0){
					foreach($pokemon_row as $row){
							echo $row->nodeValue . "<br/>";
					}
			}
	}
