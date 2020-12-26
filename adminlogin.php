<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	 <link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#">Unknown</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li class="active"><a href="#">Home</a></li>
      			<li><a href="#">page 1</a></li>
      			<li><a href="#">Page 2</a></li>
    		</ul>
   			
   			<ul class="nav navbar-nav navbar-right">
      			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login as User</a></li>
    		</ul>
  		</div>
	</nav>
	<div class="wrapper">
	
	<br><br>
	<div class="container-fluid "><center>
		<form action="admincheck.php" method="post">
			<h1>ADMIN LOGIN</h1>

			<input class="form-control" type="text" name="username" autocomplete="off" id="username" placeholder="EnterName">
			<br>
			<input class="form-control" type="password" name="pass" autocomplete="off" id="pass" placeholder="EnterPhone"><br><br>
			<button class="btn btn-success">Submit </button>
			<button class="btn btn-danger reset">clear </button>
			
			<br><br><br>
			
		</form>
	</center>

	</div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/
zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>