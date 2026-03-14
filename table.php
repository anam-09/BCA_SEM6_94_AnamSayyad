<?php

$fruits = array("Apple","Banana","Mango","Orange","Grapes");

echo "
<style>
body{
    font-family: Arial;
    background:#eef5ff;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

table{
    border-collapse: collapse;
    width:300px;
    background:white;
    border-radius:8px;
    overflow:hidden;
}

th{
    background:#0077cc;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#d6eaff;
}

tr:nth-child(odd){
    background:#f9fcff;
}

tr:hover{
    background:#b3d7ff;
}
</style>
";

echo "<table>";
echo "<tr><th>Fruit Name</th></tr>";

foreach($fruits as $fruit){
    echo "<tr><td>$fruit</td></tr>";
}

echo "</table>";

?>