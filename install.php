<!DOCTYPE html>
<html>
<head>
<title>Install PHPWebChat</title>
</head>
<body>
<?php 

include 'config.php';
include 'mysql.php';

if(!empty($_POST['makeusername']) && !empty($_POST['makepassword'])) {
	if($_POST['makeusername'] == $admin && $_POST['makepassword'] == $adminpass) {
		$sql = "CREATE TABLE Users
		(
		Username varchar(255),
		Password varchar(255)
		)";
		$make = mysql_query($sql);
		if(!$make) {
			die("Sorry, couldn't create the table. Please try again.");
		}
		echo "Success! Databases have been created and users can now register!<br />";
		$adminpassword = sha1($adminpass);
		$newsql = "INSERT INTO Users (Username, Password) VALUES ('$admin', '$adminpassword')";
		$addadmin = mysql_query($newsql);
		if(!$addadmin) {
			die("Sorry! Couldn't put the admin into the database!");
		}
		echo "Admin has been added to the table!";
	}
}
else {
?>
	<form method="post" action="">
		<input type="text" name="makeusername" placeholder="Username"><br />
		<input type="password" name="makepassword" placeholder="Password"><br />
		<input type="submit" value="Submit"><br />
	</form>
<?php
}
?>
</body>
</html>