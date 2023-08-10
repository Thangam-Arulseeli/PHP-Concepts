<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete the records -- (MySQLi Procedural)</title>
</head>
<body>

    <?php
        // Example 1 // Delete the records -- (MySQLi Procedural)
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "MyDbPhpP";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>


    <?php
        // Example 2 // Update the records -- (MySQLi Procedural)
         $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "MyDbPhpP";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>

</body>
</html>