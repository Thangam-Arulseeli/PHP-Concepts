<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Handling </title>
</head>
<body>
    <?php  
    if (isset($_GET['submit'])) {  // submit is the button name
        $username=$_GET["uname"];   //receiving name field value in $name variable  
        echo "Welcome, $username" . "<br />"; ?> 
        Your email address is: <?php echo $_GET["email"]; 
        }
    else
        echo "Not Set";
        ?> 
        <?= $_GET["uname"] ?>
</body>
</html>