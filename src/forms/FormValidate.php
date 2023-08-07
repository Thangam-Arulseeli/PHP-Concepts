<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$_SESSION['name']=$_SESSION['email']=$_SESSION['gender']="";
 $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $_SESSION['name'] = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $_SESSION['name'] = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $_SESSION['email']= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['email']= "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $_SESSION['gender'] = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $_SESSION['name'];?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $_SESSION['email'];?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $_SESSION['gender'];?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php 
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['gender']);
    ?>
<pre> 
  *** unset() destroys the value of the specified variables. 
    * The behavior of unset() inside of a function can vary depending on what type of variable you are attempting to destroy.
    * If a (globalized) variable is unset() inside of a function, only the local value is destroyed.
    * Example :
      unset($username);
      unset($_SESSION['name']);

  *** isset() function checks whether a variable is set, which means that it has to be declared, atleast 0/"" and is not NULL.
    * This function returns true if the variable exists and is not NULL, otherwise it returns false.
          $b = null;
          // False because $b is NULL
          if (isset($b)) {
            echo "Variable 'b' is set.";
          }
          echo "Variable 'b' is not set/null "; // Output

  *** empty() function checks whether a variable is empty or not.
      * This function returns false if the variable exists and is not empty, otherwise it returns true.
      * The following values evaluates to empty:
            0
            0.0
            "0"
            ""
            NULL
            FALSE
            array()
      * Example:
        $a = 0;
        // True because $a is empty
        if (empty($a)) {
          echo "Variable 'a' is empty.<br>"; // Output - it is empty, that is 0
        }

        // True because $a is set
        if (isset($a)) {
          echo "Variable 'a' is set.";  // Output - Because it is set to 0, not null
        }
        </pre>
</body>
</html>