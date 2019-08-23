<section class="section">
  <div class="overlay">
    <h1>My Latest Videos</h1>
    <div class="cols">
    <?php
    foreach($this->video as $video) {
    ?>
      <div class="media">
        <h2><?=$video["title"]?></h2>
        <video src="<?=$video["link"]?>" controls></video>
        <p><?=$video["description"]?></p>
      </div>
    <?php
    }
    ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="overlay">
    <h1>My Latest Podcasts</h1>
    <div class="cols">
    <?php
    foreach($this->podcast as $podcast) {
    ?>
      <div class="media">
        <h2><?=$podcast["title"]?></h2>
        <div class="contain">
          <img src="imgs/<?=$podcast["image"]?>" alt="<?=$podcast["description"]?>">
        </div>
        <audio src="<?=$podcast["link"]?>" controls></audio>
        <p><?=$podcast["description"]?></p>
      </div>
    <?php
    }
    ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="overlay">
    <div class="cols">
      <a href="index.php?controller=pages&action=contact" class="btnTwo">Get In Touch With Me</a>
      <a href="index.php?controller=pages&action=experience" class="btnMain">See What I've Been Up To</a>
    </div>
  </div>
</section>