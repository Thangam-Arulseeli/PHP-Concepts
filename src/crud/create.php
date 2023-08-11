 <?php /* //////When we use POST - Form method (Form action call)
// Include script to make a database connection
include("connect.php");
// Check if input fileds are empty
if(empty($_POST['name']) && empty($_POST['email'])){
    // If the fields are empty, display a message to the user
    echo "Please fill in the fields";
// Process the form data if the input fields are not empty
}else{
    $name= $_POST['name'];
    $email= $_POST['email'];
    echo ('Your Name is:     '. $name. '<br/>');
    echo ('Your Email is:'   . $email. '<br/>');
    # Insert into the database
    $query = "INSERT INTO userdata(name,email) VALUES ('$name','$email')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . $conn->error;
    }
}  */

////// When we use header - redirection with query string
// Include script to make a database connection
include("connect.php");
    $name= $_GET['name'];
    $email= $_GET['email'];
    echo "Your Name is:     ". $name. "<br/>";
    echo "Your Email is:   "   . $email. "<br/>";
    # Insert into the database
    $query = "INSERT INTO userdata(name,email) VALUES ('$name','$email')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . $conn->error;
    }
?> 

<form action='form-post.php' method='post'>
    <button type='submit' name='back' value='back'>BACK</button>
</form>
