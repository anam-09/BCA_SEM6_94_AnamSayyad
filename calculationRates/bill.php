<!DOCTYPE html>
<html>
<head>
<title>Bill</title>

<style>
body{
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.bill-box{
    width: 400px;
    margin: 80px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px gray;
    text-align: center;
}

h2{
    color: #333;
}

table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

th, td{
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

th{
    background-color: #4CAF50;
    color: white;
}

.total{
    font-size: 20px;
    font-weight: bold;
    color: #e63946;
    margin-top: 15px;
}
</style>

</head>
<body>

<div class="bill-box">

<h2>Your Bill</h2>

<?php

$apple = $_COOKIE['apple'];
$mango = $_COOKIE['mango'];
$potato = $_COOKIE['potato'];
$tomato = $_COOKIE['tomato'];

$sub1 = $apple * 50;
$sub2 = $mango * 60;
$sub3 = $potato * 30;
$sub4 = $tomato * 40;

$total = $sub1 + $sub2 + $sub3 + $sub4;

?>

<table>
<tr>
<th>Item</th>
<th>Subtotal</th>
</tr>

<tr>
<td>Apple</td>
<td><?php echo $sub1; ?></td>
</tr>

<tr>
<td>Mango</td>
<td><?php echo $sub2; ?></td>
</tr>

<tr>
<td>Potato</td>
<td><?php echo $sub3; ?></td>
</tr>

<tr>
<td>Tomato</td>
<td><?php echo $sub4; ?></td>
</tr>

</table>

<div class="total">
Total = <?php echo $total; ?>
</div>

</div>

</body>
</html>