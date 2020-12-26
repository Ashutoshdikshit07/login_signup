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
$var = "select * from signup where username = '$username' and password = '$password'";
$result = mysqli_query($con, $var);
$row = mysqli_num_rows($result);

if($row == 1){
	header('location: survey.php');
} 
else{
	header('location:login.php');	
}

?>

</body>
</html>