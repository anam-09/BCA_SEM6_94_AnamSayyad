<?php

echo "Enter a number: ";
$num = trim(fgets(STDIN));

for($i = 1; $i <= 10; $i++){
    echo $num." x ".$i." = ".($num*$i)."\n";
}

?>