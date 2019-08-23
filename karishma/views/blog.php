<section class="enter">
  <div class="overlay">
    <h1>Welcome to my blog!<a href="index.php?controller=pages&action=experience" class="btnMain">See What Else I've Created Lately</a></h1>
  </div>
</section>
<section class="feature">
  <div class="overlay">
    <div class="col">
      <?php
      foreach($this->blog as $blog) {
      ?>
      <article class="half">
        <h2><?=$blog["title"]?></h2>
        <h4><?=$blog["subHeading"]?></h4>
        <div class="contain">
          <img src="imgs/<?=$blog["image"]?>" alt="Karishma Chera online content creator Vancouver BC comedy interview humour">
        </div>
        <a href="index.php?controller=pages&action=post&contentId=<?=$blog["id"]?>" class="btnTwo">Read More..</a>
      </article>
      <?php
      }
      ?>
    </div>
  </div>
</section>
<section class="more">
  <div class="overlay">
    <h2>See More</h2>
    <a href="index.php?controller=pages&action=media" class="icon"><img src="imgs/videoIcon.png" alt="Karishma Chera video icon"><h5>Videos</h5></a>
    <a href="index.php?controller=pages&action=media" class="icon"><img src="imgs/podIcon.png" alt="Karishma Chera podcast icon"><h5>Podcasts</h5></a>
    <a href="index.php?controller=pages&action=blog" class="icon"><img src="imgs/blogIcon.png" alt="Karishma Chera blog icon"><h5>Blogs</h5></a>
  </div>
</section>