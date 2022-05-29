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
            <a href="login.php"><ion-icon name="log-in" id= "login"></ion-icon><br><b id="NomeL">login</b></a>
            <a href="index.php"><ion-icon name="person-add" id= "register"></ion-icon><br><b id="NomeR">Registrati</b></a>
        </nav>

        <div class="Intestazione2">
            <div class="NomeLogo">
                <h1>Hanns-g bar</h1>
                <p>Ordina, mangia, rilassati</p>
            </div>
            <img src="https://img.icons8.com/emoji/80/000000/sandwich-emoji.png"/>
        </div>

        <center>
            
            <div class="Contenitore">

                <div class="ContenitoreForm">

                    <form action="index.php" method="POST" onsubmit="CreaAccount()">
                        <center>
                            <h2>Registrati</h2>

                            <div class="col-3">
                                <input type="email" class="effect-1" name="email" id ="email" placeholder="Inserire email" required>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <div class="col-3">
                                <input type="text" class="effect-1" name="username" id ="username" placeholder="Inserire username" required>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <div class="col-3">
                                <input type="password" class="effect-1" name="password" id ="password1" placeholder="Inserire password" required>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <div class="col-3">
                                <input type="password" class="effect-1" //aggiungereNamePassword id ="password2" placeholder="Conferma password" //aggiungereRequired>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <input type="submit" value="Crea account" name="esegui" class="btn btn-primary">
                            <input type="reset" value="Resetta campi"  class="btn btn-primary">
                        </center>   
                    </form>
                </div>
                
                <img src="Register.png" class="immagine">

            <div> 
        </center>

        <div class="RegSuccesso">
            <?php

                if(isset($_POST['esegui'])){

                    require_once('Connect.php');

                    $email= $conn->real_escape_string($_POST['email']);
                    $username = $conn->real_escape_string($_POST['username']);
                    $password = $conn->real_escape_string($_POST['password']);
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $query= "INSERT INTO utenti (email, username, password) VALUES ('$email', '$username', '$hashed_password')";

                    if($conn->query($query) === true){
                        echo "<center><p>Registrazione effettuata con successo ✔</p></center>";
                    }
                    else
                    echo "Errore durante la registrazione $query. " . $conn->error;
                }
            ?>
        </div>

        <script>

        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>