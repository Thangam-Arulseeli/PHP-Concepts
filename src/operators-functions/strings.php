<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> String & String Functions</title>
    <style> 
        pre {
            text-align: left;
            color: #67f8d5;
            background-color: cyan;

        }
</head>
<body>
    <h2> String and String Functions </h2>
    <pre> 
        *** PHP String
            PHP string is a sequence of characters i.e., used to store 
            and manipulate text. PHP supports only 256-character set and so that 
            it does not offer native Unicode support. 

            **There are 4 ways to specify a string literal in PHP.
                1.	Single quoted
                2.	Double quoted
                3.	Heredoc syntax
                4.	Newdoc syntax (since PHP 5.3)

            * Single Quoted string
                We can create a string in PHP by enclosing the text in a single-quote.
                Escape sequences are not allowed in PHP. However some escape sequences 
                like /', /", /$ and // are allowed in PHP. 
                
            * Double Quoted string
                In PHP, string can be enclosed within double quote also.

            * Heredoc syntax (<<<)
                Heredoc syntax (<<<) to delimit string, 
                an identifier is provided after this heredoc <<< operator, 
                and immediately a new line is started to write any text.
                To close the quotation, the string follows itself and then again that same identifier
                is provided. That closing identifier must begin from the new line without any whitespace or tab.
                -- Naming Rules
                    The identifier should follow the naming rule that it must contain
                    only alphanumeric characters and underscores, and must start with an underscore 
                    or a non-digit character.

            * Newdoc
                Newdoc is similar to the heredoc, but in newdoc parsing is not done.
                It is also identified with three less than symbols <<< followed by an identifier.
                But here identifier is enclosed in single-quote, e.g. <<<'EXP'. 
                Newdoc follows the same rule as heredocs.
                Difference between newdoc and heredoc 
                    Newdoc is a single-quoted string whereas heredoc is a double-quoted string.
                    Note: Newdoc works as single quotes.
                    Note: newdoc supported by PHP 5.3.0+ versions.


    Valid Example
        <?php  
           // $hdstr1 = <<<Demo 
        // It is a valid example  
        Demo;    //Valid code as whitespace or tab is not valid before closing identifier 
          //  $hdstr2 = <<<Demo  
        // It is Invalid example  
            Demo;    //Invalid code as whitespace or tab is not valid before closing identifier  
        $city = 'Delhi';  
         //   $hdstr3 = <<<DEMO  
      //  Hello! My name is Jonney, and I live in $city.  
       // DEMO;  
	    	
        // echo $hdstr1;  
        // echo $hdstr2;  
        // echo $hdstr3; 
        // echo <<<DEMO    // Here we are not storing string content in variable    
        // It is the example   
        // of multiple  
        // lines of text.  
        // DEMO;  
        ?>  

        NOTE:
            We cannot use any whitespace or tab before and after the identifier 
            and semicolon, which means identifier must not be indented. 
            The identifier must begin from the new line.


	<?php  
	//     $ndstr1 = <<<'DEMO'  
	//     Welcome to CGVAK.  
	//            Learn newdoc example.  
    //     DEMO;  
    //     echo $ndstr1;  
    //     echo '</br>';  
        
    //     echo <<< 'Demo'    // Here we are not storing string content in variable str.  
    //         Welcome to javaTpoint.  
    //             Learn with newdoc example.  
    //     Demo;  
	// ?>  
    </pre>

       <?php
        // Example for string handling
        	
    	       $str1='Hello text within single quote'; 
               $str2='Hello text   
                        multiple line  
                        text within single quoted string';  
            	 $str3="Using double \'quote\' directly inside single quoted string";  
	            $str4='Using escape sequences \n \t in single quoted string';
                $str5='Using single quote \'my quote\' and \\backslash';  
                $num1=10;   
	            $str6='Including variable $num1'; 
                $str7="Hello text within double quote"; 	
                $str8="Using double quote \"my quote\" and \\backslash";
                $str9="Using 'single quote' directly inside double quoted string'; 
	
	
                 echo `Single Quoted String : $str1 <br/>`;
                 echo 'Multiple line string :'. $str2 . '<br/>';
                  echo 'Using double quote within single quote : " . $str3. "<br>"; 
                 echo "Using escape sequences : " .$str4 ."<br>"; 
                 echo "Using single quote within single quote : ". $str5. "<br>"; 
                 echo "Adding numeric value inside string :".$str6 ."<br/>";
                 echo `Double Quoted String : $str7 <br/>`;
                 echo "Using double quote within single quote : ". $str9. "<br>"; 
                 echo "Using double quote within double quote : ". $str8. "<br>";       
        ?>

        	<?php  
        	class heredocExample{  
        	        var $demo;  
        	        var $example;  
        	        function __construct()  
        	        {  
        	                $this->demo = 'DEMO';  
        	                $this->example = array('Example1', 'Example2', 'Example3');  
                }  
        	    }  
        	    $heredocExample = new heredocExample();  
        	    $name =  'Gunjan';  
        	      
        	//     echo <<< ECO  
            //     My name is "$name". I am printing some $heredocExample->demo example.  
            //     Now, I am printing {$heredocExample->example[1]}.  
        	//     It will print a capital 'A': \x41  
        	// ECO;  
        	 ?>  
        

             	<?php  
        	        class heredocExample{  
        	        var $demo;  
        	        var $example;  
        	        function __construct()  
        	        {  
        	                $this->demo = 'DEMO';  
        	                $this->example = array('Example1', 'Example2', 'Example3');  
        	        }  
        	    }  
        	    $heredocExample = new heredocExample();  
        	    $name =  'Gunjan';  
        	      
        	    // echo <<<ECO  
        	    // My name is "$name". I am printing some $heredocExample->demo example.  
        	    // Now, I am printing {$heredocExample->example[1]}.  
        	    // It will print a capital 'A': \x41  
            	// ECO;  
        	 ?>  
            Output:
                The output of the above program will be like:
                My name is "$name". I am printing some $heredocExample->demo example. 
                Now, I am printing {$heredocExample->example[1]}. 
                It will print a capital 'A': \x41


        <?php
                // String Functions Example
                $str1 = "Welcome to CGVAK trainees";
                $str2 = "Hai Welcome Welcome to CGVAK Welcome to G2";
                $len = strlen($str1);  
                $lower = strtolower($str1);
                $upper = strtoupper($str1);
                $ftlower = lcfirst($str1);
                $ftupper = ucfirst($str1);
                $wdupper = ucwords($str1);
                $rev = strrev($str1);
                $trimming = trim("   CG-VAK  G2   ");
                $strcount = substr_count($str2,"Welcome");

                echo "Length of string : $len </br>";
                echo "Convert to Lowercase : $lower </br>";
                echo "Convert to uppercase : $upper </br>";
                echo "Convert first letter to Lowercase : $ftlower </br>";
                echo "Convert first letter to uppercase : $ftupper </br>";
                echo "Convert starting of each word to uppercase : $wdupper </br>";
                echo "Reversing the string : $rev </br>";
                echo "Remove extra space : $trimming </br>";
                echo "Substring count : $strcount </br>";
                if (strcmp("Sugumar","Suganya") == 0){
                    echo "Both strings are equal";}
                elseif (strcmp("Sugumar","Suganya") < 0){
                    echo "Both in alphabetical order"; }
                else
                    echo "Both not in alphabetical order";
        ?>
</body>
</html>