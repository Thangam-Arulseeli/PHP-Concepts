<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Handling</title>
</head>
<body>
    <h3> Exception Handling </h3>
    <pre>
      ***** Exceptions in PHP
        *** An unexpected result of a program is an exception, which can be handled by the program itself.
            Exceptions can be thrown and caught in PHP.
        *** PHP allows you to handle runtime errors such as IOException, SQLException, ClassNotFoundException, and more.
            A most popular example of exception handling is - divide by zero exception, which is an arithmetic exception.
        *** The following are used in exception handling mechanism in PHP     
        * try - The block which contains the statements may raise errors 
        * catch - The block contains the statements to handle the errors when exception comes 
        * finally - The block is executed regardless of the exceptiopn, which is used for clean-up activity in PHP.
        * throw - Keyword used to throw an exception. It also helps to list all the exceptions 
                  that a function throws but does not handle itself.
                  Remember that each throw must have at least one "catch".


        *** What happens when an exception is triggered -
            * The current state of code is saved.
            * The execution of the code is switched to a predefined exception handler function.
            * Depending on the situation, the handler can halt the execution of program, 
                resume the execution from the saved code state, or continue the execution of the code 
                from another location in the code.
        *** NOTE:
            * Single try can have atleast one catch block 
            * Single try block may contain more than one catch blocks also 
            * Exception class is the base class for all built-in exception handling classes 
            * Exception class should be written after all the catch blocks
            * There can be a single finally{ } block for try and catch blocks 
              
        Advantage of Exception Handling over Error Handling
            * Exception handling has the following advantages over error handling -
                1. Grouping of error types 
                    In PHP, both basic and objects can be thrown as exception.
                     It can create a hierarchy of exception objects and group exceptions in classes
                      and also classify them according to their types.

                2. Keep error handling and normal code separate 
                    In traditional error handling, if-else block is used to handle errors. 
                    It makes the code unreadable because the code for handling errors and conditions
                     got mixed. Within the try-catch block, exception keeps separate from the code 
                     and code become readable.


    </pre>
 
    <?php 
        // Example 1: 
        //user-defined function with an exception  
        function checkNumber($num) {  
        if($num<1) {  
            //throw an exception  
            throw new Exception("Value must be greater than or equal to 1");  
        }  
        return true;  
        }  
        
        //trigger an exception in a "try" block  
        try {  
        checkNumber(-5);  
        //If the exception throws, below text will not be display  
        echo 'If you see this text, the passed value is greater than or equal to 1';  
        }  
        
        //catch exception  
        catch (Exception $e) {  
        echo 'Exception Message: ' .$e->getMessage();  
        }  
        finally {  
        echo '</br> It is finally block, which always executes.' . "<br>";  
        }  

        /* Output:

        Exception Message: Value must be less than 1
        It is finally block, which always executes.
        */
    ?>  

    <?php 
    // Example 2:  
    //user-defined function with an exception  
    function testEven($num) {  
        //trigger an exception in a "try" block  
        try {  
            if($num%2 == 1) {  
            //throw an exception  
            throw new Exception("Passed number is an ODD Number");  
            echo "After throw this statement will not execute";  
            }  
            echo '</br> <b> If you see this text, the passed value is an EVEN Number </b>';  
        }  
        //catch exception  
        catch (Exception $e) {  
            echo '</br> <b> Exception Message: ' .$e->getMessage() .'</b>';  
        }  
        finally {  
            echo '</br> It is finally block, which always executes.';  
        }  
    }  
        echo 'Output for ODD Number';  
        testEven(19);  
            
        echo '</br> </br>';  
        echo 'Output for EVEN Number';  
        testEven(12);  
        echo "<br><br>";
        /* 
        Output:

        In the below output, you can see that when an odd number is passed, 
        an exception message is displayed. On the other hand, when an even number is passed, 
        another message is shown.

        Output for ODD Number 
        Exception Message: Passed number is an ODD Number
        It is finally block, which always executes.

        Output for EVEN Number
        If you see this text, the passed value is an EVEN Number
        It is finally block, which always executes.

        */
    ?>  


 
        <?php
        // Example 3: Creating Custom exception  
        class DivideByZeroException extends Exception { }  
        class DivideByNegativeNoException extends Exception { }  
        function checkdivisor($dividend, $divisor){  
            // Throw exception if divisor is zero  
        try {  
            if ($divisor == 0) {  
                throw new DivideByZeroException;  
            }   
            else if ($divisor < 0) {  
                throw new DivideByNegativeNoException;   
            }   
            else {  
                $result = $dividend / $divisor;  
                echo "Result of division = $result </br>";  
            }  
        }  
            catch (DivideByZeroException $dze) {  
                echo "Divide by Zero Exception! </br>";  
            }  
            catch (DivideByNegativeNoException $dnne) {  
                echo "Divide by Negative Number Exception </br>"; 
                echo $dnne; 
                echo "<br> dnne object specifies the root statement as well as actual statement for raising errors "; 
                echo "<br>"; 
            }  
           catch (Exception $ex) {  
                echo "Unknown Exception";  
            }   
        }  
        
            checkdivisor(18, 3);  
            checkdivisor(34, -6);  
            checkdivisor(27, 0);  

        /* 
        Output:

        Result of division = 6
        Divide by Zero Exception!
        Divide by Negative Number Exception!
        */
    ?>  


<?php 
// Example 4:
// Custom Exception and Multiple catch statement
// This example program will create a custom exception class that extends the Exception class.
//  Here, we will also use multiple catch blocks with a single try block.

        class OddNumberException extends Exception { }  
        //user-defined function with an exception  
        function testEvenNum($num) {  
            //trigger an exception in a "try" block  
            try {  
                if($num%2 == 1) {  
                //throw an exception  
                throw new OddNumberException;  
                echo "After throw this statement will not execute";  
                }  
                echo '</br> <b> If you see this text, the passed value is an EVEN Number </b>';  
            }  
            
            //catch exception  
            catch (OddNumberException $ex) {  
                echo '</br> <b> Exception Message: ODD Number' .'</b>';  
            }  
            //catch exception  
            catch (Exception $e) {  
                echo '</br> <b> Exception Message: ' .$e->getMessage() .'</b>';  
            }  
        
        }  
        echo 'Output for EVEN Number';  
        testEvenNum(28);  
        echo '</br> </br>';  
        echo 'Output for ODD Number';  
        testEvenNum(17);  

        /*
        Output:

        Output for EVEN Number
        If you see this text, the passed value is an EVEN Number 

        Output for ODD Number 
        Exception Message: ODD Number
        Important Points:

        Apart from PHP exception class and its subclasses, we can also create our own custom exception classes to handle uncatch exceptions.
        With PHP 5.5 and above, finally block is used to handle exceptions. This block is always executed anyway, whether an exception is thrown or not.

        https://www.javatpoint.com/php-pagination 
        */
?>  
</body>
</html>
