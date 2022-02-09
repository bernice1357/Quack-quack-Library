<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="visitor.css"/>
		<title>Visitor Page</title>
	</head>
	<body>	
		<div class="head">
			<h1>Welcome back!</h1>
		</div>
		<div class="content">
			<h2>Manage Your Account</h2>
			<a href="Search.php">Borrow Books</a>
			<br>
			<br><a href="return_t.php">Books not yet returned</a><br>
			<form action="borrowed_list.php" method="post">
				<input class="name" type="text" name="search" placeholder="Please enter your name";>
				<button class="button" type="submit" onclick="location.href='borrowed_list.php'">Search</button>		
			</form>
		</div>

		<input type="button" value="Home" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:relative; left:800px; top:40px; color:#FFFAF0; border:none"/>

		<input type="button" value="Collection" onclick="location.href='Search.php'"; style="font-family:Georgia; background-color: transparent; width:160px;height:50px;font-size:25px;position:relative; left:840px; top:40px; color:#FFFAF0; border:none"/>

		<input type="button" value="Log out" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:180px;height:50px;font-size:25px;position:relative; left:890px; top:40px; color:#FFFAF0; border:none"/>
	</body>
</html>