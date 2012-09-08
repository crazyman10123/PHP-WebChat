<?php
	//Similar to the motd plugin but for rules.
	if($themessage == $prefix."rules") {
		$new = file_put_contents($file, $past."\n".$rules);
	}
?>
