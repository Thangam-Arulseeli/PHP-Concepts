<?php
   $uname =$_POST["uname"];
   $mailid = $_POST["mailid"];
   $utype = "customer";

   // setcookie("user", $uname);
   // setcookie("mail", $mailid);
   // setcookie("utype", $utype);

    setcookie("user", $uname, time()+1*60*2);  // Set for 2 minutes
    setcookie("mail", $mailid, time()+1*60*2);
    setcookie("utype", $utype, time()+1*60*2);

   echo "Cookie details set successfully <br>";       
?>