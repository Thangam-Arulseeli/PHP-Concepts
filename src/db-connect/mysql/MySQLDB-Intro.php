<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Back End Connection - PHP with MySQL </title>
</head>
<body>
    <h3> Database Connection - PHP with MySQL </h3>
    <pre>
        MySQL is the most popular database system used with PHP.
        What is MySQL?
        •	MySQL is a database system used on the web that runs on a server
        •	MySQL is ideal for both small and large applications
        •	MySQL is very fast, reliable, and easy to use
        •	MySQL compiles on a number of platforms
        •	MySQL is free to download and use
        •	MySQL is developed, distributed, and supported by Oracle Corporation
        •	MySQL is named after co-founder Monty Widenius's daughter: My
           
        *	MySQL is an RDBMS that uses standard SQL statements 
        *   Databases are useful for storing information categorically.
        *   The data in a MySQL database are stored in tables.
        *   A table is a collection of related data, and it consists of columns and rows.
          
        *   A company may have a database with the following tables:
            •	Employees
            •	Products
            •	Customers
            •	Orders

        ** PHP + MySQL Database System
        *	PHP combined with MySQL are cross-platform 
            (We can develop application in Windows and serve on a Unix platform)

        ** Database Queries
            * A query is a question or a request.
            * We can query a database for specific information and have a recordset returned.
            * Look at the following query (using standard SQL):
            * SELECT LastName FROM Employees
            * The query above selects all the data in the "LastName" column from the "Employees" table.
            
        ** Facts About MySQL Database
            * MySQL is the de-facto standard database system for web sites with HUGE volumes of both data and end-users (like Facebook, Twitter, and Wikipedia).
            * Another great thing about MySQL is that it can be scaled down to support embedded database applications.   

        PHP Connect to MySQL
        
        ** PHP 5 and later can work with a MySQL database using:
            •	MySQLi extension (the "i" stands for improved)
                * MySQLi will work with MySQL databases.
                * MySQLi is object oriented. Also offers a procedural API and supports Prepared Statements.
                * if you have to switch your project to use another database , 
                  you will need to rewrite the entire code - queries included.
            •	PDO (PHP Data Objects)
                * PDO will work on different database systems(servers).
                * It is object oriented and support Prepared Statements
                * if you have to switch your project to use another database, PDO makes the process easy. 
                  You only have to change the connection string and a few queries.
            * Note:
                * Prepared Statements protect from SQL injection, 
                  and are very important for web application security.
                * Earlier versions of PHP used the MySQL extension. 
                    However, this extension was deprecated in 2012.
        
        ** We demonstrate three ways of working with PHP and MySQL:
            •	MySQLi (object-oriented)
            •	MySQLi (procedural)
            •	PDO

        **  MySQLi Installation
            * For Linux and Windows: The MySQLi extension is automatically installed in most cases,
              when php5 mysql package is installed.
            * For installation details, go to: http://php.net/manual/en/mysqli.installation.php

        ** PDO Installation
            For installation details, go to: http://php.net/manual/en/pdo.installation.php

        ** Open a Connection to MySQL
           * (MySQLi Object-Oriented)Get your own PHP Server
           <?php
        // Example for PHP with MySQL connection (Using MySQLi)
        $servername = "localhost:3306";     // MySQL connection port
        $username = "root";
        $password = "12345";
        $dbname = "mydatabase";       // DataBase  name in MySQL 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            echo "Successfully connected.... ";
            echo "<br><br>";
        }
?>
        
        Note : connect_error was broken until PHP 5.2.9 and 5.3.0. 
               If you need to ensure compatibility with PHP versions 
               prior to 5.2.9 and 5.3.0, use the following code instead:

                // Check connection
                if (mysqli_connect_error()) {
                die("Database connection failed: " . mysqli_connect_error());
                }

        Note: 
            * When we create a new database, 
              we must only specify the first three arguments to the 
              mysqli object (servername, username and password).
        Tip: If you have to use a specific port, 
             add an empty string for the database-name argument, 
             like this: new mysqli("localhost", "username", "password", "", port)

        ** AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
        ** PRIMARY KEY - Used to uniquely identify the rows in a table. 
            * The column with PRIMARY KEY setting is often an ID number, 
              and is often used with AUTO_INCREMENT

        ** Note: 
            * If a column is AUTO_INCREMENT (like the "id" column) or TIMESTAMP
              with default update of current_timesamp (like the "reg_date" column),
              it is no need to be specified in the SQL query; 
              MySQL will automatically add the value.

        ** Insert Multiple Records Into MySQL Using MySQLi and PDO
            * Multiple SQL statements must be executed with the mysqli_multi_query() function.
        
        ** Get ID of The Last Inserted Record
            * Perform an INSERT or UPDATE on a table with an AUTO_INCREMENT field, 
                we can get the ID of the last inserted/updated record immediately.
                (In the table "MyGuests", the "id" column is an AUTO_INCREMENT field)

       
       ***** PHP MySQL Prepared Statements
            * Prepared statements are very useful against SQL injections.

        ** Prepared Statements and Bound Parameters
            * A prepared statement is used to execute similar to 
              SQL statements repeatedly with high efficiency.

            * Working of Prepared statements:
                * An SQL statement template is created and send to the database. 
                * Certain values are left unspecified, called parameters (labeled "?").
                  Example: INSERT INTO MyGuests VALUES(?, ?, ?)
                * Execute: At a later time, the application binds the values to the parameters, 
                   and the database executes the statement.
                * Advantages
                    * Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
                    * Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
                    * Prepared statements are very useful against SQL injections,
                        because parameter values, which are transmitted later using 
                        a different protocol, need not be correctly escaped. 
                        If the original statement template is not derived from external input, 
                        SQL injection cannot occur.
    
        
        ** PHP MySQL Limit Data Selections
            * The LIMIT clause in MySQL(specify the number of records to return) makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.
            * Assume we wish to select all records from 1 - 30 (inclusive) from a table called "Orders". 
                $sql = "SELECT * FROM Orders LIMIT 30";
                                    
            * What if we want to select records 16 - 25 (inclusive)?
               
            The SQL query below says "return only 10 records, start on record 16 (OFFSET 15 - OFFSET Skips no. of records)":
            $sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";

            Notice that the numbers are reversed when you use a comma.
            $sql = "SELECT * FROM Orders LIMIT 15, 10";
  
    Reference Mail for DB :: https://codingstatus.com/display-data-in-html-table-using-php-mysql/
   #### Export MySQL table as CSV type using PHP ---- 
   https://www.youtube.com/watch?v=GtlZBcJPw5w&pp=ygUZZXhwb3J0IHRhYmxlIGFzIGNzdiBteXNxbA%3D%3D
   WITH COLUMN NAME -- https://www.youtube.com/watch?v=Ln_V2sEKO7A&pp=ygUZZXhwb3J0IHRhYmxlIGFzIGNzdiBteXNxbA%3D%3D
   
   https://www.youtube.com/watch?v=tfgsVkGUmao&pp=ygUZZXhwb3J0IHRhYmxlIGFzIGNzdiBteXNxbA%3D%3D

   IMPORT 
   import CSV to mysql --- https://www.youtube.com/watch?v=NSjI3LuVUqU 

</pre>
</body>
</html>