<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "hanssgbar";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) die(mysqli_connect_error()); 

/*
    $host = "sql309.epizy.com";
    $user = "epiz_31847180";
    $pass = "foZq47cLuYFJr";
    $db = "epiz_31847180_hanssgbar";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) die(mysqli_connect_error()); 

    mysqli_query($conn, "
        CREATE TABLE utenti(
            ID_utente int AUTO_INCREMENT,
            email varchar(50),
            username varchar(30),
            password varchar(255),
            PRIMARY KEY (ID_utente)
        );
    ");
*/
?>