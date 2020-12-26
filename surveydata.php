<!DOCTYPE html>
<html lang="en">
<head>
  <title>survey data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Unknown</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="database.php">Database</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout as admin</a></li>
    </ul>
  </div>
</nav>



<center>
<div class="container">
<h1>SURVEY DATA</h1>

<table  style="width: 700px"   class="styled-table">
  <thead>
  <tr>
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>phone</th>
    <th>message</th>
  </tr>

</thead>

<tbody>
<?php 

$con = mysqli_connect('localhost','root');
$db = mysqli_select_db($con,'unknown');

$dis = "select * from survey";
$result = $con->query($dis);
if ($result-> num_rows > 0) {
  while ($row=$result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["message"]."</td></tr>";

  }
  echo "</table>";
 } 
 else{
  echo "no entry";
 }
$con->close();
 ?>
</tbody>


 <!-- <a href="changepass.php" class="btn btn-warning">change password</a>
 -->

</table>

  </div>  
</center>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/
zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
