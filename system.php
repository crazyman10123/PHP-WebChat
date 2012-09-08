<?php
//Include the configuration file.
include "config.php";

//Get the previous messages.
$past = file_get_contents($file);

//Read the ban list.
$bans = file_get_contents('bans.txt');

//Check if the current user is on the ban list, if they aren't, let them talk.
if(strpos($bans, $_SESSION['username']) == false) {

	//Make sure the message is NOT empty so that a blank message isn't sent.
	if(!empty($_POST['message'])) {

		//Strip the sent message of extra slashes.
		$sentMessage = stripslashes(strip_tags($_POST['message'],"<a><p><strong><img>"));

		//Combine the sent message and the username into the final message being sent.
		$finalMessage =  $_SESSION['username'].": ".$themessage;

		//Check if the message and make sure that it isn't the clear command.
		if($sentMessage != $prefix."clear") {
			if(!empty($past)) {
				$new = file_put_contents($file, $past."\n".$finalMessage);
			}
			else {
				$new = file_put_contents($file, $finalMessage);
			}
			if(!$new) {
				die("Something went wrong!");
			}
		}

		//If it is the clear command, make sure the sender is an admin.
		if($sentMessage == $prefix."clear" && $_SESSION['username'] == $admin) {
			$new = file_put_contents($file, $motd);
		}
	
		//Include the plugin manager file.
		include 'pluginManager.php';

	}

}

else {

	echo "You're banned from talking!<br />";

}
?>
