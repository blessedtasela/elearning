

<?php require 'connectelearning.php'; 
require 'elearningdisconnect.php';
 ?>

     <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>MENU</h5>
                    <i class="fa fa-angle-down text-primary"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">

        <?php echo " <a href='elearningprofile.php' class='nav-item nav-link'>My Profile</a>";?>

     <?php if ($_SESSION['status']=='admin1') 
    echo " <a href='studentappldisplay.php' class='nav-item nav-link'>Applications</a>";
    if ($_SESSION['status']=='admin3') 
    echo "<a href='studentappldisplay.php' class='nav-item nav-link'>Applications</a>"; ?>

    <?php if ($_SESSION['status']=='admin1') 
    echo " <a href='departmentdisplay.php' class='nav-item nav-link'>Departments</a>";
    if ($_SESSION['status']=='admin3') 
    echo "<a href='departmentdisplay.php' class='nav-item nav-link'>Departments</a>"; ?>
    
 <?php if ($_SESSION['status']=='admin1') 
    echo " <a href='studentregdisplay.php' class='nav-item nav-link'>Students</a>";
    if ($_SESSION['status']=='admin2') 
    echo "<a href='studentregdisplay.php' class='nav-item nav-link'>Students</a>"; ?>
 <?php if ($_SESSION['status']=='admin3') 
    echo "<a href='studentregdisplay.php' class='nav-item nav-link'>Students</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='coursedisplay.php' class='nav-item nav-link'>Courses</a>";
    if ($_SESSION['status']=='admin3') 
    echo "<a href='coursedisplay.php' class='nav-item nav-link'>Courses</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='requestdocument.php' class='nav-item nav-link'>Documents Requested</a>";
    if ($_SESSION['status']=='student') 
    echo "<a href='requestdocument.php' class='nav-item nav-link'>Request a document</a>"; ?>

<?php if ($_SESSION['status']=='teacher') 
    echo "<a href='coursematerial.php' class='nav-item nav-link'>Request Course Materials</a>"; ?>

    <?php if ($_SESSION['status']=='admin1') 
    echo " <a href='class.php' class='nav-item nav-link'>Classes</a>";
    if ($_SESSION['status']=='parent') 
    echo " <a href='class.php' class='nav-item nav-link'>Classes</a>";
    if ($_SESSION['status']=='student') 
      echo " <a href='class.php' class='nav-item nav-link'>Classes</a>"; ?>


<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='parentregdisplay.php' class='nav-item nav-link'>Parents</a>";
    if ($_SESSION['status']=='admin2') 
    echo "<a href='parentregdisplay.php' class='nav-item nav-link'>Parents</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='teacherdisplay.php' class='nav-item nav-link'>Teachers</a>";
    if ($_SESSION['status']=='admin2') 
    echo "<a href='teacherdisplay.php' class='nav-item nav-link'>Teachers</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='admindisplay.php' class='nav-item nav-link'>Admins</a>";
    if ($_SESSION['status']=='admin2') 
    echo "<a href='admindisplay.php' class='nav-item nav-link'>Admins</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='userdisplay.php' class='nav-item nav-link'>Users</a>";
    if ($_SESSION['status']=='admin2') 
    echo "<a href='userdisplay.php' class='nav-item nav-link'>Users</a>";
    if ($_SESSION['status']=='admin3') 
    echo "<a href='userdisplay.php' class='nav-item nav-link'>Users</a>"; ?>

<?php if ($_SESSION['status']=='admin1') 
    echo " <a href='payment.php' class='nav-item nav-link'>Payments</a>";
    if ($_SESSION['status']=='parent') 
    echo "<a href='payment.php' class='nav-item nav-link'>Payments</a>";
    if ($_SESSION['status']=='student') 
    echo "<a href='payment.php' class='nav-item nav-link'>Payments and Tuition</a>"; ?>

                              
                         
                </div>
            </nav>
        </div>


            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="elearninghomepage.php" class="nav-item nav-link active">Home</a>
                            <a href="elearningabout.php" class="nav-item nav-link">About</a>
                            <a href="elearningcourses.php" class="nav-item nav-link">Courses</a>
                            <a href="elearningdepartments.php" class="nav-item nav-link">Departments</a>
                            <a href="elearningteachers.php" class="nav-item nav-link">Teachers</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="elearningblog.php" class="dropdown-item">Blog List</a>
                                    <a href="elearningblog2.php" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="elearningcontact.php" class="nav-item nav-link">Contact</a>
                        </div> 
                        <div class="nav-item dropdown">                       
    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="elearninglogout.php" onclick="return confirm('Are you sure you want to LOG OUT? You would have to log in to continue!')">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </nav></div></div></div>
             <?php
 

 // echo "<td> Add Application  <a href=studentapplform.html>click here</a><br><br>";
 
//  echo "<td> View Applications  <a href=studentappldisplay.php>click here</a><br><br>";
 
 // echo "<td>Parent Application  <a href=parentappldisplay.php>click here</a><br><br>";
 

?>
 