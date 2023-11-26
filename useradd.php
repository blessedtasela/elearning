<?php 

require 'connectelearning.php';

$uid=$_POST['id'];
$usn=$_POST['username'];
$psd=$_POST['pass'];
$em=$_POST['email'];
$sid=$_POST['sid'];
$pv=$_POST['status'];

$query="INSERT INTO `users` VALUES(null,'$uid','$usn','$psd','$em','$sid','$pv')";
//echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:userregform.php?confirm=addnew');
 ?>