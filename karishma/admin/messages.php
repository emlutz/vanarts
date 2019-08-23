<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Messages';
$description = 'Your Messages';
$blogs = Db::connect()->dataArray("SELECT * FROM message ORDER BY date DESC");
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
include("partials/header.php");
?>
<section class="review">
  <h1>Your Messages</h1>
  <p class="center">
  </p>
  <?php
    foreach($blogs as $order) {
      ?>
      <div class="reviews center">
        <div class="col">
          <p><strong>Name:</strong> <?=$order["name"]?></p>
          <p><strong>Phone:</strong> <?=$order["phone"]?></p>
          <p><strong>Email:</strong> <?=$order["email"]?></p>
        </div>
        <div class="col">
          <div><strong>Message:</strong> <?=$order["message"]?></div>
          <p><strong>Date:</strong> <?=$order["date"]?></p>
        </div>
        <div class="col center">
          <a href="actions/deleteMessage.php?orderId=<?=$order["id"]?>"><i class="fas fa-trash-alt"></i> Delete</a>
        </div>
      </div>
      <?php
    }
    ?>
  </section>
</section>
<?php
include("partials/footer.php");
?>