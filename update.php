<?php
session_start();
if(isset($_SESSION['name']))
{
	$v1=$_GET['new'];
	echo"<center><form id=f1 method='POST' action=''>
			Confirm the user $v1 :<select class='input-box' name='a'> 
									<option >--Select--</option>
									<option  value='0'>0</option>
									<option  value='1'>1</option>
									</select><br>
			<input type='submit' class='submit-btn' value='Save'></form></center>";
	$val=$_POST['a'];
	mysql_connect("localhost","root","");
	mysql_select_db("show");
	mysql_query("UPDATE users SET confirm='$val' WHERE name='$v1'");
	echo"<center><h4><a href='logout.php'>LOGOUT</a></h4></center>";
}
?>

<html>
<head>
<style>
.submit-btn{
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    broder: none;
    broder-radius: 2px;
    color: #fff;
    text-transform: uppercase;
    cursor: pointer;
    transition: 0.2s;
}

.submit-btn:hover,
.submit-btn:focus{
    background: #ff5722;
    transition: 0.2s;
}

.input-box{
    display: block;
    box-sizing: broder-box;
    padding: 4px;
    width: 220px;
    height: 32px;
    broder: 1px solid #fff;
    outline: none;
    font-size: 15px;
    transition: 0.2s;
    color: #000;
	
}

#f1 {
  position: center;
    margin: 5% auto;
    background: rgba(0,0,0,0.8);
    box-shadow: 0 2px 4px rgba(0,0,0,1);
    box-sizing: broder-box;
    padding: 30px;
    width: 250px;
    height:150px;
	color: #fff;
	font-size: 20;
}

</style>
</head>
</html>