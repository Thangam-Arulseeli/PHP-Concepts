<?php  
if(!isset($_COOKIE["user"])) {  
    echo "Sorry, Cookie is not found!!!! <br> <br> <strong> Kindly set coookie details before access </strong>";  
} else {  
    echo "<h4> COOKIE DETAILS </h4> <br>";
    echo "<br/>User Name : " . $_COOKIE["user"] . "<br>";
    echo "<br/>Mail ID   : " . $_COOKIE["mail"] . "<br>";
    echo "<br/>User Type : " . $_COOKIE["utype"] . "<br>";

} 