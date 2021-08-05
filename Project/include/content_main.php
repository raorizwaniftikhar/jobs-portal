<div class="content">
   <center>
   	 	<h1 class="content_index_h1"><b>Jobs in<span style="color:blue;"> UAE</span> at your fingertips....</b>
     	</h1>
  </center>
  
   <h3 class="content_index_h3">Welcome</h3>
   
   Welcome to the online recruitment portal of JOBS UAE - the pioneers in recruitment, training, management consulting and executive 
     search in the Middle East for over 30 years.
    And we feel very happy to say that we are first to make such type of website.
   <br>
   <br>

	<a href="about_us.php" target="_blank"><u>Read more about jobs UAE</u></a>
   
    <h2 align="center" class="content_table_h2">Jobs by Industry</h2>
	<table width="700" align="center">
    
  	<tr>
    
 <!--   Accounting / Finance  -->
    	<?php include("include/connect.php");
$Accounting="select * from post_job where industry = '1'";
	$Accounting_result=mysqli_query($con,$Accounting);
$Accounting_row = mysqli_num_rows($Accounting_result);
$Accounting_job_id=mysqli_fetch_array($Accounting_result);
		?>
		<td><a href="job_summary.php?id=<?php echo $Accounting_job_id['industry']; ?>">Accounting / Finance</a>(<?php echo $Accounting_row; ?>)</td>
        
        
         <!--    Advertising  -->
        <?php include("include/connect.php");
	$Advertising="select * from post_job where industry = '2'";
    $Advertising_result=mysqli_query($con,$Advertising);
	$Advertising_row=mysqli_num_rows($Advertising_result);
	$Advertising_job_id = mysqli_fetch_array($Advertising_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Advertising_job_id['industry']; ?>">Advertising</a>(<?php echo $Advertising_row; ?>)</td>
        
        
        
         <!--    Arts / Entertainmen  -->
        <?php include("include/connect.php");
		$Arts="select * from post_job where industry = '3'";
		$Arts_result=mysqli_query($con,$Arts);
		$Arts_row=mysqli_num_rows($Arts_result);
	$Arts_job_id = mysqli_fetch_array($Arts_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Arts_job_id['industry']; ?>">Arts / Entertainmen</a>(<?php echo $Arts_row; ?>)</td>
  	</tr>
    
    
  	<tr>
     <!--    Banking  -->
    <?php include("include/connect.php");
    $Banking="select * from post_job where industry = '4'";
	$Banking_result=mysqli_query($con,$Banking);
	$Banking_row=mysqli_num_rows($Banking_result);
	$Banking_job_id = mysqli_fetch_array($Banking_result);
	?>
    	<td><a href="job_summary.php?id=<?php echo $Banking_job_id['industry']; ?>">Banking</a> (<?php echo $Banking_row; ?>)</td>
        
        
         <!--    Beauty and Fashion -->
        <?php include("include/connect.php");
		$Beauty="select * from post_job where industry = '5'";
		$Beauty_result=mysqli_query($con,$Beauty);
		$Beauty_row=mysqli_num_rows($Beauty_result);
		$Beauty_job_id = mysqli_fetch_array($Beauty_result);
		?>
		<td><a href="job_summary.php?id=<?php echo $Beauty_job_id['industry']; ?>">Beauty and Fashion</a>(<?php echo $Beauty_row; ?>)</td>
        
        
         <!--    Clerical / Administrative  -->
         <?php include("include/connect.php");
		 $Clerical="select * from post_job where industry = '6'";
		 $Clerical_result=mysqli_query($con,$Clerical);
		 $Clerical_row=mysqli_num_rows($Clerical_result);
	$Clerical_job_id = mysqli_fetch_array($Clerical_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Clerical_job_id['industry']; ?>">Clerical / Administrative</a>( <?php echo $Clerical_row; ?>)</td>   
  	</tr>
    
    
  	<tr>
     <!--    Construction / Facilities  -->
    <?php include("include/connect.php");
	$Construction="select * from post_job where industry = '7'";
		 $Construction_result=mysqli_query($con,$Construction);
		 $Construction_row=mysqli_num_rows($Construction_result);
$Construction_job_id = mysqli_fetch_array($Construction_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Construction_job_id['industry']; ?>">Construction / Facilities</a>( <?php echo $Construction_row; ?>)</td>
        
        
        
       <!--    Customer Service  -->  
     <?php include("include/connect.php");
	$Customer="select * from post_job where industry = '8'";
		 $Customer_result=mysqli_query($con,$Customer);
		 $Customer_row=mysqli_num_rows($Customer_result);
$Customer_job_id = mysqli_fetch_array($Customer_result);
		?>   
    	<td><a href="job_summary.php?id=<?php echo $Customer_job_id['industry']; ?>">Customer Service</a>( <?php echo $Customer_row; ?>)</td>
        
        
     <!--    Education / Training  -->   
   <?php include("include/connect.php");
	$Education="select * from post_job where industry = '9'";
		 $Education_result=mysqli_query($con,$Education);
		 $Education_row=mysqli_num_rows($Education_result);
$Education_job_id = mysqli_fetch_array($Education_result);
		?>      
    	<td><a href="job_summary.php?id=<?php echo $Education_job_id['industry']; ?>">Education / Training </a>( <?php echo $Education_row; ?>)</td>
   </tr>
   
   
   
   <tr>
    <!--   Electrician  -->
    <?php include("include/connect.php");
	$Electrician="select * from post_job where industry = '10'";
		 $Electrician_result=mysqli_query($con,$Electrician);
		 $Electrician_row=mysqli_num_rows($Electrician_result);
$Electrician_job_id = mysqli_fetch_array($Electrician_result);
		?>  
   	   <td><a href="job_summary.php?id=<?php echo $Electrician_job_id['industry']; ?>">Electrician</a>(<?php echo $Electrician_row; ?>)</td>
       
       
       
   <!--   Engineering/Architecture  -->     
  <?php include("include/connect.php");
	$Engineering="select * from post_job where industry = '11'";
		 $Engineering_result=mysqli_query($con,$Engineering);
		 $Engineering_row=mysqli_num_rows($Engineering_result);
$Engineering_job_id = mysqli_fetch_array($Engineering_result);
		?>       
 
       <td><a href="job_summary.php?id=<?php echo $Engineering_job_id['industry']; ?>">Engineering/Architecture</a>(<?php echo $Engineering_row; ?>)</td>
       
       
       
     <!--    Labour Services  -->   
  <?php include("include/connect.php");
	$Labour="select * from post_job where industry = '12'";
		 $Labour_result=mysqli_query($con,$Labour);
		 $Labour_row=mysqli_num_rows($Labour_result);
$Labour_job_id = mysqli_fetch_array($Labour_result);		 
		?>
       <td><a href="job_summary.php?id=<?php echo $Labour_job_id['industry']; ?>">Labour Services</a>(<?php echo $Labour_row; ?>)</td>
   </tr>
   
   
   
    <tr>
     <!--    Management  -->
    <?php include("include/connect.php");
	$Management="select * from post_job where industry = '13'";
		 $Management_result=mysqli_query($con,$Management);
		 $Management_row=mysqli_num_rows($Management_result);
$Management_job_id = mysqli_fetch_array($Management_result);
		 
		?>
    	<td><a href="job_summary.php?id=<?php echo $Management_job_id['industry']; ?>">Management</a>(<?php echo $Management_row; ?>)</td>
        
        
        
        
     <!--    Marketing/Internet  -->    
   <?php include("include/connect.php");
	$Marketing="select * from post_job where industry = '14'";
		 $Marketing_result=mysqli_query($con,$Marketing);
		 $Marketing_row=mysqli_num_rows($Marketing_result);
$Marketing_job_id = mysqli_fetch_array($Marketing_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Marketing_job_id['industry']; ?>">Marketing/Internet</a>(<?php echo $Marketing_row; ?>)</td>
        
        
        
        
    <!--    Oil and Petroleum  -->    
  <?php include("include/connect.php");
	$Oil="select * from post_job where industry = '15'";
		 $Oil_result=mysqli_query($con,$Oil);
		 $Oil_row=mysqli_num_rows($Oil_result);
$Oil_job_id = mysqli_fetch_array($Oil_result);
		?>    
    	<td><a href="job_summary.php?id=<?php echo $Oil_job_id['industry']; ?>">Oil and Petroleum</a>(<?php echo $Oil_row; ?>)</td>
   </tr>
   
   
    <tr>
     <!--  others  -->
    <?php include("include/connect.php");
	$others="select * from post_job where industry = '16'";
		 $others_result=mysqli_query($con,$others);
		 $others_row=mysqli_num_rows($others_result);
$others_job_id = mysqli_fetch_array($others_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $others_job_id['industry']; ?>">others</a>(<?php echo $others_row; ?>)</td>
        
        
        
      <!--    Resturant/Food Services  -->  
   <?php include("include/connect.php");
	$Resturant="select * from post_job where industry = '17'";
		 $Resturant_result=mysqli_query($con,$Resturant);
		 $Resturant_row=mysqli_num_rows($Resturant_result);
$Resturant_job_id = mysqli_fetch_array($Resturant_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Resturant_job_id['industry']; ?>">Resturant/Food Services</a>(<?php echo $Resturant_row; ?>)</td>
        
        
        
    <!--    Sales  -->     
   <?php include("include/connect.php");
	$Sales="select * from post_job where industry = '18'";
		 $Sales_result=mysqli_query($con,$Sales);
		 $Sales_row=mysqli_num_rows($Sales_result);
$Sales_job_id = mysqli_fetch_array($Sales_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Sales_job_id['industry']; ?>">Sales</a>(<?php echo $Sales_row; ?>)</td>
   </tr>
     <tr>
     
     
     
      <!--    Transportatione  -->
      <?php include("include/connect.php");
	$Transportation="select * from post_job where industry = '19'";
	$Transportation_result=mysqli_query($con,$Transportation);
	$Transportation_row=mysqli_num_rows($Transportation_result);
$Transportation_job_id = mysqli_fetch_array($Transportation_result);
		?>
    	<td><a href="job_summary.php?id=<?php echo $Transportation_job_id['industry']; ?>">Transportation</a>(<?php echo $Transportation_row; ?>)</td>
        
        
        
     <!--    Web Developers  -->    
      <?php include("include/connect.php");
	$Web="select * from post_job where industry = '20'";
		 $Web_result=mysqli_query($con,$Web);
		 $Web_row=mysqli_num_rows($Web_result);
$Web_job_id = mysqli_fetch_array($Web_result);
		?>   
    	<td><a href="job_summary.php?id=<?php echo $Web_job_id['industry']; ?>">Web Developers</a>(<?php echo $Web_row; ?>)</td>
    	<td></td>
  	</tr>
  </table>
	<br>
	<br>


	<h3 align="left" style="
		font-size:24px;
        line-height:0px;
	 	color:#F00;"> Success Stories
	</h3>
	After registering as a jobseeker, I received 7 serious 								    interview 
    calls within a short span and now have found my dream 
       job. 
    Thank you jobsUAE.com this is a platform which is   
     complete guide for jobseeker<br>

    <a href="success_stories.php" target="_blank" style=" margin-left:600px; font-size:18px;"><U>Read    More</U></a>


	<h3 align="left" style="
		font-size:24px;
        line-height:0px;
	 	color:#F00;">Some Lines:
	</h3>

	<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;This job portal provides
     a platform to 					    the job seekers for finding a 
     right and satisfactory job      
     	    according to their qualifiction.
     It also connects the job    		    seekers with all major job
      providing companies in   UAE. A person who is
       willing to go to UAE     and want to achieve hid dreams by finding a job. 
        This Job         portal provides an appropriate platform for that person.
    </p>

	</div>