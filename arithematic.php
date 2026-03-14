<?php

echo "Enter first number: ";
$a = trim(fgets(STDIN));

echo "Enter second number: ";
$b = trim(fgets(STDIN));

echo "Enter operation (add, sub, mul, div): ";
$choice = trim(fgets(STDIN));

switch($choice){

case "add":
    echo "Addition = ".($a+$b);
    break;

case "sub":
    echo "Subtraction = ".($a-$b);
    break;

case "mul":
    echo "Multiplication = ".($a*$b);
    break;

case "div":
    echo "Division = ".($a/$b);
    break;

default:
    echo "Invalid choice";
}

?>