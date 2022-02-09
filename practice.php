<?php
    $servername = "localhost";
    $username = "root";
    $password = "0000";
    $dbname = "library";
     
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
?>