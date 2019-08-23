<?php
$pageTitle = "About La Princesa";
include("partials/header.php");
include("functions/functions.php");
?>
<main class="backsplash">
  <section class="aboutOpen">
    <div class="content">
      <h1>About La Princesa</h1>
    </div>
  </section>
  <div class="intro">
    <h3>Decades of history and exceptional service combine with modern luxury and elegance at the new La Princesa.</h3>
    <p>Having just unveiled an extensive renovation, La Princesa is entering a new era of it's storied history. Following the award winning revitalization, the history of La Princesa still shines throughout the new design welcoming visitors to imagine themselves in any era during their stay. Experience the entire journey from past to present in our special feature on the renovation.</p>
    <a href="contact.php#blog">Go To Feature <i class="fas fa-newspaper"></i></a>
  </div>
  <div class="testSlider">
    <h3>What Our Guests Say</h3>
    <div id="wrapper">
      <div id="slider">
        <div class="mask">
          <div class="slides" id="slideHandle">
            <div class="image"><p><em>"We came here for our honeymoon and have returned many times throughout the years. Our most recent trip for our 30th anniversary was the most incredible yet following the breathtaking renovation!"</em><br><br>-Cate &amp; Clouse, Switzerland</p></div>
            <div class="image"><p><em>"We came here for our honeymoon and have returned many times throughout the years. Our most recent trip for our 30th anniversary was the most incredible yet following the breathtaking renovation!"</em><br><br>-Cate &amp; Clouse, Switzerland</p></div>
            <div class="image"><p><em>"We came here for our honeymoon and have returned many times throughout the years. Our most recent trip for our 30th anniversary was the most incredible yet following the breathtaking renovation!"</em><br><br>-Cate &amp; Clouse, Switzerland</p></div>
            <div class="image"><p><em>"We came here for our honeymoon and have returned many times throughout the years. Our most recent trip for our 30th anniversary was the most incredible yet following the breathtaking renovation!"</em><br><br>-Cate &amp; Clouse, Switzerland</p></div>
          </div>
        </div>
      </div>
    </div>
    <div class="slideControl">
      <a href="#" id="prev"><i class="fas fa-chevron-left"></i></a>
      <a href="#" id="next"><i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <section class="services">
    <h2>Services</h2>
    <div class="serviceStyle">
      <div class="service">
        <img src="imgs/princesa_cafe_bar2.jpg" alt="princesa hotel cafe">
        <div class="titleInfo">
        <h3>Cafe Bar</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil voluptatum in earum et recusandae, ipsam unde reiciendis. Nesciunt obcaecati at saepe perferendis optio iste ad eaque sed, velit dolores.</p>
          <p class="spacer">Open 7am-12pm Daily</p>
          <a href="#" class="menuPop">Menu <i class="fas fa-wine-glass-alt"></i></a>
          <a href="contact.php">Reservations <i class="fas fa-concierge-bell"></i></a>
        </div>
      </div>
      <div class="service">
        <img src="imgs/princesa_lounge_roof.jpg" alt="princesa hotel roof lounge">
        <div class="titleInfo">
        <h3>Roof Lounge</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt fugit quae laboriosam voluptas illo nostrum voluptates, asperiores possimus enim quasi doloremque quia nulla deleniti provident ipsa odio, ea debitis alias.</p>
          <p class="spacer">Open 11am-1am Daily</p>
          <a href="#" class="menuPop">Menu <i class="fas fa-glass-martini"></i></a>
          <a href="contact.php">Reservations <i class="fas fa-concierge-bell"></i></a>
        </div>
      </div>
      <div class="service">
        <img src="imgs/princesa_think_lounge.jpg" alt="princesa lounge">
        <div class="titleInfo">
        <h3>Think Lounge</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil voluptatum in earum et recusandae, ipsam unde reiciendis. Nesciunt obcaecati at saepe perferendis optio iste ad eaque sed, velit dolores.</p>
          <p class="spacer">Open 7am-12pm Daily</p>
          <a href="#" class="menuPop">Menu <i class="fas fa-coffee"></i></a>
          <a href="contact.php">Reservations <i class="fas fa-concierge-bell"></i></a>
        </div>
      </div>
      <div class="service">
        <img src="imgs/princesa_pool.jpg" alt="princesa pool roof">
        <div class="titleInfo">
        <h3>Rooftop Pool</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt fugit quae laboriosam voluptas illo nostrum voluptates, asperiores possimus enim quasi doloremque quia nulla deleniti provident ipsa odio, ea debitis alias.</p>
          <p class="spacer">Open 5am-12am Daily</p>
          <a href="rooms.php">See More Amenities &amp; Our Accomodations <i class="fas fa-bed"></i></a>
        </div>
      </div>
    </div>
    <a href="guide.php">What's Near La Princesa <i class="fas fa-location-arrow"></i></a>
  </section>
  <div id="menuBox">
    <div class="modal">
      <a href="#" class="closeIcon" id="closeModal"><i class="fas fa-times"></i></a>
      <img src="imgs/menu.png" alt="cafe bar menu">
    </div>
</main>
<script src="./js/aboutslide.js"></script>
<script src="./js/main.js"></script>
<?php
include("partials/footer.php");
?>