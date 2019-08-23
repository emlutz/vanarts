<form class="contactForm" method="post" action="save.php">
  <div class="row">
    <div class="eight columns">
      <label for="nameInput">Your Name</label>
      <input class="u-full-width required" type="text" placeholder="Your Name" id="nameInput" name="strName" value="" required>
      <label for="emailInput">Your Email</label>
      <input class="u-full-width required" type="text" placeholder="Your Email" id="emailInput" name="strEmail" value="" required>
    </div>
    <div class="four columns">
      <label for="serviceInput">Interested In</label>
      <select class="u-full-width" id="serviceInput">
        <option value="Option 1">Wedding</option>
        <option value="Option 2">Portrait</option>
        <option value="Option 3">Couples &amp; Families</option>
      </select>
    </div>
  </div>
  <label for="message">Message</label>
  <textarea class="u-full-width required" placeholder="Hi Ava …" id="message" name="strMessage" value="" required></textarea>
  <label class="sendCopy">
    <input type="checkbox">
    <span class="label-body">Sign up for the Newsletter</span>
  </label>
  <input class="formSubmitBtn button-primary" type="submit" value="Send Message" onClick="return checkForm();">
</form>

<script src="js/main.js"></script>