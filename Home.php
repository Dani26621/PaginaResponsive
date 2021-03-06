<meta name="viewport" content="width=device-width, 
initial-scale=1.0">  

<html>
    <head>
        <title>Hanss-g Bar</title>
        <link rel="icon" href="https://img.icons8.com/emoji/100/000000/sandwich-emoji.png">
        <link rel="stylesheet" type="text/css" href="Responsive.css?v=<?php echo time(); ?>">
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
            <a href="Home.php"><ion-icon name="home" id ="home"></ion-icon><br><b id="NomeH">home</b></a>
            <a href="Ordini.php"><ion-icon name="fast-food" id="food" ></ion-icon><br><b id="NomeO">ordini</b></a>
            <a href="Account.php"><ion-icon name="person" id="user"></ion-icon><br><b id="NomeA">account</b></a>
            <a href="Settings.php"><ion-icon name="settings" id="setting"></ion-icon><br><b id="NomeS">settings</b></a>
        </nav>

        <div class="Intestazione2">
            <div class="NomeLogo">
                <h1>Hanns-g bar</h1>
                <p>Ordina, mangia, rilassati</p>
            </div>
            <img src="https://img.icons8.com/emoji/80/000000/sandwich-emoji.png"/>
        </div>

        <center>
            <img class="img" src="Notizie.png">
        </center>

        <div class="sfondo">
            <center>
                <div class="test">
    
                    <div class="Notizie">
                        <h1>Notizie</h1>
                    </div>
        
                    <div class="Contenitore">
            
                        <div class="Uno">
                            <h5 id ="date"></h5>
                            <h4>Ciao! Arriva la nuova webapp del giua bar</h4>
                            <p>Nuove notizie presto aggiunte!</p>
                        </div>
            
                        <div class="Due">
                            <h5 id ="date1"></h5>
                            <h4>Ciao! Qui le cose procedono molto bene</h4>
                            <p>Nuove notizie presto aggiunte!</p>
                        </div>
            
                        <div class="Tre">
                            <h5 id ="date2"></h5>
                            <h4>Ciao! Qui le cose procedono molto bene</h4>
                            <p>Nuove notizie presto aggiunte!</p>
                        </div>
            
                    </div>
    
                    <div class="button">
                        <button>Leggi tutto</button>
                    </div>
                </div>
            </center>
        </div>
    
        <script>
            n =  new Date();
            y = n.getFullYear();
            m = n.toLocaleString('default', { month: 'long' });
            d = n.getDate();
            document.getElementById("date").innerHTML = d + " " + m + " " + y;
            document.getElementById("date1").innerHTML = d + " " + m + " " + y;
            document.getElementById("date2").innerHTML = d + " " + m + " " + y;
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>