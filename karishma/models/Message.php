<?php
Class Message  {
  public static function send() {
    if(isset($_POST['submit']))
    {
      Db::connect()->cleanPost();
      $name = '';
      $email = '';
      $phone = '';
      $password = '';
      $message = '';
      $date = date("Y-m-d");
    
      if($_POST['name'] !=='')
      {
        $name = $_POST['name'];
        if(!preg_match('/[a-zA-Z\-\s]{3,}/', $name)){
          $validName = false;
        } else {
          $validName = true;
        }
      }
      if($_POST['email'] !=='')
      {
        $email = $_POST['email'];
        if(!preg_match('/[a-zA-Z0-9.\-_]{1,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}/', $email)){
          $validEmail = false;
        } else {
          $validEmail = true;
        }
      }
      if($_POST['phone'] !=='')
      {
        $phone = $_POST['phone'];
        if(!preg_match('/[0-9]{3}[\-]?[0-9]{3}[\-]?[0-9]{4}/', $phone)){
          echo "Please enter a 10 digit phone number.";
          $validPhone = false;
        } else {
          $validPhone = true;
        }
      }
      if($_POST['message'] !=='')
      {
        $message = $_POST['message'];
        if(!preg_match('/.+/', $message)){
          $validMessage = false;
        } else {
          $validMessage = true;
        }
      }
    
      if($validName && $validEmail && $validPhone && $validMessage)
      {
        $insert = Db::connect()->data("INSERT INTO message (name, phone, email, message, date) VALUES('$name', '$phone', '$email', '$message', '$date')");
        if ($insert) {
          $verb = 'been sent';
          header("location: index.php?controller=pages&action=contact&msg=true&verb=$verb");
        } else {
        echo "There was an error validating your message.";
        }
      } else {
        $verb = 'not been sent';
        header("location: index.php?controller=pages&action=contact&msg=true&verb=$verb");
      }
    }
  }
}
?>