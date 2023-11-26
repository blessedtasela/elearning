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
 <?php require 'javascripts.php'; ?>

<body  background="">
	  <?php require 'topbar.php'; ?>
	   <?php require 'elearningmenu.php'; 
	   require 'connectelearning.php'; ?>  

	   <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            	<?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>Student registration successful! Register another Student?</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">register student</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">register student</p>

                </div>
            </div>
        </div>
    </div>

	<form action="addstudentreg.php" method="post" enctype="multipart/form-data">
	
	<table  align="center" cellpadding="10" class="col-lg-6 contact-form bg-secondary rounded p-5">
		
		<tr><th align="left">Student ID</th><td><input type="text" name="id"></td></tr>
		<tr><th align="left">Photo</th><td><input type="file" name="pics"></td></tr>
		<tr><th align="left">First Name</th><th align="left"><input type="text" name="firstname"></th></tr>
		<tr><th align="left">Last Name</th><td><input type="text" name="lastname"></td></tr>
		<tr><th align="left">Parent ID</th><td><input type="text" name="pid"></td></tr>
		<tr><th align="left">Department</th><td><select required name="dept">
	<option value= ""disabled selected hidden>Choose a Department</option>
	<option value="Compuer Science">Compuer Science</option>
	<option value="Business Administration">Business Administration</option>
	<option value="Artificial Intelligence">Artificial Intelligence</option>
	<option value="Arts and Culture">Arts and Culture</option>
	<option value="Music">Music</option>
	<option value="Finance">Finance</option>
	<option value="Accounting">Accounting</option>
	<option value="Human Relations">Human Relations</option></select></td></tr>
		<tr><th align="left">Semester</th><td><select required name="sem">
	<option value= ""disabled selected hidden>semesters/year</option>
	<option value="1ISI">1ISI</option>
	<option value="2ISI">2ISI</option>
	<option value="3ISI">3ISI</option>
	<option value="4ISI">4ISI</option>
	<option value="5ISI">5ISI</option>
	<option value="6ISI">6ISI</option></select></td></tr>
		<tr><th align="left">Head of Department</th><td><select required name="hod">
	<option value= ""disabled selected hidden>HODs</option>
	<option value="1AS">Mr Anos Smith</option>
	<option value="2VJ">Mr Victor John</option></select></td></tr>
		 <tr><th align="center"><input type="submit" value="Submit" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" onclick="alert('click OK to continue')"></th><th>
		 	<input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table>
</form>
<?php require 'footer.php'; ?>
</body>