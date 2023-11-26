
<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query= "DELETE from `courses` where sn= $sn";
echo $query;
mysqli_query($connection,$query);

mysqli_close($connection);

header('location:coursedisplay.php?confirm=deleted');

 ?>
