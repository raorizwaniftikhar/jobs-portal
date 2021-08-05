

<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
        <script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<title>Jobs UAE</title>
	</head>
	<body>
		<div class="container">
			<?php include("include/header.php"); ?>
			<?php include("include/left_side.php"); ?>
			<?php include("include/right_side.php"); ?>	
<?php include("include/connect.php");
$id = $_GET['id'];
$sql="SELECT
j_s_reg.js_id,
j_s_reg.email,
j_s_reg.`password`,

j_s_reg.first_name,
j_s_reg.last_name,
j_s_reg.mobile_no,
j_s_reg.gender,
j_s_reg.birth_day,
j_s_reg.marital_status,
j_s_reg.visa_type,
j_s_reg.driving_license,
j_s_reg.h_academic,
j_s_reg.picture,
j_s_reg.country,
j_s_reg.religion
FROM
j_s_reg
WHERE js_id='$id'";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

	 $email_id=$row['email'];
	 $first_name=$row['first_name'];
	 $last_name=$row['last_name'];
	 $mob_number=$row['mobile_no'];
	 $gender=$row['gender'];
 $date=$row['birth_day'];
 $m_status=$row['marital_status'];
	 $visa_type=$row['visa_type'];
  $driving_license=$row['driving_license'];
	 $religion=$row['religion'];
	 $country=$row['country'];
	 $h_academic=$row['h_academic'];
 $picture=$row['picture'];

?>

<table width="700" border="1" cellspacing="20">
  <caption>
    edit record
  </caption>
<form name="reg_form" action="edit_exe.php" method="post" enctype="multipart/form-data" >

<input type="hidden" name="id" value="<?php echo $id; ?> "> 
 <!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input name="email_id"  type="email" maxlength="100" class="hw" value="<?php echo $email_id; ?>"  /></td>
</tr>
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" maxlength="30" class="hw" value="<?php echo $first_name; ?>" />
</td>
</tr>


<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="last_name" maxlength="30" class="hw" value="<?php echo $last_name; ?>"/>
</td>
</tr>

<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input name="mob_number" type="tel"  maxlength="15" class="hw" value="<?php echo $mob_number; ?>"/>

</td>
</tr>

 <!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
<select name="gender"class="js_select">

<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
  <option value="Female">Female</option>
<option value="Male">Male</option>
</select>

</td>
</tr>
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>D.O.B</td>
<td>
<input name="date" type="date" class="hw" value="<?php echo $date; ?>"/>
</td>
</tr>


<tr> <td>Marital status</td>
<td>
<select name="marital_status"class="js_select">

	<?php 
$m_status1 = mysqli_query($con,"Select * from marital_status where marital_s_id = '".$m_status."'");
$m_status1_rows = mysqli_fetch_array($m_status1);
?>
<option value="<?php echo $m_status1_rows['marital_s_id']; ?>"><?php echo $m_status1_rows['marital_s_name']; ?>
</option>



<?php 
$m_status2 = mysqli_query($con,"Select * from marital_status");
$m_status2_row2 = mysqli_fetch_array($m_status1);

while($m_status2_row2 = mysqli_fetch_array($m_status2)){ ?>
<option value="<?php echo $m_status2_row2['marital_s_id']; ?>"><?php echo $m_status2_row2['marital_s_name']; ?></option>
<?php } ?>
</select>
</td></tr>


<tr> <td>visa details</td>
<td>
 <select name="visa_type" class="js_select">

		<?php 
$visa_type1 = mysqli_query($con,"Select * from visa_type where visa_type_id = '".$visa_type."'");
$visa_type1_rows = mysqli_fetch_array($visa_type1);
?>
<option value="<?php echo $visa_type1_rows['visa_type_id']; ?>"><?php echo $visa_type1_rows['visa_type_name']; ?>
</option>



<?php 
$visa_type2 = mysqli_query($con,"Select * from visa_type");
$visa_type2_row2 = mysqli_fetch_array($visa_type1);

while($visa_type2_row2 = mysqli_fetch_array($visa_type2)){ ?>
<option value="<?php echo $visa_type2_row2['visa_type_id']; ?>"><?php echo $visa_type2_row2['visa_type_name']; ?></option>
<?php } ?>
</select>
 </td></tr>

<tr> <td>DRIVING LICENCE</td>
<td>
<select name="driving_license"class="js_select">

		<?php 
$driving_license1 = mysqli_query($con,"Select * from driving_license where driving_lic_id = '".$driving_license."'");
$driving_license1_rows = mysqli_fetch_array($driving_license1);
?>
<option value="<?php echo $driving_license1_rows['driving_lic_id']; ?>"><?php echo $driving_license1_rows['driving_lic_type']; ?>
</option>



<?php 
$driving_license2 = mysqli_query($con,"Select * from driving_license");
$driving_license2_row2 = mysqli_fetch_array($driving_license1);

while($driving_license2_row2 = mysqli_fetch_array($driving_license2)){ ?>
<option value="<?php echo $driving_license2_row2['driving_lic_id']; ?>"><?php echo $driving_license2_row2['driving_lic_type']; ?></option>
<?php } ?>
</select>
 </td></tr>


<tr> <td>NATIONALITY</td>
<td>

<select name="country">

<?php 
$countrys = mysqli_query($con,"Select * from country where country_id = '".$country."'");
$courty_rows = mysqli_fetch_array($countrys);
?>
<option value="<?php echo $courty_rows['country_id']; ?>"><?php echo $courty_rows['country_name']; ?>
</option>
<?php 
$country2 = mysqli_query($con,"Select * from country");
$courty_row2 = mysqli_fetch_array($countrys);

while($courty_rows2 = mysqli_fetch_array($country2)){ ?>
<option value="<?php echo $courty_rows2['country_id']; ?>"><?php echo $courty_rows2['country_name']; ?></option>
<?php } ?>
</select>
 </td></tr>





<tr> <td>RELIGION</td>
<td>

<select name="religion">

<?php 
$religions = mysqli_query($con,"Select * from religion where religion_id = '".$religion."'");
$religion_rows = mysqli_fetch_array($religions);
?>
<option value="<?php echo $religion_rows['religion_id']; ?>"><?php echo $religion_rows['religion_name']; ?>
</option>



<?php 
$religion2 = mysqli_query($con,"Select * from religion");
$religion_row2 = mysqli_fetch_array($religions);

while($religion_rows2 = mysqli_fetch_array($religion2)){ ?>
<option value="<?php echo $religion_rows2['religion_id']; ?>"><?php echo $religion_rows2['religion_name']; ?></option>
<?php } ?>
</select>
 </td></tr>


<tr> <td> HIGHEST ACADEMIC<br>
 ACHIVEMENT</td>
<td><select name="h_academic" class="js_select">
<?php 
$h_academic1 = mysqli_query($con,"Select * from highest_academic_achievement where degree_id = '".$h_academic."'");
$h_academic1_rows = mysqli_fetch_array($h_academic1);
?>
<option value="<?php echo $h_academic1_rows['degree_id']; ?>"><?php echo $h_academic1_rows['degree_name']; ?>
</option>



<?php 
$h_academic2 = mysqli_query($con,"Select * from highest_academic_achievement");
$h_academic2_row2 = mysqli_fetch_array($h_academic1);

while($h_academic2_row2 = mysqli_fetch_array($h_academic2)){ ?>
<option value="<?php echo $h_academic2_row2['degree_id']; ?>"><?php echo $h_academic2_row2['degree_name']; ?></option>
<?php } ?>
</select></td></tr>

<tr> <td colspan="2" align="center"><input type="submit" name="submit">
<input type="reset" name="reset"></td>
</tr>
</form>
</table>
</div>
	</body>
</html>