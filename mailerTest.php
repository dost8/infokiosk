<?php
ini_set('max_execution_time',0);
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
                             // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dost8.infokiosk@gmail.com';                 // SMTP username
$mail->Password = 'Gc.68>xC{h}_dQ_N';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('dost8.infokiosk@gmail.com', 'Mailman');
$mail->addAddress('jeffrey.quilaquil@gmail.com');     // Add a recipient
#$mail->addAddress('ellen@example.com');               // Name is optional
#$mail->addReplyTo('info@example.com', 'Information');
#$mail->addCC('cc@example.com');
#$mail->addBCC('bcc@example.com');

$mail->addAttachment('technology/vsu_tech/Coco Fresh.pdf', 'hulala');         // Add attachments
#$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Test for file attachment 5';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
