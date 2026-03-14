<?php

$conn = mysqli_connect("localhost","root","","company");

if(!$conn)
{
die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];

$sql = "INSERT INTO employee(name,email,phone,department)
VALUES('$name','$email','$phone','$department')";

if(mysqli_query($conn,$sql))
{
echo "Employee Data Stored Successfully";
}
else
{
echo "Error";
}

?>