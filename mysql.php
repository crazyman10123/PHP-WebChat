<?php
include 'config.php';
$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);
if(!$con) {
	die("Sorry, couldn't connect to the database.");
}
mysql_select_db($mysql_database, $con);
?>