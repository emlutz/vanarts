<?php
$pageTitle = "La Princesa Home";
include("partials/header.php");
include("functions/functions.php");
?>
<main>
  <section class="homeFeat">
    <div class="slider-container">
      <div class="slider-control left inactive"></div>
      <div class="slider-control right"></div>
      <ul class="slider-pagi"></ul>
      <div class="slider">
        <div class="slide slide-0 active">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading">La Princesa <em>Nuevo</em></h2>
              <p class="slide__text-desc"> The gem of Barcelona's El Born neighbourhood reveals a dramatic transformation.</p>
              <a href="about.php" class="slide__text-link">See the results  <i class="fas fa-eye"></i></a>
            </div>
          </div>
        </div>
        <div class="slide slide-1 ">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading">Featured In Architectural Digest</h2>
              <p class="slide__text-desc">La Princesa named as one of Architectural Digests Hottest Design Hotels for 2019!</p>
              <a href="contact.php#blog" class="slide__text-link">Read the feature  <i class="fas fa-newspaper"></i></a>
            </div>
          </div>
        </div>
        <div class="slide slide-2">
          <div class="slide__bg"></div>
          <div class="slide__content">
            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="slide__text">
              <h2 class="slide__text-heading">Discover Barcelona</h2>
              <p class="slide__text-desc">La Princesa is located in the heart of the famed El Born neighbourhood and surrounded by the city's best destinations for eating, shopping, culture, and more!</p>
              <a href="guide.php" class="slide__text-link">Guided Tour of El Born  <i class="fas fa-map-signs"></i></a>
            </div>
          </div>
        </div>
    </div>
  </section>     
</main>

<script src="js/homeslide.js"></script>
<?php
include("partials/footer.php");
?>