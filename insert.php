<?php
session_start();
if(isset($_SESSION['name']))
{
	$v1=$_POST['mn'];
	$v2=$_POST['tm'];
	$v3=$_POST['hl'];
	$v4=$_POST['ns'];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	$query1="INSERT INTO movie VALUE('$v1','$v2','$v3','$v4','$v4')";
	mysql_query($query1);
	
	echo "<center><h1>movie is inserted successfully.
						<p><a href='logout.php'>LOGOUT</a></p></h1>";
}
?>