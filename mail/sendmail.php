<?php
// require_once "vendor/autoload.php"; //PHPMailer Object 
$mailto = $_POST['to'];
$mailfrom = $_POST['from'];
$mailcc = $_POST['cc'];
$mailbcc = $_POST['bcc'];
$mailsubject = $_POST['subject'];
$message= $_POST['mailbody'];

// Always set content-type when sending HTML email
 $header = "MIME-Version: 1.0" . "\r\n";
 $header .= "content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
 $header .= 'From: ' . $mailfrom . "\r\n";
 $header .= 'Cc: ' . $mailcc  . "\r\n";
 $header .= 'Bcc: ' . $mailbcc  . "\r\n";

//$header = "From: PHP code for sending mail";
$confirm = mail($mailto,$mailsubject,$message,$header);

if ($confirm){
        echo "To: $mailto <br> ";
        echo "From: $mailfrom <br> ";
       // echo "CC: $mailcc <br> ";
       // echo "BCC: $mailbcc <br> ";
        echo "$message <br><br> ";
        echo "Mail sent the recipient!!!!! <br>";
    }
    else{
        echo "Mail could not be sent!!!";
    }

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


// $mail = new PHPMailer; //From email address and name 
// $mail->From = $mailfrom; 
// $mail->FromName = "Arulseeli Tuticorin"; //To address and name 
// $mail->addAddress($mailto, "SeeliSeelan");//Recipient name is optional
// $mail->addAddress($mailfrom); //Address to which recipient will reply 
// $mail->addReplyTo("reply@yourdomain.com", "Reply"); //CC and BCC 
// $mail->addCC($mailcc); 
// $mail->addBCC($mailbcc); //Send HTML or Plain Text email 
// $mail->isHTML(true); 
// $mail->Subject = $mailsubject; 
// $mail->Body = "<i> Mail body in HTML </i>" . $mailbody;
// $mail->AltBody = "This is the plain text version of the email content"; 
// if(!$mail->send()) 
// {
// echo "Mailer Error: " . $mail->ErrorInfo; 
// } 
// else { echo "Message has been sent successfully"; 
// }

?>
