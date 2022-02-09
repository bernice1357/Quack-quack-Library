<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connecting page</title>
	</head>
	<body>
		<?php		
			require('conn.php');

			$account=$_POST['account'];
			$password=$_POST['password'];
			$identity=$_POST['identity'];

			
			
			if($identity=="Visitor"){
				$sql="SELECT account, password from visitors where account = '$account'";
			    $result=$conn->query($sql);
			    $attr = $result->fetch_row();

			    if($password != "" && $password == $attr[0]){
			    	header("Location: http://localhost/library/visitor.php", true, 301);
			    }else{
			    	header("Location: http://localhost/library/Login.php", true, 301);
			    }
			}else{
				$sql="SELECT staff_account, staff_password from staff where staff_account = '$account'";
			    $result=$conn->query($sql);
			    $attr = $result->fetch_row();

			    if($password != "" && $password == $attr[0]){
			    	header("Location: http://localhost/library/employee.php", true, 301);
			    }else{
			    	header("Location: http://localhost/library/Login.php", true, 301);
			    }				
			}			
		?>
	</body>
</html>
