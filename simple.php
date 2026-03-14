<!DOCTYPE html>
<html>
<head>
<title>Simple Form</title>

<style>
body{
    font-family: Arial, sans-serif;
    background: #f2f2f2;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    text-align:center;
}

input[type=text]{
    padding:10px;
    width:200px;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:10px;
}

input[type=submit]{
    margin-top:15px;
    padding:10px 20px;
    border:none;
    background:#4CAF50;
    color:white;
    border-radius:5px;
    cursor:pointer;
}

input[type=submit]:hover{
    background:#45a049;
}
</style>

</head>

<body>

<div class="container">

<h2>Enter Your Name</h2>

<form method="post" action="">
Name: <br>
<input type="text" name="username"><br>

<input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    echo "<h3>Hello, $name!</h3>";
}
?>

</div>

</body>
</html>