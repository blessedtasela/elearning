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
                  <?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>Your request has been submitted successfully.</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">request a document</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">certificate form</p>
                </div>
            </div>
        </div>
    </div>

	<form action="adddocument.php" method="post" enctype="multipart/form-data">
	<table  align="center" cellpadding="10" class="col-lg-4 contact-form bg-secondary rounded p-5">
		<tr><th align="left">Student ID</th><td><input type="text" name="id" required></td></tr>
        <tr><th align="left">Document Type</th><td><select name="doc" required>
        <option value= ""disabled selected hidden>Select Document</option>
    <option value="Result">Result</option>
    <option value="Cerificate">Cerificate</option>
    <option value="Transcripts">Transcripts</option>
    <option value="Admission Letter">Admission Letter</option>
    <option value="Inscription">Inscription</option>
    <option value="Transfer Letter">Transfer Letter</option></select></td></tr>
        <tr><th align="left">Email</th><td><input type="text" name="mail"></td></tr>
        <tr><th align="left">Phone</th><td><input type="text" name="phone"></td></tr>
		<tr><th align="left">Department</th><td><select name="dept" required>
        <option value= ""disabled selected hidden>Select Department</option>
   <option value="Compuer Science">Compuer Science</option>
    <option value="Business Administration">Business Administration</option>
    <option value="Artificial Intelligence">Artificial Intelligence</option>
    <option value="Arts and Culture">Arts and Culture</option>
    <option value="Music">Music</option>
    <option value="Finance">Finance</option>
    <option value="Accounting">Accounting</option>
    <option value="Human Relations">Human Relations</option></select></td></tr>
         <tr><th align="left">Semester</th><td>
            <select name="sem" required>
    <option value= ""disabled selected hidden>semesters/year</option>
    <option value="1ISI">1ISI</option>
    <option value="2ISI">2ISI</option>
    <option value="3ISI">3ISI</option>
    <option value="4ISI">4ISI</option>
    <option value="5ISI">5ISI</option>
    <option value="6ISI">6ISI</option></select></td></tr>
		<tr><th align="left">Date</th><td><input type="date" name="date" required></td></tr>
		 <tr><th align="center"><input type="submit" value="Submit" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th><th>
		 	<input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table>
</form>
<?php require 'footer.php'; ?>
</body>

