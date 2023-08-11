
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email =  "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $valid = false;
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $valid = false;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $valid = false;
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $valid = false;
    }
  }
  if ($valid==true){
   // header ('http://www.mywebsite.com/page.php?name=' .name. '& email=' . email);
   $nam = urlencode($_POST['name']);
   $mail = urlencode($_POST['email']);
   $contents = file_get_contents("http://127.0.0.1/FRESHERS/CRUD/create.php?name={$nam}&email={$mail}");
   
   var_dump($contents);
   //http://127.0.0.1/FRESHERS/CRUD/create.php
    }
}
?>     
    <h3>Registration Form</h3>
    <form method="post" action="">
        Name: <input type="text" name="name" value=<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?> > * <span> <?=$nameErr ?> </span><br><br/>
        Email: <input type="email" name="email" value=<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?> > * <span> <?=$emailErr ?> <br/>
        <br/>
        <input type="submit" name="save" value="Submit" >
    </form>
</body>
</html>

