<?php/Applications/XAMPP/xamppfiles/htdocs/library/conn.php
    $servername = "localhost";
    $username = "root";
    $password = "0000";
    $dbname = "library";
     
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("connecting error: " . $conn->connect_error);
    } 
?>
