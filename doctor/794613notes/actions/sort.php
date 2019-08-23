<?php
include("../classes/main.php");
include("verifyuser.php");
$value = $_POST['sort'];
header("location: ../dash.php?$sort=$value")
?>