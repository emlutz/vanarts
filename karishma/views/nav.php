<nav>
  <div class="menu">
    <div id="nav" class="hide">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php?controller=pages&action=main">Home</a>
      <a href="index.php?controller=pages&action=about">About</a>
      <a href="index.php?controller=pages&action=media">Media</a>
      <a href="index.php?controller=pages&action=experience">Experience</a>
      <a href="index.php?controller=pages&action=contact">Contact</a>
      <a href="index.php?controller=pages&action=blog">Blog</a>
    </div>
    <span id="hamburgericon" onclick="openNav()">&#9776;</span>
  </div>
  <div class="logo">
    <a href="index.php?controller=pages&action=main"><img src="imgs/logo.png" alt="Karishma Chera online content creator Vancouver BC comedy interview humour"></a>
  </div>
</nav>
<script>
  function openNav() {
    document.getElementById("nav").style.width = "300px";
    document.getElementById("nav").style.opacity = "0.9"
  }

  function closeNav() {
    document.getElementById("nav").style.width = "0";
  }
</script>