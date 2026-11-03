<?php

// what operators are available in php
// arithmetic operators: +, -, *, /, %
// assignment operators: =, +=, -=, *=, /=, %=
// comparison operators: ==, !=, <, >, <=, >=
// logical operators: &&, ||, !

// Example of arithmetic operators
// $a = 10;
// $b = 5;

// echo "Addition: " . ($a + $b) . "<br>";
// echo "Subtraction: " . ($a - $b) . "<br>";
// echo "Multiplication: " . ($a * $b) . "<br>";
// echo "Division: " . ($a / $b) . "<br>";
// echo "Modulus: " . ($a % $b) . "<br>";


// Example of assignment operators
// $x = 10;

// $x += 5; 

// echo $x;

// // Example of comparison operators
// $a = 10;
// $b = 5;

// var_dump($a == $b);
// var_dump($a > $b);
// var_dump($a < $b);

// // Example of logical operators
$age = 25;

var_dump($age > 18 && $age < 60);

var_dump($age < 18 || $age > 60);

var_dump(!($age > 18));
?>