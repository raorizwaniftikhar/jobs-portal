<?php extract($_REQUEST);
 ?>
<?php
include("include/connect.php");
	function send_email($to,$from,$subject,$message,$cc,$bcc) {
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From:  $from\r\n";
		if(strcmp($cc,'0')) 
			$headers .= "Cc: $cc\r\n";
		if(strcmp($bcc,'0')) 
			$headers .= "Bcc: $bcc\r\n";
		
		$headers .= "Reply-To: <$from>\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion();
		mail($to, $subject, $message, $headers);
	} //function

extract($_REQUEST);
if($email=="")
	{
	header("location:index.php?action=200");
		exit;
	}
$query="select * from j_s_reg where email='$email'";
$result=mysqli_query($con,$query) or die(mysql_error());
if(mysqli_num_rows($result)>0){
$row=mysqli_fetch_array($result);
$to=$email;
$from="job uae";
$subject="Password Recovery";
$message="your password=".$row['password'];
$cc=0;
$bcc=0;
send_email($to,$from,$subject,$message,$cc,$bcc);

header("location:index.php?action=100");
	exit;
	}
	else header("location:index.php?action=1");
?>
 }