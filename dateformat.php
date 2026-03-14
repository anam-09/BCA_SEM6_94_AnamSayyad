<!DOCTYPE html>
<html>
<head>
<title>Date Format</title>

<style>

body{
font-family: Arial;
background:#f2f2f2;
text-align:center;
}

.box{
width:350px;
margin:120px auto;
background:white;
padding:25px;
border-radius:8px;
box-shadow:0px 0px 10px gray;
}

h2{
color:#333;
}

.date{
font-size:20px;
margin:10px;
color:#2c3e50;
}

</style>

</head>

<body>

<div class="box">

<h2>Current Date Formats</h2>

<div class="date">
<?php echo date("Y/m/d"); ?>
</div>

<div class="date">
<?php echo date("y.m.d"); ?>
</div>

<div class="date">
<?php echo date("d-m-y"); ?>
</div>

</div>

</body>
</html>