<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Enter Link Data';
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
    if(isset($_GET["linkID"])){
      $verb = "Edit";
      $arrLink = mysqli_fetch_assoc(getRecords("SELECT * FROM links WHERE id='".$_GET["linkID"]."'"));
      if(!$arrLink)
      {
        echo "Sorry, link does not exist.";
        die;
      }
    } else {
      $_GET["linkID"] = (isset($_GET['linkID']))?$_GET['linkID']:"";
      $arrLink['strName'] = (isset($arrLink['strName']))?$arrLink['strName']:"";
      $arrLink['strnLocationsID'] = (isset($arrLink['strnLocationsID']))?$arrLink['strnLocationsID']:"";
      $arrLink['nPagesID'] = (isset($arrLink['nPagesID']))?$arrLink['nPagesID']:"";
    }
    ?>
    <h1><?=$verb?> A Link</h1>
    <div class="btn"><a href="links.php"><i class="fas fa-arrow-alt-circle-left"></i> Back To Links</a></div>
	</div>
	<div class="options">
    <form method="post" action="actions/saveLink.php">
      <input type="hidden" name="linkID" value="<?=$_GET["linkID"]?>">
      
      <label for="strName">Link Name</label>
      <input type="text" name="strName" value="<?=$arrLink['strName']?>" placeholder="Enter link name">
      
      <select name="nLocationsID">
        <option>Select Link Location</option>
        <?php
        $arrLinkLocations = getRecords("SELECT * FROM locations");
        while($row = mysqli_fetch_assoc($arrLinkLocations))
        {
          $selected = ($arrLink["nLocationsID"] == $row["id"])?"SELECTED":"";
          echo "<option value=\"{$row["id"]}\" $selected >{$row["strName"]}</option>";
        }
        ?>
      </select>
      
      <select name="nPagesID">
      <option>Select Link Destination</option>
      <?php
      $arrPages = getRecords("SELECT * FROM pages");
      while($row = mysqli_fetch_assoc($arrPages))
      {
        $selected = ($arrLinks["nPagesID"] == $row["id"])?"SELECTED":"";
        echo "<option value=\"{$row["id"]}\" $selected >{$row["strName"]}</option>";
      }
      ?>
      </select>
      <input type="submit" value="Save">
    </form>
	</div>
</section>
<?php
include("partials/footer.php");
?>