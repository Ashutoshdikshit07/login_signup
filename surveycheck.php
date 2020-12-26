<?php 

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "success";

	# code...
}
else
{
	echo "shit";
}
mysqli_select_db($con,'unknown');

$name= $_POST['username'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message = $_POST['message'];

$query = "insert into survey (username,email,phone,message) values ('$name','$email','$phone','$message')";

echo "Sucessfully inserted";

mysqli_query($con,$query);

header('location:survey.php');




?>