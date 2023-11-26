
<html>
<head>
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

 <script type="text/javascript">
	function enlarge(num) {
	 		 
	 		document.getElementById('i'+num).width=300;
	 		document.getElementById('i'+num).height=300;
	 	}
	 	function reduce(num){
	 		document.getElementById('i'+num).width=200;
	 		document.getElementById('i'+num).height=200;
	 	}
	function del(){
        return confirm('Are you sure you want to DELETE? You would have loose this student information!');
    }
    function deleted() {
    	alert('Student information deleted successfully.');
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
            	<?php  if (isset($_GET['confirm']))echo "<h5 class='display-6 text-white text-uppercase'>student application deleted successfully!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase">STUDENT APLICATIONS</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="elearninghomepage.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><?php if ($_SESSION['status']=='admin1') echo "<a href=studentapplform.php>add a new application</a>" ?><?php if ($_SESSION['status']=='admin3') echo "<a href=studentapplform.php>add a new application</a>" ?></p>
                </div>
            </div>
        </div>
    </div>
</head>
<body bgcolor="lightgrey" background="bg1.jpg">

<table border="2" bgcolor=""><tr>
	
	<?php

require 'connectelearning.php';


$query= "SELECT * FROM `applications`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);
$applno=0;
while ($studappl=mysqli_fetch_array($return)) 
{
	if ($applno%2==0) {
	 	echo "<tr></tr>";
	 } $applno++;

	echo "<td align=center><h5><b><font color=orange>Application Number: ".$studappl['appl_id']."</font></h3>";

	echo "<img src=imagestudent/$studappl[17].jpg id=i$studappl[17] height=200 width=200 onmouseover=enlarge('$studappl[17]') 
	onmouseout=reduce('$studappl[17]')></td><td>";

	echo "First Name: ".$studappl['first_name']."<br>";
	echo "Last Name: ".$studappl['last_name']."<br>";
	echo "Date of Birth: ".$studappl['dob']."<br>";
	echo "Email: ".$studappl['email']."<br>";

		if ($studappl['gender']=='M') echo "Gender: Male<br>";
		else echo "Gender: Female<br>";

	echo "Nationality: ".$studappl['nationality']."<br>";
	echo "Telephone: ".$studappl['phone']."<br>";
	echo "NIN/Passport Number: ".$studappl['id_no']."<br>";
	echo "Nationality: ".$studappl['country']."<br>";
	echo "State: ".$studappl['state']."<br>";
	echo "Address: ".$studappl['address']."<br>";
	echo "School Year: ".$studappl['school_year']."<br>";
	echo "Education Level: ".$studappl['level']."<br>";

	echo "Motivation: ".$studappl['motivation']."<br>";
	echo "Choice of Study: ".$studappl['first_choice']."<br>";
	echo "Second Choice: ".$studappl['second_choice']."<br>";

	echo "<td><a href='transcriptstudent/$studappl[19].pdf' ><h5><b><font color=orange>Transcript</font></h5></a><br><br>";
	echo "<a href='waecstudent/$studappl[18].pdf' ><h5><b><font color=orange>Waec</font></h5></a><br><br>";

	echo "<a href=studentapplupdateform.php?num=$studappl[0]><img src='img/edit.jpg' width=30 height=30></a><br><br><br>";
 
 	if ($_SESSION['status']=='admin1')
	echo "<a href=delstudentappl.php?num=$studappl[0]><img src='img/delete.png' width=30 height=30 onclick='return del()''></a><br><br>";
	if ($_SESSION['status']=='admin2')
	echo "<a href=delstudentappl.php?num=$studappl[0]><img src='img/delete.png' width=30 height=30 onclick='return del()''></a><br><br></td></tr>";
	echo "<tr>";
 if ($applno%2==0) 
 {
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<tr></tr>";
}
echo "<tr><th align=center colspan=2>Total Number of Applications</th><th> $x </th></tr>";	 
}


?>
</tr> </table>
</body>
<?php require 'footer.php';
mysqli_close($connection); ?>

</html>