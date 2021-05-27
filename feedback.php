<html>
<head>
<title>Feedback form</title>
<style>
	
* {
  margin: 0px;
  padding: 0px;
}
body {
	background: url(baby.jpg);
  font-size: 120%;
      background-size: cover;
	  font-family: 'Titillium Web', sans-serif;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: center;
  margin: 3px;
}
.input-group input {
  height: 50px;
  width: 30%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  background: #00fffff;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #ff0066;
  border: none;
  border-radius: 5px;
}


</style>
</head>
<body>
<center>
<div class="container"> 
<div id="login">
<div class="overlay">
	<br>
	<br>
	<br>
	<br>
  	<h1>Feedback</h1>
	<br>
	<br>
  </div> 
  <form method="post" action="feedback.php">
  	<?php include('server.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<br>
		<input type="text" name="username" required autocomplete="off">
  	</div>
  	<div class="input-group">
  		<label>Feedback</label>
		<br>
  		<input type="text" name="feedback" required autocomplete="off">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="feedsub">Submit</button>
  	</div>
  </form>
  </div>
  </div>
 </center>
 </body>
 </html>