<?php
	//This is a basic plugin. You can use this to learn how to make a plugin.

	//Checks if the sent message is the command. This command doesn't use an argument so explode() is not used.
	if($sentMessage == $prefix."hello") {

		//Set the required variables to run the script.

		//The $finalMessage variable is the message that will be sent to the server.
		$finalMessage = $systemName."Hello ".$_SESSION['username'];

		//The $new variable is just used in case an error occurs and you want to check if this part of the script
		//is the problem.
		$new = file_put_contents($file, $past."\n".$message);
	}
?>
