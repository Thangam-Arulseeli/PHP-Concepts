<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <h3> MySQLi (Procedual) </h3></title>
</head>
<body>
    <h3> PHP with MySQL DB Connection using MySQLi (Procedual) </h3>

    <?php
        // Example 1   //  Create MySQLi Procedural Oriented Connection for DB Creation 
      $servername = "localhost:3306";
      $username = "root";
      $password = "12345";
      $dbname = "MyDbPhpP";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";

        // Create database
        $sql = "CREATE DATABASE MyDbPhpP";
        if (mysqli_query($conn, $sql)) {
        echo "Database created successfully <br>";
        } else {
        echo "Error creating database: " . mysqli_error($conn);
        }

         mysqli_close($conn);   // To close the connect
    ?>


    <?php
        // Example 2   //  MySQLi(P) -- Table Creation & record insertion
      
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

        // sql to create table
        $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully <br>";
        } else {
        echo "Error creating table: " . mysqli_error($conn);
        }

         // Inserting the record
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Arul', 'Seeli', 'arulseeli@example.com')";

        if (mysqli_query($conn, $sql)) {
        echo "New record created successfully \n";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>


    <?php
      // Example 3  //  MySQLi(P) -- Inserting multiple records
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

        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Johny', 'Roan', 'johny@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Maria', 'Luis', 'maria@example.com');";
        $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Julia', 'Dora', 'julia@example.com')";

        if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // If query is successfully executed last_id (Auto created) will be taken
        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

        mysqli_close($conn);
    ?>

</body>
</html>