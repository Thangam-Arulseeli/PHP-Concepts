<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<!-- The PHP File
    The page on the server called by the JavaScript above is a PHP file called "dbdisplay.php".
    The source code in "dbdisplay.php" runs a query against a MySQL database,
        and returns the result in an HTML table: -->

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost:3306','root','12345');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"MyDbPhp");
    $sql="SELECT * FROM userdata WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>ID</th>
    <th>User Name</th>
    <th>EMail ID</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    
    // Explanation: 
    // When the query is sent from the JavaScript to the PHP file, the following happens:
    
    // * PHP opens a connection to a MySQL server
    // * The correct person is found
    // * An HTML table is created, filled with data, and sent back to the "txtHint" placeholder
    
 ?>
</body>
</html>
