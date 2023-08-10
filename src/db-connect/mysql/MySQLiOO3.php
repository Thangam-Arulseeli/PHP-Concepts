<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update & Delete Records - MySQLi (Object Oriented) </title>
</head>
<body>

    <?php   
        // Example 1 // Delete the records - MySQLi (Object Oriented)
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "MyDbPhp";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
    ?>


        <?php
            // Example 2   // Update the records - MySQLi (Object Oriented)
            $servername = "localhost:3306";
            $username = "root";
            $password = "12345";
            $dbname = "MyDbPhp";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE MyGuests SET lastname='Queena' WHERE id=2";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }

            $conn->close();
        ?>
</body>
</html>