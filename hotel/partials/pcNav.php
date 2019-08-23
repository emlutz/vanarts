<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="navLogo">
  <a href="index.php"><img src="imgs/logo.png" alt="princesa logo"></a>
</div>
<div class="navLinks">
  <ul>
    <li class="link"><a href="index.php" class="<?=($activePage == 'index')?'active':"";?>">Home</a></li>
    <li class="divide"><span></span></li>
    <li class="link"><a href="about.php" class="<?=($activePage == 'about')?'active':"";?>">About</a></li>
    <li class="divide"><span></span></li>
    <li class="link"><a href="rooms.php" class="<?=($activePage == 'rooms')?'active':"";?>">Rooms</a></li>
    <li class="divide"><span></span></li>
    <li class="link"><a href="guide.php" class="<?=($activePage == 'guide')?'active':"";?>">Guide</a></li>
    <li class="divide"><span></span></li>
    <li class="link"><a href="contact.php" class="<?=($activePage == 'contact')?'active':"";?>">Contact &amp; News</a></li>
  </ul>
</div>
<div class="mobNavWrap">
  <div id="mobNav" class="mobNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="rooms.php">Rooms</a>
    <a href="guide.php">Guide</a>
    <a href="contact.php">Contact</a>
  </div>
  <span style="font-size:30px;cursor:pointer" id="hamburgericon" onclick="openNav()">&#9776;</span>
</div>