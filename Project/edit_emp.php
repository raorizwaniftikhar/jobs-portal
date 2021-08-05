<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
        
        
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<meta charset="utf-8">
         <style> 
		.tbl tr td
		{
			border:1px solid #F96;
			font-size:25px;
		}
		.hw
{
	width:310px;
	height:40px;
	font-size:21px;
}
		.hwtextarea
{
	width:310px;
	height:90px;
	font-size:21px;
}
		</style>
		<title>Jobs UAE</title>
	</head>
	<body>
		<div class="container">
			<?php include("include/header.php"); ?>
			<?php include("include/left_side.php"); ?>
<?php include("include/connect.php");
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

 $employer_name=$row['employer_name'];
 $e_email=$row['e_email'];
 $e_tel=$row['e_tel'];
 $e_url=$row['e_url'];
 $e_city=$row['city_name'];
 $e_address=$row['e_address'];
 $e_profile=$row['e_profile'];
 $e_office_locatin=$row['e_office_locatin'];
 $e_contact_mobile=$row['e_contact_mobile'];
?>
<table width="800" border="1" cellpadding="5" class="tbl" style="border:1px solid #F96;">
  <caption class="cap">
    Edit Record
  </caption>
<form name="reg_form" action="employer/edit_form_exe.php" method="post" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $id; ?> "> 
<!----- employer  Name  ---------------------------------------------------------->
<tr>
<td>EMPLOYER NAME </td>
<td><input name="employer_name" type="text"  maxlength="100" class="hw"/value="<?php echo $employer_name; ?>">
</td>
</tr>
<!----- Email Id ---------------------------------------------------------->
<tr>
<td> EMAIL </td>
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
<td><textarea name="e_address" cols="30" rows="4" placeholder="company address" class="hwtextarea" ><?php echo $e_address; ?></textarea></td>
</tr>

<!----- company profile ---------------------------------------------------------->
<tr>
<td>COMPANY PROFILE <br /><br /><br /></td>
<td><textarea name="e_profile" cols="30" rows="4" placeholder="company profile" class="hwtextarea"><?php echo $e_profile; ?></textarea></td>
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

<tr><td colspan="2" align="center">
<input type="submit" name="submit" style="width:100px; height:30px;  background-color:#F96; border-radius:7px;">
<input type="reset" name="reset" style="width:100px; height:30px; background-color:#F96; border-radius:7px;">
</td>
</tr>

</form>
</table>

		<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>