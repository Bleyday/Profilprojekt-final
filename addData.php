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
    <nav class="navigation">
        <a class="logreg" href="welcome.php"> <?= $_SESSION["user"] ?></a> <!-- nötig?????--> 
        <a class="logreg" href="logout.php">Ausloggen</a>
        <a class="logreg" href="indexloggedin.php">Startseite</a>
        <a class="logreg" href="addData.php">Accountdaten hinzufügen</a>
    </nav>
    
    <h1 id="sitetitle">Accountdaten hinzufügen</h1>
    

        <form action="writeindb.php" method="post">
        <div class="login_daten_frame">
            <label class="anzeige" for="benutzername1"><b>Benutzername</b></label><br>
            <input class="eingabefeld" type="text" placeholder="Username" name="eingabeuser" required><br>
            <label class="anzeige" for="passwort"><b>Passwort</b></label><br>
            <input class="eingabefeld" type="password" placeholder="Password" name="eingabepass" requiered><br>

            <input class="submit" type="submit" value="Einloggen">
        </div>
    </form>
    
</body>
    
</html>
<?php
} else{
    header("Location:index.html");
}
?>
