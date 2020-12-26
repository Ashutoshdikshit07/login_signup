<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
      			<li><a href="#">Page 1</a></li>
      			<li><a href="#">Page 2</a></li>
    		</ul>
    		
    		<ul class="nav navbar-nav navbar-right">
      			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    		</ul>
  		</div>
	</nav>
	

<!-- 	<br><br> -->
	

	<div class="wrapper">
	
	<div class="container-fluid ">
		<center>
			<h1 class="text-center">Signup</h1>
			<form action="signupcheck.php" method="post">
			

				<input class="form-control" type="text" name="firstname" autocomplete="off" id="firstname" placeholder="firstName">
			
				<br>
			
				<input class="form-control" type="text" name="lastname" autocomplete="off" id="lastname" placeholder="lastName">
			
				<br>

				<input class="form-control" type="text" name="username" autocomplete="off" id="username" placeholder="userName">
				<br>
			
			
				<input class="form-control" type="email" name="email" autocomplete="off" id="email" placeholder="EnterEmail">
				<br>
			
				<input class="form-control" type="number" name="phoneno" autocomplete="off" id="phoneno" placeholder="EnterPhone"><br>
			
				<input class="form-control" type="password" name="password" autocomplete="off" id="password" placeholder="password">

			<br>
				<button class="btn btn-success">Submit </button>
				<button class="btn btn-danger reset">clear </button>
				<br><br><br>
				<a href="login.php" class="btn btn-warning">already user</a>

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