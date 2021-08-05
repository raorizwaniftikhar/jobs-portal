<?php
session_start();
if(isset($_SESSION ['employer_id'])){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
include("../include/connect.php");
if(isset($_POST['submit'])){
$old_pwd = $_POST['old_password'];
$new_pwd = $_POST['new_password'];

$chk_old = mysqli_query($con,"SELECT * FROM  employer_registration WHERE password = '$old_pwd' AND employer_id='".$_SESSION ['employer_id']."' ");
if(mysqli_num_rows($chk_old) == 1){

$chng_pwd = mysqli_query($con,"UPDATE employer_registration SET password='$new_pwd' WHERE employer_id='".$_SESSION ['employer_id']."'");
if($chng_pwd){
echo "Password has been change successfully";
}

}
}
?>

<form action="" method="post">
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
</body>
</html>

<?php } ?>