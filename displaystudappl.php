
<table border="2">
	<caption><b><font size="50" color="green">STUDENT APPLICATIONS</font></b></caption>
	<tr><th>APPL. NO</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>DATE_OF_BIRTH</th><th>EMAIL</th><th>CONFIRM_EMAIL</th><th>GENDER</th><th>NATIONALITY</th><th>PHONE_NUMBER</th><th>ID_NUMBER</th><th>RESIDENCE_COUNTRY</th><th>STATE</th><th>ADDRES_1</th><th>ADDRESS_2</th><th>SCHOOL_YEAR</th><th>LEVEL</th><th>MOTIVATION</th><th>CHOICE_OF_STUDY</th><th>SECOND_CHOICE</th><th>TRANSCRIPTS</th><th>WAEC</th><th>PHOTO</th><th colspan="5"><a href=productform.html><img src=addnew.jpg width=50 height=50></a></th></tr>
	
	<?php

require 'connectelearning.php';

$query= "SELECT * FROM `student application`";
$return=mysqli_query($connection,$query);
$x=mysqli_num_rows($return);

while ($studreg=mysqli_fetch_array($return)) 
{
	echo "<tr>";
	echo "<td>".$studreg['registration id']."</td>";
	echo "<td>".$studreg['first name']."</td>";
	echo "<td>".$studreg['last name']."</td>";
	echo "<td>".$studreg['date of birth']."</td>";
	echo "<td>".$studreg['email']."</td>";
	echo "<td>".$studreg['confirm email']."</td>";

		if ($studreg['gender']=='M') echo "<td>Male</td>";
		else echo "<td>Female</td>";

	$querycy="SELECT * FROM `nationality` WHERE SN =".$studreg['country'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td>".$studreg['phone number']."</td>";
	echo "<td>".$studreg['id number']."</td>";

	$querycy="SELECT * FROM `nationality` WHERE SN =".$studreg['residence country'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td>".$studreg['state']."</td>";
	echo "<td>".$studreg['address 1']."</td>";
	echo "<td>".$studreg['address 2']."</td>";

	$querycy="SELECT * FROM `school year` WHERE id =".$studreg['school year'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
		echo "<td>".$cy[1]."</td>";

	$querycy="SELECT * FROM `level` WHERE id =".$studreg['level'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td>".$studreg['motivation']."</td>";
	 
	$querycy="SELECT * FROM `courses available` WHERE id =".$studreg['choice of study'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	$querycy="SELECT * FROM `courses available` WHERE id =".$studreg['second choice'];
	$resultcy=mysqli_query($connection,$querycy);
	$cy=mysqli_fetch_row($resultcy);
	echo "<td>".$cy[1]."</td>";

	echo "<td><img src= Image/$studreg[0].jpg height=50 width=50></td>";

	echo "<td><img src= Image/$studreg[0].jpg height=50 width=50></td>";

	echo "<td><img src= photo/$studreg[0].jpg height=50 width=50></td>";
 
	 
}

echo "<tr><th align=center colspan=10>Total Number of Applications</th><th> $x </th></tr>";
 
mysqli_close($connection); ?>
 </table>