<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Media';
$description = 'Your Media';
include("partials/header.php");
?>
<section class="review">
  <h1>Your Media</h1>
    <div class="reviews center">
      <div class="col">
        <img src="content/imgs/blogIcon.png" alt="Karishma Chera Blog">
      </div>
      <div class="col">
        <a href="blogs.php"><h2>Blogs</h2></a>
      </div>
    </div>
    <div class="reviews center">
      <div class="col">
        <img src="content/imgs/podIcon.png" alt="Karishma Chera Podcast">
      </div>
      <div class="col">
        <a href="podcasts.php"><h2>Podcasts</h2></a>
      </div>
    </div>
    <div class="reviews center">
      <div class="col">
        <img src="content/imgs/videoIcon.png" alt="Karishma Chera Video">
      </div>
      <div class="col">
        <a href="videos.php"><h2>Videos</h2></a>
      </div>
    </div>
  </section>
</section>
<?php
include("partials/footer.php");
?>