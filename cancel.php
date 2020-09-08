<?php
session_start();
if(isset($_SESSION['name']))
{
	$v1=$_GET['x'];
	$str_arr = explode (",", $v1);
	$a = $str_arr[0]; 
	$b = $str_arr[1]; 
	$c = $str_arr[2]; 
	$d = $str_arr[3];
	
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	$result = mysql_query("SELECT available FROM movie WHERE moviename='$b' AND showtiming='$c'");
	$aval_seat=mysql_fetch_array($result);
	$up_seat = $aval_seat[0] + $d;
	
	mysql_query("DELETE FROM booked WHERE username='$a' AND moviename='$b'");
	mysql_query("UPDATE movie SET available='$up_seat' WHERE moviename='$b'");
	

	echo "<center><h1>Your booking has been cancelled.
						<p><a href='logout.php'> LOGOUT </a></p></h1>";
}
?>