<?php

?>
<section class="enter">
  <div class="overlay">
    <h1>Hi, I'm <span class="copyHighlight">Karishma</span>. I create online content. <a href="index.php?controller=pages&action=experience" class="btnMain">See What I've Been Up To</a></h1>
  </div>
</section>
<section class="feature">
  <div class="overlay">
    <h2>Comedy. Creativity. Content.</h2>
    <p>I have and will do anything for a laugh. Check out my latest attempt!</p>
    <?php
    foreach($this->featured as $content) {
    ?>
    <article>
      <h3><?=$content->title?></h3>
      <video src="<?=$content->link?>" controls></video>
      <p><?=$content->description?></p>
    </article>
    <?php
    }
    ?>
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