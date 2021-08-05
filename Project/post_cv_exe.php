<?php
session_start();
if(!$_FILES["file"]["name"] == "")
{
$name = $_FILES["file"]["name"];
$time=time();
$date = date("d - m - y");

	/*.end() function: Output the value of the last element in an array:
	The explode() function breaks a string into an array.

Note: The "separator" parameter cannot be an empty string.explode(separator,string)
separator: Required. Specifies where to break the string 
string :Required. The string to split*/
	$newname= $date."-".$time.".".end(explode('.',$_FILES["file"]["name"]));
/*	The move_uploaded_file() function moves an uploaded file to a new location.
move_uploaded_file(file,newloc)
*/	
	
  move_uploaded_file($_FILES["file"]["tmp_name"],
      "cv/" . $newname);
      $location = "cv/".$newname;
	include ('include/connect.php');
	$sql = ("INSERT INTO cv (js_id, cv_name, cv_original_name, cv_location) VALUES ('".$_SESSION ['js_id']."','$newname','$name','$location')");
	
	$result = mysqli_query($con, $sql);
	header ("location: applicant_panel.php?action=1");
	
	}else{
	echo "Upload a file";
	
	}
	
?>