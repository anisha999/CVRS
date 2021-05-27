<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vaxines</title>
<style>
* {
    box-sizing: border-box;
}
body{
    background: #444 url(../img/baby.jpg) center center no-repeat fixed;
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
	width: 45%;
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
	float: right;
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
table {
	border : 2px solid black;
	background-color: #FFCCEE;
	}
	
th {
border: 2px solid #000;
}
td {
	text-align: left;
border: 1px solid #666;
}
	

</style>
</head>
<body>
	<div class="topnav">
	
		<a href="http://localhost/index.php#vacinfo">Vaccine Info.</a>
		<a href="http://localhost/index.php#aboutus">About Us</a>
		<a href="http://localhost/index.php">Home</a>
	</div>
	<h1><center>VAXINES</center></h1>
	<h2><center>Child Vaccination Reminder Tool</center></h2>
	<h3><center>Child details:</center></h3>
<center>
<div class="container">	

<?php
global $sqlget5;
include('server.php');
$sqlget5 = $_SESSION['username'];
$sqlget1 = "SELECT Fname, DOB ,Age, Sex FROM children C, users U WHERE C.username = U.username AND C.username='{$sqlget5}';";
$sqlget3 = "SELECT username FROM children";
$sqlget4 = "SELECT username FROM users";
$sqlget2 = "SELECT DName, DPhone, DEmail, Qualification FROM doctor";

$sqldata = mysqli_query($db, $sqlget1) or die('error getting data');
$sqldata2 = mysqli_query($db, $sqlget2) or die('error getting data');
$sqldata3 = mysqli_query($db, $sqlget3) or die('error getting data');
$sqldata4 = mysqli_query($db, $sqlget4) or die('error getting data');

while($array = mysqli_fetch_row($sqldata)) {
	echo "<b>Name  :   </b>";
	echo $array[0];
	echo "<br><br>";
	echo "<b>DoB  :    </b>";
	echo $array[1];
	echo "<br><br>";
	echo "<b>Age  :    </b>";
	echo $array[2];
	echo "<br><br>";
	echo "<b>Sex  :    </b>";
	echo $array[3];
	echo "<br><br>";
}
while($array = mysqli_fetch_row($sqldata2)) {
	echo "<b>Doctor Name  :    </b>";
	echo $array[0];
	echo "<br><br>";
	echo "<b>Doctor Ph No.  :    </b>";
	echo $array[1];
	echo "<br><br>";
	echo "<b>Doctor Email  :    </b>";
	echo $array[2];
	echo "<br><br>";
	echo "<b>Qualification  :    </b>";
	echo $array[3];
	echo "<br><br>";
}

$qw="UPDATE users SET `NVDate` = DATE_ADD(`EDate` , INTERVAL 15 DAY) WHERE `username` = '{$sqlget5}' ";
           $db->query($qw);
           $sql=" SELECT NVDate FROM users WHERE `username` = '{$sqlget5}'";
          $result = $db->query($sql);
$qw1 ="update users set EDate = select DOB from children where `username` = '{$sqlget5}'";
			$db->query($qw1);
			$result1=mysqli_query($db,$qw1);
		  
     if (mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
       echo   "Your upcoming date is " ;
   							}
						}
	

?>
	
<script type="text/javascript">  
      var htmlString="<?php 
		   $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "cvrt";

           // Create connection
           $conn = new mysqli($servername, $username, $password, $dbname);

           // Check connection
           if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
           }
           $qw="UPDATE users SET `NVDate` = DATE_ADD(`EDate` , INTERVAL 15 DAY) WHERE `username` = '{$sqlget5}' ";
           $conn->query($qw);
           $sql=" SELECT NVDate FROM users WHERE `username` = '{$sqlget5}'";
          $result = $conn->query($sql);

     if (mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
       echo   "Your upcoming date is ".$row["NVDate"];
   							}
						}

?>";
</script>
<button onclick="myFunction()">Next Vaccination Date</button>
<script>
function myFunction() {
    alert(htmlString);
}

    </script>
</div>
</center>
</body>
</html>