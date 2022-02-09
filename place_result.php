<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="place_result.css"/>
	<title>Connecting Page</title>
</head>
<body>
	<div class="head">
		<h1>Searching Result</h1>
	</div>
	<table style="background: #FFF8DC; border:3px #cccccc solid; color: #000000" cellpadding="10" border='1'>
		<tr><th>Book Name</th><th>Place</th><th>Classification</th></tr>
		<?php
			include("conn.php");

			$keyword = $_POST['search'];

			if($keyword!=NULL)
			{
				$sql = "SELECT *  FROM place WHERE book_name LIKE '%$keyword%'";
				$result = $conn->query($sql);
						 
				if ($result->num_rows > 0){
					while($row = $result->fetch_assoc()) {
						echo '<td>' . $row["book_name"] . '</td>';
						echo '<td>' . $row["book_place"] . '</td>';
						echo '<td>' . $row["classification"] . '</td>';
						echo '<tr>';	
					}
				}
				$conn->close();
			}
		?>
	</table>

	<input type="button" value="Submit" onclick="location.href='Home.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:relative; left:850px; top:40px; color:#000000; border:none"/>

	<input type="button" value="Back" onclick="location.href='employee.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
</body>
</html>