<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<h2> PHP OOP - Traits </h2>

<pre> 
  *** PHP supports single inheritance, multi level inheritance and hierarchical inheritance.
  ***  A child class can inherit only from one single parent or 
        inherit the parent of more than one level.
  *** When the class needs to inherit multiple behaviors, OOP traits are used.

  *** Traits are used to declare methods that can be used in multiple classes.
  *** Traits can have methods and abstract methods that can be used in multiple classes,
         and the methods can have any access modifier (public, private, or protected).

  *** What are Traits?
      * In PHP, Traits is a simple way to reuse code. 
      * Trait is a collection of methods. 
      * To stop the repetition, follow the DRY (Don’t Repeat Yourself) approach. 
      * As we know, PHP is a single inheritance language (no multiple inheritance), 
          Traits allow us to remove limitations of single inheritance language
           by reuse some methods in independently in several class.

  *** Advantages of Traits
      * Reuse Code
      * Reduce limitations a of single inheritance language
      * Manageable code in a large project
        
  *** Traits are declared with the trait keyword:
      ** Syntax:1.1
        trait TraitName {
          // write the functions for the traints.....
        }
        ?>

  *** To use a trait in a class, use the 'use' keyword:
    ** Syntax:1.2
      class MyClass {
        use TraitName;
      }
</pre>

<?php
// Creating a new traint and use the trait in the class and access it by the object
trait message1 {
    public function msg1() {
        echo "Hello Wecome! ";
      }
      public function msg2() {
        return "Hello Wecome!!!!! ";
      }
    }
    
    class Welcome {
      use message1;
      private $name;
      public function __construct($name){
        $this->name = $name;
      }
      public function display(){
        echo $this->msg2() . " to " . $this->name. "<br";
      }
    }
    
    $obj = new Welcome("Princes");
    $obj->msg1(); echo "<br>";
    $obj->display();
?>

<?php
// Creating two new traints and uses the traits in the classes and access it by the objects    
    ### PHP - Using Multiple Traits
    ### Example - 2:
    trait messages1 {
      public function msg1() {
        echo "OOP is fun! " . "<br>";
      }
    }
    
    trait messages2 {
      public function msg2() {
        echo "OOP reduces code duplication! by trait concept!!!!! ". "<br>";
      }
    }
    
    class Welcome1 {
      use messages1;
    }
    
    class Welcome2 {
      use messages1, messages2;
    }
    
    $obj1 = new Welcome1();
    $obj1->msg1();
    echo "<br>";
    
    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
    echo "<br>";
  ?>
    
  ### Example 3:
  <?php
// Creating two new traints and uses the traits in the classes and access it by the objects    
    ### PHP - Using Multiple Traits
    ### Example - 3:
    trait AddSub {
      public function addition(...$args) {
        $sum=0;
        for ($i=0; $i<count($args); $i++){
          $sum += $args[$i];
        }
        return $sum;
      }
      public function subtraction($x, $y){
        return ($x-$y);
      }
    }
    
    trait MulDiv {
      public function multiply($a, $b) {
        $m=$a * $b;
        return $m;
      }
      public function divide(...$args){ // Treat the last passing areaument value is the divisor
        $sum=0;
        $divisor=$args[count($args)-1];
        for ($i=0; $i<count($args)-1; $i++){
          $sum += $args[$i];
        return $sum/$divisor;
        }
        return sum;
      }
    }
    
    class Arithmetic {
      use AddSub,MulDiv;
      public $val1,$val2;
      public function accept($val1, $val2){
        $this->val1=$val1;
        $this->val2=$val2;
      }
    }
    
    $arith = new Arithmetic();
    $arith->accept(100,70);
    echo "Subtraction = " . $arith->subtraction($arith->val1, $arith->val2 ) . "<br>";
    echo "Multiplication = " .$arith->multiply($arith->val1, $arith->val2 ). "<br>";
    echo "Addition = ". $arith->addition(10,20,30,40,50,60,70). "<br>";
    echo "Division = ".$arith->divide(10,20,30,40,50,60). "<br>";
    echo "<br>";
?>

</body>
</html>
