<?php
require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->IsSMTP();
$mail->Host = "mail.devlosys.com";

$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = "contact@devlosys.com";
$mail->Password = "**************";

$mail->From = "contact@devlosys.com";
$mail->FromName = "Site Web DEVLOSYS";
$mail->AddAddress("contact@devlosys.com");
$mail->AddReplyTo("contact@devlosys.com");

$mail->IsHTML(true);

$mail->Subject = "Formulaire de contact";
$mail->Body = "Bonjour DEVLOSYS,<br><br>Vous venez de recevoir un email de la part de <b>".$_POST['firstname']."</b>. Ci-dessous son message et ses coordonnées:<br><br>Téléphone: ".$_POST['telephone']."<br>E-mail: ".$_POST['email']."<br><br>Message:<br>".$_POST['message']."<br><br>Cordialement,<br><b>Système DEVLOSYS</b>";
if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
?>