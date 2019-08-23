<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Order VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
$order = Db::connect()->dataArray("SELECT * FROM invoice WHERE id='".$_GET["orderId"]."'")[0];
$orderedProducts = Db::connect()->dataArray("SELECT invoice_product.*, product.name FROM invoice_product LEFT JOIN product ON product.id = invoice_product.productId WHERE invoiceId='".$_GET["orderId"]."'");
if(!$order) {
  echo "Sorry, order does not exist.";
  die;
}
?>
<section class="invoices">
  <a href="orders.php" class=""><i class="fas fa-arrow-alt-circle-left"></i> Back to All Orders</a>
  <h1>Invoice #<?=$order["invoiceNumber"]?></h1>
  <div class="invoice">
    <p><strong>Date Ordered: </strong><?=$order["dateOrdered"]?></p>
    <p><strong>Name: </strong><?=$order["name"]?></p>
    <p><strong>Price: </strong><?=$order["price"]?></p>
    <p><strong>Email: </strong><?=$order["email"]?></p>
    <p><strong>Fullfilled: </strong><?=$order["fullfilled"]?></p>
  </div>
  <h2>Products Ordered</h2>
  <div class="invoiceProducts">
  <?php
  foreach($orderedProducts as $product) {
  ?>
    <ul class="invoice">
      <li>
        <p><strong><?=$product["name"]?></strong></p>
        <p><strong>Price:</strong> $<?=$product["price"]?></p>
        <p><strong>Quantity:</strong> <?=$product["qty"]?></p>
      </li>
    </ul>
  <?php
  }
  ?>
  </div>
</section>
<?php
include("partials/footer.php");
?>