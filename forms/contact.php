<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'habibbibani79@gmail.com';

  

  if (isset($_POST['email']) && ($_POST['email']!=''))
  {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message=$_POST['message'];
    $body="FROM : $email \r\n Message : $message";
  }

?>
