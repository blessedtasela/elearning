<?php 

require 'connectelearning.php';

$name=$_POST['name'];
$mail=$_POST['email'];
$msg=$_POST['message'];

$query="INSERT INTO `feedbacks` VALUES(null,'$name','$mail','$msg')";
echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:elearningindex.php?confirm=addnew');

 
 ?>
 