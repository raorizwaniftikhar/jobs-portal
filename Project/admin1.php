<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/please_login_here.css">

<title>Untitled Document</title>
</head>

<body style="background-color:#CCC;"><span href="#" class="button" id="toggle-login">Welcome</span>

<div id="login">
  <div id="triangle"></div>
  <h1><strong>Please First Log in</strong></h1>
  <form name="form1" action="admin_login.php" method="post" id="admin">
    <input name="name" type="email" required class="email" placeholder="Enter Email" autocomplete="on" />
    <input name="password" type="password" required class="password" placeholder=" Enter Password" autocomplete="on" />
    
  
<br>




    <input type="submit" name="submit" value="Log in" class="submit1" />
  </form>
  
<!--    <script src="lib/index.js"></script>
   <script src='lib/jquery.js'></script>-->
</div>

	
	

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
                required: "Please provide password",
                minlength: "name must be at least 5 characters"
            },
	}	
	
	});
		});
	
	</script>

</body>
</html>