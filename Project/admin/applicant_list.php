<style type="text/css">
.contact_us
{
	
	padding:20px;
}
.c_u_table
{
	float:left;
	margin-top:30px;
	font-size:24px;
}
</style>

<div class="contact_us">
<h1> Admin </h1>



<table border="1">
<tr align="center"> <th colspan="7"> applicant list</th></tr>
  <tr>
    <td>Sr.#</td><td>Name</td><td>Gander</td><td>Country</td><td>Qualification</td><td>Picture</td><td>More Detail</td>
  </tr>
  
<?php
 include("include/connect.php"); 
$sql = mysqli_query($con, "SELECT
j_s_reg.js_id,
j_s_reg.first_name,
j_s_reg.last_name,
j_s_reg.gender,
country.country_name,
highest_academic_achievement.degree_name,
j_s_reg.picture
FROM
j_s_reg
INNER JOIN country ON country.country_id = j_s_reg.country
INNER JOIN highest_academic_achievement ON highest_academic_achievement.degree_id = j_s_reg.h_academic
");

$i = 1;
while ($rows = mysqli_fetch_array($sql)){


?>  
  
  
  <tr>
<td><?php echo $i; ?></td>
<td><?php echo $rows['first_name'].' '.$rows['last_name'] ?></td>
<td><?php echo $rows['gender']; ?></td>
<td><?php echo $rows['country_name']; ?></td>
<td><?php echo $rows['degree_name']; ?></td>
<td><img src="upload/<?php echo $rows['picture']; ?>" height="100" width="150" /></td>
<td><a href="admin.php?page=applicant_detail&id=<?php echo $rows['js_id']; ?>">View </a></td>
  </tr>
    <?php $i++; }?>
</table>

</div>