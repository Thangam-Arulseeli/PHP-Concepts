<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> My PHP File </title>
</head>
<style>
   pre{
      color: blue; 
      
      </style>
<body>
<pre>
*** PHP program is saved with .php extension

*** The syntax of PHP tag is given below: 
	<?php   
	//your code here --- Every executable statement ends with semicolon (;).
	?> 

  In shortern way we can use
      <? 
         // Write your code here
      ?>

*** Ways to Run the PHP program *** 
1. Right click on the php file and select Code runner to execute php page.
   Code Runner runs(interprets) PHP code only, it doesn't interpret HTML tags.
   The result of php code is displayed in output window
2. To execute and view the php page in the browser.
   Start Apache Tomcat Server for executing Server-Side Script
   Open the web browser and type http://localhost/Freshers/first.php
   on your browser window. 

*** Case Sensitivity - PHP  ***
* In PHP, keyword (e.g., echo, if, else, while), functions, user-defined functions, classes are not case-sensitive.
* However, all variable names are case-sensitive. Variable $pname and $PName are different

*** ECHO  ***
* PHP echo is a language construct, not a function.
* Therefore, you don't need to use parenthesis with it. No error will come when () is used
* echo does not return any value.
* We can pass multiple strings separated by a comma (,) or by dot (.) in echo.
* echo is faster than the print statement. 

*** PRINT *** 
Print can be used with or without parentheses.
Print always returns an integer value, which is 1.
Using print, we cannot pass multiple arguments.
Print is slower than the echo statement.

NOTE: * PHP statements are terminated by ;
      * PHP echo/print statement can be used to print the string, 
          multi-line strings, escaping characters, variable, array, etc. 

*** Variables in PHP ***
In PHP, a variable is declared using a $ sign followed by the variable name. 
o	As PHP is a loosely typed language, so we do not need to declare the data types of the variables. 
   It automatically analyses the values and makes conversions to its correct datatype.
o	After declaring a variable, it can be reused throughout the code.
o	Assignment Operator (=) is used to assign the value to a variable.
Syntax of declaring a variable in PHP is given below:
   $variablename=value;  // Rules for variable name is same as c and c++
[Variable name is the combination of alphanumeric value and _
It starts with alphabets and _
Strictly case sensitive]
*** Declaring string, integer, and float *** 
[Example to store string, integer, float, boolean values in PHP variables].
 <?php  
	$pname="Manohar";  //string
   $ht=173;  // integer
   $wt=64.5 ; // float
   $status=false; // boolean
   ?> 

*** PHP Data Types
   PHP data types are used to hold different types of data or values.
   PHP supports 8 primitive data types that can be categorized further in 3 types:
      1.	Scalar Types (predefined -- built-in)
      2.	Compound Types (user-defined)
      3.	Special Types
   PHP Data Types: Scalar Types
         It holds only single value. There are 4 scalar data types in PHP.
         1.	boolean   
         2.	integer
         3.	float
         4.	string
   PHP Data Types: Compound Types
         It can hold multiple values. There are 2 compound data types in PHP.
         1.	array
         2.	object
   PHP Data Types: Special Types
         There are 2 special data types in PHP.
         1.	resource
         2.	NULL

*****
**Scalar data type
*boolean
   It holds only two values: TRUE / true (1) or FALSE / false (0). 
   It is often used with conditional statements. 
   If the condition is correct, it returns TRUE otherwise FALSE.
   Example:
   $status=TRUE / true
	<?php   
	    if (true) 
	        echo "This condition is TRUE.";  
	    if (FALSE)  
	        echo "This condition is FALSE.";  
	?>  

   <?php   
         if (1) 
            echo "This condition is TRUE(1)";  
         else
            echo "This condition is FALSE(0).";  
      ?>  
*integer
Rules for integer:
o	An integer can be either positive or negative.
o	An integer must not contain decimal point.
o	Integer can be decimal (base 10), octal (base 8), or hexadecimal (base 16).
o	The range of an integer must be lie between 2,147,483,648 and 2,147,483,647 i.e., -2^31 to 2^31.
Example:
	<?php   
       $dec1 = 34;  
	    $oct1 = 0243;  
	    $hexa1 = 0x45;  
      echo "<br>Decimal number: " .$dec1. "</br>";  
      echo "Octal number: " , $oct1 , "</br>";  
      echo "HexaDecimal number: " , $hexa1 , "<br />";  
	?>  
Output:  // Numbers are converted into decimal and printed
Decimal number: 34
Octal number: 163   [3*8^0 + 4*8^1 + 2*8^2 = 3+32+128 = 163]
HexaDecimal number: 69  [5*16^0 + 4*16^1 = 5+64 = 69]

*float
A floating-point number is a number with a decimal point/fractional part including a negative or positive sign.
<?php   
	    $n1 = 19.34;  
	    $n2 = -54.472;  
	    $sum = $n1 + $n2;  
	    echo "Addition of floating numbers: " ,$sum;  
	?>  


*PHP String
A string is a non-numeric data type.
It contains any value that must be enclosed either within single quotes or in double quotes. 
But both are treated differently. To clarify this, see the example below:
Example:
<?php   
	    $company = "CGVAK";  
	    //both single and double quote statements will treat differently  
	    echo "Hello $company \n";  
	   // echo "</br>";  
	    echo 'Hello $company \n';  
       echo `Hello $company \n`;  // Not working(printing anything as it is)
	?>  
Output:
Hello CGVAK \n
Hello $company

**Compound data type
*PHP Array
An array is a compound data type. 
It can store multiple values of same/different data type in a single variable.
Example:
	<?php   
	    $bikes = array ("Royal Enfield", "Yamaha", "KTM", 120000, 80000, 378900.50);  
	    echo "</br>Print array using var_dump() . <br />"; 
       var_dump($bikes);   //the var_dump() function returns the array elements [array size & index ]the datatype and values as well as length of each element
       echo $bikes; // Won't print the data -- Error comes
       echo "<br />";
	    echo "Array Element1: $bikes[0] </br>";  
	    echo "Array Element2: $bikes[1] </br>";  
	    echo "Array Element3: $bikes[2] </br>";  
       print("<pre>"."Array Display using print_r()" . print_r($bikes,true)."</pre>");
	?>  
Output:
array(3) { [0]=> string(13) "Royal Enfield" [1]=> string(6) "Yamaha" [2]=> string(3) "KTM" }
Array Element1: Royal Enfield
Array Element2: Yamaha
Array Element3: KTM


*PHP object
Objects are the instances of user-defined classes that can store both values and functions.
They must be explicitly declared.
Example:
<?php   
	     class bike {  
	          function model() {  
	               $model_name = "Royal Enfield";  
	               echo "Bike Model: " .$model_name;  
	             }  
     }  
	     $obj = new bike();  
	     $obj -> model();  
	?>  
Output:
Bike Model: Royal Enfield

**
*PHP Resource
Resources are not the exact data type in PHP.
Basically, these are used to store some function calls or references to external PHP resources.
For example - a database call. It is an external resource. This is an advanced topic of PHP.

* PHP Null
Null is a special data type that has only one value: NULL. 
There is a convention of writing it in capital letters
The special type of data type NULL defined a variable with no value.
It is used to initialise the variable/object
Example:
	<?php   
	    $nl = NuLl;  // null // Null  
	    echo "n1 value is null" .$nl;   //it will not give any output  
	?>  
Output:
         // Nothing will be displayed

   ***** Type conversion
   ** Convert Base 
      The base_convert() function converts a number from one number base to another.
      Syntax: base_convert(string_Number,from_Base,to_Base);

      <?php
         $num = "FF";
         echo "<br />";
         echo base_convert($num,16,10)."</br>";
         echo base_convert($num,16,8)."</br>";
         echo base_convert($num,16,2)."</br>";

         $num1 = "0360";
         echo base_convert($num1,8,10)."</br>";
         echo base_convert($num1,8,16)."</br>";
         echo base_convert($num1,8,2)."</br>";

         $num2 = "1111";
         echo base_convert($num2,2,10)."</br>";
         echo base_convert($num2,2,16)."</br>";
         echo base_convert($num2,2,8)."</br>";
  
      ?>

   ** Number to String conversion
       <?php
         // Sample integer
         $int = 10; 
         var_dump($int);
          
         // Casting integer to string
         $var1 = (string) $int;  // $var1 is a string
         var_dump($var1);

         // Getting string value of a variable
         $var2 = strval($int);  // $var2 is a string
         var_dump($var2);

         // Converts string to int
         $var3 = (int) ($var1);  
         var_dump($var3);

         // Converts string to float
         $var4 = (float) ($var1);  
         var_dump($var3);
     ?>


** String to Number Conversion
<?php
$num = "2.75";
 
// Cast to integer
$int = (int)$num;
echo gettype($int)."</br>"; // Outputs: integer
echo $int."</br>"; // Outputs: 2
 
// Cast to float
$float = (float)$num;
echo gettype($float)."</br>"; // Outputs: double
echo $float."</br>"; // Outputs: 2.75
?>


<?php
echo intval(2)."</br>";       // Outputs: 2
echo intval(2.75)."</br>";    // Outputs: 2
echo intval('34')."</br>";    // Outputs: 34
echo intval('+34')."</br>";   // Outputs: 34
echo intval('-34')."</br>";   // Outputs: -34
echo intval(034)."</br>";     // Outputs: 28
echo intval('034')."</br>";   // Outputs: 34
echo intval(1e10)."</br>";    // Outputs: 10000000000
echo intval('1e10')."</br>";  // Outputs: 10000000000
echo intval(0xff)."</br>";    // Outputs: 255
echo intval('0xff')."</br>";  // Outputs: 0
?>



*** PHP has three types of variable scopes ***
1.	Local variable - Their scope is only within the function in which they are declared.
Local variable has higher priority over global variable. 
2.	Global variable - The global variables are the variables that are declared outside the function. 
   ** To access the global variable within a function, use the "global" keyword before the variable. 
      global $name;
   ** Global variable can be accessed inside the function using predefined $GLOBALS array.
      $name="V.O.Chidambaram";   // Outside the function
      $GLOBALS['name']     // Global variable Inside the function
There is no need to use any keyword to access a global variable outside the function.
3.	Static variable
   ** It is a feature of PHP to delete the variable, once it completes its execution and memory is freed. 
      To retain the current value of the local variable in the next call, static is used.
      Static variables exist only in a local function, but it does not free its memory after the program execution leaves the scope. 

*** PHP $ and $$ Variables
   $var (single dollar) is a normal variable with the name var that stores any value like string, integer, float, etc.
   $$var (double dollar) is a reference variable that stores the value of the $variable inside it.

*** PHP constants can be defined by 2 ways:
         1.	Using define() function
               define(name, value, case-insensitive)  
               name: It specifies the constant name.
               value: It specifies the constant value.
               case-insensitive: Specifies whether a constant is case-insensitive. Default value is false. It means it is case sensitive by default.
                                 true - Case insensitive, it is depricated in PHP V7.3
            NOTE: 
                  Constant names do not need a leading dollar sign ($)
                  Constants can be accessed regardless of scope
                  Constant values can be a string, integer, float, boolean or NULL.
                  Value can also be an array [PHP V7]
         2.	Using const keyword
               const MESSAGE="Constant using const keyword";  
               echo MESSAGE;  

      Note:
         Conventionally, PHP constants should be defined in uppercase letters.
         Unlike variables, constants are automatically global throughout the script by default.

   ** Using constant() function
      There is another way to print the value of constants using constant() function 
      instead of using the echo statement.
      define("VOTEAGE", 18);  
	    echo VOTEAGE, "</br>";     //both are similar 
	    echo constant("VOTEAGE");  //both are similar 
   
   ** Using defined() function 
         It checks whether a constant exists or not. If exists return TRUE(1) or else FALSE(0) 

</pre>


<?php
  //Variable declaration and assignment
   $msg="Trainees";
   $year=2023;
   $company = "CGVAK";

   // Display using echo
   echo "<h1>Hello Welcome to $msg  $year</h1>" ;
   ECHO "<h2> Welcome to " . $company . "</h2>";
   $msg=2023;
   $year="the great year";
   echo "<h1>Hello Welcome to </h1>" , $msg , "  " , $year ;
   echo "<h3> Hello  \"WELCOME ALL\" </h3> " ;  
   echo 'I\'ll be back <br />';

   // Display using Print 
   print "George told,  \"Hamilton is my friend\" -- Usage of escape sequence by PHP print <br>";  
   print "Hello by PHP print......  
	      This is multi line  
         text printed by   
	      PHP print statement......  
	   ";  
     $lang = "PHP";  
     $ret = print $lang." is a web development language.";  // Cannot assign like this using echo.
	  print "</br>";  
	  print "Value return by print statement: ".$ret . "<br />";   
     $fname = 'Little';
     $lname = 'Flower';
     print "My name is: ".$fname . $lname ;   

     // Constant declaration in PHP
   	define("MESSAGE","Hello Welcome to PHP");  // Case sensitive constant
      echo MESSAGE;  

      define("MESSAGE1","Hello Welcome to PHP",false);//not case sensitive -- Next 2 echo are accepted
      echo MESSAGE1, "</br>";    // Not case sensitive in using constant variable
      // echo message1; // Error    
      
      // define("MESSAGE2","Hello Welcome to PHP",true);//case sensitive -- First echo is accepted
      // echo MESSAGE2, "</br>";    // case sensitive in using constant variable
      // echo message2;    // Error
   
      const MESSAGE3="Constant using const keyword";  
      echo MESSAGE3;  

      define("VOTEAGE", 18);  // Declaring constant
	    echo VOTEAGE, "</br>";     //both are similar 
	    echo "Result of constant() "; 
       $v= constant("VOTEAGE"); echo "constant('VOTEAGE')=" . $v . "<br />";
       echo "Print constant value using constant() " . constant("VOTEAGE") ; //both are similar 

      echo "Value of defined('VOTEAGE')=" . defined("VOTEAGE") . "<br />";
       if (defined("VOTEAGE")==1)
        echo "Vote Age = " , constant("VOTEAGE");
      else
         echo ("Constant VOTEAGE is not defined");
      echo "<br><br>";
      
     // echo get_defined_constants();

// Scope of the variable
	    $name = "Jawaharlal Nehru";    //Global Variable  
       $age = 64;       //Global Variable  
	    function global_var()  
         {  
	        global $name;   // without global variable, error will come  
           $age = 54;  // Local variable  
	        echo "Global Variable inside the function: ". $name . "<br />";
           echo "Local variable inside the function: ". $age . "<br />";  // Local variable has higher priority
           $name = "Mahatma Gandhi";
	        echo "</br>";  

         // Global variable using $GLOBAL array
         echo "Age of " . $GLOBALS['name'] . "  is  " . $GLOBALS['age'] . "<br />"; 
	    
	    //global_var();  

	    }  
	    global_var();  
	    echo "Global Variable outside the function: ". $name . "<br />"; 
       echo "Local Variable outside the function: ". $age   . "<br />"; // Takes Global variable 

// Static  variable in the function
       function static_var()  
	    {  
	        static $num1 = 100;       //static variable  
           $num2 = 200;          //Non-static variable  
	        //increment in non-static variable  
	        $num1++;  
	        //increment in static variable  
	        $num2++;  
	        echo "Static: " .$num1 ."</br>";  
	        echo "Non-static: " .$num2 ."</br>";  
	    }  
	      
	   //first function call  
	    echo "First Call <br> " ;
       static_var();  
	  
	    //second function call  
       echo "Second Call <br> " ;
	    static_var();  

  // Example1 for $variable and $$variable
      	$my_cpy = "CGVAK";  
	      $$my_cpy = "G2";  
	      echo $my_cpy."<br/>";  
      	echo $$my_cpy."<br/>";  
      	echo $CGVAK."<br/>";  

   // Example2 for $variable and $$variable    
            $x="TamilNadu";  
            $$x="Chennai";  
         	echo $x. "<br>";  
         	echo $$x. "<br>";  
         	echo "Capital of $x is " . $$x . "<br>"; 
            echo "Capital of $x is " . $TamilNadu . "<br>";
            
   // Example3 for $variable and $$variable 
            $name="Thangam";  
            ${$name}="Arulseeli";  
            ${${$name}}="Gold";  
            echo $name. "<br>";  
            echo ${$name}. "<br>";  
            echo $Thangam. "<br>";  
            echo ${${$name}}. "<br>";  
            echo $Arulseeli. "<br>";  
   
         
	?>  

</body>
</html>
