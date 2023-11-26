<?php 

require 'connectelearning.php';


$id=$_POST['id'];
$ttl=$_POST['title'];
$fn=$_POST['name'];
$sid=$_POST['sid'];

$query="INSERT INTO `parents` VALUES(null,'$id','$ttl','$fn','$sid')";
//echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:parentregform.php?confirm=addnew');


 ?>