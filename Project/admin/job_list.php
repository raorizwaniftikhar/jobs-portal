<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("include/connect.php");

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
INNER JOIN city_state ON city_state.city_id = post_job.city");
//$job_result = ( $job);

?>
<table border="1" cellpadding="10" width="735">
<caption style="font-size:30px;">JOB SUMMARY:</caption>
<tr><th>Comany Name</th>
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
<td><a href="?page=job_detail&id=<?php echo $row['job_id']; ?>">Details</a></td>
</tr>
<?php }?>


</table>
  
</body>
</html>