<?php
	//Another simple plugin. This plugin lets you view what the command prefix is. This command doesn't use the prefix,
	//so whenever someone says "prefix" it runs.
	$past = file_get_contents($file);
	if($sentMessage == "prefix") {
		$finalMessage = $systemName."The current prefix is: ".$prefix.".";
		$new = file_put_contents($file, $past."\n".$finalMessage);
	}
?>
