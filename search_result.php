<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="search_result.css"/>
	<title>Searching Result</title>
</head>
<body>
	<div class="head">
		<h1>Searching Result</h1>
	</div>
	<?php
		echo "<table border='3'><tr>";
		echo "<th>Book Name</th> 
			  <th>ISBN</th> 
			  <th>Author</th>
			  <th>Publisher</th> 
			  <th>Classification</th>
			  </tr>";

		include("conn.php");
		$keyword = $_POST['search'];
		$sql = "SELECT *  FROM collection WHERE publisher LIKE '%$keyword%' OR ISBN LIKE '%$keyword%' OR name LIKE '%$keyword%' OR publisher LIKE '%$keyword%' OR classification LIKE '%$keyword%'";
		$result = $conn->query($sql);
				 
		if ($result->num_rows > 0){
			while($row = $result->fetch_assoc()) {
				echo '<td>' . $row["name"] . '</td>';
				echo '<td>' . $row["ISBN"] . '</td>';
				echo '<td>' . $row["author"] . '</td>';
				echo '<td>' . $row["publisher"] . '</td>';
				echo '<td>' . $row["classification"] . '</td>';
	?>

	<form name="form" method="POST" action="update.php">
	     <input type="checkbox" value="check" style=""><br><br>
	</form>

	<?php
				echo '<tr>';	
			}
		}
		echo "</td></tr>";
		echo "</table>";
		$conn->close();
	?>

	<input type="button" value="Submit" onclick="location.href='update.php'"; style="font-family:Georgia; background-color: white; width:100px; height:30px; font-size:20px; position:absolute; left:47%; top:90%; color:#000000; border:none; border-radius: 10px;"/>

	<input type="button" value="Back" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
</body>
</html>