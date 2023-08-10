<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MySQLi(Object Oriented) </title>
</head>
<body>
    <h3> PHP with MySQL DB Connection using MySQLi (Object Oriented) </h3>

       <?php
      /*  // Example 1   //  Create MySQLi Object Oriented Connection & DB Creation 
        $servername = "localhost:3306";     // MySQL connection port
        $username = "root";
        $password = "12345";
       // $dbname = "MyDbPhp";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        else {
          echo "Database Connected successfully";
        }

        // Create database - MyDbPhp
        $sql = "CREATE DATABASE MyDbPhp";
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }

         $conn->close();   // Close the connection    
        */ 
      ?> 
   
    

  <?php
      // Example 2   //  MySQLi(OO) -- Table Creation & Record insertion  

      $servername = "localhost:3306";     // MySQL connection port
      $username = "root";
      $password = "12345";
      $dbname = "MyDbPhp";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // sql to create table
      $sql = "CREATE TABLE MyGuests (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      email VARCHAR(50),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";

      // Checking Table Creation
      if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully \n";
      } else {
        echo "Error in creating table: " . $conn->error . "\n";
      }

      // Inserting the record
      $sql = "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Arul', 'Seeli', 'arulseeli@example.com')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
  ?>


  <?php
      // Example 3  //  MySQLi(OO) -- Inserting multiple records

      $servername = "localhost:3306";     // MySQL connection port
      $username = "root";
      $password = "12345";
      $dbname = "MyDbPhp";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Jeromi', 'John', 'jeromi@example.com');";
      $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Kingston', 'Samuel', 'kingston@example.com');";
      $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Jaculine', 'Roy', 'jaculine@example.com');";

      if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully \n";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // If query is successfully executed last_id (Auto created) will be taken
     // if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "\nNew record created successfully. Last inserted ID is: " . $last_id;
      //} else {
       // echo "Error: " . $sql . "<br>" . $conn->error;
      //}

      $conn->close();
  ?>

</body>
</html>