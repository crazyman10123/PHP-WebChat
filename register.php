<!DOCTYPE html>
<html>
<head>
<title>
Pick Your Title
</title>
</head>
<body>
<?php
include 'mysql.php';

if(empty($_POST['regusername']) or empty($_POST['regpassword'])) {
?>
<form method="post" action="">
<input type="text" name="regusername" placeholder="Username" class="input"><br />
<input type="password" name="regpassword" placeholder="Password"><br />
<input type="submit" value="Submit" class="button"><br />
</form>
<a href="index.php">Already registered?</a><br />
<?php
}
else {
	$username = mysql_real_escape_string($_POST['regusername']);
	$password = sha1($_POST['regpassword']);
	$sql = "SELECT * FROM Users WHERE Username='$username'";
	$check = mysql_query($sql);
	if(!$check) {
		die("Something went wrong!");
	}
	else {
		$array = mysql_fetch_array($check);
		if($array['Username'] == $username) {
			echo 'Sorry, that username has already been taken!';
		}
		else {
			$make = mysql_query("INSERT INTO Users (Username, Password) VALUES ('$username', '$password')");
			if(!$make) {
				die("Something went wrong!");
			}
			echo 'Successfully registered! You can now log in!';
		}
	}
}
?>
</body>
</html>