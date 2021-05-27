<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Vaxine</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<div class="Title">
		<h1>VAXINES</h1>
		<h2> Child Vaccination Reminder Tool</h2>
	</div>
	
	<div class="topnav">
		<a class="active" href="#home">Home</a>
		<a href="http://localhost/vacinfo.html">Vaccine Info.</a>
		<a href="http://localhost/aboutus.html">About Us</a>
	</div>
  <div class="header">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="adminlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login</button>
  	</div>
  </form>
</body>
</html>