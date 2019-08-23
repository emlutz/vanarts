<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Enter Information Data';
include("partials/header.php");
?>
<div class="lognav">
	<a href="dashboard.php" class="logout">Dashboard</a>
	<a href="partials/logout.php" class="logout">Logout</a>
</div>
<section class="dash">
	<div class="welcome">
    <img src="imgs/bee.png" alt="bee">
    <?php
    $verb = "Add";
    if(isset($_GET["globalID"])){
      $verb = "Edit";
      $arrInfo = mysqli_fetch_assoc(getRecords("SELECT * FROM globals WHERE id='".$_GET["globalID"]."'"));
      if(!$arrInfo)
      {
        echo "Sorry, info does not exist.";
        die;
      }
    } else {
      $_GET["globalID"] = (isset($_GET['globalID']))?$_GET['globalID']:"";
      $arrInfo['strName'] = (isset($arrInfo['strName']))?$arrInfo['strName']:"";
      $arrInfo['strValue'] = (isset($arrInfo['strValue']))?$arrInfo['strValue']:"";
    }
    ?>
    <h1><?=$verb?> Information</h1>
    <div class="btn"><a href="info.php"><i class="fas fa-arrow-alt-circle-left"></i> Back To Info</a></div>
	</div>
	<div class="options">
    <form method="post" action="actions/saveInfo.php">
      <input type="hidden" name="globalID" value="<?=$_GET["globalID"]?>">
      <label for="strName">Information Name</label>
      <input type="text" name="strName" value="<?=$arrInfo['strName']?>" placeholder="Enter information name">
      <label for="strValue">Information Value</label>
      <input type="text" name="strValue" value="<?=$arrInfo['strValue']?>" placeholder="Enter information" class="shortText">
      <input type="submit" value="Save">
    </form>
	</div>
</section>
<?php
include("partials/footer.php");
?>