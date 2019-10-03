<?php
include("config.php");

$ename=$_POST['ename'];
$date=$_POST['date'];
$time=$_POST['time'];
$loc=$_POST['loc'];
$post=$_POST['post'];

$query="INSERT INTO events(ename,date,time,loc,post) VALUES ('$ename','$date','$time','$loc','$post')";
if(mysqli_query($connection,$query))
{
	header("location: eventadded.php");
}
else
{
	echo "ERROR: User Not Added." .mysqli_error($connection);
}
mysqli_close($connection);
?>