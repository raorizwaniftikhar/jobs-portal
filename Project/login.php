<?php
session_start();
include("include/connect.php");
if(isset($_POST['submit']))
{
	
	if(isset($_POST['employer']))
	{
		$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM employer_registration WHERE e_email='$email' AND password='$password'";
/*mysqli_query(2) Perform queries against the database:
mysqli_num_rows(1) Return the number of rows in a result set:*/
$result = mysqli_query($con,$query);
$rows = mysqli_num_rows($result);
if($rows == 1)
{
	$row = mysqli_fetch_array($result);
	if($row['e_email'] == $email && $row['password'] == $password)
	{
		// Set session variables
$_SESSION ['employer_id']= $row['employer_id'];
$_SESSION ['employer_name']= $row['employer_name'];
		header("location:employer_panel.php");
	 }
}
else
{
header("location: index.php?action=1");
	//control goes to index.php/right_side.php 21
}
		// end login here
		}else{
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM j_s_reg WHERE email='$email' AND password='$password'";
/*mysqli_query(2) Perform queries against the database:
mysqli_num_rows(1) Return the number of rows in a result set:*/
$result = mysqli_query($con,$query);
$rows = mysqli_num_rows($result);

if($rows == 1){
	$row = mysqli_fetch_array($result);
	if($row['email'] == $email && $row['password'] == $password){
		// Set session variables
		$_SESSION ['first_name']= $row['first_name'];
		$_SESSION ['js_id']= $row['js_id'];
		//echo "Hi ".$_SESSION ['first_name'];
		//echo "<br > Successfull Login";
		header("location: applicant_panel.php");
	 }
}
else
{
	header("location: index.php?action=1");
	//control goes to index.php/right_side.php 21
}
		}
}
?>