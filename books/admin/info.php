<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Your Information';
include("partials/header.php");
?>
<div class="lognav">
	<a href="dashboard.php" class="logout">Dashboard</a>
	<a href="partials/logout.php" class="logout">Logout</a>
</div>
<section class="dash">
	<div class="welcome">
		<img src="imgs/bee.png" alt="bee">
		<h1>Add and Edit Links</h1>

		<?php
		if (isset($_GET["success"]))
		{?>
			<p class="success">Information <?=ucfirst($_GET["verb"])?> successfully!</p>
		<?php
		}
		?>
	</div>
	<div class="options">
		<div class="option"><a href="infoForm.php"><h2>Add New Information</h2><i class="fas fa-info"></i></a></div>
	</div>
</section>
<section class="pages">
	<h2>Manage Current Information</h2>
	<div class="tr">
		<h3 class="td name">Name</h3>
		<h3 class="td edit">Edit</h3>
		<h3 class="td delete">Delete</h3>
	</div>
	<?php
	$info = getRecords("SELECT * FROM globals");
	while($row = mysqli_fetch_assoc($info))
	{
		echo "<div class=\"tr\">
						<div class=\"td name\">{$row["strName"]}</div>
						<div class=\"td edit\">
							<a href=\"infoForm.php?globalID={$row["id"]}\"><i class=\"fas fa-pen-square\"></i></a>
						</div>
						<div class=\"td delete\">
							<a href=\"actions/deleteInfo.php?globalID={$row["id"]}\"><i class=\"fas fa-trash-alt\"></i></a>
						</div>
					</div>";
	}
	?>
</section>
<?php
include("partials/footer.php");
?>