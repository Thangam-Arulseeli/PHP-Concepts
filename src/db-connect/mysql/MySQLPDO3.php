<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update & Delete Record -- Using PDO </title>
</head>
<body>
    <?php
        // Example 1  // Delete Records -- Using PDO 
        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "mydbphpps";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
        } catch(PDOException $e) {
        echo "<br>" . $e->getMessage();
        }

        $conn = null;
    ?>


        <?php
           $servername = "localhost:3306";
           $username = "root";
           $password = "12345";
           $dbname = "mydbphpps";

            try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
            } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
        ?>
        
        </body>
</html>