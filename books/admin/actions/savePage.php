<?php
include("../functions/main.php");

$headPhoto = $_POST["old_strPhoto"];
if($_FILES["strHeadPhoto"]["name"]!="")
{
  $headPhoto = $_FILES["strHeadPhoto"]["name"];
  move_uploaded_file($_FILES["strHeadPhoto"]["tmp_name"], "../../assets/".$headPhoto);
}

$subPhoto = $_POST["old_subPhoto"];
if($_FILES["strSubPhoto"]["name"]!="")
{
  $subPhoto = $_FILES["strSubPhoto"]["name"];
  move_uploaded_file($_FILES["strSubPhoto"]["tmp_name"], "../../assets/".$subPhoto);
}

if($_POST["pageID"]!="")
{
  doSQL("UPDATE pages SET strName=\"{$_POST["strName"]}\",
    strHeadPhoto=\"{$headPhoto}\",
    strTagline=\"{$_POST["strTagline"]}\",
    strMainHeading=\"{$_POST["strMainHeading"]}\",
    strMainContent=\"{$_POST["strMainContent"]}\",
    strSubHeading=\"{$_POST["strSubHeading"]}\",
    strSubContent=\"{$_POST["strSubContent"]}\",
    strSubPhoto=\"{$subPhoto}\",
    strSubAlt=\"{$_POST["strSubAlt"]}\",
    nTemplatesID=\"{$_POST["nTemplatesID"]}\"
    WHERE id=\"{$_POST["pageID"]}\"");
  $verb = "updated";
} else {
  doSQL("INSERT INTO pages (strName, strHeadPhoto, strTagline, strMainHeading, strMainContent, strSubHeading, strSubContent, strSubPhoto, strSubAlt, nTemplatesID)
                VALUES (\"{$_POST["strName"]}\",
                \"{$headPhoto}\",
                \"{$_POST["strTagline"]}\",
                \"{$_POST["strMainHeading"]}\",
                \"{$_POST["strMainContent"]}\",
                \"{$_POST["strSubHeading"]}\",
                \"{$_POST["strSubContent"]}\",
                \"{$subPhoto}\",
                \"{$_POST["strSubAlt"]}\",
                \"{$_POST["nTemplatesID"]}\")");
  $verb = "created";
}
header("location: ../pages.php?success=true&verb=$verb");
?>