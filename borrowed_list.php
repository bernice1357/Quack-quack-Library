<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="borrowed_list.css"/>
	<title>Borrowed List</title>
</head>
<body>
	<div class="head">
		<h1>Books not yet returned</h1>
	</div>	
	<table style="background: #FFF8DC; border:3px #cccccc solid; color: #000000" cellpadding="10" border='1'>
		<tr><th>Book</th><th>Author</th></tr>
		<?php
			include("conn.php");

			$keyword=$_POST['name'];
			$sql = "SELECT book_name, author FROM `borrowed list` WHERE `borrowed_mark` = 1 AND `borrower` LIKE '%$keyword%'";
			$result = $conn->query($sql);
					 
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo '<td>' . $row["book_name"] . '</td>';
					echo '<td>' . $row["author"] . '</td>';
					echo '<tr>';	
				}
			} else {
				echo "0 结果";
			}
			$conn->close();
		?>
	</table>
	<input type="button" value="Back" onclick="location.href='visitor.php'"; style="font-family:Georgia; background-color: transparent; width:100px; height:50px; font-size:25px; position:absolute; left:3%; top:40px; color:#FFFAF0; border:none"/>
</body>
</html>