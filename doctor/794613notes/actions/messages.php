<?php
include("../classes/main.php");
$messages = Database::connect()->data("SELECT * FROM messages");
?>