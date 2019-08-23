<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Categories VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
$pageNum = (isset($_GET["pageNum"]))?$_GET["pageNum"]:1;
$ordersPerPage = 10;
$startCount = ($pageNum*$ordersPerPage)-$ordersPerPage;
$sort = (isset($_GET["sort"]))?$_GET["sort"]:'id';
$ordersAll = Db::connect()->dataArray("SELECT * FROM category");
$ordersLimit = Db::connect()->dataArray("SELECT * FROM category  ORDER BY $sort LIMIT $startCount, $ordersPerPage");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Health Glow Product Categories</h1>
  <a href="viewCategory.php" class="btn">Add New Category</a>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Category has been $verb &mdash;";
  }
  ?>
  </p>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='categories.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
  <?php
    foreach($ordersLimit as $order) {
      ?>
      <div class="reviews center">
        <div class="col">
          <h4><strong>Id:</strong> <?=$order['id']?></h4>
          <h2><strong>Name:</strong> <?=$order["name"]?></h2>
        </div>
        <div class="col">
          <p><strong>Banner Image:</strong> <img src="../assets/<?=$order["image"]?>" alt=""></p>
        </div>
        <div class="col">
          <p><strong>Description:</strong> <?=$order["description"]?></p>
        </div>
        <div class="col center">
            <a href="actions/deleteCategory.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
            <a href="viewCategory.php?orderId=<?=$order["id"]?>"><i class="fas fa-edit"></i> Edit</a>
        </div>
      </div>
      <?php
    }
    ?>
  </section>
</section>
<?php
include("partials/footer.php");
?>