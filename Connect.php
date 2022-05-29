<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "hanssgbar";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) die(mysqli_connect_error()); 
?>