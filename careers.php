<!DOCTYPE html>
<html>
<head>
<meta  charset="utf-8" />
<meta http-equiv="refresh" content="10;URL='index.html'" />
<title>Enquiry from Career - Advent ToolTech</title>
</head>
  </html>
<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$interested=$_REQUEST['interested'];
$message=$_REQUEST['message'];


date_default_timezone_set('Etc/UTC');
require_once("PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = 'adventtooltech1@gmail.com';
$mail->Password = '';
$mail->setFrom('digibizwebsolutions@gmail.com', 'Advent ToolTech');
$mail->addAddress('digibizwebsolutions@gmail.com', 'Advent ToolTech');
$mail->Subject = 'Enquiry From career- Advent ToolTech';

    
    $mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
	
$mail->isHTML(true);                                  // Set email format to HTML


$mail->Body ='<b>Enquiry Details</b>
<br>
<table rules="all" style="border-color: #666;" cellpadding="10">
<tr><td style="background: #eee;">Name:</td><td>'.$name.'</td></tr>
<tr><td style="background: #eee;">Email:</td><td>'.$email.'</td></tr>
<tr><td style="background: #eee;">Phone:</td><td>'.$phone.'</td></tr>
<tr><td style="background: #eee;">Address:</td><td>'.$address.'</td></tr>
<tr><td style="background: #eee;">Message:</td><td>'.$message.'</td></tr>

</table>

';
/*$captcha;
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
	$secretKey = "";
	$ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>Thanks your enquiry has been submitted</h2>';
        } else {
          echo '<h2>Thanks your enquiry has been submitted.</h2>';
        }
*/
$mail->AltBody = 'This is a plain-text message body';
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo nl2br("Thanks, Your enquiry has been submitted for processing.\nAlternatively if you wish to speak to our representative, please call us on any one of the following numbers: +91-8380067841  .");
}
?>
<script>
window.onload=function() {
  setTimeout(function() {
    location.replace("index.html");
  },3000); // wait 3 seconds
}
</script>


