<?php
session_start();
?>
<div class="header">
	<div class="hleft">
			<a href="#"><img src="images/logo.png"></a>
     </div> 
     
      <div class="hright">
     <?php
	 if(isset($_SESSION ['first_name'])){
		 echo "Hi Dear ". $_SESSION ['first_name'];
	 }
	 if(isset($_SESSION ['employer_name'])){
		 echo "Hi Dear ". $_SESSION ['employer_name'];
	 }
	 if(isset($_SESSION ['admin_id'])){
		 ?> <?php echo "<br>"; ?>
<?php		 echo "Hi Dear ". $_SESSION ['admin_name']. " <a href='admin_logout.php'><br> Logout</a> ";
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
									}
			?>
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

else {
include("include/admin_menu.php");	
}
?>

   </div>
