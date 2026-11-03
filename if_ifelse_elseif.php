<?php

// what is if else if else statement in php
// if statement condition is true then it will execute the code block inside if statement
// else statement will execute the code block inside else statement if the condition is false
// if else if statement will check the condition if the first condition is false then it will check the second condition and if it is true then it will execute the code block inside else if statement
// else if statement will execute the code block inside else statement if all the conditions are false


// example of if statement
// $age = 20;

// if ($age >= 18) {
//     echo "You are eligible to vote.";
// }

// example of if else statement
// $age = 16;

// if ($age >= 18) {
//     echo "You are eligible to vote.";
// } else {
//     echo "You are not eligible to vote.";
// }

// If Elseif Else Statement example

$marks = 85;

if ($marks >= 90) {
    echo "Grade A";
} elseif ($marks >= 75) {
    echo "Grade B";
} elseif ($marks >= 50) {
    echo "Grade C";
} else {
    echo "Fail";
}
?>