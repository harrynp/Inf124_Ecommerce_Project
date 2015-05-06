<?php
//processOrder.php
$product1_quantity = 0;
$product2_quantity = 0;

if(isset($_POST[product1])){
  $product1_quantity = $_POST['product1_quantity'];
}

if(isset($_POST[product2])){
  $product2_quantity = $_POST['product2_quantity'];
}

//Construct the message to be sent to the business
$messageToBusiness =
  "From: ".$_POST['first_name']." "
          .$_POST['last_name']."\r\n".
  "E-mail address: ".$_POST['email']."\r\n".
  "Address: ".$_POST['address']."\r\n" .
  "Credit Card: " .$_POST['credit_card']."\r\n".
  "CVC: " .$_POST['cvc']."\r\n".
  "Fire Emblem IF: Dark Night Kingdom x" .$product1_quantity. " $". 49.99*$product1_quantity.  "\r\n".
  "Fire Emblem IF: White Night Kingdom x" .$product2_quantity. " $". 39.99*$product2_quantity. "\r\n".
  "Total: $". (49.99*$product1_quantity + 39.99*$product2_quantity). "\r\n";


//Send e-mail feedback message to business
$headerToBusiness =
  "From: $_POST[email] \r\n";
  mail("ahsanm@uci.edu", "Order Form", $messageToBusiness, $headerToBusiness);

//Construct confirmation message that will be e-mailed to the user
$messageToClient =
  "Dear ".$_POST['first_name']." ".$_POST['last_name']."\r\n" .
  "The following message was recieved from you by Bro's Game Shop\r\n\r\n".
  $messageToBusiness.
  "-------------------------\r\nThank you for your purchase.\r\n".
  "The Bros Game Shop Team\r\n-------------------------";

//Send the confirmation message to the client
$headerToClient = "From: ahsanm@uci.edu\r\n";
mail($_POST['email'], "Re: Order Form", $messageToClient, $headerToClient);

//Confirmation for the user
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
  "<html><head><title>Your Message</title></head><body><tt>".
  $display.
    "<tt></body></html>";
echo $display;

//Log the message in a file
$fileVar = fopen("../data/order.txt", "a")
  or die("Error: Could not open the log file.");
fwrite($fileVar, "\n---------------------------------------------\n")
  or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
  or die("Error: Could not write to the log file.");

?>
