<?php

$fruit = $_POST['fruit'];
$veg = $_POST['veg'];

setcookie("fruit",$fruit,time()+3600);
setcookie("veg",$veg,time()+3600);

header("Location: display.php");

?>