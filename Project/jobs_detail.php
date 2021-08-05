<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
		<title>Jobs UAE job details</title>
        <style>
.job_summary tr td
{
	border: 2px solid #F96;
	font-size:24px;
}
</style>
	</head>
	<body>
		<div class="container">
			<?php include("include/header.php"); ?>
			<?php include("include/left_side.php"); ?>
			<?php include("include/right_side.php"); ?>



<?php
$job_id = $_GET['id'];
include("include/connect.php");

$job = mysqli_query($con, "SELECT
post_job.job_id,
post_job.company_name,
post_job.vacancies,
post_job.job_description,
post_job.salary_method,
post_job.salary_range,
post_job.gander,
post_job.age_limit,
post_job.expiry_date,
post_job.commitment,
city_state.city_name,
industry.industry_name,
job_role.job_name,
experience.experience_name,
career_level.career_name,
company_type.company_type_name
FROM
post_job
INNER JOIN city_state ON city_state.city_id = post_job.city
INNER JOIN industry ON industry.industry_id = post_job.industry
INNER JOIN job_role ON job_role.job_id = post_job.job_role
INNER JOIN experience ON experience.experience_id = post_job.experience
INNER JOIN career_level ON career_level.career_id = post_job.career_level
INNER JOIN company_type ON post_job.company_type = company_type.company_type_id

 WHERE post_job.job_id = '$job_id'");
//$job_result = ( $job);
$row = mysqli_fetch_array($job);
?>
<table border="1" cellpadding="7"  width="735" class="job_summary">
<caption style="font-size:30px; color:blue;">JOB DETAILS:</caption>
<tr><td>Company Name</td><td><?php echo $row['company_name']; ?></td></tr>
<tr><td>Company Type</td><td><?php echo $row['company_type_name']; ?></td></tr>
<tr><td>City</td><td><?php echo $row['city_name']; ?></td></tr>
<tr><td>Industry</td><td><?php echo $row['industry_name']; ?></td></tr>
<tr><td>Job Role</td><td><?php echo $row['industry_name']; ?></td></tr>
<tr><td>Vacancies</td><td><?php echo $row['vacancies']; ?></td></tr>
<tr><td>job description</td><td><?php echo $row['job_description']; ?></td></tr>
<tr><td>Salary Method</td><td><?php echo $row['salary_method']; ?></td></tr>
<tr><td>Salary Range</td><td><?php echo $row['salary_range']; ?></td></tr>
<tr><td>Gander</td><td><?php echo $row['gander']; ?></td></tr>
<tr><td>Age Limit</td><td><?php echo $row['age_limit']; ?></td></tr>
<tr><td>Experience</td><td><?php echo $row['experience_name']; ?></td></tr>
<tr><td>Expiry Date</td><td><?php echo $row['expiry_date']; ?></td></tr>
<tr><td>Career level </td><td><?php echo $row['career_name']; ?></td></tr>
<tr><td>Commitment</td><td><?php echo $row['commitment']; ?></td></tr>

 <tr><td colspan="2" align="center"><a href="apply.php?id=<?php echo $job_id; ?>"><img src="images/apply.jpg" height="80" width="420"></a></td></tr>
</table>


	<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>
