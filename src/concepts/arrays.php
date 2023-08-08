<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arrays in PHP </title>
</head>
<body>
    <h2 style="background-color:cyan; color:blue;text-align:center" > PHP Arrays </h2>
    <pre> 
        ***** PHP Arrays
            * PHP array is an ordered map (contains value on the basis of key).
            * It is used to hold multiple values of similar/different types in a single variable.
            
        
        *** Advantage of PHP Array
            * Less Code: We don't need to define multiple variables.
            * Easy to traverse: By the help of single loop, we can traverse all the elements of an array.
            * Sorting: We can sort the elements of array.
        
        *** PHP Array Types
            There are 3 types of array in PHP.
            1.	Indexed Array
            2.	Associative Array
            3.	Multidimensional Array
            4.  Array within Array  

        *** PHP Indexed Array
            * PHP index is represented by number which starts from 0. 
            * We can store number, string and object in the PHP array. 
            * All PHP array elements are assigned to an index number by default.

            ** There are two ways to define indexed array:
                * 1st way:
                    $person=();
                	$season=array("summer","winter","spring","autumn");  
                * 2nd way:
                    $season[0]="Summer";  
                    $season[1]="Winter";  
                    $season[2]="Spring";  
                    $season[3]="Autumn"; 

        *** PHP Associative Array
            * We can associate name with each array elements in PHP using => symbol.
            ** There are two ways to define associative array:
                * 1st way:
                	$salary=array("Sona"=>"350000","Golda"=>"450000","Swarna"=>"200000");  
                * 2nd way:
            	$salary["Sona"]="350000";  
            	$salary["Golda"]="450000";  
            	$salary["Swarna"]="200000"; 
          
            ** Traversing PHP Associative Array
                * By the help of PHP for each loop, we can easily traverse 
                  the elements of PHP associative array.
           
        *** PHP Multidimensional Array
            * PHP multidimensional array is also known as array of arrays. 
            * It allows you to store tabular data in an array.
            * PHP multidimensional array can be represented in the form of matrix 
              which is represented by row * column.
            * Definition
            	$emp = array  
            	  (  
            	 array (1,"Sona",400000),     1   2   3
            	  array(2,"Golda",500000),    4   5   6
            	  array(3,"Swarna",300000)    7   8   9
            	  );  
            * PHP Multidimensional Array Example
                * Let's see a simple example of PHP multidimensional array 
                  to display following tabular data. In this example, 
                * we are displaying 3 rows and 3 columns.
                    Id	Name	Salary
                    1	Sona	400000
                    2	Golda	500000
                    3	Swarna	300000
           

    ***** PHP Array Functions

        *** array() function
            * PHP array() function creates and returns an array. 
            * It allows you to create indexed, associative and multidimensional arrays.
            Syntax
            	array array ([ mixed $... ] )  

        *** array_change_key_case() function
             * PHP array_change_key_case() function changes the case of all key of an array.
             * Note: It changes case of key only.
            * Syntax
                array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )  
        
        *** array_chunk() function
            * PHP array_chunk() function splits array into chunks (many parts) .
            * Syntax
            	array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )  

        *** count() function
            * PHP count() function counts all elements in an array.
            * Syntax
            	int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) 
        
        *** sort() function
            * PHP sort() function sorts all the elements in an array.
            * Syntax
                bool sort ( array &$array [, int $sort_flags = SORT_REGULAR ] )  

        *** array_reverse() function
            * PHP array_reverse() function returns an array containing elements in reversed order.
            * Syntax
	            array array_reverse ( array $array [, bool $preserve_keys = false ] ) 

        *** PHP array_search() function
            * PHP array_search() function searches the specified value in an array.
            * It returns key if search is successful.
            * Syntax
                mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )  
        
        *** array_intersect() function
            * PHP array_intersect() function returns the intersection of two array. 
            * In other words, it returns the matching elements of two array.
            * Syntax
                array array_intersect ( array $array1 , array $array2 [, array $... ] ) 

        *** print_r()
            * Description
              * print_r() displays information about a variable in a way that's readable by humans. 
            * Syntax:
              print_r(mixed $value, bool $return = false): string|bool

            * Parameters 
                value - The expression to be printed.
                return - If you would like to capture the output of print_r(), 
                            use the return parameter. When this parameter is set to true, 
                            print_r() will return the information rather than print it.
                Return Values 
                    If given a string, int or float, the value itself will be printed.
                    If given an array, values will be presented in a format that shows keys 
                    and elements. Similar notation is used for objects.
            
</pre>
         

    <?php
      // ***** Example 1.1   -- Arrays
                
                $season=array("summer","winter","spring","autumn");  
                echo "Season are: $season[0], $season[1], $season[2] and $season[3]";  
                echo "<br />";
                var_dump($season);
                echo "<br>";
               // Output:
               //     Season are: summer, winter, spring and autumn
        ?>

    
    <?php
      //  ***** Example 1.2   -- Arrays
                
                $season[0]="Summer";  
                $season[1]="Winter";  
                $season[2]="Spring";  
                $season[3]="Autumn";  
                echo "Season are: $season[0], $season[1], $season[2] and $season[3]";  
                echo "<br />";
              //  Output:
              //      Season are: Summer, Winter, Spring and Autumn
        ?>
     
     <?php
      //  ***** Example 1.3   -- Arrays
                
                echo "Personal Details <br />";
                $arr[0]="Sugumar";  
                $arr[1]=32;  
                $arr[2]="25-07-2023";  
                $arr[3]=230000;  
                echo "$arr[0], $arr[1], $arr[2] and $arr[3]";  
                echo "<br />";
              //  Output:
              //      Season are: summer, winter, spring and autumn
        ?>
        
    <?php    
        //** Example 2.1  -- Associative arrays
        echo "<br />";
        $salary=array("Hemanth"=>"750000","Harshan"=>"700000","Hari Kartik"=>"800000");    
        echo "Hemanth salary: ".$salary["Hemanth"]."<br/>";  
        echo "Harshan salary: ".$salary["Harshan"]."<br/>";  
        echo "Hari Kartik salary: ".$salary["Hari Kartik"]."<br/>";   
        echo "<br />";
        // Output:
        // Hemanth salary: 750000
        // Harshan salary: 700000
        // Hari Kartik salary: 800000
      ?>


    <?php  
        // ** Example 2.2  -- Associative Arrays
             
                $salary["Sona"]="350000";    
                $salary["Golda"]="450000";    
                $salary["Swarna"]="200000";    
                echo "Sona salary: ".$salary["Sona"]."<br/>";  
                echo "Golda salary: ".$salary["Golda"]."<br/>";  
                echo "Swarna salary: ".$salary["Swarna"]."<br/>";  
                echo "<br />";
            // Output:
            //     Sona salary: 350000
            //     Golda salary: 450000
            //     Swarna salary: 200000
            ?>

    <?php
       // ** Example 2.3  -- Associative arrays
        $salary=array("Sona"=>"550000","Golda"=>"250000","Swarna"=>"200000");  
        foreach($salary as $k => $v) {  
            echo "Key: ".$k." Value: ".$v."<br/>";  
        }  
        echo "<br />";
        // Output:
        //     Key: Sona Value: 550000
        //     Key: Golda Value: 250000
        //     Key: Swarna Value: 200000
        ?>   


        <?php
        //  ** Example 3.1  -- Multi dimentional array   
        $emp = array  
          (  
          array(1,"Sona",400000),  
          array(2,"Golda",500000),  
          array(3,"Swarna",300000)  
          );  
          
        for ($row = 0; $row < 3; $row++) {  
          for ($col = 0; $col < 3; $col++) {  
            echo $emp[$row][$col]."  ";  
          }  
          echo "<br/>";  
        }  
       
        // Output:
        // 1 Sona 400000 
        // 2 Golda 500000 
        // 3 Swarna 300000 
        ?>    


        <?php
        // Example 4   // Display Array using print_r () 
        $person = array ('name' => 'Victor', 'age' => 42, 'Address' => array ('23/4-East Street, NGGO Colony', 'Coimbatore', 612007));
        print_r ($person);
        echo "<br>";
        $results = print_r($person, true); // $results now contains output from print_r
        echo $results;
        echo "<br />";
        var_dump($person);
        echo "<br>";
        // Output:
        // Array (
        //      [name] => Victor 
        //      [age] => 42 
        //      [Address] => 
        //         Array ( 
        //             [0] => 23/4-East Street, NGGO Colony 
        //             [1] => Coimbatore 
        //             [2] => 612007 ) )
        ?>


    <?php
        $season = array("Summer","Winter","Spring","Autumn");   // Array declaration & Initialisation    
        echo "Season are: $season[0], $season[1], $season[2] and $season[3] \n "; // Printing array elements 
        echo "<br>";

        echo "No. of elements in the array : " . count($season)  . "\n";   // 4 
        echo "<br>";

        sort($season); echo("\n Sorted Array : "); 
        foreach( $season as $s )    // Array elements in sorted order
            {    
            echo "$s   \t";    
            }    
            echo "<br />";
        $reverseseason=array_reverse($season); echo ("\n Reversed Array : \t"); 
        foreach( $reverseseason as $s )    // Array elements in revered order
        {    
            echo "$s \t";    
        }    
        echo "<br />";
        $key=array_search("Spring",$season);    // 2 (index value), If no match null
        echo "\n Search element found in " .$key ."\n";    
        echo "<br />";
        $climate=array("Windy","Summer","Snow Fall","Winter","Rainy");    
        $result=array_intersect($season,$climate);  
        foreach( $result as $n )  // Summer, Winter  
        {    
        echo "$n \n";    
        }    
        echo "<br />";
        $salary=array("Kingston"=>"550000","Prince"=>"250000","Queena"=>"200000");    
        print_r(array_change_key_case($salary,CASE_UPPER));  // Change the key to uppercase
        echo "<br>";
        //Array ( [KINGSTON] => 550000 [PRINCE] => 250000 [QUEENA] => 200000 )
        
        print_r(array_change_key_case($salary,CASE_LOWER));  // Change the key to lowercase
        echo "<br>";
        //Array ( [kingston] => 550000 [prince] => 250000 [queena] => 200000 )
        
        print_r(array_chunk($salary,2));  
        echo "<br>";
        /*
        Array ( 
        [0] => Array ( [0] => 550000 [1] => 250000 ) 
        [1] => Array ( [0] => 200000 )
        )
        */
    ?>


</body>
</html>
