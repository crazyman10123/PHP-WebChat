<?php
//Initiate the session. Check if session username and the post username are set.
session_start();
if(!empty($_POST['username']) && empty($_SESSION['username'])) {
	//This sets the session username. Username will disappear when the browser is closed.
	$_SESSION['username'] = $_POST['username'];
}
?>
<!--Here's your HTML stuff.-->
<!DOCTYPE html>
<html>
<head>
<title>
Pick Your Title
</title>
<!--I didn't include a CSS layout in this. If you want you can style it yourself.-->
</head>
<body>
<?php
//If the session username isn't set, don't show the chat but show the form that lets them set their username.
if(empty($_SESSION['username'])) {
?>
<form method="post" action="">
<input type="text" name="username" placeholder="Username" autofocus="autofocus" class="input"><br />
<input type="submit" value="Submit" class="button"><br />
</form>
<?php
}

//If the session username is set, include the system to allow it to process the messages.
if(!empty($_SESSION['username'])) {
	include 'system.php';
//And show the chat as well.
?>
<iframe src="chat.php#bottom" width="400px" height="200px"></iframe>
<div id="bottom">
<form method="post" action="">
<input type="text" size="50" placeholder="Message" name="message" autocomplete="off" autofocus="autofocus" class="input"><br />
<input type="submit" value="Submit" class="button">
</form>
</div>
<?php
}
//That's all there really is to this part of the script.
?>
</body>
</html>
