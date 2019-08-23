<?php
include("../functions/main.php");

$teamPhoto = $_POST["old_strPhoto"];
if($_FILES["strPhoto"]["name"]!="")
{
  $teamPhoto = $_FILES["strPhoto"]["name"];
  move_uploaded_file($_FILES["strPhoto"]["tmp_name"], "../../assets/".$teamPhoto);
}

if($_POST["teamID"]!="")
{
  doSQL("UPDATE team SET strName=\"{$_POST["strName"]}\",
    strTitle=\"{$_POST["strTitle"]}\",
    strBook=\"{$_POST["strBook"]}\",
    strPhoto=\"{$teamPhoto}\"
    WHERE id=\"{$_POST["teamID"]}\"");
  $verb = "updated";
} else {
  doSQL("INSERT INTO team (strName, strTitle, strBook, strPhoto)
    VALUES (\"{$_POST["strName"]}\",
    \"{$_POST["strTitle"]}\",
    \"{$_POST["strBook"]}\",
    \"{$teamPhoto}\")");
  $verb = "created";
}
header("location: ../team.php?success=true&verb=$verb");
?>