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
            	<?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>Add another department?</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">register department</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">add a new department</p>

                </div>
            </div>
        </div>
    </div>

	<form action="adddept.php" method="post" enctype="multipart/form-data">
	
	<table  align="center" cellpadding="10" class="col-lg-6 contact-form bg-secondary rounded p-5">
		
		<tr><th align="left">Department ID</th><td><input type="text" name="id" required></td></tr>
		<tr><th align="left">Departname Name</th><td><input type="text" name="name" required></td></tr>
		<tr><th align="left">Description</th><td><textarea placeholder="write here" cols="40" rows="7" name="description"></textarea></td></tr>
		 <tr><th align="center"><input type="submit" value="Submit" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" onclick="alert('click OK to continue')"></th><th>
		 	<input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table>
</form>
<?php require 'footer.php'; ?>
</body>