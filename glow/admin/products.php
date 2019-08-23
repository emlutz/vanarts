<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Products VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
$pageNum = (isset($_GET["pageNum"]))?$_GET["pageNum"]:1;
$ordersPerPage = 10;
$startCount = ($pageNum*$ordersPerPage)-$ordersPerPage;
$sort = (isset($_GET["sort"]))?$_GET["sort"]:'id';
$ordersAll = Db::connect()->dataArray("SELECT * FROM product");
$ordersLimit = Db::connect()->dataArray("SELECT * FROM product  ORDER BY $sort LIMIT $startCount, $ordersPerPage");
?>
<section class="products">
  <h1>Health Glow Products</h1>
  <a href="categories.php" class="btn"><i class="fas fa-sitemap"></i> Manage Product Categories</a>
  <a href="viewProduct.php" class="btn"><i class="fas fa-plus"></i> Add New Product</a>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Product has been $verb &mdash;";
  }
  ?>
  </p>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='products.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
  <div class="grid">
  <?php
    foreach($ordersLimit as $order) {
      ?>
      <div class="product">
        <div class="img">
          <h2><?=$order["name"]?></h2>
          <img src="../assets/<?=$order["coverImg"]?>" alt="product img">
        </div>
        <div class="content">
          <p><strong>ID:</strong><?=$order['id']?></p>
          <p><strong>Price:</strong><?=$order["price"]?></p>
          <p><strong>Quantity:</strong><?=$order["qty"]?></p>
          <p><strong>Featured:</strong><?=$order["featured"]?></p>
          <div class="edit">
            <a href="actions/deleteProduct.php?orderId=<?=$order["id"]?>" class="btn"><i class="fas fa-trash-alt"></i></a>
            <a href="viewProduct.php?orderId=<?=$order["id"]?>" class="btn"><i class="far fa-eye"></i></a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  </section>
  <div class="count">
    <p>Go To Page
      <?php
      $pageCount = ceil(count($ordersAll)/$ordersPerPage);
      for($i=1;$i<=$pageCount;$i++) {
        echo "<a href='products.php?pageNum=$i'>".$i."</a>";
      }
      ?>
    </p>
  </div>
</section>
<?php
include("partials/footer.php");
?>