
<?php

  $data = file_get_contents("php://input")
  $recipient="lunarxparallax@gmail.com";
  $subject="Form to email message";
  $sender=$data["name"];
  $senderEmail=$data["senderEmail"];
  $message=$data["message"];

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

 // mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

  $thankYou="<p>Thank you! Your message has been sent.</p>";


?>