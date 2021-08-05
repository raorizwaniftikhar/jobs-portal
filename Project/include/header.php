<?php
session_start();
?>
<div class="header">
	<div class="hleft">
			<a href="#"><img src="images/logo.png"></a>
     </div> 
     
      <div class="hright">
     <?php
	 if(isset($_SESSION ['first_name'])){ echo "<br>";
		 echo "Hi Dear ". $_SESSION ['first_name'];
	 }
	 if(isset($_SESSION ['employer_name'])){ echo "<br>";
		 echo "Hi Dear ". $_SESSION ['employer_name'];
	 }
	 if(isset($_SESSION ['admin_id'])){
		 echo "Hi Dear ". $_SESSION ['admin_name']. " <a href='admin_logout.php'> Logout</a> ";
	 }
	 ?>
			<ul>
            <?php
			if(isset($_SESSION ['first_name'])){
				echo "<li><a href='include/logout.php'>Logout</a></li>";
			}else if(isset($_SESSION ['employer_name']))
			{
						echo "<li><a href='include/logout.php'>Logout</a></li>";
		
			}
			else
			{
						//echo "<li><a href='login.php'>Login</a></li>";
			}
			?>
				
				<li><a href="job_seeker_page.php">Job Seekers</a></li>
				<li><a href="employer_page.php">Employers</a></li>
        	 </ul>
	   </div>
	  

        	<i  style="font-size:40px; margin-left:200px;">Jobs for You</i>
      
</div>


  <div class="menu">
		<br>
	<?php
if(isset($_SESSION['employer_id'])){
include("employer/employer_menu.php");

}	
else if(isset($_SESSION ['js_id'])){
include("include/applicant_menu.php");	
}

else if(isset($_SESSION ['admin_id'])){
include("include/admin_menu.php");	
}

else {
include("include/main_menu.php");	
}
?>

   </div>
