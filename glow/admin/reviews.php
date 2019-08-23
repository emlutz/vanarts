<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Reviews VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
$pageNum = (isset($_GET["pageNum"]))?$_GET["pageNum"]:1;
$ordersPerPage = 10;
$startCount = ($pageNum*$ordersPerPage)-$ordersPerPage;
$sort = (isset($_GET["sort"]))?$_GET["sort"]:'id';
$ordersAll = Db::connect()->dataArray("SELECT * FROM review");
$ordersLimit = Db::connect()->dataArray("SELECT review.*, product.name FROM review LEFT JOIN product ON review.productId = product.id ORDER BY $sort DESC LIMIT $startCount, $ordersPerPage");
?>
<section class="review">
  <h1>Health Glow Product Reviews</h1>
  <p class="pending right"><i class="far fa-clock"></i> Not Published</p>
  <p class="valid right"><i class="fas fa-check"></i> Published</p>
  <p class="center">
  <?php
  if(isset($_GET['add'])) {
    echo "&mdash; Review has been $verb &mdash;";
  }
  ?>
  </p>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='reviews.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
  <?php
  foreach($ordersLimit as $order) {
    $icon = ($order["approved"]) ? "<span class=\"valid\"><i class=\"fas fa-check\"></i></span>" : "<span class=\"pending\"><i class=\"far fa-clock\"></i></span>";    
  ?>
  <div class="reviews">
    <div class="col">
      <p><strong>Review Id:</strong> <?=$order['id']?></p>
      <p><strong>Product:</strong> <?=$order["name"]?> (Id: <?=$order["productId"]?></p>
      <p><strong>Recommend?</strong> <?=$order["recommend"]?></p>
      <p><strong>Date:</strong> <?=$order["date"]?></p>
    </div>
    <div class="col">
      <div><strong>Comment:</strong> <?=$order["review"]?></div>
      <div ></div>
      <div class="delete">
      </div>
    </div>
    <div class="col">
      <?=$icon?>
      <a href="actions/updateReview.php?orderId=<?=$order["id"]?>&orderStatus=<?=$order["approved"]?>" class="btn">Update</a>
        <a href="actions/deleteReview.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
    </div>
  </div>
  <?php
  }
  ?>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='reviews.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
</section>
<?php
include("partials/footer.php");
?>