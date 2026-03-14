<!DOCTYPE html>
<html>
<head>
<title>Selected Item</title>
</head>
<body>

<h2>Your Selected Items</h2>

<?php

if(isset($_COOKIE['fruit'])){
    echo "Fruit: ".$_COOKIE['fruit']."<br>";
}

if(isset($_COOKIE['veg'])){
    echo "Vegetable: ".$_COOKIE['veg']."<br>";
}

?>

</body>
</html>