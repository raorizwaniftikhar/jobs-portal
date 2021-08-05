<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 5px;
width:210px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 5px;
    display: none;
}
</style>
</head>
<body>
</body>
</html>
<div class="rightside">
    <table cellpadding="5" width="240">
    	<caption class="cap">
			Registration Free
		</caption>
            <tr class="r_f_f"> <td><img src="images/tick.jpg"></td>
            <td> Register Online</td></tr>
            <tr class="r_f_f"> <td><img src="images/tick.jpg"></td>
            <td>Submit Resume</td></tr>
            <tr class="r_f_f"><td><img src="images/tick.jpg"></td>
            <td>Apply Online</td></tr>
            <tr><td colspan="2"><a href="job_seeker_page.php"><img src="images/register.gif" height="70" width="220"></a></td></tr>
       </table>
   	   <hr>
       
       
      <!-- //////////////LOGIN FORM////////////-->
	<form action="login.php" method="post" id="login">
    <?php
	if(isset($_GET['action'])){
	echo "<script language='javascript'> alert('User name or password is incorrect.')";
	echo "</script>";	
	}
	?>
		<table cellpadding="4">
			<caption class="cap">
			Login
			</caption>
	
			<tr>
				<td class="r_f_f">Email:</td>
            </tr>
            <tr><td class="r_f_f"> <input type="email" name="email" class="r_form" placeholder="Email" required></td></tr>
		

			<tr>
				<td class="r_f_f">Password:</td>
             </tr>
             <tr>
             	<td class="r_f_f"><input type="password" name="password" class="r_form" placeholder="Password" required></td>
             </tr>
			<tr>
            	<td colspan="2" style=""><input type="checkbox" name="employer" id="r_employer">
<label for="r_employer">Click for Employer</label></td></tr>
		
			<tr>
            	<td class="r_f_f"> <input type="submit" name="submit" value="Login" class="btn">
                
               </tr>

 
               
		</table>
        
      </form>
       <div id="flip">Forget Password</div>

<div id="panel"><form method=" post" action="forgot_ctl.php"><input type="email" name="email" placeholder="Email">

<input type="submit" value="send" ></form>
</div> 
		<img src="images/images (1).jpg" width="249">
        <img src="images/office-secretarial.gif" width="249">


               <!--twitter follow code-->
<!--               email address:::   salman401@gmail.com
               password::::       abcde
               user name :::salman401-->
               

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



                    <!--facebook follow code-->




	</div>
    
    
    
     <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#login").validate({
		rules: {
			  
    email:"required",
	password:"required"
		},
		messages:{
			email:"</br><b>email required</b>",
	password:"</br><b>password required</b>",
	}	
	
	});
		});
	
	</script>