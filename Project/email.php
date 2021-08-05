<!doctype html>
<html>
	<head>
    
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
		<title>Jobs UAE Email</title>
	</head>
	<body>
		<div class="container">
        
        <?php include("include/header.php"); ?>
			<?php include("include/left_side.php"); ?>
			<?php include("include/right_side.php"); ?>
<form action="include/mail.php" method="post">
<table  border="1" width="500" align="center">
  <tr>
    <td>&nbsp;Email:</td>
    <td>&nbsp;<input type="email" name="email"></td>
  </tr>
  <tr>
    <td>&nbsp;Subject</td>
    <td>&nbsp;<input type="text" name="subject"></td>
  </tr>
  <tr>
    <td>&nbsp;Message</td>
    <td>&nbsp;<textarea placeholder="enter message body" name="message" rows="12" cols="21"></textarea></td>
  </tr>
  <tr>
    
    <td colspan="2" align="center">&nbsp;<input type="submit"><input type="reset"></td>
  </tr>
</table>
</form>
	<?php include("include/footer.php"); ?>
</div>
	</body>
</html>