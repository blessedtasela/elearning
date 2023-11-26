
<?php 

require 'connectelearning.php';

 
$id=$_POST['id'];
$dept=$_POST['dept'];
$desc=$_POST['description'];
$nos=$_POST['nostud'];
$drt=$_POST['duration'];
$rts=$_POST['ratings'];
$type=$_POST['type'];

if ($_FILES['photo']['size'] >1000000) {
   echo "File size exceed! The maximum size required is 1000000 bytes..";
    echo "<a href=teacherregform.php><img src=img/back.jpg width=60 height=60></a>";}
 else
 {
    if ($_FILES['photo']['type'] !='image/jpeg' AND $_FILES['photo']['type'] !='image/jpg'){

   echo "Invalid file type! The required format is jpeg/jpg<br><br><br>";
     echo "<a href=teacherregform.php><img src=img/back.jpg width=60 height=60></a>";}
 else
{ $pic=uniqid();
    move_uploaded_file($_FILES['photo']['tmp_name'], "imageteacher/$pic.jpg");
}
}

$query="INSERT INTO `departments` VALUES(null,'$id','$dept','$desc','$nos','$drt','$rts','$type','$pic')";
echo $query;

mysqli_query($connection,$query);

mysqli_close($connection);
header('location:departmentregform.php?confirm=addnew');

 ?>
