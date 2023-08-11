<?php 
    $servername = "localhost:3306";     // MySQL connection port
    $username = "root";
    $password = "12345";
    $dbname = "MyDbPhp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>

      