
		<ul>
			<li><a href="index.php">Home </a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="job_seeker_page.php">Submit Resume</a></li>
            
            
        <?php    
            if(isset($_SESSION ['employer_id'])){		?>
				<li><a href="post_job_page.php">Post Job</a></li> <?php } ?>
			
			<!--<li><a href="#">Visit/Visa</a></li>-->
			<li><a href="employer_page.php">Employers</a></li>
            
		</ul>