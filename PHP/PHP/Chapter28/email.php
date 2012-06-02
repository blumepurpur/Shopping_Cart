<?php
session_start();
// include function files for this application
require_once('book_sc_fns.php');
$customers_emails=false;

// Email Settings
$site['from_name'] = 'Arturo'; // from email name
$site['from_email'] = 'email@mywebsite.com'; // from email address
$site['subject']="Promotion";
// provide an option to use external mail server.
//$site['smtp_mode'] = 'disabled'; // enabled or disabled
//$site['smtp_host'] = null;
//$site['smtp_port'] = null;
//$site['smtp_username'] = null;

require_once('phpMailer/class.phpmailer.php');

$mail = new PHPMailer(); // defaults to using php "mail()"

//$mail->IsSendmail(); // telling the class to use SendMail transport
$mail->IsSMTP();
for($i=0,$j=count($customers_emails);$i<$j;$i++)
{
	$mail->AddBCC($customers_emails[$i]['email']);
}

$mail->AddReplyTo("noreply@noreply.com");

$mail->SetFrom($site['from_email'], $site['from_name']);

$mail->AddAddress($site['from_email'], $site['from_name']);

$mail->Subject    = $site['subject'];

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($_POST['body']);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    

?>