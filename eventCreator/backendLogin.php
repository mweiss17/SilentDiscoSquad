<?php
include("config.php");
var_dump($_POST[loginUsername]);
var_dump($_POST[loginPassword]);

$con = mysql_connect("localhost","root","M59U9DwSYb1S");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
else {
    mysql_select_db('sds');
}
if(isset($_POST['loginUsername']))
{
    $inputUsername = mysql_real_escape_string($_POST['loginUsername']);
    print_r("Username Detected");
}
if(isset($_POST['loginPassword']))
{
    $inputPassword = mysql_real_escape_string($_POST['loginPassword']);
}
if(empty($inputUsername)){
    print_r("No input username detected");
}
if(empty($inputPassword)){
    print_r("No input password detected");
}

$sql= mysql_query("select ("$inputUsername", "$inputPassword") from `login`");
print_r($sql);
mysql_close($con);

?>
