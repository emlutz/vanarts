<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?=$this->description?>"/>
  
  <title><?=$this->pageTitle?></title>
  
  <link href="https://fonts.googleapis.com/css?family=Catamaran|PT+Sans:400,700|PT+Serif:400,700" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="imgs/logo.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include('nav.php');
  ?>
  <main>
    <?=$this->mainBody?>
  </main>
  <footer>
    <h4>Contact Me</h4>
    <p><?=$this->phone->value?></p>
    <p><?=$this->email->value?></p>
    <a href="<?=$this->youtube->value?>"><i class="fab fa-youtube"></i></a>
    <a href="<?=$this->twitter->value?>"><i class="fab fa-twitter"></i></a>
    <p>&copy; <?=date('Y')?> Karishma Chera</p>
  </footer>
</body>
</html>