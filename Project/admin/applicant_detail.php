
<?php
include("./include/connect.php");
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT
j_s_reg.js_id,
j_s_reg.email,
j_s_reg.`password`,

j_s_reg.first_name,
j_s_reg.last_name,
j_s_reg.mobile_no,
j_s_reg.gender,
j_s_reg.birth_day,
j_s_reg.picture,
marital_status.marital_s_name,
visa_type.visa_type_name,
driving_license.driving_lic_type,
country.country_name,
religion.religion_name,
highest_academic_achievement.degree_name
FROM
j_s_reg
INNER JOIN marital_status ON marital_status.marital_s_id = j_s_reg.marital_status
INNER JOIN visa_type ON visa_type.visa_type_id = j_s_reg.visa_type
INNER JOIN driving_license ON driving_license.driving_lic_id = j_s_reg.driving_license
INNER JOIN country ON country.country_id = j_s_reg.country
INNER JOIN religion ON religion.religion_id = j_s_reg.religion
INNER JOIN highest_academic_achievement ON highest_academic_achievement.degree_id = j_s_reg.h_academic

WHERE
j_s_reg.js_id = '$id'");

$row = mysqli_fetch_array($sql);

?>
<table width="800" border="1">
<tr><th style=" font-size:24px;">Welcome  Dear&nbsp; <?php echo  $row['first_name']; ?></th></tr>


<tr><td colspan="2"> Login Details<hr/></td></tr>
 <tr>
    <td>&nbsp;<a href="editpic.php?id=<?php //echo $_SESSION['js_id'];?>"> Change Logo </a></td>


    <td style="float:right;">&nbsp;<img src="upload/<?php echo  $row['picture']; ?> " height="105" width="90" ></td>
  </tr>
<tr>
    <td>&nbsp;Login Name</td>
    <td>&nbsp;<?php echo  $row['email'] ; ?></td>
  </tr>


  
  <tr>
    <td>&nbsp;First Name</td>
    <td>&nbsp;<?php echo  $row['first_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Last Name</td>
    <td>&nbsp;<?php echo $row['last_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Mobile#</td>
    <td>&nbsp;<?php echo   $row['mobile_no']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Gender</td>
    <td>&nbsp;<?php echo   $row['gender']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Date Of Birth</td>
    <td>&nbsp;<?php echo   $row['birth_day']; ?></td>
  </tr>
    <tr>
    <td>&nbsp;Marital Status</td>
    <td>&nbsp;<?php echo   $row['marital_s_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Visa Type</td>
    <td>&nbsp;<?php echo  $row['visa_type_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Driving License</td>
    <td>&nbsp;<?php echo   $row['driving_lic_type']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Country</td>
    <td>&nbsp;<?php echo  $row['country_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Religion</td>
    <td>&nbsp;<?php echo   $row['religion_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Highest Degree </td>
    <td>&nbsp;<?php echo  $row['degree_name']; ?></td>
  </tr>
    <tr>
    <td colspan="2" align="center"><a href="delete.php?js_id=<?php echo   $row['js_id'] ; ?>">Delete</a></td>
   
  </tr>
 
</table>




