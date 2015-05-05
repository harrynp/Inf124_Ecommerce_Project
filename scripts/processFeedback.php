<?php
//processFeedback.php

//Construct the message to be sent to the business
$messageToBusiness =
  "From: ".$_POST['first_name']." "
          .$_POST['last_name']."\r\n" .
  "E-mail address: ".$_POST['email']."\r\n" .
  "Subject: ".$_POST['subject']."\r\n" .
  $_POST['message'] ."\r\n";

//Send e-mail feedback message to business
$headerToBusiness =
  "From: $_POST[email] \r\n";
  mail("ahsanm@uci.edu", $_POST['subject'], $messageToBusiness, $headerToBusiness);

//Construct confirmation message that will be e-mailed to the user
$messageToClient =
  "Dear ".$_POST['first_name']." ".$_POST['last_name']."\r\n" .
  "The following message was recieved from you by Bro's Game Shop\r\n\r\n".
  $messageToBusiness.
  "-------------------------\r\nThank you for the feedback and you purchase.\r\n".
  "The Bros Game Shop Team\r\n-------------------------";

//Send the confirmation message to the client
$headerToClient = "From: ahsanm@uci.edu\r\n";
mail($_POST['email'], "Re: ".$_POST['subject'], $messageToClient, $headerToClient);

//Confirmation for the user
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
  "<html><head><title>Your Message</title></head><body><tt>".
  $display.
    "<tt></body></html>";
echo $display;


?>
