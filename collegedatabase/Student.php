<?php
session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.html");
}

$conn=mysqli_connect("localhost","root","","college");

echo "Welcome ".$_SESSION['user']."<br>";

echo "Date: ".date("Y-m-d")."<br><br>";
?>

<form method="post">

Name: <input type="text" name="name"><br><br>

Course: <input type="text" name="course"><br><br>

City: <input type="text" name="city"><br><br>

<input type="submit" value="Save">

</form>

<?php

if(isset($_POST['name']))
{
$name=$_POST['name'];
$course=$_POST['course'];
$city=$_POST['city'];
$date=date("Y-m-d");

$sql="INSERT INTO student(name,course,city,date_added)
VALUES('$name','$course','$city','$date')";

mysqli_query($conn,$sql);

echo "Student Data Saved";
}
?>