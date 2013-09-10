<?php
var_dump($_POST[email]);
$con = mysql_connect("localhost","root","M59U9DwSYb1S");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{
mysql_select_db('sds');
}
if(isset($_POST['email'])){};
$inputEmail = mysql_real_escape_string($_POST['email']);
if(empty($inputEmail)){
print_r("No input email detected");
}
print_r("connected");
$sql= mysql_query("insert into `users` (email) values ('$inputEmail')");
mysql_close($con);
header("Location: http://silentdiscosquad.com/");
?>
