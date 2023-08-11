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
    The page on the server called by the JavaScript above is a PHP file called "AJAXDB.php".
    The source code in "AJAXDB.php" runs a query against a MySQL database,
        and returns the result in an HTML table: -->

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','peter','abc123');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM user WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
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
