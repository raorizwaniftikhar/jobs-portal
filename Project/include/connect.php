<?php 
$server_name="localhost";
$user_name="root";
$password="";

/*The mysqli_connect() function opens a new connection to the MySQL server.*/
$con=mysqli_connect("$server_name","$user_name",$password);


/* Check connection The mysqli_connect_errno() function returns the error code from the last connection error, if any*/
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$db=mysqli_select_db($con,"job_uae");


if(mysqli_select_db($con,"job_uae"))
{
}
else
{
	echo "not connected with database";
}
?>