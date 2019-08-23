<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM review WHERE id=\"{$_GET["orderId"]}\"");
header("location: ".$_SERVER['HTTP_REFERER'].'?add&verb=deleted');
?>