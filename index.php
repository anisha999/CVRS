<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vaxines</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php include('server.php'); ?>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Vaxines</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#register" class="page-scroll">Register</a></li>
        <li><a href="#login" class="page-scroll">Login</a></li>
        <li><a href="#aboutus" class="page-scroll">About Us</a></li>
        <li><a href="#vacinfo" class="page-scroll">Vaccines</a></li>
        <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Vaxines</h1>
            <p>Child Vaccination Reminder System</p>
            <a href="#register" class="btn btn-custom btn-lg page-scroll">Register Now</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Register Section -->
<center>
<div class="container"> 
<div id="register">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  	<h1>REGISTER</h1>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required autocomplete="off" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required autocomplete="off" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="#login">Sign in</a>
  	</p>
  </form>
  </div>
</center>
<!-- Login Section -->
<center>
<div class="container"> 
<div id="login">
<div class="overlay">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  	<h1>LOGIN</h1>
  </div> 
  <form method="post" action="login1.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required autocomplete="off">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="#register">Sign up</a>
  	</p>
  </form>
  </div>
  </div>
 </center>
<!-- About Us Section -->
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container"> 
<div id="aboutus">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="overlay">
 <div class="aboutUs">
		<h1>What Do We Do</h1>
		<p><font size="5"><strong>Vaccination protects children from serious illness and
		complications of vaccine-preventable diseases.Vaccine-preventable diseases, such 
		as measles, mumps, and whooping cough, are still a threat.Outbreaks of preventable
		diseases occur when many parents decide not to vaccinate their children.	
		Vaccination is safe and effective. All vaccines undergo long and careful review by
		scientists, doctors, and the federal government to make sure they are safe.
		This is a vaccination reminding tool enabled to keep track
		of your child's vaccination schedule.</strong></font></p>
		</div>
</div>
</div>
</div>
</center>
<!-- VacInfo Section -->
<div id="vacinfo" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

        <h2>Vaccinations</h2>
		<p><center><b>Below are the vaccine names and their prevention information along with the duration between the intervals for doses.</b></center></p>
<center>
<table>
  <tr>
    <th><center>VID</center></th>
    <th><center>VName</center></th>
    <th><center>Prevents</center></th>
    <th><center>MinAge</center></th>
    <th><center>1st Interval</center></th>
    
  </tr>
  <tr>
    <td><center>V1</center></td>
    <td><center>BCG</center></td>
    <td><center>TB and bladder cancer</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>

  </tr>
  <tr>
    <td><center>V2</center></td>
    <td><center>HepB</center></td>
    <td><center>Hepatitus B</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
  <tr>
    <td><center>V3</center></td>
    <td><center>Poliovirus</center></td>
    <td><center>Polio</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
  <tr>
    <td><center>V4</center></td>
    <td><center>DPT</center></td>
    <td><center>Diphtheria,Tetanus,Pertusis</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
  <tr>
    <td><center>V5</center></td>
    <td><center>Hib</center></td>
    <td><center>Infections caused by bacteria</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
   <tr>
    <td><center>V6</center></td>
    <td><center>PCV</center></td>
    <td><center>Pneumonia</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
   <tr>
    <td><center>V7</center></td>
    <td><center>RV</center></td>
    <td><center>Severe Diarrheal Disease</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
   <tr>
    <td><center>V8</center></td>
    <td><center>Typhoid</center></td>
    <td><center>Typhoid Fever</center></td>
    <td><center>Birth</center></td>
    <td><center>4 weeks</center></td>
  </tr>
</table>
</div>
</div>
 </div>
</div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Contact Us At  :  <strong>91 9538972377</strong></h2>
  </div>
  <h3>
  	<a href="http://localhost/feedback.php"><b>Give Feedback</b></a>
  </h3>
</div>
</body>
</html>
