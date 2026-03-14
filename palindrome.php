<?php

echo "Enter a string: ";
$str = trim(fgets(STDIN));

$rev = strrev($str);

if(strtolower($str) == strtolower($rev)){
    echo "The string is Palindrome";
}
else{
    echo "The string is Not Palindrome";
}

?>