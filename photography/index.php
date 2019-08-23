<?php
$pageTitle = 'Home';
include("partials/header.php");
include("functions/functions.php");
?>
<div class="u-full-width cta">
  <p>Only <span class="highlight">8 dates left</span> for 2019!</p>
  <p><a href="#" id="openSignup">Get in touch</a> to reserve your spot.</p>
</div>
<div id="signupFull">
  <div id="signup">
    <a href="#" class="closeIcon" id="closeSignup"><img src="imgs/x.png" alt="x icon"></a>
    <div class="formPop">
      <?php include("partials/form.php");?>
    </div>
  </div>
</div>

<div class="fullSlider twelve columns">
  <div id="wrapper">
    <div id="slider">
      <div class="mask">
        <div class="slides" id="slideHandle">
          <?php
          $results = getData("SELECT * FROM slides WHERE nSlideshow = '1'");
          while($arrRow = mysqli_fetch_assoc($results)) {
            ?>
            <div class="image"><img src="imgs/<?=$arrRow['strPicture']?>" alt="<?=$arrRow['strAlt']?>"></div>
          <?php
          }?>
        </div>
      </div>
    </div>
  </div>
  <div class="slideControl">
    <a href="#" id="prev"><img src="imgs/arrowr.png" alt="arrow icon"></a>
    <a href="#" class="dot" id="dot1" data-num="1"><i class="far fa-circle"></i></a>
    <a href="#" class="dot" id="dot2" data-num="2"><i class="far fa-circle"></i></a>
    <a href="#" class="dot" id="dot3" data-num="3"><i class="far fa-circle"></i></a>
    <a href="#" class="dot" id="dot4" data-num="4"><i class="far fa-circle"></i></a>
    <a href="#" class="dot" id="dot5" data-num="5"><i class="far fa-circle"></i></a>
    <a href="#" class="dot" id="dot6" data-num="6"><i class="far fa-circle"></i></a>
    <a href="#" id="next"><img src="imgs/arrow.png" alt="arrow icon"></a>
  </div>
</div>
<div class="services">
  <ul class="vertList five columns">
    <li class="openCard" id="card1" data-num="1"><span class="line link"><a href="weddings.php">Weddings</a></span></li>
    <li class="openCard" id="card2" data-num="2"><span class="line link"><a href="portraits.php">Portraits</a></span></li>
    <li class="openCard" id="card3" data-num="3"><span class="line link"><a href="couples.php">Family</a></span></li>
  </ul>
</div>
<h1 class="mob-show">Weddings</h1>
<div class="card seven columns row" id="feat1">
  <p class="four columns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, officiis! Alias, nam. Assumenda aut incidunt quibusdam maiores quod vero aperiam suscipit ipsa voluptatum veniam veritatis animi, sed, praesentium, deleniti autem?</p>
  <img src="imgs/weddings.jpg" alt="wedding photo" class="eight columns">
</div>
<h1 class="mob-show">Portraits</h1>
<div class="card seven columns row" id="feat2">
  <p class="four columns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, officiis! Alias, nam. Assumenda aut incidunt quibusdam maiores quod vero aperiam suscipit ipsa voluptatum veniam veritatis animi, sed, praesentium, deleniti autem?</p>
  <img src="imgs/portraits.jpg" alt="portrait photo" class="eight columns">
</div>
<h1 class="mob-show">Family</h1>
<div class="card seven columns row" id="feat3">
  <p class="four columns">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, officiis! Alias, nam. Assumenda aut incidunt quibusdam maiores quod vero aperiam suscipit ipsa voluptatum veniam veritatis animi, sed, praesentium, deleniti autem?</p>
  <img src="imgs/couples.jpg" alt="family photo" class="eight columns">
</div>
<?php
include("partials/footer.php");
?>

<script src="js/signup.js"></script>
<script src="js/slider.js"></script>