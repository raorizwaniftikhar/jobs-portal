<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//echo $id = $_GET['id'];

include("include/connect.php");
$query="SELECT
city_state.city_name,
employer_registration.employer_id,
employer_registration.employer_name,
employer_registration.`password`,

employer_registration.e_email,
employer_registration.e_tel,
employer_registration.e_url,
employer_registration.e_address,
employer_registration.e_profile,
employer_registration.e_office_locatin,
employer_registration.e_contact_mobile
FROM
employer_registration
INNER JOIN city_state ON city_state.city_id = employer_registration.e_city
WHERE employer_id='".$_GET['id']."'";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run))
{	?>
	<table width="700" border="1">
    <caption> EPLOYER REGISTRATION DATA IS</caption>
  <tr>
    <td>&nbsp;employer name</td>
    <td>&nbsp;<?php echo   $row['employer_name'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp;email</td>
    <td>&nbsp;<?php echo  $row['e_email'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp;company telephone#</td>
    <td>&nbsp;<?php echo  $row['e_tel'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp;company url</td>
    <td>&nbsp;<?php echo   $row['e_url'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; city</td>
    <td>&nbsp;<?php echo   $row['city_name'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; address</td>
    <td>&nbsp;<?php echo   $row['e_address'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; company frofile</td>
    <td>&nbsp;<?php echo   $row['e_profile'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp; office location</td>
    <td>&nbsp;<?php echo   $row['e_office_locatin'] ; ?></td>
  </tr>
  <tr>
    <td>&nbsp;contact person#</td>
    <td>&nbsp;<?php echo   $row['e_contact_mobile'] ; ?></td>
  </tr>
  <tr>
    <td></td>
    <td><a href="delete.php?employer_id=<?php echo   $row['employer_id'] ; ?>">Delete</a></td>
  </tr>
</table>
<?php }

//edit record
 ?>

</body>
</html>