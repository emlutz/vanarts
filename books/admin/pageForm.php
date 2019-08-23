<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Enter Page Data';
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
    if(isset($_GET["pageID"])){
      $verb = "Edit";
      $arrPage = getPage($_GET["pageID"]);
      if(!$arrPage)
      {
        echo "Sorry, page does not exist.";
        die;
      }
    } else {
      $_GET["pageID"] = "";
      $arrPage['strName'] = "";
      $arrPage['strHeadPhoto'] = "";
      $arrPage['strTagline'] = "";
      $arrPage['strMainHeading'] = "";
      $arrPage['strMainContent'] = "";
      $arrPage['strSubHeading'] = "";
      $arrPage['strSubContent'] = "";
      $arrPage['strSubPhoto'] = "";
      $arrPage['strSubAlt'] = "";
      $arrPage['nTemplatesID'] = "";
    }
    ?>
    <h1><?=$verb?> A Page</h1>
    <div class="btn"><a href="pages.php"><i class="fas fa-arrow-alt-circle-left"></i> Back To Pages</a></div>
	</div>
	<div class="options">
    <form method="post" action="actions/savePage.php" enctype="multipart/form-data">
      <input type="hidden" name="pageID" value="<?=$_GET["pageID"]?>">
      
      <label for="strName">Page Name</label>
      <input type="text" name="strName" value="<?=$arrPage['strName']?>" placeholder="Enter page name">
      
      <label for="strTagline">Tagline</label>
      <input type="text" name="strTagline" value="<?=$arrPage['strTagline']?>" placeholder="Enter tagline" class="shortText">
      
      <label for="strMainHeading">Page Heading</label>
      <input type="text" name="strMainHeading" value="<?=$arrPage['strMainHeading']?>" placeholder="Enter heading" class="shortText">

      <label for="strMainContent">Main Content</label>
      <textarea name="strMainContent" placeholder="Enter content"><?=$arrPage['strMainContent']?></textarea>

      <label for="strSubHeading">Sub Heading</label>
      <input type="text" name="strSubHeading" value="<?=$arrPage['strSubHeading']?>" placeholder="Enter heading" class="shortText">

      <label for="strSubContent">Sub Content</label>
      <textarea type="text" name="strSubContent" placeholder="Enter content"><?=$arrPage['strSubContent']?></textarea>
      
      <label for="nTemplatesID">Template</label>
      <select name="nTemplatesID">
        <option>Select Template</option>
        <?php
        $templates = getRecords("SELECT * FROM templates");
        while($row = mysqli_fetch_assoc($templates))
        {
          $selected = ($arrPage["nTemplatesID"] == $row["id"])?"SELECTED":"";
          echo "<option value=\"{$row["id"]}\" $selected >{$row["strName"]}</option>";
        }
        ?>
      </select>
      <label for="strHeadPhoto">Header Photo</label>
      <img src="../assets/<?=$arrPage['strHeadPhoto']?>" class="preview">
      <input type="hidden" name="old_strPhoto" value="<?=$arrPage['strHeadPhoto']?>">
      <input type="file" name="strHeadPhoto">
      
      <label for="strSubPhoto">Body Photo</label>
      <img src="../assets/<?=$arrPage['strSubPhoto']?>" class="preview">
      <input type="hidden" name="old_subPhoto" value="<?=$arrPage['strSubPhoto']?>">
      <input type="file" name="strSubPhoto">
      
      <label for="strSubAlt">Body Photo Description</label>
      <input type="text" name="strSubAlt" value="<?=$arrPage['strSubAlt']?>" placeholder="Enter image description" class="shortText">
      
      <input type="submit" value="Save">
    </form>
	</div>
</section>
<?php
include("partials/footer.php");
?>