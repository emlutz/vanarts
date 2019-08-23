<?php
$pageTitle = 'Portraits';
include("partials/header.php");
include("functions/functions.php");
?>
<div class="gallery-wrap">
  <div class="gallery-photo">
    <?php
    $results = getData("SELECT * FROM images WHERE strCategory = 'portrait'");
    while($arrRow = mysqli_fetch_assoc($results)) {
      ?>
      <div class="photo"><img src="imgs/<?=$arrRow['strName']?>" alt="<?=$arrRow['strAlt']?>"></div>
    <?php
    }?>
  </div>
</div>
<?php
include("partials/footer.php");
?>