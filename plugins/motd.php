<?php
	//One of the simplest plugins is this one. This writes the message of the day to to chat file for all to see.
	if($themessage == $prefix."motd") {
		$new = file_put_contents($file, $past."\n".$motd);
	}
?>
