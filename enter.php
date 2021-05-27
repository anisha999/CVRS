
<?php include('server.php') ?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}
body{
    background: url(baby.jpg);
    background-size: cover;
    font-family: 'Titillium Web', sans-serif;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #ff0066;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #ff66a3;
}

.container {
    border-radius: 5px;
    background-color: #ffe4e8;
    padding: 20px;
	width: 65%;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
.topnav {
	background: transparent;
	overflow: hidden;
}
.topnav a {
	float: left;
	color: #000000;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}
.topnav a:hover{
	background-color: #ffccee;
	color: black;
}
.topnav a.active{
	background-color: #ff0066;
	color: white;
}

a{
	text-decoration: none;
	color: #fff;
	transition: .5s ease;
}

a:hover{
	color: #179b77;
}

.btnn {
  padding: 12px 20px;
  font-size: 15px;
  color: white;
  background: #ff0066;
  border: none;
  border-radius: 5px;
  float: right;
}


</style>
</head>
<body>


	<div class="topnav">
		<a class="active" href="http://localhost/register.html">Home</a>
		<a href="http://localhost/vacinfo.html">Vaccine Info.</a>
		<a href="http://localhost/aboutus.html">About Us</a>
	</div>
	<h1><center>VAXINES</center></h1>
	<h2><center>Child Vaccination Reminder Tool</center></h2>
	<h3>Enter child details:</h3>

<div class="container">
  <form method="post" action="enter.php">
   <input type = "hidden" name = "submitted" value = "true"/>
    <div class="row">
      <div class="col-25">
        <label for="fname">Child Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="fname" placeholder="Enter Child's Name.." autocomplete="off" value="<?php echo $fname; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth:</label>
      </div>
      <div class="col-75">
        <input type="text" id="dob" name="dob" placeholder="yyyy-mm-dd" autocomplete="off" value="<?php echo $dob; ?>">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="age">Age (in weeks):</label>
      </div>
      <div class="col-75">
        <input type="text" id="age" name="age" placeholder="Enter Your Age.." autocomplete="off" value="<?php echo $age; ?>">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="sex">Sex:</label>
      </div>
      <div class="col-75">
        <input type="text" id="sex" name="sex" placeholder="Enter sex.." autocomplete="off" value="<?php echo $sex; ?>">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="username">Username:</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="username.." autocomplete="off" value="<?php echo $username; ?>">
      </div>
    </div>
	<br>
    <div class="row">
	  <button type="submit" class="btnn" name="sub">Submit</button>
	      </div>
  </form>
</div>

</body>
</html>
