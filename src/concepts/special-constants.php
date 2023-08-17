<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Special Constants / Magic Constants </title> 
</head>
<body>
    <h2> Special Constants / Magic Constants </h2>
  <pre>  
    **** Magic constants are the predefined constants in PHP which get changed on the basis of their use.
        * They start with double underscore (__) and ends with double underscore.
        * They are similar to other predefined constants but as they change their values with the context,
            they are called magic constants.
        * There are nine magic constants in PHP.
        * In which eight magic constants start and end with double underscores (__).
            1.	__LINE__
            2.	__FILE__
            3.	__DIR__
            4.	__FUNCTION__
            5.	__CLASS__
            6.	__TRAIT__
            7.	__METHOD__
            8.	__NAMESPACE__
            9.	ClassName::class
        * NOTE : All of the constants are resolved at compile-time instead of run time, 
                    unlike the regular constant. Magic constants are case-insensitive.

    <hr>  
***  __LINE__    It returns the current line number of the file, where this constant is used.
	<?php  
        // Example 1: __LINE__ 
	    echo "<h3>Example for __LINE__</h3>";    
	    // print Your current line number i.e;4     
	    echo "You are at line number in the file : " . __LINE__ . "<br><br>";  
	?>  

<hr>

***   __FILE__ This magic constant returns the full path of the executed file, 
                where the file is stored.
                If it is used inside the include, the name of the included file is returned.
	<?php  
        // Example 2: __FILE__  
        echo "<h3>Example for __FILE__</h3>";    
	    //print full path of file with .php extension    
	    echo __FILE__ . "<br><br>";  
	?>  
Output:
Example for __FILE__

D:\xampp\htdocs\PHP-Concepts\src\concepts\special-constants.php

<hr>

***   __DIR__
      It returns the full directory path of the executed file.
      The path returned by this magic constant is equivalent to dirname(__FILE__). 
      This magic constant does not have a trailing slash unless it is a root directory.
	<?php   
        // Example 3: __DIR__
	    echo "<h3>Example for __DIR__</h3>";    
	    //print full path of directory where script will be placed    
	    echo __DIR__ . "<br><br>";  
	    //below output will equivalent to above one.  
	    echo dirname(__FILE__) . "<br><br>";    
	?>  
Output:
Example for __DIR__

D:\xampp\htdocs\PHP-Concepts\src\concepts

D:\xampp\htdocs\PHP-Concepts\src\concepts
<hr>

***  __FUNCTION__  
    This magic constant returns the function name, where this constant is used.
    It will return blank if it is used outside of any function.

    <?php  
        // Example 4: __FUNCTION__
	    echo "<h3>Example for __FUNCTION__</h3>";    
	    //Using magic constant inside function.    
	    function test(){    
	        //print the function name i.e; test.   
	        echo 'The function name is '. __FUNCTION__ . "<br><br>";   
	    }    
	   
	      
	    //Magic constant used outside function gives the blank output.    
	    function test_function(){    
	        echo 'Hello Welcome <br>';
            test();   
            echo 'The function name is '. __FUNCTION__ . "<br><br>";       
	    }    
	    test_function();    
	    //give the blank output.   
	    echo "Outside the function : " . __FUNCTION__ . "<br><br>";  
	?>  
Output:
Example for __FUNCTION__

Hello Welcome 
The function name is test

The function name is test_function

Outside the function : 

<hr>

***   __CLASS__
    It returns the class name, where this magic constant is used.
     __CLASS__ constant also works in traits.

	<?php 
         // Example 5: __CLASS__  
	    echo "<h3>Example for __CLASS__</h3>";    
	    class MyClass    
	    {    
	        public function __construct() {    
	            ;    
    }    
	    function getClassName(){    
	        //print name of the class .   
	        echo __CLASS__ . "<br>";   
	        }    
	    }    
	    $t = new MyClass;    
	    $t->getClassName();    
	echo " --------------------- <br> " ;   
	    //In case of Inheritance    
	    class Base  
	    {    
	    function test_first(){    
	            //will always print base class which is Base here.    
	            echo __CLASS__;   
	        }    
	    }    
	    class Derived extends Base    
	    {    
	        public function __construct() {    
	            ;    
	        }    
	    }    
	    $t = new Derived;    
	    $t->test_first();    
	?>  
Output:
Example for __CLASS__

MyClass
 --------------------- 
 Base  

 <hr>

***  __TRAIT__
    This magic constant returns the trait name, where it is used.

	<?php 
         // Example 6: __TRAIT__  
	    echo "<h3>Example for __TRAIT__</h3>";    
	    trait MyTrait {    
	        function my_func(){    
	            //will print name of the trait i.e; created_trait    
	            echo __TRAIT__;  
	        }    
	    }    
	    class Company {    
	        use MyTrait;    
	        }    
	    $a = new Company;    
	    $a->my_func();    
	?>  
Output:
Example for __TRAIT__

MyTrait

<hr>

***  __METHOD__
    It returns the name of the class method where this magic constant is included. 
    The method name is returned the same as it was declared.
	<?php 
         // Example 7: __METHOD__    
	    echo "<h3>Example for __METHOD__</h3>";  
	    class Example {    
	        public function __construct() {    
	            //print method::__construct    
	                echo __METHOD__ . "<br><br>";   
	            }    
	        public function my_func(){    
	            //print method::my_func    
	               echo __METHOD__;   
	        }    
	    }    
	    $a = new Example;    
	    $a->my_func();  
	?>  
Output:
Example for __METHOD__

method:: construct
method:: my_func

<hr> 

*** __NAMESPACE__
    It returns the current namespace where it is used.

	<?php 
         // Example 8: __NAMESPACE__      
	    echo "<h3>Example for __NAMESPACE__</h3>";  
	    class Sample {    
	        public function __construct() {    
	            echo 'This line will print on calling namespace.';     
	        }     
	    }    
	    $class_name = __NAMESPACE__ . '\Sample';    
	    $a = new Sample;   
	?>  
Output:
Example for __NAMESPACE__

This line will print on calling namespace.

<hr>

***  ClassName::class:
      * This magic constant does not start and end with the double underscore (__). 
      * It returns the fully qualified name of the ClassName. 
      * ClassName::class is added in PHP 5.5.0. It is useful with namespaced classes.

	<?php  // namespace Technical_Portal;  -- Error, since it is not the first statement
	    echo "<h3>Example for CLASSNAME::CLASS </h3>";  
	    class training {    
	    }  
	    echo training::class;    //ClassName::class   
	?>  
Output:
Example for ClassName::class


Note: Remember namespace must be the very first statement or 
      after any declare call in the script, otherwise it will generate Fatal error.

    <hr>
</pre>

<pre>
	***** PHP Global Variables - Superglobals
	    * Some predefined variables in PHP are "superglobals", which means that 
	          they are always accessible, regardless of scope -
	    * We can access them from any function, class or file without having to do anything special.

	*** The PHP superglobal variables are:
		$GLOBALS
		$_SERVER
		$_REQUEST
		$_POST
		$_GET
		$_FILES
		$_ENV
		$_COOKIE
		$_SESSION

	** $GLOBALS
		* Used to access global variables from anywhere in the PHP script 
		  (also from within functions or methods).
		* PHP stores all global variables in an array called $GLOBALS[index].
		  The index holds the name of the variable.

	** $_SERVER
		$_SERVER is a PHP super global variable which holds information 
		    about headers, paths, and script locations.
		Element/Code			Description
		$_SERVER['PHP_SELF']	  -- Returns the filename of the currently executing script
		$_SERVER['GATEWAY_INTERFACE'] --	Returns the version of the Common Gateway Interface (CGI) the server is using
		$_SERVER['SERVER_ADDR']  	--	Returns the IP address of the host server
		$_SERVER['SERVER_NAME']		-- Returns the name of the host server (such as www.w3schools.com)
		$_SERVER['SERVER_SOFTWARE']	-- Returns the server identification string (such as Apache/2.2.24)
		$_SERVER['SERVER_PROTOCOL']	-- Returns the name and revision of the information protocol (such as HTTP/1.1)
		$_SERVER['REQUEST_METHOD'] -- 	Returns the request method used to access the page (such as POST)
		$_SERVER['REQUEST_TIME'] -- 	Returns the timestamp of the start of the request (such as 1377687496)
		$_SERVER['QUERY_STRING']	-- Returns the query string if the page is accessed via a query string
		$_SERVER['HTTP_ACCEPT']	 -- Returns the Accept header from the current request
		$_SERVER['HTTP_ACCEPT_CHARSET'] --	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
		$_SERVER['HTTP_HOST'] -- 	Returns the Host header from the current request
		$_SERVER['HTTP_REFERER'] -- 	Returns the complete URL of the current page (not reliable because not all user-agents support it)
		$_SERVER['HTTPS']	-- Is the script queried through a secure HTTP protocol
		$_SERVER['REMOTE_ADDR'] -- 	Returns the IP address from where the user is viewing the current page
		$_SERVER['REMOTE_HOST']	-- Returns the Host name from where the user is viewing the current page
		$_SERVER['REMOTE_PORT'] -- 	Returns the port being used on the user's machine to communicate with the web server
		$_SERVER['SCRIPT_FILENAME'] --	Returns the absolute pathname of the currently executing script
		$_SERVER['SERVER_ADMIN'] --	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
		$_SERVER['SERVER_PORT']	-- Returns the port on the server machine being used by the web server for communication (such as 80)
		$_SERVER['SERVER_SIGNATURE']	-- Returns the server version and virtual host name which are added to server-generated pages
		$_SERVER['PATH_TRANSLATED']	-- Returns the file system based path to the current script
		$_SERVER['SCRIPT_NAME']	-- Returns the path of the current script
		$_SERVER['SCRIPT_URI']	-- Returns the URI of the current page

	** $_REQUEST
		* Used to collect data after submitting an HTML form.
		* In this example, we point to this file itself for processing form data. 
		* If you wish to use another PHP file to process form data, 
		  replace that with the filename of your choice. 
		  Then, we can use the super global variable $_REQUEST to collect the value of the
		  input fields.
	** $_GET
		* Used to collect form data after submitting an HTML form with method="get".
		* $_GET can also collect data sent in the URL.
		* Assume we have an HTML page that contains a hyperlink with parameters:
			<body>
				<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
			</body>
			When a user clicks on the link "Test $GET", the parameters "subject"
			and "web" are sent to "test_get.php", and
			you can then access their values in "test_get.php" with $_GET.
			The example below shows the code in "test_get.php":		
            <html>
            <body>
                <?php
                    //  echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
                ?>
            </body>
            </html>
		

	</pre>

			<?php
                // $GLOBALS -- Super global variable example
                $x = 75;
                $y = 25;
                function addition() {
                     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                }			
                addition();
                echo "Global values = " . $z . "<br>";
			?>

			<?php
			// Example shows how to use some of the elements in $_SERVER:
			echo $_SERVER['PHP_SELF'];
			echo "<br>";
			echo $_SERVER['SERVER_NAME'];
			echo "<br>";
			echo $_SERVER['HTTP_HOST'];
			echo "<br>";
			// echo $_SERVER['HTTP_REFERER'];
			// echo "<br>";
			echo $_SERVER['HTTP_USER_AGENT'];
			echo "<br>";
			echo $_SERVER['SCRIPT_NAME'];
			/* OUTPUT
				/demo/demo_global_server.php
				35.194.26.41
				35.194.26.4 
				https://tryphp.w3schools.com/showphp.php?filename=demo_global_server
				Mozilla/5.0 (Linux; Android 10; Redmi 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36
				/demo/demo_global_server.php
				*/

			?>
	<pre>
		<h3> // Example shows how to use $_REQUEST['fname'] to get the form inputs </h3>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Name: <input type="text" name="fname">
			<input type="submit">
		</form>

		<?php
		// Example shows how to use $$_REQUEST['fname'] to get the form inputs
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// collect value of input field
		$name = $_REQUEST['fname'];
		if (empty($name)) {
			echo "Name is empty";
		} else {
			echo $name;
		}
		}
		?>

	
	</pre>
	
</body>
</html>