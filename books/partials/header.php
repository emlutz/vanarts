<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?=$arrPageDetails["strName"]?></title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Lora:400,700" rel="stylesheet">  
  <link rel="icon" type="image/png" sizes="16x16" href="templates/imgs/16x16.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="templates/css/main.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
  <!-- fixed navigation section -->
  <header> 
    <div class="navLogo">
      <a href="index.php"><img src="templates/imgs/logo.png" alt="Books for Kids Logo"></a>
    </div>
    <div class="topNav">
      <ul>
        <?php ////////////Get links to pages
        getNavLinks(1);
        ?>
      </ul>
    </div>
    <div class="navCta">
      <p>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </p>
      <a href="#" class="donatePop">Donate <i class="fas fa-book-reader"></i></a>
    </div>
  </header>
  <!-- donation form pop up -->
  <div id="donateBox">
    <div class="modal">
      <h2>Support Us</h2>
      <a href="#" class="closeIcon" id="closeModal"><i class="fas fa-times"></i></a>
      <form>
        <label>Full Name</label>
        <input type="text" placeholder="name">
        <label>Email Address</label>
        <input type="text" placeholder="email">
        <label>I am interested in:</label>
        <select>
          <option>Get Involved</option>
          <option>Donate</option>
          <option>Volunteer</option>
          <option>Fundraise</option>
        </select>
        <input type="submit" value="Donate">
      </form>
    </div>
  </div>