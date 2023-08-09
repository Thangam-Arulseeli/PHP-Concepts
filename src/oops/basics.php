
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Object Concepts </title>
    <style>
        pre{
            color: #0000ff; 
        }
    </style>
</head>
<body>
        <h2>  OOPS CONCEPT  </h2>
        <pre>
            ***** OOP Concepts
                * Programming model organized around Object rather than the actions.
                * Giving importance to data rather than logic.
            
                *** Class in PHP
                 * Blue print for the object
                 * Entity that determines what the object contains and how an object will behave  
                 * Contains set of instruction to build a specific type of object

                *** Object in PHP
                  * Class defines an individual instance of the data structure.
                  * We define a class once and then make many objects that belong to it.
                  * Objects are also known as an instance.

                ** NOTE:
                    * Displays the contents of the class/(type,size and value) about one or more variables,
                      use var_dump(). 
                      Syntax:
                        var_dump($obj);  

                *** Encapsulation
                	* Wrapping up data member and method together into a single unit in the form of object is called Encapsulation.
	                * Keeps the data and the code safe from external interference.
                    * Binding the data with the code that manipulates it.
                    * Encapsulation also allows a class to change its internal implementation 
                      without hurting the overall functioning of the system.
	
                *** const keyword (Class constant)
	                * Defines for any class with keyword const and without $ symbol
	                * Value of these variables cannot be changed any how after assigning.
                    ** Accessing class constants 
                        * Use 'self' keyword to access the class constant within the class
                        * Use :: (Scope Resolution Operator) to access outside the class

                *** static variable - class variable 
                    * Common sharabe variable for the class
                    * Single copy of the variable is maintained in the class
                    * It will not be comming to the object and is accessible by all the objects based on the class
                    * It is accessed by self::variablename like self::$personCount++; 
                    * It is accessed by class name as Person3::$personCount

        *** Important Functions of class and object
            ** get_class($object_name)  -  Gives the class name of an object.
            ** get_class_vars("class_name") - Gets all variables of a class as Array elements.
            ** get_class_methods("class_name") - Gets all methods of a class as an array.
            ** get_declare_classes( ) - Gets all the declared classes in current script along with predefined classes.
            ** get_object_vars($object_name) -Gets all variables of an object as an array.
            ** class_exists("class_name") - Checks whether the specified class is existed or not.
                  If exists return 1 else 0
            ** is_subclass_of("child_class", "parent_class") - Checks whether the 1st class is subclass of 2nd class or not.
                  If so return 1 else 0
            ** method_exists("class_name","function_name") -  By using this function we can check whether the class method is existed or not.
                  If so return 1 else 0
       
        ***** CONSTRUCTOR -- Has been introduced in PHP 5
	        * Constructor is suitable for any initialization that the object may need before it is used.
            * Only one constructor is specified in the class, and is not overloaded
            * Construction Creation
                ** Using  __construct( ) 
	        * Parent constructors are not called implicitly if the child class defines a constructor. 
            * Calls Parent class constructor
                ** parent::__construct() 
        
        ***** DESTRUCTOR  (PHP 5 introduces)
           	* We create destructor by using "__destruct" function.
            * Only one destructor is specified in the class
            * The destructor method will be called as soon as all references to a particular object are removed ( or )
              when the object is explicitly destroyed in any order in shutdown sequence.
            * Destructors (__destruct ( void): void) are methods which are called 
                when there is no reference to any object of the class or goes out of scope or
                 about to release explicitly. 
            * They don’t have any types or return value. 
                It is just called before de-allocating memory for an object or 
                during the finish of execution of PHP scripts or as soon as the execution 
                control leaves the block. 
           
            ** Note: The destructor method is called when the PHP code is executed completely 
                by its last line by using PHP exit() or die() functions.

        ***** TYPE HINTING
            * Type Hinting is method by which we can force function to accept the desired data type.
            * In PHP, we can use type hinting for Object, Array and callable data type.


        ***** Overloading in PHP
	        * Provides means to dynamically create properties and methods.
	        * These dynamic entities are processed via magic methods, 
               one can establish in a class for various action types.
	        * All overloading methods must be defined as Public.
	        * After creating object for a class, we can access set of entities that are properties or methods not defined within the scope of the class.
	        * Such entities are said to be overloaded properties or methods, and the process is called as overloading.
	        * For working with these overloaded properties or functions, PHP magic methods are used.
	        * Most of the magic methods will be triggered in object context 
              except __callStatic() method which is used in static context.
 
            ** Property overloading
	            * PHP property overloading allows us to create dynamic properties in object context.
	            * For creating those properties no separate line of code is needed.
	            * A property which is associated with class instance, and not declared within the scope of the class, is considered as overloaded property.

            ** Some of the magic methods which is useful for property overloading.
	            * __set(): It is triggered while initializing overloaded properties.
	            * __get(): It is utilized for reading data from inaccessible Properties.
	            * __isset(): This magic method is invoked when we check overloaded properties with isset() function.
	            * __unset(): This function will be invoked on using PHP unset() for overloaded properties.
 
            ************************************ 
        </pre>

        
        <?php
            // Example 1.1   //  Class and Object:
           	class Person  
        	{  
        	        private $pname= "Geena";
                    private $age=23;
        	        public function display()  
        	        {  
        	        echo "Person Name : ".$this->pname. "<br>";
                    echo "Age : ".$this->age. "<br>";
        	        }  
         
                public function setName($nam){
                    $this->pname = $nam;
                }
                public function getName() {
                    return $this->pname;
                }
                public function getAge(){
                    return $this->age;
                }
                public function setAge($ag)  
                {  
                    $this->age=$ag;  
                } 
        	}  
            	$obj = new Person();  
        	    $obj->display(); 
                echo "<br>";
                var_dump($obj);   
                echo "<br>";
                // Cannot access private variables
                // echo "Name from outside = " . $obj->pname . "<br";
                // echo "Age from outside = " . $obj->age . "<br>";
                $obj->setName("Kavitha");
                $obj->setAge(31);
                echo "Name of the person = " . $obj->getName() . "<br>";
                echo "Age of the person = " . $obj->getAge() . "<br>";
                echo "<br>";
        	?>  


            <?php
               // Example 1.2   // Class and Object with constructor 
                class Person1  
                {  
                public $name;  
                public $age;  
                function __construct($n, $a)  
                {  
                    $this->name=$n;  
                    $this->age=$a;  
                }  
                public function setAge($ag)  
                {  
                    $this->ag=$ag;  // Adding new property in the class

                }  
                public function setDepartment($dep){
                    $this->department = $dep;
                }
                public function getDepartment() {
                    return $this->department;
                }
                public function getAge(){
                    return $this->age;
                }
                public function display()      	   
                {  
                    echo  "Welcome ".$this->name."<br/>";  
                    return $this->age-$this->ag;  // Subtract
                }    
                }  
                
                echo "<br>";
                $person=new Person1("Peter Mark",28);  
                $person->setAge(1);   
                echo "You are ".$person->display()." years old";  
                echo "<br>"; 
                 //  Output:
                 //     Welcome Peter Mark
                  //     You are 27 years old 
                $person->setDepartment("Production");
                echo "Department = " . $person->getDepartment();
                echo "<br>";
                // Can access public variables
                $person->name = "Suresh";
                $person->age=38;
                echo "Name from outside = " . $person->name . "<br>";
                echo "Age from outside = " . $person->age . "<br>";
             ?>


        <?php 
          // Example 1.3  //  Class Constant - Using self & :: 
            class Person2  
        	{  
        	        private $pname= "Geena";   // instance variables / properties
                    private $age=23;    // instance variables / properties
                    const VOTE_AGE = 18;    // Constant
                    const DEPT = "TRAINING";   // constant
        	        public function display()  
        	        {  
        	        echo "Person Name : ".$this->pname. "<br>";
                    echo "Age : ".$this->age. "<br>";
                    echo "VOTEAGE : ". self::VOTE_AGE. "<br>";
        	        }  
        	}  
            	$obj = new Person2();  
                echo "<br>";
        	    $obj->display(); 
                echo "DEPARTMENT : " . $obj::DEPT . "<br>";
                var_dump($obj);
                echo "<br>";   
            ?>

        	        
        <?php
            // Example 2   //  Important functions of Class and Object 
           	class Person3  
        	{  
        	        private $pname  ;    // instance variables / properties
                    private $age;     // instance variables / properties
                    public static $personCount;    // class variables / properties
                            // By default, static variable is initialised to 0

                    public function __construct($n, $a){
                        $this->pname = $n;
                        $this->age = $a;
                        self::$personCount++;  
                    }
                   
        	        public function display()  
        	        {  
        	        echo "Person Name : ".$this->pname. "<br>";
                    echo "Age : ".$this->age. "<br>";
        	        }  
                    public static function show(){ // static function can access only the static variables /static functions
                       echo "<br> Person count = " .  self::$personCount++ . "<br>";   
                      // echo "<br> Person Name = " .  $this.pname . "<br>";  // Error, since instance variable 
                    }
        	}  
            	$p = new Person3("Abishanth",14);
                $p1 = new Person3("Jenny", 16);  
        	    $p->display();
                $p1->display();
                echo "No. of Persons = " . Person3::$personCount . "<br>";
                var_dump($p);   
                echo "Class & Object Functions <br>";
                echo "Class Name : ". get_class($p) . "<br>";
                echo("Class Variables : ");
                var_dump(get_class_vars("Person3"));  // Array ([pname]=>Geena [age]=>23)
                echo  "<br>"; 
                echo ("Class Methods : ");
                print_r(get_class_methods("Person3"));  // List out all the methods including constructor
                echo "<br>";
                print_r(get_object_vars($p)); echo "<br>"; //  Array ([pname]=>Geena [age]=>23)
                // echo "All the classes : " ;             
                // print_r( get_declared_classes()); echo "<br>";
                echo "Class Exists : ". class_exists("Person3") . "<br>";  // 1 (true)
                echo "display() Method exists : " . method_exists("Person3","display") . "<br>";   // 1   (display() method exists or not)
                Person3::show();  // Calling static(class) method
                echo "<br>";
            ?> 
        
        
        <?php 
           // Example 3   // Constructors and Destructor
           class Person4  
           {  
                   private $pname; 
                   private $age;
                //    public function __construct ( )
                //    {
                //     echo "Default constructor \n";
                //    }
                // Constructor cannot be overloaded - Overloading    
                public function __construct($pn, $ag )  // Constructor using __construct( )
                   {
                     $this->pname=$pn;
                     $this->age=$ag;
                   }
                   public function __destruct()  
                   {  
	                  echo "Destructor in Person class..... <br>";  
            	    }  
                   public function display()  
                   {  
                   echo "Person Name : ".$this->pname. "<br>";
                   echo "Age : ".$this->age. "<br>";
                   }  
           }  
           class Department  
           {  
                   private $deptNo; 
                   private $deptName;
                   public function Department( $dNo, $dName )  // Constructor using class name // Not allowed in PHP
                   {
                     $this->deptNo=$dNo;
                     $this->deptName=$dName;
                     echo "Dept";
                   }
                   public function display()  
                   {  
                   echo "Dept ID : ".$this->deptNo. "<br>";
                   echo "Department Name : ".$this->deptName. "<br>";
                   }  
                   public function __destruct()  
                   {  
	                  echo "Destructor in Department class.....<br>";  
            	    }  
           }  
              $p = new Person4("Stella", 34);  
              $d = new Department(1, "Accounts");
              $p->display(); 
              $d->display();
           ?>   
        

        <?php  
	    //  Example 4    // Type Hinting (Class/Object)  
             // Create a class  
            class Sample  
            {  
                public $dat= "Sample class";  
            }  
            //create function with class name as argument  
            function display(Sample $s)  
            {  
                //call variable  
                echo $s->dat . "<br>";  
            }  
            // Call the function by passing the object as argument 
            display(new Sample());  
            $ss = new Sample();
            display($ss);
	?>  

    
        <?php
           // Usage of $this and instanceof operator
           // instanceof operator is used to check the object is created based on the specific class or not
           // It gives true or false as result (bool) value 
        class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        }

        $apple = new Fruit();
        $apple->set_name("Kashmir apple");
        echo "Apple name = " . $apple->get_name() . "<br>";
        var_dump($apple instanceof Fruit); // returns true, when $apple is object created based on Fruit class 
        echo "<br>"; 
        ?>
    </body>
</html>
