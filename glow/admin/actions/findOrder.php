<?php
include("../classes/Db.php");
Db::connect()->cleanPost();
$orderId = Db::connect()->dataArray("SELECT * FROM invoice WHERE invoiceNumber = '".$_POST["orderFind"]."'")[0];
header('location: ../viewOrder.php?orderId='.$orderId["id"]);
?>