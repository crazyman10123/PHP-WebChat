<?php
	//Similar to motd and rules but with the version.
	if($sentMessage == $prefix."version") {
		$finalMessage = $systemName." ".$version;
		$new = file_put_contents($file, $past."\n".$finalMessage);
	}
?>
