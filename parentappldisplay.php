<body background="bg1.jpg">
	<table border="2" cellpadding="5">
	<caption><b><font size="50" color="green">PARENT APPLICATIONS</font></b></caption>
	<tr><th>REG NO</th><th>TITLE</th><th>FIRST_NAME</th><th>FAMILY_NAME</th><th>DATE_OF_BIRTH</th><th>EMAIL</th><th>CONFIRM_EMAIL</th><th>STATUS</th><th>PROFESSION</th><th>NATIONALITY</th><th>ID_NUMBER</th><th>PHONE_NUMBER</th><th>RESIDENCE_COUNTRY</th><th>STATE</th><th>PERMANENT_ADDRES</th><th colspan=""><img src=addnew.jpg width=50 height=50></a></th></tr>
	
	<?php 


require 'connectelearning.php';

$query= "SELECT * FROM `parent application`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($patreg=mysqli_fetch_array($return)) 
{
	echo "<tr>";
	echo "<td>".$patreg['registration id']."</td>";
	if ($patreg['title']=='M') echo "<td>Mr</td>";
	else echo "<td>Mrs</td>";
	echo "<td>".$patreg['first name']."</td>";
	echo "<td>".$patreg['family name']."</td>";
	echo "<td>".$patreg['date of birth']."</td>";
	echo "<td>".$patreg['email']."</td>";
	echo "<td>".$patreg['confirm email']."</td>";

	if ($patreg['status']=='P') echo "<td>Parent</td>";
	else echo "<td>Guardian</td>";

	echo "<td>".$patreg['profession']."</td>";


	$querycy="SELECT * FROM `nationality` WHERE SN =".$patreg['nationality'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td>".$patreg['id number']."</td>";
	echo "<td>".$patreg['phone number']."</td>";

	$querycy="SELECT * FROM `nationality` WHERE SN =".$patreg['residence country'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td>".$patreg['state']."</td>";
	echo "<td>".$patreg['address']."</td>";
	 
}


echo "<tr><th align=center colspan=10>Total Number of Applications</th><th> $x </th></tr>";

?>
 </table></body>

<?php mysqli_close($connection); ?>
