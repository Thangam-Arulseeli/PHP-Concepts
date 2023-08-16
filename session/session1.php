  
<html>  
    <body>  
        <?php  
        // PHP Session Example -- Starts the session 
        echo "Starts the new session and set user name and mail-id <br> ";
        session_start();  // Starts the new session
        $_SESSION["user"] = "Lovelyn"; 
        $_SESSION["email"] = "lovelyn@hotmail.com"; 
        echo "Session information are set successfully.<br/>";  
        ?> 

    Click here to move to next page : <a href="session2.php">Visit next page</a> <br> 
    </body>  
 </html>  