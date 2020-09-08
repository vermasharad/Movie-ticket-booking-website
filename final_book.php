<?php
session_start();

if(isset($_SESSION['name']))
{
	$user_name = $_SESSION['name'];
	$required_seat = $_POST['b'];
	
	$v1=$_GET['x2'];
	$str_arr = explode (",", $v1); 

	$movie_name = $str_arr[0]; 
	$show_time 	= $str_arr[1]; 
	$hall 		= $str_arr[2];
	$aval_seat 	= $str_arr[3];
	
	$up_seat = $aval_seat - $required_seat;
if($required_seat > $aval_seat)
{
	echo "<center><h3>Not enough seats. only $aval_seat seats are availabe</h3>
						<h2><p><a href='logout.php'> LOGOUT </a></p></h2>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	
	mysql_query("UPDATE movie SET available='$up_seat' WHERE moviename='$movie_name' AND showtiming='$show_time'");
	
	$result = mysql_query("SELECT * FROM booked WHERE username='$user_name' AND moviename='$movie_name'");
	$count = mysql_num_rows($result);
	
	if ($count!=0)
	{
		$row = mysql_fetch_array($result);
		$d = $row[4];
		$new = $d + $required_seat;
		mysql_query("UPDATE booked SET bookedSeats='$new' WHERE username='$user_name' AND moviename='$movie_name'");
	}
	else
	{
		mysql_query("INSERT INTO booked VALUE ('$user_name','$movie_name','$show_time','$hall','$required_seat')");
	}
	
	echo "<center><h1>You have booked $required_seat seats successfully.
					<p><a href='logout.php'> LOGOUT </a></p></h1>";
}
}
?>
