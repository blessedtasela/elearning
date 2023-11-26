
<script type="text/javascript">
	 function deleted() {
    	alert('Student information deleted successfully.');
    }
</script>
<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query= "DELETE from `applications` where appl_id= $sn";

mysqli_query($connection,$query);

mysqli_close($connection);

header('location:studentappldisplay.php');

 ?>
