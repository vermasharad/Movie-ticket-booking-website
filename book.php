<?php
session_start();

if(isset($_SESSION['name']))
{
	$v1=$_GET['x1'];
	$str_arr = explode (",", $v1);  
	$movie_name = $str_arr[0]; 
	$show_time 	= $str_arr[1]; 
	$hall = $str_arr[2];
	$aval_seat= $str_arr[3];
	
	echo"<form id=f1 method='POST' action='final_book.php?x2=$movie_name,$show_time,$hall,$aval_seat'>
					enter number of seats : <input class='input-box' type='number' name='b' placeholder='number of seats'><br>
					<center><input type='submit' class='submit-btn' value='Save'>
				</form>";

	echo"<br><center><h4><a href='logout.php'>LOGOUT</a></h4></center>";
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
    color: #fff;
    background: transparent;
	
}

#f1 {
  position: center;
    margin: 5% auto;
    background: rgba(0,0,0,0.8);
    box-shadow: 0 2px 4px rgba(0,0,0,1);
    box-sizing: broder-box;
    padding: 30px;
    width: 250px;
    height:130px;
	color: #fff;
	font-size: 20;
}

</style>
</head>
</html>