<?php
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $message = $_POST['your-message'];
    $from = 'From: website';
    $to = 'yogitha.vja@gmail.com';
    $subject = 'Hello';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if ($_POST['submit']) {
      if ($name != '' && $email != '') {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
  }}


?>
