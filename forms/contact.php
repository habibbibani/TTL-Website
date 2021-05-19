<?php
  
  $receiving_email_address = 'habibbibani79@gmail.com';

  

  if (isset($_POST['email']) && $_POST['email']!='')
  {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message=$_POST['message'];
    $body="FROM : $email \r\n Message : $message";
  }

  mail($receiving_email_address,$subject,$body);

?>
