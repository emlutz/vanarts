<?php
include("classes/main.php");
include("actions/verifyuser.php");
$pageTitle = 'Contacts';
include("partials/header.php");
if(isset($_GET['deleted']))
  {
    echo "<p class='success'>Contact was deleted <i class='far fa-check-circle'></i></p>";
  }
?>
<header>
  <div class="logo">
    <img src="imgs/logo.png" alt="rejuven logo">
  </div>
  <div class="nav">
    <a href="actions/logout.php"><h4>Logout</h4></a>
  </div>
</header>
<section class="messages">
  <h1>Contacts</h1>
  <form method="post" action="actions/sort.php">
    <label for="sort">Sory By:</label>
    <select name="sort">
      <option value="id">ID</option>
      <option value="strName">Name</option>
      <option value="strEmail">Email</option>
      <option value="bNewsletter">Newsletter</option>
      <option value="strComment">Comment</option>
      <option value="nTimestamp">Date</option>
    </select>
    <input type="submit" name="submit" value="go">
  </form>
  <div class="tr">
    <h3 class="td id">ID</h3>
    <h3 class="td name">Name</h3>
    <h3 class="td email">Email</h3>
    <h3 class="td news">Newsletter</h3>
    <h3 class="td comment">Comment</h3>
    <h3 class="td date">Date</h3>
    <h3 class="td delete">Delete</h3>
  </div>
  <?php
  $pageNum = (isset($_GET["pageNum"]))?$_GET["pageNum"]:1;
  $msgPerPage = 10;
  $startCount = ($pageNum*$msgPerPage)-$msgPerPage;
  $sort = (isset($_GET["sort"]))?$_GET["sort"]:'id';
  $msgsAll = Database::connect()->dataArray("SELECT * FROM messages");
  $msgLimit = Database::connect()->dataArray("SELECT * FROM messages  ORDER BY $sort LIMIT $startCount, $msgPerPage");
  foreach($msgLimit as $msg) {
    ?>
    <div class="tr">
      <div class="td id"><?=$msg['id']?></div>
      <div class="td name"><?=$msg["strName"]?></div>
      <div class="td email"><?=$msg["strEmail"]?></div>
      <div class="td news"><?=$msg["bNewsletter"]?></div>
      <div class="td comment"><?=$msg["strComment"]?></div>
      <div class="td date"><?=$msg["nTimestamp"]?></div>
      <div class="td delete">
        <a href="actions/delete.php?msg=<?=$msg["id"]?>"><i class="fas fa-trash-alt"></i></a>
      </div>
    </div>
    <?php
  }
  ?>
</section>
<div class="count">
  <p>Go To Page
    <?php
    $pageCount = ceil(count($msgsAll)/$msgPerPage);
    for($i=1;$i<=$pageCount;$i++) {
      echo "<a href='dash.php?pageNum=$i'>".$i."</a>";
    }
    ?>
  </p>
</div>
<script src="./js/newsletter.js"></script>
<?php
include("partials/footer.php");
?>