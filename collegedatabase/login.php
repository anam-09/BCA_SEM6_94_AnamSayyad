<?php
session_start();

$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="admin" && $pass=="123")
{
$_SESSION['user']=$user;
header("Location: student.php");
}
else
{
echo "Login Failed";
}
?>