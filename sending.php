<?php
require('phpmailer/class.phpmailer.php');
$mail = new PHPMailer();

// If we have HTML content as mail body, we need to set content body text/HTML by using,
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "gihwalaravi476@gmail.com";
$mail->Password = "Baxter10";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";


/*
for setting FromEmail and FromName, we can either use SetFrom() function or use PHPMailer properties PHPMailer::From and PHPMailer::FromName. For example,
*/

// $mail->From = "from email address";
// $mail->FromName = "from name";
$mail->SetFrom("Your from email", "from name");


// AddReplyTo(), AddAddress() functions will accept array of email addresses, and name is optional.
$mail->AddReplyTo("from email", "PHPPot");
$mail->AddAddress("recipient email");



$mail->Subject = "Test email using PHP mailer";
$mail->WordWrap   = 80;
$content = "<b>This is a test email using PHP mailer class.</b>"; $mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
echo "email sent.";




?>