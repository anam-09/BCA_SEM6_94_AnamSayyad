<!DOCTYPE html>
<html>
<head>
<title>Fruit & Vegetable Shop</title>

<style>
body{
font-family: Arial;
background:#f2f2f2;
text-align:center;
}

table{
margin:auto;
border-collapse:collapse;
width:60%;
background:white;
}

th{
background:#4CAF50;
color:white;
padding:10px;
}

td{
padding:10px;
text-align:center;
}

input{
width:60px;
}

/* Green button styling */
input[type="submit"]{
background:#4CAF50;
color:white;
border:none;
padding:10px 20px;
font-size:16px;
border-radius:5px;
cursor:pointer;
width:auto;
}

input[type="submit"]:hover{
background:#45a049;
}
</style>
</head>

<body>

<h2>Fruit & Vegetable Shop</h2>

<form action="setcookie.php" method="post">

<table border="1">

<tr>
<th>Item</th>
<th>Rate</th>
<th>Quantity</th>
</tr>

<tr>
<td>Apple</td>
<td>50</td>
<td><input type="number" name="apple" value="0"></td>
</tr>

<tr>
<td>Mango</td>
<td>60</td>
<td><input type="number" name="mango" value="0"></td>
</tr>

<tr>
<td>Potato</td>
<td>30</td>
<td><input type="number" name="potato" value="0"></td>
</tr>

<tr>
<td>Tomato</td>
<td>40</td>
<td><input type="number" name="tomato" value="0"></td>
</tr>

</table>

<br>

<input type="submit" value="Generate Bill">

</form>

</body>
</html>