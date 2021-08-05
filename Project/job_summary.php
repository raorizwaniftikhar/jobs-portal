<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
        
        <script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>

		<title>Jobs UAE job summary</title>
        
        <style>
.job_summary tr td
{
	border:10px thick #066;
	background-color:#999;
}
</style>
	</head>
	<body>
		<div class="container">
			<?php
			include("include/connect.php");
			 include("include/header.php"); ?>
			






<?php  if(isset($_POST['submit']))
{
$city=$_POST['city'];
$industry=$_POST['industry'];

$search_sql=mysqli_query($con,"SELECT
post_job.job_id,
post_job.employer_id,
post_job.company_name,
post_job.company_type,
post_job.job_role,
post_job.vacancies,
post_job.job_description,
post_job.salary_method,
post_job.salary_range,
post_job.gander,
post_job.age_limit,
post_job.expiry_date,
post_job.career_level,
post_job.commitment,
industry.industry_name,
city_state.city_name,
experience.experience_name
FROM
post_job
INNER JOIN city_state ON city_state.city_id = post_job.city
INNER JOIN industry ON industry.industry_id = post_job.industry
INNER JOIN experience ON experience.experience_id = post_job.experience
WHERE City_state.city_name LIKE  '%$city'
AND
industry.industry_name LIKE '%$industry'
");
?>
<table border="1"  width="735" class="job_summary">
<caption style="font-size:30px;">JOB SUMMARY</caption>
<tr><th>Company Name</th>
<th>City</th>
<th>Experience</th>
<th>Expiry Date</th>
<th>Details</th></tr>
<?php while ($row = mysqli_fetch_array($search_sql)){ ?>
<tr>
<td><?php echo $row['company_name']; ?></td>
<td><?php echo $row['city_name']; ?></td>
<td><?php echo $row['experience_name']; ?></td>
<td><?php echo $row['expiry_date']; ?></td>
<td><a href="jobs_detail.php?id=<?php echo $row['job_id']; ?>">Details</a></td>
</tr>
<?php }?>
</table>

<?PHP } else
{






$job_id = $_GET['id'];

$query5=mysqli_query($con, "SELECT * from industry where industry_id=$job_id");
$row2=mysqli_fetch_array($query5);
$job = mysqli_query($con, "SELECT
post_job.job_id,
post_job.company_name,
post_job.company_type,
post_job.vacancies,
post_job.job_description,
post_job.salary_method,
post_job.salary_range,
post_job.gander,
post_job.age_limit,
post_job.expiry_date,
post_job.commitment,
industry.industry_name,
job_role.job_name,
experience.experience_name,
career_level.career_name,
city_state.city_name
FROM
post_job
INNER JOIN industry ON industry.industry_id = post_job.industry
INNER JOIN experience ON experience.experience_id = post_job.experience
INNER JOIN job_role ON job_role.job_id = post_job.job_role
INNER JOIN career_level ON career_level.career_id = post_job.career_level
INNER JOIN city_state ON city_state.city_id = post_job.city
 WHERE post_job.industry = '$job_id'");
//$job_result = ( $job);

?>
<center><table border="1" cellpadding="10" width="730">
<caption style="font-size:30px;">JOB SUMMARY of <?php echo $row2['industry_name']; ?></caption>
<tr><th>Company Name</th>
<th>City</th>
<th>Experience</th>
<th>Expiry Date</th>
<th>Details</th></tr>
<?php while ($row = mysqli_fetch_array($job)){ ?>
<tr>
<td><?php echo $row['company_name']; ?></td>
<td><?php echo $row['city_name']; ?></td>
<td><?php echo $row['experience_name']; ?></td>
<td><?php echo $row['expiry_date']; ?></td>
<td><a href="jobs_detail.php?id=<?php echo $row['job_id']; ?>">Details</a></td>
</tr>
<?php }?>

<?php }?>
</table></center>
<br><br><br><br><br><br><br><br><br><br><br>


	<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>




