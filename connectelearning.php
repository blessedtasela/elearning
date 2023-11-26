<?php 

$host="localhost";
$username="root";
$password="";
$data="elearning";

$connection=@mysqli_connect($host,$username,$password,$data);
if ($connection==false)
 { echo "error in connection. can't reach server!";
	exit(1);
}

 ?>