<?php
include("config.php");
var_dump($_POST[username]);
/*
$con = mysql_connect("localhost","root","M59U9DwSYb1S");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
else {
    mysql_select_db('sds');
}

if(isset($_POST['username']))
{
    $inputUsername = mysql_real_escape_string($_POST['username']);
}
if(empty($inputUsername)){
print_r("No input username detected");
}

$sql= mysql_query("insert into `login` (username) values ('$inputname')");
mysql_close($con);
header("Location: http://silentdiscosquad.com/");

*/



/*

if(!empty($_POST['username']) && !empty($_POST['password'])){
// Now checking user name and password is entered or not.

$user = $_POST['username'];
$pass = $_POST['password'];
$result = mysql_query("select * from login");
$num_rows = mysql_num_rows($result); 
echo "$user";
echo "$pass";
echo "$num_rows";

if($num_rows > 0){
    echo "The username you have entered is already exist. Please try another username.";
    exit;
}

}*/
?>
