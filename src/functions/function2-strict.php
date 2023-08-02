<!-- To set the data type strict to the function, declare(strict_types=1); statement is used -->

<!-- NOTE: Execue other PHP script by placing the script at the top :) -->
<?php
// Example 1.1
 function addNumbers1( $a,  $b) {
   return $a + $b;
 }
 echo addNumbers1(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?> 

<?php 
// declare(strict_types=1); // strict requirement 
// // Example 1.2 - declare(strict_types=1) option
// // declare(strict_types=1) must be the first statement in the script, otherwise error will come
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// since strict is enabled [strict_types is ON ] and "5 days" is not an integer, an error will be thrown
?>

<?php 
// declare(strict_types=1); // strict requirement
// //Example 1.3
// function setCurrent(int $minCurr = 100) {
//   echo "The base current limit is : $minCurr <br>";
// }

// setCurrent(350);
// setCurrent(); // will use the default value of 100
// setCurrent(135);
// setCurrent("80");  // Error will come - Since strict_types is ON

?> 


<?php
//Example 1.4 - PHP Return Type Declarations. PHP 7 supports it 
 //  echo "Welcome to strict data type concept <br>";
//   declare(strict_types=1); // strict requirement
//  function simpleInterest(float $p, float $n, float $r) : float {
//      $si = $p * $n * $r / 100;
//     return $si;
//  }
//  $intr = simpleInterest(100000, 3.6, 5.2);
//  echo "Simple Interest = " . $intr . "<br />" ;  
   ?> 
 
