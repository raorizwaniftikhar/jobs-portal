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







<style type="text/css">
.text
{
	width:250px;
	height:30px;
}
<meta charset="utf-8">
<title>Untitled Document</title>
</style>



<form action="" method="post" id="qualification">
<table width="800" border="1" cellpadding="7" align="center">
  <caption>
   <h2 style="color:blue;"> Academic Information</h2>
  </caption>

  <tr>
    <td>&nbsp;DEGREE</td>
    <td>&nbsp;<?php 
	$id = $_SESSION['js_id'];
	
	
	include("include/connect.php");
	$query_d="select * from degree_level";
	$result_d=mysqli_query($con,$query_d);
	echo '<select name="degree"style="width:270px;">';
		echo '<option value="" selected="selected">- - - - - - Select Degree - - - - - -</option>';

	while($row=mysqli_fetch_array($result_d))
	{
		echo '<option value="'.$row['degree_id'].'">'.$row['degree_name'].'</option>';
	}
	echo '</select>';
	
	
	?></td>
  </tr>
  <tr>
   
    <td>&nbsp;COUNTRY</td>
    <td>&nbsp;<?php 
	include("include/connect.php");
	$query2="select * from country";
	$result=mysqli_query($con,$query2);
	echo '<select name="country"style="width:270px;">';
		echo '<option value="" selected="selected">- - - - - - Select Country - - - - - - </option>';

	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
	}
	echo '</select>';
	
	
	?></td>
  </tr>
   <td>&nbsp;MAJOR SUBJECTS</td>
    <td>&nbsp;<input type="text" name="major_subject" placeholder="Magor Subjec" class="text"></td>
  </tr>
  <tr>
  <tr>
    <td>&nbsp;DIVISION</td>
    <td>&nbsp;<input name="division" type="text" placeholder="enter division" class="text"></td>
  </tr>
  <tr>
    <td>&nbsp;MARKS DETAIL/CGPA</td>
    <td>&nbsp;<input name="marks_cgpa" type="text" placeholder="marks/cgpa" class="text"></td>
  </tr>
  <tr>
    <td>&nbsp;INSTITUTE</td>
    <td>&nbsp;<input type="text" name="institute" placeholder=" enter institute" class="text"></td>
  </tr>
  <tr>
    <td>&nbsp;PASSING YEAR</td>
    <td>&nbsp;<select name="passing_year" id="passing_year" style="width:200px;">
                              <option value=""> - - - Select Passing Year - - - </option>
                                                            <option value="2014">2014 </option>
       <option value="2013">2013 </option>
       <option value="2012">2012 </option>
       <option value="2011">2011</option>
       <option value="2010">2010</option>
       <option value="2009">2009</option>
       <option value="2008">2008</option>
       <option value="2007">2007 </option>
       <option value="2006">2006 </option>
       <option value="2005">2005</option>
       <option value="2004">2004</option>
       <option value="2003">2003</option>
       <option value="2002">2002</option>
       <option value="2001">2001</option>
       <option value="2000">2000</option>
       <option value="1999">1999 </option>
       <option value="1998">1998 </option>
       <option value="1997">1997 </option>
       <option value="1996">1996 </option>
       <option value="1995">1995</option>
       <option value="1994">1994 </option>
       <option value="1993">1993 </option>
       <option value="1992">1992 </option>
       <option value="1991">1991</option>
       <option value="1990">1990</option>
       <option value="1989">1989</option>
       <option value="1988">1988</option>
       <option value="1987">1987</option>
       <option value="1986">1986</option>
       <option value="1985">1985 </option>
       <option value="1984">1984</option>
       <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980 </option>
      <option value="1979">1979</option>
      <option value="1978">1978 </option>
      <option value="1977">1977 </option>
      <option value="1976">1976 </option>
      <option value="1975">1975</option>
      <option value="1974"> 1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
                                                          </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;<input type="submit" name="submit" value="submit"><input type="reset" value="cancel"></td>
  </tr>

</table>
</form>

<?php include("include/connect.php");
if(isset($_POST['submit']))//check submit button press or not
{
 $degree=$_POST['degree'];
 $major_subject=$_POST['major_subject'];
 $country=$_POST['country'];
 $division=$_POST['division'];
 $marks_cgpa=$_POST['marks_cgpa'];
 $institute=$_POST['institute'];
 $passing_year=$_POST['passing_year'];
	$query="INSERT INTO academic_info(js_id,degree,major_subject,country,division,marks_cgpa,institute,passing_year) values ('$id','$degree','$major_subject','$country','$division','$marks_cgpa','$institute','$passing_year')";
	 // mysqli_query()Perform queries against the database:

	  if(mysqli_query($con,$query))
	  { ?>

		  <script>window.location="applicant_panel.php";</script>
	<?php  }
?>

<?php } ?>


	<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>

 <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#qualification").validate({
		rules: {
			  
    degree:"required",
	country:"required",
	major_subject:"required",
	division:"required",
	marks_cgpa:"required",
	institute:"required",
	passing_year:"required"
	
		},
		messages:{
			degree:"<b>degree required</b>",
			country:"<b>country required</b>",
			major_subject:"<b>major_subject required</b>",
			division:"<b>division required</b>",
			marks_cgpa:"<b>marks_cgpa required</b>",
			institute:"<b>institute required</b>",
	passing_year:"<b>passing_year required</b>",
	}	
	
	});
		});
	
	</script>