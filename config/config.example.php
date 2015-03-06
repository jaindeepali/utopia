<?php
error_reporting(E_ALL);
ini_set('display_error',1);
$username = "";
$password = "";
$hostname = "";
$db = "";

$link = mysqli_connect ($hostname, $username, $password, $db);
if(!$link) {
	die();
}

?>
