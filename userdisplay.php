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
	function del(){
        return confirm('Are you sure you want to DELETE?');
    }
</script>
	
	<?php 

require 'javascripts.php';
require 'topbar.php';
require 'elearningmenu.php';
require 'connectelearning.php'; 
 ?> 
<div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            	 <?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>user deleted from system</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">users</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">users list</p>
                </div>
            </div>
        </div>
    </div>

<body>
	<table border="2" align="center" class="col-lg-4 contact-form bg-secondary rounded p-5">
	<tr><th>SN</th><th>USER_ID</th><th>USERNAME</th><th>PASSWORD</th><th>EMAIL</th><th>SCHOOL_ID</th><th>STATUS</th></th><th colspan="2">
		<?php if ($_SESSION['status']=='admin1') echo "<a href=userregform.html><img src=img/addnew.jpg width=60 height=55></a>" ?><?php if 
			($_SESSION['status']=='admin3') echo "<a href=userregform.html><img src=img/addnew.jpg width=60 height=55></a>" ?></th></tr>
	
	<?php 


require 'connectelearning.php';
//require 'elearningdisconnect.php';

$query= "SELECT * FROM `users`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($usereg=mysqli_fetch_array($return)) 
{
	echo "<h3><tr>";
	echo "<td>".$usereg['sn']."</td>";
	echo "<td>".$usereg['user_id']."</td>";
	echo "<td>".$usereg['username']."</td>";
	echo "<td>".$usereg['password']."</td>";
	echo "<td>".$usereg['email']."</td>";
	echo "<td>".$usereg['school_id']."</td>";
	echo "<td>".$usereg['status']."</td>";
	
	 
	
	if ($_SESSION['status']=='admin1')
	echo "<td><a href= .php?num=$usereg[0]><img src='img/edit.jpg' width=30 height=30></a></td>";
 
 	if ($_SESSION['status']=='admin2')
	echo "<td><a href= .php?num=$usereg[0]><img src='img/edit.jpg' width=30 height=30></a></td>";
 
 	if ($_SESSION['status']=='admin1')
	echo "<td><a href=deluser.php?num=$usereg[0]><img src='img/delete.png' width=30 height=30 onclick='return del()''></a></td>";

	if ($_SESSION['status']=='admin2')
	echo "<td><a href=deluser.php?num=$usereg[0]><img src='img/delete.png' width=30 height=30 onclick='return del()''></a></td>";
	 
}

echo "<h4><tr><th align=center colspan=4>Total Number of Users</th>
<td colspan=2 class='btn btn-primary py-2 px-4 ml-auto d-none d-lg-block'> $x </td></tr><h4>";

?>

 </table>
</font></body>
<?php require 'footer.php'; ?>
<?php mysqli_close($connection); ?>
