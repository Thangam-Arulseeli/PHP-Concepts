<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Function Concept - Anonymous Function</title>
</head>
<body>
    <pre>
        ***** Anonymous Function
        * An anonymous function is a function without a name.
        * An anonymous function is a Closure object.
        * An anonymous function can be assigned to a variable, passed to a function, or returned from a function.
        * When you dump the information of the anonymous function to a variable, you’ll see that it’s actually a Clousure object:
        * Scope of the anonymous function
            . By default, an anonymous function cannot access the variables from its parent scope. 
            . To use the variables from the parent scope inside an anonymous function, 
              you place the variables in the 'use' construct
        </pre>
    
    <?php
     // Example 1  //  Normal Function and Function call
        
        $z = 100;
        function multiply1($x, $y)
        {
             global $z;  //  Use global to access the global variable inside the function 
            echo  'Access - Parent scope variable inside Normal function using global - $z :' . $z . "<br />";
            $z = 500;
            return $x * $y;
        }

        echo "Normal Function -- Multiplied Value = ".multiply1(10, 20) . "<br>";
        echo "$z - Changed value after function call" . "<br>";
        echo "<br />";
     ?>

    <?php
        //Example 2.1 :   //   Anonymous Function
        $multiply2 = function ($x, $y) {
            return $x * $y;
        };
        echo "Anonymous Function -- Multiplied Value = " . $multiply2(10, 20);
        echo "<br />";
        ?>
    
    <?php
        //Example 2.2 :   //   Anonymous Function
        $z=100;
        $multiply2 = function ($x, $y) {
            global $z;
            echo '$z - access global value inside anonymous function = ' . $z . "<br>";
            $z = 500;
            return $x * $y;
        };
        echo "Anonymous Function -- Multiplied Value = " . $multiply2(10, 20) . "<br>";
        echo "$z - Changed value after anonymous function call" . "<br>";  // 500
        echo "<br />";
        ?>
    

    <?php
        // Example 3 :  //  Passing an anonymous function to another function
        // The array_map() function accepts a callback function and an array. 
        // It applies the callback function to each element 
        // and includes the results in a new array.

        //The following example shows how to double each number in an array:

            function double_it($element)
            {
                return $element * 2;
            }

            $list = [10, 20, 30];
            $double = array_map("double_it", $list);
            echo "Double_it data using normal function : " ;
            print_r($double);
            echo "<br />";
    ?>

    <?php
        // Example 4: Rewrite Example 3 using anonymous function
            $list = [10, 20, 30];

            $results = array_map(function ($element) {
                return $element * 2;
            }, $list);

            echo "Double_it data using anonymous function : " ; 
            print_r($results);
            echo "<br />";
     ?>

     <?php
     // Example 5 : Scope of the anonymous function (Using variable from parent scope)
        
        $message = 'Hai Welcome';
        $say = function ($val) use ($message) {
            echo "Argument = " . $val . "  Global value = " . $message . "<br>";
            echo "Get Global value in anonymous fn using 'use'  " . $message . "<br>";     // we get 'Hai Welcome'  
             $message = 'Hello all';  // Won't affect outside function
             echo $message . "<br>";     // we get 'Hello all' 
        };

        $say("PHP");        // 'Hai Welcome'
        echo "After function call - " . $message; // Hai Welcome -- Won't be changed - Unchanged global value when 'use' is used in anonymous fn.
        echo "<br />";
     ?>

     <?php
     // Example 6: Passing reference to anonymous function
      //If you want to pass a variable to an anonymous function by reference,
     // you need to use the & operator like the following example: 
     
     $message = 'Hi';
     $say = function () use (&$message) {  // Changes to the parrent variable applied bcoz, ref is passed
         echo "Get Global value in anonymous fn using 'use' with &  " . $message . "<br>";       // Hi
         $message = 'Hello';       
     };
     
     $say();
     echo $message; // Hello -- Get changed global value when 'use &' is used in anonymous fn. 
     echo "<br />";
     ?>

     <?php
        // Example 7: Return an anonymous function from a function
        // Example illustrates how to return an anonymous function
            function multiplier($x) 
            {
                return function ($y) use ($x) {
                    return $x * $y;
                };
            }

            $double = multiplier(2);
            echo $double(100); // 200
            echo "<br />";

            $tripple = multiplier(3);
            echo $tripple(10); // 30
            echo "<br />";
     ?>



    <?php
        //  Example 8.1   //  Function within Function
        function x ($y) 
        {
        return($y+3);
        }

        function y ($z)
        {
        return ($z*2);
        }

        $y = 4;
        $y = x($y)*y($y);
        echo "Result of function within function = " , $y;
        echo "<br />";

         // OUTPUT : 
         // X returns (value +3), while Y returns (value*2)
         // Given a value of 4, this means (4+3) * (4*2) = 7 * 8 = 56.
        //  Your query is doing 7 * 8
        // x(4) = 4+3 = 7 and y(4) = 4*2 = 8
        // what happens is when function x is called it creates function y, it does not run it.
       ?>


    <?php
      // Example 8.2    //   Function within Function [Rewrite Example 8.1] 
        function x1 ($y1) {
            function y1 ($z) {
                return ($z*2);
            }

            return($y1+3);
        }

        $y1 = 4;
        $y1 = x1($y1)*y1($y1);
        echo "Result of function within function = (Rewrite previous function) :  " ;
        echo $y1;
        echo "<br />";
    ?>

    
    <?php
    //  Example 8.3  //  Function within Function
    /* Function inside a function or so called nested functions 
        * It is used to do some recursion processes such as looping true 
            multiple layer of array or a file tree without multiple loops, or 
            sometimes use it to avoid creating classes for small jobs which require 
            dividing and isolating functionality among multiple functions. 
        * Note : Remember that, Child function will not be available unless the main function is executed
        * Once main function got executed the child functions will be globally available to access
        * if you need to call the main function twice it will try to re-define the child function
            and this will throw a fatal error
    */
    function myFunc($a,$b=5){
        if(!function_exists("child")){
            function child($x,$c){
                return $c+$x;   
            }
        }
        
        try{
            return child($a,$b);
        }catch(Exception $e){
            throw $e;
        } 
    }

    // Once you have invoked the main function, you will be able to call the child function
    echo "Nested Function1 = " , myFunc(10,20)+child(10,10);
    echo "<br />";

    // The second method will be limiting the function scope of child to local instead of global,
    // to do that you have to define the function as a Anonymous function and assign it to
    // a local variable, then the function will only be available in local scope 
    //and will re-declared and invokes every time you call the main function.
    ?>


    <?php
        // Example 8.4 
        function myFunc1($a,$b=5){
        $child = function ($x,$c){
            return $c+$x;   
        };
        
        try{
            return $child($a,$b);
        }catch(Exception $e){
            throw $e;
        }
        
    }
    echo "Nested Function2 = " , myFunc1(10,20);
    echo "<br />";
    // Remember the child will not be available outside the main function 
    ?>

</body>
</html>
