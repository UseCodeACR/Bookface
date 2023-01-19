<?php
session_start();
?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$authnumber = rand(100000, 999999);
$emailauth = $_POST["email"];
$nameauth = $_POST["name"];


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bookfaceauth@outlook.com';                     //SMTP username
    $mail->Password   = 'LocalHost#123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('bookfaceauth@outlook.com', 'BookFace');
    $mail->addAddress($emailauth, $nameauth);     //Add a recipient


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Verification Code';
    $mail->Body    = 'Please Type This Number into Text Feild On Screen ' . $authnumber;
    $_SESSION["authnumber"] = $authnumber;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();


    header ("Location: /projects/Bookface/signup-verify.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    exit();
}


