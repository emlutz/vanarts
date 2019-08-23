<section class="hero">
  <div class="hero">
    <div class="heading">
      <h2>Capture Nature's Glow With <span>Health Glow</span></h2>
      <p>Natural, eco friendly bath & beauty products made from fresh ingredients sourced in and around Vancouver, BC. Health Glow products are free of excesses that dull your glow like added preservatives, colouring & plastic packaging. Thoughtfully produced goods for effortless daily rituals.</p>
    </div>
    <div class="categories">
      <?php
      foreach($this->cat as $cat) {
      ?>
      <div class="category">
        <a href="index.php?controller=pages&action=productCat&cat=<?=$cat["id"]?>"><img src="assets/<?=$cat["image"]?>" alt="Health Glow Products"><span><?=$cat["name"]?></span></a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>