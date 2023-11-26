
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
                <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>Department added successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">update department </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="elearninghomepage.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="departmentdisplay.php">all departments</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query="SELECT * FROM `departments` WHERE `sn`=$sn";

$result=mysqli_query($connection,$query);
$deptup=mysqli_fetch_array($result);

mysqli_close($connection);

 ?>

<form action="departmentupdate.php" method="post" enctype="multipart/form-data">
	<table bgcolor="lightgrey" align="center" cellpadding="10" class="col-lg-3 contact-form bg-secondary rounded p-5">
        <tr><th align="left">Serial Number</th><td><input type="number" name="number"  value="<?php echo $deptup['sn'];?>" readonly></td></tr>
		<tr><th align="left">Department ID</th><td><input type="text" name="id" value="<?php echo $deptup['department_id'];?>" readonly></td></tr>
        <tr><th align="left">Department Name</th><td>
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
		<tr><th align="left">Description</th><th align="left"><textarea name="description" placeholder="a little about this department" 
            value="<?php echo $deptup['description'];?>" required></textarea></th></tr>
		<tr><th align="left">Number of students</th><td><input type="number" name="nostud" value="<?php echo $deptup['number_students'];?>" required></td></tr>
		<tr><th align="left">Duration</th><td>2 Years<input type="radio" name="duration" value="2 years">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3 Years<input type="radio" name="duration" value="3 years">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4 Years<input type="radio" name="duration" value="4 years"></td></tr>
            <tr><th align="left">Ratings</th><td>
            <select required name="ratings">
    <option value= ""disabled selected hidden>Choose here</option>
    <option value="4.5">4.5</option>
    <option value="4.6">4.6</option>
    <option value="4.7">4.7</option>
    <option value="4.8">4.8</option>
    <option value="4.9">4.9</option>
    <option value="5.0">5.0</option>
            </select></td></tr>
            <tr><th align="left">Type</th><td><input type="radio" name="type" value="<?php echo $deptup['type'];?>">Liscensce&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="<?php echo $deptup['type'];?>">B.sc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="type" value="<?php echo $deptup['type'];?>">Masters</td></tr>
            <tr><th align="left">Image</th><td><input type="file" name="photo" value="<?php echo $deptup['image'];?>" required></td></tr>
		<tr><th align="center"><input type="submit" value="Submit" onclick="alert('click OK to continue.')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th>
			<th><input type="reset" value="Cancel" onclick ="confirm('Are you sure you want to cancel? All information entered would be lost!')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table></form>
</body>
<?php require 'footer.php'; ?>
</html>