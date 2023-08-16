<html>
<body> 
<h3> PHP File Handling </h3>
<pre> 
  ***** PHP File Handling 
    *** PHP File System allows us to create file, read file line by line, 
        read file character by character, write file, append file, delete file and close file.

    *** PHP Open File - fopen() function is used to open a file.
            It is used to open file or URL and returns resource. 
            ** The fopen() function accepts two arguments: $filename and $mode. 
            * The $filename represents the file to be opended
            * $mode represents the file mode for example read-only, read-write, write-only etc.
        resource fopen ( string $filename , string $mode [, bool $use_include_path = false 
                          [, resource $context ]] )  
        Example:  
              $handle = fopen("c:\\folder\\file.txt", "r");  
        
  
      PHP Open File Mode
        r	-- Opens file in read-only mode. It places the file pointer at the beginning of the file.
        r+	-- Opens file in read-write mode. It places the file pointer at the beginning of the file.
        w	-- Opens file in write-only mode. It places the file pointer to the beginning of the file 
              and truncates the file to zero length. If file is not found, it creates a new file.
        w+	-- Opens file in read-write mode. It places the file pointer to the beginning of the file and 
              truncates the file to zero length. If file is not found, it creates a new file.
        a	-- Opens file in write-only mode(append mode). It places the file pointer to the end of the file. 
              If file is not found, it creates a new file.
        a+	-- Opens file in read-write mode(append mode). It places the file pointer to the end of the file. 
              If file is not found, it creates a new file.
        x	-- Creates and opens file in write-only mode. It places the file pointer at the beginning 
              of the file. If file is found, fopen() function returns FALSE.
        x+ --	It is same as x but it creates and opens file in read-write mode.
        c	-- Opens file in write-only mode. If the file does not exist, it is created.
         If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails 
            (as is the case with 'x'). The file pointer is positioned on the beginning of the file
        c+ --	It is same as c but it opens file in read-write mode.
 <hr>
    *** PHP Close File - fclose() function is used to close an open file pointer.
        bool fclose ( resource $handle )   
              fclose($handle);  
   
  <hr>
    *** PHP Read File 
          
    ** The PHP file read functions are given below.
        * string fread (resource $handle , int $length of bytes to be read ) 
            -- Reads the contents (first line) of the file
        * string fgets ( resource $handle [, int $length ] ) 
            -- Reads single line from the file. 
        * string fgetc ( resource $handle )  
            -- Reads single character from the file. 
            -- Reads the contents of the file character by character
            --  To get all data using fgetc() function, use !feof() function inside the while loop.
    <hr>  

    *** PHP Write File 
    
    ** PHP fwrite() and fputs() functions are used to write data into file. 

      * int fwrite ( resource $handle , string $string [, int $length ] )  
            -- Writes content of the string into file.
    
    NOTE:: To write data into file, you need to use w, r+, w+, x, x+, c or c+ mode.  

    *** PHP Overwriting File
          If you run the above code again, it will erase the previous data of the file and 
          writes the new data. Let's see the code that writes only new data into data.txt file.
    
    *** PHP Append to File
      ** You can append data into file by using a or a+ mode in fopen() function.     

    <hr>
   
    *** PHP Delete File - unlink() function is used to delete file.
          bool unlink ( string $filename [, resource $context ] ) 
      ** PHP unlink() generates E_WARNING level error if file is not deleted. 
          It returns TRUE if file is deleted successfully otherwise FALSE. 
      
      </pre>

    <hr>
        <?php
        // Example 1: READ DATA FROM FILE
        // ** Example Program 1.1:  -- Reads data from the exising file as a whole and print it  
            echo "Reads data from the exising file as a whole and print it <br> ";  
            $filename = "d:\\xampp\\htdocs\\Freshers\\Assets\\Files\\mydata.txt";
           // $filename = "http://localhost/FRESHERS/Assets/Files/mydata.txt" ;  
            $handle = fopen($filename, "r");//open file in read mode    
              
            $contents = fread($handle, filesize($filename));//read file    
              
            echo $contents;//printing data of file  
            echo "<br>";
            fclose($handle);//close file    
        ?>         

   <hr>
        <?php  
         // ** Example Program 1.2:  -- Reads data from the exising file and print it line by line
            echo "Reads data from the exising file and print it line by line <br> ";      
            $filename = "d:\\xampp\\htdocs\\Freshers\\Assets\\Files\\mydata.txt";  
            $fp = fopen($filename, "r");//open file in read mode    
              
            $contents = fread($fp, filesize($filename));//read file    
              
            echo "<pre>$contents</pre>";//printing data of file 
            echo "<br>"; 
            fclose($fp);//close file    
        ?>  
    <hr>
        
    <?php  
         // ** Example Program 1.3:  -- Reads 10 bytes from the exising file and print it 
            echo "Reads 10 bytes from the exising file and print it <br> ";    
            $filename = "d:\\xampp\\htdocs\\Freshers\\Assets\\Files\\mydata.txt";  
            $fp = fopen($filename, "r");//open file in read mode    
              
            $contents = fread($fp, 10 );// Reads only 10 bytes of data from file     
              
            echo "<pre>$contents</pre>";//printing data of file 
            echo "<br>"; 
            fclose($fp);//close file    
        ?>  
    <hr>

        <?php  
        // ** Example Program 2.1:// Opens a file and write contents into it using fwrite() 
        $fp = fopen('data.txt', 'w');//opens file in write-only mode  
        fwrite($fp, 'Welcome!!!! ');  
        fwrite($fp, 'To PHP File Concepts.  '); 
        fwrite($fp, "fwrite() is used to write data into a file");
        fclose($fp);  
          
        echo "File written successfully";  
        ?>  
    <hr>

    <?php  
        // ** Example Program 2.2:// Opens a file and write contents into it using fwrite() 
        $fp = fopen('phpframeworks.txt', 'w');//opens file in write-only mode  
        fwrite($fp, 'Laravel  ');  
        fwrite($fp, 'Symfony  '); 
        fwrite($fp, 'CakePHP  '); 
        fwrite($fp, 'CodeIgniter  '); 
        fwrite($fp, 'Yii 2  '); 
        fwrite($fp, 'Laminas Project  '); 
        fwrite($fp, 'Zend Framework  '); 
        fwrite($fp, 'Phalcon  '); 
        fwrite($fp, 'Slim Framework  ');
        fwrite($fp, 'FuelPHP  ');
        fwrite($fp, 'PHPPixie  ');
        fwrite($fp, "fwrite() is used to write data into a file");
        fclose($fp);  
          
        echo "File written successfully";  
        ?>  
    <hr>

        <?php    
        // ** Example Program 3.1:// Opens an exising file read mode and reads the contents of the file using fgets()
        echo "Opens an exising file read mode and reads the contents of the file using fgets()<br>";
        $fp = fopen("data.txt", "r");//open file in read mode    
        echo fgets($fp);  
        fclose($fp);  
        ?>    
       <hr>   
          
        <?php 
        // ** Example Program 3.2:// Opens an exising file read mode and reads the contents of the file using fgetc()   
        echo "Opens an exising file read mode and reads the contents of the file using fgetc() <br>";
        $fp = fopen("phpframeworks.txt", "r");//open file in read mode    
        while(!feof($fp)) {  
            echo fgetc($fp);  
        }  
        fclose($fp);  
        ?>    
    <hr>
    <hr>
    
          <?php
            // ** Example Program 4.1:// Create a file for demonstrating append    
          $fp = fopen('datafile.txt', 'w');//opens file in write-only mode  
          fwrite($fp, 'Hello Everyone!!!!!');  
          fclose($fp);  
            
          echo "File written successfully <br>";  
          ?>  
          
          <?php
           // ** Example Program 4.2:// Create a file for demonstrating append  
           echo "Create a file for demonstrating append  <br>";    
          $fp = fopen('datafile.txt', 'a');//opens file in append mode  
          fwrite($fp, '  This is additional text - ');  
          fwrite($fp, 'Appending data');  
          fclose($fp);  
            
          echo "File appended successfully <br> ";  
          ?>  
    <hr>
    
        <?php  
         // ** Example Program 5.1:// Delete a file    
         echo "Delete a file <br> ";  
         unlink('data.txt');  
          
        echo "File deleted successfully <br> ";  
        ?>  

    
          <?php 
           // ** Example Program 5.2:// Delete a file  with status  
          echo "Delete a file with status <br>";    
          $status=unlink('datafile.txt');    
          if($status){  
          echo "File deleted successfully <br> ";    
          }else{  
          echo "Sorry! <br>";    
          }  
          ?>

</body>
</html>