<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/PHPMailer.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/Exception.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/OAuthTokenProvider.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/OAuth.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/POP3.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($email,$name,$title,$content){
  

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
       //$mail->SMTPDebug = 2; 
       $mail->SMTPDebug =0;                                // Enable verbose debug output
       $mail->isSMTP();                                      // Set mailer to use SMTP
       $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
       $mail->SMTPAuth = true;                               // Enable SMTP authentication
       $mail->Username   = 'nhatminhnguyen6112003@gmail.com';                     //SMTP username
       $mail->Password   = 'tnhkoprtgimgkrgy';    // SMTP password of gmail
       $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
       $mail->Port = 587;                                    // TCP port to connect to

    $mail->CharSet = 'utf-8';  
                         
  
    //Recipients
    $mail->setFrom('nhatminhnguyen6112003@gmail.com', 'Minh');
    $mail->addAddress($email,$name);     //Add a recipient
  
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $title;
    $mail->Body  = $content;
   

    $mail->send();
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

// sendMail('lop7cttnq@gmail.com','minh','title','testemail');
