<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Control Statements </title>
</head>
<body>
   <h2 style="background-color:cyan; color:red;"> Control statements </h2>
   <pre>
    ***** Control Statements
        *** Conditional Statements
        *** Looping Statements

    *** Conditional statements           
        * if
        	Syntax
				if(condition){  
					//code to be executed  
					}  
        
        *	if-else
         Syntax
	        if(condition){  
	            //code to be executed if true  
	        }else{  
            	//code to be executed if false  
	        }  
        

        *	if-else-if
        Syntax
        	if (condition1){    
            	//code to be executed if condition1 is true    
            } elseif (condition2){      
            	//code to be executed if condition2 is true    
            } elseif (condition3){      
            	//code to be executed if condition3 is true    
            	....  
            }  else{    
            	//code to be executed if all given conditions are false    
            }    
        
        *	nested if
        	Syntax
        	if (condition) {    
        	//code to be executed if condition is true   
        	if (condition) {    
        	//code to be executed if condition is true    
        	}    
        	}   
     
			
    *** PHP Switch
        PHP switch statement is used to execute one statement from multiple conditions. 
        It works like PHP if-else-if statement.
        Syntax
        	switch(expression){      
        	case value1:      
        	 //code to be executed  
        	 break;  
        	case value2:      
        	 //code to be executed  
        	 break;  
        	......      
        	default:       
        	 code to be executed if all cases are not matched;    
        	}

            Important points to be noticed about switch case:
            1.	The default is an optional statement. Even it is not important, that default must always be the last statement.
            2.	There can be only one default in a switch statement. More than one default may lead to a Fatal error.
            3.	Each case can have a break statement, which is used to terminate the sequence of statement.
            4.	The break statement is optional to use in switch. If break is not used, all the statements will execute after finding matched case value, as a result fallthrough occurs.
            5.	PHP allows you to use number, character, string, boolean as well as functions in switch expression.
            6.	Nesting of switch statements is allowed, but it makes the program more complex and less readable.
            7.	You can use semicolon (;) instead of colon (:). It will not generate any error.
              

	*** Looping Statement ***
		*** while loop [Entry Condition Loop]
			The while loop executes a block of code repeatedly until the condition is TRUE. 
			Once the condition gets FALSE, it exits from the body of loop.
			It should be used if the number of iterations is not known.
		Syntax
			while(condition){  
				//code to be executed  
			}  
		Alternative Syntax
			while(condition):  
			//code to be executed   
			endwhile;  

    
    *** PHP do-while loop [Exit Condition Loop]
        PHP do-while loop can be used to traverse set of code like php while loop.
        The PHP do-while loop is guaranteed to run at least once.
    
        Syntax
            	do{  
            	    //code to be executed  
            	}while(condition);  
        
        Example
            	<?php
					echo "<br />";    
                    $n=1;    
                    do{    
                    echo "$n<br/>";    
                    $n++;    
                    }while($n<=10);    
            	?>    
    
    *** PHP For Loop
        PHP for loop can be used to traverse set of code for the specified number of times.
        It should be used if the number of iterations is known.
        Syntax
           	for(initialization; condition; increment/decrement){  
           	    //code to be executed  
           	}  
    
        Example
            	<?php    
                    for($n=1; $n<=10; $n++){    
                    echo "$n<br/>";    
                    }    
            	?>  
               
        Example
            All three parameters are optional, but semicolon (;) is must to pass in for loop. 
            If we don''t pass parameters, it will execute infinite.
            	<?php  
            	    $i = 1;  
            	    //infinite loop  
            	    for (;;) {  
            	        echo $i++;  
            	        echo "</br>"; 
						if ($i > 50) break; 
            	    }  
            	?>  
    Example
        Example of printing numbers from 1 to 9 in four different ways using for loop.
	<?php  
	    /* example 1 - Ordinary way */  
	    for ($i = 1; $i <= 9; $i++) {  
	    echo $i;  
	    }  
	    echo "</br>";  
	   
		 /* example 2 -- Increament inside loop */  
		 for ($i = 1; $i <= 9; ) {  
			echo $i;  
			$i++;
			}  
			echo "</br>";  

		 /* example 3 -- Initialization at the starting */  
		 $i = 1;
		 for (; $i <= 9; $i++) {  
			echo $i;  
			}  
			echo "</br>";  

	    /* example 4 -- Condition is inside loop */  
	    for ($i = 1; ; $i++) {  
	        if ($i > 9) {  
	            break;  
	        }  
	        echo $i;  
	    }  
	    echo "</br>";  
	      
	    /* example 5 -- infinite loop */   
	    $i = 1;  
	    for (; ; ) {  
	        if ($i > 9) {  
	            break;  
	        }  
	        echo $i;  
	        $i++;  
	    }  
	    echo "</br>";  
	   
		
	    /* example 6 */  
	    for ($i = 1, $j = 0; $i <= 9; $j += $i, print $i, $i++);  
	?>  

    *** PHP Nested For Loop
        We can use for loop inside for loop in PHP, it is known as nested for loop. 
        The inner for loop executes only when the outer for loop condition is found true.
        Example
        	<?php 
			    echo "<br />";
                for($i=1;$i<=3;$i++){    
                	for($j=1;$j<=3;$j++){    
                		echo "$i --  $j <br/>";    
                }    
                }    
        	?> 
    
    *** PHP For Each Loop
        PHP for each loop is used to traverse array elements.
        Syntax
            	foreach( $array as $var ){  
            	 //code to be executed  
            	}  
            	?>  
        Example
            	<?php  
				 echo "</br>";   
            	$season=array("Summer","Winter","Spring","Autumn");  
            	foreach( $season as $arr ){  
            	  echo "Season is: $arr<br />";  
            	}  
            	?>  
            
    *** PHP foreach loop
        The foreach loop is used to traverse the array elements.
        It works only on array and object. 
        It will issue an error if you try to use it with the variables of different datatype.
        The foreach loop works on elements basis rather than index. 
        It provides an easiest way to iterate the elements of an array.
        In foreach loop, we don't need to increment the value.
        Syntax
        	foreach ($array as $value) {  
        	    //code to be executed  
        	}  
        
        There is one more syntax of foreach loop. 
		[Keep track of associative array element through foreach loop]  
        Syntax
        	foreach ($array as $key => $element) {   
        	    //code to be executed  
        	}  
        
    Example 1:
        PHP program to print array elements using foreach loop.
        <?php  
            //declare array  
            $season = array ("Summer", "Winter", "Autumn", "Rainy");  
			echo "</br>";      
            //access array elements using foreach loop  
            foreach ($season as $element) {  
                echo "$element";  
                echo "</br>";  
            }  
        ?>  

        Example 2:
        PHP program to print associative array elements using foreach loop.
        	<?php  
        	    //declare array  
        	    $employee = array (  
        	        "Name" => "Golda",  
        	        "Email" => "golda@gmail.com",  
        	        "Age" => 21,  
        	        "Gender" => "Female"  
        	    );  
				echo "</br>";    
        	    //display associative array element through foreach loop  
        	    foreach ($employee as $key => $element) {  
        	        echo $key . " : " . $element;  
        	        echo "</br>";   
        	    }  
        	?>  
        Output:
        Name : Golda
        Email : golda@gmail.com
        Age : 21
        Gender : Female
        
        Example 3:
       // Multi-dimensional array
        	<?php  
        	    //declare multi-dimensional array  
        	    $a = array();   
        	    $a[0][0] = "One";  
        	    $a[0][1] = "Two";  
        	    $a[1][0] = "Three";  
        	    $a[1][1] = "Four";  
				echo "</br>";     
        	    //display multi-dimensional array elements through foreach loop  
        	    foreach ($a as $e1) {  
        	        foreach ($e1 as $e2) {  
        	            echo "$e2    ";  
        	        }  
					echo "<br>";
        	    }  
        	?>  
        Output:
    One    Two 
	Three  Four
        
        Example 4:
       // Dynamic array
        	<?php  
			 echo "</br>";   
        	    //dynamic array  
        	    foreach (array ('C', 'G', '-', 'V', 'A', 'K') as $elements) {  
        	        echo "$elements\n";  
        	    }  
        	?>  
        Output:
        C G - V A K
        
	*** PHP Break
		PHP break statement breaks the execution of the current for, while, do-while, switch, 
		and for-each loop. 
		If you use break inside inner loop, it breaks the execution of inner loop only.
		
		Example
	<?php    
		 echo "</br>";   
		for($i=1;$i<=3;$i++){ 
			 for($j=1;$j<=3;$j++){        
	  				if($i==2 && $j==2){    
	   					break;    
	  				}  
					  echo "$i --  $j<br/>";  
	 		}    
		}    
	?>  

		** PHP Break: inside inner loop
			The PHP break statement breaks the execution of inner loop only.
	<?php  
		 echo "</br>";     
		for($i=1;$i<=3;$i++){    
		 for($j=1;$j<=3;$j++){        
	  		if($i==2 && $j==2){    
	   			break;    
	  		} 
			  echo "$i --  $j<br/>";   
	 		}    
		}    
	?>  

	Output:
		1 1
		1 2
		1 3
		2 1
		3 1
		3 2
		3 3

	** PHP Break: with array of string
	<?php  
		 echo "</br>";   
		//declare an array of string  
		$number = array ("One", "Two", "Three", "Stop", "Four");  
		foreach ($number as $element) {  
		if ($element == "Stop") {  
		break;  
		}  
		echo "$element </br>";  
		}  
	?>  
	Output:
		One 
		Two 
		Three

	** PHP Break: using optional argument
		The break accepts an optional numeric argument, 
		which describes how many nested structures(blocks) it will exit. 
		The default value is 1, which immediately exits from the enclosing structure(block).
	<?php  
		 echo "</br>";   
		$i = 0;  
		while (++$i) {  
		    switch ($i) {  
		        case 5:  
		            echo "At matched condition i = 5, break switch<br />\n";  
		            break 1;  // Exit only from the switch.   
		       case 10:  
		            echo "At matched condition i = 10; quitting the while loop<br />\n";  
		            break 2;  // Exit from the switch and the while.   
		       default:  
		            break;  
		    }  
		}?>  
	Output:
		At matched condition i = 5, break switch
		At matched condition i = 10; quitting the while loop
		Note: The break keyword immediately ends the execution of the current structure.
		
	*** PHP continue statement
			The PHP continue statement is used to continue the all the loops such as - for, while, do-while, and foreach loop..
			It continues the current flow of the program and skips the remaining code
				at the specified condition.	 
			
		Example 1	
			<?php  
			    //outer loop  
			    for ($i =1; $i<=3; $i++) {  
			        //inner loop  
			        for ($j=1; $j<=3; $j++) {  
			            if (!($i == $j) ) {  
			               continue;       //skip when i and j does not have same values  
			            }  
			            echo $i.$j;  
			            echo "</br>";  
			        }  
			    }  
			?>  
			Output:
			11
			22 
			33

	** PHP continue Example in while loop
		Example 2
			In the following example, we will print the even numbers between 1 to 20.
				<?php  
				    //php program to demonstrate the use of continue statement  
				  
				    echo "Even numbers between 1 to 20: </br>";  
				    $i = 1;  
				    while ($i<=20) {  
				        if ($i %2 == 1) {  
				            $i++;  
				            continue;   //here it will skip rest of statements  
				        }  
				        echo $i;  
				        echo "</br>";  
				        $i++;  
				    }     
				?>  
		Output:
		Even numbers between 1 to 20: 
			2
			4
			6
			8
			10
			12
			14
			16
			18
			20

		** PHP continue Example with array of string
			Example
			The following example prints the value of array elements except those for which the specified condition is true and continue statement is used.
				<?php  
				    $number = array ("One", "Two", "Three", "Stop", "Four");  
				    foreach ($number as $element) {  
				        if ($element == "Stop") {  
				            continue;  
				        }  
				        echo "$element </br>";  
				    }  
				?>  
			Output:
			One 
			Two 
			Three
			Four

		** PHP continue Example with optional argument
			The continue statement accepts an optional numeric value, which is used accordingly.
			 The numeric value describes how many nested structures it will skip.
			Example
			
				<?php  
				    //outer loop  
				    for ($i =1; $i<=3; $i++) {  
				        //inner loop  
				        for ($j=1; $j<=3; $j++) {  
				            if (($i == $j) ) {      //skip when i and j have same values  
				                continue 1;     //skips only from inner for loop   
				            }  
				            echo "$i -- $j";  
				            echo "</br>";  
				        }  
				    }     
				?>  
			Output:
				12
				13
				21 
				23
				31
				32
  </pre>

  
        	<?php  
			// Example 1.1   //  if condition
                $name="Harishmitha";
	            $age=20; 
	            if($age>=18){  
	            	echo "$name is eligible to vote";  
	           } 
			   echo "<br>"; 
	        ?> 

        <?php  
		  // Example 1.2    //  if else condition
                $name="Karthikeyan";
	            $age=21;  
	            if($age>=18){  
	            echo "$name is eligible to vote";  
	           } 
               else{
                echo "$name is not eligible to vote"; 
               } 
			   echo "<br>"; 
			?>
		
		
        	<?php 
			// Example 1.3    // if else if condition 
        	    $marks=69;      
        	    if ($marks<40){    
        	        echo "fail";    
        	    }    
        	    elseif ($marks>=40 && $marks<50) {    
        	        echo "D grade";    
        	    }    
        	    elseif ($marks>=50 && $marks<65) {    
                echo "C grade";   
        	    }    
        	    else if ($marks>=65 && $marks<80) {    
        	        echo "B grade";   
        	    }    
        	    else if ($marks>=80 && $marks<90) {    
        	        echo "A grade";    
        	    }  
        	    else if ($marks>=90 && $marks<100) {    
        	        echo "A+ grade";   
        	    }  
        	   else {    
        	        echo "Invalid input";    
        	    }  
				echo "<br>";   
        	?>  

		

        	<?php  
			    //  Example 1.4.1    // Nested if condition
        	    $name = "Sharon";
				$age = 23;  
        	    $nationality = "Indian";  
        	    //applying conditions on nationality and age  
        	    if ($nationality == "Indian")  
        	    {  
        	        if ($age >= 18) {  
        	            echo $name . "Eligible to give vote";  
        	        }  
        	        else {    
        	            echo $name . "Not eligible to give vote";  
        	        }  
                }  
				else{
					echo $name . " is not indian citizen";
				}
				echo "<br>"; 
        	?>  
        
            
            	<?php  
				// Example 1.4.2   // Nested if condition
	              $a = 34; $b = 56; $c = 45;  
	               if ($a < $b) {  
	                if ($a < $c) {  
	                    echo "$a is smaller than $b and $c";  
	                    }
					else {
						echo "$c is smaller than $a and $b";  
					}  
	                }
					elseif ($b < $c){
						echo "$b is smaller than $a and $c";  
					} 
					else{
						echo "$c is smaller than $a and $b";  
					}
					echo "<br>";  
	            ?>  

			

            <?php     
			    // Example 1.5.1    // switch case statement 
                $num=20;      
                switch($num) {      
                case 10:      
					echo("number is equals to 10");      
					break;      
                case 20:      
					echo("number is equal to 20");      
					break;      
                case 30:      
					echo("number is equal to 30");      
					break;      
                default:      
                	echo("number is not equal to 10, 20 or 30"); 
					echo "<br>";      
            }     
            ?>  
    
   
    	<?php  
		//  Example 1.5.2    // switch case statement 
	    $ch = "B.Tech";  
	    switch ($ch)  
	    {     
	        case "BCA":   
	            echo "BCA is 3 years course";  
	            break;  
	        case "Bsc":   
	            echo "Bsc is 3 years course";  
	            break;  
	        case "B.Tech":   
	            echo "B.Tech is 4 years course";  
	            break;  
	        case "B.Arch":   
	            echo "B.Arch is 5 years course";  
	            break;  
	        default:   
	            echo "Wrong Choice";  
	            break;  
	    }  
		echo "<br>"; 
	?>    

    
    	<?php 
		 //  Example 1.5.3    // switch case statement     
	    $ch = 'U';  
       switch ($ch)  
       {     
	        case 'a':     
	        case 'e':   
	            echo "Given character is vowel";  
	            
	        case 'i':   
	            echo "Given character is vowel";  
	            break;  
	        case 'o':   
	            echo "Given character is vowel";  
	            break;    
	        case 'u':   
	            echo "Given character is vowel";  
	            break;  
	        case 'A':   
	            echo "Given character is vowel";  
	            break;  
	        case 'E':   
	            echo "Given character is vowel";  
	            break;  
	        case 'I':   
	            echo "Given character is vowel";  
	            break;  
	        case 'O':   
	            echo "Given character is vowel";  
	            break;  
	        case 'U':   
	            echo "Given character is vowel";  
	            break;  
	        default:   
	            echo "Given character is consonant";  
	            break;  
	    }  
		echo "<br>"; 
	?>    

    	<?php  
		// Example 1.5.4   // nested switch statement    
	    $car = "Hyundai";                   
	        $model = "Tucson";    
	        switch( $car )    
	        {    
	            case "Honda":    
	                switch( $model )     
	                {    
	                    case "Amaze":    
	                           echo "Honda Amaze price is 5.93 - 9.79 Lakh.";   
	                        break;    
	                    case "City":    
                           echo "Honda City price is 9.91 - 14.31 Lakh.";    
	                        break;     
	                }    
	                break;    
	            case "Renault":    
	                switch( $model )     
	                {    
	                    case "Duster":    
	                        echo "Renault Duster price is 9.15 - 14.83 L.";  
	                        break;    
	                    case "Kwid":    
	                           echo "Renault Kwid price is 3.15 - 5.44 L.";  
	                        break;    
	                }    
	                break;    
	            case "Hyundai":    
	                switch( $model )     
	                {    
	                    case "Creta":    
	                        echo "Hyundai Creta price is 11.42 - 18.73 L.";  
	                        break;    
	       				case "Tucson":    
	                           echo "Hyundai Tucson price is 22.39 - 32.07 L.";  
	                        break;   
	                    case "Xcent":    
	                           echo "Hyundai Xcent price is 6.5 - 10.05 L.";  
	                        break;    
	                }    
	                break;     
	        }  
			echo "<br>"; 
	
	// Output:
	// Hyundai Tucson price is 22.39 - 32.07 L.
	?>    

//PHP While Loop Example for printing the numbers from 1 to 10
        <?php    
        $n=1;    
        while($n<=10){    
        echo "$n<br/>";    
        $n++;    
        }    
        ?>  

    //Alternative Example for printing the numbers from 1 to 10
        <?php    
        $n=1;    
        while($n<=10):    
        echo "$n<br/>";    
        $n++;    
        endwhile;    
        ?>    
      
    Example
    //Code for printing alphabets using while loop.(A - G)
        <?php  
            $i = 'A';  
            while ($i < 'H') {  
            echo $i;  
            $i++;  
            echo "</br>";  
            }  
        ?>  
        
    *** PHP Nested While Loop
        We can use while loop inside another while loop in PHP, 
        it is known as nested while loop
        Example
        	<?php    
                $i=1;    
                while($i<=3){    // Iterates for 3 times
                $j=1;    
                while($j<=5){    
                echo "$i   $j<br/>";   // Iterates for 5 * 3 times 
                $j++;    
                }    
                $i++;    
                }    
        	?>    

    PHP Infinite While Loop 
        If we pass TRUE in while loop, it will be an infinite loop.
        Syntax
            while(true) {    
            //code to be executed    
            }    
        Example
            <!-- <?php  
                // while (true) {  
                //     echo "Hello Welcome!";  
                //     echo "</br>"; 
				 
                // }  
            ?>   -->
      

</body>
</html>