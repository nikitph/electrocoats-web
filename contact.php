<!DOCTYPE html>
<html>
<head>
<meta  charset="utf-8" />
<meta http-equiv="refresh" content="10;URL='index.html'" />
<title>Electrocoating & Insulation Technologies Pvt. Ltd.</title>
</head>
</html>

<?php
$name=$_REQUEST['name'];
$companyName=$_REQUEST['companyName'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$interested=$_REQUEST['interested'];
$application=$_REQUEST['application'];
$remark=$_REQUEST['remark'];

date_default_timezone_set('Etc/UTC');
require_once("PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'electrocoats111@gmail.com';
$mail->Password = 'satkarinfotech!@#';
$mail->setFrom('amruta@satkarinfotech.com', 'Electrocoating & Insulation Technologies Pvt. Ltd.');
$mail->addAddress('mktg@electrocoats.com', 'Electrocoating & Insulation Technologies Pvt. Ltd.');
$mail->Subject = 'Enquiry From Electrocoating & Insulation Technologies Pvt. Ltd.';
$mail->Timeout = 3600; 
$mail->isHTML(true); 
$mail->Body ='<b>Enquiry Details</b>
<br>
<table rules="all" style="border-color: #666;" cellpadding="10">
<tr><td style="background: #eee;">Name:</td><td>'.$name.'</td></tr>
<tr><td style="background: #eee;">Company Name:</td><td>'.$companyName.'</td></tr>
<tr><td style="background: #eee;">Email:</td><td>'.$email.'</td></tr>
<tr><td style="background: #eee;">Phone:</td><td>'.$phone.'</td></tr>
<tr><td style="background: #eee;">Interested:</td><td>'.$interested.'</td></tr>
<tr><td style="background: #eee;">Application:</td><td>'.$application.'</td></tr>
<tr><td style="background: #eee;">Remark:</td><td>'.$remark.'</td></tr>
</table>
';

$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo nl2br("Thanks, Your enquiry has been submitted for processing.\nAlternatively if you wish to speak to our sales representative, please call us on any one of the following numbers: +91 9422027518 / 9370903742");
}
?>
<script>
window.onload=function() {
  setTimeout(function() {
    location.replace("index.html");
  },3000); // wait 3 seconds
}
</script>
