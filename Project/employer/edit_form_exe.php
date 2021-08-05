<?php
if(isset($_POST['submit']))
{
$id = $_POST['id'];
echo $id;
$employer_name = htmlspecialchars(addslashes($_POST['employer_name']));
$e_email = htmlspecialchars(addslashes($_POST['e_email']));
$e_tel =htmlspecialchars(addslashes($_POST['e_tel']));
$e_url = htmlspecialchars(addslashes($_POST['e_url']));
$e_address = htmlspecialchars(addslashes($_POST['e_address']));
$e_profile = htmlspecialchars(addslashes($_POST['e_profile']));
$e_office_locatin = htmlspecialchars(addslashes($_POST['e_office_locatin']));
$e_contact_mobile = htmlspecialchars(addslashes($_POST['e_contact_mobile']));
include("../include/connect.php");
$sql_update="UPDATE employer_registration SET  employer_id='$id',
employer_name='$employer_name',
e_email='$e_email',
e_tel='$e_tel',
e_url='$e_url',
e_address='$e_address',
e_profile='$e_profile',
e_office_locatin='$e_office_locatin',
e_contact_mobile='$e_contact_mobile'
where employer_id='$id' ";
echo $e_office_locatin;

$result_update=mysqli_query($con,$sql_update);
if($result_update)
{
header("location: ../employer_panel.php?edit=1");
}
else
{
echo "data is not  updated";
}
}
?>