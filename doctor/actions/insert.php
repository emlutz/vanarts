<?php
include("../classes/main.php");
Database::connect()->cleanPost();
$name = $_POST['name'];
$email = $_POST['email'];
$news = (isset($_POST['news'])) ? 1 : 0;
$comment = $_POST['comment'];
$date = date("Y-m-d H:i:s");
if(!preg_match('/[a-zA-Z]{3,}[\s]/', $name)){
  $validName = false;
} else {
  $validName = true;
}
if(!preg_match('/[a-zA-Z0-9.\-_]{1,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}/', $email)){
  $validEmail = false;
} else {
  $validEmail = true;
}
if(!preg_match('/[a-zA-Z0-9.,?-]*/', $comment)){
  $validComment = false;
} else {
  $validComment = true;
}
if($validName && $validEmail && $validComment) {
  $newMessage = Database::connect()->data("INSERT INTO messages (strName, strEmail, bNewsletter, strComment, nTimestamp) VALUES('$name', '$email', '$news', '$comment', '$date')");
  header("location: ../thanks.php");
} if(!$validName) {
  header("location: ../index.php?invalidName");
} if(!$validEmail) {
  header("location: ../index.php?invalidEmail");
} if (!$validComment) {
  header("location: ../index.php?invalidComment");
}
?>