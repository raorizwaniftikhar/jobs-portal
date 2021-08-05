
<?php
ob_start();


$email = $_POST['email'];
$sub = $_POST['subject'];
$mes = $_POST['message'];
ini_set('SMTP','localhost');
ini_set('smtp_port',25);
$to = "asimkr40@gmail.com";
$subject = $sub;
$message = $mes;
$from = $email;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
if('mail')
{
	echo "mail sent";
	echo "$email";
}
else
{
	echo "mail not sent";
}

?>

<?php
	 /*include("include/connect.php");

$sql="INSERT INTO mail_record (e_mail_id, subject, msg)
VALUES
('$_POST[email]','$_POST[subject]','$_POST[message]')";


// some code
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }*/
//header ("location: index.php");


//mysql_close($con);
?>




<?php
ob_end_flush();
?>


