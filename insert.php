<?php
$con = mysqli_connect("127.0.0.1","root","");

if(!$con)
{
	echo "Not connected to server";
}
if(!mysqli_select_db($con, "cvrt"))
{
	echo "Not selected db";
}
$Name = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$sql = "INSERT INTO PARENT(PEmail,Username,Password) values('$Email','$Name','$Password')";

if(!mysqli_query($con,$sql))
{
	echo "Not inserted";
}
else
{
	echo "inserted";
}
header("refresh:2; url=test.html");

?>