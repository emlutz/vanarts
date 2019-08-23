<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?=$this->description?>"/>
  
  <title><?=$this->pageTitle?></title>
  
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="content/imgs/16x16.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="content/css/main.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
  <?=$this->nav?>
  <main>
  <?=$this->mainBody?>
  <script src="content/js/style.js"></script>
  <script src="content/js/cart.js"></script>
  <script src="content/js/quickview.js"></script>
  </main>
  <footer>
    <h4>Contact Us</h4>
    <a href="javascript:;">(111) 222 3333</a>
    <a href="javascript:;">570 Dunsmuir St, Vancouver BC</a>
    <a href="javascript:;">email@healthglow.com</a>
    <a href="javascript:;">&copy; <?=date('Y')?> Health Glow</a>
  </footer>
</body>
</html>