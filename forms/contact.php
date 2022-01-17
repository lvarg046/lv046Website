<?php
/*
 * Using the php mailer to handle email sending.
 * Removed usage from index.html since GitHub Pages only supports static pages.
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "../vendor/autoload.php";
$mail = new PHPMailer(true);
$mail->isHTML(true);

/*
 * The
 */
$fromName = $_POST['name'];
$fromEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sendToEmail = 'luis@lvargas.net';
$sendToName = 'Luis Vargas';

try {
    $mail->setFrom($fromEmail,$fromName);
    $mail->addAddress($sendToEmail, $sendToName);
    $mail->addReplyTo($fromEmail, $fromName);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
    $mail->send();
    echo "Your message has been sent. Thank you! You will be redirected to the main page shortly.";
    header("refresh:5; url=http://localhost:63342/lv046Website/index.html?");

} catch (Exception $e) {
    echo "Error sending message. You will be redirected to the previous page shortly";
    header("refresh:5; url=http://localhost:63342/lv046Website/index.html?");
}

/*
 * Uses the old php mail() function  below
 */
//$headers = array(
//    'From' => $fromName,
//    'Reply-To'=> $fromEmail,
//    'X-Mailer'=>'PHP/'.phpversion()
//);
//mail($sendToEmail, $subject, $message, $headers);
//
?>