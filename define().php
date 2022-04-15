<!-- To create a constant, use the define() function. -->
<?php
define("GREETING","<h1>HELLO WORLD!!!</h1>");
define("GREET", "Welcome to W3Schools.com!", true);
echo GREETING;
echo greeT;

// create array constant
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];


// CONSTANTS ARE GLOBAL;
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?>

<
