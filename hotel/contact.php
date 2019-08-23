<?php
$pageTitle = "Contact La Princesa";
include("partials/header.php");
include("functions/functions.php");
?>

<main class="backsplash">
  <section class="contactOpen">
    <div class="content">
      <h1>Keep In Touch</h1>
    </div>
  </section>
  <div class="intro">
    <h3>It is our top priority to ensure our guests enjoy an unforgettable experience.</h3>
    <p>To reserve in our hotel and lounges or for more information you can <strong>call us at +34 999 999 999</strong> or <strong>email hola@laprincesa.com</strong> or use the form below.</p>
    <a href="#blog">News &amp; Events <i class="fas fa-newspaper"></i><i class="fas fa-caret-down"></i></a>
  </div>
  <section class="bookForm">
    <h2>Contact Us</h2>
    <form>
      <div class="clientInfo">
        <label>Name</label>
        <input type="text" placeholder="Name">
        <label>Email</label>
        <input type="text" placeholder="Email">
        <label>Phone</label>
        <input type="text" placeholder="Phone">
        <label>Arriving <input type="date"></label>
        <label>Nights <input type="number"></label>
        <label>No. Guests <input type="number"></label>
        <label>Room Type</label>
        <select>
          <option>Deluxe Room</option>
          <option>Luxury Suite</option>
        </select>
      </div>
      <div class="clientInfo">
        <label>I am contacting La Princesa regarding:</label>
        <select>
          <option>Hotel Reservation Inquiries</option>
          <option>Lounge Reservation Inquiries</option>
          <option>Compliments/Concerns</option>
          <option>General Inquiry</option>
        </select>
        <label>Your comment or question:</label>
        <textarea></textarea>
        <input type="submit" value="Send Message">
      </div>
    </form>
  </section>
  <section id="blog">
    <h2>Latest News &amp; Events</h2>
    <div class="articles">
      <div class="article">
        <img src="imgs/arch.jpg" alt="architectural digest">
        <h3>La Princesa One of Architectural Digest's Hottest Design Hotels for 2019</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id sapiente quia accusamus asperiores laudantium laboriosam, inventore, cumque at eaque similique quidem modi? Consequuntur similique itaque rem commodi consectetur.</p>
        <a href="#">Read More <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="article">
        <img src="imgs/event.jpg" alt="barcelona event">
        <h3>Barcelona's Unmissable Events Spring 2019</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit accusantium facere esse sequi temporibus asperiores accusamus sapiente deleniti? Minus illo quaerat est natus suscipit commodi velit nemo temporibus et placeat!</p>
        <a href="#">Read More <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="article">
        <img src="imgs/football.jpg" alt="people at bar">
        <h3>Where To Catch the Footy Game With The Locals</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita consectetur cum iusto vero, ad maxime nam ipsam enim, eius, dolores sint dolorem id provident voluptate non eos recusandae dicta alias.</p>
        <a href="#">Read More <i class="fas fa-caret-right"></i></a>
      </div>
      <div class="article">
        <img src="imgs/shopblog.jpg" alt="barcelona boutique">
        <h3>El Born's Hidden Secret Consignment Shops</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque illum labore harum quod? Pariatur, perspiciatis molestias quibusdam excepturi, optio inventore, dicta consequatur rerum reprehenderit blanditiis dolores minima necessitatibus ullam alias.</p>
        <a href="#">Read More <i class="fas fa-caret-right"></i></a>
      </div>
    </div>
    <a href="guide.php">What's Near La Princesa <i class="fas fa-location-arrow"></i></a>
  </section>

<script src="./js/main.js"></script>
<?php
include("partials/footer.php");
?>