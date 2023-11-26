
<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query= "DELETE from `applications` where appl_id= $sn";

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:studentappldisplay.php?confirm=deleted');

 ?>
