<?php
	include("../classes/Db.php");
	$user = $_POST['id'];
	$pass = $_POST['password'];
	$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
$newPassword = Db::connect()->data("UPDATE user SET password=\"{$hashedPass}\" WHERE id=\"{$user}\"");
	$verb="updated";
	header("location: ../profile.php?msg&verb=$verb");
?>