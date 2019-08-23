<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM invoice WHERE id=\"{$_GET["orderId"]}\"");
header("location: ".$_SERVER['HTTP_REFERER'].'?msg&verb=deleted');
?>