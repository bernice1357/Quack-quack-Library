<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Search.css"/>
		<title>Collection</title>
	</head>
	<body>
		<div class="head">
			<h1>Collection</h1>
		</div>

		<form action="search_result.php" method="post">
			<input class="search_bar" type="text" name="search" placeholder="";>
			<div class="send">
					<button class="button" type="submit" onclick="location.href='search_result.php'">Search</button>
			</div>	 		
		</form>

		<input type="button" value="Back" onclick="location.href='visitor.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
	</body>
</html>