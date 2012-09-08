<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="5;URL=#bottom">
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
$file = "chat.txt";
$past = file_get_contents($file);
$current = explode("\n", $past);
foreach($current as &$message) {
	echo $message."<br />";
}
?>
<div id="bottom">
</div>
</body>
</html>
