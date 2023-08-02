<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Function </title>
</head>
    <body>
    <h3> PHP Variable Function </h3>
    <pre>    
        * Variable functions allow you to use a variable, like a function. 
        * When you append parentheses () to a variable, PHP will look for the function
             whose name is the same as the value of the variable and execute it.
        * Using variable functions to call a method 
        * The variable functions allow you to call the methods of an object. 
        * The syntax for calling a method using a variable function is as follows:
                $this->$variable($arguments)   
        ** Note
            . Append parentheses () to a variable name to call the function whose name is the same as the variable’s value.
            . Use the $this->$variable() to call a method of a class.
            . Use the className::$variable() to call a static method of a class.         
    </pre>

    <?php
        // Example 1  // Variable function
        $f = 'strlen';
        echo "Length = " . $f('Hello') . "<br>";    // 5
        
        $ff = 'strcmp';
        echo "String comparison : strcmp('Hai', 'Hi')  = " . $ff('Hai','Hi') . "<br>";
       // $f = 'len';
       // echo $f('Hello');  // Fatal error: Uncaught Error: Call to undefined function len() in index.php:5
      echo "<br />";
    ?>

<pre>
    * in_array() function is an inbuilt function in PHP that is used to check 
        whether a given value exists in an array or not.
         It returns TRUE if the given value is found in the given array, and FALSE otherwise. 
    * bool in_array( $val, $array_name, $mode )
    * in_array() function accepts 3 parameters, out of which 2 are compulsory and another 1 is optional.
    * If $mode is set to TRUE, then the in_array() function searches for the value with 
       the same type of value as specified by the $val parameter. 
       The default value of this parameter is FALSE.
    
       <?php
  $marks = array(100, 65, 70, 87);
  if (in_array("100", $marks))   // Result is found, because "100" value is in the mark array
  {
    echo "found";
  }
  else
  {
    echo "not found";
  } 
 echo "<br>";
  if (in_array("100", $marks, true)) // Result is not found, because "100" - string value is in the mark array
  {
    echo "found";
  }
  else
  {
    echo "not found";
  }
  echo "<br>";
?>

</pre>
        <?php
        // Example 2 - Variable function to call methods of an object
        class Str
        {
            private $s;

            public function __construct(string $ss)
            {
                $this->s = $ss;
            }

            public function lower()
            {
                return mb_strtolower($this->s, 'UTF-8');
            }

            public function upper()
            {
                return mb_strtoupper($this->s, 'UTF-8');
            }

            public function title()
            {
                return mb_convert_case($this->s, MB_CASE_TITLE, 'UTF-8');
            }

            public function convert(string $format)
            {
                if (!in_array($format, ['lower', 'upper', 'title'])) {
                    throw new Exception('The format is not supported.');
                }

                return $this->$format();
            }
        }
       
        ?>

    <?php
       // require_once 'Str.php';
        $str = new Str('hello THERE');
        echo $str->convert('title');  // title - Hello There, upper - HELLO THERE , lower- hello there 
        echo "<br />";
    ?>


    <?php
    // Example 3 - Variable functions to call a static method example
        class Strr
        {
            private $s;

            public function __construct(string $s)
            {
                $this->s = $s;
            }

            public function __toString()
            {
                return $this->s;
            }

            public static function compare(Strr $s1, Strr $s2)
            {
                return strcmp($s1, $s2);
            }
            public static function combine(Strr $s1, Strr $s2) 
            {
                return $s1 . "   " . $s2;
            }
        }

        // Object creation and calling the static function using :: operator
        $str1 = new Strr('Hai');
        $str2 = new Strr('Hai');
        $action1 = 'compare';   // Assign user defined function to a function variable
        $action2 = 'combine';   // Assign user defined function to a function variable
        // Calling the static function with class name Strr
        if ( Strr::$action1($str1, $str2) == 0 ) // Calling the variable function  //OUTPUT-- 0  -- Both are equal
            echo "Both are equal";
        else
            echo "Both are unequal";
        echo "<br />";
        echo Strr::$action2($str1, $str2); // Calling the variable function  // OUTPUT-- Hai  Hai  
       echo "<br />";
    ?>
    <?php
        
    ?>

    </body>
</html>