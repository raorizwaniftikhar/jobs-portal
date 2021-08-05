<?php 
session_start();
include("include/connect.php");
if(isset($_SESSION ['js_id'])){

$aplicant_id = $_SESSION ['js_id'];

$job_id = $_GET['id'];

$check_cv = mysqli_query($con, "SELECT * FROM cv WHERE js_id = '$job_id'");

if(mysqli_num_rows($check_cv) <1){
	
	
	
//echo $aplicant_id."<br >".$job_id;

$apply_job = mysqli_query($con, "INSERT INTO apply (job_id, js_id) VALUES ('$job_id','$aplicant_id')");

if($apply_job){
	echo "Applied Successfully";
	 header("location:applicant_panel.php?applied=1");
	
	}
}
else 
{
 header("location:applicant_panel.php?cv=null");
}





}else{
	
 header("location:please_login.php");
	}
?>