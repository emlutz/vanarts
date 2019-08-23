<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Videos';
$description = 'Edit Videos';
$blogs = Db::connect()->dataArray("SELECT * FROM video");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Videos</h1>
  <a href="viewVideo.php" class="btn"><i class="fas fa-plus"></i> Add New Video</a>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Video has been $verb &mdash;";
  }
  ?>
  </p>
  <?php
    foreach($blogs as $order) {
      ?>
      <div class="reviews center">
        <div class="col">
          <h2><strong><?=$order["title"]?></strong></h2>
        </div>
        <div class="col center">
            <a href="viewVideo.php?orderId=<?=$order["id"]?>"><i class="fas fa-edit"></i> Edit</a>
        </div>
        <div class="col center">
          <a href="actions/deleteVideo.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
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