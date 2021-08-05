<?php
session_start();
include("include/connect.php");

if(isset($_SESSION ['js_id'])){ 

$query="DELETE FROM j_s_reg 
WHERE js_id='".$_SESSION['js_id']."'";
 if(mysqli_query($con, $query))
 {
	header ("location: applicant_panel.php?action=1");
 }
else
{
	echo "data is not deleted";
}

}




if(isset($_GET['employer_id'])){
	$query="DELETE FROM employer_registration 
WHERE employer_id='".$_GET['employer_id']."'";
 if(mysqli_query($con, $query))
 {
	header ("location: admin.php?page=employer_list");
 }
else
{
	echo "data is not deleted";
}
	
	
}


if(isset($_GET['job_id'])){
	$query="DELETE FROM post_job 
WHERE job_id='".$_GET['job_id']."'";
 if(mysqli_query($con, $query))
 {
	header ("location: admin.php?page=job_list");
 }
else
{
	echo "data is not deleted";
}
	
	
}


if(isset($_GET['js_id'])){
	$query="DELETE FROM j_s_reg 
WHERE js_id='".$_GET['js_id']."'";
 if(mysqli_query($con, $query))
 {
	header ("location: admin.php?page=applicant_list");
 }
else
{
	echo "data is not deleted";
}
	
	
}







?>