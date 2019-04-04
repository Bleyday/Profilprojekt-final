<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] =="verified"){
?>
    <!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>TAP-Manager</title>
  </head>
  <body>
<nav id="navigation">
    <a class="btn" href="welcome.php"> <?= $_SESSION["user"] ?></a>   
    <a class="btn" href="logout.php">Ausloggen</a>
    <a class="btn2 active" href="index.html">Startseite</a>       
    <a class="btn2" href="die%20_entwickler.html">
    Die Entwickler</a>       
</nav>
<div class="hr2"></div>
<h1 id="sitetitle">TAP-Manager</h1>
    <div id="welcomebox">
        <img id="welcomepic" src="img/safepw.jpg" alt="safekey">
        <div class="infobox">
        <p class="standarttext">Willkommen beim TAP-Manager!<br> Wir sind ihre Spezialisten, wenn es um die sichere Lagerung ihrer Persönlichen Daten geht.</p>  
        </div>
    </div>
    
    <div class="infobox2">
        <p class="mini_ueberschrift">Wofür steht TAP?</p>
        <p class="standarttext">
        TAP steht für Anfangsbuchstaben der Entwickler <b>T</b>jen Kokot, <b>A</b>ndré Siggelkow und
        <b>P</b>eirui Zhang. (Genaueres zu uns finden Sie unter "Entwickler".). (Genaueres zu uns finden Sie unter "Entwickler".)
        </p>
    </div>
      
    <div class="infobox2">
        <p class="mini_ueberschrift">Wie funktioniert unser Tool?</p>
        <p class="standarttext">
        Unser Tool zur Sicherung Ihrer sensiblen Login Daten, arbeitet mit einer MySQL Datenbank, wo Ihre Daten verschlüsselt auf einem mit Firewall abgesicherten Server liegt und einem HTTPS Protokoll [...].
        </p>
    </div>
      
    <div class="infobox2">
        <p class="mini_ueberschrift">Wie werden meine Daten genau gesichert?</p>
        <p class="standarttext">
        Unser Tool zur Sicherung Ihrer sensiblen Login Daten, arbeitet mit einer MySQL Datenbank, wo Ihre Daten verschlüsselt auf einem mit Firewall abgesicherten Server liegt und einem HTTPS Protokoll [...].
        </p>
    </div>
<div class="hr"></div>
<footer class="footer">
    <p class="footertext">© 2019 - TAP | <a href="impressum.html">Impressum</a> | <a href="datenschutz.html">Datenschutz</a></p><br>
    <img class="icons" src="img/email.png"> <p class="footertext">beispiel@email.de</p><br>
    <img src="https://img.icons8.com/ios/16/000000/phone-filled.png"><p class="footertext">1234-1234567</p><br>
</footer>
  </body>
    
</html>
<?php
} else{
    header("Location:index.html");
}
?>
 

