<meta name="viewport" content="width=device-width, 
initial-scale=1.0">  

<html>
    <head>
        <title>Hanss-g Bar</title>
        <link rel="icon" href="https://img.icons8.com/emoji/100/000000/sandwich-emoji.png">
        <link rel="stylesheet" type="text/css" href="Index.css">
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
            <a href="#index.php"><ion-icon name="log-in-outline" id= "login"></ion-icon><br><b id="NomeL">login</b></a>
            <a href="index.php"><ion-icon name="person-add" id= "register"></ion-icon><br><b id="NomeR">Registrati</b></a>
        </nav>

        <div class="Intestazione2">
            <div class="NomeLogo">
                <h1>Hanns-g bar</h1>
                <p>Ordina, mangia, rilassati</p>
            </div>
            <img src="https://img.icons8.com/emoji/80/000000/sandwich-emoji.png"/>
        </div>





        <form action="register.php" method="POST">

            <h2>Registrati<h2>

            <p>Email</p>
            <input type="email" name="email" id ="email" placeholder="Inserisci la tua email" required>

            <p>Username</p>
            <input type="text" name="username" id ="username" placeholder="Inserisci il tuo username" required>

            <p>Password</p>
            <input type="password" name="password" id ="password" placeholder="Inserisci la tua password" required>

            <input type="submit" value="invia">

        </form>

    
        <script>
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>