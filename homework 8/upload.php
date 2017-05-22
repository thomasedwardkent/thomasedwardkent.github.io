<?php

//Begin a PHP block 

$msg = "E-MAIL SENT FROM FOG\n";

/* start building a message string for sending email
E-MAIL SENT FROM FOG will be the first line in the message text of the email that is sent and can 
be changed to anything you like. \n is a carriage return. */

$msg .= "Sender's Name:    $_POST[sender_name]\n";
$msg .= "Sender's E-mail:    $_POST[sender_email]\n";
$msg .= "Sender's Age:       $_POST[age]\n";
$msg .= "Message:              $_POST[message]\n\n";

/* Continue building the message string by adding an 
entry for the sender's name, e-mail address, age, 
and the message. The variable names in the brackets
must match EXACTLY your variable names in your form. */


$to = "srubin45@comcast.net";

//Create a variable to hold the recipient's e-mail address (substitute your own):

$subject = "Form Feedback from Fog";

//Create a variable to hold the subject of the e-mail

$mailheaders = "From: $_POST[sender_email]\n";

/* Create a variable to hold the From: mailheader.
Note also that the variable name inside of the square brackets must match EXACTLY
the variable name in your form input text box for sender's email address. */


$mailheaders .= "Reply-To: $_POST[sender_email]\n\n";

//Create a variable to hold the Reply-To: mailheader


mail($to, $subject, $msg, $mailheaders);

//Add the mail() function


?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>The following email has been sent to Steve Rubin</title>

</head>
<body style="background-color: #f5f5dc;">

<h3>The following email has been sent to  Steve Rubin:</h3>

<p><b>Your Name: </b>
<?php echo "$_POST[sender_name]"; ?>
</br></br>

<!-- 
returns to the screen the value of sender_name.
Note again that the variable name inside of the square brackets must match EXACTLY
the variable name in your form input text box for sender's name. */
-->

<b>Your E-mail Address: </b>
<?php echo "$_POST[sender_email]"; ?>
</br></br>

<!--returns to the screen the value of sender_email.-->

<b>Your Age: </b>
<?php echo "$_POST[age]"; ?>
</br></br>

<!--returns to the screen the value of age.-->

<b>Your Message:</b>
<?php echo "$_POST[message]"; ?>


<!--returns to the screen the value of message.-->

</p>

</body>
</html>