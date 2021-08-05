<div class="leftside">
	<form action="job_summary.php" method="post" id="latest_jobs">
		<table cellpadding="10">
			<caption class="cap">
			  Hot and Latest jobs
			</caption>
 	
				<tr>
                <td class="r_f_f">
              <?php 
	include("include/connect.php");
	$query_c="select * from city_state";
	$result_c=mysqli_query($con,$query_c);
	echo '<select name="city" class="l_jobs">';
	echo '<option value="" selected="selected"> - - - -Select City/State - - - -</option>';
	while($row=mysqli_fetch_array($result_c))
	{
		echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
	}
	echo '</select>';
	?>	
               		</td></tr>
			<tr>
            	<td class="r_f_f">
                 <?php 
	$query2="select * from industry";
	$result=mysqli_query($con,$query2);
	echo '<select name="industry" class="l_jobs">';
	echo '<option value="" selected="selected"> - - - -Select Industry - - - - </option>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<option value="'.$row['industry_name'].'">'.$row['industry_name'].'</option>';
	}
	echo '</select>';
	?></td></tr>
 			<tr>
            	<td> <input type="submit" name="submit" value="Search Job" class="btn"></td></tr>
 	</table>
</form>








<hr>
	<form action="" method="" id="alert">
		<table cellpadding="5">
			<caption class="cap">
				 Job Alerts
			</caption>
                <tr>
					<td class="r_f_f"> Name:
                    </td></tr>
                <tr>
                  <td class="r_f_f"><input type="text" required class="r_form" placeholder="Enter your name" name="name">
                  </td></tr>
				<tr>
					<td class="r_f_f">Email 
                    </td>
                </tr>
                 <tr>
                 	<td class="r_f_f"><input type="email" required class="r_form" placeholder="Email Address" name="email">
                    </td> </tr>
                  	<tr>
                	<td colspan="2"> <input type="submit" name="" value="Alert" class="btn">
                    </td></tr>
			</table>                
		</form>
        <img src="images/images (1).jpg" width="257"><br>
		<a href="http://www.nadia-me.com/" target="_blank"><img src="images/nadia.gif" width="257"></a>
	</div>
    
  <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#latest_jobs").validate({
		rules: {
			  
    city:"required",
	industry:"required"
		},
		messages:{
			city:"</br><b>city required</b>",
	industry:"</br><b>industry required</b>",
	}	
	
	});
		});
	
	</script>
    <style type="text/css">
    
	.error  {
		color: red;
	}
	.l_jobs{
	width:210px;
	}
</style>





 <script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#alert").validate({
		rules: {
			  
    name:"required",
	email:"required"
		},
		messages:{
			name:"</br><b>name required</b>",
	email:"</br><b>email required</b>",
	}	
	
	});
		});
	
	</script>