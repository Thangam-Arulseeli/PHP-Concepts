<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP with MySQL DB Connection using PDO </title>
</head>
<body>
    <h3> PHP with MySQL DB Connection using PDO </h3>
    
    <pre>
    * Prepared Statements:
        "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"

        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
       $stmt->bind_param("sss", $firstname, $lastname, $email);
      
       In our SQL, we insert a question mark (?) where we want to substitute in an integer, string, double or blob value.

       $stmt->bind_param("sss", $firstname, $lastname, $email);
        This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

    * The argument may be one of four types:
        i - integer
        d - double
        s - string
        b - BLOB
        We must have one of these for each parameter.

      * By telling mysql what type of data to expect, we minimize the risk of SQL injections.

  </pre>
        
    <?php
        // Example 1   //  Create PDO Connection & DB Creation 
        $servername = "localhost:3306";     // MySQL connection port
        $username = "root";
        $password = "12345";
       // $dbname = "MyDbPhpPS";


        // try {
        //  Creates PDO connection 
        //   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        //   // set the PDO error mode to exception
        //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //   echo "Connected successfully";
        // } catch(PDOException $e) {
        //   echo "Connection failed: " . $e->getMessage();
        // }


        try {
            //Creates PDO connection 
            $conn = new PDO("mysql:host=$servername", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE MyDbPhpPS";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Database created successfully \n";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        //  $conn = null;   // Close a connection
        ?>


    <?php
        // Example 2   //  PDO -- Table Creation 

        $servername = "localhost:3306";     // MySQL connection port
        $username = "root";
        $password = "12345";
        $dbname = "MyDbPhpPS";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Table MyGuests created successfully \n";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }

        // Inserting the record
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('Arul', 'Seeli', 'arulseeli@example.com')";
            // use exec() because no results are returned
            $conn->exec($sql);
            $last_id = $conn->lastInsertId();
            echo "New record created successfully. Last inserted ID is: " . $last_id . "\n";
            // echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }

        $conn = null;
    ?>


    <?php
      // Example 3  //  PDO -- Inserting multiple records using individual insert queries
      $servername = "localhost:3306";     // MySQL connection port
      $username = "root";
      $password = "12345";
      $dbname = "MyDbPhpPS";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        // begin the transaction
        $conn->beginTransaction();
        // our SQL statements
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Johnny', 'David', 'johnny@example.com')");
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Maria', 'Dora', 'maria@example.com')");
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('Hania', 'Julie', 'hania@example.com')");
      
        // commit the transaction
        $conn->commit();
        echo "New records created successfully \n";
        $last_id = $conn->lastInsertId();
        echo "New record created successfully. Last inserted ID is: " . $last_id . "\n";
      } catch(PDOException $e) {
        // roll back the transaction if something failed
        $conn->rollback();
        echo "Error: " . $e->getMessage();
      }
      
      // If query is successfully executed last_id (Auto created) will be taken

      $conn = null;
      ?>


    <?php
      // Example 4 (PDO with Prepared Statements)
      $servername = "localhost:3306";     // MySQL connection port
      $username = "root";
      $password = "12345";
      $dbname = "MyDbPhpPS";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          // prepare sql and bind parameters
          $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
          VALUES (:firstname, :lastname, :email)");
          $stmt->bindParam(':firstname', $firstname);
          $stmt->bindParam(':lastname', $lastname);
          $stmt->bindParam(':email', $email);

          // insert a row 1
          $firstname = "Jacub";
          $lastname = "Roy";
          $email = "jacub@example.com";
          $stmt->execute();

          // insert row 2
          $firstname = "Maria";
          $lastname = "Evin";
          $email = "maria@example.com";
          $stmt->execute();

          // insert row 3
          $firstname = "Julia";
          $lastname = "Dorathy";
          $email = "julia@example.com";
          $stmt->execute();

          echo "New records created successfully";
        } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        $conn = null;
    ?>


<?php
        // Example 4 (MySQLi with Prepared Statements)
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "MyDbPhpPS";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        // set parameters and execute
        $firstname = "Peter";
        $lastname = "George";
        $email = "peter@example.com";
        $stmt->execute();

        $firstname = "Johncy";
        $lastname = "Maria";
        $email = "Maria@example.com";
        $stmt->execute();

        $firstname = "Julia";
        $lastname = "Vincy";
        $email = "julia@example.com";
        $stmt->execute();

        echo "New records created successfully";

        $stmt->close();
        $conn->close();
    ?>




</body>
</html>