


<?php
if(isset($_POST['submit_mult'])){
include("include/connect.php");
//@$hidden_id = $_POST['hidden_id'];
//echo $hidden_id;

$id=$_POST['selector'];

$N = count($id);
if ($N >0){
for($i=0; $i < $N; $i++)
{
  mysqli_query($con, "DELETE FROM academic_info WHERE academic_id='$id[$i]' ");
   //mysql_query("DELETE FROM acadimic_info WHERE member_id='$id[$i]' AND academic_id = '$hidden_id' ");

header ("location: applicant_panel.php?delete=$N");
  }
}
else{

header ("location: applicant_panel.php?uncheck=1");
 }
 mysqli_close();
 
}
?>
