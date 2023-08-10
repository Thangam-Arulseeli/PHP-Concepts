<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Select the records using PDO </title>
</head>
<body>
    <?php
        // Example 1 // Select record and display in tabular form (PDO + Prepared statement)
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

        class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
        }

        $servername = "localhost:3306";
        $username = "root";
        $password = "12345";
        $dbname = "mydbphpps";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $stmt->execute();

        // $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        // $result = $conn->query($sql)

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
        } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        }

        // SELECT statement with WHERE clause
        // try {
        //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
        //     $stmt->execute();
          
        //     // set the resulting array to associative
        //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        //       echo $v;
        //     }
        //   }
        //   catch(PDOException $e) {
        //     echo "Error: " . $e->getMessage();
        //   }



        $conn = null;
        echo "</table>";
    ?>
</body>
</html>