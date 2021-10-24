<?php
 // print_r($_POST);
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if (trim($email) == '')
    $error = 'Enter email';
  else if (trim($message) == '')
    $error = "Enter message";
  else if (strlen($message) < 10)
    $error = "Message should include 10 symbols";

  if ($error != '') {
    echo $error;
    exit;
  }

  $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
  $headers = "From: $email\r\nReply_to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('malyovashka@gmail.com', $subject, $message, $headers);

header('location: /contacts.php');
 ?>
