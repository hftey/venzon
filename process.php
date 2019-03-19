<?php 
//$toemail = 'raymond.tey@venzon-solution.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//if(mail($toemail, 'Contact Us - VSS Website', $message, 'From: ' . $email)) {
//	echo 'Your email was sent successfully.';
//} else {
//	echo 'There was a problem sending your email.';
//}

include "/phpmailer/class.phpmailer.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.sendgrid.net';
$mail->SMTPDebug  = 0; 
$mail->Port = 587;  
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = 'raymond.tey@venzon-solution.com';  // a valid email here
$mail->Password = '!@#QWE098poi';

//$mail->FromName = 'Venzon Solution Services';
//$mail->From = 'info@venzon-solution.com';
//$mail->AddReplyTo('info@venzon-solution.com', 'Venzon Solution Services');

$mail->FromName = $name;
$mail->From = $email;
$mail->AddReplyTo($email, $name);


$mail->Subject = "Website Enquiry";
$mail->ClearAllRecipients();

$emailFooter = "<BR><BR><font style='font-size: 10px'>This is a automated notification email sent through Venzon Solution Services </font>";
$emailHeader = "Dear Administrator <BR><BR>";
$emailContent = $message;
$mail->ClearAllRecipients();
$mail->AddAddress("info@venzon-solution.com");
$mail->Body = $emailContent; 
$mail->IsHTML(true); 				
$mail->Send();

echo "We have received your inquiries. We will get back to you as soon as possible. Thank you";
	

?>