<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Podcasts';
$description = 'Edit Podcasts';
$blogs = Db::connect()->dataArray("SELECT * FROM podcast");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Podcasts</h1>
  <a href="viewPodcast.php" class="btn"><i class="fas fa-plus"></i> Add New Podcast</a>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Podcast has been $verb &mdash;";
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
            <a href="viewPodcast.php?orderId=<?=$order["id"]?>"><i class="fas fa-edit"></i> Edit</a>
        </div>
        <div class="col center">
          <a href="actions/deletePodcast.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
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