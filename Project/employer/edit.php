<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php include("../include/connect.php");
$id = $_GET['id'];
$sql ="SELECT
city_state.city_name,
employer_registration.employer_id,
employer_registration.employer_name,
employer_registration.e_email,
employer_registration.e_tel,
employer_registration.e_url,
employer_registration.e_city,
employer_registration.e_address,
employer_registration.e_profile,
employer_registration.e_office_locatin,
employer_registration.e_contact_mobile
FROM
employer_registration
INNER JOIN city_state ON city_state.city_id = employer_registration.e_city
 WHERE employer_id ='$id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo $employer_name=$row['employer_name'];
echo $e_email=$row['e_email'];
echo $e_tel=$row['e_tel'];
echo $e_url=$row['e_url'];
echo $e_city=$row['city_name'];
echo $e_address=$row['e_address'];
echo $e_profile=$row['e_profile'];
echo $e_office_locatin=$row['e_office_locatin'];
echo $e_contact_mobile=$row['e_contact_mobile'];
?>
<table width="600" border="1">
  <caption>
    edit record
  </caption>
<form name="reg_form" action="edit_form_exe.php" method="post" enctype="multipart/form-data" >
<tr> <td><input type="hidden" name="id" value="<?php echo $id; ?> "></td></tr> 
<!----- employer  Name  ---------------------------------------------------------->
<tr>
<td>EMPLOYER NAME :</td>
<td><input name="employer_name" type="text"  maxlength="100" class="hw"/value="<?php echo $employer_name; ?>">
</td>
</tr>
<!----- Email Id ---------------------------------------------------------->
<tr>
<td> EMAIL :</td>
<td><input name="e_email" type="text" placeholder="email" maxlength="100" class="hw" value="<?php echo $e_email; ?>"/></td>
</tr>
 <!----- OFFICE TELEPHONE  ---------------------------------------------------------->
<tr>
<td>OFFICE TELEPHONE </td>
<td><input name="e_tel" type="tel" placeholder="office telephone" maxlength="30" class="hw"value="<?php echo $e_tel; ?>"/>

</td>
</tr>

<!----- website url ----------------------------------------------------------->
<tr>
<td>WEBSITE URL</td>
<td><input name="e_url" type="url" placeholder="http://" class="hw" value="<?php echo $e_url; ?>">
</td>
</tr>

<!----- company Address ---------------------------------------------------------->
<tr>
<td>COMPANY ADDRESS <br /><br /><br /></td>
<td><textarea name="e_address" cols="30" rows="4" placeholder="company address" ><?php echo $e_address; ?></textarea></td>
</tr>

<!----- company profile ---------------------------------------------------------->
<tr>
<td>COMPANY PROFILE <br /><br /><br /></td>
<td><textarea name="e_profile" cols="30" rows="4" placeholder="company profile"><?php echo $e_profile; ?></textarea></td>
</tr>

<!----- office location ---------------------------------------------------------->
<tr>
<td>OFFICE LOCATION</td>
<td><input name="e_office_locatin" type="text" placeholder="office location" maxlength="100" class="hw" value="<?php echo $e_office_locatin; ?>"/>

</td>
</tr>

<!----- mobile ---------------------------------------------------------->
<tr>
<td>MOBILE</td>
<td><input name="e_contact_mobile" type="tel" placeholder="c_c_mobile#" maxlength="30" class="hw" value="<?php echo $e_contact_mobile; ?>"/>

</td>
</tr>

<tr><td>
<input type="submit" name="submit">
</td>
</tr>

</form>
</table>

</body>
</html>