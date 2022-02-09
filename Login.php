<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Login.css" />
		<title>Login/Register</title>
		<style>
			.button{
				font-family: Georgia;
				position: absolute;
				top: 345px;
				left: 400px;
				font-size: 15px;
				width: 70px;
				color: #FFFFFF;
				border-radius: 10px;
				background-color: #000000;
				border: 1px solid #000000;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1>Login</h1>
			<form action="Login_t.php" method="post">
				<h3>Your Identity</h3>
				<select name="identity">
				    <option>Visitor</option>
				    <option>Employee</option>
				</select>
				<h3>Account</h3>
			 	<input type="text" name="account"> 
			 	<h3>Password</h3>
			 	<input type="password" name="password"> 
			 	<br><br>Haven't have a account? <a href="register.php">Click here</a>
			 	<div class="send">
					<button class="button" type="submit" onclick="location.href='Login_t.php'">Login</button>
				</div>
			</form>
		</div>

		<input type="button" value="Home" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:relative; left:800px; top:40px; color:#FFFAF0; border:none"/>

		<input type="button" value="Collection" onclick="location.href='Search.php'"; style="font-family:Georgia; background-color: transparent; width:160px;height:50px;font-size:25px;position:relative; left:840px; top:40px; color:#FFFAF0; border:none"/>

		<input type="button" value="Login/Register" onclick="location.href='Login.php'"; style="font-family:Georgia; background-color: transparent; width:180px;height:50px;font-size:25px;position:relative; left:890px; top:40px; color:#FFFAF0; border:none"/>

	</body>
</html>