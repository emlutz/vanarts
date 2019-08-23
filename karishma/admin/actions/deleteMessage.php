<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM message WHERE id=\"{$_GET["orderId"]}\"");
header("location: ../messages.php?msg&verb=deleted");
?>