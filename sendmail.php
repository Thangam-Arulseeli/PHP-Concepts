<?php
 require_once "vendor/autoload.php"; //PHPMailer Object 
$mailto = $_GET['to'];
$mailfrom = $_GET['from'];
$mailcc = $_GET['cc'];
$mailbcc = $_GET['bcc'];
$mailsubject = $_GET['subject'];
$mailbody= $_GET['mailbody'];

// $mailheader="";
// $mailheader .= $mailfrom;
// $mailheader .= $mailcc;
// $mailheader .= $mailbcc;

//for($i=0; $i<count($mailto); $i++){
    //$mailto[$i] = trim($mailto[$i]);
    // $mailsubject = $_GET['subject'];

    // $body= $_GET['mailbody'];

    // $confirm = mail($mailto, $mailsubject, $body, $mailfrom);

    // if ($confirm){
    //     echo "To: $mailto <br> ";
    //     echo "From: $mailfrom <br> ";
    //     echo "CC: $mailcc <br> ";
    //     echo "BCC: $mailbcc <br> ";
    //     echo "$body <br><br> ";
    //     echo "Mail sent to all the recipients!!!!! <br>";
    // }
    // else{
    //     echo "Mail could not be sent!!!";
    // }
//}

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer; //From email address and name 
$mail->From = $mailfrom; 
$mail->FromName = "Arulseeli Tuticorin"; //To address and name 
$mail->addAddress($mailto, "SeeliSeelan");//Recipient name is optional
$mail->addAddress($mailfrom); //Address to which recipient will reply 
$mail->addReplyTo("reply@yourdomain.com", "Reply"); //CC and BCC 
$mail->addCC($mailcc); 
$mail->addBCC($mailbcc); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = $mailsubject; 
$mail->Body = "<i> Mail body in HTML </i>" . $mailbody;
$mail->AltBody = "This is the plain text version of the email content"; 
if(!$mail->send()) 
{
echo "Mailer Error: " . $mail->ErrorInfo; 
} 
else { echo "Message has been sent successfully"; 
}

?>