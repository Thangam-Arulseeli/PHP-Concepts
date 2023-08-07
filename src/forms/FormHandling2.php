<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Data - POST request</title>
</head>
<body>
<?php 
    if (isset($_POST["submitValue"])){
    $name=$_POST["name"];//receiving name field value in $name variable  
    $password=$_POST["password"];//receiving password field value in $password variable  
    echo "Welcome: $name, <br /> Your password is: $password";  
    }
    else{
        echo "User name and password word - Not Set";
    }
?>  
</body>
</html>