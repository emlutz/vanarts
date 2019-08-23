<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Blogs';
$description = 'Edit Blogs';
$blogs = Db::connect()->dataArray("SELECT * FROM blog");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Blogs</h1>
  <a href="viewBlog.php" class="btn"><i class="fas fa-plus"></i> Add New Blog</a>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Blog has been $verb &mdash;";
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
            <a href="viewBlog.php?orderId=<?=$order["id"]?>"><i class="fas fa-edit"></i> Edit</a>
        </div>
        <div class="col center">
          <a href="actions/deleteBlog.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
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