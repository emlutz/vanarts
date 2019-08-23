<?php
include("partials/header.php");
?>
<main class="actionMain">
  <div id="hero" class="shortHero" data-image="<?=$arrPageDetails['strHeadPhoto']?>">
    <h1><?=$arrPageDetails["strMainHeading"]?></h1>
    <h2><?=$arrPageDetails["strTagline"]?></h2>
  </div>

  <section class="donate">
    <div class="optionCopy">
      <div class="option">
        <a href="#" class="donatePop"><h3>Donate</h3></a>
        <p><?=$arrPageDetails["strMainContent"]?></p>
      </div>
      <div class="option">
        <a href="#" class="donatePop"><h3>Volunteer</h3></a>
        <p><?=$arrPageDetails["strSubHeading"]?></p>
      </div>
      <div class="option">
        <a href="#" class="donatePop"><h3>Fundraise</h3></a>
        <p><?=$arrPageDetails["strSubContent"]?></p>
      </div>
    </div>
    <div class="optionImage">
      <img src="assets/<?=$arrPageDetails["strSubPhoto"]?>" alt="<?=$arrPageDetails["strSubAlt"]?>">
    </div>
  </section>
</main>
<script src="templates/js/main.js"></script>
<?php
include("partials/footer.php");
?>