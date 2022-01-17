<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../vendor/autoload.php";
$mail = new PHPMailer(true);
$mail->isHTML(true);

$fromName = $_POST['name'];
$fromEmail = $_POST['email'];
$subject = $_POST['subject'];
$sendToEmail = 'dakefiy638@dkb3.com';
$sendToName = 'Luis Vargas';
$message = $_POST['message'];

try {
    $mail->setFrom($fromEmail,$fromName);
    $mail->addAddress($sendToEmail, $sendToName);
    $mail->addReplyTo($fromEmail, $fromName);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
    $mail->send();
    echo "Your message has been sent. Thank you!";
} catch (Exception $e) {
    echo "Error sending message. Please try again";
}

//$headers = array(
//    'From' => $fromName,
//    'Reply-To'=> $fromEmail,
//    'X-Mailer'=>'PHP/'.phpversion()
//);
//mail($sendToEmail, $subject, $message, $headers);
//
?>