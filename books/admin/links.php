<?php
include("partials/checkLoggedIn.php");
$pageTitle = 'Links';
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
			<p class="success">Link <?=ucfirst($_GET["verb"])?> successfully!</p>
		<?php
		}
		?>
	</div>
	<div class="options">
		<div class="option"><a href="linkForm.php"><h2>Add New Link</h2><i class="fas fa-link"></i></a></div>
	</div>
</section>
<section class="pages">
	<h2>Manage Current Links</h2>
	<div class="tr">
		<h3 class="td name">Name</h3>
		<h3 class="td edit">Edit</h3>
		<h3 class="td delete">Delete</h3>
	</div>
	<?php
	$links = getRecords("SELECT * FROM links");
	while($row = mysqli_fetch_assoc($links))
	{
		echo "<div class=\"tr\">
						<div class=\"td name\">{$row["strName"]}</div>
						<div class=\"td edit\">
							<a href=\"linkForm.php?linkID={$row["id"]}\"><i class=\"fas fa-pen-square\"></i></a>
						</div>
						<div class=\"td delete\">
							<a href=\"actions/deleteLink.php?linkID={$row["id"]}\"><i class=\"fas fa-trash-alt\"></i></a>
						</div>
					</div>";
	}
	?>
</section>
<?php
include("partials/footer.php");
?>