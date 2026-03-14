<?php

echo "Enter how many numbers: ";
$n = trim(fgets(STDIN));

$arr = [];

for($i = 0; $i < $n; $i++){
    echo "Enter number ".($i+1).": ";
    $arr[$i] = trim(fgets(STDIN));
}

$max = $arr[0];
$min = $arr[0];

for($i = 1; $i < $n; $i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }

    if($arr[$i] < $min){
        $min = $arr[$i];
    }
}

echo "Greatest number = $max\n";
echo "Smallest number = $min\n";

?>