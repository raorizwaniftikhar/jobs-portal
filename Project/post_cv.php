<?php 
if(isset($_GET['action'])){
	echo "<span style='color:green; font-size:34px;'>Your CV has been uploaded successfully.</span><img src='images/ok.png'/>";
	}
 ?>
<form action="post_cv_exe.php" method="post" enctype="multipart/form-data">
<table border="1">
<tr> <td>upload cv</td>
<td><input type="file" name="file" ></td>
</tr>
<tr> <td colspan="2" align="center"> <input type="submit" name="submit" value="submit CV"></td></tr>
</table>
</form>

