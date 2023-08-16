
         <?php  
         session_start();  
         ?>  
         <html>  
         <body>  
         <?php  
             echo "Current User is : ".$_SESSION["user"] . "<br>";
             echo "Mail-ID is : " . $_SESSION["email"] . "<br>"; 
         ?>  
         </body>  
         </html> 