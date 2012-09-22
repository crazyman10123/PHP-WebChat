<?php
session_start();
include 'mysql.php';
if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = sha1($_POST['password']);
	$sql = "SELECT * FROM Users WHERE Username='$username'";
	$doSql = mysql_query($sql);
	if(!$doSql) {
		die("User not found!");
	}
	$result = mysql_fetch_array($doSql);
	if($result['Password'] == $password) {
		$_SESSION['username'] = $username;
?>
<!DOCTYPE html>
<head>
<title>
Log In
</title>
<meta http-equiv="refresh" content="5;url=index.php">
</head>
<body>
<?php
		echo 'Login successful!';
	}
}
?>
</body>
</html>