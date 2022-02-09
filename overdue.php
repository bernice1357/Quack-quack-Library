<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="overdue.css"/>
	<title>Overdue List</title>
</head>
<body>
	<div class="head">
		<h1>Overdue List</h1>
	</div>
	<table style="background: #FFF8DC; border:3px #cccccc solid; color: #000000" cellpadding="10" border='1'>
		<tr><th>Visitor Name</th><th>Visitor ID</th><th>Book</th><th>Borrowed Date</th></tr>
		<?php
			include("conn.php");
			$sql = "SELECT visitor_name, visitor_id, book_name, borrow_date FROM overdue";
			$result = $conn->query($sql);
					 
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()) {
					echo '<td>' . $row["visitor_name"] . '</td>';
					echo '<td>' . $row["visitor_id"] . '</td>';
					echo '<td>' . $row["book_name"] . '</td>';
					echo '<td>' . $row["borrow_date"] . '</td>';
					echo '<tr>';	
				}
			} else {
				echo "0 结果";
			}
			$conn->close();
		?>
	</table>

	<input type="button" value="Back" onclick="location.href='employee.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
</body>
</html>