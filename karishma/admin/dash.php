<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Dashboard';
$description = 'The Dashboard';
$products = Db::connect()->data("SELECT * FROM product WHERE qty = 0");
$orders = Db::connect()->data("SELECT * FROM invoice WHERE fullfilled = 0");
$reviews = Db::connect()->data("SELECT * FROM review WHERE approved = 0");
include("partials/header.php");
?>
<section class="dash">
  <h1>Hi, Karishma! Welcome back.</h1>
</section>
<?php
include("partials/footer.php");
?>