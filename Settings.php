<meta name="viewport" content="width=device-width, 
initial-scale=1.0">  

<html>
    <head>
        <title>Hanss-g Bar</title>
        <link rel="icon" href="https://img.icons8.com/emoji/100/000000/sandwich-emoji.png">
        <link rel="stylesheet" type="text/css" href="Settings.css?v=<?php echo time(); ?>">
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

        <center>
            <diV class="test" id="test">

                <h1>Impostazioni</h1>

                <div class="Contenitore">

                    <div class="Generali" onclick="EntraGenerali()">
                        <div>
                            <ion-icon name="cog-sharp" class="Icona1"></ion-icon>
                        </div>
                        <p>Generali</p>
                        <ion-icon name="chevron-forward-sharp" id="frecciaD"></ion-icon>
                    </div>
    
                    <div class="Contattaci" onclick="EntraContattaci()">
                        <div>
                            <ion-icon name="chatbubbles-sharp" class="Icona1"></ion-icon>
                        </div>
                        <p>Contattaci</p>
                        <ion-icon name="chevron-forward-sharp" id="frecciaD"></ion-icon>
                    </div>
    
                    <div class="Valutaci" onclick="EntraValutaci()">
                        <div>
                            <ion-icon name="star-sharp" class="Icona1"></ion-icon>
                        </div>
                        <p>Valutaci</p>
                        <ion-icon name="chevron-forward-sharp" id="frecciaD"></ion-icon>
                    </div>
    
                    <div class="Versione" onclick="EntraVersione()">
                        <div>
                            <ion-icon name="cloud-download-sharp" class="Icona1"></ion-icon>
                        </div>
                        <p>Versione</p>
                        <ion-icon name="chevron-forward-sharp" id="frecciaD"></ion-icon>
                    </div>
    
                </div>

            </diV>
        </center>

        <!--Appare quando si clicca l'impostazione-->
        <center>
            <div class="DentroVersione" id="Versione">

                <div class="Indietro">
                    <ion-icon name="chevron-back-sharp" id="FrecciaS"  onclick="EsciVersione()"></ion-icon>
                    <p  onclick="EsciVersione()">Impostazioni</p>
                </div>

                <div class="Descrizione">
                    <img src="Versione.png">
                    <p>La verisone attuale della webapp è la 1.0!</p>
                </div>
            </div>

            <div class="DentroContattaci" id="Contattaci">

                <div class="Indietro">
                    <ion-icon name="chevron-back-sharp" id="FrecciaS"  onclick="EsciContattaci()"></ion-icon>
                    <p  onclick="EsciContattaci()">Impostazioni</p>
                </div>

                <div class="Descrizione1">
                    <center><img src="contatti.png"></center>
                    <p>Per eventuali problemi riguardanti il funzionamento della webapp non esitare a contattarci!<br>
                    <br>
                    <a href="mailto:dany26621@gmail.com">Inviaci un'email!</a><br>
                    Telefono: 3471219702 </p>
                </div>

            </div>

            <div class="DentroValutaci" id="Valutaci">

                <div class="Indietro">
                    <ion-icon name="chevron-back-sharp" id="FrecciaS"  onclick="EsciValutaci()"></ion-icon>
                    <p  onclick="EsciValutaci()">Impostazioni</p>
                </div>

                <div class="Descrizione2" id="Descrizione2">

                    <img src="Valutaci.webp">

                    <div>
                        <p>Dai un voto alla nostra webapp!</p>

                        <div class="ContenitoreStelle">
                            <ion-icon name="star" id="Stella1" onclick="Valuta1Stella()"></ion-icon>
                            <ion-icon name="star" id="Stella2" onclick="Valuta2Stella()"></ion-icon>
                            <ion-icon name="star" id="Stella3" onclick="Valuta3Stella()"></ion-icon>
                            <ion-icon name="star" id="Stella4" onclick="Valuta4Stella()"></ion-icon>
                            <ion-icon name="star" id="Stella5" onclick="Valuta5Stella()"></ion-icon>
                        </div>

                        <center>
                            <Button class="Button" onclick="invia()">Invia!</Button>
                            <p id ="Error">Attenzione! Nessuna valutazione inserita</p>
                        </center>
                    </div>

                </div>

                <div id="Descrizione22">

                    <img src="Feedback.png">

                    <div>
                        <h1>Grazie per il tuo feedback!</h1>
                        <ion-icon name="heart" id ="cuore"></ion-icon>
                    </div>

                </div>

            </div>

            <div class="DentroGenerali" id="Generali">

                <div class="Indietro">
                    <ion-icon name="chevron-back-sharp" id="FrecciaS"  onclick="EsciGenerali()"></ion-icon>
                    <p  onclick="EsciGenerali()">Impostazioni</p>
                </div>

                <div class="Descrizione3" id="Descrizione3">

                    <div class="ContenitoreProfili">

                        <h1>Sviluppatori...</h1>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/_dani.picciau_?utm_medium=copy_link">
                                <p class="Sviluppatore">Picciau Daniele</p>
                                <p class="Ruolo">Front-End developer</p>
                            </a>
                        </div>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/giacomo.porcu?utm_medium=copy_link">
                                <p class="Sviluppatore">Porcu Giacomo</p>
                                <p class="Ruolo">Front-End developer</p>
                            </a>
                        </div>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/edo_cucchedda?utm_medium=copy_link">
                                <p class="Sviluppatore">Cucchedda Edoardo</p>
                                <p class="Ruolo">Front-End developer</p>
                            </a>
                        </div>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/noemi_spano_?utm_medium=copy_link">
                                <p class="Sviluppatore">Spano Noemi</p>
                                <p class="Ruolo">Back-End developer</p>
                            </a>
                        </div>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/simone.calistri?utm_medium=copy_link">
                                <p class="Sviluppatore">Calistri Simone</p>
                                <p class="Ruolo">Back-End developer</p>
                            </a>
                        </div>
                        <div class ="Profili">
                            <img src="Profili.png">
                            <a target="_blank" href="https://instagram.com/mulas_gabriele?utm_medium=copy_link">
                                <p class="Sviluppatore">Mulas Gabriele</p>
                                <p class="Ruolo">Back-End developer</p>
                            </a>
                        </div>
                    </div>

                    <img class="Pc" src="Generali.png">
                    
                </div>

            </div>
        </center>

        <script>
            var Test = document.getElementById("test");

            var Versione = document.getElementById("Versione");
            function EntraVersione(){

                if (Test.style.display == "block"){
                    Test.style.display = "none";  
                    Versione.style.display = "block";
                }
                else                
                Test.style.display = "none";
                Versione.style.display = "block";   
            }
            function EsciVersione(){

                if (Test.style.display == "none"){
                    Test.style.display = "block";  
                    Versione.style.display = "none";
                }
                else                
                Test.style.display = "block";
            }

            var Contattaci = document.getElementById("Contattaci");
            function EntraContattaci(){

                if (Test.style.display == "block"){
                    Test.style.display = "none";  
                    Contattaci.style.display = "block";
                }
                else                
                Test.style.display = "none";
                Contattaci.style.display = "block";   
            }
            function EsciContattaci(){

                if (Test.style.display == "none"){
                    Test.style.display = "block";  
                    Contattaci.style.display = "none";
                }
                else                
                Test.style.display = "block";
            }

            var Valutaci = document.getElementById("Valutaci");
            function EntraValutaci(){

                if (Test.style.display == "block"){
                    Test.style.display = "none";  
                    Valutaci.style.display = "block";
                }
                else                
                Test.style.display = "none";
                Valutaci.style.display = "block";   
            }
            function EsciValutaci(){

                if (Test.style.display == "none"){
                    Test.style.display = "block";  
                    Valutaci.style.display = "none";
                }
                else                
                Test.style.display = "block";
            }

            var Generali = document.getElementById("Generali");
            function EntraGenerali(){
                if (Test.style.display == "block"){
                    Test.style.display = "none";  
                    Generali.style.display = "block";
                }
                else         
                Test.style.display = "none";
                Generali.style.display = "block";   
            }

            function EsciGenerali(){
                if (Test.style.display == "none"){
                    Test.style.display = "block";  
                    Generali.style.display = "none";
                }
                else                
                Test.style.display = "block";
            }

            //Feedback
            var Errore = document.getElementById("Error");
            var Descrizione2 = document.getElementById("Descrizione2");
            var Descrizione22 = document.getElementById("Descrizione22");
            function invia(){

                if(Stella1.style.color == "gold"){
                    Errore.style.display = "none";
                    Descrizione2.style.display = "none";
                    Descrizione22.style.display = "flex";
                }
                else if(Stella1.style.color != "gold")
                Errore.style.display = "block";

            }

            //Funzionamento di valutazione stelle
            var Stella1 = document.getElementById("Stella1");
            var Stella2 = document.getElementById("Stella2");
            var Stella3 = document.getElementById("Stella3");
            var Stella4 = document.getElementById("Stella4");
            var Stella5 = document.getElementById("Stella5");

            function Valuta1Stella(){
                if(Stella1.style.color != "red"){
                    Stella1.style.color ="gold";
                    Stella2.style.color ="#598596";
                    Stella3.style.color ="#598596";
                    Stella4.style.color ="#598596";
                    Stella5.style.color ="#598596";
                }
            }    

            function Valuta2Stella(){
                if(Stella2.style.color != "red"){
                    Stella1.style.color ="gold";
                    Stella2.style.color ="gold";
                    Stella3.style.color ="#598596";
                    Stella4.style.color ="#598596";
                    Stella5.style.color ="#598596";
                }
            }            
            function Valuta3Stella(){
                if(Stella3.style.color != "red"){
                    Stella1.style.color ="gold";
                    Stella2.style.color ="gold";
                    Stella3.style.color ="gold";
                    Stella4.style.color ="#598596";
                    Stella5.style.color ="#598596";
                }
            }          
            function Valuta4Stella(){
                if(Stella4.style.color != "red"){
                    Stella1.style.color ="gold";
                    Stella2.style.color ="gold";
                    Stella3.style.color ="gold";
                    Stella4.style.color ="gold";
                    Stella5.style.color ="#598596";
                }
            }
            function Valuta5Stella(){
                if(Stella5.style.color != "red"){
                    Stella1.style.color ="gold";
                    Stella2.style.color ="gold";
                    Stella3.style.color ="gold";
                    Stella4.style.color ="gold";
                    Stella5.style.color ="gold";
                }
            }
        </script>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>