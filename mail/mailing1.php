<?php
// if "email" variable is filled out, send email
if (isset($_REQUEST['email'])) {
//Email information
$to = $_REQUEST['email'] ; 
$from = "seeliseelan@gmail.com"; 
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
//Send email
if (mail($to, $subject, $message, "From:" . $from))
    //Email response
    echo "Thank you for contacting us!"; 
//if "email" variable is not filled out, display the form
else {
    echo "Message could not be sent"; 
}
}
    ?>

<form method="post">
To: <input name="email" type="text" /> <br>
Subject: <input name="subject" type="text" /> <br>
Message: <textarea name="message" rows="15" cols="40"></textarea> <br>
<input type="submit" value="Submit" />
</form> <br>

// https://www.youtube.com/watch?v=Pfvlpw7Q-uQ 