<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inheritance - Interface </title>
</head>
<body>
    <h3> Inheritance & Interface </h3>
    <pre> 
        ***** Inheritane
            * Accessing the features of one class from another class. 
            * If we inherit the class features into another class, we can access both class properties.
            * 'extends' keyword is used in inheritance.
	        * It supports the concept of hierarchical classification.
	        * PHP supports only single inheritance, where only one class can be derived from single parent class.
	        * We can simulate multiple inheritance by using interfaces.

        *** If there is a derived class inheriting from base class and 
             the object of the derived class is created, 
                the constructor of base class is created and then the constructor 
                of the derived class.
        *** The destructor of the derived class is called and
             then the destructor of base class just the reverse order of constructor.
        
        *** Access Specifier
             * Types of Access Specifiers available in PHP
                private - These members will be accessed within the class itself. 
                           It protects members from outside class access with the reference of the class instance.
                protected - These members can be accessed from the class where it is declared and from its sub classes
                public - class members with this access modifier will be
                          publicly accessible from anywhere, even from outside the scope of the class.
                

        *** Abstraction in PHP
                * Shows only useful information, remaining(functionalities) are hidden from the end user.
                * Abstraction is any representation of data in which the implementation details 
                  are hidden (abstracted).
        *** Abstract class and abstract function
                * abstract function has 'abstract' keyword which is in parent class.
                * The abstract function must be redefined in the child class, otherwise that class also become a base class
                * The class with abstract keyword will become pure base class. (abstract)
                * Since abstract class is the base class, it must be extended, Object cannot be created
                * Abstract class can contain atleast one abstract function and any number of non-abstract functions
                
        *** Final Keyword
	            * In PHP, 'final' keyword is applicable to only class and class methods. 
                * We cannot declare variable as 'final' in PHP, instead we use 'const'. keyword / define() to declare a constant
	            * If we declare class method as a 'final' then that method cannot be overriden by the child class.
                * If we declare class as a 'final' then that class cannot be extended any more.
                * Object must be created for the final class to access it's members

        *** Interface
	        * An interface is similar to a class except that it cannot contain code.
            * Interface can contain constants
	        * An interface can define method names with arguments, but not the contents of the methods.
	        * Any classes implementing an interface must implement all methods declared in the interface.
	        * A class can implement multiple interfaces.
	        * An interface is declared using the "interface" keyword.
	        * Interfaces can't contain Non-abstract methods.

        *** Differences between Abstract class and Interfaces.
            ** Abstract class:
                * Abstract class comes under partial abstraction.
                * Abstract classes can maintain abstract methods and non abstract methods.
                * In abstract classes, we can create the variables.
                * In abstract classes, we can use any access specifier.
                * By using 'extends' keyword we can access the abstract class features from derived class.
                * Multiple inheritance is not possible.
            ** Interface:
                * Interface comes under full abstraction.
                * Interfaces can contain only constants and abstract methods.
                * In PHP interfaces, we can't create the variables.
                * In interface, we can use only public access specifier.
                * By using 'implement' keyword we can get interface from derived class.
                * By using interfaces multiple inheritance is possible.
        *** IMPORTANT NOTE:
            * A Class can extends one base class and implemets more than one intefaces together
                 to specify multiple interface concept in PHP (Example 6)   
        
            *** Encryption
            * It is a concept of Encoding and Decoding the data.
            * Two types of Encryption in PHP. 
                1.	One_way Encryption
                2.	Two_way Encryption
              * One_way Encryption:
                By using this, we can encode the data but we cannot decode encoded data.
                  md5() function: (Message-Digest 5)
                By using this function, we can encode the data as 32 bit characters length, alphanumeric string.

            * Syntax
            	string md5 ( string $str [, bool $raw_output = FALSE ] )  
            
            * String --	The string to be calculated. (Compulsory)
            * raw_output -- Specifies hex or binary output format TRUE- Raw 16 character
                and FALSE- Default.	(Optional)
            * md5() function returns the calculated md5 hash on success, or false on failure.

        *** Two-way Encryption
            * We can encode and decode the data. 
            * Two-way encryption means there is both encrypt and decrypt function present.
              In PHP, two-way encryption is accomplished through the following function.
                1.	base64_encode()
                2.	base64_decode()

            1. base64_encode()
                * This function is used to encode the given data with base64. This function was introduced in PHP 4.0.
                * Syntax
                    string base64_encode ( string $data )  
               
                * data	-- The data to be encoded.	(Compulsory)
                The base64_encode() function returns the encoded data as string.

            2. base64_decode():
                * The base64_decode() function is used to decode a base64 encoded data.
                  This function was introduced in PHP 4.0.
                * Syntax
                    string base64_decode ( string $data [, bool $strict = FALSE ] )  
                    * data	-- The encoded data.	(Compulsory)
                    * strict -- If the strict parameter is set to TRUE, 
                      then the base64_decode() function will return FALSE 
                      if the input contains character from outside the base64 alphabet.	
                      (Optional)
                    * The base64_decode() function returns the decoded data or false
                      on failure. The returned data may be binary.

            </pre>

            <hr>

    	<?php 
        // Example 1  //   Inheritance Program 
	    class Person  
        {  
                private $pname;
                private $age;

                public function setPerson($pn, $ag )
                {
                    $this->pname = $pn;
                    $this->age = $ag ;
                }
               
                public function putPerson()  
                {  
                echo "Person Name : ".$this->pname. "<br>";
                echo "Age : ".$this->age. "<br>";
                }  
        }  
	    class Bank extends Person  
	    {  
            private $acno,$actype,$balance;

	        public function setAccount($acno, $actype, $bal)  
	        {  
	            $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
            public function putAccount()  
                {  
                $this->putPerson();
                echo "A/C No.  : ".$this->acno. "<br>";
                echo "A/C Type : ".$this->actype. "<br>";
                echo "Balance  : ".$this->balance . "<br>";
            }  

	    }  
        echo "Example 1 - Inheritance <br>";
	    $bk= new Bank ();  
	    $bk->setPerson("Oliver Lourel", 25);  
	    $bk->setAccount(12341000, "SB A/C", 34000);
       // $bk->putPerson();
        $bk->putAccount(); 
        echo "<br>"; 
	?>  
    <hr>
        <?php
        class ParentClass
            {
                function __construct()
                {
                    print "Parent class constructor" . "<br>";
                }
                function __destruct()
                {
                    print "//////Parent class destructor" . "<br>";
                }
            }
        
        class ChildClass extends Parentclass
            {
                function __construct()
                {
                    parent::__construct();
                    print "Child Class constructor " . "<br>";
                }
                function __destruct()
                {   
                    print ".....Child class destructor" . "<br>";
                    // parent::__destruct();
                }
            }
        echo "Order of constructor & destructor calling in inheritance <br>";
        //$obj = new ParentClass();
        $obj = new ChildClass();
        // exit();
         //die("Calling destructors in inheritance <br>");
        echo "<br>";
        ?>
<hr>
    <?php 
        // Example 2.2  //   Inheritance Program with constructor
	    class Personn  
        {  
                private $pname;
                private $age;

                 public function __construct($pn, $age)  
	              {  
                    $this->pname = $pn;
                    $this->age = $age;
	             }  

                // public function Personn($pn, $age)  // Not applicable
	            //  {  
                //     $this->pname = $pn;
                //     $this->age = $age;  
	            // }  

                public function setPerson($pn, $ag )
                {
                    $this->pname = $pn;
                    $this->age = $ag ;
                }
               
                public function putPerson()  
                {  
                echo "Person Name : ".$this->pname. "<br>";
                echo "Age : ".$this->age. "<br>";
                }  
        }  
	    class Bankk extends Personn  
	    {  
            private $acno,$actype,$balance;

            // public function __construct()  
	        // {  
	        //      parent::__construct();  
	        //     echo "Bank Class Child Constructor...Default";  
	        // }  
            public function __construct($pn, $age, $acno, $actype, $bal )  
	        {  
	            parent::__construct($pn, $age);  
	            $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
	        public function setAccount($acno, $actype, $bal)  
	        {  
	            $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
            public function putAccount()  
                { 
                $this->putPerson(); 
                echo "A/C No.  : ".$this->acno. "<br>";
                echo "A/C Type : ".$this->actype. "<br>";
                echo "Balance  : ".$this->balance . "<br>";
            }  

	    }  
        echo "Example 2.2 - Inheritance Program with constructor <br>";
	    $bk= new Bankk ("Joseph Immanuel", 41, 12341000, "CA A/C", 120000 );  
        //$bk=new Bankk();
	    //$bk->setPerson("Joseph Immanuel", 41);  
	    //$bk->setAccount(12341000, "CA A/C", 120000);
        $bk->putAccount(); 
        echo "<br>"; 
	?>  

<hr>
        <?php
        // Example 3.1  //   Access Specifier - private 
	    class Persons  
        {  
                private $pname;
                private $age;

                 function setPerson($pn, $ag )
                {
                    $this->pname = $pn;
                    $this->age = $ag ;
                }
               
                 function putPerson()  
                {  
                echo "Person Name : ".$this->pname. "<br>";
                echo "Age : ".$this->age. "<br>";
                }  
        }  
	    class Banks extends Persons  
	    {  
            private $acno,$actype,$balance;

	        public function setAccount($acno, $actype, $bal)  
	        {  
	            $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
            public function putAccount()  
                {
                //echo "Age of $pname is $age";    // Error since private  
                $this->putPerson();
                echo "A/C No.  : ".$this->acno. "<br>";
                echo "A/C Type : ".$this->actype. "<br>";
                echo "Balance  : ".$this->balance . "<br>";
            }  

	    }  
        echo "Example 3.1 - Access Specifier (private) <br> ";
	    $bk= new Banks ();  
	    $bk->setPerson("Oliver Lourel", 25);  
	    $bk->setAccount(12341000, "SB A/C", 34000);
        //echo "Age of $bk->pname is $bk->age";    // Error since private 
       // $bk->putPerson();
        $bk->putAccount(); 
        echo "<br>"; 
	?>  
<hr>

    <?php  
    // Example 3.2  //   Access Specifier - protected 
	class Addition  
	{  
        // protected $x=500;  
        // protected $y=200;
        protected $x , $y;

        function __construct($x1, $y1){
            $this->x = $x1;
            $this->y = $y1;
        }  
        function add()  
        {  
            echo "Addition in Parent = " . $sum=$this->x + $this->y."<br/>";  
        }  
    }     
    class Subtraction extends Addition  
    {  
        function __construct($x1, $y1){
            parent::__construct($x1,$y1);
        }
        function sub()  
        {  
        echo "Subtraction in Parent = " . $sub=$this->x-$this->y."<br/>";  
        }  
    
    }   
        echo "Example 3.2 - Access Specifier (protected)  <br>";  
        $data= new Subtraction(500,200);  
        $data->add();  
        $data->sub();  	  
	?>  
<hr>

	<?php  
    // Example 3.3  //   Access Specifier - private, protected, public  
	class Personal  
	{    
	public $name="George";  
	protected $profile="HR";   
	private $salary=5000000;  
	public function show()  
	{  
	echo "Welcome : ".$this->name."<br/>";  
	echo "Profile : ".$this->profile."<br/>";  
    echo "Salary : ".$this->salary."<br/>";  
	} 
    protected function getSalary(){
        return $this->salary;
    } 
	}     
	class Company extends Personal  
	{ 
        var $sal;  // Can use var keyword to declare the variables in the class
       //  let $sal;  // Cannot use let keyword to declare the variables in the class
        public function showProfile(){
            return $this->profile;
        }
	public function display()  
	{  
	echo "Welcome : ".$this->name."<br/>";  
	echo "Profile : ".$this->profile."<br/>";  
	// echo "Salary : ".$this->salary."<br/>";  
    echo "Salary = " . $this->getSalary() . "<br>"; 
    $this->sal= $this->getSalary();
	}  
	} 
    echo "Example 3.3  //   Access Specifier - (private, protected, public)" . "<br>";    
	$obj= new Company;     
	$obj->display();  // Using public member
    echo "Welcome : ".$obj->name."<br/>";       // public 
	// echo "Profile : ".$obj->profile."<br/>";    // protected // Cannot access outside subclass
    echo "Profile : " . $obj->showProfile() . "<br>";
   // echo "Salary : ".$obj->salary."<br/>";      // private -- Error
   echo "Salary : ".$obj->sal . "<br/>";  
	?>  


<hr>

    <?php 
        // Example 4  //   Abstraction & Overridden -- Abstract method and abstract class 
	    abstract class APerson  
        {  
                protected $pname;
                protected $age;

                public function accessPerson($pn, $ag )
                {
                    $this->pname = $pn;
                    $this->age = $ag ;
                }
                public function Greeting()  // Overridding method in parent
                {  
                return $this->pname . "  Welcome!!!  ";      
                 }  

                abstract public function display();   // abstract function in the baseclass 
                
        }  
	    class ABank extends APerson  
	    {  
            private $acno,$actype,$balance;

	        public function access($pn, $ag, $acno, $actype, $bal)  
	        {  
                // return parent::accessPerson($pn, $ag); -- Next statements won't be executed
                parent::accessPerson($pn, $ag);      
	            $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
            public function display()  // parent class abstract function is redefined in dericed class 
            {
                echo "Person Name : ".$this->pname. "<br>";
                echo "Age : ".$this->age. "<br>";
                echo "A/C No.  : ".$this->acno. "<br>";
                echo "A/C Type : ".$this->actype. "<br>";
                echo "Balance  : ".$this->balance . "<br>";
            }  

            public function Greeting()     // Overridding method in child
            {  
                return parent::Greeting() . ", To our family";     // Calling overridding method in the base class 
            } 
	    }  
        echo "Example 4 - Abstraction & Overridden -- Abstract method and abstract class <br>";
	    $bk= new ABank ();  
	    $bk->access("Oliver Lourel", 25, 12341000, "SB A/C", 34000);  
        $bk->display(); 
        echo $bk->Greeting();
        echo "<br>";  
	?>  

<hr>

    <?php 
        // Example 5.1  //   Final class and Final method  
	  class BasePerson      
        {  
                private $pname;
                private $age;

                final public function access($pn, $ag )  // Cannot be redefined in child 
                {
                    $this->pname = $pn;
                    $this->age = $ag ;
                }
               
                public function display()  // Overridden in the child class
                {  
                echo "Person Name : ".$this->pname. "<br>";
                echo "Age : ".$this->age. "<br>";
                }  
        }  
	    final class FinalBank extends BasePerson  
	    {  
            private $acno,$actype,$balance;

	        public function setAccount($pn, $ag, $acno, $actype, $bal)  
	        {  
	            $this->access ($pn, $ag);
                $this->acno = $acno;
                $this->actype = $actype;
                $this->balance = $bal;
	        }  
            public function display()    // Overridding function 
                {  
                parent::display();
                echo "A/C No.  : ".$this->acno. "<br>";
                echo "A/C Type : ".$this->actype. "<br>";
                echo "Balance  : ".$this->balance . "<br>";
            }  

	    } 
        echo "Example 5.1  -- Final class and Final method <br> "; 
	    $bk= new FinalBank ();  
	    $bk->setAccount("Oliver Lourel", 25, 12341000, "SB A/C", 34000); 
        $bk->display();  
	?>  

<hr>

<?php 
        // Example 5.2  //   Multi level inheritance 
	  class Identify      // Parent class  -- Level 0
        {  
                private $name, $id;
                
                public function setIdentify($nm, $id)  
                {
                    $this->name = $nm;
                    $this->id = $id ;
                }
               
                public function display()  // Overridden function  
                {  
                echo "Person Name : ".$this->name. "<br>";
                echo "Person ID : ".$this->id. "<br>";
                }  
        }  
	     class PersonData extends Identify  // Child class -- Level 1
	    {  
            private $age,$gender;

	        public function setPerson($pn, $id, $age, $gender)  
	        {  
	            $this->setIdentify ($pn, $id);
                $this->age = $age;
                $this->gender = $gender;
	        }  
            public function display()    // Overridding - Overridden function 
                {  
                parent::display();  // Calls overridden function
                echo "Age  : ".$this->age. "<br>";
                echo "Gender : ".$this->gender . "<br>";
                }  
	    } 
        class Employee extends PersonData  // Grand Child -- Level 2 
	    {  
            private $depart,$salary;

	        public function setEmployee($pn, $id, $age, $gender, $dept, $salary)  
	        {  
	            $this->setPerson ($pn, $id, $age, $gender);
                $this->depart = $dept;
                $this->salary = $salary;
	        }  
            public function display()    // Overridding function 
                {  
                parent::display();  // Calls overridden function
                echo "Department  : ".$this->depart. "<br>";
                echo "Salary : ".$this->salary . "<br>";
                }  
	    }
        echo "Example 5.2  -- Multi level inheritance with overridding functions <br> "; 
	    $emp= new Employee ();  
	    $emp->setEmployee("Francisca Doros",100125, 43, "Female", "Accounts" , 34000); 
        $emp->display();  
	?>  

<hr>


        <?php  
         // Example 6        // Multiple inheritance using Interface concept  
         interface IOInter
            {  
                public function accept($pname, $age, $gen);  
                public function display();  
            }     
         interface ProcessInter  
            {  
                const VOTEAGE = 18; // Constant can be declared in interface
                 // $ret_age = 60;  // Member variable declaration id not allowed in interface
                public function checkAge();  
            }  
           
        class SuperPerson {
            var $pname;
            public function acceptName($pn){
                $this->pname=$pn;
            }
        }
        class CPerson extends SuperPerson implements IOInter, ProcessInter  
        {  
            var $gender, $age;
            public function accept($pnam, $age, $gen)  
            {  
                parent::acceptName($pnam);
                $this->gender = $gen;
                $this->age=$age;  
            }  
            public function display()  
            {  
                echo "Person Name = ". $this->pname. "<br>";
                echo "Age = ".$this->age. "<br>";  
                echo "Gender = ".$this->gender. "<br>"; 
                if ($this->checkAge())
                {
                    echo $this->pname . "  is eligible to vote";
                }
                else
                {
                    echo $this->pname . "  is not eligible to vote";
                }
            }  
            public function checkAge()
            {
                if ($this->age >= self::VOTEAGE)
                   return true;
                else 
                   return false;
            }
        }  
        echo "Example 6  -- Multiple inheritance using interface example <br> ";
        $obj= new CPerson();  
        $obj->accept("Imagulate", 22, "Female");  
        $obj->display();  
        echo "<br>";
        ?>  

<hr>
        
        	<?php 
            // Example 7   // Inheritance Task by getting the data from HTML Form elements
            // Create program to find area of Triangle using inheritance. 
        	    class getdata  
        	    {  
        	        public $h;
        	        public $b;  
        	        public function accept()  
        	        {  
        	            $this->h= $_REQUEST['height'];  
        	            $this->b= $_REQUEST['base'];  
        	        }  
        	  
        	    }  
        	    class processarea extends getdata  
        	    {  
        	        public $area;  
        	        public function calculate()  
        	        {  
        	            $this->area= ($this->h* $this->b)/2;  
        	            echo "Area of Triangle is : ".$this->area . "<br>";  
        	        }  
        	    }  
        	    if(isset($_REQUEST['triangleArea'])) // Checking the submit button outside the class
        	    {  
        	        $obj = new processarea();  
        	        $obj->accept();  
        	        $obj->calculate();  
        	    }  
                  
        	?>  
   <hr>
        	<html>  
        	<head>  
        	</head>  
        	<body> 
                <h3>  Example 7  -  Inheritance Task - Passing value from HTML Form </h3> 
        	    <form method= "post">  
        	        <table align ="left" border="1">  
        	        <tr>  
        	            <td> Enter Height </td>  
        	            <td><input type = "text" name="height" value=<?php echo $_POST['height'] ?? '' ?> ></td>  
        	        </tr>  
        	        <tr>  
        	            <td> Enter Base </td>  
        	            <td><input type = "text" name="base" value=<?php echo $_POST['base'] ?? '' ?> ></td>  
        	        </tr>  
        	        <tr>  
        	            <td align ="center" colspan="2">  
        	            <input type= "submit" name="triangleArea" value="Calculate"/>  
        	        </td>  
        	        </tr>  
        	        </table>  
        	        </form>  
        	</body>  
        	</html>  

            <hr>

        <?php 
        // Example 8.1.1  //  One-way Encryption   
	    $str = "Anusha";  
	    echo "One way encryption - Encrypt using md5 : " . md5($str) . "<br>";    // Output : ea866df636e6d5b4b7c9ab7b596cdd4c 
	    ?>  

        <?php
        // Example 8.1.2  //  One-way Encryption     
        $str = "Anusha";  
        echo md5($str) . "<br>";  
        if (md5($str) == "768d72942ea8468f19fef329d0d02983")  
            {  
                echo "<br>Hello Welcome .... CGVAK Developers <br>";  
                //exit;   
            }
            else {
                echo "No match found <br>";
            }  
        ?>  

	<?php  
        // Example 8.2.1    // Two-way encryption (Encoding)
	    $str= "CGVAK";  
	    $str1= base64_encode($str);  
	    echo "Two way encryption - using base64_encode('CGVAK') : " . $str1 . "<br>";  
	?>  
	<?php  
	    $str = 'Welcome to CGVAK';  
	    echo "Using base64_encode('Welcome to CGVAK') :: " . base64_encode($str) . "<br>";  
	?>  

<hr>
	<?php 
    // Example 8.2.2    // Two-way encryption (Decoding)
	    $str = 'V2VsY29tZSB0byBqYXZhdHBvaW50';  
	    echo "Two way encode - Decryption : base64_decode() " . base64_decode($str). "<br>";  
	?>  
	<?php  
	    $str= "Q0dWQUs=";  
	    $str1= base64_decode($str);  
	    echo "Two way encode - Decryption : Using base64_decode() : " . $str1 . "<br>";  
	?>  


