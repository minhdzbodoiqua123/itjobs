<?php
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/PHPMailer.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/Exception.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/OAuthTokenProvider.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/OAuth.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/POP3.php';
require ''.__DIR_ROOT.'/app/library/PHPMailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($email,$title,$content){
  

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
    $mail->setFrom('nhatminhnguyen6112003@gmail.com', 'ITJOBS');
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



$current_url = sprintf(
    '%s://%s/%s',
    isset($_SERVER['HTTPS']) ? 'https' : 'http',
    $_SERVER['HTTP_HOST'],
    $_SERVER['REQUEST_URI']
);

function current_url() {
    $current_url = sprintf(
        '%s://%s/%s',
        isset($_SERVER['HTTPS']) ? 'https' : 'http',
        $_SERVER['HTTP_HOST'],
        $_SERVER['REQUEST_URI']
    );
    return $current_url;

}

function formatDate($data){
    return   strftime("%d/%m/%Y",strtotime($data));
}
function format_price($priceFloat) {

    $symbol_thousand = ',';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price;
 }
 function getParamFromUrl($url, $paramName){
    parse_str(parse_url($url, PHP_URL_QUERY), $op); // Fetch query parameters from a string and convert to an associative array
    return array_key_exists($paramName, $op) ? $op[$paramName] : "Not Found"; // Check if the key exists in this array
  }
// sendMail('lop7cttnq@gmail.com','minh','title','testemail');
