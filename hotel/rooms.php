<?php
$pageTitle = "Rooms at La Princesa";
include("partials/header.php");
include("functions/functions.php");
?>

<main class="backsplash">
  <section class="openingcopy">
    <div class="content">
      <h1>Rooms &amp; Suites</h1>
    </div>
  </section>
  <div class="intro">
    <h3>With 20 deluxe rooms and 5 luxury suites La Princesa offers a variety of refined, comfortable options for accommodation.</h3>
    <p>The newly redesigned rooms and suites at La Princesa are each uniquely styled and appointed. Decorated with sophisticated charm, our accommodations offer the most luxurious comfort possible. Only the finest linens and towels are available and our exclusive Dreamer Mattresses lead you to a restful sleep.</p>
    <a href="#amenities">Amenities <i class="fas fa-user-tie"></i><i class="fas fa-caret-down"></i></a>
  </div>
  <section class="roomsFeat">
    <div class="roomStyle">
      <h2>La Princesa Deluxe Rooms</h2>
      <img src="imgs/princesa_room_lamp.jpg" alt="">
      <div class="titleInfo">
        <p>The Deluxe Rooms at La Princesa are each unique. Rooms include either a queen or king Dreamer bed, a spacious rainfall shower and all of La Princesa's first class amenities listed below. Some Deluxe rooms include a soaker tub, professional desk space, and french doors or a small patio.</p>
        <p class="spacer"><em>From 425 / night</em></p>
        <a href="contact.php">Reserve <i class="fas fa-concierge-bell"></i></a>
        <a data-fancybox="gallery-room" data-caption="All of our rooms offer an immersive view of Barcelona." href="imgs/princesa_room.jpg" class="galleryPop">See Gallery <i class="fas fa-images"></i></a>
      </div>
    </div>
    <div class="roomStyle">
      <h2>La Princesa Luxury Suites</h2>
      <img src="imgs/princesa_suite_patio.jpg" alt="">
      <div class="titleInfo">
        <p>Luxury Suites at La Princesa are each one of a kind. Every suite includes either a king or two queen Dreamer beds, regal living space, a rainfall shower and soaker tub, a professional desk space, and La Princesa's first class amenities. Suites have either french doors or a patio and some include a dining area.</p>
        <p class="spacer"><em>From 690 / night</em></p>
        <a href="contact.php">Reserve <i class="fas fa-concierge-bell"></i></a>
        <a data-fancybox="gallery-suites" data-caption="All of our suites offer an immersive view of Barcelona." href="imgs/princesa_suite.jpg">See Gallery <i class="fas fa-images"></i></a>
      </div>
    </div>
  </section>
  <section id="amenities">
    <div class="intro">
      <h2>Amenities</h2>
      <p>La Princesa is the hospitality standard for comfort and luxury. All guests can expect to enjoy the following first class amenities.</p>
      <ul>
        <li>High-speed Wi-Fi Internet</li>
        <li>Cleaning service</li>
        <li>Bathroom amenities from exclusive Spanish brand, <em>Brillar</em></li>
        <li>Enitre hotel 100% NON-smoking</li>
        <li>24 hour reception</li>
        <li>Complimentary Coffee &amp; Tea</li>
        <li>47" televison</li>
        <li>Bathrobe and slippers</li>
        <li>Ironing set</li>
      </ul>
      <a href="guide.php">What's Near La Princesa <i class="fas fa-location-arrow"></i></a>
    </div>
  </section>
</main>
<section id="rGal" class="hide">
  <!-- <a data-fancybox="gallery-room" data-caption="All of our rooms offer an immersive view of Barcelona." href="imgs/princesa_room.jpg"></a> -->
  <a data-fancybox="gallery-room" data-caption="Our business class rooms have a professional workspace." href="imgs/princesa_room_desk.jpg"></a>
  <a data-fancybox="gallery-room" data-caption="Designer furnishings compliment the sophisticated style of our rooms." href="imgs/princesa_room_lamp.jpg"></a>
  <a data-fancybox="gallery-room" data-caption="Our exclusive Dreamer beds and linens will provide you with restful nights." href="imgs/princesa_room_headboard.jpg"></a>
</section>
<section id="sGal" class="hide">
  <!-- <a data-fancybox="gallery-suites" data-caption="All of our suites offer an immersive view of Barcelona." href="imgs/princesa_suite.jpg"></a> -->
  <a data-fancybox="gallery-suites" data-caption="Our suites include a regal seating area perfect for relaxing." href="imgs/princesa_suite_couch.jpg"></a>
  <a data-fancybox="gallery-suites" data-caption="Suites offer a patio or balcony to enjoy the open air of Barcelona." href="imgs/princesa_suite_patio.jpg"></a>
  <a data-fancybox="gallery-suites" data-caption="Our business class rooms have a professional workspace." href="imgs/princesa_room_desk.jpg"></a>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css"/>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
<script src="./js/main.js"></script>
<?php
include("partials/footer.php");
?>