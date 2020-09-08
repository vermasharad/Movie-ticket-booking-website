<?php
session_start();
$m = $_POST['x'];
$o = $_POST['y'];

$_SESSION['name']=$m;
$_SESSION['pswd']=$o;

mysql_connect("localhost","root","");
mysql_select_db("show");

$result = mysql_query("SELECT * FROM users WHERE name='$m' AND password='$o'");
$row = mysql_num_rows($result);

$result1 = mysql_query("SELECT * FROM admin WHERE name='$m' AND password='$o'");
$row1 = mysql_num_rows($result1);


if($m==""|| $o=="")
{
	echo "<center><h1>Plz fill all fields.
						<p><a href='login.php'>Try Again</a></p></h1>";
}
else if($row1!=0)
{
	echo "<center><h3>Welcome dear Admin.</h3>";
	$result2 = mysql_query("SELECT * FROM users");
	echo "<center><h1>Users Infromation</h1>";
	
	echo"<table id=t1 border='6'>
				<tr height='5px'>
				<td width='10%'>Username</td>
				<td width='10%'>Email</td>
				<td width='10%'>Password</td>
				<td width='10%'>Phone number</td>
				<td width='10%'>Confirmation status</td>
				<td width='10%'>click to upadte</td>
				</tr>
				</table>";
	while($row = mysql_fetch_array($result2))
	{	
		echo"<table id=t1 border='1'>
				<tr height='5px'>
				<td width='10%'>".$row[0]."</td>
				<td width='10%'>".$row[1]."</td>
				<td width='10%'>".$row[2]."</td>
				<td width='10%'>".$row[3]."</td>
				<td width='10%'>".$row[4]."</td>
				<td width='10%'><a href='update.php?new=$row[0]'>update status</a></td>
				</tr>
				</table>";
	}
	echo "<br><br>";
	echo "<h1><center>Booking status</h1>";
	$result3 = mysql_query("SELECT * FROM booked");
		echo"<table id=t1 border='6'>
				<tr height='5px'>
				<td width='10%'>Username</td>
				<td width='10%'>movie name</td>
				<td width='10%'>show timing</td>
				<td width='10%'>hall</td>
				<td width='10%'>booked seats</td>
				</tr>
				</table>";
	while($row = mysql_fetch_array($result3))
	{	
		echo"<table id=t1 border='1'>
				<tr height='5px'>
				<td width='10%'>".$row[0]."</td>
				<td width='10%'>".$row[1]."</td>
				<td width='10%'>".$row[2]."</td>
				<td width='10%'>".$row[3]."</td>
				<td width='10%'>".$row[4]."</td>
				</tr>
				</table>";
	}
	
	echo "<br><br>";
	echo "<h1><center>Movies</h1>";
	$q="SELECT * FROM movie";
			$r =mysql_query($q);
			echo"<table id=t1 border='6'>
					<tr height='5px'>
					<td width='10%'>movie name</td>
					<td width='10%'>show timing</td>
					<td width='10%'>hall</td>
					<td width='10%'>total seats</td>
					<td width='10%'>available seats</td>
					<td width='10%'>click to book seat</td>
					</tr>
					</table>";
			while($row=mysql_fetch_array($r))
			{	
				echo "<table id=t1 border='2'>
					<tr height='5px'>
					<td width='10%'>".$row[0]."</td>
					<td width='10%'>".$row[1]."</td>
					<td width='10%'>".$row[2]."</td>
					<td width='10%'>".$row[3]."</td>
					<td width='10%'>".$row[4]."</td>
					<td width='10%'><a href='delete.php?x1=$row[0],$row[1],$row[2]'>Delete</a></td>
					</tr></table>";
			}
	
	echo "<br><br>";	
	echo "<h1><center>Add a movie</h1>";
	
	echo "<form method='POST' action='insert.php'>
				<input type='text' name='mn' placeholder='Enter movie name'>
				<select name='tm'><option>--Select--</option>
						<option value='12pm to 3pm'>12pm to 3pm</option>
						<option value='2pm to 5pm'>2pm to 5pm</option>
						<option value='6pm to 9pm'>6pm to 9pm</option>
						<option value='9pm to 12am'>9pm to 12am</option>
				</select>
				<select name='hl'><option>--Select--</option>
						<option value='A'>A</option>
						<option value='B'>B</option>
						<option value='C'>C</option>
						<option value='D'>D</option>
				</select>
				<input type='number' name='ns' placeholder='Enter number of seats'>
				<center><input type='submit' class='submit-btn' value='Add'>
			</form>";
	
	echo"<br><center><h4><a href='logout.php'>LOGOUT</a></h4></center>";
}
else
{
	if($row==0)
	{
		echo " <center><h1>First Register From <a href='index.php'><br> Sign Up</a></h1>";
	}
	else
	{
		$result4 = mysql_query("SELECT confirm FROM users WHERE name='$m' AND password='$o'");
		$row = mysql_fetch_array($result4);
		$con = $row[0];
		if($con==1)
		{
			echo "<center><h4>Successfully Logged In...You are Confirmed !!!</h4>";		
		}
		else
		{
			echo "<center><h4>You are not Confirmed user yet. Hence can not book a movie</h4>";
		}
		$result5 = mysql_query("SELECT * FROM booked WHERE username='$m'");
		$count = mysql_num_rows($result5);
		if($count!=0)
		{
			echo "<center><h1>Your booking status</h1>";
			echo "	<table id=t1 border='6'>
					<tr height='5px'>
					<td width='10%'>Username</td>
					<td width='10%'>movie name</td>
					<td width='10%'>show timing</td>
					<td width='10%'>hall</td>
					<td width='10%'>booked seats</td>					
					<td width='10%'>click to cancel seat</td>
					</tr>
					</table>";
			while($row=mysql_fetch_array($result5))
			{	
				echo"<table id=t1 border='1'>
						<tr height='5px'>
						<td width='10%'>".$row[0]."</td>
						<td width='10%'>".$row[1]."</td>
						<td width='10%'>".$row[2]."</td>
						<td width='10%'>".$row[3]."</td>
						<td width='10%'>".$row[4]."</td>
						<td width='10%'><a href='cancel.php?x=$row[0],$row[1],$row[2],$row[4]'>cancel booking</a></td>
						</tr>
						</table>";
			}
		}
		else
		{
			echo"<center>you have not book a movie yet.";
		}
		echo "<br><center><h1>Book movie</h1>";
			
			$q="SELECT * FROM movie";
			$r =mysql_query($q);
			echo"<table id=t1 border='6'>
					<tr height='5px'>
					<td width='10%'>movie name</td>
					<td width='10%'>show timing</td>
					<td width='10%'>hall</td>
					<td width='10%'>total seats</td>
					<td width='10%'>available seats</td>
					<td width='10%'>click to book seat</td>
					</tr>
					</table>";
			while($row=mysql_fetch_array($r))
			{	
				echo "<table id=t1 border='2'>
					<tr height='5px'>
					<td width='10%'>".$row[0]."</td>
					<td width='10%'>".$row[1]."</td>
					<td width='10%'>".$row[2]."</td>
					<td width='10%'>".$row[3]."</td>
					<td width='10%'>".$row[4]."</td>";
				if($con==1)
				{
					if($row[4]>0)
					{
						echo"<td width='10%'>"."<a href='book.php?x1=$row[0],$row[1],$row[2],$row[4]'>   book</a>"."</td>";
					}
					else
					{
						echo "<td width='10%'>--Housefull--</td>";
					}
				}
				else
				{
					echo "<td width='10%'>confirmation is pending</td>";
				}
					echo"</tr></table>";
			}
		
		echo"<br><center><h4><a href='logout.php'>LOGOUT</a></h4></center>";

	}
}
?>

<html>
<head>
<style>
#t1 {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
  text-align: center;
}

#t1 td, #t1 th {
  border: 1px solid #ddd;
  padding: 8px;
  width: 10%;
}

#t1 th {
  padding-top: 12px;
  padding-bottom: 12px;
}
</style>
</head>
</html>