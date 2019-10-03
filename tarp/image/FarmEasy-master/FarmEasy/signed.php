<?php
include("config.php");

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$state=$_POST['state'];

$query="INSERT INTO signups(username,password,email,name,state) VALUES ('$username','$password','$email','$name','$state')";
if(mysqli_query($connection,$query))
{
	header("location: welcome.php");
}
else
{
	echo "ERROR: User Not Added." .mysqli_error($connection);
}
mysqli_close($connection);
?>