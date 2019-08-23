<?php
$pageTitle = 'Free E-Book!';
include("partials/header.php");
?>
<header>
  <div class="logo">
    <img src="imgs/logo_2.png" alt="Rejuvin8 Logo">
  </div>
  <div class="quote_wrap">
    <div class="quote">
      <h4><span class="lg_txt">I definitely believe in plastic surgery.</span> I don't want to be an old hag. There's no fun in that.</h4>
      <h6>&mdash;Scarlett Johansson</h6>
    </div>
  </div>
</header>
<section class="top">
  <h1>Achieve Subtle Yet Noticeable Results &amp; Renewed Confidence</h1>
    <div class="intro__copy">
      <p>Through her extensive training with global leaders and innovators within the field of cosmetic surgery, Dr Sheila Ree has attained world class skills and knowledge and is sharing it with you in <em>What's Her Secret?</em></p>
    </div>
  <div class="youthful_secret">
    <div class="intro">
      <div class="book__feature">
        <img src="imgs/ebook_frame.png" alt="What's Her Secret Free Ebook Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      </div>
    </div>
    <div id="form" class="entry">
      <form method="post" action="actions/insert.php" class="form">
        <h1>Get an EBook copy of <em>What's Her Secret?</em> sent directly to your inbox <span class="lg_txt">for Free</span></h1>
        <?php 
        if(isset($_GET['invalidName'])) {
          echo '<div class="invalid">Please enter a first and last name.</div>';
        }
        if(isset($_GET['invalidEmail'])) {
          echo '<div class="invalid">Please enter a valid email address.</div>';
        }
        if(isset($_GET['invalidComment'])) {
          echo '<div class="invalid">Please enter a message using only alpha-numeric characters and punctuation.</div>';
        }
        ?>
        <input type="text" name="name" pattern="[a-zA-Z\-\s]{3,}" title="Enter Your Name" placeholder="Enter Your Name" required>
        <input type="email" name="email" title="Enter a valid email address." placeholder="Enter Your Email Address" required>
        <div class="options">
          <input type="checkbox" name="news">
          <label for="news">Sign up for our newsletter for information on the latest advances in anti-aging.</label>
        </div>
        <textarea name="comment" pattern="[a-zA-Z0-9.,?-]" placeholder="Leave a comment (optional).."></textarea>
        <button type="submit" name="submit">Send Me The Free Ebook</button>
        <div class="privacy">
          <div class="badge">
            <img src="imgs/privacy.png" alt="rejuven8 privacy policy">
          </div>
          <p class="xs_txt"> We use your information collected through this form to send you Dr. Sheila Ree's free EBook, <em>What's Her Secret?</em>. We will not sell, rent or share this information to or with anyone.</p>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="about">
  <h2>Dr. Sheila Ree, FRCSC</h2>
  <h5>Owner, <img src="imgs/logo_inline.png" alt="rejuven8 north vancouver logo"></h5>
  <div class="sheila">
    <div class="bio">
      <h3>Education</h3>
      <p>Dr Ree is currently a Clinical Associate Professor with the Division of Plastic Surgery at the University of British Columbia. She holds a Bachelor of Science degree from McGill University and a Medical Doctorate degree from the University of British Columbia. Upon completion of her Plastic Surgery residency at the University of British Columbia, Dr Ree pursued specialized training in aesthetic surgery in Baltimore, Maryland and at the University of Manitoba.</p>
      <h3>Practice</h3>
      <p>In 2008, Dr Ree founded her practice; Dr Sheila Ree Inc. The practice is located in North Vancouver, British Columbia. She is active in both clinical and research-oriented work within the Division of Plastic Surgery. In addition, she is involved in training UBC plastic surgery residents and medical fellows.</p>
      <h3>Research &amp; Published Writing</h3>
      <p>Dr Ree has completed a Masters of Science in Epidemiology and Research Design at the Harvard School of Public Health and most recently won a UBC Concept Award. In addition to having numerous research papers published, Dr. Ree has recently compiled her years of knowledge gained through research and experience into a book, <em>What's Her Secret?</em>, where she shares her advice on how to look younger for longer.</p>
      <img src="imgs/ebook_frame.png" alt="What's Her Secret Free Ebook Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <a href="#form" class="openSignup">Send Me Sheila's Free Advice</a>
    </div>
    <div class="profile">
      <div class="quote_wrap">
        <div class="quote">
          <h4>The procedure exceeded my expectations… <span class="lg_txt">I wish I had done it sooner!</span> I healed quickly and was delighted with the end result.. me but refreshed and rested looking. Thank you Dr. Ree!</h4>
          <p>&mdash;Sonia (Eyelid Lift, 56 year-old)</p>
        </div>
      </div>
      <div class="profile_img">
        <img src="imgs/conference.png" alt="international conference on aesthetic medicine, cosmotology and anti-aging keynote speaker">
        <img src="imgs/sheila.png" alt="Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      </div>
    </div>
  </div>
  <h3>Affiliations & Memberships</h3>
  <div class="accreditation">
    <img src="imgs/csaps.png" alt="Canadian Society for Aesthetic Plastic Surgery">
    <img src="imgs/csps.png" alt="Canadian Society of Plastic Surgeons">
    <img src="imgs/rcpsc.png" alt="Royal College of Physicians and Surgeons of Canada">
    <img src="imgs/ubc.png" alt="UBC division of plastic surgery">
    <img src="imgs/asaps" alt="American Society of Aesthetic Plastic Surgeons">
    <img src="imgs/asps.png" alt="American Society of Plastic Surgeons">
    <img src="imgs/ubc_b.png" alt="UBC Branch for International Surgery">
  </div>
</section>
<section class="services">
  <h2><img src="imgs/logo_inline.png" alt="rejuven8 north vancouver logo">'s Revitalizing Services</h2>
  <p>Rejuven8 offers quick "lunchtime procedures" which often have immediately visible effects and limited downtime, qualities that allow you accessibility as well as confidentiality.</p>
  <div class="options">
    <div class="service">
      <h3>Restylane&reg;</h3>
      <img src="imgs/restylane.jpg" alt="Restylane results Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <p>Restylane&reg; can enhance most areas of the face, but is mostly used to create fuller lips and add volume and fullness to the skin. It can also correct moderate to severe wrinkles and folds.</p>
    </div>
    <div class="service">
      <h3>Botox&reg;</h3>
      <img src="imgs/botox.jpg" alt="Botox results Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <p>Eliminate frown lines with a fast and safe Botox procedure. A few minutes provides results that last for months.</p>
    </div>
    <div class="service">
      <h3>Eyelid Surgery</h3>
      <img src="imgs/eyelid.jpg" alt="Eyelid Surgery results Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <p>Droopy upper eyelids make you look older and can also impair vision. Lower eyelid puffiness and bags make one look worn and tired &mdash; Blepharoplasty can correct these problems.</p>
    </div>
    <div class="service">
      <h3>Neck Liposuction</h3>
      <img src="imgs/neck.jpg" alt="Neck liposuction results Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <p>Clients with an imbalance between their face and neck can benefit from neck liposuction or a neck lift. Often done in conjunction with a facelift, this can have a dramatic rejuvenating effect.</p>
    </div>
    <div class="service">
      <h3>Facelift</h3>
      <img src="imgs/facelift.jpg" alt="Facelift results Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <p>A well performed facelift improves signs of aging to restore a more rejuvenated and youthful facial appearance for a natural, beautifully revitalized version of yourself.</p>
    </div>
  </div>
  <div class="quote_wrap">
    <div class="quote">
      <h4>Dr. Ree has provided me with a few BOTOX&reg; injections over the years. <span class="lg_txt">What I really like about her is that you get very honest answers when you ask about different procedures, the potential outcome and how well they potentially would work for you.</span> My BOTOX&reg; treatments look very natural, just as I wished.</h4>
      <p>&mdash;Elisabeth (Botox, 61 year-old)</p>
    </div>
  </div> 
</section>
<section class="benefits">
  <h2>A Better Quality of Life</h2>
  <p>Plastic surgery is typically done to improve one’s appearance, which is also perceived as the primary benefit to the procedure. However, improving appearance is just one of many possible benefits plastic surgery can provide. Check out a few of the advantages you might stand to gain from your decision:</p>
  <ol class="options">
    <li>Increased Self-Confidence
      <ul>
        <li>When you look good, you feel good</li>
        <li>Improvements to appearance naturally translate to increased self-confidence</li>
        <li>Have a greater willingness to try new things</li>
        <li>Open up in social situations</li>
      </ul>
    </li>
    <li>Improved Physical Health
      <ul>
        <li>Dramatically improve vision with an eyelid lift</li>
        <li>Participate in activities you tended to avoid before your surgery due to your discomfort with your appearance</li>
        <li>Relieve physical discomfort like neck and back pain and skin irritation</li>
      </ul>
    </li>
    <li>Enhanced Mental Health
      <ul>
        <li>Reduction in social anxiety</li>
        <li>New Looks inspire feelings of self-confidence</li>
        <li>Feel greater control over your life</li>
        <li>Become more willing to take on new challenges</li>
      </ul>
    </li>
    <li>More Opportunities
      <ul>
        <li>Studies suggest that people that are more attractive may enjoy more professional and personal opportunities</li>
        <li>Attractive people tend to make higher salaries and get selected for promotions more often</li>
      </ul>
    </li>
  </ol>
  <div class="quote_wrap">
    <div class="quote">
      <h4>I had some 'work' done on my chin and neck and had the bags taken away from under my eyes. <span class="lg_txt">Now, I look more like how I feel. I'm glad I did it.</span></h4>
      <p>&mdash;Jane Fonda</p>
    </div>
  </div> 
</section>
<section class="about_book">
  <div class="options">
    <div class="sheila_book">
      <img src="imgs/sheila_promote.png" alt="Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
      <h6><img src="imgs/logo_inline.png" alt="rejuven8 north vancouver logo" class="sm"> Owner Dr. Sheila Ree, FRCSC</h6>
    </div>
    <div class="sheila_book">
      <h4>What 10 minute procedure can make you look <span class="lg_txt">decades younger?</span></h4>
      <a href="#form" class="openSignup">Find Out In Your Free Ebook</a>
      <div class="quote_wrap">
        <div class="quote">
          <h4>I wanted to get rid of the jowls and lines that were creeping up on me. <span class="lg_txt">What you can gain is more self-confidence and a perk in your step since you feel better and more youthful.</span> I’m definitely glad I did it and will come back if I need to.</h4>
          <p>&mdash;Ginny (Facelift, 67 year-old)</p>
        </div>
      </div> 
    </div>
    <div class="sheila_book">
      <img src="imgs/ebook_mirror.png" alt="What's Her Secret Free Ebook Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
    </div>
  </div>
</section>
<section class="clinic">
  <h2>Visit Rejuvin8's Convenient & Discreet Location</h2>
  <div class="options">
    <div class="clinic_details">
      <h4>Rejuvin8 Offers:</h4>
      <ul>
        <li>Private Entrance</li>
        <li>Underground parking</li>
        <li>Proximity to retail shops &amp; hotels</li>
        <li>Multilingual staff</li>
        <li>Full Service Skin Care Shop</li>
        <li>Accessible Entry</li>
        <li>Financing Options</li>
        <li>Full accredited surgical rooms</li>
        <li>Luxury recovery rooms</li>
      </ul>
      <div class="quote_wrap">
        <div class="quote">
          <h4><span class="lg_txt">Everybody fucking does it.</span> It's just the tiniest sprinkle of BOTOX&reg; here and there twice a year to take the edge off.</h4>
          <p>&mdash;Robin Wright</p>
        </div>
      </div> 
      <div class="address">
        <p>570 Dunsmuir St #600, Vancouver, BC V6B 1Y1</p>
        <p><a href="javascript:;">(111)222-3333</a></p>
        <p>*This is a VanArts student project.</p>
      </div>
    </div>
    <div class="map">
      <img src="imgs/map.png" alt="Sheila Ree Top Plastic Surgeon MD FRCSC Vancouver">
    </div>
  </div>
</section>
<script src="./js/signup.js"></script>
<?php
include("partials/footer.php");
?>