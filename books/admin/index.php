<?php
$pageTitle = 'Login';
include("partials/header.php");
?>
<section class="login">
	<div class="inputArea">
		<h1>Login to CMS</h1>
		<?php
		if(isset($_GET['msg']))
    {
			echo "<p class=\"invalid\">Invalid Email or Password.</p>";
		}
		?>
		<p>Login to the site management system.</p>

		<form method="post" action="actions/processLogin.php">
			<input type="text" placeholder="Email Address" name="strEmail" id="login_email"/>
			<input type="password" placeholder="Password" name="strPassword" id="login_password"/>
			<input type="submit" value="Login" id="login">
		</form>
	</div>
	<div class="loginBee">
		<img src="imgs/bee.png" alt="bee">
	</div>
</section>
<script src="./js/validation.js"></script>
<?php
include("partials/footer.php");
?>