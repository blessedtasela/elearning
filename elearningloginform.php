 <head>
    <meta charset="utf-8">
    <title>elearning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    
    function check() {
    	if (document.getElementById('spss').checked==true)
    	{
    		document.getElementById('pss').type="text";
    		document.getElementById('hpss').innerHTML="Hide Password";
    	 }else 
    	{
    		document.getElementById('pss').type="password";
    		document.getElementById('hpss').innerHTML="Show Password";
    	}
    }
</script> 

<body  ><?php require 'topbar.php'; 
   require 'javascripts.php'; ?>

<div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="elearninghomepage.php" class="nav-item nav-link active">Home</a>
                            <a href="elearningabout.php" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                            </div>
                            <a href="elearningcontact.php" class="nav-item nav-link">Contact</a>
                           </div>
                         </div>
                       </nav>
                     </div>


 <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">log in</h3>
            <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>LOG IN not found, Please input correct details</h5>";
            ?>
               <form action="elearninglogin.php" method="post">
  <table  align="center" cellpadding="10" class="col-lg-6 contact-form bg-secondary rounded p-5" >
<tr><th>Username</th><td colspan="2"><input type="text" name="username" required placeholder="input username"></td></tr>
<tr><th>Password</th><td><input type="password" name="password" id="pss" required placeholder="input password"></td>
 
<tr><th><input type="submit" value="Login" class="btn btn-primary py-2 px-4 ml-auto d-lg-block"></th><th><input type="reset" value="Cancel" class="btn btn-primary py-2 px-4 ml-auto d-lg-block"></th></tr>
</table></form>
<center><input type="checkbox" id="spss" onclick="check()"><div id="hpss" class="text-white mb-2">Show Password </div> 
  <font color=green class="text-white mb-2">Forgotten password? click here to <a href=>reset your password</a></font><br>
</center></tr></table></form></body>

            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
 