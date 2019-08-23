<section class="section">
  <div class="overlay">
    <p class="center">
    <?php
    $verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
    if(isset($_GET['msg'])) {
      echo "&mdash; Your message has $verb. &mdash;";
    }
    ?>
    </p>
    <h1>Want To Work Together?</h1>
    <p>Send me a message to inquire about hiring me, working together, or just to say hey!</p>
    <form action="index.php" method="post">
      <input type="hidden" name="controller" value="pages">
      <input type="hidden" name="action" value="sendMessage">
      <div class="cols">
        <div>
          <label for="name" class="form__label">Name</label>
          <input type="text" name="name" pattern="[a-zA-Z\-\s]{3,}" title="Enter Your Name" class="form__text form__text--ta" placeholder="Your Name" required>
        </div>
        <div>
          <label for="email" class="form__label">Email Address</label>
          <input type="email" name="email" pattern="[a-zA-Z0-9.\-_]{1,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}" title="Enter Your Email Address" class="form__text form__text--em" placeholder="Your Email Address" required>
        </div>
        <div>
          <label for="phone" class="form__label">Phone Number</label>
          <input type="tel" name="phone" pattern="[0-9]{3}[\-]?[0-9]{3}[\-]?[0-9]{4}" class="form__text form__text--ph"
          placeholder="10 Digit Phone Number" title="10 Digit Phone Number" required>
        </div>
      </div>
      <div class="indent">
        <label for="message" class="form__label">Message</label>
        <textarea name="message" class="form__text form__text--ta" placeholder="Your Message"></textarea>

        <button type="submit" name="submit" class="form__submit">Send</button>
      </div>
    </form>
  </div>
</section>
<section class="section">
  <div class="overlay">
    <div class="cols">
      <a href="index.php?controller=pages&action=media" class="btnTwo">Check Out My Podcasts And Videos!</a>
      <a href="index.php?controller=pages&action=experience" class="btnMain">See What I've Been Up To!</a>
    </div>
  </div>
</section>