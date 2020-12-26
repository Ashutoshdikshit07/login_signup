<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

session_start();
$con = mysqli_connect('localhost','root');
$db = mysqli_select_db($con,'unknown');


$username = $_POST['username'];

$password = $_POST['pass'];

$var = "select * from admin where username = '$username' and password = '$password'";

$result = mysqli_query($con,$var);

$row = mysqli_num_rows($result);

if ($row==1) {
	header('location:adminhome.php');
}
else{
	header('location:adminlogin.php');
}


?>

</body>
</html>



