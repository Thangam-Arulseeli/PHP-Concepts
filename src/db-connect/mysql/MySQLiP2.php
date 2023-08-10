<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Selecting the records  (MySQLi Procedural) </title>
</head>
<body>

    <?php
        // Example 1     //  Selecting the records  (MySQLi Procedural)
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

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = mysqli_query($conn, $sql);

        // $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        // $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
    ?>


    <?php
        // Example 1     //  Selecting the records and display in tabular format  (MySQLi Procedural)
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

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = mysqli_query($conn, $sql);

        // $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        // $result = mysqli_query($conn, $sql);
  
        if (mysqli_num_rows($result) > 0) {
            echo "<table border=1><tr><th>ID</th><th>Name</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
            }
            echo "</table>";
            } else {
            echo "0 results";
            }

        mysqli_close($conn);
    ?>
</body>
</html>







