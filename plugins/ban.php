<?php
	//This is the file that allows banning of users.

	//This explodes the sent message into an array and checks if the command has been used.
	$explode = explode(" ", $sentMessage);

	//If the command has been used, initiate the script.
	if($explode[0] == $prefix."ban") {
		
		//Make sure the user is an admin before allowing a ban.
		if($_SESSION['username'] == $admin) {

			//Set required variables to allow script to function.
			$finalMessage = $systemName.$explode[1]." has been banned by ".$_SESSION['username'];

			$new = file_put_contents($file, $past."\n".$finalMessage);

			$ban = file_get_contents("bans.txt");

			$newban = $ban."\n".$explode[1];

			$setban = file_put_contents("bans.txt", $newban);

		}
		else {
			
			//If the user isn't an admin, it alerts everyone that they tried to use an administrative command.
			$finalMessage = $systemName."Sorry ".$_SESSION['username'].", you can't use that command.";

			$new = file_put_contents($file, $past."\n".$finalMessage);

		}

	}
?>
