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
        <a class="logreg" href=""> <?= $_SESSION["user"] ?></a> <!-- nötig?????--> 
        <a class="logreg" href="logout.php">Ausloggen</a>
        <a class="logreg" href="indexloggedin.php">Startseite</a>
    </nav>
    
    <h1 id="sitetitle">Willkommen <?= $_SESSION["user"]?></h1>
    
    <div class="sidenav">
        <a href="addData.php">Accountdaten hinzufügen</a>
        <a href="">Accountdaten</a>
        <a href="#">Text3</a>
        <a href="#">Text4</a>
        <a href="#">Text5</a>
        <a href="#">Text6</a>
    </div>
    
</body>
    
</html>
<?php
} else{
    header("Location:index.html");
}
?>