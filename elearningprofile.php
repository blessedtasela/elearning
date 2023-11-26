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
                <h3 class="display-4 text-white text-uppercase">welcome
                 <?php 

require 'connectelearning.php';
 

$query= "SELECT * FROM `users`";
$return=mysqli_query($connection,$query);
$data=mysqli_fetch_array($return);

     ?>
           <?php echo "Hello ".$_SESSION['user'];
                                if ($_SESSION['status']=='admin1')  
                                echo ", You are a Director";
                                if ($_SESSION['status']=='admin2') 
                                echo ", You are an Account Officer";
                                if ($_SESSION['status']=='admin3') 
                                echo ", You are a General Secretary";
                                if ($_SESSION['status']=='teacher') 
                                echo ", You are a Teacher";
                                if ($_SESSION['status']=='parent') 
                                echo ", You are a Parent";
                                if ($_SESSION['status']=='student') 
                                echo ", You are a Student"; ?>
     </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">my profile</p>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>