
<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query= "DELETE from `users` where sn= $sn";
echo $query;
mysqli_query($connection,$query);

mysqli_close($connection);

header('location:userdisplay.php?confirm=deleted');

 ?>
