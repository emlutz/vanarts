<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM product WHERE id=\"{$_GET["orderId"]}\"");
Db::connect()->data("DELETE FROM product_categpry WHERE productId=\"{$_GET["orderId"]}\"");
header("location: ../products.php?msg&verb=deleted")
?>