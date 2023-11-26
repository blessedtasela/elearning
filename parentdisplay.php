<head>
    <meta charset="utf-8">
    <title>elearning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
	<script type="text/javascript">
    function del(){
        return confirm('Are you sure you want to DELETE?');
    }
</script>
	<?php 

require 'javascripts.php';
require 'topbar.php';
require 'elearningmenu.php';
require 'connectelearning.php';
?>
 <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            	<?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Parent Information deleted successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">view parents</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">parents list</p>
                </div>
            </div>
        </div>
    </div>

    <body background="">
	<table   align="center"  border="2" class="col-lg-4 contact-form bg-secondary rounded p-5">
	<tr><th>SN</th><th>PARENT_ID</th><th>TITLE</th><th>FULL_NAMES</th><th>STUDENT_ID</th><th colspan="2"><a href=""><img src="img/addnew.jpg" width=50 height=50></a></th></tr>
	
<?php
$query= "SELECT * FROM `parents`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($patreg=mysqli_fetch_array($return)) 
{
	echo "<tr>";
	echo "<td>".$patreg['sn']."</td>";
	echo "<td>".$patreg['parent_id']."</td>";


	if ($patreg['title']=='M') echo "<td>Mr</td>";
		else echo "<td>Mrs</td>";

	echo "<td>".$patreg['full_names']."</td>";
	echo "<td>".$patreg['student_id']."</td>";

	echo "<td><a href= .php?num=$patreg[0]><img src='img/edit.jpg' width=30 height=30></a></td>";
 
	 if ($_SESSION['status']=='admin1') 
	echo "<td><a href=delparent.php?num=$patreg[0]><img src='img/delete.png' width=30 height=30 onclick='return del()'></a></td>";
	 if ($_SESSION['status']=='admin2') 
	echo "<td><a href=delparent.php?num=$patreg[0]><img src='img/delete.png' width=30 height=30 onclick='return del()'></a></td>";
	 	 
}

echo "<tr><th align=center colspan=4>Total Number of Applications</th>
<td colspan=2 class='btn btn-primary py-2 px-4 ml-auto d-none d-lg-block'> $x </td></tr>";

?>

 </table></body>
<?php require 'footer.php'; ?>
<?php mysqli_close($connection); ?>
