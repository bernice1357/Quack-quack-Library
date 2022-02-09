<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="place.css"/>
	<title>Books Search System</title>
</head>
<body>
	<div class="content">
		<h1>Search Book Position</h1>
	</div>

	<form action="place_result.php" method="post">
		<input class="search_bar" type="text" name="search" placeholder="";>
		<button class="button" type="submit" onclick="location.href='place_result.php'">Search</button>		
	</form>

	<input type="button" value="Back" onclick="location.href='employee.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
</body>
</html>