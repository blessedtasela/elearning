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
            	  <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Department deleted successfully!</h5>";
            ?>
            <?php  if (isset($_GET['confirmed']))echo "<h5 class='display-6 text-white text-uppercase'>Department has been successfully updated!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">All Departments</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="elearninghomepage.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="departmentregform.php">Add a new Department</a></p>
                </div>
            </div>
        </div>
    </div>

<body background="">
<table border="2" align="center" class="col-lg-4 contact-form bg-secondary rounded p-5">
	<tr><th>SN</th><th>DEPARTMENT_ID</th><th>DEPARTMENT_NAME</th><th>DESCRIPTION</th><th>STUDENT_NO</th><th>DURATION</th><th>RATINGS</th><th>TYPE</th>
        <th>IMAGE</th><th colspan="2" align="center">OPTIONS</th></tr>
	
	<?php

require 'connectelearning.php';

$query= "SELECT * FROM `departments`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($dept=mysqli_fetch_array($return)) 
{
	echo "<tr>";
		echo "<td>".$dept['sn']."</td>";
	echo "<td>".$dept['department_id']."</td>";
	echo "<td>".$dept['department_name']."</td>";
	echo "<td>".$dept['description']."</td>";
    echo "<td>".$dept['number_students']."</td>";
    echo "<td>".$dept['duration']."</td>";
    echo "<td>".$dept['ratings']."</td>";
    echo "<td>".$dept['type']."</td>";
 echo "<td><img src=imageteacher/$dept[8].jpg  height=50 width=50></td>";
	

	echo "<td><a href=departmentupdateform.php?num=$dept[0]><img src='img/edit.jpg' width=30 height=30></a></td>";
 if ($_SESSION['status']=='admin1') 
	echo "<td><a href=deldepartment.php?num=$dept[0]><img src='img/delete.png' width=30 height=30 onclick='return del()'></a></td>";
	 if ($_SESSION['status']=='admin2') 
	echo "<td><a href=deldepartment.php?num=$dept[0]><img src='img/delete.png' width=30 height=30 onclick='return del()'></a></td>";
	 
}

echo "<tr><th align=center colspan=3><b>Total Number of Applications</b></th>
<th class='btn btn-primary py-2 px-4 ml-auto d-none d-lg-block' colspan=2><b> $x </b></th></tr>";
?>
 </table></body>
<?php require 'footer.php';
mysqli_close($connection); ?>
  