<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//header("Location: /index.html");

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ContactUsAtYourHome@gmail.com';                 // SMTP username
    $mail->Password = 'cs4753com';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ContactUsAtYourHome@gmail.com', 'Your Home');

    // GET there name
    $name = ' '. $_POST["firstname"] . ' ' . $_POST["lastname"];
    $email = $_POST["emailaddress"];
    $message = $_POST["message"];
    $mail->addAddress('ContactUsAtYourHome@gmail.com', $name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Contact message from " . $name;
    $mail->Body    = "USER'S NAME:" . $name . "<br><br>" . "USER EMAIL: " . $email . "<br><br>" . "MESSAGE: <br><br>" . $message;
    $mail->AltBody = "USER'S NAME:" . $name . "\n\n" . "EMAIL FROM: " . $email . "\n\n" . "MESSAGE:  \n\n" . $message;

    //$mail->send();
    if ($mail->Send()) {
    $msg = "Thanks, your message has been sent!";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    header('Location:http://192.168.64.2/YourHome-master/index.html');
  }
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
