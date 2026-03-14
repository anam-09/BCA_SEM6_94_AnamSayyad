<?php

$num = 153;
$sum = 2;
$temp = $num;

while($temp > 0){
    $digit = $temp % 10;
    $sum = $sum + ($digit*$digit*$digit);
    $temp = (int)($temp/10);
}

if($sum == $num){
    echo "$num is Armstrong";
}
else{
    echo "$num is Not Armstrong";
}

?>