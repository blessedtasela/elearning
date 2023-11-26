<?php 

require 'connectelearning.php';
$id=$_POST['number'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$eml=$_POST['email'];
$ml=$_POST['mail'];
$sex=$_POST['sex'];
$nty=$_POST['nationality'];
$idn=$_POST['id'];
$phn=$_POST['phone'];
$rsd=$_POST['residence'];
$stt=$_POST['state'];
$ad1=$_POST['address1'];
$ad2=$_POST['address2'];
$sy=$_POST['class'];
$lvl=$_POST['level'];
$mtn=$_POST['motivation'];
$cos=$_POST['choice1'];
$sc=$_POST['choice2'];

if ($_FILES['transcript']['size'] >50000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=studentform.html><img src=back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['transcript']['type'] !='application/pdf' AND $_FILES['photo']['type'] !='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){

   echo "Invalid file type! The required format is pdf/jpg<br><br><br>";
     echo "<a href=productform.html><img src=back.jpg width=60 height=60></a>";}
 else
{ $ts=uniqid();
    move_uploaded_file($_FILES['transcript']['tmp_name'], "transcriptstudent/$ts.pdf");
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
{ $wc=uniqid();
    move_uploaded_file($_FILES['waec']['tmp_name'], "waecstudent/$wc.pdf");
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

$query= "UPDATE `applications` SET `first name`='$fn',`last name`='$ln',`date of birth`='$dob',`email`='$eml',`confirm email`='$ml',`gender`='$gd',`country`='$nty',`id number`='$idn',`phone number`='$phn',`residence country`='$rsc',`state`='$stt',`address 1`='$add1',`address 2`='$add2',`school year`='$sy',`level`='$lvl',`motivation`='$mtn',`choice of study`='$cos',`second choice`='$sc',`transcript`='$ts',`waec`='$wc',`photo`='$pic' WHERE `application id`='$id'";

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:studentappldisplay.php');

 ?>