<?php
include("partials/header.php");
?>
<main class="homeMain">
  <div id="hero" data-image="<?=$arrPageDetails['strHeadPhoto']?>">
    <h1><?=$arrPageDetails["strMainHeading"]?></h1>
    <h2><?=$arrPageDetails["strTagline"]?></h2>
    <div class="link">
      <?php ////////////Get link to contact page
      getNavLinks(4);
      ?>
    </div>
  </div>

  <section>
    <h2><?=$arrPageDetails["strSubHeading"]?></h2>
    <div class="content">
      <div class="featureImage">
        <img src="assets/<?=$arrPageDetails["strSubPhoto"]?>" alt="<?=$arrPageDetails["strSubAlt"]?>">
        <div class="link">
          <?php ////////////Get link to get involved page
          getNavLinks(3);
          ?>
        </div>
      </div>
      <div class="featureCopy">
        <p><?=$arrPageDetails["strMainContent"]?></p>
        <p><?=$arrPageDetails["strSubContent"]?></p>
      </div>
    </div>
  </section>
</main>
<script src="templates/js/main.js"></script>
<?php
include("partials/footer.php");
?>