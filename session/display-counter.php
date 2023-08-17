<html>  
<body>  
<?php 
    session_start();   
    echo "Current User is : ".$_SESSION["user"] . "<br>";
    echo "Mail-ID is : " . $_SESSION["email"] . "<br>"; 
    echo "Number of visits : " . $_SESSION["counter"] . "<br>";
?>  
</body>  
</html> 