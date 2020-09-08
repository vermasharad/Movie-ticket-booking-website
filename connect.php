<?php

$aa = $_POST['a'];
$bb = $_POST['b'];
$cc = $_POST['c'];
$dd = $_POST['d'];

if ($aa=="" || $bb=="" || $cc=="" || $dd=="")
{
	echo "<center><h1>Please fill all... <a href='index.php'>go back</a></h1>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	$query = "SELECT * FROM users where name='$aa' and email='$bb'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	if($count!=0)
	{
		echo "User already exists";
	}
	else
	{
		$query1="INSERT INTO users (name,email,password,phone,confirm) VALUE('$aa','$bb','$cc','$dd',0)";
		mysql_query($query1);
		echo "<center><h1>you have registered successfully.
						<p><a href='login.php'>Click Here To Login</a></p></h1>";
	}
}
?>