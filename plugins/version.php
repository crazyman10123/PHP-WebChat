<?php
	//Similar to motd and rules but with the version.
	if($themessage == $prefix."version") {
		$message = $systemName." ".$version;
		$new = file_put_contents($file, $past."\n".$message);
	}
?>
