
<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query= "DELETE from `departments` where sn= $sn";

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:departmentdisplay.php?confirm=deleted');

 ?>
