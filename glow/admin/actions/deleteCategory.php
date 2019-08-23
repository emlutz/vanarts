<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM category WHERE id=\"{$_GET["orderId"]}\"");
header("location: ../categories.php?msg&verb=deleted")
?>