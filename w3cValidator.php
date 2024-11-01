<?php

// get the URL that should be validated
	$urlToValidate = urlencode($_POST["url"]);
// Save the complete W3C validation page into a variable, using cURL
	$ch = curl_init();
	$timeout = 5; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, 'http://validator.w3.org/check?uri='.$urlToValidate);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch);
	curl_close($ch);

// Remove line wraps / whitespaces - makes it easier to crawl the HTML
	$file_contents = str_replace(array("\n", "\r", "\t", " "), '', $file_contents);
	
// check, if site is valid or not
	// site is supposed to be valid, if the title attribute contains [Valid]
	$isValid = substr_count($file_contents, "<title>[Valid]");
	if($isValid == 1) { $isValid = "true"; }
		else { $isValid = "false"; }
	
	echo "".$isValid;
	
?>