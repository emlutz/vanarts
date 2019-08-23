<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Enter Team Member Data';
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
    if(isset($_GET["teamID"])){
      $verb = "Edit";
      $arrMember = mysqli_fetch_assoc(getRecords("SELECT * FROM team WHERE id='".$_GET["teamID"]."'"));
      if(!$arrMember)
      {
        echo "Sorry, member does not exist.";
        die;
      }
    } else {
      $_GET["teamID"] = (isset($_GET['teamID']))?$_GET['teamID']:"";
      $arrMember['strName'] = (isset($arrMember['strName']))?$arrMember['strName']:"";
      $arrMember['strTitle'] = (isset($arrMember['strTitle']))?$arrMember['strTitle']:"";
      $arrMember['strBook'] = (isset($arrMember['strBook']))?$arrMember['strBook']:"";
      $arrMember['strPhoto'] = (isset($arrMember['strPhoto']))?$arrMember['strPhoto']:"";
    }
    ?>
    <h1><?=$verb?> Information</h1>
    <div class="btn"><a href="team.php"><i class="fas fa-arrow-alt-circle-left"></i> Back To Team</a></div>
	</div>
	<div class="options">
    <form method="post" action="actions/saveTeam.php" enctype="multipart/form-data">
      <input type="hidden" name="teamID" value="<?=$_GET["teamID"]?>">
      <label for="strName">Name</label>
      <input type="text" name="strName" value="<?=$arrMember['strName']?>" placeholder="Enter name">
      <label for="strTitle">Title</label>
      <input type="text" name="strTitle" value="<?=$arrMember['strTitle']?>" placeholder="Enter member title" class="shortText">
      <label for="strBook">Favourite Book</label>
      <input type="text" name="strBook" value="<?=$arrMember['strBook']?>" placeholder="Enter favourite book" class="shortText">
      <label for="strPhoto">Photo</label>
      <img src="../assets/<?=$arrMember['strPhoto']?>" class="preview">
      <input type="hidden" name="old_strPhoto" value="<?=$arrMember['strPhoto']?>">
      <input type="file" name="strPhoto">
      <input type="submit" value="Save">
    </form>
	</div>
</section>
<?php
include("partials/footer.php");
?>