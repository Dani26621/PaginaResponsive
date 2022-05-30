<meta name="viewport" content="width=device-width, 
initial-scale=1.0">  

<html>
    <head>
        <title>Hanss-g Bar</title>
        <link rel="icon" href="https://img.icons8.com/emoji/100/000000/sandwich-emoji.png">
        <link rel="stylesheet" type="text/css" href="Index.css?v=<?php echo time(); ?>">
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

                    <form action="index.php" method="POST" id="form">
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
                                <input type="password" class="effect-1" name="password" id ="password1" placeholder="Inserire password" 
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Deve contenere almeno un numero, una lettera maiuscola
                                e minuscola e almeno 8 o più caratteri" required>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <div class="col-3">
                                <input type="password" class="effect-1" name="password" id ="password2" placeholder="Conferma password" 
                                onkeyup="validate_password()" required>
                                <span class="focus-border"></span>
                            </div>
                            <br><br>

                            <input type="submit" value="Crea account" id="create" name="esegui" class="btn btn-primary">
                            <input type="reset" value="Resetta campi"  class="btn btn-primary">
                        </center>   
                    </form>
                </div>
                
                <img src="Register.png" class="immagine">

            <div> 
        </center>

        <center>
            <span id="wrong_pass_alert"></span>
        <center>

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
                        echo "<center><p style=''>Registrazione effettuata con successo ✔<br>
                        Ti stiamo indirizzando al login<br><img class='spinner' src='spinner.gif'> </p></center>";
                        header("location: login.php");
                    }
                    else
                    echo "Errore durante la registrazione $query. " . $conn->error;             
                }
            ?>
        </div>

        <script>
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;

            function validate_password() {
 
                var pass = document.getElementById('password1').value;
                var confirm_pass = document.getElementById('password2').value;
                if (pass != confirm_pass) {
                    document.getElementById('wrong_pass_alert').style.color = 'red';
                    document.getElementById('wrong_pass_alert').innerHTML= 'Le password non corrispondono ✘';
                    document.getElementById('create').disabled = true;
                    document.getElementById('create').style.opacity = (0.4);
                } else {
                    document.getElementById('wrong_pass_alert').style.color = 'green';
                    document.getElementById('wrong_pass_alert').innerHTML = 'Le password corrispondono ✔';
                    document.getElementById('create').disabled = false;
                    document.getElementById('create').style.opacity = (1);
                }
            }
        </script>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>