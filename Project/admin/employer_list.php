<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table border="1">
<tr align="center"> <th> employer list</th></tr>
  <tr>
  <th> employer name</th>
  <th> email</th>
  <th>company telephone#</th>
  <th>city</th>
  <th>address</th>
  <th>details</th>

  
  </tr>
  <?php
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
";
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run))
{	?>
  
  
  <tr>
  <td>&nbsp;<?php echo   $row['employer_name'] ; ?></td>
  <td>&nbsp;<?php echo  $row['e_email'] ; ?></td>
   <td>&nbsp;<?php echo  $row['e_tel'] ; ?></td>
   <td>&nbsp;<?php echo   $row['city_name'] ; ?></td>
   <td>&nbsp;<?php echo   $row['e_address'] ; ?></td>
<td><a href="?page=employer_detail&id=<?php echo $row['employer_id']; ?>">Details</a></td>
   
   
  </tr>
  <?php } ?>
  </table>
  
</body>
</html>