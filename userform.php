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
  
    
    function check() 
    {
    	if (document.getElementById('spss').checked==true)
    	{
    		document.getElementById('pass').type="text";
    		document.getElementById('hpss').innerHTML="Hide Password";
    	 }else 
    	{
    		document.getElementById('pass').type="password";
    		document.getElementById('hpss').innerHTML="Show Password";
    	}
    }
    function verify() 
    {
	if (document.getElementById('pass').value!=document.getElementById('cpass').value)
		alert('The passwords do not match! please input correct password');
	
	if (document.getElementById('pass')<9);
		alert('The password is too short!');
		 
	}
</script> 

<?php require 'topbar.php'; 
   require 'javascripts.php';
   require 'elearningmenu.php';
    ?>

    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>Add a new User?</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">add a user</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">add users</p>
                </div>
            </div>
        </div>
    </div>

<body  background="">
<form action="adduserreg.php" method="post">
<table  align="center" align="center" cellpadding="10" class="col-lg-4 contact-form bg-secondary rounded p-5" >
 
<tr><th align="left">User ID</th><td><input type="text" name="id" required  placeholder="user id"></td></tr>
<tr><th align="left">Username</th><td><input type="text" name="username" required placeholder="username"></td></tr>
<tr><th align="left">Password</th><td>
	<div id="hpss">Show Password</div>
	<input type="password" name="pass" required placeholder="password" id="pass">
<input type="checkbox" id="spss" onclick="check()"></td></tr> 
<tr><th align="left"> Confirm Password</th><td><input type="password" name="cpass" required placeholder="Confirm password" id="cpass"></td></tr>
<tr><th align="left">Email</th><td><input type="text" name="email" required placeholder="email"></td></tr>
<tr><th align="left">school ID</th><td><input type="text" name="sid" required placeholder="student id/parent id/teacher id...."></td></tr>
<tr><th align="left">Status</th><td><select required  name="status">
<option value= ""disabled selected hidden>Choose one</option>
<option value="admin1">Admin 1(Director)</option>
<option value="admin2">Admin 2(Account Officer)</option>
<option value="admin3">Admin 3(General Secretary)</option>
<option value="parent">Parent</option>
<option value="smuser">Simple user</option>
<option value="student">Student</option>
<option value="parent">Parent</option></select></th></tr>
<tr><th><input type="submit" value="Submit" onclick="alert('click OK to continue')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" ></th><th><input type="reset" value="Cancel" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table></form> 
</body>
   <?php require 'footer.php'; ?>
 