<?php
include("partials/header.php");
?>
<main class="gridMain">
  <div id="hero" class="shortHero" data-image="<?=$arrPageDetails['strHeadPhoto']?>">
    <h1><?=$arrPageDetails["strMainHeading"]?></h1>
    <h2><?=$arrPageDetails["strTagline"]?></h2>
  </div>

  <div class="content">
    <h2><?=$arrPageDetails["strSubHeading"]?></h2>
    <p><?=$arrPageDetails["strMainContent"]?></p>
    <div class="grid">
      <!-- get and display all team members -->
      <?=getTeamMembers()?> 
    </div>
    <p><?=$arrPageDetails["strSubContent"]?></p>
  </div>
  <div class="link">
    <!-- get link to get involved page -->
    <?php
    getNavLinks(3);
    ?>
  </div>
</main>
<script src="templates/js/main.js"></script>
<?php
include("partials/footer.php");
?>