<html>
<head>
		<title>login</title>
		
		<style>
					*{
						 margin: 0;
						 padding: 0;
					}

					header{
						 background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(1.jpg);
						 height: 20vh;
						 background-size: cover;
						 background-position: center;

					}

					body{
						background-image: url(2.jpg);
						background-size: cover;
						background-position: center;
						
					}


					.title{
						 position: absolute;
						 top: 5%;
						 left: 20%;
						 transform: translate(-50%,-50%);
					}


					.title h1{
						 color: #fff;
						 font-size: 45px;
					}


					.sign-box{
						position: center;
						margin: 5% auto;
						background: rgba(0,0,0,0.8);
						box-shadow: 0 2px 4px rgba(0,0,0,1);
						box-sizing: broder-box;
						padding: 40px;
						width: 300px;
						height: 325px;
					}


					.sign-box h1{
						margin-bottom: 20px;
						font-size: 28;
						color: #fff;
					}

					.sign-box2{
						position: center;
						margin: 5% auto;
						background: rgba(0,0,0,0.8);
						box-shadow: 0 2px 4px rgba(0,0,0,1);
						box-sizing: broder-box;
						padding: 40px;
						width: 300px;
						height: 200px;
					}


					.sign-box2 h1{
						margin-bottom: 20px;
						font-size: 28;
						color: #fff;
					}

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
						margin-bottom: 20px;
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

					.login{
						text-align: center;
						color: #fff;	
					}

					.login a{
						color: white;
					}


					footer{
						 background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(1.jpg);
						 background-size: cover;
						 height:20vh;
					}


					footer p{
						position: relative;
						color: #fff;
						text-align: left;
						left: 3%;
						font-size: 20px;
						top: 10%;
					}

		</style>
		
</head>

<body>
	<header>
			<div class="title">
		    <h1>Welcome To Natraj Cinema!</h1>
			</div>
	</header>

<form method="POST" action="welcome.php">

	<div class="sign-box2"><center>
		<h1>login</h1>
		<input type="name" class="input-box" name="x" placeholder="Username">
		<input type="password" class="input-box" name="y" placeholder="Enter password">
		
		<input type="submit" class="submit-btn" placeholder="login">
		<input type="reset" class="submit-btn" placeholder="Reset">
		
		
		<div class="login">
		<a href="index.php" >Not have an account? <b>Sign Up</b></a>
		</div>
		
	</div>
	
</form>

</body>

<footer>
	<p>Made by - Shobha Shrivastava</p>      
</footer>

</html>