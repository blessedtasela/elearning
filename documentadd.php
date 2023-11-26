<?php 

require 'connectelearning.php';

$id=$_POST['id'];
$nm=$_POST['doc'];
$ml=$_POST['mail'];
$ph=$_POST['phone'];
$dp=$_POST['dept'];
$sm=$_POST['sem'];
$dt=$_POST['date'];

$query="INSERT INTO `document_requests` VALUES(null,'$id','$nm','$ml','$ph','$dp','$sm','$dt')";
//echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:requestdocument.php?confirm=addnew');

 ?>