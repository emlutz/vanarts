<?php
include("classes/Db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Catamaran|PT+Sans:400,700|PT+Serif:400,700" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="content/imgs/logo.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="content/css/main.css">
</head>
<body>
  <section class="login">
  <?php
  if(isset($_GET['site']))
  {
    echo "<a href=\"../index.php\" class=\"center\">&mdash; Go To Site &mdash;</a>";
  }
  ?>
    <form action="actions/login.php" method="post" class="form">
      <h1>Sign In</h1>
      <?php
      if(isset($_GET['invalid']))
      {
        echo "<p class=\"invalid\">Invalid Email or Password.</p>";
      }
      ?>
      <label for="name">Username</label>
      <input type="text" name="name">

      <label for="password">Password</label>
      <input type="password" name="password">

      <input type="submit" name="submit" value="Log In">
    </form>
  </section>
</body>
</html>