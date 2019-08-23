<?php
include("classes/main.php");
$pageTitle = 'Login';
include("partials/header.php");
?>
<section class="login">
  <div class="login__wrap">
    <img src="imgs/logo.png" alt="Rejuvin8 Logo">
    <?php
    if(isset($_GET['site']))
    {
      echo "<a href=\"../index.php\" class=\"nav\">Go To Site</a>";
    }
    ?>
    <h1>Login</h1>
    <?php
		if(isset($_GET['invalid']))
    {
			echo "<p class=\"invalid\">Invalid Email or Password.</p>";
    }
    ?>
    <form method="post" action="actions/login.php" class="form">
      <input type="text" placeholder="Email Address" name="email" class="form__text"/>
			<input type="password" placeholder="Password" name="password" class="form__text"/>
			<input type="submit" name="submit" value="Login" class="enter">
    </form>
  </div>
</section>
<?php
include("partials/footer.php");
?>