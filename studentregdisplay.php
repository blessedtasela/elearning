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
	
	<?php 

require 'javascripts.php';
require 'topbar.php';
require 'elearningmenu.php';
require 'connectelearning.php'; 
 ?> 
<div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            	 <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Student information deleted successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">view students</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">student list</p>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
	function enlarge(num) {
	 		 
	 		document.getElementById('i'+num).width=200;
	 		document.getElementById('i'+num).height=200;
	 	}
	 	function reduce(num){
	 		document.getElementById('i'+num).width=50;
	 		document.getElementById('i'+num).height=40;
	 	}
	function del(){
        return  confirm('Are you sure you want to DELETE? You would have loose this student information!');
    }
    function deleted() {
    	alert('Student information deleted successfully.');
    }
</script>
<body background="">
<table border="2" align="center" class="col-lg-4 contact-form bg-secondary rounded p-5">
	<tr><th>SN</th><th>STUDENT_ID</th><th>PHOTO</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>PARENT_ID</th><th>DEPARTMENT</th><th>SEMESTER</th><th>HEAD_OF_DEPARTMENT</th><th colspan="2" align="center"><a href=studentregform.php><img src=img/addnew.jpg width=50 height=50></a></th></tr>
	
	<?php

require 'connectelearning.php';

$query= "SELECT * FROM `students`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($studreg=mysqli_fetch_array($return)) 
{
	echo "<tr>";
		echo "<td>".$studreg['sn']."</td>";
	echo "<td>".$studreg['student_id']."</td>";

	echo "<td><img src=imagestudent/$studreg[2].jpg id=i$studreg[2] height=50 width=50 onmouseover=enlarge('$studreg[2]') 
	onmouseout=reduce('$studreg[2]')></td>";

	echo "<td>".$studreg['first_name']."</td>";
	echo "<td>".$studreg['last_name']."</td>";
	echo "<td>".$studreg['parent_id']."</td>";
	echo "<td>".$studreg['department']."</td>";
	echo "<td>".$studreg['semester']."</td>";
	echo "<td>".$studreg['hod']."</td>";


	echo "<td><a href=studentupdateform.php?num=$studreg[0]><img src='img/edit.jpg' width=30 height=30></a></td>";
 
	echo "<td><a href=delstudent.php?num=$studreg[0]><img src='img/delete.png' width=30 height=30 onclick='return del()'></a></td>";
	 
}

echo "<tr><th align=center colspan=7><b>Total Number of Applications</b></th>
<th class='btn btn-primary py-2 px-4 ml-auto d-none d-lg-block' colspan=2><b> $x </b></th></tr>";
?>
 </table></body>
<?php require 'footer.php';
mysqli_close($connection); ?>
  