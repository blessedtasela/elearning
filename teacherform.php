
<html>
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

	<script language="javascript">
 function clear() {
 	confirm("Are you sure you want to cancel? All information entered would be lost!")
 }

	</script>
 
  
</head>
<body>
	<?php require 'topbar.php'; 
   require 'javascripts.php';
   require 'elearningmenu.php';
    ?>

    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Teacher registered successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">register a teacher</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="elearninghomepage.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="teacherdisplay.php">View teachers</a></p>
                </div>
            </div>
        </div>
    </div>

<form action="addteacherreg.php" method="post" enctype="multipart/form-data">
	<table bgcolor="lightgrey" align="center" cellpadding="10" class="col-lg-3 contact-form bg-secondary rounded p-5">
		<tr><th align="left">Teacher ID</th><td><input type="text" name="id"></td></tr>
		<tr><th align="left">Title</th><th align="left">Mr<input type="radio" name="title" value="M">Mrs<input type="radio" name="title" value="F"></th></tr>
		<tr><th align="left">Full Names</th><td><input type="text" name="name"></td></tr>
		<tr><th align="left">Department</th><td>
            <select required name="dept">
	<option value= ""disabled selected hidden>Departments</option>
	<option value="Compuer Science">Compuer Science</option>
    <option value="Business Administration">Business Administration</option>
    <option value="Artificial Intelligence">Artificial Intelligence</option>
    <option value="Arts and Culture">Arts and Culture</option>
    <option value="Music">Music</option>
    <option value="Finance">Finance</option>
    <option value="Accounting">Accounting</option>
    <option value="Human Relations">Human Relations</option>
            </select></td></tr>
            <tr><th align="left">Image</th><td><input type="file" name="photo"></td></tr>
		<tr><th align="center"><input type="submit" value="Submit" onclick="alert('click OK to continue.')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th>
			<th><input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table></form>
</body>
<?php require 'footer.php'; ?>
</html>