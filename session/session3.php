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
?>
  