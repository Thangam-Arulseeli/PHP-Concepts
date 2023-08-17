<?php
// Example PHP code to unset $_SESSION[] variable and destroy the session
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
}
if(isset($_SESSION["email"])){
    unset($_SESSION["email"]);
}
session_start();
session_destroy();
echo "Session variables are reset and session is destroyed <br> ";
echo "Email : " . $_SESSION["email"];  // Error, since we unset it already
?>
  