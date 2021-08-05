
<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/about_us.css">
   <script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<meta charset="utf-8">
		<title>Jobs UAE</title>
        <style> 
		.tbl tr td
		{
			border:1px solid #F96;
			font-size:25px;
		}
		</style>
        
          <script type="text/javascript"><!--
    var formblock;
    var forminputs;
    function prepare() {
    formblock= document.getElementById('form_id');
    forminputs = formblock.getElementsByTagName('input');
    }
    function select_all(name, value) {
    for (i = 0; i < forminputs.length; i++) {
    // regex here to check name attribute
    var regex = new RegExp(name, "i");
    if (regex.test(forminputs[i].getAttribute('name'))) {
    if (value == '1') {
    forminputs[i].checked = true;
    } else {
    forminputs[i].checked = false;
    }
    }
    }
    }
    if (window.addEventListener) {
    window.addEventListener("load", prepare, false);
    } else if (window.attachEvent) {
    window.attachEvent("onload", prepare)
    } else if (document.getElementById) {
    window.onload = prepare;
    }
    //--></script>
	</head>
	<body>
		<div class="container">
<?php include("include/header.php");
 include("include/left_side.php");
  echo "<div class='about_us'>";
if(isset($_SESSION ['js_id'])){ 
include("include/connect.php");
//$js_id = $_SESSION ['js_id'];
$query="SELECT
j_s_reg.js_id,
j_s_reg.email,
j_s_reg.`password`,
j_s_reg.first_name,
j_s_reg.last_name,
j_s_reg.mobile_no,
j_s_reg.gender,
j_s_reg.birth_day,
j_s_reg.picture,
marital_status.marital_s_name,
visa_type.visa_type_name,
driving_license.driving_lic_type,
country.country_name,
religion.religion_name,
highest_academic_achievement.degree_name
FROM
j_s_reg
INNER JOIN marital_status ON marital_status.marital_s_id = j_s_reg.marital_status
INNER JOIN visa_type ON visa_type.visa_type_id = j_s_reg.visa_type
INNER JOIN driving_license ON driving_license.driving_lic_id = j_s_reg.driving_license
INNER JOIN country ON country.country_id = j_s_reg.country
INNER JOIN religion ON religion.religion_id = j_s_reg.religion
INNER JOIN highest_academic_achievement ON highest_academic_achievement.degree_id = j_s_reg.h_academic

WHERE
j_s_reg.js_id='".$_SESSION['js_id']."'";

$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run)){

?>
<table  width="980"   class="tbl" style="border:1px solid #F96;">
<tr><td colspan="2" style=" font-size:26px; color:blue;" align="center">Welcome  Dear&nbsp; <?php echo  $row['first_name']; ?></td></tr>



 <tr>
    <td >&nbsp;<a href="editpic.php?id=<?php echo $_SESSION['js_id'];?>"> <br>
<br>
<br>
Change Picture </a></td>


    <td style="float:left;">&nbsp;<img src="upload/<?php echo  $row['picture']; ?> " height="105" width="90" ></td>
  </tr>
<tr>
    <td>&nbsp;Login Name</td>
    <td>&nbsp;<?php echo  $row['email'] ; ?></td>
  </tr>


  
  <tr>
    <td>&nbsp;First Name</td>
    <td>&nbsp;<?php echo  $row['first_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Last Name</td>
    <td>&nbsp;<?php echo $row['last_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Mobile#</td>
    <td>&nbsp;<?php echo   $row['mobile_no']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Gender</td>
    <td>&nbsp;<?php echo   $row['gender']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Date Of Birth</td>
    <td>&nbsp;<?php echo   $row['birth_day']; ?></td>
  </tr>
    <tr>
    <td>&nbsp;Marital Status</td>
    <td>&nbsp;<?php echo   $row['marital_s_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Visa Type</td>
    <td>&nbsp;<?php echo  $row['visa_type_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Driving License</td>
    <td>&nbsp;<?php echo   $row['driving_lic_type']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Country</td>
    <td>&nbsp;<?php echo  $row['country_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Religion</td>
    <td>&nbsp;<?php echo   $row['religion_name']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;Highest Degree </td>
    <td>&nbsp;<?php echo  $row['degree_name']; ?></td>
  </tr>
 </table>


<?php
if(isset($_GET['applied'])){
	
	echo "<br><span style='color:green; font-size:34px;'>You Have Applied Successfully</span>&nbsp;<img src='images/ok.png'/><br><br>";
	
	}
?>



                   <!--edit record-->
<a href="edit_applicant.php?id=<?php echo $_SESSION['js_id'];?>"> <img src="images/change_record.png"/> </a>
 
<?php
if(isset($_GET['updated'])){
echo "<span style='color:green; font-size:34px;'>&nbsp;Record has been updated successfully</span>&nbsp;<img src='images/ok.png'/>";

}


?>
<br>                  <!--change password-->
<a href="change_password.php"><img src="images/change_password.jpg"/> &nbsp;</a>
<?php
if(isset($_GET['pwd'])){
echo "<span style='color:green; font-size:34px;'>Password has been changed successfully</span><img src='images/ok.png'/>";
}
?>

 <!--Fill your academic information -->
 <br>

 <a href="qualification.php?id=<?php echo $_SESSION['js_id'];?>"> <img src="images/academic_qualification.jpg"/> </a>
 
 <?php

@$delete = $_GET['delete'];
if (isset($delete))
{
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/ok.png'></img>";
echo "<span style='color:green'>  $delete  Record has been deleted Successfully'";

}
if (isset($_GET['uncheck']))
{
echo 'Please Check the checkbox which record you want to delete';
echo '<img src="images/unchecked.gif" />';
}
?>
<br>
<br>

 <form id="form_id" action="delete_academic.php" method="post" name="myform" >

 <table width="980" border="1" cellpadding="5" style="color:black;" >
  <tr style="font-size:16px;">
   <th>&nbsp;Delete</th>
    <th>&nbsp;Degree</th>
    <th>&nbsp; Country</th>
    <th>&nbsp; Major Subjects</th>
    <th>&nbsp;Division</th>
    <th>&nbsp; Marks /CGPA</th>
    <th>&nbsp;Institute</th>
    <th>&nbsp;Passing Year</th>
  </tr>
  <?php 
  include("include/connect.php");
  $query_fill="SELECT
academic_info.academic_id,
academic_info.js_id,
academic_info.major_subject,
academic_info.division,
academic_info.marks_cgpa,
academic_info.institute,
academic_info.passing_year,
degree_level.degree_name,
country.country_name
FROM
academic_info
INNER JOIN degree_level ON degree_level.degree_id = academic_info.degree
INNER JOIN country ON country.country_id = academic_info.country
WHERE
academic_info.js_id='".$_SESSION['js_id']."'";
  $run_fill=mysqli_query($con,$query_fill);
  while ($row_fill = mysqli_fetch_array($run_fill))
  {
	
  echo '<tr>
  <td><input type="checkbox" name="selector[]"  value='.$row_fill['academic_id'].'</td>
    <td>'.$row_fill['degree_name'].'</td>
    <td>'.$row_fill['country_name'].'</td>
    <td>'.$row_fill['major_subject'].'</td>
    <td>'.$row_fill['division'].'</td>
    <td>'.$row_fill['marks_cgpa'].'</td>
    <td>'.$row_fill['institute'].'</td>
    <td>'.$row_fill['passing_year'].'</td></tr>';
  }
  
  ?>
</table>
Check All &nbsp;<input type="button" onClick="select_all('selector', '1');" style="width:40px; height:15px;"/> 
 &nbsp;&nbsp;&nbsp;Uncheck All <input type="button" onClick="select_all('selector', '0');" style="width:40px; height:15px;"/> 
 &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  name="submit_mult" value="Delete" class="button">
 </form>
<br>

 
<?php $sql= mysqli_query ($con , "SELECT * FROM cv WHERE js_id ='". $_SESSION ['js_id']."'  ORDER BY
cv.cv_id DESC");
?>



<?php
if(isset($_GET['cv'])){
	
	echo "Pleas first upload cv than you can apply";
	
	}
?>


<table border="1" width="980">

<?php
$check_cv = mysqli_query($con, "SELECT *
FROM cv
WHERE js_id = '".$_SESSION['js_id']."'");

if(mysqli_num_rows($check_cv) > 0){
	?>
<tr><th >Your Uploaded CV:</th> 


<?php 
 $row1 = mysqli_fetch_array($sql)

?>
<td><img src="images/word_icon.png" width="20">
<a href="employer/download.php?name=<?php echo $row1['cv_name'];  ?>">
<?php echo $row1['cv_original_name'];  ?>
</a></td>
</tr>
<?php } ?>
</table> <?php }


echo  "<br>";

include("post_cv.php");


//session braket
}else{
echo '<script> window.location = "index.php"; </script>';	
}?>



</div>

 <?php include("include/footer.php"); ?>
</div>
	</body>
</html>
 