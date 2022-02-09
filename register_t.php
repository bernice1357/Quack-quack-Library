<?php
    $conn=mysqli_connect("localhost","root","0000","library") or die("連線失敗");
    if (!$conn){
        echo "連線 MySQL 失敗: " . mysqli_connect_error();
    }
    $account=$_POST['account'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO `visitors` (`visitor_name`, `account`, `password`,`issuance_date`,`visitor_id`) VALUES ('$username', '$account', '$password', '2021-06-14', '000')";
    mysqli_query($conn,"$sql");

    if(mysqli_affected_rows($conn)>0)
    {
        echo "註冊成功"; 
    }elseif(mysqli_affected_rows($conn)==0){
        echo "no data";
    }else{
        echo "<br>" . "failed". mysqli_error($conn);
    }

    header("Location: http://localhost/library/visitor.php", true, 301); 
    exit();          
?>