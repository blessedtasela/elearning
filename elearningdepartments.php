
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

<body>
    
   <?php require 'topbar.php';
 require 'elearningmenu.php';
  require 'connectelearning.php'; 
   require 'javascripts.php';
?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Departments</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="elearninghomepage.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"> our Departments</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Departments</h1>
            </div>

                <div class="container-fluid py-5">
        			<div class="container py-5">
        				<div class="row">
        				
             <?php 
$query= "SELECT * FROM `departments`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);
$tecno=0;
while ($dept=mysqli_fetch_array($return)) 
{
    ?>
            
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" alt=""><?php echo "<td><img src=imageteacher/$dept[8].jpg></td>"; ?>
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?php echo "<td>".$dept['number_students']."</td>"; ?></small>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i><?php echo "<td>".$dept['duration']."</td>"; ?></small>
                            </div>
                            <a class="h5" href=""><?php echo "<td>".$dept['department_name']."</td>"; ?></a>
                            <div class="border-top mt-4 pt-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i><?php echo "<td>".$dept['ratings']."</td>"; ?><small>(250)</small></h6>
                                    <h5 class="m-0"><?php echo "<td>".$dept['type']."</td>"; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                  <?php 
}
mysqli_close($connection); ?> 
            </div>
        </div>
    </div>

    <!-- Courses End -->


    <!-- Footer Start -->
     <?php require 'footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

</body>
