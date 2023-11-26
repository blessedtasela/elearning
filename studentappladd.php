<?php 

require 'connectelearning.php';

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$em=$_POST['email'];
$sex=$_POST['sex'];
$nty=$_POST['nationality'];
$ph=$_POST['phone'];
$id=$_POST['id'];
$rsd=$_POST['residence'];
$stt=$_POST['state'];
$ad1=$_POST['address'];
$cls=$_POST['year'];
$lvl=$_POST['level'];
$mtn=$_POST['motivation'];
$ch1=$_POST['choice1'];
$ch2=$_POST['choice2'];

if ($_FILES['transcript']['size'] >50000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=studentform.html><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['transcript']['type'] !='application/pdf' AND $_FILES['photo']['type'] !='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){

   echo "Invalid file type! The required format is pdf/jpg<br><br><br>";
     echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $trs=uniqid();
    move_uploaded_file($_FILES['transcript']['tmp_name'], "transcriptstudent/$trs.pdf");
}
}

if ($_FILES['waec']['size'] >1000000) {
   echo "File size exceed! The maximum size required is 20000000 bytes..";
    echo "<a href=studentform.html><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['waec']['type'] !='application/pdf' AND $_FILES['waec']['type'] !='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){

   echo "Invalid file type! The required format is pdf/jpg<br><br><br>";
     echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $wac=uniqid();
    move_uploaded_file($_FILES['waec']['tmp_name'], "waecstudent/$wac.pdf");
}
}

if ($_FILES['photo']['size'] >1000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=studentform.html><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['photo']['type'] !='image/jpeg' AND $_FILES['photo']['type'] !='image/jpg'){

   echo "Invalid file type! The required format is jpeg/jpg<br><br><br>";
     echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $pic=uniqid();
    move_uploaded_file($_FILES['photo']['tmp_name'], "imagestudent/$pic.jpg");
}
}
$query="INSERT INTO `applications` VALUES(null,'$fn','$ln','$dob','$em','$sex','$nty','$ph','$id','$rsd','$stt','$ad1','$cls','$lvl','$mtn','$ch1','$ch2','$trs','$wac','$pic')";
echo $query;
mysqli_query($connection,$query);

mysqli_close($connection);

header('location:elearningindex.php?confirm=addnew');

 ?>
 
