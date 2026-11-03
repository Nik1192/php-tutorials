<?php

// what is switch case statement in php?
// switch case statement is used to perform different actions based on different conditions.

// example of switch case statement's syntex is as follows:
// switch ($variable) {
//     case value1:
//         // Code
//         break;

//     case value2:
//         // Code
//         break;

//     default:
//         // Default code
// }

// exmaple of switch case statement
$day = 3;

switch ($day) {

    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    case 4:
        echo "Thursday";
        break;

    default:
        echo "Invalid Day";
}


// example of switch case statement with simple calculator
$num1 = 10;
$num2 = 5;
$operator = "-";

switch ($operator) {

    case "+":
        echo $num1 + $num2;
        break;

    case "-":
        echo $num1 - $num2;
        break;

    case "*":
        echo $num1 * $num2;
        break;

    case "/":
        echo $num1 / $num2;
        break;

    default:
        echo "Invalid Operator";
}


?>