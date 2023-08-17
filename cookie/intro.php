<html>
<body>
  <h3> PHP Cookie </h3>
    <pre> 
        *** PHP cookie is a small piece of information which is stored at client browser. 
           It is used to recognize the user.
        ** Cookie is created at server side and saved to client browser. 
            Each time when client sends request to the server, cookie is embedded with request. 
            Such way, cookie can be received at the server side.

        ** Cookies in php - In short, cookie can be created, sent and received at server end.
        *** IMPORTANT NOTE : PHP Cookie must be used before <html> tag.
        
        *** PHP setcookie() function is used to set cookie with HTTP response. 
            Once cookie is set, you can access it by $_COOKIE superglobal variable.
            
            bool setcookie ( string $name [, string $value [, int $expire = 0 [, string $path   
                [, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )  

            setcookie("CookieName", "CookieValue");/* defining name and value only*/  
            setcookie("CookieName", "CookieValue", time()+1*60*60);//using expiry in 1 hour(1*60*60 seconds or 3600 seconds)  
            setcookie("CookieName", "CookieValue", time()+1*60*60, "/mypath/", "mydomain.com", 1);  
        
        *** Creating Cookies : setcookie()
                Creating a cookie named Auction_Item and assigning the value Luxury Car to it. 
                The cookie will expire after 2 days(2 days * 24 hours * 60 mins * 60 seconds).

                setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);  

        *** Access Cookie in PHP 
                  $_COOKIE superglobal variable is used to get cookie.
            ** Example
                $value=$_COOKIE["CookieName"];//returns cookie value  
        
        *** Delete the cookie 
             setcookie("cookiename", "", time() - 60);

        *** IMPORTANT NOTE :
            * If the expiration time of the cookie is set to 0 or omitted, 
                  the cookie will expire at the end of the session i.e. when the browser closes.
            * The same path, domain, and other arguments should be passed 
                 that were used to create the cookie in order to ensure that the correct cookie is deleted.
        
        </pre>

        <hr>
        <h3>Cookie Information - Saved in local computer </h3>
        File Path(Google) ---- C:\Users\Your_User_Name\AppData\Local\Google\Chrome\User Data\Default

        File Path(Microsoft) ----  C:\Users\Your_User_Name\AppData\Local\Microsoft\Edge\User Data\Default.
        
        Your_User_Name : CGVAK-LT 161

        <hr>
        <h3> To view the cookie details in the browser </h3>
        *** Go to "Inspect" in the browser and choose "Element” tab,
             then clicking on the “Console” tab.
            To get cookie details, type document.cookie in the console, 
              which shows the  created cookie details
       
        <hr>

        <h3> Difference between Session and Cookie </h3> <br>
        ***** SESSION 
        *** A session is used to save information on the server momentarily 
                so that it may be utilized across various pages of the website.
        *** Session values are far more secure since they are saved in binary or encrypted form 
                and can only be decoded at the server.
                 When the user shuts down the machine or logs out of the program, 
                 the session values are automatically deleted. 
                 We must save the values in the database to keep them forever.
        *** A session stores the variables and their values within a file 
                in a temporary directory on the server.
        
        ***** COOKIE 
        *** A cookie is a small text file that is saved on the user’s computer.
                The maximum file size for a cookie is 4KB. 
                It is also known as an HTTP cookie, a web cookie, or an internet cookie. 
                When a user first visits a website, the site sends data packets 
                to the user’s computer in the form of a cookie.

        *** The information stored in cookies is not safe since it is kept on the client-side 
                in a text format that anybody can see. 
                We can activate or disable cookies based on our needs.
        *** Cookies are stored on the user's computer as a text file. 
                The session ends when the user logout from the application or
                 closes his web browser. Cookies end on the lifetime set by the user.
        
        ***** The data that is kept in cookies is solely kept on the client's side,
                 whereas the information that is kept in sessions is kept on both 
                 the client and server's sides.

        *** Cookies are considered to be less safe than sessions 
                since a third-party can manipulate the data that is stored in them,
                 whereas sessions are stored in an encrypted form that the user alone can read.
</body>
</html>
