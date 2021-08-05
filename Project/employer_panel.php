<!doctype html>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
        
        <script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<title>Jobs UAE employer panel</title>
        
        <style> 
		.tbl tr td
		{
			border:1px solid #F96;
			font-size:25px;
		}
		</style>
	</head>
	<body>
<?php include("include/header.php");?>
<?php include("include/left_side.php"); ?>
<?php
if(isset($_SESSION ['employer_id'])){ 
include("include/connect.php");
$query="SELECT
city_state.city_name,
employer_registration.employer_id,
employer_registration.employer_name,
employer_registration.`password`,

employer_registration.e_email,
employer_registration.e_tel,
employer_registration.e_url,
employer_registration.e_address,
employer_registration.e_profile,
employer_registration.e_office_locatin,
employer_registration.e_contact_mobile
FROM
employer_registration
INNER JOIN city_state ON city_state.city_id = employer_registration.e_city
WHERE employer_id='".$_SESSION['employer_id']."'";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run))
{	?>
	<table width="800" border="1" cellpadding="5" class="tbl" style="border:1px solid #F96;">
    <caption style="font-size:30px; color:blue;">welcome <?php echo   $row['employer_name'] ; ?> </caption>
  <tr>
    <td>&nbsp; Employer Name</td>
    <td>&nbsp;<?php echo   $row['employer_name'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Email</td>
    <td>&nbsp;<?php echo  $row['e_email'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Company Telephone#</td>
    <td>&nbsp;<?php echo  $row['e_tel'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Company URL</td>
    <td>&nbsp;<?php echo   $row['e_url'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; City</td>
    <td>&nbsp;<?php echo   $row['city_name'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Address</td>
    <td>&nbsp;<?php echo   $row['e_address'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Company Profile</td>
    <td>&nbsp;<?php echo   $row['e_profile'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Office Location</td>
    <td>&nbsp;<?php echo   $row['e_office_locatin'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; Contact Person#</td>
    <td>&nbsp;<?php echo   $row['e_contact_mobile'] ; ?></td>
  </tr>
</table>
<?php }}
else{
echo '<script> window.location = "index.php"; </script>';	
}
//edit record
 ?>
 <table>
 <tr><td>
<a href="edit_emp.php?id=<?php echo $_SESSION['employer_id'];?>"><img src="images/edit_record.jpg"/> </a>
<?php
if(isset($_GET['edit'])){
echo "<span style='color:green; font-size:34px;'>&nbsp;Record has been updated successfully</span>&nbsp;<img src='images/ok.png'/><br>
";

}


?> </td></tr></table>

<a href="change_password_emp.php?id=<?php echo $_SESSION['employer_id'];?>"><img src="images/change_password.jpg"/></a><?php
if(isset($_GET['change'])){
echo "<span style='color:green; font-size:34px;'>&nbsp;Password has been changed successfully</span>&nbsp;<img src='images/ok.png'/><br>
";

}


?><br><br>



<?php
$query_3="SELECT
post_job.expiry_date,
post_job.company_name,
city_state.city_name,
job_role.job_name,
post_job.job_id
FROM
post_job
INNER JOIN city_state ON city_state.city_id = post_job.city
INNER JOIN job_role ON job_role.job_id = post_job.job_role
WHERE employer_id='".$_SESSION['employer_id']."'";
$run_3 = mysqli_query($con, $query_3);
?>
<span style="color:blue; font-size:28px;">Your Posted Jobs and Their Candidates</span><br>


<table border="1">
<tr style="background-color:#999;">
<th>Serial No</th>
<th>Company Name</th>
<th>City</th>
<th>Job role</th>
<th>Expiry Date</th>
<th>No of Applicants</th>

</tr>

<?php
$i = 1;
while ($row_3 = mysqli_fetch_array($run_3))
{	?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row_3['company_name']; ?></td>
<td><?php echo $row_3['city_name']; ?></td>
<td><?php echo $row_3['job_name']; ?></td>
<td><?php echo $row_3['expiry_date']; ?></td>
<td>
<?php
$job_id = $row_3['job_id'];
//echo "job id".$job_id ;
$apply = mysqli_query($con, "SELECT * FROM apply WHERE job_id = '$job_id'");
$apply_count = mysqli_num_rows($apply);

echo "(".$apply_count.")";
echo '<a href="show_applicant_emp.php?id='.$job_id.'"> Applicant Detial </a>';
?>
</td>
</tr>

<?php $i++; } ?> 
</table>
<?php include("include/footer.php"); ?>
</body>
</html>

