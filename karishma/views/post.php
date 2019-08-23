<section class="feature">
  <div class="overlay">
    <article>
      <h1><?=$this->blog->title?></h1>
      <img src="imgs/<?=$this->blog->image?>" alt="<?=$this->blog->sub?>">
      <h4><?=$this->blog->sub?></h4>
      <p><?=$this->blog->body?></p>
      <a href="index.php?controller=pages&action=blog" class="btnMain">Back To All Blogs</a>
    </article>
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