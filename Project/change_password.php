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

<?php

if(isset($_SESSION ['js_id'])){
?>

<?php
include("include/connect.php");
if(isset($_POST['submit'])){
$old_pwd = $_POST['old_password'];
$new_pwd = $_POST['new_password'];

$chk_old = mysqli_query($con,"SELECT * FROM  j_s_reg WHERE password = '$old_pwd' AND js_id='".$_SESSION ['js_id']."' ");
if(mysqli_num_rows($chk_old) == 1){

$chng_pwd = mysqli_query($con,"UPDATE j_s_reg SET password='$new_pwd' WHERE js_id='".$_SESSION ['js_id']."'");
if($chng_pwd){

//header("location: applicant_panel.php?action=1");
echo '<script>window.location= "applicant_panel.php?pwd=1"</script>';

}

}
else{
echo "<span style='color:red;'>Old Password Is Invalid</span>";
}
}
?>

<form action="" method="post" id="change_password">
<table width="600" border="1">
<caption>
CHANGE PASSWORD</caption>
  <tr>
    <td>&nbsp;Old Password</td>
    <td>&nbsp;<input type="password" name="old_password"/></td>
  </tr>
  <tr>
    <td>&nbsp;New Password</td>
    <td>&nbsp;<input type="password" name="new_password"/></td>
  </tr>
  <tr>
    <td>&nbsp;Re-enter Password</td>
    <td>&nbsp;<input type="password" name="confirm_password"/></td>
  </tr>
<tr> <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td></tr>
</table>

</form>


<?php } ?>
<?php include("include/footer.php"); ?>
</div>
	</body>
</html>

  <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#change_password").validate({
		rules: {
			  
    new_password:"required",
	confirm_password:"required"
		},
		messages:{
			new_password:"</br><b>new_password required</b>",
	confirm_password:"</br><b>confirm_password required</b>",
	}	
	
	});
		});
	
	</script>
    <style type="text/css">
    
	.error  {
		color: red;
	}
	.l_jobs{
	width:210px;
	}
</style>