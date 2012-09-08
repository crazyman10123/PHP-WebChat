<?php
	//This is the isup plugin. This lets users check if a website is up.

	//This is another example of a plugin that needs to use the $past variable and the explode() function.
	$past = file_get_contents($file);

	//This is used to identify the command and the arguments given to the command.
	$check = explode(" ", $sentMessage);

	//Checks if the first part of the array is the command. If so, initiate the script.
	if($check[0] == $prefix."isup") {
		if (isDomainAvailible($check[1]) && !strstr($check[1], "localhost") && !strstr($check[1], "192.168.") && !strstr($check[1], "127.0.0.1")) {
			$finalMessage = $check[1]." is up and running!";
		} else {
			$finalMessage = $check[1]." is currently down. Sorry!";
		}
		$new = file_put_contents($file, $past."\n".$finalMessage);
	}

	function isDomainAvailible($domain) {
	 	//check, if a valid url is provided
		if(!filter_var($domain, FILTER_VALIDATE_URL) && !filter_var("http://".$domain, FILTER_VALIDATE_URL)) {
			return false;
		}
	
		//initialize curl
		$curlInit = curl_init($domain);
		curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,5);
		curl_setopt($curlInit,CURLOPT_HEADER,true);
		curl_setopt($curlInit,CURLOPT_NOBODY,true);
		curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
	
		//get answer
		$response = curl_exec($curlInit);
		
		curl_close($curlInit);
	
		if ($response) return true;
	
		return false;
	}
?>
