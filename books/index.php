<?php
include("functions/main.php");

$_GET["id"] = (isset($_GET["id"]))?$_GET["id"]:1; ///////Set home page ID
$arrPageDetails = getPage($_GET["id"]); ///////determine which page is active
$info = getInfo(); //////Get values for global information

if(file_exists("templates/{$arrPageDetails['strFileLocation']}")) //////Get template file for page ID
{
  include("templates/{$arrPageDetails['strFileLocation']}");
} else {
  echo "You didn't create the file.";
}
?>