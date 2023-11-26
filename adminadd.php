<?php 

require 'connectelearning.php';


$id=$_POST['id'];
$ttl=$_POST['title'];
$fn=$_POST['name'];
$sts=$_POST['status'];

$query="INSERT INTO `admins` VALUES(null,'$id','$ttl','$fn','$sts')";
//echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:adminregform.php?confirm=addnew');


 ?>