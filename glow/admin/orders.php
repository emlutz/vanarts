<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Orders VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
$pageNum = (isset($_GET["pageNum"]))?$_GET["pageNum"]:1;
$ordersPerPage = 10;
$startCount = ($pageNum*$ordersPerPage)-$ordersPerPage;
$sort = (isset($_GET["sort"]))?$_GET["sort"]:'id';
$ordersAll = Db::connect()->dataArray("SELECT * FROM invoice");
$ordersLimit = Db::connect()->dataArray("SELECT * FROM invoice  ORDER BY $sort DESC LIMIT $startCount, $ordersPerPage");
?>
<section class="review">
  <h1>Health Glow Order Invoices</h1>
  <form action="actions/findOrder.php" method="post">
    <p>Find Invoice #</p>
    <input type="text" name="orderFind" placeholder="Invoice Number">
    <input type="submit" name="submit" >
  </form>
  <p class="valid right"><i class="fas fa-check"></i> Order Fullfilled</p>
  <p class="invalid right"><i class="fas fa-times"></i> Order To Be Fullfilled</p>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Order is $verb &mdash;";
  }
  ?>
  </p>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='orders.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
  <?php
    foreach($ordersLimit as $order) {
      $icon = ($order["fullfilled"]) ? "<span class=\"valid\"><i class=\"fas fa-check\"></i></span>" : "<span class=\"invalid\"><i class=\"fas fa-times\"></i></span>";
      ?>
      <div class="reviews">
        <div class="col">
          <p><strong>Id:</strong> <?=$order['id']?></p>
          <p><strong>Invoice Number:</strong> <?=$order["invoiceNumber"]?></p>
          <p><strong>Date:</strong> <?=$order["dateOrdered"]?></p>
          <a href="viewOrder.php?orderId=<?=$order["id"]?>"><i class="far fa-eye"></i> See Details</a>
        </div>
        <div class="col">
          <p><strong>Name:</strong> <?=$order["name"]?></p>
          <p><strong>Email:</strong> <?=$order["email"]?></p>
          <p><strong>Price:</strong> <?=$order["price"]?></p>
        </div>
        <div class="col">
          <?=$icon?>
          <a href="actions/updateOrder.php?orderId=<?=$order["id"]?>&orderStatus=<?=$order["fullfilled"]?>" class="btn">Update</a>
          <a href="actions/deleteOrder.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
      </div>
      <?php
    }
    ?>
  </section>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='orders.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
</section>
<?php
include("partials/footer.php");
?>