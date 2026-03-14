<?php

$skip = 5;

for($i=1; $i<=10; $i++){

    if($i == $skip){
        continue;
    }

    echo $i." ";
}

?>