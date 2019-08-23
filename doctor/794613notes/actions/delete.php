<?php
include("../classes/main.php");
include("verifyuser.php");
Database::connect()->data("DELETE FROM messages WHERE id=\"{$_GET[msg]}\"");
header('location: ../dash.php?deleted');
?>