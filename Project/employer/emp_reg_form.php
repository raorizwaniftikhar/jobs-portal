<style type="text/css">
.emp_h3
{
	font-family: Calibri;
	font-size: 22pt; 
	font-style: normal; 
	font-weight: bold; 
	
	text-align: center;
	text-decoration: underline 
}
.emp_table
{
	font-family:Calibri;

	font-size: 15pt;
	font-style: normal;

	border-collapse:separate; 
	border: 2px solid navy
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
table.inner{border: 0px}
</style>

<h3 class="emp_h3">Employer Registration</h3>
<form action="" method="post" id="employer">
 
<table align="center" cellpadding = "6" class="emp_table"  width="900" border="1">
 <tr> <td colspan="2">
 Already have a <span style="color:blue;">Jobs UAE </span>account? please <a href="index.php" class="sign_in">sign in.</a>
 </td></tr>
 
  <!----- sign in and register picture ----------------------------------------------------------> 
 <tr><td colspan="2" align="center">
 <a href="#"><img src="images/register.png" height="50" width="200"></a>
 <a href="index.php"><img src="images/sign_in.png" height="50" width="200"></a>
 
<!----- employer  Name  ---------------------------------------------------------->
<tr>
<td>EMPLOYER NAME :</td>
<td><input name="employer_name" type="text" required class="hw" placeholder="company name" maxlength="100" id="employer_name"/>

</td>
</tr>

<!----- Password ---------------------------------------------------------->
<tr>
<td>PASSWORD</td>
<td><input name="password"  type="password" required class="hw" placeholder="Enter Password" maxlength="30" id="password" /></td>
</tr>
<!----- Confirm Password ---------------------------------------------------------->
<tr>
<td>CONFIRM PASSWORD</td>
<td><input name="confirm_password" type="password" required class="hw"  placeholder="Confirm Password" maxlength="30" id="confirm_password"/></td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td> EMAIL :</td>
<td><input name="e_email" type="text" required class="hw" placeholder="email" maxlength="100" id="e_email" /></td>
</tr>
 


<!----- OFFICE TELEPHONE  ---------------------------------------------------------->
<tr>
<td>OFFICE TELEPHONE </td>
<td><input name="e_tel" type="tel" required class="hw" placeholder="office telephone" maxlength="30" id="e_tel"/>

</td>
</tr>
 
<!----- website url ----------------------------------------------------------->
<tr>
<td>WEBSITE URL</td>
<td><input name="e_url" type="url" placeholder="http://" class="hw" id="e_url">
</td>
</tr>
 <!----- Select City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><?php 
	include("include/connect.php");
	$query_c="select * from city_state";
	$result_c=mysqli_query($con,$query_c);
	echo '<select name="e_city" id="e_city">';
	echo '<option value="" selected="selected"> - - - Select City/State - - -</option>';
	while($row=mysqli_fetch_array($result_c))
	{
		echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
	}
	echo '</select>';
	
	
	?>
</td>
</tr>

<!----- company Address ---------------------------------------------------------->
<tr>
<td>COMPANY ADDRESS <br /><br /><br /></td>
<td><textarea name="e_address" cols="30" rows="4" required placeholder="company address" id="e_address" ></textarea></td>
</tr>

<!----- company profile ---------------------------------------------------------->
<tr>
<td>COMPANY PROFILE <br /><br /><br /></td>
<td><textarea name="e_profile" cols="30" rows="4" required placeholder="company profile" id="e_profile"></textarea></td>
</tr>


<!----- office location ---------------------------------------------------------->
<tr>
<td>OFFICE LOCATION</td>
<td><input name="e_office_locatin" type="text" required class="hw" placeholder="office location" maxlength="100" id="e_office_locatin" />

</td>
</tr>
<!----- mobile ---------------------------------------------------------->
<tr>
<td>MOBILE</td>
<td><input name="e_contact_mobile" type="tel" required class="hw" placeholder="c_c_mobile#" maxlength="30" id="e_contact_mobile" />

</td>
</tr>


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
<?php include("./include/connect.php");
if(isset($_POST['submit']))//check submit button press or not
{
	$employer_name= htmlspecialchars(addslashes($_POST['employer_name']));
    $password=htmlspecialchars(addslashes($_POST['password']));
    $confirm_password=htmlspecialchars(addslashes($_POST['confirm_password']));
	$e_email=htmlspecialchars(addslashes($_POST['e_email']));
	$e_tel=htmlspecialchars(addslashes($_POST['e_tel']));
	$e_url=htmlspecialchars(addslashes($_POST['e_url']));
	$e_city=htmlspecialchars(addslashes($_POST['e_city']));
	$e_address=htmlspecialchars(addslashes($_POST['e_address']));
	$e_profile=htmlspecialchars(addslashes($_POST['e_profile']));


	$e_office_locatin=htmlspecialchars(addslashes($_POST['e_office_locatin']));
	$e_contact_mobile=htmlspecialchars(addslashes($_POST['e_contact_mobile']));


$query="INSERT INTO employer_registration(employer_name,password,e_email,e_tel,e_url,e_city,e_address,e_profile,e_office_locatin,e_contact_mobile) values('$employer_name','$password','$e_email','$e_tel','$e_url','$e_city','$e_address','$e_profile','$e_office_locatin','$e_contact_mobile') "; 
 // mysqli_query()Perform queries against the database:
	  if(mysqli_query($con,$query))
	  { 
		  
echo "<script> alert('registered successfuly');</script>";
		  
		
	 }
	 else
	 {
		 echo "there is an error";
	 }
}
?>








 <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#employer").validate({
		rules: {
			  
    employer_name:{
                required: true,
				minlength: 5
               
            },
	password: {
                required: true,
                minlength: 5
            },
	    confirm_password: {
				required: true,
equalTo:password
},
	e_email: {
                required: true,
				email: true
               
            },  
	  e_tel:"required",
	e_url:"required" , 
	  e_city:"required",
	e_address:"required",
	   e_profile:"required",
	 e_office_locatin:"required",
	 e_contact_mobile:"required",
	
		},
		messages:{
employer_name:{
                required: "Please provide employer name",
                minlength: "name must be at least 5 characters"
            },
	password: {
                required: "Please provide a password",
                minlength: "password must be at least 5 characters"
            },
	    confirm_password:  {
                equalTo: "Your password does not match<img src='images/confirmation.png'>",required: "confirm password"
            },
	e_email:{
                required: "Please provide an email",
                email: "enter a valid email"
            },  
	  e_tel:"e_tel required",
	e_url:"e_url required" , 
	  e_city:"e_city required",
	e_address:"e_address required",
	   e_profile:"e_profile required",
	    e_office_locatin:"e_office_locatin required",
	 e_contact_mobile:"e_contact_mobile required",
	}	
	
	});
		});
	
	</script>

 