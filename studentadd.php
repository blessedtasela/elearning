<?php 

require 'connectelearning.php';


$id=$_POST['id'];

if ($_FILES['pics']['size'] >1000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=studentregform.php><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['pics']['type'] !='image/jpeg' AND $_FILES['pics']['type'] !='image/jpg'){

   echo "Invalid file type! The required format is jpeg/jpg<br><br><br>";
     echo "<a href=studentregform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $pic=uniqid();
    move_uploaded_file($_FILES['pics']['tmp_name'], "imagestudent/$pic.jpg");
}
}

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$pid=$_POST['pid'];
$dt=$_POST['dept'];
$sem=$_POST['sem'];
$hod=$_POST['hod'];

$query="INSERT INTO `students` VALUES(null,'$id','$pic','$fn','$ln','$pid','$dt','$sem','$hod')";
echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:studentregform.php?confirm=addnew');

 
 ?>
 