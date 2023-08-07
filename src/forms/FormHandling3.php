<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form elements with PHP file together </title>
</head>
<body>
  <pre>
     *** addslashes() function returns a string with backslashes in front of predefined characters.
         * The predefined characters are:
              single quote (')
              double quote (")
              backslash (\)
              NULL
      * NOTE: This function can be used to prepare a string for storage in a database and database queries.
      * Note: Prior to PHP 5.4, the PHP dir magic_quotes_gpc was on by default and it ran addslashes() 
               on all GET, POST, and COOKIE data by default. 
              * You should not use addslashes() on strings that have already been escaped,
                  as it will cause double escaping. 
              * The function get_magic_quotes_gpc() can be used to check this.
      -------------------------------------------------------
              <?php
                  // Example 1: - addslashes() -PHP(V4+)
                  echo "<br />";
                  $str = "Who's St' Lawrance?";
                  echo $str . " This is not safe in a database query.<br>";
                  echo addslashes($str) . " This is safe in a database query.<br>";
                  $str = addslashes('What does "jelly" mean?');
                  echo($str); 
                  echo "<br />";
              ?> 
            *** addcslashes() function returns a string with backslashes in front of the specified characters.
                * Note: The addcslashes() function is case-sensitive.
                * Note: Be careful using addcslashes() on 0 (NULL), r (carriage return), n (newline), 
                  f (form feed), t (tab) and v (vertical tab). 
                  In PHP, \0, \r, \n, \t, \f and \v are predefined escape sequences.

              <?php
                  // Example 2 - addcslashes() -PHP (V4+)
                  $str = "Welcome to my sample HTML homepage!";
                  echo $str."<br>";
                  echo addcslashes($str,'m')."<br>";
                  echo addcslashes($str,'H')."<br>";
                  echo addcslashes($str,'A..Z')."<br>";
                  echo addcslashes($str,'a..z')."<br>";
                  echo addcslashes($str,'a..g')."<br>";
              ?>
      
      *** stripslashes() function removes backslashes added by the addslashes() function.
          * Tip: This function can be used to clean up data retrieved from a database or from an HTML form.
          
      *** stripcslashes() function removes backslashes added by the addcslashes() function.
          * Tip: This function can be used to clean up data retrieved from a database or from an HTML form.


          <?php
          // Example 3: - stripslashes() & stripcslashes()  -- PHP (V4+)
              $str = "Who\'s St.Lawrance?";
              echo stripslashes($str) . "<br>";
              echo stripslashes('What does \"jelly\" mean?'). "<br>";
              echo stripcslashes("Hello \World!");
          ?>
 
    *** htmlspecialchars(string,flags,character-set,double_encode) - Converts some predefined characters to HTML entities.
        * The predefined characters are:
            & (ampersand) becomes &amp;
            " (double quote) becomes &quot;
            ' (single quote) becomes &#039;
            < (less than) becomes &lt;
            > (greater than) becomes &gt;d
        * flags -	Optional. Specifies how to handle quotes, invalid encoding and the used document type.
          * The available quote styles are:
              ENT_COMPAT - Default. Encodes only double quotes
              ENT_QUOTES - Encodes double and single quotes
              ENT_NOQUOTES - Does not encode any quotes
          * Additional flags for specifying the used doctype:
              ENT_HTML401 - Default. Handle code as HTML 4.01
              ENT_HTML5 - Handle code as HTML 5
              ENT_XML1 - Handle code as XML 1
              ENT_XHTML - Handle code as XHTML
          * character-set	Optional. A string that specifies which character-set to use.
              Allowed values are:
              UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
              ISO-8859-1 - Western European
              ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters
        * Tip: To convert special HTML entities back to characters, use the htmlspecialchars_decode() function.
    
    *** double_encode	Optional. 
            A boolean value that specifies whether to encode existing html entities or not.
            TRUE - Default. Will convert everything
            FALSE - Will not encode existing html entities

          <?php
                $str = "This is some <b>bold</b> text.";
                echo $str . "<br>";
                echo htmlspecialchars($str) . "<br />";
          ?>

 NOTE: Converting < and > into entities are often used to prevent browsers from using it
        as an HTML element. This can be especially useful to prevent code from running 
        when users have access to display input on your homepage.

  </pre>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" required>
  <br><br>
  E-mail: <input type="text" name="email" required>
  <br><br>
  Website: <input type="text" name="website" required>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br />";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br />"
// if ($gender == "male")
//   echo $gender;
// else 
?>

</body>
</html>
