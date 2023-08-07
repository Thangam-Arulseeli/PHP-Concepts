<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closure Functions</title>
</head>
<body>
    <pre>
        ***** Closure Functions
        * Closures have been introduced in PHP V5.3 
        * Their most important use is for callback functions
        * A closure in PHP is a function that can be created without a specified name 
                - an anonymous function. 
         Example : a closure function created as the second parameter of array_walk(). 
         By specifying the $v parameter as a reference one can modify each value in the
         original array through the closure function.
        
        ** The array_walk() function runs each array element in a user-defined function. 
            The array's keys and values are parameters in the function.
        Note: You can change an array element's value in the user-defined function by specifying
              the first parameter as a reference: &$value
        ** Syntax:
            array_walk(array, myfunction, parameter to function...)
        
        ***** Arrow Functions 
        ***  January 7th 2020 - Arrow functions has been introduced  with PHP 7.4
        * An arrow function provides a shorter syntax for writing a short anonymous function.
        * An arrow function starts with the fn keyword and contains only one expression (as opposed to JavaScript),
          which is the returned value of the function.
        * An arrow function have the access to the variables in its parent scope automatically.
        * The outer scope variables are accessible by value only so there's no way of modify them
        
        ** Advantages of arrow function
            - Shorter and more readable than classic anonymous functions
            - Arrow functions can access variables from the parent scope through a technique 
                 called "Implicit by-value scope binding"
        
        ** Syntax of arrow function 
            fn (arguments) => expression;
        ** Syntax of anonymous function
            function(arguments) { return expression; }
        
        ** Note
            Unlike anonymous functions, arrow functions can automatically access 
            variables from their parent scopes.

        ***** Callback function
            * A callback function (often referred to as just "callback") 
                is a function which is passed as an argument into another function.
            * Any existing function can be used as a callback function. 
            * To use a function as a callback function, pass the name of the function as the argument 
                of another function
            * Callbacks in User Defined Functions
              . User-defined functions and methods can also take callback functions as arguments.
              .  To use callback functions inside a user-defined function, 
                call it by adding parentheses to the variable and pass arguments as with normal functions:
        
        </pre>


        <?php
        // Example 1.1
        function myfunction($value,$key,$p)
        {
        echo "$key $p $value<br>";
        }
        $arr=array("a"=>"B.Tech", "b"=>"M.S", "c"=>"M.B.A");
        array_walk($arr,"myfunction","has the degree");
        echo "<br />";
        ?>

    <?php
      // Example 1.2
      $array = array('Ruby', 'PHP', 'JavaScript', 'HTML');
      array_walk($array, function(&$v, $k) {
        $v = $v . ' - Programming Language';
      });
      print_r($array);
      echo "<br />";
    ?>

        <?php
        function myfunction1(&$value,$key)
        {
        $value .=" degree";
        }
        $arr=array("a"=>"B.Tech","b"=>"M.S","c"=>"M.B.A");
        array_walk($arr,"myfunction1");
        print_r($arr);
        echo "<br />";
        ?>
    
    <?php
        // Example 2.1
        // Assigning a closure as the value of a variable
        // You can define a closure as the value of a variable with a normal assignment.
        /* func_get_args(): array - Gets an array of the function's argument list. This function has no parameters.
          - This function may be used in conjunction with func_get_arg() and func_num_args()
            to allow user-defined functions to accept variable-length argument lists.
          - Returns an array in which each element is a copy of the corresponding member of the current user-defined function's argument list.
          - Generates a warning if called from outside of a user-defined function.
          */

        $var = function() {
        return 'I am a ' . func_get_arg(0);
        };
        print_r($var('Closure- Hello'));  
        echo "<br />";
    ?>


    <?php
    // Example 2.2
    function myFunc()
    {
        $numargs = func_num_args();
        echo "Number of arguments: $numargs \n";
        if ($numargs >= 2) {
            echo "Second argument is: " . func_get_arg(1) . "\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "Argument $i is: " . $arg_list[$i] . "\n";
        }
    }

    myFunc(10, 20, 30);
    echo "<br />";

    ?>

        <?php
        // Example 2.3 - func_get_args() example of byref and byval arguments
        function byVal($arg) {
            echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
            $arg = 'Employee';
            echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
            echo "<br />";
        }

        function byRef(&$arg) {
            echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
            $arg = 'Employee';
            echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
        }

        $arg = 'Trainee';
        byVal($arg);
        echo "After Function call - ByVal : " . $arg;
        echo "<br />";
        byRef($arg);
        echo "After Function call ByRef : " . $arg;
        echo "<br />";
        ?>

   <?php
        // Example 3
        //This prints 'I am Michael!' because $param is not modified in its parent scope. 
        // In other words, the only place where $param='Daniel!' is inside the closure.
        $param  = 'John!';
        function sayHello()
        {
        $param = 'Michael!';
        $func  = function() use ($param)
        {
            $param = 'Daniel!';
        };
        $func();
        echo 'I am ' . $param; // prints I am Michael!
        }
        sayHello();
        echo "<br />";
   ?>

   <?php
    // Example 4
    // The code below will print 'I am Daniel!' because $param is 'used' as a reference.
    $param  = 'John!';

    function sayHelloMsg()
    {
      $param = 'Michael!';
      $func  = function() use (&$param)
      {
        $param = 'Daniel!';
      };
      $func();
      echo 'I am ' . $param; // prints I am Dave!
    }
    sayHelloMsg();
    echo "<br />";
   ?>

  
  <?php
       // Example 5.1  // Classic closure function 
      
   // Comparison between how a classic closure behaves compared with a short closure(arrow function)
        $n = "Mike";  // global variable
        $calc1 = function() {
            global $n;
            return "Hello "  . $n;
        };
      echo "Traditional closure = " . $calc1() . "<br>";  // undefined variable $n
    ?>


   <?php
       //Example 5.2   //   Short closure (Arrow function)
       $n = "Mike";
       $calc = fn() => "Hello " . $n;
       echo $calc();  //returns Hello Mike
       echo "<br />";
   ?>
        
    <?php
        // Example 5.3 //  Arrow function to compare two values 
    $eq = fn ($x, $y) => $x === $y;
    
    if ( $eq(100, '100') ) //  // 1 (or true) 
     { 
        echo "(100, '100') are equal";
    } else {
        echo " (100, '100') are not equal";
    }  
   
    echo "<br />";
    ?>


    <?php
         // Example 5.4 // Pass an arrow function to the array_map ()
        
         $list = [10, 20, 30];
         
         $results = array_map(
             fn ($item) => $item * 2,
             $list
         );
         
         print_r($results);
         echo "<br />";

        //  Output
        //     Array
        //     (
        //         [0] => 20
        //         [1] => 40
        //         [2] => 60
        //     )
    ?>

    <?php
    /* Example 5.4.1
    The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
    NOTE: You can assign one array to the function, or as many as you like.
    Syntax:
        array_map(myfunction, array1, array2, array3, ...)
    */
    function myFunctionM1($v)
    {
    // User-defined function changes the value of the array in array_map function
    if ($v==="Dog")
    {
    return "Golden Retriever";
    }
    return $v;
    }

    $a=array("Horse","Dog","Cat","Dog");
    print_r(array_map("myFunctionM1",$a));
    echo "<br />";
    ?>

        <?php
        // Example 5.4.2
        // Pass 2 arrays to the array_map function and compares the corresponding values
        function myFunctionM2($v1,$v2)
        {
        if ($v1===$v2)
        {
        return "Same";
        }
        return "Differs";
        }

        $a1=array("B.E","MBA","B.Tech");
        $a2=array("B.A","MBA","B.Tech");
        print_r(array_map("myFunctionM2",$a1,$a2));
        echo "<br />";
        ?>

        <?php
        // Example 5.4.3
        // Assign null as the function name in array_map function
        $a1=array("Dog","Cat");
        $a2=array("Puppy","Kitten");
        print_r(array_map(null,$a1,$a2));
        echo "<br />";
        ?>

    <?php
        // Example 5.5    // Return an arrow function from a function
        function multiplier($x)
        {
            echo "x= $x. <br />";
            return fn ($y) => $x * $y;
        }

        $double = multiplier(2);

        echo "Return value = " .$double(10); // 20
        echo "<br />";
    ?>
    

    <?php
        // Example  6.1 [CALLBACK FUNCTION]  //   Pass a callback to PHP's array_map() function 
        // to calculate the length of every string in an array
        
            function my_callback($item) {
            return strlen($item);
        }

        $strings = ["Apple", "Orange", "Banana", "Jack fruit"];
        $lengths = array_map("my_callback", $strings);
        print_r($lengths);
        echo "<br />";
        // OUTPUT:
        // Array
        // (
        //     [0] => 5
        //     [1] => 6
        //     [2] => 6
        //     [3] => 10
        // )
    ?>


    <?php
       // Example 6.2  // Use an anonymous function as a callback for PHP's array_map() function:  
       // Starting with version 7, PHP can pass anonymous functions as callback functions:
     
            $strings = ["apple", "orange", "banana", "coconut"];
            $lengths = array_map( function($item) { return strlen($item); } , $strings);
            print_r($lengths);
            echo "<br />";;
        ?>


        <?php
            // Example 6.3   //  Callbacks in User Defined Functions
            
                function exclaim($str) {
                return $str . "! ";
                }

                function ask($str) {
                return $str . "? ";
                }

                function printFormatted($str, $format) {
                // Calling the $format callback function
                echo $format($str);
                }

                // Pass "exclaim" and "ask" as callback functions to printFormatted()
                printFormatted("Hello world", "exclaim");
                printFormatted("Hello world", "ask");
                echo "<br />";
        ?>
       </body>


</html>

