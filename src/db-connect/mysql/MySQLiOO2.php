<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Selecting the records  (MySQLi Object-oriented) </title>
</head>
<body>
        
        <?php
        //  Example 1   //  Selecting the records  (MySQLi Object-oriented)
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

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);

       // if ($result == true) {
        if ($result->num_rows > 0) {
        // output data of each row
        echo "Resultant Records <br>";
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
        echo "No record found";
        }
        $conn->close();
        ?>


    <?php
        //Example 2 //Selecting the records and display in tabular form  (MySQLi Object-oriented)
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

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);

        // sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        // $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        echo "<table border=1><tr><th>ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]. "</td><td>" .$row["firstname"]." ".$row["lastname"]."</td></tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>

</body>
</html>