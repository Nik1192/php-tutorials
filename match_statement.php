<?php

// what ia match statement in php?
// match statement is new feature introduced in PHP 8.0 that allows you to perform a match expression, 
// which is similar to a switch statement but with more concise syntax and better type safety. 
// It evaluates an expression against multiple conditions and returns a value based on the first matching condition.

// exmaple of match statement's syntex is as follows:
// $result = match ($variable) {
//     value1 => // Code,
//     value2 => // Code,
//     default => // Default code,
// };

// example of match statement
$day = 4;

$result = match($day){
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    default => "invalid day"
};

echo $result;

?>