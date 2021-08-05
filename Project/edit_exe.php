<?php
if(isset($_POST['submit']))
{
$id = $_POST['id'];
echo $id; 
$email_id = htmlspecialchars(addslashes($_POST['email_id']));

$first_name = htmlspecialchars(addslashes($_POST['first_name']));

$last_name = htmlspecialchars(addslashes($_POST['last_name']));

$mob_number = htmlspecialchars(addslashes($_POST['mob_number']));

$gender = htmlspecialchars(addslashes($_POST['gender']));
$date = htmlspecialchars(addslashes($_POST['date']));

$m_status = htmlspecialchars(addslashes($_POST['marital_status']));

$visa_type = htmlspecialchars(addslashes($_POST['visa_type']));

$driving_license = htmlspecialchars(addslashes($_POST['driving_license']));

$country = htmlspecialchars(addslashes($_POST['country']));


$religion = htmlspecialchars(addslashes($_POST['religion']));


$h_academic = htmlspecialchars(addslashes($_POST['h_academic']));


include("include/connect.php");
$sql_update="UPDATE j_s_reg SET 

email='$email_id',
first_name='$first_name',
last_name='$last_name',
mobile_no='$mob_number',
gender='$gender',
birth_day='$date',
marital_status='$m_status',
visa_type='$visa_type',
driving_license='$driving_license',
country='$country',
religion='$religion',
h_academic='$h_academic' WHERE js_id='$id'";
echo "$h_academic";
$result_update=mysqli_query($con,$sql_update);
if($result_update)
{
echo "<style='color:green;'>data has been updated successfully</style>";
//header("location: applicant_panel.php?action=1");
echo '<script>window.location= "applicant_panel.php?updated=1"</script>';

}
else{
echo "data is not updated ";
}
}
?>
