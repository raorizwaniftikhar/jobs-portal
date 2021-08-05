<?php
$id = $_GET['id'];
if(isset($id)){
?>
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
			<?php include("include/right_side.php"); ?>	

<?php
include("include/connect.php");
if(isset($_POST['submit'])){
$old_pwd = $_POST['old_password'];
$new_pwd = $_POST['new_password'];

$chk_old = mysqli_query($con,"SELECT * FROM  employer_registration WHERE password = '$old_pwd' AND employer_id='".$_SESSION ['employer_id']."' ");
if(mysqli_num_rows($chk_old) == 1){

$chng_pwd = mysqli_query($con,"UPDATE employer_registration SET password='$new_pwd' WHERE employer_id='".$_SESSION ['employer_id']."'");
if($chng_pwd){
//header("location:employer_panel.php?change=1");
echo '<script>window.location="employer_panel.php?change=1";</script>';
}

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
<tr> <td colspan="2" align="center"><input type="submit" name="submit" value="submit">
</table>

</form>


<?php } ?>
		<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>

	</script>
    <style type="text/css">
    
	.error  {
		color: red;
	}
	.l_jobs{
	width:210px;
	}
</style>





 <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#change_password").validate({
		rules: {
			  
    old_password:" required",
	new_password:"required",
	confirm_password:"required"
	
		},
		messages:{
			old_password:"</br><b>old_password required</b>",
	new_password:"</br><b>new_password required</b>",
	confirm_password:"</br><b>confirm_password required</b>",
	}	
	
	});
		});
	
	</script>