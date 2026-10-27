<?php

// what are difference between == and === in php
// == - double equals checks for value equality, does not check for data type
// === - triple equals checks for value and data type equality

// == - double equals operator example
// $a = 5;
// $b = "5";

// if($a == $b) {
//     echo "value is equal";
// } else {
//     echo "Not equal";
// }

// === triple equals operator example
$a = 5;
$b = "5";

if($a === $b) {
    echo "value is equal";
} else {
    echo "Not equal";
}

?>