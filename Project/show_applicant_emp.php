<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
        
        
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<meta charset="utf-8">
		<title>Jobs UAE</title>
	</head>
	<body>
		<div class="container">
			<?php include("include/header.php"); ?>
			<?php include("include/left_side.php"); ?>
<table width="600" border="1">
  <tr>
  <td>Serial No</td>
    <td>&nbsp; Name</td>
    <td>&nbsp;Gender</td>
    <td>&nbsp;D.O.B</td>
    <td>&nbsp;Country</td>
    <td>&nbsp;Highest Degree</td>
    <td>&nbsp;CV Download</td>
  </tr>
 
  <?php include("include/connect.php");
 $id = $_GET['id'];
  $applicant = mysqli_query($con, "SELECT
apply.js_id,
j_s_reg.first_name,
j_s_reg.gender,
j_s_reg.birth_day,
j_s_reg.h_academic,
country.country_name,
cv.cv_id,
cv.cv_original_name,
cv.cv_name
FROM
apply
INNER JOIN j_s_reg ON j_s_reg.js_id = apply.js_id
INNER JOIN country ON country.country_id = j_s_reg.country
INNER JOIN cv ON cv.js_id = j_s_reg.js_id
WHERE
apply.job_id = '$id'");
$i= 1;
while ($applicant_row = mysqli_fetch_array($applicant)){
  ?>
  
   <tr>
   <td><?php echo $i; ?></td>
    <td><?php echo $applicant_row['first_name'];  ?></td>
    <td><?php echo $applicant_row['gender'];  ?></td>
    <td><?php echo $applicant_row['birth_day'];  ?></td>
    <td><?php echo $applicant_row['country_name'];  ?></td>
    <td><?php echo $applicant_row['h_academic'];  ?></td>
<td><img src="images/word_icon.png" width="20" >
<a href="download.php?name=<?php echo $applicant_row['cv_name'];  ?>">
<?php echo $applicant_row['cv_original_name'];  ?>
</a>

</td>
  </tr>
  <?php $i++; } ?>
</table>

	<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>