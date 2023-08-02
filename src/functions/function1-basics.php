<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Concpts in PHP</title>
</head>
<style>
    pre{
        color: red;
    }
</style>
<body>
<h2 style="background-color:cyan; color:blue;text-align:center" > PHP Arrays </h2> 
   <pre> 
    ***** PHP Functions
            PHP function is a piece of code that can be reused many times. 
            It can take input as argument list and return value. 
            There are thousands of built-in functions in PHP.
        *** Advantage of PHP Functions
            Code Reusability
            Less Code
            Easy to understand
        *** Types of PHP functions
            Conditional function
            Function within Function
            Recursive function

        *** PHP User-defined Functions
            Syntax
                function functionname(){  
                //code to be executed  
                }  
        Note: Function name must start with letter and underscore only like other labels in PHP.
              It can't be start with numbers or special symbols.

        *** HTML code inside the function
            * Typically, a function contains only PHP code. 
            * However, it’s possible to define a function that contains HTML code. 
            * The following welcome() function displays the welcome message 
                wrapped in a span tag:
                
                    <?php function welcome_user($username) { ?>
                        <span>Welcome <?= $username ?></span>
                    <?php } 
                    welcome_user('trainees');
                    ?>	

        *** Function Arguments
            Function arguments are separated by comma.
            ** PHP supports the following arguments
                Call by Value (default)
                Call by Reference (&)
                Default argument values
                Variable-length argument list
                Named arguments
            
        *** PHP Call By Reference (&)
                - By default, value passed to the function is call by value.
                - Value passed to the function doesn't modify the actual value by default (call by value). 
                - But we can do so by passing value as a reference.
                - To pass value as a reference, you need to use ampersand (&) symbol 
                    before the argument name. 
                - If so, any changes are made to the passing arguments will affect the original values.    
      
        *** Default Argument Value 
            - We can specify a default argument value in function (Since PHP 5). 
            - While calling PHP function if you don't specify any argument, 
                it will take the default argument. 
            
        *** PHP named arguments - While calling the function, pass the values with the argument name
            * Since PHP 8.0, you can use named arguments for functions. 
            * Use PHP named arguments to pass arguments to a function based on the parameter names.
            * The named arguments allow you to pass arguments to a function 
              based on the parameter names rather than the parameter positions.
            * If we use the named arguments, we can skip the default arguments.
            * PHP allows to call a function by using both positional arguments and named arguments.
            * The named arguments should be placed after positional arguments in the function call. 
        
        *** PHP Variable Length Argument Function (Variadic Function)
            * PHP supports variable length argument function. 
            * It means you can pass 0, 1 or n number of arguments in function. 
            * To do so, you need to use 3 ellipses (dots) before the argument name.
            * The 3 dot concept is implemented for variable length argument since PHP 5.6.
            * A function has only one variadic parameter.
            * If a function has multiple parameters, only the last parameter can be variadic
               
        *** PHP Recursive Function
            * PHP also supports recursive function call like C/C++.
            * In such case, we call current function within function. 
            * NOTE : It is recommended to avoid recursive function call over 
                    200 recursion level because it may smash the stack 
                    and may cause the termination of script.
        
        *** PHP method overloading
            * PHP doesn't support method overloading like other programming languages
            * PHP's magic methods __call() to achieve method overloading.
            * In PHP, overloading means the behavior of method changes dynamically according to the input parameter.
            * __call()
            * When the method is called by the object of the class, 
                if the method is not defined in the class then __call() is called instead of that method and won't display any error.
            * __call() function in a class must exactly take 2 arguments         
            * Argument - 1 -- Method name
            * Argument - 2 -- Parameter array for the method
        *******************************************************
            
        <?php
        // Example 1.1  //  PHP function without return
        function sayHelloMsg(){  
            echo "Hello to PHP Function";  
        }  
        echo "<br />";
        sayHelloMsg(); //calling function 
        echo "<br />";
        /* 
        Output:
        Hello to PHP Function */ 
        ?>  
        
        <?php
       // Example 1.2  //  Function with return statement
        function summation( $x,  $y)  // without data type
        {
            return $x + $y;
        }
        echo "Addition of 2 numbers[No datatype for arguments] = " . summation(10, 20); // 30
      ?>

       <?php
       // Example 1.2  //  Function with return statement - Explicit data type with argument
        function summation1(int $x, int $y) : int  // with data type [PHP V7]
        {
            return $x + $y;
        }
        echo "Addition of 2 numbers[Function with arguments-with datatype] = " . summation1(10, 20); // 30
      ?>

      
      <?php  
      // Example 1.3  //  Returning Value from function
      function cube($n){  
         $c=$n*$n*$n;
         return $c;
        // return $n*$n*$n;  
      }  
      echo "<br />";
      echo "Cube of 3 is: ".cube(3);    # Cube of 3 is: 27 
      ?>  

    <?php
    // Example 1.4 -- PHP is loosely typed language
    // In PHP 7, type declarations were added.
    // This gives us an option to specify the expected data type when declaring a function, 
    // and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

    function addNumbers( $a,  $b) {
     return $a + intval($b);
     }
     echo "Result of (5 + '15 days') = " . addNumbers(5, "15 days");
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 20
    ?>

    <?php 
    //   Example 2  // Function overloading with passing arguments - Not allowed in PHP - ERROR
    //   function sayHello(){  
    //       echo "Hello to PHP Overloading Function concept -- NOT ALLOWED -- implemented using __call() in class";  
    //       }   
    //   function sayHello($name){  
    //      echo "Hello $name<br/>";  
    //   }  
    //   function sayHello($name,$age){  
    //         echo "Hello $name, you are $age years old<br/>";  
    //     }  
    //   sayHello("Kingston");  
    //   sayHello("Queena",34);  
    //   sayHello();  
      ?>  

      
      <?php
        // Example 3  // Function -- Call by reference  
        function reference($str1, &$str2)  
        {  
            $str1 .= $str2;     // Hello Trainees  += , -= 
            $str2 .= 'Call By Reference';  // Trainees Call by Reference
            echo "$str1 - Call by value in function = " . $str1 . "<br>";  
            echo "$str2 - Call by reference in function = " . $str2 . "<br>";  
        }  
        $str1 = 'Hello '; 
        $str2 = 'Trainees';  
        reference($str1, $str2); 
        echo "Call by value after function call = " . $str1;  echo "<br />";   // Hello 
        echo "Call by reference after function call = " . $str2;  echo "<br />";    // Trainees Call By Reference
       ?>  


        <?php 
            //  Example 4.1  //  Passing Default values  
            function sayHello($name="CGVAK", $num=800){  
             echo "Hello $name  " . "  Number = " . $num . "<br/>";  
            }  
            echo "<br />";
            sayHello("G2");  echo "<br />";  // Hello G2
            sayHello();   echo "<br />";  //passing no value   // Hello CGVAK 
            sayHello("G2-Tech", 500); echo "<br />";    // Hello My Dear
           // sayHello( 500); echo "<br />";    // Hello My Dear -- Not possible to retain LHS value as default
        ?>  

        <?php
            // Example 4.2   // Passing Default values
            function add($n1=10,$n2=20){  
              $n3=$n1+$n2;  
            echo "Addition is: $n3<br/>";  
            }  
            echo "<br />";
            add();    echo "<br />";     // Addition is: 30 
            add(20);    echo "<br />";   // Addition is:  40
            add(40,40);  echo "<br />"; // Addition is:  80
        ?>
    
        <?php
           // Example 5.1   // Named Arguments  -- Passing Default values 
        function create_anchor(
            $text,
            $href = '#',
            $title = '',
            $target = '_self'
        )
        {
            $href = $href ? sprintf('href="%s"', $href) : '';
            $title = $title ? sprintf('title="%s"', $title) : '';
            $target = $target ? sprintf('target="%s"', $target) : '';

            return "<a $href $title $target>$text</a>";
        }
        $link = create_anchor(
            'PHP Tutorial', 
            'https://www.phptutorial.net/',
            '',
            '_blank'
        );
        echo $link;
        // Output : <a href="https://www.phptutorial.net/"  target="_blank">PHP Tutorial</a>
        // Note: In this calling statement we pass direct values instead of named argument.
        // So we pass '' for the 3rd arument to change 4th argument. 
        ?>
   
    
        <?php
            //   Example 5.2   // ** Skipping Named Arguments -- Passing Default values 
            // Named argument - While calling the function, pass the values with the argument name
            // If you use the named arguments, 
            // you don’t have to specify all the defaults. 
            // Example: 3rd argument 'title' is skipped by named argument
            function create_anchor1(
                $text,
                $href = '#',
                $title = '',
                $target = '_self'
            )
            {
                $href = $href ? sprintf('href="%s"', $href) : '';
                $title = $title ? sprintf('title="%s"', $title) : '';
                $target = $target ? sprintf('target="%s"', $target) : '';
    
                return "<a $href $title $target>$text</a>";
            }
            $link = create_anchor1(
               text : 'PHP Tutorial', 
               href : 'https://www.phptutorial.net/',
              // target: '_blank'
           );
        echo $link;

        // NOTE ::   
        // ***  Cannot use positional argument after named argument
        // If you place the named arguments before the positional arguments, 
        //     you’ll get an error

        // For example:
        //     create_anchor(
        //         target : '_blank',
        //         'PHP Tutorial', 
        //         'https://www.phptutorial.net/'
        //     );
    ?>



         <?php  
         // Example 6.1   //  Variable length argument function (REST PARAMETERS in JavaScript)
         function addition(...$numbers) {  
             $sum = 0;  
             foreach ($numbers as $n) {  
                 $sum += $n;  
             }  
             return $sum;  
         }  
         echo "Variable length argument (...) <br />";
         echo "Sum of array = ".addition(10, 20, 30, 40); 
         echo "<br />"; 
         ?>  

        <?php
        // Example 6.2   // Variable length argument function with explicit datatype.
        function sum(int ...$numbers): int
        {
            $total = 0;
            for ($i = 0; $i < count($numbers); $i++) {
                $total += $numbers[$i];
            }
            return $total;
        }   
           echo "Sum of values = ".sum(100,200,300,400,500);
           echo "<br />";
      ?>


    <?php
    // Example 6.3    //   Variable length argument function.
        function combine()
        {
            $numbers = func_get_args();
            $total = 0;
            for ($i = 0; $i < count($numbers); $i++) {
                $total += $numbers[$i];
            }
            return $total;
        }
        echo "<br />";
        echo combine(10, 20) . '<br>';     // 30
        echo combine(10, 20, 30) . '<br>';    // 60 
        echo "<br />";
        ?>

        <?php  
         //  Example 7.1   //  Printing number from 1 to 5 using recursion  
        function display($number) {    
            if($number<=5){    
                echo "$number <br/>";    
                display($number+1);    
            }  
        }    
            
        display(1); 
        echo "<br />";   
        ?>    
    
    
        <?php
         //  Example 7.2   //  Factorial of a number using recursion      
        function factorial($n)    
        {    
            if ($n < 0)    
                return -1; /*Wrong value*/    
            if ($n == 0)    
                return 1; /*Terminating condition*/    
            return ($n * factorial ($n -1));    
        }    
            
        echo "Factorial using recursion =" .factorial(5); 
        echo "<br />";   
        ?>    
        
       
        
        <?php  
            //  Example 8 - PHP Parameterized Function
            // Functions calling from the form 
            //Addition and Subtraction with Dynamic number which are taken from form
            
            //add() function with two parameter  
            function total($x,$y)    
            {  
            $sum=$x+$y;  
            echo "Sum = $sum <br><br>";  
            }  
            //sub() function with two parameter  
            function sub($x,$y)    
            {  
            $sub=$x-$y;  
            echo "Diff = $sub <br><br>";  
            }  
            //call function, get  two argument through input box and click on add or sub button  
            if(isset($_POST['add']))  
            {  
            //call add() function  
                total($_POST['first'],$_POST['second']);  
            }     
            if(isset($_POST['sub']))  
            {  
            //call add() function  
            sub($_POST['first'],$_POST['second']);  
            }  
         ?>  
            <form method="post">  
                Enter first number: <input type="number" name="first"/><br><br>  
                Enter second number: <input type="number" name="second"/><br><br>  
                <input type="submit" name="add" value="ADDITION"/>  
                <input type="submit" name="sub" value="SUBTRACTION"/>  
            </form>     
       
        
            <?php
            // Example 9: __call() to achieve function overloading in PHP(V5)
            class Shape {
                const PI = 3.142 ;
                //  function __call($name, $arg){ // Exactly one __call() in a class

                //  }
                function __call($name,$arg){
                    if($name == 'area')
                        switch(count($arg)){
                        case 0 : return 0 ;
                        case 1 : return self::PI * $arg[0] ;
                        case 2 : return $arg[0] * $arg[1];
                        }
                    elseif ($name == 'perimeter'){
                        if (count($arg) ==1){
                            return 4 * $arg[0];
                        }
                        else if (count($arg)==2)
                        {
                            return(2*($arg[0] + $arg[1] ));
                        }
                        elseif (count($arg)==3){
                            return($arg[0]+$arg[1]+$arg[2]);
                        }
                    }
                }
                function volume($s1, $s2, $s3)
                {
                    $vol=$s1*$s2*$s3;
                    return $vol;
                }
            }
            echo "<br />";
            $circle = new Shape();
            echo "Pass 1 argument <br /> " ; echo $circle->area(3);  echo "<br />";
            $rect = new Shape();
            echo "Pass 2 arguments <br /> " ; echo $rect->area(8,6); echo "<br />";
            echo "Pass 3 arguments <br /> " ; echo $rect -> volume(2,3,5); echo "<br />";
          //  $fig = new Shape();
            echo "Pass 2 arguments <br /> " ; echo $rect->perimeter(8,6); echo "<br />";
            echo "Pass 3 arguments <br /> " ; echo $rect->perimeter(8,6,4); echo "<br />";
            echo "Pass 1 argument <br /> " ; echo $circle->perimeter(8); echo "<br />";
            ?>
    </body>
</html>