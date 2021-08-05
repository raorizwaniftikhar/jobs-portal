<style type="text/css">
	.error {
		background:url("images/unchecked.gif") no-repeat 0px 0px;
		padding-left: 16px;
	}
	
	.error {
		color: red;
	}
	#warning {
		display: none;
		
	}
	.textbox
	{
		height:45px;
		width:270px;
	}
	.textbox1
	{
		height:25px;
		width:270px;
	}
	.tbl tr td
		{
			border:1px solid #F96;
			font-size:25px;
		}
</style>
<?php

include("include/connect.php");
@$employer_id=$_SESSION ['employer_id'];
$id1=$employer_id;
?>

<form action="" method="post" name="post_job" id="post_job">
<table width="900" border="1" align="center" cellpadding="7" class="tbl">
<caption class="cap"> POST JOB</caption>
 <tr> <td colspan="2">
<span style="font-size:24px; color:blue;"> First login then post a job please </span> <a href="index.php" 
class="sign_in" style="font-size:24px; text-decoration:underline;">sign in.</a>
 </td></tr>
 <!----- sign in and register picture ----------------------------------------------------------> 
 <tr><td colspan="2" align="center">
 <a href="employer_page.php"><img src="images/register.png" height="50" width="200"></a>
 <a href="index.php"><img src="images/sign_in.png" height="50" width="200"></a>
  <tr>
  
    <td>&nbsp;COMPANY NAME</td>
    <td><input type="text" name="company_name"  class="textbox" placeholder="company name"  /></td>
  </tr>
  <tr>
  <td>&nbsp;COMPANY TYPE</td>
  <td><?php 
	include("include/connect.php");
	$query_c_t="select * from company_type";
	$result_c_t=mysqli_query($con,$query_c_t);
	echo '<select name="company_type" class="textbox1">';
	echo '<option value="" selected="selected"> - - -Select One - - -</option>';
	while($row_c_t=mysqli_fetch_array($result_c_t))
	{
		echo '<option value="'.$row_c_t['company_type_id'].'">'.$row_c_t['company_type_name'].'</option>';
	}
	echo '</select>';
	
	
	?>
   </td>
   </tr>
   <tr>
    <td>&nbsp;CITY/STATE</td>
    <td>  <?php 
	include("include/connect.php");
	$query_c="select * from city_state";
	$result_c=mysqli_query($con,$query_c);
	echo '<select name="city" class="textbox1">';
	echo '<option value="" selected="selected"> - - -Select One - - -</option>';
	while($row=mysqli_fetch_array($result_c))
	{
		echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
	}
	echo '</select>';
	
	
	?>	</td>
  </tr>
  
    <tr>
    <td>&nbsp;INDUSTRY</td>
    <td>
    <?php 
	include("include/connect.php");
	$query2="select * from industry";
	$result=mysqli_query($con,$query2);
	echo '<select name="industry" class="textbox1">';
	echo '<option value="" selected="selected"> - - -Select One - - -</option>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['industry_id'].'">'.$row['industry_name'].'</option>';
	}
	echo '</select>';
	
	
	?></td>
  </tr>
  
  <tr>
    <td>&nbsp;JOB ROLE</td>
    <td>&nbsp;<?php 
	include("include/connect.php");
	$query2="select * from job_role";
	$result=mysqli_query($con,$query2);
	echo '<select name="job_role" class="textbox1">';
		echo '<option value="" selected="selected"> - - - - Select One - - -</option>';

	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['job_id'].'">'.$row['job_name'].'</option>';
	}
	echo '</select>';
	
	
	?></td>
  </tr>
  <tr>
    <td>&nbsp;VACANCIES(#)</td>
    <td>&nbsp;<input type="text" name="vacancies" class="textbox" placeholder="enter vacancies(#)"></td>
  </tr>
  <tr>
    <td>&nbsp;JOB DESCRIPTION</td>
    <td>&nbsp;<textarea  name="job_description" cols="35" rows="4" placeholder="RECRUITMENT NEEDS"></textarea></td>
  </tr>
 
  <tr>
    <td>&nbsp;SALARY(AED) Method</td>
    <td>&nbsp;
<select name="salary_method">
<option value="" selected="selected"> - - - - Select One - - - -</option>
<option value="Per Month">Per Month </option>
<option value="Per Year" > Per Year </option>
<option value="Per Week"> Per Week </option>
<option value="Per Hour"> Per Hour </option>
</select></td>
</tr>
<tr>
<td>&nbsp;SALARY RANGE</td>
<td><input type="text" name="salary_min"  class="salary_box" placeholder="Minimum"  />
<input type="text" name="salary_max"placeholder="Maximum"  /></td>
  </tr>
  <tr>
    <td>&nbsp;GENDER</td>
    <td>&nbsp;<select name="gander" class="textbox1">
<option value="" selected="selected"> - - - - Select Gender - - - -</option>
<option value=" Does not Matter"> Doesn't Matter </option>
<option value="Male"> Male </option>
<option value="Female"> Female </option>
</select> </td>
  </tr>
  <tr>
    <td>&nbsp;AGE LIMIT</td>
    <td>&nbsp;From:<select name="age_from">
<option value="">Year</option>
<?php
for ($x=18; $x<=65; $x++) {

echo "<option value='".$x."'> ".$x."</option>";
}
?>
</select>

To:<select name="age_to">
<option value="">Year</option>
<?php
for ($x=18; $x<=65; $x++) {

echo "<option value='".$x."'> ".$x."</option>";
}
?>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;WORK EXPERIENCE</td>
    <td>&nbsp;<?php 
	include("include/connect.php");
	$query4="select * from experience";
	$result4=mysqli_query($con,$query4);
	echo '<select name="experience" class="textbox1">';
	echo '<option value="" selected="selected">- - -Select One - - -</option>';
	while($row=mysqli_fetch_array($result4))
	{
		echo '<option value="'.$row['experience_id'].'">'.$row['experience_name'].'</option>';
	}
	echo '</select>';
	
	?></td>
  </tr>
  <tr>
    <td>&nbsp;EXPIRY DATE</td>
    <td>&nbsp;<select name="day">
<option value=""> Day </option>
<?php
for ($x=1; $x<=31; $x++) {

echo "<option value='".$x."'> ".$x."</option>";
}
?>
</select>
&nbsp;&nbsp;&nbsp;
<select name="month">
<option value=""> month </option>
<?php 
$month = array("Month" , "January" , "February" , "March" , "April" , "May" , "June" , "July" , "August" , "September" , "October" , "November" , "December");

for ($x=0; $x<=12; $x++) {

echo "<option value='".$x."'> ".$month[$x]." </option>";
}
?>
</select>
&nbsp;&nbsp;&nbsp;
<select name="year">
<option value=""> Year </option>
<?php 
for ($x=2014; $x<=2020; $x++) {

echo "<option value='".$x."'> ".$x." </option>";
}
?>
</select></td>
  </tr>
  <tr>
    <td>&nbsp;CAREER LEVEL</td>
    <td>&nbsp;<?php 
	include("include/connect.php");
	$query3="select * from career_level";
	$result3=mysqli_query($con,$query3);
	echo '<select name="career_level" class="textbox1">';
	echo '<option value="" selected="selected"> - - -Select One - - -</option>';
	while($row=mysqli_fetch_array($result3))
	{
		echo '<option value="'.$row['career_id'].'">'.$row['career_name'].'</option>';
	}
	echo '</select>';
	
	?></td>
  </tr>
 
  <tr>
  <td>&nbsp;COMMITMENT</td>
  <td><select name="commitment" class="textbox1">
<option value="" selected="selected"> - - - - Commitment - - - -</option>
<option value="Full Time">Full Time</option>
<option value="Part Time">Part Time</option>
<option value="Contract">Contract</option>
<option value="Temporary">Temporary</option>
</select>
</td>
</tr>
 <tr><td align="center" colspan="2" > <input type="submit" name="submit" value="submit">
 <input type="reset" value="Reset"></td>
 </tr>
</table>
</form>


<?php include("include/connect.php");

if(isset($employer_id)){
if(isset($_POST['submit']))//check submit button press or not
{
$company_name=$_POST['company_name'];
$company_type=$_POST['company_type'];
$city=$_POST['city'];
$industry=$_POST['industry'];
$job_role=$_POST['job_role'];
$vacancies=$_POST['vacancies'];
$job_description=$_POST['job_description'];
$salary_method=$_POST['salary_method'];
$salary_min=$_POST['salary_min'];
$salary_max=$_POST['salary_max'];

$salary_range=$salary_min."-".$salary_max;
$gander=$_POST['gander'];

$age_from=$_POST['age_from'];
$age_to=$_POST['age_to'];
$age_limit=$age_from."-".$age_to;

$experience=$_POST['experience'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$expiry_date = $year."-".$month."-".$day;

$career_level=$_POST['career_level'];
$commitment=$_POST['commitment'];
$query="INSERT INTO post_job(employer_id,company_name,company_type,city,industry,job_role,vacancies,job_description,salary_method,salary_range,gander,age_limit,experience,expiry_date,career_level,commitment)
values('$employer_id','$company_name','$company_type','$city','$industry','$job_role','$vacancies','$job_description','$salary_method','$salary_range','$gander','$age_limit','$experience','$expiry_date','$career_level','$commitment')";
 if(mysqli_query($con,$query))
	  {
		  echo"<script>alert('job has been posted successfully');</script>";
	  }
	 
	 
	  

?>
<?php }
}  ?>


<script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#post_job").validate({
		rules: {
			company_name: {
                required: true,
				minlength: 5
               
            },
			company_type: {
                required: true
              
            },

			city: "required",
			industry: "required",
		
			job_role: "required",
			vacancies: "required",
			job_description: "required",
			salary_method:"required",
			salary_min: "required",
			salary_max: "required",
			gander: "required",
			age_from: "required",
			age_to: "required",
			experience: "required",
			day: "required",
			month: "required",
			year: "required",
			career_level: "required",
			commitment: "required"
		
		},	
		messages: {
			company_name:{
                required: "Please provide company name",
                minlength: "enter at least 5 characters"
            },
			company_type: {
                required: "Please provide company type",
              minlength: "enter at least 5 characters"
            },
			
			city: "city name required",
			industry: "industry required",
			
			job_role: "job_role",
			vacancies: "vacancies",
			job_description: "job_description",
			salary_method:"salary_method",
			salary_min: "salary_min",
			salary_max: "salary_max",
			gander: "gander",
			age_from: "age_from",
			age_to: "age_to",
			experience: "experience",
			day: "day",
			month: "month",
			year: "year",
			career_level: "career_level",
			commitment: "commitment"
			
		}	
	
	});
		});
	
	</script>