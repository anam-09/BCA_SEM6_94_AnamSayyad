<?php

setcookie("apple", $_POST['apple'], time()+3600);
setcookie("mango", $_POST['mango'], time()+3600);
setcookie("potato", $_POST['potato'], time()+3600);
setcookie("tomato", $_POST['tomato'], time()+3600);

header("Location: bill.php");

?>