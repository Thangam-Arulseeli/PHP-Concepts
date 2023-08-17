  
<html>  
    <body>  
        <?php  
            // PHP Session Example -- Starts the session 
            echo "Starts the new session and set user name and mail-id <br> ";
            session_start();  // Starts the new session
            $_SESSION["user"] = "Princylin"; 
            $_SESSION["email"] = "princylin@hotmail.com"; 
            echo "Session information are set successfully.<br/> <br />";  
            echo "Current User is : ".$_SESSION["user"] . "<br>";
            echo "Mail-ID is : " . $_SESSION["email"] . "<br>"; 
        ?> 

    Click here to move to next page : <a href="display.php">Visit next page</a> <br> 
    </body>  
 </html>  