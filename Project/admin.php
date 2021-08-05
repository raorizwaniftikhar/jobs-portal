
<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/please_login_here.css">

<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="dist/jquery.validate.js"></script>
		<title>Admin panel</title>
         <style type="text/css">
    
	.error  {
		color: red;
	}
	.l_jobs{
	width:210px;
	}
</style>
	</head>
	<body>
		<div class="container">
        
        <?php include("include/connect.php"); ?>
		<?php 
include("include/admin_header.php"); 
if(isset($_SESSION['admin_id'])){
	

?>
		


<div style="float:right;">
<ul>
<li><a href="Admin.php">Admin Home</a></li>
<li><a href="?page=applicant_list">Applicant List</a></li>
<li><a href="?page=job_list">Jobs List</a></li>
<li><a href="?page=employer_list">Empolyer's List</a></li>

</ul>
</div>

<?php 
if(!isset($_REQUEST['page'])){

echo "<h1> Welcome to Admin Panel </h1>";
}else{
			if($_REQUEST['page'] == 'applicant_list'){
			include("admin/applicant_list.php"); 
			}if($_REQUEST['page'] == 'applicant_detail'){
			include("admin/applicant_detail.php"); 
			}if($_REQUEST['page'] == 'employer_list'){
			include("admin/employer_list.php"); 
			}if($_REQUEST['page'] == 'employer_detail'){
			include("admin/employer_detail.php"); 
			}
			if($_REQUEST['page'] == 'job_list'){
			include("admin/job_list.php"); 
			}if($_REQUEST['page'] == 'job_detail'){
			include("admin/job_detail.php"); 
			}

}
?>






</div>
	</body>
</html>
<?php 
}else{ ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/please_login_here.css">
<span href="#" class="button" id="toggle-login">Welcome</span>

<div id="login">
  <div id="triangle"></div>
  <h1><strong>Please First Log in</strong></h1>
  <form name="form1" action="admin_login.php" method="post" id="admin">
    <input name="name" type="email" required class="email" placeholder="Email" autocomplete="on" />
    <input name="password" type="password" required class="password" placeholder="Password" autocomplete="on" />
    
  
<br>




    <input type="submit" name="submit" value="Log in" class="submit1" />
  </form>
  
<!--    <script src="lib/index.js"></script>
   <script src='lib/jquery.js'></script>-->
</div>

	
	
<?php } ?>

  <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#admin").validate({
		rules: {
			  
    name:"required",
	password:{
                required: true,
				minlength: 5
               
            },
		},
		messages:{
			name:"<b>admin name required</b></br></br>",
	password:{
                required: "Please provide password name",
                minlength: "name must be at least 5 characters"
            },
	}	
	
	});
		});
	
	</script>
