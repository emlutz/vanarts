<?php
include("../classes/Db.php");
if ($_GET["orderStatus"]==0) {
  Db::connect()->data("UPDATE invoice SET fullfilled = 1 WHERE id='".$_GET["orderId"]."'");
  header("location: ".$_SERVER['HTTP_REFERER'].'?msg&verb=fullfilled');
} else if ($_GET["orderStatus"]==1) {
  Db::connect()->data("UPDATE invoice SET fullfilled = 0 WHERE id='".$_GET["orderId"]."'");
  header("location: ".$_SERVER['HTTP_REFERER'].'?msg&verb=not+fullfilled');
}
?>