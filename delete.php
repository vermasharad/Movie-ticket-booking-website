<?php
session_start();
if(isset($_SESSION['name']))
{
	$v1=$_GET['x1'];
	$str_arr = explode (",", $v1); 

	$movie_name = $str_arr[0]; 
	$show_time 	= $str_arr[1]; 
	$hall 		= $str_arr[2];
	
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	mysql_query("DELETE FROM movie WHERE moviename='$movie_name' AND showtiming='$show_time' AND hall='$hall'");
	
	echo "<center><h1>movie is deleted successfully.
						<p><a href='logout.php'>LOGOUT</a></p></h1>";
}
?>