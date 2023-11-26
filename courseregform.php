<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
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
require 'topbar.php';
 require 'elearningmenu.php';
  require 'connectelearning.php'; 
   require 'javascripts.php';
   ?>

<body background="">
	<div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>course registered successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">add course</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="coursedisplay.php">view courses</a></p>
                </div>
            </div>
        </div>
    </div>
	<form action="courseadd.php" method="post" enctype="multipart/form-data">
	<table align="center" cellpadding="10" class="col-lg-4 contact-form bg-secondary rounded p-5">
		<tr><th align="left">Course ID</th><td><input type="text" name="id" placeholder="course code"></td></tr>
		<tr><th align="left">Course Name</th><td><input type="text" name="name" placeholder="input name of course"></td></tr>
		<tr><th align="left">Teacher ID</th><td><input type="text" name="tid"></td></tr> 
               <tr><th align="left">Image</th><td><input type="file" name="photo"></td></tr>
		<tr><th align="center"><input type="submit" value="Submit" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th><th>
			<input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table>
</form>
 </body>
 <?php require 'footer.php'; ?>
