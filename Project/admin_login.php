<?php
session_start();
include("include/connect.php");

if (isset($_POST['submit'])){
	
$name = $_POST['name'];
$password = $_POST['password'];	

$admin = mysqli_query($con, "SELECT * FROM admin WHERE admin_name='$name' AND password='$password'");	
	
	if(mysqli_num_rows($admin) == 1){
	$row = mysqli_fetch_array($admin);	
	
	echo $_SESSION['admin_id'] = $row['admin_id'];
	echo $_SESSION['admin_name'] = $row['admin_name'];
	echo "Admin Login Successfully";
	header ("location: admin.php");	
		}else{
			
			echo'<FORM ACTION="admin.php"> 
			<INPUT TYPE=IMAGE SRC="images/back-icon.png" ALIGN="ABSMIDDLE" HEIGHT=110 WIDTH=160 ALIGN="ABSMIDDLE" ALT="Send It In!" BORDER=0 > 
			</FORM>';
			
			echo "Admin Login Error ";
			
			}
		
		
			
	
	}


?>