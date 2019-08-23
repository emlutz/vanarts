<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Dashboard';
include("partials/header.php");
?>
<div class="lognav">
	<a href="dashboard.php" class="logout">Dashboard</a>
	<a href="partials/logout.php" class="logout">Logout</a>
</div>
<section class="dash">
	<div class="welcome">
		<img src="imgs/bee.png" alt="bee">
		<h1>Welcome Back!</h1>
		<p>What should we do today?</p>
	</div>
	<div class="options">
		<div class="option"><a href="pages.php"><h2>Pages</h2><i class="far fa-file-alt"></i></a></div>
		<div class="option"><a href="info.php"><h2>Your Information</h2><i class="fas fa-info"></i></a></div>
		<div class="option"><a href="links.php"><h2>Links</h2><i class="fas fa-link"></i></a></div>
		<div class="option"><a href="team.php"><h2>Team</h2><i class="fas fa-users"></i></a></div>
	</div>
</section>
<?php
include("partials/footer.php");
?>