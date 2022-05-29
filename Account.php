<?php
    session_start();

    if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
        header("location: login.php");
        exit;
    }
?>

<meta name="viewport" content="width=device-width, 
initial-scale=1.0">  

<html>
    <head>
        <title>Hanss-g Bar</title>
        <link rel="icon" href="https://img.icons8.com/emoji/100/000000/sandwich-emoji.png">
        <link rel="stylesheet" type="text/css" href="Account.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    </head>

    <body>

        <nav class="nav">
            <div class="Intestazione1">
                <div class="NomeLogo">
                    <h1>Hanns-g bar</h1>
                    <p>Ordina, mangia, rilassati</p>
                </div>
                <img src="https://img.icons8.com/emoji/80/000000/sandwich-emoji.png"/>
            </div>
            <a href="Home.html"><ion-icon name="home" id ="home"></ion-icon><br><b id="NomeH">home</b></a>
            <a href="Ordini.html"><ion-icon name="fast-food" id="food" ></ion-icon><br><b id="NomeO">ordini</b></a>
            <a href="Account.php"><ion-icon name="person" id="user"></ion-icon><br><b id="NomeA">account</b></a>
            <a href="Settings.html"><ion-icon name="settings" id="setting"></ion-icon><br><b id="NomeS">settings</b></a>
        </nav>

        <div class="Benvenuto">
            <?php
                echo "Bentornato " . $_SESSION["username"]."!";
            ?>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>