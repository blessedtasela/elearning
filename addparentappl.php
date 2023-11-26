<?php 


require 'connectelearning.php';

$tl=$_POST['title'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$em=$_POST['email'];
$eml=$_POST['email'];
$prt=$_POST['parent'];
$job=$_POST['job'];
$nty=$_POST['nationality'];
$id=$_POST['id'];
$ph=$_POST['phone'];
$rsd=$_POST['residence'];
$stt=$_POST['state'];
$add=$_POST['address'];

if ($_FILES['photo']['size'] >1000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['photo']['type'] !='image/jpeg' AND $_FILES['photo']['type'] !='image/jpg'){

   echo "Invalid file type! The required format is jpeg/jpg<br><br><br>";
     echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $pic=uniqid();
    move_uploaded_file($_FILES['photo']['tmp_name'], "imageparent/$pic.jpg");

$query="INSERT INTO `parent application` VALUES(null,'$tl','$fn','$ln','$dob','$em','$eml','$prt','$job','$nty','$id','$ph','$rsd','$stt','$add','$pic')";
//echo $query;
mysqli_query($connection,$query);
mysqli_close($connection);

//header('location:fitnessdisplay.php');
}
}
 ?>
<a href=parentform.html><img src="back.jpg" width="50" height="50"></a><br><br>
<font size="50" color='red'>Registration Succesful!</font><br>
 <font size="40"><a href="">Go to Homepage</a></font>
