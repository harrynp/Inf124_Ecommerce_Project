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

?>
