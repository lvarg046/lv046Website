<?php


//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//require 'forms/vendor/autoload.php';
//$mail = new PHPMailer(true);
//$mail->isHTML(true);
//
$fromName = $_POST['name'];
$fromEmail = $_POST['email'];
$subject = $_POST['subject'];
$sendToEmail = 'sigorel286@dkb3.com';
//$sendToName = 'Luis Vargas';
$message = $_POST['message'];

$headers = array(
    'From' => $fromName,
    'Reply-To'=> $fromEmail,
    'X-Mailer'=>'PHP/'.phpversion()
);
mail($sendToEmail, $subject, $message, $headers);
//
//try {
//    $mail->setFrom($fromEmail,$fromName);
//    $mail->addAddress($sendToEmail, $sendToName);
//    $mail->addReplyTo($fromEmail, $fromName);
//    $mail->Subject = $subject;
//    $mail->msgHTML($message);
//    echo $mail->send();
//} catch (Exception $e) {
//    echo "ERROR Please try again";
//}


?>