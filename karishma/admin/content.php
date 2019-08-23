<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Content';
$description = 'Edit Content';
$globals = Db::connect()->dataArray("SELECT * FROM section");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Content</h1>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Section has been $verb &mdash;";
  }
  ?>
  </p>
  <?php
    foreach($globals as $order) {
      ?>
      <div class="reviews center">
        <div class="col">
          <h2><strong><?=$order["heading"]?></strong></h2>
        </div>
        <div class="col center">
            <a href="viewContent.php?orderId=<?=$order["id"]?>"><i class="fas fa-edit"></i> Edit</a>
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