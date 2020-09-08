<?php
session_start();

$xx=$_POST['x'];
$yy=$_POST['y'];

if ($xx=="" || $yy=="")
{
	echo "<center><h1>Please fill all... <a href='login.php'>go back</a></h1>"
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	$query="SELECT * FROM users WHERE email='$xx' AND password='$yy'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	
	if ($count==0)
	{
		echo "user doesn't exist";
	}
	else
	{
		$row=mysql_fetch_array($result);
		$_SESSION['confirm'] = $row[4];
		$_SESSION['name'] = $row[0];
		header ("location:welcome.php");
	}
}
?>