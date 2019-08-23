<?php
	include("../classes/main.php");
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
	$newUser = Database::connect()->data("INSERT INTO user (strEmail, strPassword) VALUES('$user', '$hashedPass')");
	return $newUser;
	header("location: ../dash.php");
?>