
<span href="#" class="button" id="toggle-login">Welcome</span>

<div id="login">
  <div id="triangle"></div>
  <h1><strong>Please First Log in</strong></h1>
  <form action="login.php" method="post" id="login1" >
    <input type="email"  class="email" placeholder="Email" name="email" required  />
    <input type="password" class="password" placeholder="Password" name="password"  required/>
    
 
<br>



    <input type="submit" value="Log in" class="submit1" name="submit" />
  </form>
  

</div>


  <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#login1").validate({
		rules: {
			  
    email:"required",
	password:"required"
		},
		messages:{
			email:"</br><b>email required</b></br>",
	password:"</br><b>password required</b></br>",
	}	
	
	});
		});
	
	</script>

