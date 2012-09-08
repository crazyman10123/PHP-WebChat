<?php
	//This is the help plugin. It lists all of the commands.

	//This gets the chat history again. Some plugins may require this to function properly.
	$past = file_get_contents($file);

	//Check if the sent message is the command. This plugin doesn't require arguments so it does not use explode().
	if($sentMessage == $prefix."help") {

		//Initiate the script if it is the command.
		//The foreach() is used here to read the list from the configuration file.
		//This allows ease of access to a list of commands. Plugin commands should have the same filename as the
		//command that they allow.
		foreach($plugins as &$command) {
			//Write the list of commands to a variable.
			if(!empty($commands)) {
				$commands = $commands.", ".$command;
			}
			else {
				$commands = $command;
			}
		}

		//And finally, set the final variables to allow the system to work.
		$message = $systemName."Available commands are: ".$commands.".";
		$new = file_put_contents($file, $past."\n".$message);
	}
?>
