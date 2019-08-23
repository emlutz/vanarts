<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Profile';
$description = 'Edit Profile';
$globals = Db::connect()->dataArray("SELECT * FROM global");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Profile</h1>
  <p class="center">
  <?php
  if(isset($_GET['msg'])) {
    echo "&mdash; Item has been $verb &mdash;";
  }
  ?>
  </p>
  <?php
    foreach($globals as $order) {
      ?>
      <form action="actions/saveGlobal.php" method="post">
        <div class="reviews center">
            <input type="hidden" value="<?=$order["id"]?>" name="id">
            <div class="col">
              <label><strong><?=$order["name"]?>:</strong></label>
              <input type="text" name="value" value="<?=$order["value"]?>">
            </div>
            <div class="col center">
              <button type="submit" name="submit"><i class="fas fa-check"></i> Update</button>
            </div>
        </div>
      </form>
      <?php
    }
    ?>
    <form action="actions/password.php" method="post">
      <div class="reviews center">
          <input type="hidden" value="<?=$user['id']?>" name="id">
          <div class="col">
            <label><strong>New Password:</strong></label>
            <input type="password" name="password">
          </div>
          <div class="col center">
              <button type="submit" name="submit"><i class="fas fa-check"></i> Update</button>
          </div>
      </div>
    </form>
  </section>
</section>
<?php
include("partials/footer.php");
?>