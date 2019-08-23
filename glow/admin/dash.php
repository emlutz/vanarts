<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Dashboard VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
$products = Db::connect()->data("SELECT * FROM product WHERE qty = 0");
$orders = Db::connect()->data("SELECT * FROM invoice WHERE fullfilled = 0");
$reviews = Db::connect()->data("SELECT * FROM review WHERE approved = 0");
include("partials/header.php");
?>
<section class="dash">
  <div>
    <p><?=$products->num_rows?> sold out products.</p>
    <a href="products.php" class="btn"><i class="fas fa-dolly-flatbed"></i> Manage Products</a>
  </div>
  <div>
    <p><?=$orders->num_rows?> unfullfilled orders.</p>
    <a href="orders.php" class="btn"><i class="fas fa-file-invoice-dollar"></i> Manage Orders</a>
  </div>
  <div>
    <p><?=$reviews->num_rows?> unpublished reviews.</p>
    <a href="reviews.php" class="btn"><i class="fas fa-comments"></i> Manage Reviews</a>
  </div>
</section>
<?php
include("partials/footer.php");
?>