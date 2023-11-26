<?php 

require 'connectelearning.php';

$name=$_POST['name'];
$id=$_POST['id'];
$mail=$_POST['email'];
$msg=$_POST['language'];

$query="INSERT INTO `language_students` VALUES(null,'$name','$id','$mail','$msg')";
echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:elearninghomepage.php?confirm=added');

 
 ?>
  