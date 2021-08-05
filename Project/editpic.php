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
include("include/connect.php");
$id = $_GET['id'];

$pic = mysqli_query($con,"SELECT * FROM  j_s_reg WHERE js_id = '$id'");

$pic_row = mysqli_fetch_array($pic);


echo '<img src="upload/'.$pic_row['picture'].'"';





if(isset($_POST['submit'])){

echo $picture_name=$_FILES['picture']['name'];
	 echo $picture_type=$_FILES['picture']['type'];
	 echo $picture_size=$_FILES['picture']['size'];
	 echo $picture_tmp=$_FILES['picture']['tmp_name'];
	/* thes four parameters are added with image or video or file data  for these we use $_FILES variable*/

	 if($picture_type=="image/jpeg" or $picture_type=="image/png" or $picture_type=="image/gif")
	 {
		 if($picture_size<=50000)
		 {
			 move_uploaded_file($picture_tmp,"upload/$picture_name");
		 }
			 else
			 {
				echo " <script> alert('size is larger')</script>"; 
			 }
	 }
	 
		 else
		 {
			 echo " <script> alert('image type is invalid')</script>";
		 }


$pic_update = mysqli_query($con,"UPDATE j_s_reg SET picture='$picture_name' WHERE js_id = '$id' ");


}

?>

<br >
<form action="" method="post" enctype="multipart/form-data">

<label>Select Picture</label>
<input type="file" name="picture" multiple/>
<input name="submit" type="submit" id="submit" value="Update">
</form>
		<?php include("include/footer.php"); ?>
		</div>
	</body>
</html>