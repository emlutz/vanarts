<?php
$pageTitle = 'Contact';
include("partials/header.php");
include("functions/functions.php");
?>
<div class="container">
  <div class="row">
    <div class="five columns hello">
      <img src="imgs/ava2.jpg" alt="ava macleod">
    </div>
    <div class="seven columns">
      <h2>Say Hello</h2>
      <span class="line abTitle"></span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda voluptate optio sapiente aspernatur commodi deserunt possimus inventore laudantium sunt magnam unde, minima eos recusandae culpa maxime delectus repellat, voluptatem fuga.</p>
      <?php include("partials/form.php");?>
    </div>
  </div>
</div>

<?php
include("partials/footer.php");
?>