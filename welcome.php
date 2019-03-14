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
    
    <h1 id="sitetitle">Willkommen <?= $_SESSION["user"]?></h1>
    
    <?php include "showData.php"; ?>
</body>
    
</html>
<?php
} else{
    header("Location:index.html");
}
?>