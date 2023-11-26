<?php 

session_start();
if (!isset($_SESSION['user'])) 
   header('location:elearningindex.php');
 else
 {$_SESSION['user'];
     
}
     ?>