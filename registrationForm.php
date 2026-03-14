<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<style>

body{
font-family: Arial;
background: linear-gradient(120deg,#74ebd5,#9face6);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:white;
padding:30px;
border-radius:10px;
width:350px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

h2{
text-align:center;
margin-bottom:20px;
}

input, select{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#4CAF50;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
font-size:16px;
}

button:hover{
background:#45a049;
}

.result{
margin-top:20px;
padding:10px;
background:#f2f2f2;
border-radius:5px;
}

</style>
</head>

<body>

<div class="container">

<h2>Registration Form</h2>

<form method="post">

<input type="text" name="name" placeholder="Enter Name" required>

<input type="email" name="email" placeholder="Enter Email" required>

<input type="number" name="age" placeholder="Enter Age" required>

<select name="course">
<option value="">Select Course</option>
<option>BCA</option>
<option>MCA</option>
<option>BBA</option>
</select>

<button type="submit" name="submit">Register</button>

</form>

<?php

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$course=$_POST['course'];

echo "<div class='result'>";
echo "<h3>Registration Details</h3>";
echo "Name : $name <br>";
echo "Email : $email <br>";
echo "Age : $age <br>";
echo "Course : $course";
echo "</div>";

}

?>

</div>

</body>
</html>