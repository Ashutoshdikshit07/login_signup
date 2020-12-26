<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
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
      			<li><a href="#">Page 1</a></li>
      			<li><a href="#">Page 2</a></li>
    		</ul>
		    <ul class="nav navbar-nav navbar-right">
	<!-- 	      	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
		      	<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		    </ul>
		</div>
	</nav>

<div class="wrapper">
	<h1 class="text-center">SURVEY</h1>
	<br><br>
	<div class="container-fluid "><center>
		<form action="surveycheck.php" id="ten" method="post">
			
			<input class="form-control" type="text" name="username" autocomplete="off" id="username" placeholder="username">
			<br>
			<input class="form-control" type="email" name="email" autocomplete="off" id="email" placeholder="EnterEmail">
			<br>
			<input class="form-control" type="number" name="phone" autocomplete="off" id="phone" placeholder="EnterPhone"><br>
			
		
			<textarea rows="4" cols="50" name="message" id="message" autocomplete="off" form="ten" placeholder="enter question here">message
				</textarea>

<br><br>
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