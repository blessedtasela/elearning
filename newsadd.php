<?php 

require 'connectelearning.php';

$mail=$_POST['email'];

$query="INSERT INTO `news_update` VALUES(null,'$mail')";
echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:elearninghomepage.php?confirm=addnew');

 
 ?>
  