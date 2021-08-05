

<style type="text/css">
.js_table
{
	font-family: Calibri;
	font-size: 15pt;
	border-collapse:separate;
	border: 2px solid navy
}
.js_h3
{
	font-family: Calibri;
	font-size: 22pt; 
	font-style: normal; 
	font-weight: bold; 
	text-align: center;
	text-decoration: underline 
}

.hw
{
	width:250px;
	height:40px;
}
.sign_in
{
	color:green;
}
.sign_in:hover
{
		text-decoration:underline;
}





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

</style>
<h3 class="js_h3">Job Seeker Registration</h3>
<form id="reg_form" action="job_seeker_page.php" method="post" enctype="multipart/form-data">
 
<table align="center" cellpadding = "5" class="js_table" width="900" height="750" border="1">
 <tr> <td colspan="2">
 Already have a <span style="color:red;">Jobs UAE </span>account? please <a href="index.php" class="sign_in">sign in.</a>
 </td></tr>
 <!----- sign in and register picture ----------------------------------------------------------> 
 <tr><td colspan="2" align="center">
 <a href="#"><img src="images/register now.png" height="50" width="200"></a>
 <a href="index.php"><img src="images/sign_in.png" height="50" width="200"></a>
 <!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input  name="email_id"  id="email_id" type="email" placeholder="Email_Id" maxlength="100" class="hw"  /></td>

</tr>

<!----- Password ---------------------------------------------------------->
<tr>
<td>PASSWORD</td>
<td><input  type="password"  id="password" name="password" placeholder="Enter Password" maxlength="30" class="hw" /></td>
</tr>
<!----- Confirm Password ---------------------------------------------------------->
<tr>
<td>CONFIRM PASSWORD</td>
<td><input type="password" id="confirm_password" name="confirm_password"  placeholder="Confirm Password" maxlength="30" class="hw"/> </td>
</tr>

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" id="first_name"  placeholder="First_Name" maxlength="30" class="hw"/>

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" id="last_name" name="last_name"  placeholder="Last_Name" maxlength="30" class="hw"/>

</td>
</tr>
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input name="mob_number" id="mob_number" type="tel" placeholder="Mobile_Number" maxlength="15" class="hw"/>

</td>
</tr>
 <!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" id="gender" name="gender" value="Male" />
Female <input type="radio" id="gender" name="gender" value="Female" />
</td>
</tr>

 
<!----- Date Of Birth -------------------------------------------------------->

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input name="date" type="date" required max="1993-01-01" min="1950-01-01" >
</td>
</tr>
 
<!----- Marital Status -------------------------------------------------------->
<tr>
<td>MARITAL STATUS</td>
 
<td>
<?php 
	include("include/connect.php");
	$query2="select * from marital_status";
	$result=mysqli_query($con,$query2);
	echo '<select id="m_status" name="m_status" class="js_select">';
		echo '<option value="" selected="selected"> - - - - - Select Marital Status - - - - - </option>';

	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['marital_s_id'].'">'.$row['marital_s_name'].'</option>';
	}
	echo '</select>';
	
	
	?>
</td></tr>
 <!--visa details-->
 <tr> 
 <td>VISA DETAILS:</td>
 <td>
 <?php 
	$query2="select * from visa_type";
	$result=mysqli_query($con,$query2);
	echo '<select id="visa_type" name="visa_type" class="js_select">';
		echo '<option value="" selected="selected"> - - - - - Select Visa Type - - - - - </option>';

	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['visa_type_id'].'">'.$row['visa_type_name'].'</option>';
	}
	echo '</select>';
	
	
	?>
 </td>
 <!-----------DRIVING LICENCE----------------- ---->
 <tr>
 <td>DRIVING LICENCE</td>
<td><?php 
	$queryr="select * from driving_license";
	$result_r=mysqli_query($con,$queryr);
	echo '<select  name="driving_license" id="driving_license" class="js_select">';
		echo '<option value="" selected="selected"> - - - - Select Driving Licence - - -</option>';

	while($row=mysqli_fetch_array($result_r))
	{
		echo '<option value="'.$row['driving_lic_id'].'">'.$row['driving_lic_type'].'</option>';
	}
	echo '</select>';
	
	
	?>
 
 </td>
 
 </tr>




<!----- Country ---------------------------------------------------------->
<tr>
<td>NATIONALITY</td>
<td>
<?php 
	$query2="select * from country";
	$result=mysqli_query($con,$query2);
	echo '<select id="country" name="country" class="js_select">';
		echo '<option value="" selected="selected"> - - - - - Select Country - - - - - </option>';

	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
	}
	echo '</select>';
	
	
	?>
</td>

</tr>
<!----SELECT RELIGION--------------------------------------- ------------------->
<tr>
<td>SELECT RELIGION</td>
<td><?php 
	$queryr="select * from religion";
	$result_r=mysqli_query($con,$queryr);
	echo '<select  name="religion" id="religion" class="js_select">';
		echo '<option value="" selected="selected"> - - - - Select Religion - - -</option>';

	while($row=mysqli_fetch_array($result_r))
	{
		echo '<option value="'.$row['religion_id'].'">'.$row['religion_name'].'</option>';
	}
	echo '</select>';
	
	
	?>

</td></tr>

<!-----Highest Qualification--------------------------------------- ------------------->
<tr>
<td>HIGHEST ACADEMIC<br>
 ACHIVEMENT </td>
 <td><?php 
	$queryr="select * from highest_academic_achievement";
	$result_r=mysqli_query($con,$queryr);
	echo '<select  name="h_academic" id="h_academic" class="js_select">';
		echo '<option value="" selected="selected"> - - - Highest Academic Record  - - </option>';

	while($row=mysqli_fetch_array($result_r))
	{
		echo '<option value="'.$row['degree_id'].'">'.$row['degree_name'].'</option>';
	}
	echo '</select>';
	
	
	?></td></tr>
<!----- upload picture ---------------------------------------------------------->
<tr>
<td>UPLOAD PICTURE</td>
<td>
<input type="file" name="picture" id="picture" multiple/>
</td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input name="submit" type="submit" id="submit" value="Submit" >
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
	$email_id=$_POST['email_id'];
	  $password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	 $mob_number=$_POST['mob_number'];
	$gender=$_POST['gender'];

	 $date = $_POST['date'];
	
	 $m_status=$_POST['m_status'];
	 $visa_type=$_POST['visa_type'];
	 $religion=$_POST['religion'];
	 $driving_license=$_POST['driving_license'];
	
	$country=$_POST['country'];
	
	 $h_academic=$_POST['h_academic'];
	 $picture_name=$_FILES['picture']['name'];
	 $picture_type=$_FILES['picture']['type'];
	 $picture_size=$_FILES['picture']['size'];
	 $picture_tmp=$_FILES['picture']['tmp_name'];
	/* thes four parameters are added with image or video or file data  for these we use $_FILES variable*/
	 /*if($email_id=='' or $password=='' or $confirm_password==''
	 or $country=='')
	 {
		 echo " <script> alert('any field is empty')</script>";
		 exit();
	 }*/
	 /*if($picture_type=="image/jpeg" or $picture_type=="image/png" or $picture_type=="image/gif")
	 {
		 if($picture_size<=50000)
		 {
			 move_uploaded_file($picture_tmp,"upload/$picture_name");
		 }
			 else
			 {
				echo " <script> alert('size is larger')</script>"; 
			 }
	 }
	 
		 else
		 {
			 echo " <script> alert('image type is invalid')</script>";
		 }*/
		 
	 
	 $query= "insert into j_s_reg(email,password,first_name,last_name,mobile_no,gender,birth_day,marital_status,visa_type,driving_license,country,religion,h_academic,picture)
	 
	  values('$email_id','$password','$first_name','$last_name','$mob_number','$gender','$date','$m_status','$visa_type','$driving_license','$country','$religion','$h_academic','$picture_name')";
	  // mysqli_query()Perform queries against the database:
	  if($picture_type=="image/jpeg" or $picture_type=="image/png" or $picture_type=="image/gif")
	 {
		 if($picture_size<=250000)
		 {
			 move_uploaded_file($picture_tmp,"upload/$picture_name");
		 }
			 else
			 {
				echo " <script> alert('size is larger')</script>"; 
			 }
	 }
	  
	  
	  
	  
	  
	  if(mysqli_query($con,$query))
	  { ?>
     
               
echo "<script type="text/javascript">alert("you are registered successfully");</script>";

	 <?php }
}


 ?>



<script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#reg_form").validate({
		rules: {
			email_id: {
                required: true,
				email: true
               
            },
			password: {
                required: true,
                minlength: 5
            },
			confirm_password: {
				required: true,
equalTo:password
},
			first_name: "required",
			last_name: "required",
			mob_number: {
      required: true,
      digits: true
    },
			gender: "required",
			date: "required",
			m_status: "required",
			visa_type:"required",
			driving_license: "required",
			country: "required",
			religion: "required",
			h_academic: "required",
			picture: "required"
				
		},	
		messages: {
			email_id:{
                required: "Please provide an email",
                email: "enter a valid email"
            },
			password: {
                required: "Please provide a password",
                minlength: "password must be at least 5 characters"
            },
			confirm_password:  {
                equalTo: "Your password does not match<img src='images/confirmation.png'>",required: "confirm password"
            },
			first_name: "first_name",
			last_name: "last_name",
			mob_number: {
                required: "enter mobile no",digits: "enter digits only"
            },
			gender: "enter gender",
			date: "enter d.o.b",
			m_status: "m_status",
			visa_type:"required",
			driving_license: "driving_license",
			country: "country",
			religion: "religion",
			h_academic: "h_academic",
			picture: "picture"
			
		}	
	
	});
		});
	
	</script>

