 <?php 

require 'connectelearning.php';
 

$usn=$_POST['username'];
$pwd=md5($_POST['password']);

$query="SELECT COUNT(*) FROM `users` WHERE username='$usn' AND password='$pwd'";

$result=mysqli_query($connection,$query);
$data=mysqli_fetch_array($result);
//print_r($data);

if ($data[0]==1)
 {
 	session_start();
 	$_SESSION['user']=$usn;
 
 	$query="SELECT `status` FROM `users` WHERE username='$usn'";
 
 	$result=mysqli_query($connection,$query);
  	$status=mysqli_fetch_array($result);
  	$_SESSION['status']=$status[0];

	header('location:elearninghomepage.php');
} else
    header('location:elearningloginform.php?confirm=false');

 ?>