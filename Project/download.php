
<?php
$name = $_GET['name'];
//echo $name;

header("Content-disposition: attachment; filename=".$name."");
header("Content-type: application/docx");
  readfile("../cv/".$name."");
?>













