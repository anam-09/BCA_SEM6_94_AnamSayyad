<?php

echo "Enter how many numbers: ";
$n = trim(fgets(STDIN));

$sum = 0;

for($i = 1; $i <= $n; $i++){
    echo "Enter number $i: ";
    $num = trim(fgets(STDIN));
    $sum = $sum + $num;
}

echo "Sum of array elements = $sum";

?>