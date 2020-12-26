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

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$username = $_POST['username'];
$email= $_POST['email'];
$phoneno= $_POST['phoneno'];
$password = $_POST['password'];

$query = "insert into signup (firstname,lastname,username,email,phoneno,password) values ('$firstname','$lastname','$username','$email','$phoneno','$password')";

echo "Sucessfully inserted";

mysqli_query($con,$query);

header('location:index.php');




?>