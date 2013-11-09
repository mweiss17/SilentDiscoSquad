<?php
include("config.php");
var_dump($_POST[signupUsername]);
var_dump($_POST[signupPassword]);

$con = mysql_connect("localhost","root","M59U9DwSYb1S");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
else {
    mysql_select_db('sds');
}
if(isset($_POST['signupUsername']))
{
    $inputUsername = mysql_real_escape_string($_POST['signupUsername']);
    print_r("Username Detected");
}
if(isset($_POST['signupPassword']))
{
    $inputPassword = mysql_real_escape_string($_POST['signupPassword']);
}
if(empty($inputUsername)){
    print_r("No input username detected");
}
if(empty($inputPassword)){
    print_r("No input password detected");
}

$sql= mysql_query("insert into `login` (username, password) values ('$inputUsername', '$inputPassword')");
mysql_close($con);
?>
