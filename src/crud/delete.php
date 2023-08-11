<?php 
// Include script to make a database connection
include("connect.php");
// Check that the input fields are not empty and process the data
if(!empty($_POST['delete']) && !empty($_POST['id'])){
    $query3 = "DELETE FROM userdata WHERE id='".$_POST['id']."' ";
    if (mysqli_query($conn, $query3)) {
        echo "Record deleted successfully !";
    } else {
        // Display an error message if unable to delete the record
       echo "Error deleting record: " . $conn->error;
    }
}
?>
<form action='form-post.php' method='post'>
    <button type='submit' name='back' value='back'>BACK</button>
</form>

