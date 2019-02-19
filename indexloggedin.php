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
<nav class="navigation">
    <a class="logreg" href="welcome.php"> <?= $_SESSION["user"] ?></a>   
    <a class="logreg" href="logout.php">Ausloggen</a>    
      
</nav>
<h1 id="sitetitle">TAP-Manager</h1>
    <div id="welcomebox">
        <img id="welcomepic" src="img/safepw.jpg" alt="safekey">
        <div class="infobox">
        <p class="standarttext">Willkommen beim TAP-Manager!<br> Wir sind ihre Spezialisten, wenn es um sichere Lagerung ihrer Persönlichen Daten geht.</p>  
        </div>
    </div>

  </body>
    
</html>
<?php
} else{
    header("Location:index.html");
}
?>
 

