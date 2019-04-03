<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] =="verified"){
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="user_style.css">
    <title>TAP-Manager</title>
  </head>
<body>
    <nav id="navigation">
        <a class="btn" href="logout.php">Ausloggen</a>
        <a class="btn active" href=""> <?= $_SESSION["user"] ?></a> <!-- nötig?????-->        
        <a class="btn" href="indexloggedin.php">Startseite</a>
		<a class="btn2" href="addData.php">Accountdaten hinzufügen</a>
    </nav>
    <div class="hr2"></div>
    <h1 id="sitetitle">Willkommen <?= $_SESSION["user"]?></h1>
    
    <?php include "showData.php"; ?>


<div class="hr"></div>
</body>
 <footer class="footer">
    <p class="footertext">© 2019 - TAP | <a href="#">Impressum</a> | <a href="datenschutz.html">Datenschutz</a></p><br>
    <img class="icons" src="img/email.png"> <p class="footertext"><p class="footertext">beispiel@email.de</p><br>
    <img src="https://img.icons8.com/ios/16/000000/phone-filled.png"><p class="footertext">1234-1234567</p><br>
</footer>  
</html>
<?php
} else{
    header("Location:index.html");
}
?>